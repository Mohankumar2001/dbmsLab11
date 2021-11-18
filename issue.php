<!DOCTYPE html>
<html>
<?php
 
 $title= $_POST['book_id'];
 $memid = $_POST['mem_id'];

 $conn=mysqli_connect('localhost','root','','dbms');
 
 if(!$conn)
 {
    die(" unable to connect: ".mysqli_connect_error());
 }
 else
 {
     echo "connection successful!! <br/>";
     
 }
 /*
 INSERT INTO `members`( `mem_type`, `mem_name`, `mem_address`, `mem_expdate`) 
 VALUES ('student','hemanth','vizag',DATE_ADD(CURRENT_DATE(),INTERVAL 1 DAY))*/

 $sql = "update books set available='no' where book_id=$title";

 $ins = "insert into borrower(mem_id,issue,returndate,book_id) values ($memid,CURRENT_DATE(),DATE_ADD(CURRENT_DATE(),INTERVAL 1 MONTH),$title)";
 
if(mysqli_query($conn, $sql) && mysqli_query($conn, $ins)) {
   echo "success";
}
else{
   echo "fail";
}

?>
</html>