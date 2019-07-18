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
class insertProduct{

    function insertAProduct(){
        $connection = new Connection();
        $conn = $connection->getConnection();
        //array for json response
        $response = array();
        $status="status";
        $message = "message";
        $token   = $_POST['token'];
        $product_name  = $_POST['product_name'];
        $product_category_id   = $_POST['product_category_id'];
        $product_brand_id   = $_POST['product_brand_id'];
        $product_batch_id  = $_POST['product_batch_id'];

        if(!empty($token)) {
            $authenticate_token = new authenticateToken();
            if ($authenticate_token->tokenAuthentication($token, $conn)) {
                $insert_product = "INSERT INTO product (product_id,product_name,product_category_id,product_brand_id,product_batch_id,product_creation_time,product_modification_time) VALUES (0, '$product_name', '$product_category_id', '$product_brand_id', '$product_batch_id', now(), now())";

                $result =$conn->exec($insert_product);

                if($result) {

                    echo json_encode(array($status=>1, $message=>"Product Added"));            //  On Successful Login redirects to home.php
                    die();
                }
                else{
                    echo json_encode(array($status=>0, $message=>"Product Not Added"));
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
    $product = new insertProduct();
    $product->insertAProduct();
}
else
{
    echo json_encode(array("message"=>"Bad Request"));
    die();
}