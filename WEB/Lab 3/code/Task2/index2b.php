<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task 2b</title>
</head>
<body>
    <main>
        <form action="index2b_session.php" method="POST"> <!-- Форма ввода имени, фамилии, возраста -->
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
            <input type="submit" value="Enter">
        </form>
    </main>
</body>
</html>

