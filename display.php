<!DOCTYPE html>
<html>
<?php
 
 $title = $_POST['fname'];
 $type = $_POST['haa'];
 $addr = $_POST['address'];

 $con = mysqli_connect('localhost','root','','dbms');
 
 if(!$con)
 {
    die(" unable to connect: ".mysqli_connect_error());
 }
 else
 {
     echo "connection successful!! <br/>";
     
 }

 

 $sql = "insert into members (mem_date,mem_type,mem_name,mem_address,mem_expdate) values (CURRENT_DATE(),'$type','$title','$addr',DATE_ADD(CURRENT_DATE(),INTERVAL 1 YEAR))";
 
if(mysqli_query($con, $sql)) {
   echo "success";
}
else{
   echo "fail";
}

?>
</html>