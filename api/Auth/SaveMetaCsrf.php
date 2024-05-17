<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/api/Auth/GenerateCsrf.php";
session_start();
$_SESSION["auth_code"] = CSRFToken::csrfTokenGenerator();
$_csrf_token = $_SESSION["auth_code"];
echo '<meta name="csrf-token" content="' . $_csrf_token . '">';