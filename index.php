<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
   <div class="container">
       <form action="create.php" action="post" >
    <h1>liste des étudiants DSI 21 ISET BIZERTE 2019/2020 </h1>
    <button class="btn btn-primary" >Nouvel étudiant</button><br>
<table class="table table-hover">
<tr>
    <th>ID</th>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Opérations</th>
   
</tr>
<?php
include "dbconnexion.php";
$rep= $cnx->query('SELECT * FROM students');
while($data=$rep->fetch()){

    echo '<tr>';
    echo '<td>'.$data['id'].'</td>';
    echo '<td>'.$data['firstname'].'</td>';
    echo '<td>'.$data['lastname'].'</td>';
    echo '<td>'.$data['email'].'</td>';
    echo '<td>'.$data['phone'].'</td>';

    echo '</tr>';
}
?> 
    
</div>
</form>
</body>
</html>