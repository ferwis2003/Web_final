

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Inicio de sesión</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="form-container">

   <form action="validar.php" method="post" enctype="multipart/form-data">
      <h3>Iniciar sesión</h3>
      
      <input type="text" name="nombre" placeholder="enter username" class="box" required>
      <input type="password" name="pass" placeholder="enter password" class="box" required>
      <input type="submit" name="submit" value="Iniciar sesión" class="btn">
      
   </form>

</div>

</body>
</html>