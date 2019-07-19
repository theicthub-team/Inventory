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
class updateUserTokenClass{

    function updateUserToken(){
        $connection = new Connection();
        $conn = $connection->getConnection();
        //array for json response
        $response = array();
        $status="status";
        $message = "message";
        $token   = $_POST['token'];
        $user_token_id   = $_POST['user_token_id'];
        $user_id = $_POST['user_id'];
        $user_token_no = $_POST['user_token_no'];

        if(!empty($token)) {
            $authenticate_token = new authenticateToken();
            if ($authenticate_token->tokenAuthentication($token, $conn)) {
                $get_user_token = "UPDATE user_token SET user_id = '$user_id', user_token_no = '$user_token_no' WHERE user_token_id='$user_token_id'";

                // Prepare statement
                $stmt = $conn->prepare($get_user_token);

                // execute the query
                $stmt->execute();

                if($stmt->rowCount()) {

                    echo json_encode(array($status=>1, $message=>"User Token Updated"));            //  On Successful Login redirects to home.php
                    die();
                }
                else{
                    echo json_encode(array($status=>0, $message=>"User Token Not Updated"));
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
    $user_token = new updateUserTokenClass();
    $user_token->updateUserToken();
}
else
{
    echo json_encode(array("message"=>"Bad Request"));
    die();
}