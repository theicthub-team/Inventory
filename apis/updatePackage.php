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
class updatePackageClass{

    function updatePackage(){
        $connection = new Connection();
        $conn = $connection->getConnection();
        //array for json response
        $response = array();
        $status="status";
        $message = "message";
        $token   = $_POST['token'];
        $package_id   = $_POST['package_id'];
        $package_name = $_POST['package_name'];
        $package_start_date = $_POST['package_start_date'];
        $package_end_date = $_POST['package_end_date'];
        $package_price = $_POST['package_price'];

        if(!empty($token)) {
            $authenticate_token = new authenticateToken();
            if ($authenticate_token->tokenAuthentication($token, $conn)) {
                $get_package = "UPDATE package SET package_name = '$package_name', package_start_date = '$package_start_date', package_end_date = '$package_end_date', package_price = '$package_price' WHERE package_id='$package_id'";

                // Prepare statement
                $stmt = $conn->prepare($get_package);

                // execute the query
                $stmt->execute();

                if($stmt->rowCount()) {

                    echo json_encode(array($status=>1, $message=>"Package Colors Updated"));            //  On Successful Login redirects to home.php
                    die();
                }
                else{
                    echo json_encode(array($status=>0, $message=>"Package Color Not Updated"));
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
    $package = new updatePackageClass();
    $package->updatePackage();
}
else
{
    echo json_encode(array("message"=>"Bad Request"));
    die();
}
