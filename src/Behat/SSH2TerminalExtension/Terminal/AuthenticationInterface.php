<?php
/**
 * @author Tomasz Kunicki
 * Date: 30.12.2014
 */
namespace Behat\SSH2TerminalExtension\Terminal;

use phpseclib\Net\SSH2;

/**
 * Interface AuthenticationInterface
 *
 * @package Behat\SSH2TerminalExtension\Terminal
 */
interface AuthenticationInterface
{
    /**
     * @param SSH2 $ssh2
     * @return boolean
     */
    public function loginForConnection(SSH2 $ssh2);
}
