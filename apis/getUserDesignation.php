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
class getUserDesignationClass{

    function getUserDesignation(){
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
                $get_user_designation = "select * from user_designation";
                $getJson = $conn->prepare($get_user_designation);
                $getJson->execute();
                $result = $getJson->fetchAll(PDO::FETCH_ASSOC);
                if(count($result) > 0) {
                    foreach ($result as $data) {
                        array_push($response,
                            array(
                                'user_designation_id' => $data['user_designation_id'],
                                'user_designation_Name' => $data['user_designation_Name'],
                                'user_designation_creation_time' => $data['user_designation_creation_time'],
                                'user_designation_modification_time' => $data['user_designation_modification_time']

                            ));
                    }
                    echo json_encode(array("user_designation"=>$response,$status=>1, $message=>"All Product Color"));            //  On Successful Login redirects to home.php
                    die();
                }
                else{
                    echo json_encode(array("user_designation"=>null,$status=>0, $message=>"No Product Color Available"));
                    die();
                }
            }
            else{
                echo json_encode(array("user_designation"=>null,$status=>0, $message=>"Token Authentication Error"));
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
    $user_designation = new getUserDesignationClass();
    $user_designation->getUserDesignation();
}
else
{
    echo json_encode(array("message"=>"Bad Request"));
    die();
}