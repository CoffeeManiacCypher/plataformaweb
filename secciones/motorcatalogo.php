<?php
    //Funciones del Editor de catálogo

    include_once('../configuraciones/bd.php');
    $conexionBD=BD::crearInstancia();

    $id=isset($_POST['id'])?$_POST['id']:'';
    $nombre_producto=isset($_POST['nombre_producto'])?$_POST['nombre_producto']:'';
    $tipo_producto=isset($_POST['tipo_producto'])?$_POST['tipo_producto']:'';
    $precio=isset($_POST['precio'])?$_POST['precio']:'';
    $descripcion=isset($_POST['descripcion'])?$_POST['descripcion']:'';


    $accion=isset($_POST['accion'])?$_POST['accion']:'';

    if($accion!=''){

        switch($accion){

            case 'agregar':

                $sql="INSERT INTO productos (id, nombre_producto, tipo_producto, precio, descripcion) VALUES (NULL,:nombre_producto,:tipo_producto,:precio,:descripcion)";
                $consulta=$conexionBD->prepare($sql);
                $consulta->bindParam(':nombre_producto',$nombre_producto);
                $consulta->bindParam(':tipo_producto',$tipo_producto);
                $consulta->bindParam(':precio',$precio);
                $consulta->bindParam(':descripcion',$descripcion);
                $consulta->execute();

            break;

            case 'editar':

                $sql="UPDATE productos SET nombre_producto=:nombre_producto, tipo_producto=:tipo_producto, precio=:precio, descripcion=:descripcion WHERE id=:id";
                $consulta=$conexionBD->prepare($sql);
                $consulta->bindParam(':id',$id);
                $consulta->bindParam(':nombre_producto',$nombre_producto);
                $consulta->bindParam(':tipo_producto',$tipo_producto);
                $consulta->bindParam(':precio',$precio);
                $consulta->bindParam(':descripcion',$descripcion);
                $consulta->execute();

            break;

            case 'borrar':

                $sql="DELETE FROM productos WHERE id=:id";
                $consulta=$conexionBD->prepare($sql);
                $consulta->bindParam(':id',$id);
                $consulta->execute();

            break;

            case 'Seleccionar':

                $sql="SELECT * FROM productos WHERE id=:id";
                $consulta=$conexionBD->prepare($sql);
                $consulta->bindParam(':id',$id);
                $consulta->execute();
                $productos=$consulta->fetch(PDO::FETCH_ASSOC);
                
                $nombre_producto=$productos['nombre_producto'];
                $tipo_producto=$productos['tipo_producto'];
                $precio=$productos['precio'];
                $descripcion=$productos['descripcion'];
                
            break;
        }
    }



    $consulta=$conexionBD->prepare("SELECT * FROM productos");
    $consulta->execute();
    $listaProductos=$consulta->fetchAll();

    
?>