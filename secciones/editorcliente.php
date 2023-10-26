<?php include('../templates/cabecerapanel.php'); ?>
<?php include('motorcliente.php'); ?>
<link rel="stylesheet" href="../css/editorcliente.css">
<p>
<div class="container">
    <div class="row">
        <!-- Columna para el Card -->
        <div class="col-md-5">
            <form action="" method="post">
                <div class="card" id="Editor">
                    <div class="card-header">
                        Gestiona a tus clientes
                    </div>
                    <div class="card-body">
                        <!-- Contenido del Card -->
                        <!-- RUT -->
                        <div class="mb-3">
                            <label for="rut" class="form-label">Rut</label>
                            <input type="text"
                                class="form-control"
                                name="rut"
                                id="rut"
                                value="<?php echo $rut; ?>"
                                aria-describedby="helpId"
                                placeholder="Ingrese el rut del cliente">
                            <small id="helpId" class="form-text text-muted"></small>
                        </div>

                        <!-- Nombre -->
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text"
                                class="form-control"
                                name="nombre"
                                id="nombre"
                                value="<?php echo $nombre; ?>"
                                aria-describedby="helpNombre"
                                placeholder="Nombre del cliente">
                            <small id="helpNombre" class="form-text text-muted"></small>
                        </div>

                        <!-- Apellido -->
                        <div class="mb-3">
                            <label for="apellido" class="form-label">Apellido</label>
                            <input type="text"
                                class="form-control"
                                name="apellido"
                                id="apellido"
                                value="<?php echo $apellido; ?>"
                                aria-describedby="helpNombre"
                                placeholder="Apellido del cliente">
                            <small id="helpNombre" class="form-text text-muted"></small>
                        </div>

                        <!-- Sexo -->
                        <div class="mb-3">
                            <label for="genero" class="form-label">Sexo</label>
                            <input type="text"
                                class="form-control"
                                name="genero"
                                id="genero"
                                value="<?php echo $genero; ?>"
                                aria-describedby="helpId"
                                placeholder="">
                            <small id="helpId" class="form-text text-muted"></small>
                        </div>

                        <!-- Direccion -->
                        <div class="mb-3">
                            <label for="direccion" class="form-label">Dirección</label>
                            <input type="form-label"
                                class="form-control"
                                name="direccion"
                                id="direccion"
                                value="<?php echo $direccion; ?>"
                                aria-describedby="helpId"
                                placeholder="">
                            <small id="helpId" class="form-text text-muted"></small>
                        </div>

                        <!-- Telefono -->
                        <div class="mb-3">
                            <label for="telefono" class="form-label">N° de contacto</label>
                            <input type="form-label"
                                class="form-control"
                                name="telefono"
                                id="telefono"
                                value="<?php echo $telefono; ?>"
                                aria-describedby="helpId"
                                placeholder="N° de celular">
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
                            <th scope="col">Rut</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Sexo</th>
                            <th scope="col">Dirección</th>
                            <th scope="col">Telefono</th>
                            
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($listaCliente as $cliente) { ?>
                            <tr>
                                <!-- Datos de la tabla -->
                                <td><?php echo $cliente['rut']; ?></td>
                                <td><?php echo $cliente['nombre']; ?></td>
                                <td><?php echo $cliente['apellido']; ?></td>
                                <td><?php echo $cliente['genero']; ?></td>
                                <td><?php echo $cliente['direccion']; ?></td>
                                <td><?php echo $cliente['telefono']; ?></td>

                                <!-- Para la seleccion de un elemento -->
                                <td>
                                    <form action="" method="post">
                                        <input type="hidden" name="id" id="id" value="<?php echo $cliente['rut']; ?>" />
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