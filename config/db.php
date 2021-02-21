<?php
//connexion à la base de donnée

try{
    $db=new PDO('mysql:host=localhost;dbname=tuto;charset=utf8','root','');
}

catch(PDOException $e)
{
    echo "Connection failed: ".$e->getMessage();
}

?>