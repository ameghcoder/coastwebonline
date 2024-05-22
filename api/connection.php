<?php

try {
    require_once $_SERVER['DOCUMENT_ROOT'] . "/api/Auth/PhaseType.php";
    class conn
    {
        public static function connect($_db_name = "cwo_info")
        {
            $hash = base64_decode('bG9jYWxob3N0fHU3MTU4MTk1MTVfY29hc3R3ZWJvbmxpbmV8eFo/QF1KdzJ8dTcxNTgxOTUxNV9jd29faW5mbw==');
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
