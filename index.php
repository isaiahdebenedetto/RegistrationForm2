<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.9/css/mdb.min.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>

<style>

    body{
        /*background-image: linear-gradient(to right, #11998e , #38ef7d);*/
        background-image: url("images/abstract.jpeg");
    }

    .welcomeButtons{
        text-align: center;
        margin-top: 15%;
    }

    .welcomeButtons button{
        border-radius: 10em;
        width: 30%;
    }

    #loginBtn{
        color: #4285f4;
        border: 2px solid #4285f4;
        margin-top: 20px;
    }

    .blogTitle{
        text-align: center;
        margin-bottom: 50px;
        font-family: Impact;
        font-size: 50px;
    }

    .card{
        width: 500px;
        margin: 0 auto;
        margin-top: 25px;
        margin-bottom: 50px;
    }

</style>
</head>
<body>

<div class="welcomeButtons">
    <p class="blogTitle">The Blog</p>
<button data-toggle="modal" data-target="#myModal" id="signUpBtn" type="button" class="btn btn-primary waves-effect ">Sign Up</button><br>
<button data-toggle="modal" data-target="#myModal2" id="loginBtn" type="button" class="btn waves-effect">Log in</button>
</div>

<!-- Material form register -->
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="card">

        <h5 class="card-header info-color white-text text-center py-4">
            <strong>Sign up</strong>
        </h5>

        <!--Card content-->
        <div class="card-body px-lg-5 pt-0">

            <!-- Form -->
            <form class="text-center" style="color: #757575;" action="server.php" method="post">
                <!--                --><?php //include('errors.php'); ?>
                <div class="form-row">
                    <div class="col">
                        <!-- First name -->
                        <div class="md-form">
                            <input type="text" name="fNameInput" class="form-control" placeholder="First Name">
                        </div>
                    </div>
                    <div class="col">
                        <!-- Last name -->
                        <div class="md-form">
                            <input type="text" name="lNameInput" class="form-control" placeholder="Last Name">
                        </div>
                    </div>
                </div>

                <!-- E-mail -->
                <div class="md-form mt-0">
                    <input type="email" name="emailInput"class="form-control" placeholder="E-mail">
                </div>

                <div class="md-form mt-0">
                    <input type="email" name="confirmEmail" class="form-control" placeholder="Confirm E-mail">
                </div>

                <!-- DOB -->
                <div class="md-form">
                    <input type="date" name="dobInput" class="form-control" placeholder="Birthday">
                </div>

                <!-- Username -->
                <div class="md-form">
                    <input type="text" name="usernameInput" class="form-control" placeholder="Username">
                </div>

                <!-- Password -->
                <div class="md-form">
                    <input type="password" name="passwordInput" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock" placeholder="Password">
                </div>

                <!-- Confirm Password -->
                <div class="md-form">
                    <input type="password" name="confirmPassword" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock" placeholder="Confirm Password">
                </div>

                <!-- Sign up button -->
                <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit" name="reg_user">Register</button>
                <div class="loginLink">
                    <a href="login.php">Already a User? Log in Now</a>
                </div>


            </form>
            <!-- Form -->

        </div>

    </div>
    </div>
</div>
</div>
<!-- Material form register -->






<!-- Material form register -->
<div id="myModal2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <div class="modal-dialog">
    <div class="modal-content">
    <div class="card">

        <h5 class="card-header info-color white-text text-center py-4">
            <strong>Log In</strong>
        </h5>

        <!--Card content-->
        <div class="card-body px-lg-5 pt-0">

            <!-- Form -->
            <form class="text-center" style="color: #757575;" action="users.php" method="post">

                <!-- E-mail -->
                <div class="md-form mt-0">
                    <input type="email" name="emailInput"class="form-control" placeholder="E-mail">
                </div>

                <!-- Password -->
                <div class="md-form">
                    <input type="password" name="passwordInput" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock" placeholder="Password">
                </div>
                <!-- Log In button -->
                <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit" name="log_user">Log In</button>
                <div class="registerLink">
                    <a href="register.php">Not a user? Sign Up Now</a>
                </div>


            </form>
            <!-- Form -->

        </div>

    </div>
    </div>
    </div>
</div>
<!-- Material form register -->




</body>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.9/js/mdb.min.js"></script>

</html>