<?php session_start();?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Session</title>
</head>
<body>
    <main>
        <?php
        if(isset($_POST['name'],$_POST['surname'],$_POST['age']))
        {
            $_SESSION['name'] = $_POST['name'];
            $_SESSION['surname'] = $_POST['surname'];
            $_SESSION['age'] = $_POST['age'];
        } else {
            $_SESSION['name'] = "";
            $_SESSION['surname'] = "";
            $_SESSION['age'] = "";
        }
        ?>
        Surname: <?= $_SESSION['surname'] . " " ?><br>
        Name: <?= $_SESSION['name'] . " " ?><br>
        Age: <?= $_SESSION['age'] . " "?><br>

    </main>
</body>
</html>
