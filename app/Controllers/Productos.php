<?php


namespace App\Controllers;


class Productos extends BaseController
{
    public function index()
    {
        $data = ['title' => 'Catalogo de productos'];
        return view('productos/index', $data);
        
    }

    public function show($id){
        echo "Controller Productos show $id";
    }
    public function cat($name, $id){
        echo "Me llamo $name con el id: $id";
    }
}
