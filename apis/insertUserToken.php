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
class insertUserTokenClass{

    function insertUserToken(){
        $connection = new Connection();
        $conn = $connection->getConnection();
        //array for json response
        $response = array();
        $status="status";
        $message = "message";
        $token   = $_POST['token'];
        $user_id = $_POST['user_id'];
        $user_token_no = $_POST['user_token_no'];

        if(!empty($token)) {
            $authenticate_token = new authenticateToken();
            if ($authenticate_token->tokenAuthentication($token, $conn)) {
                $insert_user_token = "INSERT INTO user_token (user_id, user_token_no, user_token_creation_time, user_token_modification_time) VALUES ('$user_id', '$user_token_no', now(), now())";

                $result =$conn->exec($insert_user_token);

                if($result) {

                    echo json_encode(array($status=>1, $message=>"User Token Added"));            //  On Successful Login redirects to home.php
                    die();
                }
                else{
                    echo json_encode(array($status=>0, $message=>"User Token Not Added"));
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
    $user_token = new insertUserTokenClass();
    $user_token->insertUserToken();
}
else
{
    echo json_encode(array("message"=>"Bad Request"));
    die();
}