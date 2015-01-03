[![License](https://poser.pugx.org/timitao/behatssh2terminalextension/license.svg)](https://packagist.org/packages/timitao/behatssh2terminalextension)
[![Latest Stable Version](https://poser.pugx.org/timitao/behatssh2terminalextension/v/stable.svg)](https://packagist.org/packages/timitao/behatssh2terminalextension)
[![Latest Unstable Version](https://poser.pugx.org/timitao/behatssh2terminalextension/v/unstable.svg)](https://packagist.org/packages/timitao/behatssh2terminalextension)
[![Total Downloads](https://poser.pugx.org/timitao/behatssh2terminalextension/downloads.svg)](https://packagist.org/packages/timitao/behatssh2terminalextension)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/55f406f0-205e-40a9-8af6-2d70e96665e4/mini.png)](https://insight.sensiolabs.com/projects/55f406f0-205e-40a9-8af6-2d70e96665e4)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/timitao/behatssh2terminalextension/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/timitao/behatssh2terminalextension/?branch=master)
[![Build Status](https://travis-ci.org/timiTao/BehatSSH2TerminalExtension.svg?branch=master)](https://travis-ci.org/timiTao/BehatSSH2TerminalExtension)


BehatSSH2TerminalExtension
==========================

Extension creating terminal to call commands. Default, only local terminal call.

Available to add new factories like [local terminal](https://github.com/timiTao/BehatSSH2TerminalExtension/blob/master/src/Behat/TerminalExtension/Config/services.yml#L27)

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
