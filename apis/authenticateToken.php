<?php
class authenticateToken
{
    function tokenAuthentication($token,$conn)
    {

        $sql = "SELECT * FROM user_token WHERE user_token_no = '$token'";

        $getJson = $conn->prepare($sql);
        $getJson->execute();
        $result = $getJson->fetchAll(PDO::FETCH_ASSOC);
        if (count($result) > 0) {
            return true;
        }
        else{
            return false;
        }
    }
}
?>