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
class getProduct{

    function getAllProduct(){
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
                $get_product = "SELECT * FROM product NATURAL JOIN category NATURAL JOIN brand NATURAL JOIN batch";
                $getJson = $conn->prepare($get_product);
                $getJson->execute();
                $result = $getJson->fetchAll(PDO::FETCH_ASSOC);
                if(count($result) > 0) {
                    foreach ($result as $data) {
                        array_push($response,
                            array(
                                'product_id' => $data['product_id'],
                                'product_name' => $data['product_name'],
                                'category_id' => $data['category_id'],
                                'category_name' => $data['category_name'],
                                'category_parent_id' => $data['category_parent_id'],
                                'brand_id' => $data['brand_id'],
                                'brand_name' => $data['brand_name'],
                                'batch_id' => $data['batch_id'],
                                'batch_name' => $data['batch_name'],
                                'batch_description' => $data['batch_description'],
                                'product_creation_time' => $data['product_creation_time'],
                                'product_modification_time' => $data['product_modification_time']
                            ));
                    }
                    echo json_encode(array("product"=>$response,$status=>1, $message=>"All Product"));            //  On Successful Login redirects to home.php
                    die();
                }
                else{
                    echo json_encode(array("product"=>null,$status=>0, $message=>"No Product Available"));
                    die();
                }
            }
            else{
                echo json_encode(array("product"=>null,$status=>0, $message=>"Token Authentication Error"));
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
    $product = new getProduct();
    $product->getAllProduct();
}
else
{
    echo json_encode(array("message"=>"Bad Request"));
    die();
}