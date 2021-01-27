<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Form Php</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div>
    <?php 
  
    ?>

</div>


<div>
    <form action="registration.php" method="post">
        <div class="container">
            <div class="row"></div>
                <div style="position:absolute; top:50%;left:50%;transform:translate(-50%,-50%); width:40%;" class="col-sm-3">
                    <h1>Registration</h1>
                    <p>Registration Ambri  </p>
                    <hr class="mb-3">
                    <label for="firstname"><b>First Name</b></label>
                    <input class="form-control" id="firstname" type="text" name="firstname" required>
                    
                    <label for="lastname"><b>Lastname</b></label>
                    <input class="form-control" id="lastname" type="text" name="lastname" required>

                    <label for="email"><b>Email Addres</b></label>
                    <input class="form-control" id="email" type="text" name="email" required>

                    <label for="phonenumber"><b>Phone Number</b></label>
                    <input class="form-control" id="phonenumber" type="text" name="phonenumber" required>

                    <label for="password"><b>password</b></label>
                    <input class="form-control"  id="password" type="password" name="password" required>
                    <hr class="mb-3">
                    <input class="btn btn-primary" type="submit" id="register" name="create" value="Sign Up">
                </div>
            </div>
        </div>
    
    </form>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

<script>
    $(function(){
        $('#register').click(function(e){
            
            var valid = this.form.checkValidity();
            if(valid){

                var firstname   = $('#firstname').val();
                var lastname    = $('#lastname').val();
                var email       = $('#email').val();
                var phonenumber = $('#phonenumber').val();
                var password    = $('#password').val();


                e.preventDefault();

                $.ajax({
                    type: 'POST',
                    url: 'process.php',
                    data: {firstname: firstname,lastname: lastname,email: email,phonenumber: phonenumber,password: password},
                    success: function(data){
                        Swal.fire({
                        'title': 'Succesful',
                        'text': data,
                        'type': 'succes'
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