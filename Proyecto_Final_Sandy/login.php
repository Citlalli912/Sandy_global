<?php

    session_start();
    if(isset($_SESSION["usuario"])){ header("location: index.php"); }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="styles/global.css">
    <link rel="stylesheet" href="styles/login.css">

    <style>
        body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        background: linear-gradient(150deg, #d247bd, #5ee1d6);
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
    }


    form {
        max-width: 400px; 
        margin: 0 auto; 
        padding: 20px; 
        border: 1px solid #ccc; 
        background-color: #fff; 
        border-radius: 10px;
    }

    label, input {
        display: block;
        margin-bottom: 10px;
    }

    input[type="submit"] {
            background-color: #BA55D3;
            color: black;
            border: none;
            padding: 10px 20px;
            border-radius: 30px;
            cursor: pointer;
            font-size: 20px;
            font-weight: bold; 
            transition: background-color 0.3s ease-in-out;
        }

    input[type="submit"]:hover {
        background-color: #800080;
    }

    .imagen {
        border-bottom: 2px solid #ccc; 
        padding-bottom: 10px; 
    }
    nav {
        background-color: black; 
       }

    nav a, h1{
        color: #EE82EE;
    }

       form {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 300px; 
        margin: 0 auto;
        margin-top: 60px;
        
    }

        

</style>
</head>


<body>
    <nav>
        <a href="index.php"><h1>Galeria de imagenes</h1></a>
        <section class="menu">
            <a href="singUp.php">Registrar</a>
            <a href="plans.php">Planes</a>
        </section>
    </nav>
    <form action="loginAuth.php" method="post">
    <form action="signUpAuth.php" method="post">
    <div class="imagen">
            <script src="https://cdn.lordicon.com/lordicon.js"></script>
            <lord-icon
            src="https://cdn.lordicon.com/bgebyztw.json"
            
            trigger="in"
            state="in-reveal"
            colors="primary:#800080,secondary:#C71585"
            style="width:150px;height:150px">
            </lord-icon>
         </div>
         <br>
        <label for="user">Nombre</label>
        <input type="text" name="user" id="user">
        <label for="pass">Contraseña</label>
        <input type="password" name="pass" id="pass">
        <input type="submit" value="Ingresar">
    </form>
    <br><br><br><br>
</body>
</html>