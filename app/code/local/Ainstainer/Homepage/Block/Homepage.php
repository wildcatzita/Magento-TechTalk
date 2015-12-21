<?php

class Ainstainer_Homepage_Block_Homepage extends Mage_Core_Block_Template {
    protected $imgsrc = ['http://www.freewebheaders.com/wordpress/wp-content/gallery/2015-cars/thumbs/thumbs_blue-bmw-alpina-b6-xdrive-gran-coupe-car-web-header.jpg',
                         'http://www.freewebheaders.com/wordpress/wp-content/gallery/2015-cars/thumbs/thumbs_bmw-4-gran-coupe-car-and-desert-landscape-web-header.jpg',
                         'http://www.freewebheaders.com/wordpress/wp-content/gallery/2015-cars/thumbs/thumbs_lexus-nx-f-sport-silver-luxurious-car-website-header.jpg',
    ];

    public function getImg($index) {
        return $this->imgsrc[$index];
    }
}