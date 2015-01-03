<?php
/**
 * @author Tomasz Kunicki
 */
namespace Behat\SSH2TerminalExtension\Terminal\Authentication;

use phpseclib\Net\SSH2;

/**
 * Class NoPasswordAuthentication
 *
 * @package Behat\SSH2TerminalExtension\Terminal\Authentication
 */
class NoPasswordAuthentication extends AbstractAuthentication
{
    /**
     * @param SSH2 $ssh2
     * @return bool|void
     */
    public function loginForConnection(SSH2 $ssh2)
    {
        return $ssh2->login($this->getUsername());
    }
}
