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
class getBatch{

    function getAllBatch(){
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
                $get_batch = "select * from batch";
                $getJson = $conn->prepare($get_batch);
                $getJson->execute();
                $result = $getJson->fetchAll(PDO::FETCH_ASSOC);
                if(count($result) > 0) {
                    foreach ($result as $data) {
                        array_push($response,
                            array(
                                'batch_id' => $data['batch_id'],
                                'batch_name' => $data['batch_name'],
                                'batch_description' => $data['batch_description'],
                                'batch_creation_time' => $data['batch_creation_time'],
                                'batch_modification_time' => $data['batch_modification_time']
                            ));
                    }
                    echo json_encode(array("batch"=>$response,$status=>1, $message=>"All Batch"));            //  On Successful Login redirects to home.php
                    die();
                }
                else{
                    echo json_encode(array("batch"=>null,$status=>0, $message=>"No Batch Available"));
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
    $batch = new getBatch();
    $batch->getAllBatch();
}
else
{
    echo json_encode(array("message"=>"Bad Request"));
    die();
}