<?php

namespace Solid\Html;

class Attributes
{
    private $attributes;

    public function __construct(array $attributes)
    {
        $this->attributes = $attributes;
    }

    public function __toString()
    {
        $result = [];

        foreach ($this->attributes as $key => $value) {
            $result[] = $key . '="' . $value . '"';
        }

        return ' ' . implode(' ', $result);
    }
}
