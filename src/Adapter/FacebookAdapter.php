<?php

namespace App\Adapter;

use SimpleXMLElement;

class FacebookAdapter implements CompanyAdapter {

    private $products = array();

    public function decorateProduct(array $products) {

        foreach($products as $product) {
            $this->products[] =  [
                "name" => $product->name,
                "price" => $product->price,
                "category" =>$product->category
            ];
        }

        $normalized = $this->getProductList();
        $file = $this->createFile($normalized);

        return $file;
    }

    public function getProductList():array {
        return $this->products;
    }

    public function createFile(array $products) {

        $object = new SimpleXMLElement("<products/>");
        $this->convertToXML($products, $object);

        return $object;
    }

    function convertToXML($products, $object) {
        foreach($products as $key => $value) {
            if(is_array($value)) {
                $subnode = $object->addChild($key);
                $this->convertToXML($value, $subnode);
            } else {
                $object->addChild($key, $value);
            }
        }
    }

}