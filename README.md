[![License](https://poser.pugx.org/timitao/behatssh2terminalextension/license.svg)](https://packagist.org/packages/timitao/behatssh2terminalextension)
[![Latest Stable Version](https://poser.pugx.org/timitao/behatssh2terminalextension/v/stable.svg)](https://packagist.org/packages/timitao/behatssh2terminalextension)
[![Latest Unstable Version](https://poser.pugx.org/timitao/behatssh2terminalextension/v/unstable.svg)](https://packagist.org/packages/timitao/behatssh2terminalextension)
[![Total Downloads](https://poser.pugx.org/timitao/behatssh2terminalextension/downloads.svg)](https://packagist.org/packages/timitao/behatssh2terminalextension)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/db071d75-a71b-46fa-8010-16ac3bd2d743/mini.png)](https://insight.sensiolabs.com/projects/db071d75-a71b-46fa-8010-16ac3bd2d743)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/timitao/behatssh2terminalextension/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/timitao/behatssh2terminalextension/?branch=master)
[![Build Status](https://travis-ci.org/timiTao/BehatSSH2TerminalExtension.svg?branch=master)](https://travis-ci.org/timiTao/BehatSSH2TerminalExtension)


BehatSSH2TerminalExtension
==========================

Extension creating remote terminal to call commands.

This connect via SSH2, but don't use [PHP SSH2 Extension](http://php.net/manual/en/book.ssh2.php)

## Installing extension

The easiest way to install is by using [Composer](https://getcomposer.org):

```bash
$> curl -sS https://getcomposer.org/installer | php
$> php composer.phar require timitao/behatssh2terminalextension='1.0.*'
```

or composer.json

    "require": {
        "timitao/behatssh2terminalextension": "1.0.*"
    },


## Examples

Configuration at [behat.yml.dist](https://github.com/timiTao/BehatSSH2TerminalExtension/blob/master/behat.yml.dist)

Behat scenarion at this [base.feature](https://github.com/timiTao/BehatSSH2TerminalExtension/blob/master/features/base.feature)

## Versioning

Staring version ``1.0.0``, will follow [Semantic Versioning v2.0.0](http://semver.org/spec/v2.0.0.html).

## Contributors

* Tomasz Kunicki [TimiTao](http://github.com/timiTao) [lead developer]
