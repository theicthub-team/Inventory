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
class getProductQuantityUnit{

    function getAllProductQuantityUnit(){
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
                $get_product_quantity_unit = "select * from product_quantity_unit";
                $getJson = $conn->prepare($get_product_quantity_unit);
                $getJson->execute();
                $result = $getJson->fetchAll(PDO::FETCH_ASSOC);
                if(count($result) > 0) {
                    foreach ($result as $data) {
                        array_push($response,
                            array(
                                'product_quantity_unit_id' => $data['product_quantity_unit_id'],
                                'product_quantity_unit_name' => $data['product_quantity_unit_name'],
                                'product_quantity_unit_creation_time' => $data['product_quantity_unit_creation_time'],
                                'product_quantity_unit_modification_time' => $data['product_quantity_unit_modification_time']
                            ));
                    }
                    echo json_encode(array("product_quantity_unit"=>$response,$status=>1, $message=>"All Product Quantity Unit"));            //  On Successful Login redirects to home.php
                    die();
                }
                else{
                    echo json_encode(array("product_quantity_unit"=>null,$status=>0, $message=>"No Product Quantity Unit Available"));
                    die();
                }
            }
            else{
                echo json_encode(array("product_quantity_unit"=>null,$status=>0, $message=>"Token Authentication Error"));
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
    $product_quantity = new getProductQuantityUnit();
    $product_quantity->getAllProductQuantityUnit();
}
else
{
    echo json_encode(array("message"=>"Bad Request"));
    die();
}