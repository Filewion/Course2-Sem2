<!-- Task 2.  -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task 2</title>
</head>
<body>
    <main>
    <form action="" method="POST"> <!-- Форма с текстареа и кнопкой -->
        <textarea name="text" rows="10" cols="20" placeholder="Enter your text"></textarea>
        <p><input type="submit" name="submit_button" value="Enter"></p>
    </form>

        <?php

        $text="";
        $symCount = 0;
        $wordCount = 0;

        if(isset($_POST['text']))
        {
            $text = $_POST['text'];
            $symCount = mb_strlen($text); // кол-во символов(mb_ для правильного подсчёта русских букв)

            $regexp = '/[a-zA-Zа-яёА-ЯЁ]+/ui'; // рег. выражение для слов
            $matches = [];
            $wordCount = preg_match_all($regexp,$text,$matches); // кол-во слов
            echo "Введённая строка: $text<br>";
            echo "Кол-во слов: $wordCount, кол-во символов: $symCount<br>";
        }



        ?>

    </main>
</body>
</html>


