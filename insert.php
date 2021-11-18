<!DOCTYPE html>
<html>
<?php
 
 $title = $_POST['title'];
 $pid = $_POST['pid'];
 $author = $_POST['author'];
 $price = $_POST['price'];


 $conn=mysqli_connect('localhost','root','','dbms');
 
 if(!$conn)
 {
    die(" unable to connect: ".mysqli_connect_error());
 }
 else
 {
     echo "connection successful!! <br/>";
     
 }
 $sql = "insert into books (title,pub_id,author,price,available) values ('$title',$pid,'$author',$price,'yes')";
 
if(mysqli_query($conn, $sql)) {
   echo "success";
}
else{
   echo "fail";
}

?>
</html>