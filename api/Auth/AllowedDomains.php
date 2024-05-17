<?php

try {
    require_once $_SERVER['DOCUMENT_ROOT'] . "/api/Auth/PhaseType.php";

    class allowdDomains
    {
        public static function check()
        {
            $phaseType = phase::retPhase();
            if ($phaseType === "development") {
                return "coastwebonline.test";
            } elseif ($phaseType === "production") {
                return "coastweb.online";
            }
        }
    }
} catch (Exception $e) {
    die();
}
