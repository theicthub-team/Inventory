<?php
/**
 * Created by PhpStorm.
 * User: abdullah
 * Date: 3/6/19
 * Time: 5:50 PM
 */

// include db connect class
require_once __DIR__ . '/Connection.php';
require './authenticateToken.php';
class insertWarehouseClass{

    function insertWarehouse(){
        $connection = new Connection();
        $conn = $connection->getConnection();
        //array for json response
        $response = array();
        $status="status";
        $message = "message";
        $token   = $_POST['token'];
        $warehouse_name = $_POST['warehouse_name'];
        $warehouse_address = $_POST['warehouse_address'];
        $warehouse_lat = $_POST['warehouse_lat'];
        $warehouse_long = $_POST['warehouse_long'];


        if(!empty($token)) {
            $authenticate_token = new authenticateToken();
            if ($authenticate_token->tokenAuthentication($token, $conn)) {
                $insert_warehouse = "INSERT INTO warehouse (warehouse_name, warehouse_address, warehouse_lat, warehouse_long, warehouse_creation_time, warehouse_modification_time) VALUES ($warehouse_name, $warehouse_address, $warehouse_lat, $warehouse_long, now(), now())";

                $result =$conn->exec($insert_warehouse);

                if($result) {

                    echo json_encode(array($status=>1, $message=>"Warehouse Added"));            //  On Successful Login redirects to home.php
                    die();
                }
                else{
                    echo json_encode(array($status=>0, $message=>"Warehouse Not Added"));
                    die();
                }
            }
            else{
                echo json_encode(array($status=>0, $message=>"Token Authentication Error"));
                die();
            }

        }
        else{
            echo json_encode(array($status=>0, $message=>"Token Not Found"));
            die();
        }


    }
}
if(isset($_POST['token']) )   // it checks whether the user clicked login button or not
{
    $warehouse = new insertWarehouseClass();
    $warehouse->insertWarehouse();
}
else
{
    echo json_encode(array("message"=>"Bad Request"));
    die();
}