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
class updateProduct{

    function updateAProduct(){
        $connection = new Connection();
        $conn = $connection->getConnection();
        //array for json response
        $response = array();
        $status="status";
        $message = "message";
        $token   = $_POST['token'];
        $product_id   = $_POST['product_id'];
        $product_name   = $_POST['product_name'];
        $product_category_id  = $_POST['product_category_id'];
        $product_brand_id  = $_POST['product_brand_id'];
        $product_batch_id  = $_POST['product_batch_id'];

        if(!empty($token)) {
            $authenticate_token = new authenticateToken();
            if ($authenticate_token->tokenAuthentication($token, $conn)) {
                $update_product = "UPDATE product SET product_name='$product_name', product_category_id='$product_category_id', product_brand_id='$product_brand_id', product_batch_id='$product_batch_id' WHERE product_id='$product_id'";

                // Prepare statement
                $stmt = $conn->prepare($update_product);

                // execute the query
                $stmt->execute();

                if($stmt->rowCount()) {

                    echo json_encode(array($status=>1, $message=>"Product Updated"));            //  On Successful Login redirects to home.php
                    die();
                }
                else{
                    echo json_encode(array($status=>0, $message=>"Product Not Updated"));
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
    $product = new updateProduct();
    $product->updateAProduct();
}
else
{
    echo json_encode(array("message"=>"Bad Request"));
    die();
}