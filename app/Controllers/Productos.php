<?php


namespace App\Controllers;


class Productos extends BaseController
{
    public function index()
    {

        $connect = \config\Database::connect();

        $query = $connect->query('SELECT * FROM producto');
        $result = $query->getResult();

        $data = ['title' => 'Catalogo de productos', 'productos' => $result];
        return view('productos/index', $data);
    }

    public function show($id)
    {
        $data = [
            'title' => 'Catalogo de productos',
            'id' => $id
        ];
        return view('productos/show', $data);
    }
    public function cat($name, $id)
    {
        echo "Me llamo $name con el id: $id";
    }
}
