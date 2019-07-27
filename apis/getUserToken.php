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
class getUserTokenClass{

    function getUserToken(){
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
                $get_user_token = "select * from user_token natural join user";
                $getJson = $conn->prepare($get_user_token);
                $getJson->execute();
                $result = $getJson->fetchAll(PDO::FETCH_ASSOC);
                if(count($result) > 0) {
                    foreach ($result as $data) {
                        array_push($response,
                            array(
                                'user_token_id' => $data['user_token_id'],
                                'user_id' => $data['user_id'],
                                'user_token_no' => $data['user_token_no'],
                                'user_token_creation_time' => $data['user_token_creation_time'],
                                'user_token_modification_time' => $data['user_token_modification_time'],

                                'user_id' => $data['user_id'],
                                'user_Name' => $data['user_Name'],
                                'user_PhoneNo' => $data['user_PhoneNo'],
                                'user_Email' => $data['user_Email'],
                                'user_Password' => $data['user_Password'],
                                'user_Status' => $data['user_Status'],
                                'user_creation_time' => $data['user_creation_time'],
                                'user_modification_time' => $data['user_modification_time'],
                                'user_designation_id' => $data['user_designation_id'],
                                'user_type_id' => $data['user_type_id']


                            ));
                    }
                    echo json_encode(array("user_token"=>$response,$status=>1, $message=>"All User Token"));            //  On Successful Login redirects to home.php
                    die();
                }
                else{
                    echo json_encode(array("user_token"=>null,$status=>0, $message=>"No User Token Available"));
                    die();
                }
            }
            else{
                echo json_encode(array("user_token"=>null,$status=>0, $message=>"Token Authentication Error"));
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
    $user_token = new getUserTokenClass();
    $user_token->getUserToken();
}
else
{
    echo json_encode(array("message"=>"Bad Request"));
    die();
}