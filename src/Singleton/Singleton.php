<?php

namespace Amirniyaz\DesignPattern\Singleton;
class Singleton
{
    private static Singleton $instance;

    private function __construct()
    {
    }

    private function __clone(): void
    {
    }

    private function __wakeup(): void
    {

    }

    public static function getInstance(): Singleton
    {
        if (isset(self::$instance)) return self::$instance;
        self::$instance = new self();
        return self::$instance;
    }
}