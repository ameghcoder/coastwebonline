<?php

class CSRFToken
{
    public static function csrfTokenGenerator()
    {
        $_gen_ran = bin2hex(random_bytes(25));
        return hash('sha256', $_gen_ran, false);
    }
}
