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
class getWarehouseClass{

    function getWarehouse(){
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
                $get_warehouse = "select * from warehouse";
                $getJson = $conn->prepare($get_warehouse);
                $getJson->execute();
                $result = $getJson->fetchAll(PDO::FETCH_ASSOC);
                if(count($result) > 0) {
                    foreach ($result as $data) {
                        array_push($response,
                            array(
                                'warehouse_id' => $data['warehouse_id'],
                                'warehouse_name' => $data['warehouse_name'],
                                'warehouse_address' => $data['warehouse_address'],
                                'warehouse_lat' => $data['warehouse_lat'],
                                'warehouse_long' => $data['warehouse_long'],
                                'warehouse_creation_time' => $data['warehouse_creation_time'],
                                'warehouse_modification_time' => $data['warehouse_modification_time']
                            ));
                    }
                    echo json_encode(array("warehouse"=>$response,$status=>1, $message=>"All Warehouse"));            //  On Successful Login redirects to home.php
                    die();
                }
                else{
                    echo json_encode(array("warehouse"=>null,$status=>0, $message=>"No Warehouse Available"));
                    die();
                }
            }
            else{
                echo json_encode(array("warehouse"=>null,$status=>0, $message=>"Token Authentication Error"));
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
    $warehouse = new getWarehouseClass();
    $warehouse->getWarehouse();
}
else
{
    echo json_encode(array("message"=>"Bad Request"));
    die();
}