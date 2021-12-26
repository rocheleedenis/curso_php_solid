<?php

namespace Solid\Html;

use PHPUnit\Framework\TestCase;

class TagsTest extends TestCase
{
    public function test_create_img_tag_with_src()
    {
        $tags = new Tags;
        $img = $tags->img('img/photo.png');

        $this->assertEquals('<img src="img/photo.png">', $img);
    }

    public function test_create_a_tag_with_anchor_img()
    {
        $tags = new Tags;
        $img = $tags->img('img/photo.png');

        $a = $tags->a('http://www.example.com.br', $img);

        $this->assertEquals('<a href="http://www.example.com.br"><img src="img/photo.png"></a>', $a);
    }
}
