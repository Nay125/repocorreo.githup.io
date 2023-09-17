<!DOCTYPE html>
<html>
    <head>
<title>Mail</title>
<link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>
    <h6>Nallely Zav</h6>
<form method="post">
    <input type="texto" placeholder="name" name="name" required="">
    <input type="email" placeholder=" email" name="email" required="">
    <input type="texto" placeholder="asunto" name="asunto" required="">
    <textarea placeholder="mensaje" name="msg"></textarea>
    <input type="submit" name ="enviar" >
</form>
<?php
include("correo.php");
?>
    </body>
</html>
