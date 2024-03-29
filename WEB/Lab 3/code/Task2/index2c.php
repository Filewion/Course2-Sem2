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
        <form action="index2c_session.php" method="POST"> <!-- Форма ввода имени, фамилии, возраста -->
            <label for="name">
                Name:
                <input type="text" name="name" >
            </label>
            <label for="surname">
                Surname:
                <input type="text" name="surname" >
            </label>
            <label for="age">
                Age:
                <input type="text" name="age" >
            </label>
            <label for="salary">
                Salary:
                <input type="text" name="salary" >
            </label>
            <label for="card_number">
                Card number:
                <input type="text" name="card_number" >
            </label>
            <input type="submit" value="Enter">
        </form>
    </main>

</body>
</html>
