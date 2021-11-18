<!DOCTYPE html>
<html>
<?php
 
 $title = $_POST['fname'];
 $type = $_POST['haa'];

 $conn=mysqli_connect('localhost','root','','dbms');

 if(!$conn)
 {
    die(" unable to connect: ".mysqli_connect_error());
 }
 else
 {
     echo $title;
     
 }

 $sql = "select * from members where mem_name='$title'";
 $res=$conn->query($sql);
 if($res->num_rows>0)
 {
    if ($type == 'student'){
        readfile('student.html');
    }
    else{
       readfile('librarian.html');
    }
   
 }
 else
 {
    echo "No members with that name";
 }
 
?>
</html>