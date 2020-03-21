<?php
    require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    
    <div>
        <?php
            if(isset($_POST['submit'])){
                echo "User submitted";

                $firstname      = $_POST['firstname'];
                $lastname       = $_POST['lastname'];
                $email          = $_POST['email'];
                $phonenumber    = $_POST['phonenumber'];
                $password       = $_POST['password'];

                $sql = "INSERT INTO users(user_firstname, user_lastname, user_email, user_phone, user_pass) VALUES(?,?,?,?,?);";
                $stmtinsert = $db->prepare($sql);
                $result = $stmtinsert->execute([$firstname , $lastname, $email, $phonenumber, $password]);

                if($result){
                    echo 'successfully saved.';
                }else{
                    echo 'there were errors while saving the data.';
                }

            }
        ?>
    </div>

    <div>
        <form method="post" action="registration.php">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <h1>Registration</h1>
                        <p>Fill up the form with correct values</p>
                        <hr class="mb-3">
                        <label for="firstname"><b>First Name</b></label>
                        <input class="form-control" type="text" id="fn" name="firstname" required>

                        <label for="lastname"><b>Last Name</b></label>
                        <input class="form-control" type="text" id="ln" name="lastname" required>

                        <label for="email"><b>Email Address</b></label>
                        <input class="form-control" type="email" id="email" name="email" required>

                        <label for="phonenumber"><b>Phone Number</b></label>
                        <input class="form-control" type="text" id="phone" name="phonenumber" required>

                        <label for="password"><b>Password</b></label>
                        <input class="form-control" type="password" id="pass" name="password" required>
                        <hr class="mb-3">
                        <input class="btn btn-primary" type="submit" id="register" name="submit" value="Sign UP">
                    </div>
                </div>    
            </div>
        </form>
    </div>
    <script src="JQuery/ajax.js"></script>
    <script src="sweetalert/sweetalert.js"></script>
    <script>
        $(function(){
            $('#register').click(function(e){

                var valid = this.form.checkValidity();
                if(valid){
                    e.preventDefault();
                    alert('true');
                }else{
                    alert('false');
                }


                 var firstname   = $('#fn').val();
                 var lastname    = $('#ln').val();
                 var email       = $('#email').val();
                 var phone       = $('#phone').val();
                 var pass        = $('#pass').val();
                
            });
            //alert('keep grinding');
            swal.fire({
                'title': 'Hello World',
                'text': 'This isfrom sweetalert2',
                'type': 'succes'  
            })
        });
    
    </script>
</body>
</html>