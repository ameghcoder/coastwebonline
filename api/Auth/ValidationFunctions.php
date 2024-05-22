<?php

try {

    class ValidationFunctions
    {        
        private function basicFilter($data){
            $data = trim($data);
            return $data;
        }
        public function validateEmail($data)
        {
            $data = self::basicFilter($data);
            $data = trim($data);
            $checkEmail = filter_var($data, FILTER_VALIDATE_EMAIL);
            $pattern = '/^(?!\.)(?!.*\.\.)[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}(?<!\.)$/';
            if ($checkEmail && preg_match($pattern, $checkEmail)) {
                return $checkEmail;
            } else {
                return false;
            }
        }
        public function validateNumber($data)
        {
            $data = self::basicFilter($data);
            $data = str_replace(" ", "", $data);
            $checkNumber = filter_var($data, FILTER_VALIDATE_INT);
            $pattern = '/^\d+$/';
            if($checkNumber && preg_match($pattern, $checkNumber)) {
                return $checkNumber;
            } else{
                return false;
            }
        }
        public function validateName($data)
        {
            $data = self::basicFilter($data);
            $pattern = '/^[a-z\s\-]*$/i';
            if(preg_match($pattern, $data)) {
                return $data;
            } else{
                return false;
            }
        }
        public function validateTel($data){
            $pattern = "/^(\+?\d{1,4}[\s-]?)?(\(?\d{3}\)?[\s-]?)?\d{3}[\s-]?\d{4}$/";
            if(preg_match($pattern, $data)){
                return $data;
            } else{
                return false;
            }
        }
        public function validateMsg($data){
            $data = trim($data);
            $data = filter_var($data, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $pattern = '/^[a-zA-Z0-9!@#$%^&*()_+\-=\[\]{};\'":\\\\|,.<>\/?\t\n ]*$/';

            if (preg_match($pattern, $data)) {
                return $data . PHP_EOL;
            } else {
                // Remove characters that do not match the pattern
                $data = preg_replace('/[^a-zA-Z0-9!@#$%^&*()_+\-=\[\]{};\'":\\\\|,.<>\/?\t\n ]/', '', $data);
                return $data . PHP_EOL;
            }
        }
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
