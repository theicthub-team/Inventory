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
class getContactClass{

    function getContact(){
        $connection = new Connection();
        $conn = $connection->getConnection();
        //array for json response
        $response = array();
        $status="status";
        $message = "message";
        $token   = $_POST['token'];

        if(!empty($token)) {
            $authenticate_token = new authenticateToken();
            if ($authenticate_token->tokenAuthentication($token, $conn)) {
                $get_contact = "select * from contact";
                $getJson = $conn->prepare($get_contact);
                $getJson->execute();
                $result = $getJson->fetchAll(PDO::FETCH_ASSOC);
                if(count($result) > 0) {
                    foreach ($result as $data) {
                        array_push($response,
                            array(
                                'contact_id' => $data['contact_id'],
                                'contact_type' => $data['contact_type'],
                                'contact_name' => $data['contact_name'],
                                'contact_address' => $data['contact_address'],
                                'contact_designation' => $data['contact_designation'],
                                'contact_mobile' => $data['contact_mobile'],
                                'contact_creation_time' => $data['contact_creation_time'],
                                'contact_modification_time' => $data['contact_modification_time']
                            ));
                    }
                    echo json_encode(array("contact"=>$response,$status=>1, $message=>"All Contact"));            //  On Successful Login redirects to home.php
                    die();
                }
                else{
                    echo json_encode(array("contact"=>null,$status=>0, $message=>"No Contact Available"));
                    die();
                }
            }
            else{
                echo json_encode(array("contact"=>null,$status=>0, $message=>"Token Authentication Error"));
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
    $contact = new getContactClass();
    $contact->getContact();
}
else
{
    echo json_encode(array("message"=>"Bad Request"));
    die();
}