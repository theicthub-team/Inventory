<?php
/**
 * Created by PhpStorm.
 * User: abdullah
 * Date: 3/6/19
 * Time: 5:50 PM
 */

// include db connect class
require_once __DIR__ . '/Connection.php';
require './generateToken.php';
class Authentication{

    function authenticate(){
        $connection = new Connection();
        $conn = $connection->getConnection();
        //array for json response
        $response = array();
        $status="status";
        $message = "message";
        $Email   = $_POST['email'];
        $Password   = $_POST['password'];
        $token = "token";
            if(!empty($Email) && !empty($Password))
            {
                $get_user = "select * from user NATURAL JOIN user_designation NATURAL JOIN user_type";
                $getJson = $conn->prepare($get_user);
                $getJson->execute();
                $result = $getJson->fetchAll(PDO::FETCH_ASSOC);
                if(count($result) > 0) {

                    foreach($result as $data)
                    {
                        $secure_password=$data['user_Password'];
                        $user_password = sha1($Password);
                        if($data['user_Email'] == $Email && $secure_password == $user_password)
                        {
                            array_push($response,
                                array(
                                    'user_id'=>$data['user_id'],
                                    'user_Name'=>$data['user_Name'],
                                    'user_PhoneNo'=>$data['user_PhoneNo'],
                                    'user_Email'=>$data['user_Email'],
                                    'user_Status'=>$data['user_Status'],
                                    'user_designation_Name'=>$data['user_designation_Name'],
                                    'user_type_Name'=>$data['user_type_Name'],
                                    'user_type_access_level'=>$data['user_type_access_level']

                                ));
                            //echo "token";
                            //die();
                            $generate = new generateToken();
                            $token = $generate->token_generate($data['user_id'],$conn);

                           break;
                        }

                    }

                    if(count($response) > 0)
                    {
                        echo json_encode(array("user_authenticate"=>$response,"token"=>$token,$status=>1, $message=>"User Authentication Successful"));            //  On Successful Login redirects to home.php
                        die();
                    }
                    else
                    {
                        echo json_encode(array("user_authenticate"=>null,$status=>0, $message=>"Authentication Error"));
                        die();
                    }


                }
                else{
                    echo json_encode(array("user_authenticate"=>null,$status=>0, $message=>"Authentication Error"));
                    die();
                }
            }
            else{
                echo json_encode(array("user_authenticate"=>null,$status=>0, $message=>"Email/Password missing"));
                die();
            }

    }
}
if(isset($_POST['login']) && ($_POST['login'] == "authenticate"))   // it checks whether the user clicked login button or not
{
    $authenticate = new Authentication();
    $authenticate->authenticate();
}
else
{
    echo json_encode(array("message"=>"Bad Request"));
    die();
}