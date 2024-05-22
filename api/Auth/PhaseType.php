<?php

try {
    class phase
    {
        private const TYPE = "development";
        public static function retPhase()
        {
            return self::TYPE;
        }
    }
} catch (Exception $e) {
    die();
}