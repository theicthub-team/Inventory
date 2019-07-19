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
class updateStockClass{

    function updateStock(){
        $connection = new Connection();
        $conn = $connection->getConnection();
        //array for json response
        $response = array();
        $status="status";
        $message = "message";
        $token   = $_POST['token'];
        $stock_id   = $_POST['stock_id'];
        $stock_product_id = $_POST['stock_product_id']
        $stock_product_quantity_unit = $_POST['stock_product_quantity_unit']
        $stock_product_quantity = $_POST['stock_product_quantity']
        $stock_product_purchase_price = $_POST['stock_product_purchase_price']
        $stock_product_sales_price = $_POST['stock_product_sales_price']
        $stock_product_expire_date = $_POST['stock_product_expire_date']
        $stock_product_color = $_POST['stock_product_color']
        $stock_product_size = $_POST['stock_product_size']
        $stock_product_height = $_POST['stock_product_height']
        $stock_product_weight = $_POST['stock_product_weight']
        $stock_warehouse = $_POST['stock_warehouse']
        $stock_status = $_POST['stock_status']


        if(!empty($token)) {
            $authenticate_token = new authenticateToken();
            if ($authenticate_token->tokenAuthentication($token, $conn)) {
                $get_stock = "UPDATE stock SET stock_product_id = '$stock_product_id',stock_product_quantity_unit = '$stock_product_quantity_unit',stock_product_quantity = '$stock_product_quantity',stock_product_purchase_price = '$stock_product_purchase_price',stock_product_sales_price = '$stock_product_sales_price',stock_product_expire_date = '$stock_product_expire_date',stock_product_color = '$stock_product_color',stock_product_size = '$stock_product_size',stock_product_height = '$stock_product_height',stock_product_weight = '$stock_product_weight',stock_warehouse = '$stock_warehouse',stock_status = '$stock_status' WHERE stock_id='$stock_id'";

                // Prepare statement
                $stmt = $conn->prepare($get_stock);

                // execute the query
                $stmt->execute();

                if($stmt->rowCount()) {

                    echo json_encode(array($status=>1, $message=>"Stock Size Updated"));            //  On Successful Login redirects to home.php
                    die();
                }
                else{
                    echo json_encode(array($status=>0, $message=>"Stock Size Not Updated"));
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
    $stock = new updateStockClass();
    $stock->updateStock();
}
else
{
    echo json_encode(array("message"=>"Bad Request"));
    die();
}
