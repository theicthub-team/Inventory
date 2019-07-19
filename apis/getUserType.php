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
class getUserTypeClass{

    function getUserType(){
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
                $get_user_type = "select * from user_type";
                $getJson = $conn->prepare($get_user_type);
                $getJson->execute();
                $result = $getJson->fetchAll(PDO::FETCH_ASSOC);
                if(count($result) > 0) {
                    foreach ($result as $data) {
                        array_push($response,
                            array(
                                'user_type_id' => $data['user_type_id'],
                                'user_type_Name' => $data['user_type_Name'],
                                'user_type_access_level' => $data['user_type_access_level'],
                                'user_type_creation_time' => $data['user_type_creation_time'],
                                'user_type_modification_time' => $data['user_type_modification_time']
                            ));
                    }
                    echo json_encode(array("user_type"=>$response,$status=>1, $message=>"All User Type"));            //  On Successful Login redirects to home.php
                    die();
                }
                else{
                    echo json_encode(array("user_type"=>null,$status=>0, $message=>"No User Type Available"));
                    die();
                }
            }
            else{
                echo json_encode(array("user_type"=>null,$status=>0, $message=>"Token Authentication Error"));
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
    $user_type = new getUserTypeClass();
    $user_type->getUserType();
}
else
{
    echo json_encode(array("message"=>"Bad Request"));
    die();
}