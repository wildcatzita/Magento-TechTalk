<?php

class Ainstainer_Homepage_Block_Homepage extends Mage_Core_Block_Template {
    protected $imgsrc = ['http://www.freewebheaders.com/wordpress/wp-content/gallery/2015-cars/thumbs/thumbs_blue-bmw-alpina-b6-xdrive-gran-coupe-car-web-header.jpg',
                         'http://www.freewebheaders.com/wordpress/wp-content/gallery/2015-cars/thumbs/thumbs_bmw-4-gran-coupe-car-and-desert-landscape-web-header.jpg',
                         'http://www.freewebheaders.com/wordpress/wp-content/gallery/2015-cars/thumbs/thumbs_lexus-nx-f-sport-silver-luxurious-car-website-header.jpg',
    ];

    public function getImg($index) {
        return $this->imgsrc[$index];
    }


    public function getMostViewedProducts()
    {
        /**
         * Number of products to display
         * You may change it to your desired value
         */
        $productCount = 6;

        /**
         * Get Store ID
         */
        $storeId = Mage::app()->getStore()->getId();
        /**
         * Get most viewed product collection
         */
        $products = Mage::getResourceModel('reports/product_collection')
            ->addAttributeToSelect('*')
            ->setStoreId($storeId)
            ->addStoreFilter($storeId)
            ->addViewsCount() // addViewsCount() filters the products with their views count
            ->setPageSize($productCount);

        Mage::getSingleton('catalog/product_status')
            ->addVisibleFilterToCollection($products);
        Mage::getSingleton('catalog/product_visibility')
            ->addVisibleInCatalogFilterToCollection($products);

        return $products;
    }
}