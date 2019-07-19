combo_id<?php
/**
 * Created by PhpStorm.
 * User: abdullah
 * Date: 3/6/19
 * Time: 5:50 PM
 */

// include db connect class
require_once __DIR__ . '/Connection.php';
require './authenticateToken.php';
class updateComboClass{

    function updateCombo(){
        $connection = new Connection();
        $conn = $connection->getConnection();
        //array for json response
        $response = array();
        $status="status";
        $message = "message";
        $token   = $_POST['token'];
        $combo_id   = $_POST['combo_id'];
        $combo_package_id = $_POST['combo_package_id'];
        $combo_stock_id = $_POST['combo_stock_id'];
        $combo_product_quantity = $_POST['combo_product_quantity'];

        if(!empty($token)) {
            $authenticate_token = new authenticateToken();
            if ($authenticate_token->tokenAuthentication($token, $conn)) {
                $get_combo = "UPDATE combo SET combo_package_id = '$combo_package_id', combo_stock_id = '$combo_stock_id', combo_product_quantity = '$combo_product_quantity' WHERE combo_id='$combo_id'";

                // Prepare statement
                $stmt = $conn->prepare($get_combo);

                // execute the query
                $stmt->execute();

                if($stmt->rowCount()) {

                    echo json_encode(array($status=>1, $message=>"Product Combo Updated"));            //  On Successful Login redirects to home.php
                    die();
                }
                else{
                    echo json_encode(array($status=>0, $message=>"Product Combo Not Updated"));
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
    $combo = new updateComboClass();
    $combo->updateCombo();
}
else
{
    echo json_encode(array("message"=>"Bad Request"));
    die();
}