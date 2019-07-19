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
class getStockClass{

    function getStock(){
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
                $get_stock = "select * from stock natural join product natural join product_quantity_unit natural join product_color natural join product_size natural join warehouse";
                $getJson = $conn->prepare($get_stock);
                $getJson->execute();
                $result = $getJson->fetchAll(PDO::FETCH_ASSOC);
                if(count($result) > 0) {
                    foreach ($result as $data) {
                        array_push($response,
                            array(
                                'stock_id' => $data['stock_id'],
                                'stock_product_id' => $data['stock_product_id'],
                                'stock_product_quantity_unit' => $data['stock_product_quantity_unit'],
                                'stock_product_quantity' => $data['stock_product_quantity'],
                                'stock_product_purchase_price' => $data['stock_product_purchase_price'],
                                'stock_product_sales_price' => $data['stock_product_sales_price'],
                                'stock_product_expire_date' => $data['stock_product_expire_date'],
                                'stock_product_color' => $data['stock_product_color'],
                                'stock_product_size' => $data['stock_product_size'],
                                'stock_product_height' => $data['stock_product_height'],
                                'stock_product_weight' => $data['stock_product_weight'],
                                'stock_warehouse' => $data['stock_warehouse'],
                                'stock_status' => $data['stock_status'],
                                'stock_creation_time' => $data['stock_creation_time'],
                                'stock_modification_time' => $data['stock_modification_time'],

                                'product_id' => $data['product_id'],
                                'product_name' => $data['product_name'],
                                'product_category_id' => $data['product_category_id'],
                                'product_brand_id' => $data['product_brand_id'],
                                'product_batch_id' => $data['product_batch_id'],
                                'product_creation_time' => $data['product_creation_time'],
                                'product_modification_time' => $data['product_modification_time'],

                                'product_quantity_unit_id' => $data['product_quantity_unit_id'],
                                'product_quantity_unit_name' => $data['product_quantity_unit_name'],
                                'product_quantity_unit_creation_time' => $data['product_quantity_unit_creation_time'],
                                'product_quantity_unit_modification_time' => $data['product_quantity_unit_modification_time'],

                                'product_color_id' => $data['product_color_id'],
                                'product_color_name' => $data['product_color_name'],
                                'product_color_creation_time' => $data['product_color_creation_time'],
                                'product_color_modification_time' => $data['product_color_modification_time'],

                                'product_size_id' => $data['product_size_id'],
                                'product_size_name' => $data['product_size_name'],
                                'product_size_creation_time' => $data['product_size_creation_time'],
                                'product_size_modification_time' => $data['product_size_modification_time'],

                                'warehouse_id' => $data['warehouse_id'],
                                'warehouse_name' => $data['warehouse_name'],
                                'warehouse_address' => $data['warehouse_address'],
                                'warehouse_lat' => $data['warehouse_lat'],
                                'warehouse_long' => $data['warehouse_long'],
                                'warehouse_creation_time' => $data['warehouse_creation_time'],
                                'warehouse_modification_time' => $data['warehouse_modification_time']
                            ));
                    }
                    echo json_encode(array("stock"=>$response,$status=>1, $message=>"All Stock Size"));            //  On Successful Login redirects to home.php
                    die();
                }
                else{
                    echo json_encode(array("stock"=>null,$status=>0, $message=>"No Stock Size Available"));
                    die();
                }
            }
            else{
                echo json_encode(array("stock"=>null,$status=>0, $message=>"Token Authentication Error"));
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
    $stock = new getStockClass();
    $stock->getStock();
}
else
{
    echo json_encode(array("message"=>"Bad Request"));
    die();
}