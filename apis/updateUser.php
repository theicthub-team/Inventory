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
class updateUserClass{

    function updateUser(){
        $connection = new Connection();
        $conn = $connection->getConnection();
        //array for json response
        $response = array();
        $status="status";
        $message = "message";
        $token   = $_POST['token'];
        $user_id   = $_POST['user_id'];
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
                $get_user = "UPDATE user SET user_Name = '$user_Name', user_PhoneNo = '$user_PhoneNo', user_Email = '$user_Email', user_Password = '$user_Password', user_Status = '$user_Status', user_designation_id = '$user_designation_id', user_type_id = '$user_type_id' WHERE user_id='$user_id'";

                // Prepare statement
                $stmt = $conn->prepare($get_user);

                // execute the query
                $stmt->execute();

                if($stmt->rowCount()) {

                    echo json_encode(array($status=>1, $message=>"User Updated"));            //  On Successful Login redirects to home.php
                    die();
                }
                else{
                    echo json_encode(array($status=>0, $message=>"User Not Updated"));
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
    $user = new updateUserClass();
    $user->updateUser();
}
else
{
    echo json_encode(array("message"=>"Bad Request"));
    die();
}