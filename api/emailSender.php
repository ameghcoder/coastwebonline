<?php
date_default_timezone_set('Asia/Kolkata');
require_once $_SERVER['DOCUMENT_ROOT'] . '/api/connection.php';

class EmailSender{
    private $Name, $Email, $Tel, $Service, $Msg, $CustId, $Sender, $Subject, $CurrentTime;
    private const TABLE_NAME = "cwo_customers";

    public function __construct(array $data) {
        $this->Sender = "contact@coastweb.online";

        // customer data
        $this->Name = $data['name'];
        $this->Email = $data['email'];
        $this->Tel = $data['tel'];
        $this->Service = $data['service'];
        $this->Msg = $data['msg'];
        $this->CustId = $data['id'];
        $this->Subject = " want to contact Coastweb.online for " . $data['service'] . " purpose";

        // get date
        $currentTimestamp = time();
        $this->CurrentTime = date("Y-m-d H:i:s", $currentTimestamp);
    }
    private function updateEmailStatus(){
        $_emailStatus = "sent";
        $_conn = conn::connect();
        $_query = "UPDATE " . self::TABLE_NAME . " SET cust_email_status=? WHERE cust_id=?";
        $_pep_stmt = mysqli_prepare($_conn, $_query);
        if($_pep_stmt === false){
            // Handle query preparation error
            return false;
        }
        mysqli_stmt_bind_param($_pep_stmt, "si", $_emailStatus, $this->CustId);
        $_resp = mysqli_stmt_execute($_pep_stmt);
        
        mysqli_stmt_close($_pep_stmt);
        mysqli_close($_conn);
        
        return $_resp;
    }
    public function send(){
        
        // Define the recipient email address
        $to = $this->Email;
        $from = $this->Sender;

        // Define the email subject
        $subject = $this->Name . $this->Subject;

        // Define the HTML message
        $htmlFile = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/api/template/clientReceives.html");

        if($htmlFile === false){
            // Handle file read error
            return false;
        }
        $htmlFile = str_replace("[Name]", $this->Name, $htmlFile);
        $htmlFile = str_replace("[Email]", $this->Email, $htmlFile);
        $htmlFile = str_replace("[Service]", $this->Service, $htmlFile);
        $htmlFile = str_replace("[Your_Msg]", $this->Msg, $htmlFile);
        $htmlFile = str_replace("[Number]", $this->Tel, $htmlFile);
        $htmlFile = str_replace("[Date]", $this->CurrentTime, $htmlFile);

        // Define the email headers
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8\r\n";
        $headers .= "From: ". $from ."\r\n";
        $headers .= "Reply-To: $from\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion();

        // Send the email
        if (mail($to, $subject, $htmlFile, $headers)) {
            $this->sentToAdmin();
            return $this->updateEmailStatus();
        } else {
            return false;
        }
    }
    private function sentToAdmin(){
        // Define the recipient email address
        $to = "gloztik@gmail.com";
        $from = $this->Sender;

        // Define the email subject
        $subject = $this->Name . " contact to coastweb.online for " . $this->Service;

        // Define the HTML message
        $htmlFile = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/api/template/weReceives.html");

        if($htmlFile === false){
            // Handle file read error
            return false;
        }
        $htmlFile = str_replace("[Name]", $this->Name, $htmlFile);
        $htmlFile = str_replace("[Email]", $this->Email, $htmlFile);
        $htmlFile = str_replace("[Service]", $this->Service, $htmlFile);
        $htmlFile = str_replace("[Your_Msg]", $this->Msg, $htmlFile);
        $htmlFile = str_replace("[Number]", $this->Tel, $htmlFile);
        $htmlFile = str_replace("[Date]", $this->CurrentTime, $htmlFile);

        // Define the email headers
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8\r\n";
        $headers .= "From: ". $from ."\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion();

        // Send the email
        if (mail($to, $subject, $htmlFile, $headers)) {
            return true;
        } else {
            return false;
        }
    }
}