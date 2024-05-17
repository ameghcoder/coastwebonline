<?php


require_once $_SERVER['DOCUMENT_ROOT'] . '/api/Auth/VerifyToken.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/api/sendJson.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/api/Auth/ValidationFunctions.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/api/db/insert-checker.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/api/emailSender.php';


$_Authenticator = new Authenticator("POST");
// Authenticate request
if(
    $_Authenticator->check()
){
    // validate data
    $validate = new ValidationFunctions();
    $name = isset($_POST['name']) ? $validate->validateName($_POST['name']) : false;
    $email = isset($_POST['email']) ? $validate->validateEmail($_POST['email']) : false;
    $telNumber = isset($_POST['number']) ? $validate->validateNumber($_POST['number']) : false;
    $service = isset($_POST['service']) ? $validate->validateTel($_POST['service']) : false;
    $msg = isset($_POST['msg']) ? $validate->validateMsg($_POST['msg']) : false;

    if($name && $email && $telNumber && $service && $msg){

        // insert the data
        $insertCustomerData = new Data();
        $insertCustomerData = $insertCustomerData->insertCustomer($name, $email, $telNumber, $service, $msg);
        if(!$insertCustomerData){
            Sender::msg("e", "Something goes wrong, Refresh the page and Try again");
            die();
        }

        // Now send the email
        $emailResp = new EmailSender($name, $email, $telNumber, $service, $msg, $insertCustomerData);
        if($emailResp->send()){
            Sender::msg("s", "We received your application, check your inbox, We connect with you as soon as possible.");
        } else{
            Sender::msg("s", "We received your application, We connect with you as soon as possible.");
        }

    } else{
        Sender::msg("e", "Entered data is not valid, Please try again");
    }

} else{
    Sender::msg("e", "Invalid Request");
}