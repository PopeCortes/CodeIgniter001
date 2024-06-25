<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductosModel extends Model
{

    //! Para insertar Datos
    protected $table      = 'producto'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'id'; // Llave primaria de la tabla

    protected $useAutoIncrement = true; // Si la llave primaria es auto incremental


    //? Hay dos tipos de retorno, el object es producto->id, producto->nombre
    //? y el array es tipo prodducto['id'], producto['nombre']
    // protected $returnType     = 'object';
    protected $returnType     = 'array'; // Tipo de dato que retornarán las consultas (array en este caso)

    //? El useSoftDelete = true se pueden usar para diferentes cosas, como...
    //? Al ver de eliminarlo desde la base de datos, lo puedes desabilitar con el status poniendo 0 y 1
    protected $useSoftDeletes = true; // Permite el uso de borrado suave (soft delete)

    //? Los campos que tiene la tabla de la base de datos
    protected $allowedFields = ['codigo', 'nombre', 'stock', 'id_almacen', 'estatus']; // Campos permitidos para operaciones de inserción y actualización

    protected bool $allowEmptyInserts = false; // No permite inserciones de registros vacíos
    protected bool $updateOnlyChanged = true; // Actualiza solo los campos que han cambiado

    // Dates
    protected $useTtimestamps = true; // Deshabilita el uso automático de timestamps
    protected $dateFormat    = 'datetime'; // Formato de fecha usado
    protected $createdField  = 'fecha_alta'; // Campo para la fecha de creación
    protected $updatedField  = 'fecha_modifica'; // Campo para la fecha de actualización
    protected $deletedField  = 'fecha_alima'; // Campo para la fecha de borrado suave (soft delete)
}
