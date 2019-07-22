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
class insertUserDesignationClass{

    function insertUserDesignation(){
        $connection = new Connection();
        $conn = $connection->getConnection();
        //array for json response
        $response = array();
        $status="status";
        $message = "message";
        $token   = $_POST['token'];
        $user_designation_Name   = $_POST['user_designation_Name'];

        if(!empty($token)) {
            $authenticate_token = new authenticateToken();
            if ($authenticate_token->tokenAuthentication($token, $conn)) {
                $insert_user_designation = "INSERT INTO user_designation (user_designation_Name) VALUES ('$user_designation_Name', now(), now())";

                $result =$conn->exec($insert_user_designation);

                if($result) {

                    echo json_encode(array($status=>1, $message=>"User Designation Added"));            //  On Successful Login redirects to home.php
                    die();
                }
                else{
                    echo json_encode(array($status=>0, $message=>"User Designation Not Added"));
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
    $user_designation = new insertUserDesignationClass();
    $user_designation->insertUserDesignation();
}
else
{
    echo json_encode(array("message"=>"Bad Request"));
    die();
}