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
class insertProductQuantityUnit{

    function insertAProductQuantityUnit(){
        $connection = new Connection();
        $conn = $connection->getConnection();
        //array for json response
        $response = array();
        $status="status";
        $message = "message";
        $token   = $_POST['token'];
        $product_quantity_unit_name   = $_POST['product_quantity_unit_name'];

        if(!empty($token)) {
            $authenticate_token = new authenticateToken();
            if ($authenticate_token->tokenAuthentication($token, $conn)) {
                $insert_product_quantity_unit = "INSERT INTO product_quantity_unit (product_quantity_unit_id,product_quantity_unit_name,product_quantity_unit_creation_time,product_quantity_unit_modification_time) VALUES (0, '$product_quantity_unit_name', now(), now())";

                $result =$conn->exec($insert_product_quantity_unit);

                if($result) {

                    echo json_encode(array($status=>1, $message=>"Product Qunaitity Unit Added"));            //  On Successful Login redirects to home.php
                    die();
                }
                else{
                    echo json_encode(array($status=>0, $message=>"Product Qunaitity Unit Not Added"));
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
    $product_quantity_unit = new insertProductQuantityUnit();
    $product_quantity_unit->insertAProductQuantityUnit();
}
else
{
    echo json_encode(array("message"=>"Bad Request"));
    die();
}