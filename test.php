<?php 
     $con = mysqli_connect("localhost","root","","Docu_Mate") or die("Couldn't connect");

     if ($con){
         echo " Successful";
         
            $email = mysqli_real_escape_string($con,$_POST['email']);
            $password = mysqli_real_escape_string($con,$_POST['password']);
    
            echo $email;
            echo $password;
          
     }
    
    

?>