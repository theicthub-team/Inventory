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
class getCartClass{

    function getCart(){
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
                $get_cart = "select * from cart natural join stock";
                $getJson = $conn->prepare($get_cart);
                $getJson->execute();
                $result = $getJson->fetchAll(PDO::FETCH_ASSOC);
                if(count($result) > 0) {
                    foreach ($result as $data) {
                        array_push($response,
                            array(
                                'cart_id' => $data['cart_id'],
                                'cart_stock_id' => $data['cart_stock_id'],
                                'card_product_quantity' => $data['card_product_quantity'],
                                'cart_creation_time' => $data['cart_creation_time'],
                                'cart_modification_time' => $data['cart_modification_time']

                            ));
                    }
                    echo json_encode(array("cart"=>$response,$status=>1, $message=>"All Cart"));            //  On Successful Login redirects to home.php
                    die();
                }
                else{
                    echo json_encode(array("cart"=>null,$status=>0, $message=>"No Cart Available"));
                    die();
                }
            }
            else{
                echo json_encode(array("cart"=>null,$status=>0, $message=>"Token Authentication Error"));
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
    $cart = new getCartClass();
    $cart->getCart();
}
else
{
    echo json_encode(array("message"=>"Bad Request"));
    die();
}