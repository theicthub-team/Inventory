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
class insertUserTypeClass{

    function insertUserType(){
        $connection = new Connection();
        $conn = $connection->getConnection();
        //array for json response
        $response = array();
        $status="status";
        $message = "message";
        $token   = $_POST['token'];
        $user_type_Name = $_POST['user_type_Name'];
        $user_type_access_level = $_POST['user_type_access_level'];

        if(!empty($token)) {
            $authenticate_token = new authenticateToken();
            if ($authenticate_token->tokenAuthentication($token, $conn)) {
                $insert_user_type = "INSERT INTO user_type (user_type_Name, user_type_access_level, user_type_creation_time, user_type_modification_time) VALUES ('$user_type_Name', '$user_type_access_level', now(), now())";

                $result =$conn->exec($insert_user_type);

                if($result) {

                    echo json_encode(array($status=>1, $message=>"User Type Added"));            //  On Successful Login redirects to home.php
                    die();
                }
                else{
                    echo json_encode(array($status=>0, $message=>"User Type Not Added"));
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
    $user_type = new insertUserTypeClass();
    $user_type->insertUserType();
}
else
{
    echo json_encode(array("message"=>"Bad Request"));
    die();
}
