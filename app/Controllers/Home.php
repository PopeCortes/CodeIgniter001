<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $migrate = \Config\Services::migrations();
        $migrate->latest();

        try {
            // $migrate->latest();
            $migrate->regress(0);
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
}
