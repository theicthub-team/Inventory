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
class updateWarehouseClass{

    function updateWarehouse(){
        $connection = new Connection();
        $conn = $connection->getConnection();
        //array for json response
        $response = array();
        $status="status";
        $message = "message";
        $token   = $_POST['token'];
        $warehouse_id   = $_POST['warehouse_id'];
        $warehouse_name = $_POST['warehouse_name'];
        $warehouse_address = $_POST['warehouse_address'];
        $warehouse_lat = $_POST['warehouse_lat'];
        $warehouse_long = $_POST['warehouse_long'];

        if(!empty($token)) {
            $authenticate_token = new authenticateToken();
            if ($authenticate_token->tokenAuthentication($token, $conn)) {
                $get_warehouse = "UPDATE warehouse SET warehouse_name = $warehouse_name, warehouse_address = $warehouse_address, warehouse_lat = $warehouse_lat, warehouse_long = $warehouse_long WHERE warehouse_id='$warehouse_id'";

                // Prepare statement
                $stmt = $conn->prepare($get_warehouse);

                // execute the query
                $stmt->execute();

                if($stmt->rowCount()) {

                    echo json_encode(array($status=>1, $message=>"Warehouse Updated"));            //  On Successful Login redirects to home.php
                    die();
                }
                else{
                    echo json_encode(array($status=>0, $message=>"Warehouse Not Updated"));
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
    $warehouse = new updateWarehouseClass();
    $warehouse->updateWarehouse();
}
else
{
    echo json_encode(array("message"=>"Bad Request"));
    die();
}