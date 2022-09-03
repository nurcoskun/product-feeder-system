<?php

namespace App\Adapter;

interface CompanyAdapter {
    public function decorateProduct(array $products);

    public function getProductList():array;

    public function createFile(array $data);
}