<?php
 
    $con=mysqli_connect('localhost','root','','useraccounts');
 
    if(!$con)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }
?>