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
class getUserClass{

    function getUser(){
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
                $get_user = "select * from user natural join user_designation natural join user_type";
                $getJson = $conn->prepare($get_user);
                $getJson->execute();
                $result = $getJson->fetchAll(PDO::FETCH_ASSOC);
                if(count($result) > 0) {
                    foreach ($result as $data) {
                        array_push($response,
                            array(
                                'user_id' => $data['user_id'],
                                'user_Name' => $data['user_Name'],
                                'user_PhoneNo' => $data['user_PhoneNo'],
                                'user_Email' => $data['user_Email'],
                                'user_Password' => $data['user_Password'],
                                'user_Status' => $data['user_Status'],
                                'user_creation_time' => $data['user_creation_time'],
                                'user_modification_time' => $data['user_modification_time'],
                                'user_designation_id' => $data['user_designation_id'],
                                'user_type_id' => $data['user_type_id'],

                                'user_designation_id' => $data['user_designation_id'],
                                'user_designation_Name' => $data['user_designation_Name'],
                                'user_designation_creation_time' => $data['user_designation_creation_time'],
                                'user_designation_modification_time' => $data['user_designation_modification_time'],

                                'user_type_id' => $data['user_type_id'],
                                'user_type_Name' => $data['user_type_Name'],
                                'user_type_access_level' => $data['user_type_access_level'],
                                'user_type_creation_time' => $data['user_type_creation_time'],
                                'user_type_modification_time' => $data['user_type_modification_time']

                            ));
                    }
                    echo json_encode(array("user"=>$response,$status=>1, $message=>"All Product Color"));            //  On Successful Login redirects to home.php
                    die();
                }
                else{
                    echo json_encode(array("user"=>null,$status=>0, $message=>"No Product Color Available"));
                    die();
                }
            }
            else{
                echo json_encode(array("user"=>null,$status=>0, $message=>"Token Authentication Error"));
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
    $user = new getUserClass();
    $user->getUser();
}
else
{
    echo json_encode(array("message"=>"Bad Request"));
    die();
}