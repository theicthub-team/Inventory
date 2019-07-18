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
class insertBatch{

    function insertABatch(){
        $connection = new Connection();
        $conn = $connection->getConnection();
        //array for json response
        $response = array();
        $status="status";
        $message = "message";
        $token   = $_POST['token'];
        $batch_name   = $_POST['batch_name'];
        $batch_description   = $_POST['batch_description'];

        if(!empty($token)) {
            $authenticate_token = new authenticateToken();
            if ($authenticate_token->tokenAuthentication($token, $conn)) {
                $insert_batch = "INSERT INTO batch (batch_id,batch_name,batch_description,batch_creation_time,batch_modification_time) VALUES (0, '$batch_name', '$batch_description', now(), now())";

                $result =$conn->exec($insert_batch);

                if($result) {

                    echo json_encode(array($status=>1, $message=>"Batch Added"));            //  On Successful Login redirects to home.php
                    die();
                }
                else{
                    echo json_encode(array($status=>0, $message=>"Batch Not Added"));
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
    $batch = new insertBatch();
    $batch->insertABatch();
}
else
{
    echo json_encode(array("message"=>"Bad Request"));
    die();
}