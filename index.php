<?php

use App\Factory\CompanyFactory;

require __DIR__ . "/vendor/autoload.php";

    try {
        $file  = file_get_contents("../product-feeder-system/products.json", "r");
        $productList = json_decode($file);


        $allCompany = array( 'Cimri','Google', 'Facebook');

        $companyFactory = new CompanyFactory();

        foreach ($allCompany as $company){

            $checkCompany = $companyFactory->checkCompanyAdapter($company);
            $result = $checkCompany->decorateProduct($productList);

            print_r($result);

        }

    }
    catch (\Exception $exception) {
        error_log($exception->getMessage());
    }
