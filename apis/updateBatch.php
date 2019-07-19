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
class updateBatch{

    function updateAbatch(){
        $connection = new Connection();
        $conn = $connection->getConnection();
        //array for json response
        $response = array();
        $status="status";
        $message = "message";
        $token   = $_POST['token'];
        $batch_id   = $_POST['batch_id'];
        $batch_name   = $_POST['batch_name'];
        $batch_description   = $_POST['batch_description'];

        if(!empty($token)) {
            $authenticate_token = new authenticateToken();
            if ($authenticate_token->tokenAuthentication($token, $conn)) {
                $update_batch = "UPDATE batch SET batch_name='$batch_name',batch_description='$batch_description' WHERE brand_id='$batch_id'";

                // Prepare statement
                $stmt = $conn->prepare($update_batch);

                // execute the query
                $stmt->execute();

                if($stmt->rowCount()) {

                    echo json_encode(array($status=>1, $message=>"Batch Updated"));            //  On Successful Login redirects to home.php
                    die();
                }
                else{
                    echo json_encode(array($status=>0, $message=>"Batch Not Updated"));
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
    $batch = new updateBatch();
    $batch->updateAbatch();
}
else
{
    echo json_encode(array("message"=>"Bad Request"));
    die();
}