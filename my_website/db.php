<?php
//Database class

//Database Constants
define("HOST","localhost");//change your server or host name
define("USER","root");     //change your database username
define("PASSWORD","");     //change your password
define("DB","test");       //your database name
//https://www.000webhost.com/members/website/list
// xaocprodution 
// po!SiO(zF3oV&26vu1eR
class Database
{
    public $con;
    function __construct()
    {
        $this->con = mysqli_connect(HOST, USER, PASSWORD, DB);
        if(!$this->con)
        {
            echo 'Connecting error!'.mysqli_connect_error();
        }
        /*else
        {
            echo 'Connected';
        }*/
    }

} 

//Object of Database Class
$obj = new Database;

?>