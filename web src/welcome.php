<!DOCTYPE html>
<html>
      <head>  
           <title>Welcome</title>  
           <meta charset="UTF-8">
           <meta name="referrer" content="origin-when-cross-origin">
           <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <meta http-equiv="X-UA-Compatible" content="IE=edge">
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">         
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
           <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel = "icon" href ="ICON.png" 
        type = "image/x-icon"> 
    <link rel="stylesheet" href="styles.css">
      
      <?php
    session_start();
 
    if(isset($_SESSION['User']))
    {
        echo '';
        
    }
    else
    {
        header("location:index.php");
    }
 
?>

<?php  
 $connect = mysqli_connect("localhost", "root", "", "testing");  
 if(isset($_POST["insert"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO tbl_images(name) VALUES ('$file')";  
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Image Uploaded Successfully")</script>';  
      }  
 }  
 ?>  


      
      <style>
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 8px;
  font-size: 12px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  align:left;
  background-color: #f1f1f1;
  min-width: 150px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;

}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd; float: left;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
</head>  
<body style="background:#0099cc">
 <table class="table table-bordered" bgcolor="black" align="center" style="box-shadow: 20px 30px 50px black;">  
   <tr  bgcolor="#ffff66" style="border:0;">  
<th style="color:black;"> 
<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn" align="left">Menu</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="#home">Home</a>
     <a href="#Account">Account</a>
    <a href="#contact">Contact</a>
     <a href="#About">About Us</a>
      <a href="#policy">policy</a>
<?php
echo '<a href="logout.php?logout"><b>Logout: ' . $_SESSION['User'].'</b></a>';
?> </div>
</div>
   </th>  
                     </tr>
                <?php  
                $query = "SELECT * FROM tbl_images ORDER BY id DESC";  
                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  
                          <tr  bgcolor="#ffff66" style="border:0;" style="background-color:#660000; color:#ffff66;" style="box-shadow: 20px 30px 50px black;">  
                               <td style="border:;">  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="200" width="340" class="img-thumnail" />  
</i></a><center>
<a href="location.php">see location</a></center></td></tr>';  
                }  
                ?>  
                </table>  
           </div>
 <script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script> 
<!-- Code begins here -->
                               <a href="http://192.168.43.127:8080/img/project/login/upload.php" class="float" style="
    left: 260px;
    top: 440px;
"><i class="fa fa-camera-retro fa-lg my-float">
</i></a>
</body>
</html>