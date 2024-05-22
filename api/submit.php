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
    $_data = $_POST['data'];
    if($_data){
        $_data = json_decode($_data, true);

        // Now validate the data
        $validate = new ValidationFunctions();
        $name = $validate->validateName($_data['name']) ? $_data['name'] : false;
        $email = $validate->validateEmail($_data['email']) ? $_data['email'] : false;
        $phoneNumber = $validate->validateTel($_data['tel']) ? $_data['tel'] : false;
        $msg = $validate->validateMsg($_data['msg']) ? $_data['msg'] : false;
        $service = $_data['service'];
        $countryDialCode = $_data['countrydial'];
        $countryCode = $_data['countrycode'];

        if(
            $name && $email && $phoneNumber && $msg &&
            !empty($service) && !empty($countryDialCode) && !empty($countryCode)
        ){
            $data = array(
                "name" => $name,
                "email" => $email,
                "tel" => $phoneNumber,
                "service" => $service,
                "msg" => $msg,
                "codes" => $countryCode . '-' . $countryDialCode,
                "status" => "pending"
            );
            $resp = new Data();
            $resp = $resp->insertCustomer($data);

            if($resp && $resp > 0){
                $data["id"] = $resp;
                $emailResp = new EmailSender($data);
                if($emailResp){
                    Sender::msg("s", "We received your message, Thanks for connect with us.");
                } else{
                    Sender::msg("e", "Something goes wrong, Try again after Refresh the Page");
                }
            } else{
                Sender::msg("e", "Something goes wrong, Try again");
            }
        } else{
            Sender::msg("e", "Some of the field data is invalid, Please check & try again");
        }

    } else{
        Sender::msg("e", "Entered data is not valid, Please try again");
    }

} else{
    Sender::msg("e", "Invalid Request");
}