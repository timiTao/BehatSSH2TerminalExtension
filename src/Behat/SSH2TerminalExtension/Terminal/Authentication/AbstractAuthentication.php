<?php
/**
 * @author Tomasz Kunicki
 */
namespace Behat\SSH2TerminalExtension\Terminal\Authentication;

use Behat\SSH2TerminalExtension\Terminal\AuthenticationInterface;
use phpseclib\Net\SSH2;

/**
 * Class AbstractAuthentication
 *
 * @package Behat\SSH2TerminalExtension\Terminal\Authentication
 */
abstract class AbstractAuthentication implements AuthenticationInterface
{
    /**
     * @var string
     */
    private $username;

    /**
     * @param string $username
     */
    function __construct($username)
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    protected function getUsername()
    {
        return $this->username;
    }

    /**
     * @param SSH2 $ssh2
     * @return boolean
     */
    abstract public function loginForConnection(SSH2 $ssh2);

}
