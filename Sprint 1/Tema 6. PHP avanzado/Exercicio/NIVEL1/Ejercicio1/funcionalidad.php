<?php



if (!isset($_POST['name']) || trim($_POST['name']) === '') {
    $errores[] = "El nombre es requerido";
} elseif (!preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/", $_POST['name'])) {
    $errores[] = "El nombre solo debe contener letras y espacios";
}
else{
    echo "<p>Nombre: " . ($_POST["name"]) . "</p>";
}


session_start();


echo "<div class='form-results'>";
    
if(isset($_POST["name"])) {
 
} else {
    echo "<p class='error'>No se recibió nombre</p>";
}

// Iniciar sesión si no está iniciada
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validar y sanitizar el nombre de usuario
    if (isset($_POST["UserName"])) {
        // Eliminar espacios en blanco al inicio y final
        $username = trim($_POST["UserName"]);
        
   
        if (empty($username)) {
            echo "<p class='error'>El nombre de usuario no puede estar vacío</p>";
        } 

        elseif (strlen($username) < 4) {
            echo "<p class='error'>El nombre de usuario debe tener al menos 4 caracteres</p>";
        }
        elseif (strlen($username) > 20) {
            echo "<p class='error'>El nombre de usuario no puede exceder los 20 caracteres</p>";
        }
     
        elseif (!preg_match('/^[a-zA-Z0-9_]+$/', $username)) {
            echo "<p class='error'>Solo se permiten letras, números y guiones bajos (_)</p>";
        }
        else {
       
            $_SESSION['UserName'] = htmlspecialchars($username, ENT_QUOTES, 'UTF-8');
            
         
            echo "<p>Username: " . htmlspecialchars($username, ENT_QUOTES, 'UTF-8') . "</p>";
        }
    } 
}



if(isset($_SESSION['UserName'])) {
    echo  "Bienvenido ".($_SESSION['UserName']);
}else{
    echo "error";
}


?>