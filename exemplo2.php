<?php
// Conectando com o banco de dados
$con = mysqli_connect("localhost","root","","agenda");
 
if(!$con){
    echo "Falha na conexão! <br/>";
}
else{
    echo "Conectado! <br/>";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Ajax e jQuery</title>
        <link rel="stylesheet" href="css/exemplo2.css" />
        <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="js/exemplo2.js"></script>
    </head>
    <body>

        <div id="container">
            <h1>Ajax e jQuery</h1>
            <h2>Requisições em um banco de dados, sem refresh</h2>
            <table border="1" width="100%" cellpadding="3" cellspacing="3">
                <tr>
                    <th>Nome</th>
                    <th>Telefone</th>
                </tr>
                <?php 
                    $sql = "SELECT * from contato";
                    $result =  mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($result)){
                ?>
                        <tr>
                            <td><?php echo utf8_encode($row["nome"]); ?></td>
                            <!-- <td style="text-align: center"><?php //echo utf8_encode($row["fone"]);  ?></td> -->
                            <td style="text-align: center"><a href="#" rel="<?php echo $row['id']; ?>" class="solicitar">solicitar telefone</a></td>
                        </tr>
                <?php
                    }
                ?>
            </table>


        </div>

    </body>
</html>