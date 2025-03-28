<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <form method="post" autocomplete="off">

    <div class="input-group">
    <div class="input-container">
        <input type="text" name="name" placeholder="Nombre">
        <i class="fa-solid fa-user"></i>

  
    </div>
    <div class="input-container">
        <input type="text" name="UserName" placeholder="UserName">
        <i class="fa-solid fa-user"></i>

  
    </div>
  
  
  
    <div class="input-container">
        <input type="text" name="phone" placeholder="Telefono">
        <i class="fa-solid fa-phone"></i>

  
    </div>
    <a href="#">Terminos y condiciones</a>
    <input name="send" type="submit" class="btn" value="Enviar">
    </div>
    
    </form>
   
   <?php
// Iniciar sesión al principio del script
session_start();

// Procesamiento de datos POST
echo "<div class='form-results'>";
    
if(isset($_POST["name"])) {
    echo "<p>Nombre: " . ($_POST["name"]) . "</p>";
} else {
    echo "<p class='error'>No se recibió nombre</p>";
}

if(isset($_POST["UserName"])) {

    $_SESSION['UserName'] = ($_POST["UserName"]);
    echo "<p>Username: " . ($_POST["UserName"]) . "</p>";
} else {
    echo "<p class='error'>No se recibió username</p>";
}



if(isset($_SESSION['UserName'])) {
    echo "<h1>Bienvenido, " . ($_SESSION['UserName']) . "!</h1>";
}

echo "</div>";
?>
 
</body>
</html>