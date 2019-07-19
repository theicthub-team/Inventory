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
class insertUserClass{

    function insertUser(){
        $connection = new Connection();
        $conn = $connection->getConnection();
        //array for json response
        $response = array();
        $status="status";
        $message = "message";
        $token   = $_POST['token'];
        $user_Name = $_POST['user_Name'];
        $user_PhoneNo = $_POST['user_PhoneNo'];
        $user_Email = $_POST['user_Email'];
        $user_Password = $_POST['user_Password'];
        $user_Status = $_POST['user_Status'];
        $user_designation_id = $_POST['user_designation_id'];
        $user_type_id = $_POST['user_type_id'];

        if(!empty($token)) {
            $authenticate_token = new authenticateToken();
            if ($authenticate_token->tokenAuthentication($token, $conn)) {
                $insert_user = "INSERT INTO user (user_Name, user_PhoneNo, user_Email, user_Password, user_Status, user_designation_id, user_type_id, user_creation_time, user_modification_time) VALUES ('$user_Name', '$user_PhoneNo', '$user_Email', '$user_Password', '$user_Status', '$user_designation_id', '$user_type_id', now(), now())";

                $result =$conn->exec($insert_user);

                if($result) {

                    echo json_encode(array($status=>1, $message=>"User Added"));            //  On Successful Login redirects to home.php
                    die();
                }
                else{
                    echo json_encode(array($status=>0, $message=>"User Not Added"));
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
    $user = new insertUserClass();
    $user->insertUser();
}
else
{
    echo json_encode(array("message"=>"Bad Request"));
    die();
}