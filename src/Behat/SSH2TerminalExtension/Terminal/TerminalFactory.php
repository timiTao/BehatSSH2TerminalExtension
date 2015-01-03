<?php
/**
 * @author Tomasz Kunicki
 */
namespace Behat\SSH2TerminalExtension\Terminal;

use Behat\SSH2TerminalExtension\Exception\SSH2Exception;
use Behat\SSH2TerminalExtension\Terminal\Authentication\NoPasswordAuthentication;
use Behat\SSH2TerminalExtension\Terminal\Authentication\PasswordAuthentication;
use Behat\SSH2TerminalExtension\Terminal\Authentication\RSAKeyAuthentication;
use Behat\TerminalExtension\Terminal\TerminalFactoryInterface;
use Behat\TerminalExtension\Terminal\TerminalInterface;
use phpseclib\Crypt\RSA;
use phpseclib\Net\SSH2;

/**
 * Class TerminalFactory
 *
 * @package Behat\SSH2TerminalExtension\Terminal
 */
class TerminalFactory implements TerminalFactoryInterface
{
    /**
     *
     */
    const NAME = 'ssh2';

    /**
     * @return string
     */
    public function getSystemName()
    {
        return TerminalFactory::NAME;
    }

    /**
     * @param array $options
     * @return TerminalInterface
     */
    public function factory($options)
    {
        $host = isset($options['host']) ? $options['host'] : null;
        $port = isset($options['port']) ? $options['port'] : 22;
        $timeout = isset($options['timeout']) ? $options['timeout'] : 10;

        $authenticationConfig = isset($options['authentication']) ? $options['authentication'] : [];

        $ssh2 = new SSH2($host, $port, $timeout);

        $authentication = $this->factoryAuthentication($authenticationConfig);

        return new SSH2RemoteTerminal($ssh2, $authentication);
    }

    /**
     * @param $config
     * @return NoPasswordAuthentication|PasswordAuthentication|RSAKeyAuthentication|null
     * @throws SSH2Exception
     */
    protected function factoryAuthentication($config)
    {
        $type = $config['type'];
        $username = $config['username'];

        $authentication = null;
        switch ($type) {
            case 'password' :
            {
                $password = $config['password'];
                $authentication = new PasswordAuthentication($username, $password);
                break;
            }
            case 'no_password' :
            {
                $authentication = new NoPasswordAuthentication($username);
                break;
            }
            case 'rsa' :
            {
                $file = $config['file'];
                $keyRSA = new RSA();
                $keyRSA->loadKey(file_get_contents($file));
                $authentication = new RSAKeyAuthentication($username, $keyRSA);
                break;
            }
            case 'rsa_password' :
            {
                $file = $config['file'];
                $keyRSA = new RSA();
                $keyRSA->loadKey(file_get_contents($file));

                $password = $config['password'];
                $keyRSA->setPassword($password);
                $authentication = new RSAKeyAuthentication($username, $keyRSA);
                break;
            }
        }

        if (is_null($authentication)) {
            throw new SSH2Exception(sprintf("No authentication for given type '%s'", $type));
        }

        return $authentication;
    }
}
