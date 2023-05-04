<!DOCTYPE html>
<html>
    <head>
       
   
        <!-- <style>
           
            p{
                color: green;
            }
        </style> -->
    </head>
<body>
     <form action="col.php" method="post">
Name: <input type="text" name="name " ><br>
D.O.B: <input type="date" id="birthday" name="birthday"><br>
ph.no:<input type="tel" id="phone" name="phone" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required><br>
upload photo:<input type="file" id="myFile" name="filename"><br>
<input type="submit">
</form> 



<?php
include 'inc\con.php';
?>



</body>
</html>
