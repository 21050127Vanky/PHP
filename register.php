<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body style="background-color: rgb(42, 40, 40);">
    <div class="container" style="background-color: #ffffff; border-radius: 20px; display: flex; flex-direction: column; padding: 20px 20px 10px 10px; margin-top: 20px;">
        <?php 
        include("php/connect.php");
        
        if (isset($_POST['submit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $pass = $_POST['password'];
            $phone = $_POST['phone'];
            $code = $_POST['code'];


            $verify_user = mysqli_query($con, "SELECT email FROM users WHERE Email = '$email'");
            
            if (mysqli_num_rows($verify_user) != 0){
                echo "<div class='container'><p> This email is already used. Please try another one.</p></div>";
                echo "<a href='javascript:self.history.back()'><button class='btn btn-dark btn-lg btn-block'>Go back</button></a>";
            }
            else{
                mysqli_query($con, "INSERT INTO users (Username, Email, Password, number, code) VALUES ('$name','$email', '$pass','$code','$phone')") or die("Insert Error");
                echo "<div class='container'><p> Thank you for registration.</p></div>";
                echo "<a href='login.php'><button class='btn btn-dark btn-lg btn-block'>Go back to login</button></a>";
            }
        } else {
        ?>
        <div class="row" style="display: flex; justify-content: center; align-items: center; min-height: 80vh;">
            <br><br><br>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <img src="assets/img/docs.png" alt="image"/>
                </div>
                <div class="col-md-5">
                    <div class="row">
                        <h1>Sign Up to continue</h1>
                    </div>
                    <br>
                    <div class="row">
                        <form action="" method="post">

                            <div class="form-outline md-2">
                                <input type="text" id="form2Example17" class="form-control form-control-lg" name="name" required/>
                                <label class="form-label" for="form2Example17">Name</label>
                            </div>

                            <div class="form-outline md-2">
                                <input type="email" id="form2Example17" class="form-control form-control-lg" name="email" required/>
                                <label class="form-label" for="form2Example17">Email address</label>
                            </div>

                            <div class="form-outline md-2">
                                <input type="password" id="form2Example27" class="form-control form-control-lg" name="password" required/>
                                <label class="form-label" for="form2Example27">Password</label>
                            </div>

                            <div class="form-outline md-2">
                                <input type="text" id="form2Example17" class="form-control form-control-lg" name="phone"/>
                                <label class="form-label" for="form2Example17">Phone No.</label>
                            </div>

                            <div class="form-outline md-2">
                                <input type="text" id="form2Example27" class="form-control form-control-lg" name="code"/>
                                <label class="form-label" for="form2Example27">Passcode</label>
                            </div>

                            <div class="pt-1 mb-2">
                                <button class="btn btn-dark btn-lg btn-block" type="submit" name="submit">Sign Up</button>
                                <p class="mb-5 pb-lg-2" style="color: #393f81;">Already have an account? <a href="login.php" style="color: #393f81;">Login here</a></p>
                            </div>

                            <a href="#!" class="small text-muted">Terms of use.</a>
                            <a href="#!" class="small text-muted">Privacy policy</a>
                        </form>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
        <?php } ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
