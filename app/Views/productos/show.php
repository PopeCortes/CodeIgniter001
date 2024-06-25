<!-- //! Es extend, no extends -->
<?php echo $this->extend('plantilla/layout'); ?>


<?php echo $this->section('contenido') ?>
<h2>Detalles del producto <?php echo $id ?></h2>
<?php echo $this->endSection(); ?>


<?php echo $this->section('scripts') ?>
<script>
    alert("Hola, show");
</script>
<?php echo $this->endSection(); ?>