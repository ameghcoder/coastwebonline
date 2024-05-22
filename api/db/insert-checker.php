<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/api/connection.php';
class Data{
    private const TABLE_NAME = "cwo_customers";

    public function insertCustomer(array $data){
        $_id = "";
        $_conn = conn::connect();
        $_query = "INSERT INTO ". self::TABLE_NAME ." (cust_name, cust_email, cust_tel, cust_service, cust_msg, cust_countrycodes, cust_email_status) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $_pep_stmt = mysqli_prepare(
            $_conn, 
            $_query
        );
        mysqli_stmt_bind_param(
            $_pep_stmt, 
            "sssssss", 
            $data['name'], 
            $data['email'], 
            $data['tel'], 
            $data['service'], 
            $data['msg'], 
            $data['codes'], 
            $data['status']
        );
        mysqli_stmt_execute($_pep_stmt);
        $_id = mysqli_stmt_insert_id($_pep_stmt);
        mysqli_stmt_close($_pep_stmt);
        mysqli_close($_conn);
        
        return empty($_id) ? false : $_id;
    }
    public function deleteCustomer($id){
        $_conn = conn::connect();
        $_query = "DELETE FROM ". self::TABLE_NAME ." WHERE cust_id=$id";
        $_pep_stmt = mysqli_prepare($_conn, $_query);
        mysqli_stmt_bind_param($_pep_stmt, "i", $id);
        $_reps = mysqli_stmt_execute($_pep_stmt);
        mysqli_stmt_close($_pep_stmt);
        mysqli_close($_conn);
        return $_reps;
    }
}