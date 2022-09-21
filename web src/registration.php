<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body style="background:black;">
<div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card bg-dark mt-5">
                    <div class="card-title bg-primary text-white mt-5">
                        <h3 class="text-center py-3"> Registration </h3>
                    </div>

<div class="card-body">
	<form action="registration.php" method="post">
					<hr class="mb-3">

					<input class="form-control mb-3" id="Uname" placeholder="User Name" autocomplete="off" type="text" name="Uname" required>


				

					<input class="form-control mb-3" id="email" placeholder=" E-mail" autocomplete="off"  type="email" name="email" required>


					<input class="form-control mb-3" id="phonenumber" placeholder=" Phone Number"  type="text" name="phonenumber" required>


					<input class="form-control mb-3" id="Pass" placeholder=" Password" type="Password" name="Pass" required>
					<hr class="mb-3">
					<input class="btn btn-success mt-3" type="submit" id="register" name="create" value="REGISTER">
				
	</form><div class="mt-4">Already have an account?<a href="index.php"> Click to LOGIN</a></div></div>
</div></div></div></div></div><br>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
	$(function(){
		$('#register').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){


			var Uname 	= $('#Uname').val();
			var email 		= $('#email').val();
			var phonenumber = $('#phonenumber').val();
			var Pass 	= $('#Pass').val();
			

				e.preventDefault();	

				$.ajax({
					type: 'POST',
					url: 'process.php',
					data: {Uname: Uname,email: email,phonenumber: phonenumber,Pass: Pass},
					success: function(data){
	Swal.fire({
								'title': 'Successful',
								'text': data,
								'type': 'success'
								})
							
					},
					error: function(data){
						Swal.fire({
								'title': 'Errors',
								'text': 'There were errors while saving the data.',
								'type': 'error'
								})
					}
				});

				
			}else{
				
			}

			



		});		

		
	});
	
</script>
</body>
</html>
