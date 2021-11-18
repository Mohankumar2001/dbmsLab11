<!DOCTYPE html>
<html>
<?php
 
 $titl=$_POST['book'];

 $conn=mysqli_connect('localhost','root','','dbms');
 
 if(!$conn)
 {
    die(" unable to connect: ".mysqli_connect_error());
 }
 else
 {
     echo "connection successful!! <br/>";
 }

 

 $sql = "select available from books where title='$titl'";
 $res=$conn->query($sql);
 if($res->num_rows>0)
 {
   while($row = $res->fetch_assoc()){
      if($row['available'] == 'yes'){
         echo "available";
      }
      else{
         echo "not available";
      }
   }
  
 }
 else
 {
    echo "No Donors with that blood group";
 }

 mysqli_close($conn);


?>
</html>