<?php

try {
    require_once $_SERVER['DOCUMENT_ROOT'] . "/api/Auth/PhaseType.php";
    class conn
    {
        public static function connect($_db_name = "dceyewr_prelaunching")
        {
            $hash = base64_decode('bG9jYWxob3N0fHU2NDg1NjEwNzNfZGNleWV3cnw3eWFeal5kQStCfHU2NDg1NjEwNzNfY3VzdG9tZXJfb2ZmZXI=');
            $hash = explode("|", $hash);
            $phaseType = phase::retPhase();
            if ($phaseType === "development") {
                $conn = mysqli_connect("localhost", "root", "", $_db_name);
            } else {
                $conn = mysqli_connect($hash[0], $hash[1], $hash[2], $hash[3]);
            }
            if ($conn) {
                return $conn;
            } else {
                throw new Exception("Error" . mysqli_connect_error());
            }
        }
        
    }
} catch (Exception $e) {
    die();
}
