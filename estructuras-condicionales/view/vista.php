<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Aumento salario</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-5 col-md-6 col-sm-8 col-12">
                 <div class="card">
                    <div class="card-header">
                        <h4>App Salario</h4>
                    </div>

                    <div class="card-body">
                      <form action="../logica_salario.php" method="post">
                      <label for="name_usu" class="form-label">Nombre : </label>
                        <input type="text" name="name_usu" id="name_usu" placeholder="ingrese nombre" class="form-control"
                        value="<?php echo $_POST['name_usu']??'' ?>">

                        <label for="salario" class="form-label">Salario : </label>
                        <input type="text" name="salario" id="salario" placeholder="ingrese salario" class="form-control"
                        >
                         
                        <label for="cargo" class="form-label">Seleccione el cargo : </label>
  
                        <select name="cargo" id="cargo" class="form-select">
                            <option disabled selected> -- Seleccione el cargo -- </option>
                            <option value="Ing.de sistemas">Ing.de sistemas</option>

                            <option value="Administrador">Administrador</option>

                            <option value="Contador">Contador</option>

                            <option value="Programador">Programador</option>
                        </select>

                       <div class="text-center mt-2">
                       <button name="procesar" class="btn btn-primary">Procesar</button>
                       </div>
                      </form>
                    </div>

                   <?php  
                   if(isset($_SESSION['mensaje'])):
                   ?>
                    <div class="alert alert-success m-2">
                        <strong><?php echo $_SESSION['mensaje'] ?></strong>
                    </div>
                   <?php unset($_SESSION['mensaje']); endif; ?>
                 </div>
            </div>
        </div>
    </div>
</body>
</html>
 