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
class getCategory{

    function getAllCategory(){
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
                $get_category = "select * from category";
                $getJson = $conn->prepare($get_category);
                $getJson->execute();
                $result = $getJson->fetchAll(PDO::FETCH_ASSOC);
                if(count($result) > 0) {
                    foreach ($result as $data) {
                        array_push($response,
                            array(
                                'category_id' => $data['category_id'],
                                'category_name' => $data['category_name'],
                                'category_parent_id' => $data['category_parent_id'],
                                'category_creation_time' => $data['category_creation_time'],
                                'category_modification_time' => $data['category_modification_time']
                            ));
                    }
                    echo json_encode(array("batch"=>$response,$status=>1, $message=>"All Category"));            //  On Successful Login redirects to home.php
                    die();
                }
                else{
                    echo json_encode(array("batch"=>null,$status=>0, $message=>"No Category Available"));
                    die();
                }
            }
            else{
                echo json_encode(array("batch"=>null,$status=>0, $message=>"Token Authentication Error"));
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
    $category = new getCategory();
    $category->getAllCategory();
}
else
{
    echo json_encode(array("message"=>"Bad Request"));
    die();
}