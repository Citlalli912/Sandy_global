<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria: Planes</title>
  <!--  <link rel="stylesheet" href="styles/plans.css"> -->

<style>
    body {
        margin: 0;
        padding: 0;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        flex-grow: 1;
        border-radius: 5px;
        width: 100%;
    }
    nav {
        background-color: black;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px;
    }

    nav a {
        text-decoration: none;
        color: #EE82EE;
        padding: 10px;
        align-items: center;
        font-size: 20px;
        background-color: transparent; 
        transition: background-color 0.3s ease;
    }
    #standar, .planGrid {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
    }

    #standar form,
    .planGrid form {
        width: 20%; 
        margin: 20px;
        text-align: center;
        
    }

    #standar form button,
    .planGrid form button {
        width: 100%;
        padding: 10px;
        background-color: 	#BA55D3;
        border: none;
        cursor: pointer;
    }

    .planBody {
        text-align: center;        
    }

    nav h1 {
    font-size: 40px;
    font-weight: bold;
    text-align: center;
    margin: 20px 0;
    background-color: transparent;
    color: #EE82EE;
    }
   
    h1 {
    font-size: 40px;
    font-weight: bold;
    text-align: center;
    color: black;    
    margin: 20px 0;
    background-color: transparent;
    }

    h2 {
        font-size: 35px;
        font-weight: bold;
        color: black;
    }

    p {
        font-size: 20px;   
        color: black;
        text-align: center;
        margin-bottom: 20px;
    }

    p {     
        color: black;
    }

    nav h1{
        display: flex;
        justify-content: center;
        background-color: #f0f0f0; 
        padding: 10px; 
        background-color: transparent;
    }
    
    nav {
        display: flex;
        flex-direction: column; 
        align-items: center;
    }

    .nav-links {
        display: flex;
        justify-content: center; 
        gap: 10px;
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

    <h1>Nuestros planes</h1>
    <p>Elige un pla para continuar</p>


    <?php if( isset( $_SESSION[ "usuario" ] ) && isset( $_SESSION[ "plan" ] ) == true ) { ?>

        <p>Upgrade yoour current plan!</p>
        
        <div id="standar">
          
                <input type="hidden" name="plan">
                <button type='submit' disabled>
                    <section class="planBody">
                        <h2>Standar</h2>
                        <p>Capacidad para subir hasta 5 imagenes en resolución estándar</p>
                        <p>Ya es tuyo!</p>
                    
                </button>
            </div>
          
            <form action="planManager.php"  method="post">
                <input type="hidden" name="plan" value="upgradeToAtia">
                <button type='submit'>
                    <section class="planBody">
                        <h2>Premium</h2>
                        <p>Capacidad para subir hasta 10 imagenes de alta resolución</p>
                    </section>
                </button>
            </form>
        </section>

    <?php } else if(isset($_SESSION["usuario"])) { ?>
   
        <p>Obtener plan!</p>
        <section class="planGrid">
            <form action="planManager.php" method="post">
                <input type="hidden" name="plan" value="getHymba">
                <button type='submit'>
                    <section class="planBody">
                        <h2>standar</h2>
                        <p>Capacidad para subir hasta 5 imagenes en resolución estándar</p>
                    </section>
                </button>
            </form>
   
            <form action="planManager.php" method="post">
                <input type="hidden" name="plan" value="getAtia">
                <button type='submit'>
                    <section class="planBody">
                        <h2>Premium</h2>
                        <p>Capacidad para subir hasta 10 imagenes de alta resolución</p>
                    </section>
                </button>
            </form>
        </section>



    <?php } else { ?>

        <p>Actualmente no te encuentras registrado, necesitas tener una cuanta para poder elegir un <a href="singUp.php">Registrar!</a></p>
        <section class="planGrid">
            <form>
                <input type="hidden" name="plan">
                <button type='submit' disabled>
                    <section class="planBody">
                        <h2>Standar</h2>
                        <p>Capacidad para subir hasta 5 imagenes en resolución estándar</p>
                    </section>
                </button>
            </form>

            <form>
                <input type="hidden" name="plan">
                <button type='submit' disabled>
                    <section class="planBody">
                        <h2>Premium</h2>
                        <p>Capacidad para subir hasta 10 imagenes de alta resolución</p>
                    </section>
                </button>
            </form>
        </section>

    <?php } ?>
</body>
</html>
