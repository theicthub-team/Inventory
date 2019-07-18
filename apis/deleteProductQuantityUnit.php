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
class deleteProductQuantityUnit{

    function deleteAProductQuantityUnit(){
        $connection = new Connection();
        $conn = $connection->getConnection();
        //array for json response
        $response = array();
        $status="status";
        $message = "message";
        $token   = $_POST['token'];
        $product_quantity_unit_id   = $_POST['product_quantity_unit_id'];

        if(!empty($token)) {
            $authenticate_token = new authenticateToken();
            if ($authenticate_token->tokenAuthentication($token, $conn)) {
                $delete_product_quantity_unit= "Delete From product_quantity_unit WHERE product_quantity_unit_id='$product_quantity_unit_id'";

                // Prepare statement
                $stmt = $conn->prepare($delete_product_quantity_unit);

                // execute the query
                $stmt->execute();

                if($stmt->rowCount()) {

                    echo json_encode(array($status=>1, $message=>"Product Quantity Unit Deleted"));            //  On Successful Login redirects to home.php
                    die();
                }
                else{
                    echo json_encode(array($status=>0, $message=>"Product Quantity Unit Not Deleted"));
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
    $product_quantity_unit = new deleteProductQuantityUnit();
    $product_quantity_unit->deleteAProductQuantityUnit();
}
else
{
    echo json_encode(array("message"=>"Bad Request"));
    die();
}