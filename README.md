# Hola, soy Diego Cortes

### Insertar

```php
        $data = [
            'nombre' => 'Coca Cola',
            'estatus' => 0,
            'precio' => 100
        ];

        // Insertar los datos en la base de datos
        echo $this->ProductoModel->insert($data, false);
```

### Modificar

```php
        $data = [
            'nombre' => 'Coca-Cola',
            'estatus' => 1,
            'precio' => 54
        ];
        // son los id de la base de datos [1, 9]
        // Actualización desde la base de datos
        echo $this->ProductoModel->update([1, 9], $data, false);

```

### Eliminar

se refiere que solo agrega la fecha "eliminada" en la base de datos, pero no se muestra en la vista aunque le pongan el finAll()

```php
        // se elimina por encima de la base de datos
        echo $this->ProductoModel->delete(10);
```

Se elimina completamente de la base de datos
puedes eliminar todos con la funcion o si quieres solamante uno, le debes de agregar el id

```php
        // Para ahora si eliminar los datos eliminados
        echo $this->ProductoModel->purgeDeleted();
        // Segundo ejemplo
        echo $this->ProductoModel->purgeDeleted(10);
```

### Mostrar

#### $builder->from()

```php
<?php
    $builder = $db->table('users');
    $builder->select('title, content, date');
    $builder->from('mytable');
    $query = $builder->get();
    // Produces: SELECT title, content, date FROM   users, mytable
```

#### Metodo normal

```php
<?php
    $builder->where('name', $name);
    $builder->where('title', $title);
    $builder->where('status', $status);
    // WHERE name = 'Joe' AND title = 'boss' AND status = 'active'
```

#### Con JOIN

```php
<?php

$builder = $db->table('blogs');
$builder->select('*');
$builder->join('comments', 'comments.id = blogs.id');
$query = $builder->get();
/*
 * Produces:
 * SELECT * FROM blogs JOIN comments ON comments.id = blogs.id
 */
```

=======

```php
$builder = $db->table('users');
$builder->select('title, content, date');
$builder->from('mytable');
$query = $builder->get();
// Produces: SELECT title, content, date FROM users, mytable
```

### Mostrar datos

#### 1 - Debes de agregar los datos en la carpeta app -> models

puse la carpeta ProductosModel (debes de usarlo como UpperCamelCase)
"Debes de tener especificamente todo lo que tienes en la base de datos"

```php
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
    // protected $returnType     = 'array';
    protected $returnType     = 'object'; // Tipo de dato que retornarán las consultas (object en este caso)

    //? El useSoftDelete = true se pueden usar para diferentes cosas, como...
    //? Al ver de eliminarlo desde la base de datos, lo puedes desabilitar con el status poniendo 0 y 1
    protected $useSoftDeletes = true; // Permite el uso de borrado suave (soft delete)

    //? Los campos que tiene la tabla de la base de datos
    protected $allowedFields = ['codigo', 'nombre', 'stock', 'id_almacen', 'estatus']; // Campos permitidos para operaciones de inserción y actualización

    // protected bool $allowEmptyInserts = false; // No permite inserciones de registros vacíos
    // protected bool $updateOnlyChanged = true; // Actualiza solo los campos que han cambiado

    // Dates
    protected $useTimestamps = true; // Deshabilita el uso automático de timestamps
    protected $dateFormat    = 'datetime'; // Formato de fecha usado
    protected $createdField  = 'fecha_alta'; // Campo para la fecha de creación
    protected $updatedField  = 'fecha_modifica'; // Campo para la fecha de actualización
    protected $deletedField  = 'fecha_elimina'; // Campo para la fecha de borrado suave (soft delete)
}

```

#### 2 - Debes de crear otro archivo en la carpeta Controllers

lo tengo como Productos.php
debes de agregar la funcion en el archivo controller que la tengo como
```php
use App\Models\ProductosModel; 
```

```php
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

        // Preparar los datos para la vista
        $data = ['title' => 'Catálogo de productos', 'productos' => $result];
        return view('productos/index', $data);
    }

}

```
