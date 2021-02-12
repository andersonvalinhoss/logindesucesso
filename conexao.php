<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', '');
define('BANCODB', 'db');

$connect = mysqli_connect(HOST, USUARIO, SENHA, BANCODB) or die ('Não foi possível conectar');
?>
