<?php
require '../vendor/autoload.php';

$client = new \Google_Client();
$client->setApplicationName('Lab 4 - Sheets');
$client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
$client->setAccessType('offline');
$client->setAuthConfig(  '../lab4-422216-6bcc32552dce.json');
$service = new Google_Service_Sheets($client);
$spreadSheetId = "1714BJ58VdDgHyPqUJm_VajIq9ssUU5XVG9C7FDaD_F8";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task 3</title>
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
        <thead>
        <th>Category</th>
        <th>Title</th>
        <th>Description</th>
        </thead>
        <thead>
        <?php
        $headersRange = "mysheet!A1:D1";
        try {
            $headers = $service->spreadsheets_values->get($spreadSheetId, $headersRange);
        } catch (\Google\Service\Exception $e) {
        }
        if (null != $headers) {
            foreach ($headers as $row) {
                foreach ($row as $item)
                    echo "<th>$item</th>";
            }
        }
        ?>
        </thead>
        <tbody>
        <?php
        $rangeOfAllContent = "mysheet!A2:D999";
        try {
            $rowsArray = $service->spreadsheets_values->get($spreadSheetId, rangeOfAllContent);
        } catch (\Google\Service\Exception $e) {
        }
        if (null != $rowsArray) {
            foreach ($rowsArray as $row) {
                echo "<tr>";
                foreach ($row as $item) {
                    echo "<td>" . $item . "</td>";
                }
                echo "</tr>";
            }
        }?>
        </tbody>
    </table>
</div>
</body>
</html>
