<?php
$con = mysqli_connect("localhost", "root", "", "test");
    if(!$con)
    {
        echo "Error in connecting ".mysqli_connect_error();
    }
    else
    {
        echo "Connected ";
    }

    $scl = "CREATE TABLE IF NOT EXISTS user_info(
        id INT(11) NOT NULL AUTO_INCREMENT,
        u_name VARCHAR(255) NOT NULL,
        u_email VARCHAR(255) NOT NULL,
        gender ENUM('m', 'f') NOT NULL,
        languages VARCHAR(100) NOT NULL,
        contry VARCHAR(100) NOT NULL,
        password VARCHAR(255) NOT NULL,
        singup_date DATETIME NOT NULL,
        last_login DATETIME NOT NULL,
        act_code VARCHAR(255) NOT NULL,
        PRIMARY KEY (id),
        UNIQUE KEY (u_email)
    )";

    $query = mysqli_query($con, $scl);
    if($query)
    {
        echo 'Table created!';
    }

    $sql = "ALTER TABLE user_info ADD activated ENUM('0','1') DEFAULT '0' AFTER act_code";
    if(mysqli_query($con,$sql))
    {
        echo "Alteration Successfully";
    }
?>
