<?php
$mysqli = new mysqli('db','root','helloworld','web');

if (mysqli_connect_errno())
{
    print f("Подключение к серверу MySQL невозможно. Код ошибки: %s\n", mysqli_connect_error());
    exit;
}

$mysqli->query('INSERT INTO ad (email, title, description, category) VALUES("test@test.com", "title", "desc", "other")');



































