<!-- //! Es extend, no extends -->
<?php echo $this->extend('plantilla/layout');

echo $this->section('contenido');
?>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Codigo</th>
            <th scope="col">Nombre</th>
            <th scope="col">Stock</th>
        </tr>
    </thead>
    <tbody>

        <?php foreach ($productos as $producto) : ?>
            <tr>
            <th scope="row"><?php echo $producto->id;?></th>
            <th scope="row"><?php echo $producto->codigo;?></th>
            <th scope="row"><?php echo $producto->nombre;?></th>
            <th scope="row"><?php echo $producto->stock;?></th>
        </tr>
        <?php endforeach; ?>

    </tbody>
</table>


<?php echo $this->endSection(); ?>

<?php echo $this->section('scripts'); ?>
<script>
    alert("Hola");
</script>
<?php echo $this->endSection(); ?>