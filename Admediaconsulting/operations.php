

<?php 
require_once "db_config.php";
$db= new db_config;
class operations{

/********************************************************* validation ****************************************************************/
public function check(){
    if(isset($_POST['add']))
    {
      $name=$_POST['name'];
      $phone=$_POST['phone'];
      $dt=$_POST['dt'];
      $gpnumber=$_POST['gpnumber'];
        if(empty($name)&& empty($phone) && empty($dt)&&empty($gpnumber))
        {
            $errMsg="Error! You didn't enter this form.";
            echo $errMsg;
        }
       else if(!preg_match("/^[a-zA-z]*$/",$_POST["name"]))
        {
            $ErrMsg="Only alphabets and whitespace are allowed.";
            echo $ErrMsg;
        }
        else if(!preg_match("/^[0-9]*$/",$_POST["phone"]))
        {
            $ErrMsg="Only numeric value is allowed.";
            echo $ErrMsg;
        }
        else{
            /*Insertion*/     $this->store($name,$phone,$dt,$gpnumber);
            header('location:index.php');
        }
            
    }

    }
/********************************************************* adding to the database ****************************************************************/
    public function store($name,$phone,$dt,$gpnumber)
    {
        
        global $db;
        $sql="INSERT INTO `users`(`name`, `phone`, `dt`,`gpnumber`) VALUES ('$name','$phone','$dt',$gpnumber)";
        mysqli_query($db->conn,$sql);
    
    }
/********************************************************* Displaying data from database ****************************************************************/
public function display(){
    global $db;
    $sql="SELECT * FROM `users`";
    $result=mysqli_query($db->conn,$sql);
    return $result;

}
/*********************************************************  update data from database ****************************************************************/
public function edit($id){
global $db;
$sql="SELECT * FROM `users` WHERE id='$id'";
$result=mysqli_query($db->conn,$sql);
return $result;

}
public function update(){
    global $db;
    if(isset($_POST['update'])){
        $id=$_POST['id'];
        $name=$_POST['name'];
        $phone=$_POST['phone'];
        $dt=$_POST['dt'];
        $gpnumber=$_POST['gpnumber'];
    $sql="UPDATE `users` SET `name`='$name',`phone`='$phone',`dt`='$dt',`gpnumber`='$gpnumber' WHERE id='$id'";
    mysqli_query($db->conn,$sql);
    header('location:index.php');
    
    }


}
/*********************************************************  delete data from database ****************************************************************/

public function delete($id){
    global $db;
    $sql="DELETE FROM `users` WHERE id='$id'";
    mysqli_query($db->conn,$sql);

}
}
?>