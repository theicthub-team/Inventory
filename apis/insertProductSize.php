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
class insertProductSizeClass{

    function insertProductSize(){
        $connection = new Connection();
        $conn = $connection->getConnection();
        //array for json response
        $response = array();
        $status="status";
        $message = "message";
        $token   = $_POST['token'];
        $product_size_name   = $_POST['product_size_name'];

        if(!empty($token)) {
            $authenticate_token = new authenticateToken();
            if ($authenticate_token->tokenAuthentication($token, $conn)) {
                $insert_product_size = "INSERT INTO product_size (product_size_name,product_size_creation_time,product_size_modification_time) VALUES ('$product_size_name', now(), now())";

                $result =$conn->exec($insert_product_size);

                if($result) {

                    echo json_encode(array($status=>1, $message=>"Brand Added"));            //  On Successful Login redirects to home.php
                    die();
                }
                else{
                    echo json_encode(array($status=>0, $message=>"Brand Not Added"));
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
    $product_size = new insertProductSizeClass();
    $product_size->insertProductSize();
}
else
{
    echo json_encode(array("message"=>"Bad Request"));
    die();
}
