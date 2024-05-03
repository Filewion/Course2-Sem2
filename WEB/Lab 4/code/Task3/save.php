
<?php
require 'index3.php';

$client = new \Google_Client();
$client->setApplicationName('Lab 4 - Sheets');
$client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
$client->setAccessType('offline');
$client->setAuthConfig(  '../lab4-422216-6bcc32552dce.json');
$service = new Google_Service_Sheets($client);
$spreadSheetId = "1714BJ58VdDgHyPqUJm_VajIq9ssUU5XVG9C7FDaD_F8";
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

if (false === file_put_contents($filePath, $description))
{
    throw new Exception("Something went wrong");
}
chmod($filePath, 0777);
redirectToHome();