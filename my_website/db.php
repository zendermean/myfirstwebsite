<?php
//Database class

//Database Constants
define("HOST","localhost");
define("USER","root");     
define("PASSWORD","");     
define("DB","test");       

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
