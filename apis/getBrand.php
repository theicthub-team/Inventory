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
class getBrand{

    function getAllBrand(){
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
                $get_brand = "select * from brand";
                $getJson = $conn->prepare($get_brand);
                $getJson->execute();
                $result = $getJson->fetchAll(PDO::FETCH_ASSOC);
                if(count($result) > 0) {
                    foreach ($result as $data) {
                        array_push($response,
                            array(
                                'brand_id' => $data['brand_id'],
                                'brand_name' => $data['brand_name'],
                                'brand_creation_time' => $data['brand_creation_time'],
                                'brand_modification_time' => $data['brand_modification_time']
                            ));
                    }
                    echo json_encode(array("brands"=>$response,$status=>1, $message=>"All Brands"));            //  On Successful Login redirects to home.php
                    die();
                }
                else{
                    echo json_encode(array("brands"=>null,$status=>0, $message=>"No Brands Available"));
                    die();
                }
            }
            else{
                echo json_encode(array("brands"=>null,$status=>0, $message=>"Token Authentication Error"));
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
    $brands = new getBrand();
    $brands->getAllBrand();
}
else
{
    echo json_encode(array("message"=>"Bad Request"));
    die();
}