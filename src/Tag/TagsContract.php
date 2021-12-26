<?php

namespace Solid\Html\Tag;

interface TagsContract
{
    public function __toString() :string;
    public function validate();
}