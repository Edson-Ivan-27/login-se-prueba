<?php
error_reporting(0);

include 'includes/conect.php';
if(isset($_POST['entrar'])){
$ruser=$CONECTA->real_escape_String($_POST['Usuario']);
$rpass=$CONECTA->real_escape_String($_POST(['pass']);

$consulta="Select * From usuario Where Nombre = '$ruser' and Pass ='$rpass'";
  if($resultado = $CONECTA->query($consulta)){
      while($row = $resultado->fetch_array()){
          $userok =$row['Nombre'];
          $passwordok =$row['Pass'];
      }
      $rersultado->close();
  }  
  $CONECTA->close();
  
}


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="css/fontello.css">
 <link rel="stylesheet" type="text/css" href="css/preloader.css">
 <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Login</title>
</head>
<body>
    <div class="container py-4">
    <div class="row justify-content-center h-100 py-4">
    <div class="card col-sm-6 col-md-6 col-lg-6 shadow-lg p-3 mb-5 bg-white rounded">
       <article class="card-body">
        <h4 class="card-title text-center">Login al sistema</h4>
       <hr>
       <p class="text-success text-center">Digital tus datos</p>
       <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-grup">
        <div class="input-group">
        <input type="text" name="usuario" placeholder="Usuario" class="form-control">
        </div>
        <div class="input-group py-2">
            <input type="password" name="pass" placeholder="Password" class="form-control">
        </div>
        <div class="input-group">
           <input type="submit" name="entrar" value="Entrar" class="btn btn-sm btn-block"> 
        </div>

        </div>
       </form>
    </article> 
    </div>
        </div> 
    </div>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/preloader.js"></script>
    <script src="js/main.js"></script>    
    

</body>
</html>