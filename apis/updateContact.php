contact_id<?php
/**
 * Created by PhpStorm.
 * User: abdullah
 * Date: 3/6/19
 * Time: 5:50 PM
 */

// include db connect class
require_once __DIR__ . '/Connection.php';
require './authenticateToken.php';
class updateContactClass{

    function updateContact(){
        $connection = new Connection();
        $conn = $connection->getConnection();
        //array for json response
        $response = array();
        $status="status";
        $message = "message";
        $token   = $_POST['token'];
        $contact_type = $_POST['contact_type'];
        $contact_name = $_POST['contact_name'];
        $contact_address = $_POST['contact_address'];
        $contact_designation = $_POST['contact_designation'];
        $contact_mobile = $_POST['contact_mobile'];

        if(!empty($token)) {
            $authenticate_token = new authenticateToken();
            if ($authenticate_token->tokenAuthentication($token, $conn)) {
                $get_contact = "UPDATE contact SET contact_type = '$contact_type', contact_name = '$contact_name', contact_address = '$contact_address', contact_designation = '$contact_designation', contact_mobile = '$contact_mobile', contact_creation_time = '$contact_creation_time', contact_modification_time = '$contact_modification_time' WHERE contact_id='$contact_id'";

                // Prepare statement
                $stmt = $conn->prepare($get_contact);

                // execute the query
                $stmt->execute();

                if($stmt->rowCount()) {

                    echo json_encode(array($status=>1, $message=>"Contact Updated"));            //  On Successful Login redirects to home.php
                    die();
                }
                else{
                    echo json_encode(array($status=>0, $message=>"Contact Not Updated"));
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
    $contact = new updateContactClass();
    $contact->updateContact();
}
else
{
    echo json_encode(array("message"=>"Bad Request"));
    die();
}