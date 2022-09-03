<?php

namespace App\Factory;

use App\Adapter\CompanyAdapter;

class CompanyFactory {


    public function checkCompanyAdapter($company){

        /** @var CompanyAdapter  $className */
        $className = "App\\Adapter\\".$company."Adapter";

        if(class_exists($className)) {

            return new $className();

        }

        throw new \Exception("Built-in Company Not Found",1200);
    }

}