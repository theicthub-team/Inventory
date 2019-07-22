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
class getProductSizeClass{

    function getProductSize(){
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
                $get_product_size = "select * from product_size";
                $getJson = $conn->prepare($get_product_size);
                $getJson->execute();
                $result = $getJson->fetchAll(PDO::FETCH_ASSOC);
                if(count($result) > 0) {
                    foreach ($result as $data) {
                        array_push($response,
                            array(
                                'product_size_id' => $data['product_size_id'],
                                'product_size_name' => $data['product_size_name'],
                                'product_size_creation_time' => $data['product_size_creation_time'],
                                'product_size_modification_time' => $data['product_size_modification_time']
                            ));
                    }
                    echo json_encode(array("product_size"=>$response,$status=>1, $message=>"All Product Size"));            //  On Successful Login redirects to home.php
                    die();
                }
                else{
                    echo json_encode(array("product_size"=>null,$status=>0, $message=>"No Product Size Available"));
                    die();
                }
            }
            else{
                echo json_encode(array("product_size"=>null,$status=>0, $message=>"Token Authentication Error"));
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
    $product_size = new getProductSizeClass();
    $product_size->getProductSize();
}
else
{
    echo json_encode(array("message"=>"Bad Request"));
    die();
}