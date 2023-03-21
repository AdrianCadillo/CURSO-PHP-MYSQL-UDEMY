<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número primo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-7 col-sm-8 col-12">
                <div class="card border-primary">
                    <div class="card-header bg bg-primary text-white">
                        número de la suerte, según fecha de nacimiento
                    </div>
                    <form action="../ejercicio.php" method="post">
                        <div class="card-body">
                            <div class="col">
                                <label for="" class="form-label">Seleccione su fecha nacimiento</label>
                                <input type="date" name="fecha_nac" class="form-control">
 
                            </div>

                            <?php if(isset($_SESSION['mensaje'])):  ?>
                                <div class="alert alert-primary m-2"><?php echo $_SESSION['mensaje']; ?></div>
                            <?php unset($_SESSION['mensaje']);endif; ?>    

                            <div class="card-footer">
                                <button class="btn btn-danger" name="procesar"><b>Procesar 
                                    <i class="fas fa-save"></i>
                                </b></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>