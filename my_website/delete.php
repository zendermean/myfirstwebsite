<?php 
#include "db.php";
require_once 'db.php';

session_start();
if(isset($_SESSION["id"]))
{
    #$db = mysqli_connect('localhost', 'root', '', 'test');
    $id = mysqli_real_escape_string($obj->con,$_SESSION["id"]);
    echo "Hello - ".$_SESSION["name"]." your id is ".$_SESSION["id"];
    echo "\r\n";
    $sql = "DELETE FROM user_info WHERE id='$id'";
    #$query = mysqli_query($this->con,$sql);
    $res = mysqli_query($obj->con,$sql);
    #$res = mysqli_query($db,$sql);
    if($res){
        #echo "deleted sucessfully!";
        #header("location:http://localhost/my_website/index.php");
        echo "Your account was deleted. After 5 seconds, you will be automatically redirected to Home Page.";
        session_destroy();
        /*header('Refresh: 5; URL=http://www.example.com/');
        echo 'Через 5 секунд Вы будете автоматически перенаправлены на другую страницу.';
        session_destroy();
        exit;*/
    }
    else{
    die ("Failed".mysql_error());
    }
}
?>
<meta http-equiv="refresh" content="5; url=http://localhost/my_website/index.php">
<!--<p>Your account was deleted. After 5 seconds, you will be automatically redirected to Home Page.</p>-->
<?php
/*session_start();

include "db.php";

$db = mysqli_connect('localhost', 'root', '', 'test');

if (isset($_POST['delete_acc'])) {
    $id = mysqli_real_escape_string($db,$_POST["id"]);
    /*$reg_username = mysqli_real_escape_string($db, $_POST['RegForm-username']);
    $reg_email = mysqli_real_escape_string($db, $_POST['RegForm-email']);
    $reg_pass1 = mysqli_real_escape_string($db, $_POST['RegForm-pass']);
    $reg_pass2 = mysqli_real_escape_string($db, $_POST['RegForm-repass']);
    $fname = mysqli_real_escape_string($db, $_POST['RegForm-fname']);
    $lname = mysqli_real_escape_string($db, $_POST['RegForm-lname']);
    $bday = mysqli_real_escape_string($db, $_POST['RegForm-bday']);
    $gender = mysqli_real_escape_string($db, $_POST['RegForm-gender']);
    $country = mysqli_real_escape_string($db, $_POST['RegForm-country']);

    if (empty($reg_username)) { array_push($errors, "Username is required"); }
    if (empty($reg_email)) { array_push($errors, "Email is required"); }
    if (empty($reg_pass1)) { array_push($errors, "Password is required"); }
    if ($reg_pass1 != $reg_pass2) {
        array_push($errors, "The two passwords do not match");
    }

    $user_check_query = "SELECT * FROM user_info WHERE u_name='$reg_username' OR u_email='$reg_email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
        if ($user['u_name'] === $reg_username) {
          array_push($errors, "Username already exists");
        }
    
        if ($user['u_email'] === $reg_email) {
          array_push($errors, "Email already exists");
        }
      }
    
    if (count($errors) == 0) {
        $reg_password = md5($reg_pass1);
        $query = "INSERT INTO user_info (u_name, u_email, password, u_fname, u_lname, dob, gender, country)
                  VALUES ('".$reg_username."', '".$reg_email."', '".$reg_password."','".$fname."','".$lname."','".$bday."','".$gender."','".$country."')";
        $qer = mysqli_query($db, $query);
        $_SESSION['u_name'] = $reg_username;
        $_SESSION['success'] = "You are now logged in";
        header('Refresh: 0');
    } 
}*/
?>