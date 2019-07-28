<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/fixed.css">
    <link rel="stylesheet" href="https://xaocprodution.000webhostapp.com/register/style.css">
    <title>Request</title>
</head>
<body>
        <div class="log-reg">
            <a href="index.php">Home Page</a>
        </div>
    <div class="form">
        <h2>Send request</h2>
        <hr>
        <p id="msg"></p>
        <!--start form-->
        <form action="send.php" method="POST" id="request_form">
            <label>Your Email</label>
                <div class="input">
                    <div>
                        <input type="email" placeholder="Email" name="req_email" id="req_email">
                    </div>
                        <div class="error e_error"></div>
                </div>
            <label>Your Name</label>
                <div class="input">
                    <div>
                        <input type="text" placeholder="Name" name="req_name" id="req_name">
                    </div>
                    <div class="error u_error"></div>
                </div>
            <div class="input">
                <div>
                   <!-- <input type="submit" name="request" id="request" value="Send"> -->
                   <button type="submit">Send</button>
                </div>
            </div>
        </form>
    </div>
<!--style-->
<style>
body{
        margin: 0;
        padding: 0;
        background: #333;
}
.form{
    width: 500px;
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
    color: gray;
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
</style>
<!--scripts-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.8.1/js/all.js" data-auto-replace-svg="nest"></script>
</body>
</html>