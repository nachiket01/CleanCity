<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Login-clean city</title>
	<link rel = "icon" href ="ICON.png" 
        type = "image/x-icon"> 
</head>
<body style="background:black;">
 
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card bg-dark mt-5">
                    <div class="card-title bg-primary text-white mt-5">
                        <h3 class="text-center py-3">Login </h3>
                    </div>
 
                    <?php 
                        if(@$_GET['Empty']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Empty'] ?></div>                                
                    <?php
                        }
                    ?>
 
 
                    <?php 
                        if(@$_GET['Invalid']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Invalid'] ?></div>                                
                    <?php
                        }
                    ?>
 
                    <div class="card-body">
                        <form action="processs.php" method="post">
                            <input type="text" name="UName" autocomplete="off" placeholder=" User Name" class="form-control mb-3">
                            <input type="password" name="Pass" placeholder=" Password" class="form-control mb-3">
                            <center><button class="btn btn-success mt-3" name="Login">Login</button></center>
                            <div class="mt-4">Don't have an account?<a href="registration.php"> Click to Register</a></div></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>