<?php 
$user = "bd00e0cf5e193e"; $password = "29eea358";
try{
$db = new PDO("mysql:host=eu-cdbr-west-01.cleardb.com;dbname=films", $user, $password);
}
catch (Exception $e)
{
    echo $e->getMessage();
}
?>
