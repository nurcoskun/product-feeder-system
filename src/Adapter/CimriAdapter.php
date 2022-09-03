<?php

namespace App\Adapter;

class CimriAdapter implements CompanyAdapter {

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

    public function createFile(array $products):string {
        return json_encode($products);
    }
}