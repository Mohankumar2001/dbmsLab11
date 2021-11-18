<!DOCTYPE html>
<html>
<?php
 
 $title= $_POST['book_id'];

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

 $sql = "update borrower set issue=CURRENT_DATE(),returndate=DATE_ADD(CURRENT_DATE(),INTERVAL 1 MONTH) where book_id=$title";
 
if(mysqli_query($conn, $sql)) {
   echo "success";
}
else{
   echo "fail";
}

?>
</html>