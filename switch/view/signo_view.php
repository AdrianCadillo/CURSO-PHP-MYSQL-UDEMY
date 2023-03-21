<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signo Zodiacal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
   <div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-xl-8 col-lg-8 col-md-7 col-sm-8 col-12">
            <div class="card">
                <div class="card-header">Signo Zodiacal</div>

               <form action="../ejercicio.php" method="post">
               <div class="card-body">
                    <label for="" class="form-label">Fecha de nacimiento</label>
                    <input type="date" name="fechanac">
                </div>
                <?php  if(isset($_SESSION['mensaje'])):?>
                    <div class="alert alert-success m-2"><?php echo $_SESSION['mensaje'] ?></div>
                <?php unset($_SESSION['mensaje']);endif; ?>
                <div class="card-footer">
                    <button class="btn btn-primary" name="procesar">saber mi signo zodiacal</button>
                </div>
               </form>
            </div>
        </div>
    </div>
   </div> 
</body>
</html>