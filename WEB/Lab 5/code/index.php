<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab 5</title>
</head>
<body>
<div id="form">
    <form action="save.php" method="POST">
        <label for="email">Email</label>
        <input type="email" name="email" required>
        <label for="category">Category</label>
        <select name="category" required>
            <?php
            $files=scandir('./categories');
            foreach($files as $item)
            {
                if('.' === $item || '..' === $item) continue;
                if (is_dir('categories/'.$item))
                {
                    echo "<option value=$item> $item" . "</option>";
                }
            }
            ?>
        </select>
        <label for="title">Title</label>
        <input type="text" name="title" required>

        <label for="description">Description</label>
        <textarea rows="3" name="description"></textarea>

        <input type="submit" value="Save">

    </form>
</div>
<div id="table">
    <table>
        <tbody>
        <?php
        $sqlBase = new mysqli('db', 'root', 'helloworld', 'web', 3306);

        if (mysqli_connect_errno()) {
            printf("Код ошибки: %s\n", mysqli_connect_error());
            exit;
        }

        $result = $sqlBase->query("SELECT email, category, title, description FROM web.ad");

        foreach ($sqlBase->query("SELECT * FROM web.ad") as $row)
        {
            $email = $row['email']; $category = $row['category']; $title = $row['title']; $description = $row['description'];
            echo "$title $description $category";
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>
