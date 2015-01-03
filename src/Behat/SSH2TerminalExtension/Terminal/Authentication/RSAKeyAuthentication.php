<?php
/**
 * @author Tomasz Kunicki
 */
namespace Behat\SSH2TerminalExtension\Terminal\Authentication;

use phpseclib\Crypt\RSA;
use phpseclib\Net\SSH2;

/**
 * Class RSAKeyAuthentication
 *
 * @package Behat\SSH2TerminalExtension\Terminal\Authentication
 */
class RSAKeyAuthentication extends AbstractAuthentication
{
    /**
     * @var RSA
     */
    protected $keyRSA;

    /**
     * @param string $username
     * @param RSA $keyRSA
     */
    function __construct($username, RSA $keyRSA)
    {
        parent::__construct($username);
        $this->keyRSA = $keyRSA;
    }

    /**
     * @return \phpseclib\Crypt\RSA
     */
    protected function getKeyRSA()
    {
        return $this->keyRSA;
    }

    /**
     * @param SSH2 $ssh2
     * @return boolean
     */
    public function loginForConnection(SSH2 $ssh2)
    {
        return $ssh2->login($this->getUsername(), $this->getKeyRSA());
    }
}
