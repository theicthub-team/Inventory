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
class updateCartClass{

    function updateCart(){
        $connection = new Connection();
        $conn = $connection->getConnection();
        //array for json response
        $response = array();
        $status="status";
        $message = "message";
        $token   = $_POST['token'];
        $cart_id   = $_POST['cart_id'];
        $cart_stock_id = $_POST['cart_stock_id'];
        $card_product_quantity = $_POST['card_product_quantity'];

        if(!empty($token)) {
            $authenticate_token = new authenticateToken();
            if ($authenticate_token->tokenAuthentication($token, $conn)) {
                $get_cart = "UPDATE cart SET cart_stock_id = '$cart_stock_id', card_product_quantity = '$card_product_quantity' WHERE cart_id='$cart_id'";

                // Prepare statement
                $stmt = $conn->prepare($get_cart);

                // execute the query
                $stmt->execute();

                if($stmt->rowCount()) {

                    echo json_encode(array($status=>1, $message=>"Cart Updated"));            //  On Successful Login redirects to home.php
                    die();
                }
                else{
                    echo json_encode(array($status=>0, $message=>"Cart Not Updated"));
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
    $cart = new updateCartClass();
    $cart->updateCart();
}
else
{
    echo json_encode(array("message"=>"Bad Request"));
    die();
}
