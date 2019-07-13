<?php
// include db connect class
class generateToken
{

    function token_generate($user_id,$conn)
    {

        try {
            $token = bin2hex(random_bytes(20));
        } catch (Exception $e) {

        }

        $get_token = "select * from user_token where user_id ='$user_id'";
        $getJson = $conn->prepare($get_token);
        $getJson->execute();
        $result = $getJson->fetchAll(PDO::FETCH_ASSOC);
        if(count($result) > 0) {
            $sql = "UPDATE user_token SET user_token_no ='$token' WHERE user_id ='$user_id'";

            try {
                $getJson = $conn->prepare($sql);
                $response = $getJson->execute();
                //echo $response;
                //die();
            }
            catch (PDOException $e) {
                echo "Error : " . $e->getMessage();

            }
        }
        else{
            $sql = "INSERT INTO user_token (user_token_id, user_id, user_token_no, user_token_creation_time, user_token_modification_time)
            VALUES (0, '$user_id', '$token', now(), now())";

            try {
                $getJson = $conn->prepare($sql);
                $response = $getJson->execute();
                //echo $response;
                //die();
            }
            catch (PDOException $e) {
                echo "Error : " . $e->getMessage();

            }
        }
        return $token;

    }
}
?>