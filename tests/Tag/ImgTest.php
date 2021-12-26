<?php

namespace Solid\Html\Tag;

use PHPUnit\Framework\TestCase;

class ImgTest extends TestCase
{
    public function test_create_img_tag_with_src()
    {
        $img = new Img('img/photo.png');

        $this->assertEquals('<img src="img/photo.png">', $img);
    }
}
