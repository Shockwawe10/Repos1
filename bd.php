<?php 
$user = "root"; $password = "";
try{
$db = new PDO("mysql:host=localhost;dbname=films", $user, $password);
}
catch (Exception $e)
{
    echo $e->getMessage();
}
?>