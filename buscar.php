<?php

$con = mysqli_connect("localhost", "root", "", "agenda");
$id = $_POST['id'];
$sql = "SELECT * from contato where id='$id'";
$result = mysqli_query($con, $sql);
$usuario = mysqli_fetch_array($result);

echo $usuario['fone'];

?>