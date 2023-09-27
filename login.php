<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docu_Mate Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body style="background-color: rgb(42, 40, 40);">
    <div class="container"
        style="background-color: #ffffff; border-radius: 20px; display: flex; flex-direction: column; padding: 10px 20px 20px 10px; margin-top: 20px;">
        <?php

        include("php/connect.php");

        if (isset($_POST['submit'])) {
            $email = mysqli_real_escape_string($con, $_POST['email']);
            $password = mysqli_real_escape_string($con, $_POST['password']);

            // Query the database for the user with the entered email
            $result = mysqli_query($con, "SELECT * FROM users WHERE Email='$email'") or die("Select Error");
            $row = mysqli_fetch_assoc($result);

            if ($row) {
                // Verify the entered password with the hashed password from the database
                if ($password==$row['Password']) {
                    $_SESSION['valid'] = $row['Email'];
                    $_SESSION['username'] = $row['Username'];
                    $_SESSION['id'] = $row['Id'];
                    header("Location: main.php");
                } else {
                    echo "<div class='message'>
                          <p>Wrong Username or Password</p>
                       </div> <br>";
                    echo "<a href='login.php'><button class='btn'>Go Back</button>";
                }
            } else {
                echo "<div class='message'>
                          <p>Wrong Username or Password</p>
                       </div> <br>";
                echo "<a href='login.php'><button class='btn'>Go Back</button>";
            }
        } else {
        ?>

        <div class="row" style="display: flex; justify-content: center; align-items: center; min-height: 80vh;">
            <br><br><br>
            <div class="row">
                <div class="col-md-1">
                </div>
                <div class="col-md-5">
                    <img src="assets/img/docs.png" alt="image" />
                </div>
                <div class="col-md-5">
                    <div class="row">
                        <h1>Sign In/Log In to continue</h1>
                    </div>
                    <br>
                    <div class="row">
                        <form action="" method="post">
                            <div class="form-outline md-2">
                                <input type="email" id="form2Example17" class="form-control form-control-lg" name="email" required />
                                <label class="form-label" for="form2Example17">Email address</label>
                            </div>

                            <div class="form-outline md-2">
                                <input type="password" id="form2Example27" class="form-control form-control-lg" name="password" required />
                                <label class="form-label" for="form2Example27">Password</label>
                            </div>

                            <div class="pt-1 mb-2">
                                <button class="btn btn-dark btn-lg btn-block" type="submit" name="submit">Login</button><br><br>
                                <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account?
                                    <a href="register.php" style="color: #393f81;">Sign-up here</a>
                                </p>
                            </div>

                            <a href="#!" class="small text-muted">Terms of use.</a>
                            <a href="#!" class="small text-muted">Privacy policy</a>

                        </form>
                    </div>

                </div>
            </div>
            <div class="col-md-1">
            </div>
        </div>
    <?php } ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>
