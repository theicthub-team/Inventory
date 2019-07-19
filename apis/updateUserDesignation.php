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
class updateUserDesignationClass{

    function updateUserDesignation(){
        $connection = new Connection();
        $conn = $connection->getConnection();
        //array for json response
        $response = array();
        $status="status";
        $message = "message";
        $token   = $_POST['token'];
        $user_designation_id   = $_POST['user_designation_id'];
        $user_designation_name   = $_POST['user_designation_name'];

        if(!empty($token)) {
            $authenticate_token = new authenticateToken();
            if ($authenticate_token->tokenAuthentication($token, $conn)) {
                $get_user_designation = "UPDATE user_designation SET user_designation_Name='$user_designation_Name' WHERE user_designation_id='$user_designation_id'";

                // Prepare statement
                $stmt = $conn->prepare($get_user_designation);

                // execute the query
                $stmt->execute();

                if($stmt->rowCount()) {

                    echo json_encode(array($status=>1, $message=>"User Designation Updated"));            //  On Successful Login redirects to home.php
                    die();
                }
                else{
                    echo json_encode(array($status=>0, $message=>"User Designation Not Updated"));
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
    $user_designation = new updateUserDesignationClass();
    $user_designation->updateUserDesignation();
}
else
{
    echo json_encode(array("message"=>"Bad Request"));
    die();
}
