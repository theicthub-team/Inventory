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
class insertComboClass{

    function insertCombo(){
        $connection = new Connection();
        $conn = $connection->getConnection();
        //array for json response
        $response = array();
        $status="status";
        $message = "message";
        $token   = $_POST['token'];
        $combo_package_id = $_POST['combo_package_id'];
        $combo_stock_id = $_POST['combo_stock_id'];
        $combo_product_quantity = $_POST['combo_product_quantity'];

        if(!empty($token)) {
            $authenticate_token = new authenticateToken();
            if ($authenticate_token->tokenAuthentication($token, $conn)) {
                $insert_combo = "INSERT INTO combo (combo_package_id, combo_stock_id, combo_product_quantity, combo_creation_time, combo_modification_time) VALUES ('$combo_package_id', '$combo_stock_id', '$combo_product_quantity', now(), now())";

                $result =$conn->exec($insert_combo);

                if($result) {

                    echo json_encode(array($status=>1, $message=>"Product Combo Added"));            //  On Successful Login redirects to home.php
                    die();
                }
                else{
                    echo json_encode(array($status=>0, $message=>"Product Combo Not Added"));
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
    $combo = new insertComboClass();
    $combo->insertCombo();
}
else
{
    echo json_encode(array("message"=>"Bad Request"));
    die();
}