<!doctype html>
<html lang="en">

<head>
  <title>Inicio sesion</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <!-- CSS personalizado -->
  <link rel="stylesheet" href="css/login.css">
</head>

<body>

  <div class="container">
    <div class="row">
      <div class="col-md-4">

        <br>

        <form class="login" action="secciones/editorcatalogo.php" method="post">

        <div class="card">
           <div class="card-header">Inicio de sesión</div>
              <div class="card-body">

                <div class="mb-3">
                  <label for="" class="form-label">Usuario</label>
                    <input type="text"
                      class="form-control" 
                      name="usuario"
                      id="usuario" 
                      aria-describedby="helpId" 
                      placeholder="Usuario@hotmail.com">

                    <small id="helpId" class="form-text text-muted">Ingrese su correo personal</small>
                </div>

                <div class="mb-3">
                  <label for="" class="form-label">Contraseña</label>
                    <input type="password"
                        class="form-control" 
                        name="pass"
                        id="pass" 
                        aria-describedby="helpId" 
                        >

                      <small id="helpId" class="form-text text-muted">Ingrese su contraseña</small>
                </div>

                    <center><button type="submit" class="btn btn-primary">Iniciar sesión</button></center>
              </div>   

        </form>

        <div class="card-footer text-muted"></div>

      </div>
    </div>        
  </div>
  
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>

</html>