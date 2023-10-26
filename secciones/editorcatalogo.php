<?php include('../templates/cabecerapanel.php'); ?>
<?php include('motorcatalogo.php'); ?>
<link rel="stylesheet" href="../css/editorcatalogo.css">
<p>
<div class="container">
    <div class="row">
        <!-- Columna para el Card -->
        <div class="col-md-5">
            <form action="" method="post">
                <div class="card" id="Editor">
                    <div class="card-header">
                        Personaliza tu catálogo
                    </div>
                    <div class="card-body">
                        <!-- Contenido del Card -->
                        <!-- ID -->
                        <div class="mb-3">
                            <label for="id" class="form-label">ID</label>
                            <input type="text"
                                class="form-control"
                                name="id"
                                id="id"
                                value="<?php echo $id; ?>"
                                aria-describedby="helpId"
                                placeholder="Id del producto">
                            <small id="helpId" class="form-text text-muted"></small>
                        </div>

                        <!-- Nombre -->
                        <div class="mb-3">
                            <label for="nombre_producto" class="form-label">Nombre</label>
                            <input type="text"
                                class="form-control"
                                name="nombre_producto"
                                id="nombre_producto"
                                value="<?php echo $nombre_producto; ?>"
                                aria-describedby="helpNombre"
                                placeholder="Nombre del producto">
                            <small id="helpNombre" class="form-text text-muted"></small>
                        </div>

                        <!-- tipo de producto -->
                        <div class="mb-3">
                            <label for="tipo_producto" class="form-label">Categoria</label>
                            <input type="text"
                                class="form-control"
                                name="tipo_producto"
                                id="tipo_producto"
                                value="<?php echo $tipo_producto; ?>"
                                aria-describedby="helpNombre"
                                placeholder="Que tipo de producto es">
                            <small id="helpNombre" class="form-text text-muted"></small>
                        </div>

                        <!-- Precio -->
                        <div class="mb-3">
                            <label for="precio" class="form-label">Valor</label>
                            <input type="text"
                                class="form-control"
                                name="precio"
                                id="precio"
                                value="<?php echo $precio; ?>"
                                aria-describedby="helpId"
                                placeholder="$">
                            <small id="helpId" class="form-text text-muted"></small>
                        </div>

                        <!-- Descripción -->
                        <div class="mb-3">
                            <label for="descripcion" class="form-label">Descripción</label>
                            <input type="form-label"
                                class="form-control"
                                name="descripcion"
                                id="descripcion"
                                value="<?php echo $descripcion; ?>"
                                aria-describedby="helpId"
                                placeholder="Breve descripción del producto">
                            <small id="helpId" class="form-text text-muted"></small>
                        </div>

                        <div class="btn-group" role="group" aria-label=""><p>
                            <button type="submit" name="accion" value="agregar" class="btn btn-success">Agregar</button><p>
                            <button type="submit" name="accion" value="editar" class="btn btn-warning">Editar</button><p>
                            <button type="submit" name="accion" value="borrar" class="btn btn-danger">Borrar</button><p>
                        </div>
                    </div>
                    <div class="card-footer text-muted"></div>
                </div>
            </form>
        </div>

        <!-- Columna para la Tabla -->
        <div class="col-md-7">
            <div class="table-responsive" id="Tabla">
                <table class="table">
                    <thead class="columna1">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre del Producto</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Descripción</th>
                            
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($listaProductos as $productos) { ?>
                            <tr>
                                <!-- Datos de la tabla -->
                                <td><?php echo $productos['id']; ?></td>
                                <td><?php echo $productos['nombre_producto']; ?></td>
                                <td><?php echo $productos['tipo_producto']; ?></td>
                                <td><?php echo $productos['precio']; ?></td>
                                <td><?php echo $productos['descripcion']; ?></td>

                                <!-- Para la seleccion de un elemento -->
                                <td>
                                    <form action="" method="post">
                                        <input type="hidden" name="id" id="id" value="<?php echo $productos['id']; ?>" />
                                        <input type="submit" name="accion" class="btn btn-info" value="Seleccionar" />
                                    </form>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>





