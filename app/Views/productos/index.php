<!-- //! Es extend, no extends -->
<?php echo $this->extend('plantilla/layout');

echo $this->section('contenido');
?>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Shampoo</td>
            <td>$52</td>
        </tr>
    </tbody>
</table>


<?php echo $this->endSection(); ?>

<?php echo $this->section('scripts'); ?>
<script>
    console.log("Hola");
</script>
<?php echo $this->endSection(); ?>