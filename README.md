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

se refiere que solo agrega la fecha "eliminada" en la base de datos

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
