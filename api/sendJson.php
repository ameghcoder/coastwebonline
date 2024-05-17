<?php

class Sender{

    public static function msg($type, $msg)
    {
        $msgArr = array(
            "msg" => $msg,
            "flag" => $type
        );
        if ($type === 'error' || $type === 'failed' || $type === 'e') {
            $msgArr['flag'] = 'e';
        } elseif ($type === 'success' || $type === 'fulfilled' || $type === 's') {
            $msgArr['flag'] = 's';
        }
        echo json_encode($msgArr);
    }
}