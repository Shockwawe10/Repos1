<?php
$director = $_POST['Director'];
$name_of_the_film = $_POST['Name_of_the_film']; 
$cast = $_POST['Cast']; 
$studio = $_POST['Studio']; 
$year = $_POST['Year']; 
$ticket_price = $_POST['Ticket_price'];
include ("bd.php");
$result =  ("INSERT INTO films_1 (Director,Name_of_the_film,Cast,Studio,Year,Ticket_price) VALUES('$director','$name_of_the_film','$cast','$studio','$year','$ticket_price')");
$stmt = $db->prepare($result);
$stmt->execute();
    ?>
    <style>
        body{
        background-image: url(img/2020.jpg);
        background-size: cover;
        }
        p,a {text-decoration:none;
        color:white;
        font-size: 20px;
        font-weight: bold;
       
        }
        a:hover{
        color:#e1cb79
        }

    </style>
    <div>
     <p align="center">Дані надіслано! Ви можете їх знайти на <a href='index.php'>сайті.</a><p>
    </div>

