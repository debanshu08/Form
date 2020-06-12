<?php
require_once('config.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="style.css" type="text/css">
    <title>User Registration</title>

</head>
<body class="x4">
<div class="container">
<div class="row">
<div class="col-md-8"> 
   <div class="h5">Contact Form
                <br>
                <hr class="mb-3" >
</div>
<div class="form">
<form action="registration.php" method="post">
    <div class="form-group">
   <label for="firstname"><b>Name</b></label>
   <input class="form-control" id="firstname" type="text" name="firstname" required>  
   </div>
   <div class="form-group">
   <p>Please Specify Your Gender</p>
   <input class="form-control"  id="lastname" type="radio" value="male" name="lastname" required>
   <label for="lastname" class="male"><b>Male</b></label>
   <input class="form-control" value="Female" id="lastname" type="radio" name="lastname" required>
   <label for="lastname" class="male"><b>Female</b></label>
    <br>
</div>
<div class="form-group">
   <label for="email"><b>Email address</b></label>
   <input class="form-control" id="email"  type="email" name="email" required>  
</div>
<div class="form-group">
   <label for="phonenumber"><b>Date Of Birth</b></label>
   <input class="form-control" id="phonenumber"  type="date" name="phonenumber" required>  
</div>
<div class="form-group">
   <label for="password"><b>password</b></label>
   <input class="form-control" id="password"  type="password" name="password" required>
</div> 
    <hr class="mb-3">
    <div class="form-group">
   <input onclick="parent.location='index.php'" class="btn btn-primary"  type="submit" id="register" name="create" value="Sign Up">
   </div>
</form>
</div>
   </div>
   </div>
   </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script type="text/javascript">
$(function(){
    $('#register').click(function(e){

       var valid =this.form.checkValidity();
       if(valid){

        var firstname = $('#firstname').val();
        var lastname = $('#lastname').val();
        var email = $('#email').val();
        var phonenumber = $('#phonenumber').val();
        var password = $('#password').val();

           e.preventDefault();
           $.ajax({
            type : 'POST',
            url : 'process.php',
            data : {firstname : firstname,lastname : lastname, email : email, phonenumber : phonenumber, password: password},
            success : function(data){
                Swal.fire({
              "title" : "Successful",
               "text" : data,
               "type" : "success"
            })

            },
            error : function(data){
                Swal.fire({
              "title" : "Errors",
               "text" : "Error in registering",
               "type" : "error"
            })
            }
           });

           alert('true');
       }else{
           alert('false');
       }

        
        
    });
    
});
</script>
    
</body>
</html>