<?php

try {
    class phase
    {
        private const TYPE = "production";
        public static function retPhase()
        {
            return self::TYPE;
        }
    }
} catch (Exception $e) {
    die();
}