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
class insertCartClass{

    function insertCart(){
        $connection = new Connection();
        $conn = $connection->getConnection();
        //array for json response
        $response = array();
        $status="status";
        $message = "message";
        $token   = $_POST['token'];
        $cart_stock_id = $_POST['cart_stock_id'];
        $card_product_quantity = $_POST['card_product_quantity'];

        if(!empty($token)) {
            $authenticate_token = new authenticateToken();
            if ($authenticate_token->tokenAuthentication($token, $conn)) {
                $insert_cart = "INSERT INTO cart (cart_stock_id, card_product_quantity, cart_creation_time, cart_modification_time) VALUES ('$cart_stock_id', '$card_product_quantity', now(), now())";

                $result =$conn->exec($insert_cart);

                if($result) {

                    echo json_encode(array($status=>1, $message=>"Cart Added"));            //  On Successful Login redirects to home.php
                    die();
                }
                else{
                    echo json_encode(array($status=>0, $message=>"Cart Not Added"));
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
    $cart = new insertCartClass();
    $cart->insertCart();
}
else
{
    echo json_encode(array("message"=>"Bad Request"));
    die();
}