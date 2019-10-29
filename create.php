<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <h1> Nouvel étudiant</h1>
    <form action="store.php" method="post" class="form-online_" accept-charset="utf-8">
    <div class="form-group">
    <label>Firstname</label>
    <input type="text" name="firstname" class="form-control" >
    </div>
    <div class="form-group">
    <label>Lastname</label>
    <input type="text" name="lastname" class="form-control">
    </div>
    <div class="form-group">
    <label>Email</label>
    <input type="text" name="email" class="form-control">
    </div> 
    <div class="form-group">
    <label>Phone</label>
    <input type="number" name="phone" class="form-control">
    </div>
    <br>
    <br>
    <div class="form-group">
    <button type="submit" class="btn btn-primary">Enregister</button>
    <button type="reset" class="btn btn-secondary">Annuler</button>
    </div>
    </form>
    <div>

    <?php
    include "dbconnexion.php";
        if (!empty($_POST)) {
            $id= $_POST['id'];
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email= $_POST['email'];
            $phone = $_POST['phone'];

            $nb = $cnx->exec("INSERT INTO students(firstname,lastname,email,phone) VALUES ('$id','$firstname','$lastname','$email','$phone')");

            echo $nb.' étudiant ajouté avec succés';
        }
    ?>
    </div>
</body>
</html>