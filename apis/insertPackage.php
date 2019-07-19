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
class insertPackageClass{

    function insertPackage(){
        $connection = new Connection();
        $conn = $connection->getConnection();
        //array for json response
        $response = array();
        $status="status";
        $message = "message";
        $token   = $_POST['token'];
        $package_name = $_POST['package_name'];
        $package_start_date = $_POST['package_start_date'];
        $package_end_date = $_POST['package_end_date'];
        $package_price = $_POST['package_price'];

        if(!empty($token)) {
            $authenticate_token = new authenticateToken();
            if ($authenticate_token->tokenAuthentication($token, $conn)) {
                $insert_package = "INSERT INTO package (package_name,package_start_date, package_end_date, package_price, package_creation_time,package_modification_time) VALUES ('$package_name', '$package_start_date', '$package_end_date', '$package_price', now(), now())";

                $result =$conn->exec($insert_package);

                if($result) {

                    echo json_encode(array($status=>1, $message=>"Package Color Added"));            //  On Successful Login redirects to home.php
                    die();
                }
                else{
                    echo json_encode(array($status=>0, $message=>"Package Color Not Added"));
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
    $package = new insertPackageClass();
    $package->insertPackage();
}
else
{
    echo json_encode(array("message"=>"Bad Request"));
    die();
}