<?php
function redirectToHome() : void
{
    header("Location: /");
    exit();
}

if (false === isset($_POST['email'], $_POST['category'], $_POST['title'], $_POST['description'])) {
    redirectToHome();
}

$email = $_POST['email'];
$category = $_POST['category'];
$title = $_POST['title'];
$description = $_POST['description'];


$filePath = "categories/{$category}/{$title}.txt";

if (false === file_put_contents($filePath, $desc))
{
    throw new Exception("Something went wrong");
}
chmod($filePath, 0777);
redirectToHome();