<?php

namespace Solid\Html\Tag;

use Solid\Html\Tag\Img;
use PHPUnit\Framework\TestCase;
use Solid\Html\Attributes;

class ImgTest extends TestCase
{
    public function test_create_img_tag_with_src()
    {
        $img = new Img('img/photo.png');

        $this->assertEquals('<img src="img/photo.png">', $img);
    }

    public function test_create_img_tag_with_src_and_adictional_html_attributes()
    {
        $attributes = new Attributes([
            'class' => 'image-responsive',
        ]);

        $img = new Img('img/photo.png');
        $img->attributes($attributes);

        $this->assertEquals('<img src="img/photo.png">', $img);
    }
}
