<?php
/**
 * @author Tomasz Kunicki
 */
namespace Behat\SSH2TerminalExtension\Terminal;

use Behat\TerminalExtension\Terminal\Response\TerminalResponse;
use Behat\TerminalExtension\Terminal\TerminalInterface;
use phpseclib\Net\SSH2;

/**
 * Class SSH2RemoteTerminal
 *
 * @package Behat\SSH2TerminalExtension\Terminal
 */
class SSH2RemoteTerminal implements TerminalInterface
{
    /**
     * @var \phpseclib\Net\SSH2
     */
    protected $SSH2;

    /**
     * @var AuthenticationInterface
     */
    protected $authentication;

    /**
     * @var boolean
     */
    protected $logged = false;

    /**
     * @var string
     */
    protected $workingDirectory;

    /**
     * @param SSH2 $SSH2
     * @param AuthenticationInterface $authentication
     */
    function __construct(SSH2 $SSH2, AuthenticationInterface $authentication)
    {
        $this->SSH2 = $SSH2;
        $this->authentication = $authentication;
    }

    /**
     * @return boolean
     */
    public function isLogged()
    {
        return $this->logged;
    }

    /**
     * @return \phpseclib\Net\SSH2
     */
    public function getSSH2()
    {
        return $this->SSH2;
    }

    /**
     * @return void
     */
    protected function login()
    {
        if ($this->isLogged()) {
            return;
        }
        $this->logged = $this->authentication->loginForConnection($this->getSSH2());
    }

    /**
     * @param string $command
     * @return string
     */
    public function exec($command)
    {
        $this->login();
        $ssh2 = $this->getSSH2();
        $output = $ssh2->exec(sprintf("cd %s && %s", $this->getWorkingDirectory(), $command));

        return new TerminalResponse($output);
    }

    /**
     * Set working directory, from with command will be executed
     *
     * @param string $path
     * @return boolean
     */
    public function setWorkingDirectory($path)
    {
        $this->workingDirectory = $path;
    }

    /**
     * @return string
     */
    protected function getWorkingDirectory()
    {
        return $this->workingDirectory;
    }
}
