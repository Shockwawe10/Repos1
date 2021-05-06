<style>
    table, tr, td ,th{
   border: 3px solid #e1cb79;
   color:white;
}   
table{
    border-collapse: collapse;
    margin:auto;
    border-radius: 5px;
    table-layout:fixed;
   
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
    h2 {
        font-size: 120%;
        font-family: Verdana, Arial, Helvetica, sans-serif;
        color: white;
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
    .button{
        margin-left: auto;
        margin-right: auto;
        border-radius: 12px;
        color:white;
        background-color: #b49729 ;
        font-size: 12px;
        padding: 10px 10px;
        border: 2px solid #e1cb79;
        font-weight: bolder;
        text-decoration: none;
    }
    a{
        text-decoration:none;
        color:white;
        font-size: 15px;

    }
    </style>
            
        <table class="nav">
            <td><a href="films.php">Рєєстрація</a></td>
            <td><a href="index.php">Записи</a></td>
        </table>
      
<div>
        <?php include 'func.php'; ?>
        <?php include 'bd.php'; ?>
        
        <?php
        $i=0;
          $entries = getAllDb($db);
        ?>
        <table>
            <tr>
                <th>Номер</th>
                <th>Режисер</th>
                <th>Назва фільму</th>
                <th>Актори</th>
                <th>Студія</th>
                <th>Рік випуску</th>
                <th>Ціна квитка</th>
            </tr>
            <?php foreach ($entries as $entry){?>
                <tr>
                    <td><?php echo ++$i ?></td>
                    <td><?php echo $entry ['Director'];?></td>
                    <td><?php echo $entry ['Name_of_the_film'];?></td>
                    <td><?php echo $entry ['Cast'];?></td>
                    <td><?php echo $entry ['Studio'];?></td>
                    <td><?php echo $entry ['Year'];?></td>
                    <td><?php echo $entry ['Ticket_price'];?></td>
                    <td><a class = "button" href = "delete.php?Number=<?php echo $entry ['Number'];?>">Видалити</a></td>
                    <td><a class = "button" href = "update.php?Number=<?php echo $entry ['Number'];?>">Редагувати</a></td>                    
                </tr>
                <br>
            <?php } ?>
        </table>
</div>
