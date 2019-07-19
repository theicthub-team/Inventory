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
class insertBrand{

    function insertABrand(){
        $connection = new Connection();
        $conn = $connection->getConnection();
        //array for json response
        $response = array();
        $status="status";
        $message = "message";
        $token   = $_POST['token'];
        $brand_name   = $_POST['brand_name'];

        if(!empty($token)) {
            $authenticate_token = new authenticateToken();
            if ($authenticate_token->tokenAuthentication($token, $conn)) {
                $insert_brand = "INSERT INTO brand (brand_id,brand_name,brand_creation_time,brand_modification_time) VALUES (0, '$brand_name', now(), now())";

                $result =$conn->exec($insert_brand);

                if($result) {

                    echo json_encode(array($status=>1, $message=>"Brand Added"));            //  On Successful Login redirects to home.php
                    die();
                }
                else{
                    echo json_encode(array($status=>0, $message=>"Brand Not Added"));
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
    $brands = new insertBrand();
    $brands->insertABrand();
}
else
{
    echo json_encode(array("message"=>"Bad Request"));
    die();
}