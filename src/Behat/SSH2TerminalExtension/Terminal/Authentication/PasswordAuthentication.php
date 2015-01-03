<?php
/**
 * @author Tomasz Kunicki
 */
namespace Behat\SSH2TerminalExtension\Terminal\Authentication;

use phpseclib\Net\SSH2;

/**
 * Class PasswordAuthentication
 *
 * @package Behat\SSH2TerminalExtension\Terminal\Authentication
 */
class PasswordAuthentication extends AbstractAuthentication
{
    /**
     * @var string
     */
    private $password;

    /**
     * @param string $username
     * @param $password
     */
    function __construct($username, $password)
    {
        parent::__construct($username);
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    protected function getPassword()
    {
        return $this->password;
    }

    /**
     * @param SSH2 $ssh2
     * @return bool|void
     */
    public function loginForConnection(SSH2 $ssh2)
    {
        return $ssh2->login($this->getUsername(), $this->getPassword());
    }
}
