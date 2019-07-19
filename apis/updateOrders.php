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
class updateOrdersClass{

    function updateOrders(){
        $connection = new Connection();
        $conn = $connection->getConnection();
        //array for json response
        $response = array();
        $status="status";
        $message = "message";
        $token   = $_POST['token'];
        $orders_id   = $_POST['orders_id'];
        $orders_cart_id = $_POST['orders_cart_id'];
        $orders_contact_id = $_POST['orders_contact_id'];
        $orders_status = $_POST['orders_status'];
        $orders_total_cost = $_POST['orders_total_cost'];
        $orders_paid = $_POST['orders_paid'];
        $orders_type = $_POST['orders_type'];
        $orders_shipping_cost = $_POST['orders_shipping_cost'];
        $orders_date = $_POST['orders_date'];
        $orders_delivery_date = $_POST['orders_delivery_date'];
        $orders_discount = $_POST['orders_discount'];


        if(!empty($token)) {
            $authenticate_token = new authenticateToken();
            if ($authenticate_token->tokenAuthentication($token, $conn)) {
                $get_orders = "UPDATE orders SET orders_cart_id = '$orders_cart_id', orders_contact_id = '$orders_contact_id', orders_status = '$orders_status', orders_total_cost = '$orders_total_cost', orders_paid = '$orders_paid', orders_type = '$orders_type', orders_shipping_cost = '$orders_shipping_cost', orders_date = '$orders_date', orders_delivery_date = '$orders_delivery_date', orders_discount = '$orders_discount' WHERE orders_id='$orders_id'";

                // Prepare statement
                $stmt = $conn->prepare($get_orders);

                // execute the query
                $stmt->execute();

                if($stmt->rowCount()) {

                    echo json_encode(array($status=>1, $message=>"Orders Updated"));            //  On Successful Login redirects to home.php
                    die();
                }
                else{
                    echo json_encode(array($status=>0, $message=>"Orders Not Updated"));
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
    $orders = new updateOrdersClass();
    $orders->updateOrders();
}
else
{
    echo json_encode(array("message"=>"Bad Request"));
    die();
}
