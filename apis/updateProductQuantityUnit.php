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
class updateProductQuantityUnit{

    function updateAProductQuantityUnit(){
        $connection = new Connection();
        $conn = $connection->getConnection();
        //array for json response
        $response = array();
        $status="status";
        $message = "message";
        $token   = $_POST['token'];
        $product_quantity_unit_id   = $_POST['product_quantity_unit_id'];
        $product_quantity_unit_name   = $_POST['product_quantity_unit_name'];

        if(!empty($token)) {
            $authenticate_token = new authenticateToken();
            if ($authenticate_token->tokenAuthentication($token, $conn)) {
                $update_product_quantity_unit = "UPDATE product_quantity_unit SET product_quantity_unit_name='$product_quantity_unit_name' WHERE product_quantity_unit_id='$product_quantity_unit_id'";

                // Prepare statement
                $stmt = $conn->prepare($update_product_quantity_unit);

                // execute the query
                $stmt->execute();

                if($stmt->rowCount()) {

                    echo json_encode(array($status=>1, $message=>"Product Quantity Unit Updated"));            //  On Successful Login redirects to home.php
                    die();
                }
                else{
                    echo json_encode(array($status=>0, $message=>"Product Quantity Unit Not Updated"));
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
    $product_quantity_unit = new updateProductQuantityUnit();
    $product_quantity_unit->updateAProductQuantityUnit();
}
else
{
    echo json_encode(array("message"=>"Bad Request"));
    die();
}