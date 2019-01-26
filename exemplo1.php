<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ajax e jQuery</title>
        <link rel="stylesheet" href="css/estilos.css" />
        <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="js/exemplo1.js"></script>
    </head>
    <body>
        <div id="container">
            <a id="home" href="home.php">Home</a>
            <a href="missao.php">Missão</a>
            <a href="visao.php">Visão</a>
            <a href="valores.php">Valores</a>
            <div id="loader"><img src="imagens/ajax-loader.gif" /></div>

            <div id="content">
                <?php require_once 'home.php'; ?>
            </div>
        </div>

    </body>
</html>
