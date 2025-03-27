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
        <input type="text" name="email" placeholder="Email">
        <i class="fa-solid fa-envelope"></i>

  
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
     if(isset($_POST["name"])) {
     
        echo "<p>Nombre: " . htmlspecialchars($_POST["name"]) . "</p>";
    } else {
        echo "<p>No se recibió nombre</p>";
    }

    if(isset($_POST["UserName"])) {
        echo "<p>Username: " . htmlspecialchars($_POST["UserName"]) . "</p>";
    } else {
        echo "<p>No se recibió email</p>";
    }
    
    if(isset($_POST["email"])) {
        echo "<p>Email: " . htmlspecialchars($_POST["email"]) . "</p>";
    } else {
        echo "<p>No se recibió email"."<br>";
    }

    if(isset($_POST["phone"])) {
        echo "<p>Phone: " . htmlspecialchars($_POST["phone"]) . "</p>";
    } else {
        echo "<p>No se recibió el telefono"."</p>";
    }
   ?>
 
</body>
</html>