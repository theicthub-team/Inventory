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
class insertProductColorClass{

    function insertProductColor(){
        $connection = new Connection();
        $conn = $connection->getConnection();
        //array for json response
        $response = array();
        $status="status";
        $message = "message";
        $token   = $_POST['token'];
        $product_color_name   = $_POST['product_color_name'];

        if(!empty($token)) {
            $authenticate_token = new authenticateToken();
            if ($authenticate_token->tokenAuthentication($token, $conn)) {
                $insert_product_color = "INSERT INTO product_color (product_color_name,product_color_creation_time,product_color_modification_time) VALUES ('$brand_name', now(), now())";

                $result =$conn->exec($insert_product_color);

                if($result) {

                    echo json_encode(array($status=>1, $message=>"Product Color Added"));            //  On Successful Login redirects to home.php
                    die();
                }
                else{
                    echo json_encode(array($status=>0, $message=>"Product Color Not Added"));
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
    $product_color = new insertProductColorClass();
    $product_color->insertProductColor();
}
else
{
    echo json_encode(array("message"=>"Bad Request"));
    die();
}