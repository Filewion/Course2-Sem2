<?php
require 'index3.php';
require '../vendor/autoload.php';

$client = new \Google_Client();
$client->setApplicationName('Lab 4 - Sheets');
$client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
$client->setAccessType('offline');
$client->setAuthConfig(  '../lab4-422216-6bcc32552dce.json');
$service = new Google_Service_Sheets($client);
$spreadSheetId = "1714BJ58VdDgHyPqUJm_VajIq9ssUU5XVG9C7FDaD_F8";
function redirectToHome() : void
{
    header('Location:index3.php');
    exit();
}

if (false === isset($_POST['email'], $_POST['category'], $_POST['title'], $_POST['description'])) {
    redirectToHome();
}


$email = $_POST['email'];
$category = $_POST['category'];
$title = $_POST['title'];
$description = $_POST['description'];

$range = "mysheet";
$values = [
    [$category,$email ,$title, $description]
];
$body = new Google_Service_Sheets_ValueRange(['values' => $values]);
$row = sizeof(($service->spreadsheets_values->get($spreadSheetId, $range))->getValues()) + 1;
$params = [
    'valueInputOption' => 'RAW'
];
try
{
    $service->spreadsheets_values->update($spreadSheetId, 'mysheet!A'.($row), $body, $params);
}
catch (\Google\Service\Exception $e)
{
    echo "Error";
}
redirectToHome();