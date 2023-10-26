<?php
    include_once('../configuraciones/bd.php');
        $conexionBD=BD::crearInstancia();

        $id=isset($_POST['id'])?$_POST['id']:'';
        $nombre_producto=isset($_POST['nombre_producto'])?$_POST['nombre_producto']:'';
        $tipo_producto=isset($_POST['tipo_producto'])?$_POST['tipo_producto']:'';
        $precio=isset($_POST['precio'])?$_POST['precio']:'';
        $descripcion=isset($_POST['descripcion'])?$_POST['descripcion']:'';

    $consulta=$conexionBD->prepare("SELECT * FROM productos");
    $consulta->execute();
    $listaProductos=$consulta->fetchOne();
?>