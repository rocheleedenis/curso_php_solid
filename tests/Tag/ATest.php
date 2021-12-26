<?php

namespace Solid\Html\Tag;

use Solid\Html\Attributes;
use PHPUnit\Framework\TestCase;

class ATest extends TestCase
{
    public function test_create_a_tag_with_href_and_anchor()
    {
        $a = new A(new Attributes, 'http://www.example.com.br', 'Meu site');

        $this->assertEquals('<a href="http://www.example.com.br">Meu site</a>', $a);
    }

    public function test_create_a_tag_with_href_and_anchor_and_adictional_attributes()
    {
        $attributes = [
            'class' => 'btn btn-default',
            'data-modal' => '#login',
            'id' => 'login',
        ];

        $a = new A(new Attributes, '#', 'Login');
        $a->attributes($attributes);

        $this->assertEquals('<a href="#" class="btn btn-default" data-modal="#login" id="login">Login</a>', $a);
    }
}
