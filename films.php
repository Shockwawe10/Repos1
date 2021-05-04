<html>
    <head>
    <title>Фільми</title>
    <style>
    h2 {
        font-size: 120%;
        font-family: Verdana, Arial, Helvetica, sans-serif;
        color: white;
    }
    label{
        font-size: 80%;
        font-weight:bolder;
        font-family: Verdana, Arial, Helvetica, sans-serif;
        padding-bottom: 3px;
        color: white;
    }
    form.form{
        border: 3px solid #e1cb79;
        border-radius: 5px;
        background-color: rgba(225, 203, 121, 0.2);
        margin-left: auto;
        margin-right: auto;
        width: 300px;
        margin-top: 15px;
        
    }
    
    body{
        background-image: url(img/2020.jpg);
        background-size: cover;
        
    }
    input{
        width:200px;
        background-color:  #e1cb79;
        border-radius: 2px;
        color: black;
        font-family: Verdana, Arial, Helvetica, bold;

    }
    input.butt{
        width:200px;
        margin-left: auto;
        margin-right: auto;
        border-radius: 12px;
        color:white;
        background-color: #b49729 ;
        padding: 15px 32px;
        font-size: 16px;
        border: 2px solid #e1cb79;
        font-weight: bolder;
    }
    
   a {
        text-decoration:none;
        color:white;
        font-size: 15px;
    }
    table, tr, td ,th{
   border: 3px solid #e1cb79;
   color:white;
}   
table{
    border-collapse: collapse;
    margin:auto;
    border-radius: 5px;
   
}
 td {
    padding: 15px;
    text-align: left;
    background-color:rgba(225, 203, 121, 0.4);
}
th{
    padding: 15px;
    text-align: left;
    background-color:rgba(180, 151, 41, 0.2);
}
    
    </style>
    </head>
    <body>
        
    <table class="nav">
            <td><a href="films.php">Рєєстрація фільму</a></td>
            <td><a href="index.php">Записи</a></td>
        </table>

    <form class="form" action="save_films.php" method="post" align="center">
    <h2 align="center">Інформація про фільм</h2>
<p>
    <label>Режисер<br></label>
    <input name="Director" type="text" size="15" maxlength="30">
    </p>

<p>
    <label>Назва фільму<br></label>
    <input name="Name_of_the_film" type="text" size="15" maxlength="30">
    </p>

    <p>
    <label>Актори<br></label>
    <input name="Cast" type="text" size="15" maxlength="40">
    </p>

    <p>
    <label>Студія<br></label>
    <input name="Studio" type="text" size="15" maxlength="15">
    </p>

    <p>
    <label>Рік випуску<br></label>
    <input name="Year" type="text" size="15" maxlength="5">
    </p>

    <p>
    <label>Ціна квитка<br></label>
    <input name="Ticket_price" type="text" size="15" maxlength="10">
    </p>
    <p align="center">
    <input class="butt" type="submit" name="submit" value="Зберегти дані">
</form>

 
</p>
    </body>
    </html>