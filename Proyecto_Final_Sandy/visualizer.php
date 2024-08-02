<?php
    session_start();
    $picture = $_POST["picture"];
    $ruta_imagenes = "media/";
?>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?php echo "gale: $picture" ?></title>
           <link rel="stylesheet" href="styles/global.css">
           <link rel="stylesheet" href="styles/visualizer.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            background-image: url(fondo/Portada.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            background-attachment: fixed;
            flex-direction: column;
            min-height: 100vh; 
        }


        .picCont {
            display: flex;
            align-items: center;
            max-width: 600px; 
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            margin-right: 10px; 
        }
        img {
            max-width: 400px; 
            height: auto;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        nav {
            flex-shrink: 0; 
        }

        .picCont {
            flex: 1; 
            display: flex;
            justify-content: center; 
            align-items: center; 
        }
    </style>
        </head>
        <body>
        <nav>
        <a href="index.php"><h1>Galeria de imagenes</h1></a>
        <section class="menu">
        <?php if( isset( $_SESSION[ "usuario" ] ) && isset( $_SESSION[ "plan" ] ) ) { ?>
        
            <a href="logout.php">Cerrar sesion </a>
            <a href="upload.php">Iniciar sesion</a>

        <?php } else if( isset( $_SESSION[ "usuario" ] ) ) { ?>

            <a href="logout.php">Cerrar sesion </a>

        <?php } else { ?>
            <a href="login.php">Iniciar sesion</a>
            <a href="singUp.php">Registrarse</a>
        <?php } ?>
        </section>
    </nav>



         <section class="picCont">
            <?php
                $usuarioo = $_SESSION["usuario"];
                if( isset($_POST["picture"]) ) 
                {
                    echo "  <h1>$picture</h1>
                            <h2>$usuarioo</h2>
                            <a href='$ruta_imagenes$picture' download='$picture'>
                                <img src='$ruta_imagenes$picture'>
                            </a>
                        ";
                } else { header("Location: index.php"); }
            ?>
            </section>
        </body>
    </html>