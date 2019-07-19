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
class deleteOrdersClass{

    function deleteOrders(){
        $connection = new Connection();
        $conn = $connection->getConnection();
        //array for json response
        $response = array();
        $status="status";
        $message = "message";
        $token   = $_POST['token'];
        $orders_id   = $_POST['orders_id'];

        if(!empty($token)) {
            $authenticate_token = new authenticateToken();
            if ($authenticate_token->tokenAuthentication($token, $conn)) {
                $get_orders = "Delete From orders WHERE orders_id='$orders_id'";

                // Prepare statement
                $stmt = $conn->prepare($get_orders);

                // execute the query
                $stmt->execute();

                if($stmt->rowCount()) {

                    echo json_encode(array($status=>1, $message=>"Orders Deleted"));            //  On Successful Login redirects to home.php
                    die();
                }
                else{
                    echo json_encode(array($status=>0, $message=>"Orders Not Deleted"));
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
    $orders = new deleteOrdersClass();
    $orders->deleteOrders();
}
else
{
    echo json_encode(array("message"=>"Bad Request"));
    die();
}