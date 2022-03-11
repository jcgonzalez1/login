<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php require_once "menu.php" ?>
    <title>Guia de Ejercicios</title>
  </head>
  <body>

  <div class="container"><br>
        <div class="row justify-content-center">
            <div class="col-6 p-5 bg-white shadow-lg rounded">
                
                <form method="POST" action="recibe_login.php">

                    <h2>Inicio de Sesion</h2>
                    <hr>

                    <div class="form-group">
                        <label for="usuario">Digite su usuario:</label>
                        <input id="usuario" class="form-control" type="text" name="usuario"  value="juan" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Escriba su contraseña:</label>
                        <input id="password" class="form-control" type="password" name="password" value="12345" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <a href="https://"> ¿Olvido la contraseña?</a>
                    </div>
                    <br>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="submit" value="Enviar">
                    </div>
                    
                    
                    
                    <div></div>
                        
                </form>
                <hr>
                <?php
                    if(isset($_POST["submit"]) && !empty($_POST["submit"])) {
                        $num1 = $_POST['num1'];
                        $num2 = $_POST['num2'];

                        if (is_numeric($num1) && is_numeric($num2)){
                            if ($num1 > $num2) {
                                echo "El mayor de los numeros es ", $num1;
                            }
                            elseif ($num2 > $num1) {
                                echo "El mayor de los numeros es ", $num2;
                            }  
                        }
                        else {
                            echo "Digite valores validos";
                        }
                    }
                ?>

            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>