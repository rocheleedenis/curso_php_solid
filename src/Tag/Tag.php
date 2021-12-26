<?php

/**
 * Template method
 */

namespace Solid\Html\Tag;

use Solid\Html\Attributes;
use PhpParser\Node\Attribute;

abstract class Tag implements TagsContract
{
    protected $attrs;
    protected $optional_attrs;

    public function __construct()
    {
        $this->attrs = func_get_args();

        $this->validate();
    }

    public function attributes(Attributes $attribute)
    {
        $this->optional_attrs = $attribute;
    }
}
