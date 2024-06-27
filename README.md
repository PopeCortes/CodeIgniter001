# Ayuda General de CodeIgniter

### Insertar

### Modificar

### Eliminar

### Mostrar

```php
$builder = $db->table('users');
$builder->select('title, content, date');
$builder->from('mytable');
$query = $builder->get();
// Produces: SELECT title, content, date FROM users, mytable
```

### Inner











