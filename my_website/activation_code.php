<?php

include "db.php";
$db = new Database;

if(isset($_REQUEST["ACTIVATION_CODE"]) AND isset($_REQUEST["uid"]) AND isset($_REQUEST["ue"])))
{
    $uid = $_REQUEST["uid"];
    $ue = $_REQUEST["ue"];
    $act_code = $_REQUEST["ACTIVATION_CODE"];

    //check if user is already activated
    $sql = "SELECT u_name,activated FROM user_info WHERE (id='$uid' AND u_email='$ue' AND act_code='$act_code') LIMIT 1";
    $query = mysqli_query($db->con,$sql) or die(mysqli_error($db->con));
    $row = mysqli_fetch_array($query);
    $name = $row["u_name"];
    $status = $row["activated"];
    //check database column activated if '0' - not activated
    if($status == '0')
    {
        $sql = "UPDATE user_info SET activated='1' WHERE u_email='$ue' AND id='$uid'";
        $query = mysqli_query($db->con,$sql) or die(mysqli_error($db->con));
        if($query)
        {
            echo $name." .Your account activated successfully!"; 
            exit();
        }
        else if($status == '1')
        {
            echo $name." .Your account Already activated!";
        }
    }

}

?>