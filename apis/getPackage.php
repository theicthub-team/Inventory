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
class getPackageClass{

    function getPackage(){
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
                $get_package = "select * from package";
                $getJson = $conn->prepare($get_package);
                $getJson->execute();
                $result = $getJson->fetchAll(PDO::FETCH_ASSOC);
                if(count($result) > 0) {
                    foreach ($result as $data) {
                        array_push($response,
                            array(
                                'package_id' => $data['package_id'],
                                'package_name' => $data['package_name'],
                                'package_start_date' => $data['package_start_date'],
                                'package_end_date' => $data['package_end_date'],
                                'package_price' => $data['package_price'],
                                'package_creation_time' => $data['package_creation_time'],
                                'package_modification_time' => $data['package_modification_time']
                            ));
                    }
                    echo json_encode(array("package"=>$response,$status=>1, $message=>"All Package Color"));            //  On Successful Login redirects to home.php
                    die();
                }
                else{
                    echo json_encode(array("package"=>null,$status=>0, $message=>"No Package Color Available"));
                    die();
                }
            }
            else{
                echo json_encode(array("package"=>null,$status=>0, $message=>"Token Authentication Error"));
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
    $package = new getPackageClass();
    $package->getPackage();
}
else
{
    echo json_encode(array("message"=>"Bad Request"));
    die();
}