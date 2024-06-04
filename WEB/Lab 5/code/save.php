<?php
function redirectToHome() : void
{
    header("Location: /");
    exit();
}


redirectToHome();