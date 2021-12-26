<?php

namespace Solid\Html\Tag;

use PHPUnit\Framework\TestCase;

class ATest extends TestCase
{
    public function test_create_a_tag_with_href_and_anchor()
    {
        $a = new A('http://www.example.com.br', 'Meu site');

        $this->assertEquals('<a href="http://www.example.com.br">Meu site</a>', $a);
    }
}
