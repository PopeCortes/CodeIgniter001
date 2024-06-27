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
        //! Obtener todos los productos
        // $result = $this->ProductoModel->findAll();
        
        //! Para mostrar todos los datos hasta los "Eliminados"
        // $result = $this->ProductoModel->withDeleted()->findAll();
        
        //! Para mostrar solo los datos eliminados
        // $result = $this->ProductoModel->onlyDeleted()->findAll();
        
        //! Pra mostrar solo los que tienen el statys 1
        $result = $this->ProductoModel->where('estatus', 1)->findAll();
        
        
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
            'estatus' => 0,
        ];

        // Insertar los datos en la base de datos
        // echo $this->ProductoModel->insert($data, false);
        //! Actualización desde la base de datos
        // echo $this->ProductoModel->update([1, 9], $data, false);
        //! Eliminar por encima de la base de datos
        // echo $this->ProductoModel->delete(10);
        //! Para ahora si eliminar los datos eliminados
        // echo $this->ProductoModel->purgeDeleted();
        //! Va a mostrar el id insertado 
        // echo $this->ProductoModel->getInsertID();



    }

    public function cat($name, $id)
    {
        echo "Me llamo $name con el id: $id";
    }
}
