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
class insertCategory{

    function insertACategory(){
        $connection = new Connection();
        $conn = $connection->getConnection();
        //array for json response
        $response = array();
        $status="status";
        $message = "message";
        $token   = $_POST['token'];
        $category_name   = $_POST['category_name'];
        $category_parent_id   = $_POST['category_parent_id'];

        if(!empty($token)) {
            $authenticate_token = new authenticateToken();
            if ($authenticate_token->tokenAuthentication($token, $conn)) {
                $insert_category = "INSERT INTO category (category_id,category_name,category_parent_id,category_creation_time,category_modification_time) VALUES (0, '$category_name', '$category_parent_id', now(), now())";

                $result =$conn->exec($insert_category);

                if($result) {

                    echo json_encode(array($status=>1, $message=>"Category Added"));            //  On Successful Login redirects to home.php
                    die();
                }
                else{
                    echo json_encode(array($status=>0, $message=>"Category Not Added"));
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
    $category = new insertCategory();
    $category->insertACategory();
}
else
{
    echo json_encode(array("message"=>"Bad Request"));
    die();
}