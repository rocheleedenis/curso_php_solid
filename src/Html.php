<?php

namespace Solid\Html;

class Html
{
    public function __call(string $name, array $arguments)
    {
        return $this->createTags($name, $arguments);
    }

    public static function __callStatic(string $name, array $arguments)
    {
        return self::createTags($name, $arguments);
    }

    protected static function createTags(string $name, array $arguments)
    {
        $class = '\Solid\Html\Tag\\' . ucfirst($name);

        $reflection = new \ReflectionClass($class);

        return $reflection->newInstanceArgs($arguments);
    }
}
