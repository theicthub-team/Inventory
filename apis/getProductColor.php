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
class getProductColorClass{

    function getProductColor(){
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
                $get_product_color = "select * from product_color";
                $getJson = $conn->prepare($get_product_color);
                $getJson->execute();
                $result = $getJson->fetchAll(PDO::FETCH_ASSOC);
                if(count($result) > 0) {
                    foreach ($result as $data) {
                        array_push($response,
                            array(
                                'product_color_id' => $data['product_color_id'],
                                'product_color_name' => $data['product_color_name'],
                                'product_color_creation_time' => $data['product_color_creation_time'],
                                'product_color_modification_time' => $data['product_color_modification_time'],
                            ));
                    }
                    echo json_encode(array("product_color"=>$response,$status=>1, $message=>"All Product Color"));            //  On Successful Login redirects to home.php
                    die();
                }
                else{
                    echo json_encode(array("product_color"=>null,$status=>0, $message=>"No Product Color Available"));
                    die();
                }
            }
            else{
                echo json_encode(array("product_color"=>null,$status=>0, $message=>"Token Authentication Error"));
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
    $product_color = new getProductColorClass();
    $product_color->getProductColor();
}
else
{
    echo json_encode(array("message"=>"Bad Request"));
    die();
}