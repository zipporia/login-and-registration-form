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

                echo $firstname . " " . $lastname . " " . $email . " " . $phonenumber . " " . $password;

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
                        <input class="form-control" type="text" name="firstname" required>

                        <label for="lastname"><b>Last Name</b></label>
                        <input class="form-control" type="text" name="lastname" required>

                        <label for="email"><b>Email Address</b></label>
                        <input class="form-control" type="email" name="email" required>

                        <label for="phonenumber"><b>Phone Number</b></label>
                        <input class="form-control" type="text" name="phonenumber" required>

                        <label for="password"><b>Password</b></label>
                        <input class="form-control" type="password" name="password" required>
                        <hr class="mb-3">
                        <input class="btn btn-primary" type="submit" name="submit" value="Sign UP">
                    </div>
                </div>    
            </div>
        </form>
    </div>
</body>
</html>