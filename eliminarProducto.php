<?php  

    require 'config/config.php';
    $autenticar = new autenticar();
    $autenticarse = $autenticar->autenticar();
    $Producto = new Producto;
    $chequeo = $Producto->eliminarProducto();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Baja de un producto</h1>
<?php
        $class = 'danger';
        $mensaje = 'No se pudo eliminar el producto';
        if( $chequeo ) {
            $class = 'success';
            $mensaje = 'Producto eliminado correctamente';
        }
?>
        <div class="alert alert-<?= $class ?>">
            <?= $mensaje ?>
            <br>
            <a href="adminProductos.php" class="btn btn-outline-secondary">
                Volver a panel
            </a>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>