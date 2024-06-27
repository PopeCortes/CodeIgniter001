# Hola, soy Diego Cortes

### Insertar

### Modificar

### Eliminar

### Mostrar

#### ¤¤¤ $builder->from() ¤¤¤


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

####

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

