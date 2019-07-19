<?php
/**
 * Created by PhpStorm.
 * User: abdullah
 * Date: 3/6/19
 * Time: 5:48 PM
 */
if(!isset($_SESSION)) {
    session_start();

}
class Connection{
    function getConnection(){
        $host       = "localhost";
        $username   = "root";
        $password   = "151151";
        $dbname     = "inventory_management_system";
        try{
            $conn    = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }catch (PDOException $e){
            echo "ERROR CONNECTIONF : " . $e->getMessage();
        }
        return null;
    }
}
