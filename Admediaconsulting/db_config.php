<?php
require_once 'operations.php';
class db_config{
   public $conn;
   public function __construct(){
        $this->conn=mysqli_connect('localhost','root','','admedia');
   }
}
/* database connection */
