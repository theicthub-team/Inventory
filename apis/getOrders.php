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
class getOrdersClass{

    function getOrders(){
        $connection = new Connection();
        $conn = $connection->getConnection();
        //array for json response
        $response = array();
        $status="status";
        $message = "message";
        $token   = $_POST['token'];

        if(!empty($token)) {
            $authenticate_token = new authenticateToken();
            if ($authenticate_token->tokenAuthentication($token, $conn)) {
                $get_orders = "select * from orders natural join cart natural join contact";
                $getJson = $conn->prepare($get_orders);
                $getJson->execute();
                $result = $getJson->fetchAll(PDO::FETCH_ASSOC);
                if(count($result) > 0) {
                    foreach ($result as $data) {
                        array_push($response,
                            array(
                                'orders_id' => $data['orders_id'],
                                'orders_cart_id' => $data['orders_cart_id'],
                                'orders_contact_id' => $data['orders_contact_id'],
                                'orders_status' => $data['orders_status'],
                                'orders_total_cost' => $data['orders_total_cost'],
                                'orders_paid' => $data['orders_paid'],
                                'orders_type' => $data['orders_type'],
                                'orders_shipping_cost' => $data['orders_shipping_cost'],
                                'orders_date' => $data['orders_date'],
                                'orders_delivery_date' => $data['orders_delivery_date'],
                                'orders_discount' => $data['orders_discount'],
                                'orders_creation_time' => $data['orders_creation_time'],
                                'orders_modification_time' => $data['orders_modification_time'],

                                'cart_id' => $data['cart_id'],
                                'cart_stock_id' => $data['cart_stock_id'],
                                'card_product_quantity' => $data['card_product_quantity'],
                                'cart_creation_time' => $data['cart_creation_time'],
                                'cart_modification_time' => $data['cart_modification_time'],

                                'contact_id' => $data['contact_id'],
                                'contact_type' => $data['contact_type'],
                                'contact_name' => $data['contact_name'],
                                'contact_address' => $data['contact_address'],
                                'contact_designation' => $data['contact_designation'],
                                'contact_mobile' => $data['contact_mobile'],
                                'contact_creation_time' => $data['contact_creation_time'],
                                'contact_modification_time' => $data['contact_modification_time']
                            ));
                    }
                    echo json_encode(array("orders"=>$response,$status=>1, $message=>"All Orders"));            //  On Successful Login redirects to home.php
                    die();
                }
                else{
                    echo json_encode(array("orders"=>null,$status=>0, $message=>"No Orders Available"));
                    die();
                }
            }
            else{
                echo json_encode(array("orders"=>null,$status=>0, $message=>"Token Authentication Error"));
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
    $orders = new getOrdersClass();
    $orders->getOrders();
}
else
{
    echo json_encode(array("message"=>"Bad Request"));
    die();
}