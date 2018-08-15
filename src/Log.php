<?php

namespace App;

use Monolog\Handler\NullHandler;
use Monolog\Logger;

class Log
{
    static $instance;

    private function __construct()
    {
    }

    static function getLogger()
    {
        if (null == self::$instance) {
            $logger = new Logger('app');
            $logger->pushHandler(new NullHandler());

            self::$instance = $logger;
        }

        return self::$instance;
    }

    static function debug($message, array $context = [])
    {
        self::getLogger()->addDebug($message, $context);
    }

    static function info($message, array $context = [])
    {
        self::getLogger()->addInfo($message, $context);
    }

    static function notice($message, array $context = [])
    {
        self::getLogger()->addNotice($message, $context);
    }

    static function warning($message, array $context = [])
    {
        self::getLogger()->addWarning($message, $context);
    }

    static function error($message, array $context = [])
    {
        self::getLogger()->addError($message, $context);
    }

    static function critical($message, array $context = [])
    {
        self::getLogger()->addCritical($message, $context);
    }

    static function alert($message, array $context = [])
    {
        self::getLogger()->addAlert($message, $context);
    }

    static function emergency($message, array $context = [])
    {
        self::getLogger()->addEmergency($message, $context);
    }
}
