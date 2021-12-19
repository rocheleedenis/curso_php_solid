<?php

namespace Solid\Html;

use PHPUnit\Framework\TestCase;

class HtmlTest extends TestCase
{
    public function test_create_img_tag_with_src()
    {
        $html = new Html;
        $img = $html->img('img/photo.png');

        $this->assertEquals('<img src="img/photo.png">', $img);
    }

    public function test_create_a_tag_with_anchor_img()
    {
        $html = new Html;
        $img = $html->img('img/photo.png');

        $a = $html->a('http://www.example.com.br', $img);

        $this->assertEquals('<a href="http://www.example.com.br"><img src="img/photo.png"></a>', $a);
    }

    public function test_create_a_tag_with_class_and_id()
    {
        $html = new Html;

        $a = $html->a('http://www.example.com.br', 'My site');
        $a->attribute([
            'class' => 'btn btn-default'
        ]);

        $this->assertEquals('<a href="http://www.example.com.br" class="btn btn-default">My site</a>', $a);
    }
}
