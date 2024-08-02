<?php
    session_start();
    if(isset($_SESSION["usuario"]))
    {
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Subir Imagenes</title>
        <link rel="stylesheet" href="styles/global.css">
        <link rel="stylesheet" href="styles/upload.css">

<style>
     body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        background-image: url(fondo/Portada.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
    }
     form {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 800px; /* Ajusta el ancho según tus necesidades */
        margin: 0 auto;
        margin-top: 60px;
        background-color: white;
        border-radius: 25px;
    }

    nav {
        background-color: #F0E68C; 
       }
       input[type="submit"] {
        background-color: yellow;
        color: black;
        border: none;
        padding: 5px 10px;
        border-radius: 5px;
        cursor: pointer;
    }
</style>
    </head>

    
    <body>
        <nav>
            <a href="index.php"><h1>Galeria de imagenes</h1></a>
            <section class="menu">
                <a href="logout.php">Cerrar sesion</a>
            </section>
        </nav>        
      
        <form action="fileUpload.php" enctype="multipart/form-data" method="post">
        <h1>Subir Imagenes</h1>
        <h2><?php echo "Bienvenido, " . $_SESSION["usuario"] ?></h2>
            <input type="file" name="archivo">
            <br>
            <input type="submit" value="Enviar">
            <br><br>
        </form>

    </body>
</html>
<?php 
}   
else
{
    header( "Location: login.php" );
}
?>