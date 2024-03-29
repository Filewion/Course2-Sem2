<?php session_start();?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <main>
        <?php
        if(isset($_POST['name'],$_POST['surname'],$_POST['age'],$_POST['salary'],$_POST['card_number']))
        {
            $_SESSION['dataArray'] = [$_POST['name'],$_POST['surname'],$_POST['age'],$_POST['salary'],$_POST['card_number']];
        } else {
            $_SESSION['dataArray'] = "None";
        }
        echo "<ui>";
        foreach($_SESSION['dataArray'] as $item)
        {
            echo '<li>' . $item . '</li>';
        }
        echo "<ui>";
        ?>
    </main>

</body>
</html>
