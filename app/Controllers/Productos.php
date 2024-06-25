<?php

namespace App\Controllers;

use App\Models\ProductosModel;

class Productos extends BaseController
{
    private $ProductoModel; // Declaración de la variable correctamente

    public function __construct()
    {
        $this->ProductoModel = new ProductosModel(); // Inicialización correcta de la variable
    }

    public function index()
    {
        // Obtener todos los productos
        $result = $this->ProductoModel->findAll();

        // Preparar los datos para la vista
        $data = ['title' => 'Catálogo de productos', 'productos' => $result];
        return view('productos/index', $data);
    }

    public function show($id)
    {
        // Obtener un producto por su ID
        $producto = $this->ProductoModel->find($id);
        $data = [
            'title' => 'Catálogo de productos',
            'producto' => $producto
        ];
        return view('productos/show', $data);
    }

    public function transaccion()
    {
        // Datos de ejemplo para la inserción
        $data = [
            'codigo' => 'D0D9-D93',
            'nombre' => 'Nomas',
            'stock' => 10,
            'estatus' => 1,
            'id_almacen' => 1,
        ];

        // Insertar los datos en la base de datos
        // echo $this->ProductoModel->update(5, $data, false);
        echo $this->ProductoModel->insert($data);
        // echo $this->ProductoModel->delete(5);
        // Va a mostrar el id insertado 
        // echo $this->ProductoModel->getInsertID();



    }

    public function cat($name, $id)
    {
        echo "Me llamo $name con el id: $id";
    }
}
