<?php
session_start();
require_once 'db.php';
/*if(isset($_SESSION["id"])){

}*/
/*if(isset($_POST["update"])){
    echo "1";
    if(isset($_POST["edit_name"]))
    {
            #$db = mysqli_connect('localhost', 'root', '', 'test');
            $id = mysqli_real_escape_string($obj->con,$_SESSION["id"]);
            $name = mysqli_real_escape_string($obj->con,$_SESSION["name"]);
            $newName = $_POST["edit_name"];
            #$sql = "DELETE FROM user_info WHERE id='$id'";
            $sql = "UPDATE user_info SET u_name='$newName' WHERE id='$id'";
            #$query = mysqli_query($this->con,$sql);
            $res = mysqli_query($obj->con,$sql);
            #$res = mysqli_query($db,$sql);
            if($res){
                #echo "deleted sucessfully!";
                #header("location:http://localhost/my_website/index.php");
                #echo "Your account was deleted. After 5 seconds, you will be automatically redirected to Home Page.";
                #session_destroy();
                echo "Your name is changed!";
                /*header('Refresh: 5; URL=http://www.example.com/');
                echo 'Через 5 секунд Вы будете автоматически перенаправлены на другую страницу.';
                session_destroy();
                exit;
            }
            else{
            die ("Failed".mysql_error());
                }
        
    }
}*/
function getPosts()
{
    $posts = array();
    $posts[0] = $_SESSION['id'];
	$posts[1] = $_POST['name'];
	$posts[2] = $_POST['email'];
    $posts[3] = $_POST['country'];
    $posts[4] = $_POST['languages'];
	return $posts;
}
if(isset($_POST['update']))
{
    $data = getPosts();
    echo $data;
    $id = mysqli_real_escape_string($obj->con,$_SESSION["id"]);
    $update_Query = "UPDATE `user_info` SET `u_name`='$data[1]',`u_email`='$data[2]', WHERE `id` = $id";
    try{
        $update_Result = mysqli_query($obj->con, $update_Query);
        echo "pdd";
        if($update_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {
                echo 'Data Updated';
            }else{
                echo 'Data Not Updated';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Update '.$ex->getMessage();
    }
}
?>