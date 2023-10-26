<?php
    //Funciones del Editor Cliente

    include_once('../configuraciones/bd.php');
    $conexionBD=BD::crearInstancia();
    //Funciones del Editor Cliente

    $rut=isset($_POST['rut'])?$_POST['rut']:'';
    $nombre=isset($_POST['nombre'])?$_POST['nombre']:'';
    $apellido=isset($_POST['apellido'])?$_POST['apellido']:'';
    $genero=isset($_POST['genero'])?$_POST['genero']:'';
    $direccion=isset($_POST['direccion'])?$_POST['direccion']:'';
    $telefono=isset($_POST['telefono'])?$_POST['telefono']:'';

    $accion=isset($_POST['accion'])?$_POST['accion']:'';

    if($accion!=''){

        switch($accion){

            case 'agregar':

                $sql="INSERT INTO cliente (rut, nombre, apellido, genero, direccion, telefono) VALUES (NULL,:nombre,:apellido,:genero,:direccion,:telefono)";
                $consulta=$conexionBD->prepare($sql);
                $consulta->bindParam(':nombre',$nombre);
                $consulta->bindParam(':apellido',$apellido);
                $consulta->bindParam(':genero',$pgenero);
                $consulta->bindParam(':direccion',$direccion);
                $consulta->bindParam(':telefono',$telefono);
                $consulta->execute();

            break;

            case 'editar':

                $sql="UPDATE cliente SET nombre=:nombre, apellido=:apellido, genero=:genero, direccion=:direccion, telefono=:telefono WHERE rut=:rut";
                $consulta=$conexionBD->prepare($sql);
                $consulta->bindParam(':id',$id);
                $consulta->bindParam(':nombre',$nombre);
                $consulta->bindParam(':apellido',$apellido);
                $consulta->bindParam(':genero',$genero);
                $consulta->bindParam(':direccion',$direccion);
                $consulta->bindParam(':telefono',$telefono);
                $consulta->execute();

            break;

            case 'borrar':

                $sql="DELETE FROM cliente WHERE rut=:rut";
                $consulta=$conexionBD->prepare($sql);
                $consulta->bindParam(':rut',$rut);
                $consulta->execute();

            break;

            case 'Seleccionar':

                $sql="SELECT * FROM cliente WHERE rut=:rut";
                
                $consulta=$conexionBD->prepare($sql);
                $consulta->bindParam(':rut',$rut);
                $consulta->execute();

                $clientes=$consulta->fetch(PDO::FETCH_ASSOC);
                
                $nombre=$clientes['nombre'];
                $apellido=$clientes['apellido'];
                $genero=$clientes['genero'];
                $direccion=$clientes['direccion'];
                $telefono=$clientes['telefono'];
                
                
            break;
        }
    }



    $consulta=$conexionBD->prepare("SELECT * FROM cliente");
    $consulta->execute();
    $listaCliente=$consulta->fetchAll();

    
?>