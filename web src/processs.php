<?php 
require_once('connection.php');
session_start();
    if(isset($_POST['Login']))
    {
       if(empty($_POST['UName']) || empty($_POST['Pass']))
       {
            header("location:index.php?Empty= Please Fill in the Blanks");
       }
       else
       {
            $query="select * from users where UName='".$_POST['UName']."' and Pass='".$_POST['Pass']."'";
            $result=mysqli_query($con,$query);
 
            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['User']=$_POST['UName'];
                header("location:welcome.php");
            }
            else
            {
                header("location:index.php?Invalid= Please Enter Correct User Name and Pass ");
            }
       }
    }
    else
    {
        echo 'Not Working Now Guys';
    }
 
?>