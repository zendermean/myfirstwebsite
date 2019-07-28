<?php
require_once 'db.php';

session_start();
if(!isset($_SESSION["id"]))
{
    session_destroy();
    header("location:index.php");
}
#echo "Hello - ".$_SESSION["name"]." your id is ".$_SESSION["id"];
//echo " Signup Data: ".$_SESSION["signup_date"];
$date_now = date("Y-m-d H:i:s");
$sign = $_SESSION["signup_date"];
#echo " Singup date: ".$_SESSION["signup_date"]." ";
$start = strtotime($_SESSION["signup_date"]);
$end = strtotime($date_now);
$days_between = ceil(abs($end - $start) / 86400);
#echo "You already registered: ".$days_between. " days";
/*
<div class="log-reg">
    <h4>Hello - <?php echo $_SESSION["name"]." your id is [".$_SESSION["id"]."] ";?></h4>
    <h4><?php echo "E-mail: ".$_SESSION["email"];?></h4>
    <h4><?php echo "Country: ".$_SESSION["country"];?></h4>
    <h4><?php echo "Languages: ".$_SESSION["languages"];?></h4>
    <h4><?php echo "Singup date: ".$_SESSION["signup_date"];?></h4>
    <h4><?php echo "You already registered: ".$days_between." days";?></h4>
</div>
*/
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
    #UPDATE `user_info` SET `u_name`='Robert',`u_email`='robert@gmail.com' WHERE `id`='2'
    $data = getPosts();
    $update_Query = "UPDATE `user_info` SET `u_name`='$data[1]',`u_email`='$data[2]', WHERE `id` = $data[0]";
    try{
        $update_Result = mysqli_query($obj->con, $update_Query);
        
        if($update_Result)
        {
            echo "update_Result";
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="main.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/fixed.css">
    <title>Profile Page</title>
</head>
<body>
<div class="log-reg">
    <a href="index.php">Home Page</a> | <a href="delete.php">Delete my account</a> | <a href="logout.php">Logout</a> 
</div>
<form action="profile.php" method="POST" class="form">
        <label for="id">Your Id:</label>
            <div>
            <input type="text" name="id" placeholder="Id" readonly value="<?php echo $_SESSION["id"]; ?>"><br><br>
             </div>
        <label for="name">Name:</label>
            <div>
            <input type="text" name="name" placeholder="Name" value="<?php echo $_SESSION["name"]; ?>"><br><br>
             </div>
        <label for="email">Email:</label>
            <div>
            <input type="text" name="email" placeholder="Email" value="<?php echo $_SESSION["email"]; ?>"><br><br>
            </div>
        <label for="country">Country:</label>
            <div>
            <input type="text" name="country" placeholder="Country" value="<?php echo $_SESSION["country"]; ?>"><br><br>
            </div>
        <label for="languages">Languages:</label>
            <div>
            <input type="text" name="languages" placeholder="Languages" value="<?php echo $_SESSION["languages"]; ?>"><br><br>
            </div>
        <label for="signup_date">Singup date:</label>
            <div>
            <input type="text" name="signup_date" placeholder="Signup date" readonly value="<?php echo $_SESSION["signup_date"]; ?>"><br><br>
            </div>
        <label for="already_sign">You already registered:</label>
            <div>
            <input type="text" name="already_sign" placeholder="Already Registered" readonly value="<?php echo $days_between." days"; ?>"><br><br>
            </div>
</form>
<style>
body{
        margin: 0;
        padding: 0;
        background: #333;
}
.form{
    width: 350px;
    padding: 20px;
    background: #eee;
    border-radius: 5px;
    box-shadow: 1px 1px 1px gray;
    margin: 25px auto;
    color: #333;
    font-family: sans-serif, Arial;
}
label{
    font-weight: bold;
}
.input{
    width: 100%;
    height: 50px;
}
.input>div{
    float: left;
    min-width: 200px;
}
input[type="text"],
input[type="password"],
input[type="email"],
.input-opt{
    width: 200px;
    height: 30px;
    border-radius: 5px;
    color: black;
    font-size: 16px;
    font-family: sans-serif, Arial;
    outline: none;
    margin-top: 5px;
    border: 2px solid #ddd;
}
.error{
    color: red;
    font-family: sans-serif, Arial;
    font-size: 14px;
    margin: 12px;
}
.correct{
    color: darkgreen;
    font-size: 16px;
    font-family: sans-serif, Arial;
}
.wrong{
    color: green;
}
.log-reg>a{
    color: #fff;
    font-size: 16px;
    font-family: sans-serif,Arial;
    text-decoration: none;
    padding: 20px;
}
.log-reg>h4{
    color: #fff;
    font-size: 16px;
    font-family: sans-serif,Arial;
    text-decoration: none;
    padding: 20px;
}
</style>
<script src="js/jquery-3.3.1.min.js"></script>
    <script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.8.1/js/all.js" data-auto-replace-svg="nest"></script>
</body>
</html>