<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria de imagenes</title>
    <link rel="stylesheet" href="styles/global.css">
    <link rel="stylesheet" href="styles/index.css">

<style>
        body
    {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin: 1%;
    padding: 1%;
    }

    .header-content {
        display: flex;
    
        width: 80%;
        justify-content: flex-end; 
        align-items: center; 
    }

    .header-left img {
        width: 50px; 
        height: auto;
        margin-right: 10px; 
    }


    .header-right h1 {
        font-size: 24px;
        font-family: cursive;
        margin: 0; 
    }

    nav {
        margin: 1%;
        padding: 1%;
    }

    
    nav a  {
    text-decoration: none;
    color: #333;
    padding: 10px;
    align-items: center;
    font-size: 20px;
     }






   
 </style>
</head>


<body>
    <nav>
    <div class="header-content">
        <div class="header-left">
            <img src="fondo/camara.png" alt="Imagen de ejemplo">
        </div>
        <div class="header-right">
        <h1 style="font-size: 24px; font-family: cursive;">Mi galería</h1>

        </div>
    </div>




        <a href="index.php"><h1>Galeria de imagenes</h1></a>
        <section class="menu">
        <?php if( isset( $_SESSION[ "usuario" ] ) && isset( $_SESSION[ "plan" ] ) ) { ?>
        
            <a href="logout.php" class="button" style="background-color: white; font-size: 20px; color: black; font-weight: bold;">Cerrar sesion </a>
            <a href="upload.php" class="button" style="background-color: white; font-size: 20px; color: black; font-weight: bold;">Subir imagen</a>

        <?php } else if( isset( $_SESSION[ "usuario" ] ) ) { ?>

            <a href="logout.php" class="button" style="background-color: white; font-size: 20px; color: black; font-weight: bold;">Cerrar sesion </a>
            <a href="plans.php" class="button" style="background-color: white; font-size: 20px; color: black; font-weight: bold;">Elegir plan</a>

        <?php } else { ?>

            <a href="login.php" class="button" style="background-color: white; font-size: 20px; color: black; font-weight: bold;">Iniciar sesion</a>
            <a href="singUp.php" class="button" style="background-color: white; font-size: 20px; color: black; font-weight: bold;">Registrarse</a>
            <a href="plans.php" class="button" style="background-color: white; font-size: 20px; color: black; font-weight: bold;">Planes</a>
            <br>
        <?php } ?>
        </section>
        <br>
    </nav>

    <section class="grid">
    <?php
        global $ruta_imagenes;
        $ruta_imagenes = "media/";
        $imagenes = opendir( $ruta_imagenes );
        $hay_imagenes = false;
        if( $imagenes ) 
        {
            while( $imagen = readdir( $imagenes ) )
            {
                if( is_file( $ruta_imagenes . $imagen ) && getimagesize( $ruta_imagenes . $imagen ) ) 
                {
                    echo "  <form action='visualizer.php' method='post'>
                            <input type='hidden' name='picture' value='$imagen'>
                            <button type='submit'><img src='$ruta_imagenes$imagen'></button>
                            </form>";
                    $hay_imagenes = true;
                }
            }
            closedir( $imagenes );
        }
        else
        {
            echo "Error: al cargar carpeta de imagenes";
        }
        if( !$hay_imagenes )
        {
            echo "No hay imagenes aun. Sube la primera imagen";
        }
    ?>
    </section>
</body>
</html>