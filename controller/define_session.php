<?php
/**
 * Created by PhpStorm.
 * User: abdullah
 * Date: 3/6/19
 * Time: 7:28 PM
 */


if(!isset($_SESSION)) {
    session_start();

}
require_once '../apis/Connection.php';

$connection = new Connection();
$conn = $connection->getConnection();

$token   = $_POST['token'];
$user_id  = $_POST['user_id'];
$user_type_Name  = $_POST['user_type_Name'];
$user_type_access_level   = $_POST['user_type_access_level'];
$user_Status   = $_POST['user_Status'];
$status="status";
$message = "message";

$get_token = "select * from user_token where user_id ='$user_id' AND user_token_no='$token'";
$getJson = $conn->prepare($get_token);
$getJson->execute();
$result = $getJson->fetchAll(PDO::FETCH_ASSOC);

if(count($result) > 0) {

    $_SESSION['loggedIn']=true;
    $_SESSION['token']=$token;
    //$_SESSION['user_id']=$user_id;
    $_SESSION['user_type_Name']=$user_type_Name;
    $_SESSION['user_type_access_level']=$user_type_access_level;
    $_SESSION['user_Status']=$user_Status;

    echo json_encode(array("user_authenticate"=>"True",$status=>1, $message=>"User Authentication Successful"));            //  On Successful Login redirects to home.php
    die();

}
else{
    echo json_encode(array("user_authenticate"=>"False",$status=>0, $message=>"User Authentication Error"));            //  On Successful Login redirects to home.php
    die();
}



?>