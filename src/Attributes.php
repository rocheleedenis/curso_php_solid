<?php

namespace Solid\Html;

use Solid\Html\AttributesContract;

class Attributes implements AttributesContract
{
    private $attributes;

    public function __construct(array $attributes = null)
    {
        if ($attributes) {
            $this->attributes = $attributes;
        }
    }

    public function __toString() :string
    {
        $result = [];

        foreach ($this->attributes as $key => $value) {
            $result[] = $key . '="' . $value . '"';
        }

        return ' ' . implode(' ', $result);
    }

    public function setAttributes(array $attributes)
    {
        $this->attributes = $attributes;
    }
}
