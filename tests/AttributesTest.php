<?php

namespace Solid\Html;

use PHPUnit\Framework\TestCase;

class AttributesTest extends TestCase
{
    public function test_create_html_attributes_to_tags()
    {
        $attributes = new Attributes([
            'class' => 'btn btn-default',
            'data-modal' => '#login',
            'id' => 'login',
        ]);

        $this->assertEquals(' class="btn btn-default" data-modal="#login" id="login"', $attributes);
    }
}
