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
class insertContactClass{

    function insertContact(){
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
                $insert_contact = "INSERT INTO contact (contact_type, contact_name, contact_address, contact_designation, contact_mobile, contact_creation_time, contact_modification_time) VALUES ('$contact_type', '$contact_name', '$contact_address', '$contact_designation', '$contact_mobile', '$contact_creation_time', '$contact_modification_time', now(), now())";

                $result =$conn->exec($insert_contact);

                if($result) {

                    echo json_encode(array($status=>1, $message=>"Contact Added"));            //  On Successful Login redirects to home.php
                    die();
                }
                else{
                    echo json_encode(array($status=>0, $message=>"Contact Not Added"));
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
    $contact = new insertContactClass();
    $contact->insertContact();
}
else
{
    echo json_encode(array("message"=>"Bad Request"));
    die();
}