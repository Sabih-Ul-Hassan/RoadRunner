<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;1,800&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/bd69f86183.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="footer.css" type="text/css">
    <link rel="stylesheet" href="style.css" type="text/css">

    <title>Edit profile - Runner</title>
    <style>
        * {
            font-family: 'Montserrat', sans-serif;
        }

        .logo-title {
            font-weight: 800;
            font-size: 1.6rem;
        }

        .navbar-properties-custom {
            background-color: white;
            border-bottom: solid 2px #000;
        }

        .navbar-items-custom-right {
            margin-right: 20px;
        }

        .navbar-items-custom-right > li {
            margin-left: 25px;
        }

        .line-break-small-screen-custom {
            width: 100%;
            height: 1px;
            color: black;
        }

        @media only screen and (min-width: 768px) {
            .navbar-brand {
                transform: translateX(-50%);
                left: 50%;
                position: absolute;
            }

            .line-break-small-screen-custom {
                display: none;
            }
        }

        @media only screen and (min-width: 992px) {
            .navbar-items-custom-left {
                margin-left: 20px;
            }

            .navbar-items-custom-left > li {
                margin-right: 25px;
            }
        }

        .signup-form-properties-custom {
            margin-top: 10px;
            margin-bottom: 100px;
        }

        .button-properties-custom {
            width: 300px;
            background-color: red;
            color: white;
            border: none;
            padding: 5px;
            margin-bottom: 50px;
        }

        .button-properties-custom:hover {
            color: black;
        }

        .signup-form-input-properties-custom {
            border: none;
            border-radius: 0%;
            width: 300px;
            border-bottom: 2px solid #707070;
        }

        .radio-button-properties-custom {
            margin-top: 5px;
        }

        .radio-button-properties-custom > label {
            margin-left: 10px;
        }

        .radio-button-properties-custom > div {
            margin-left: 10px;
        }
        
        .signup-form {
            background-color: rgb(245, 245, 245); 
        }

        .registration-links {
            text-decoration: none;
            color: #000;
        }

        .registration-links:hover {
            text-decoration: none;
            color: red;
        }

        .formTextFeildRegistration{
            border: none;
            border-bottom: 3px solid black; 
            background-color: rgb(245, 245, 245);
        }

        .formTextFeildRegistration:focus{
            border: none;
            border-bottom: 3px solid red;
            outline: none;
        }
    </style>
</head>
<body>
    <div class="fluid-container">
        <nav class="navbar navbar-light navbar-expand-md navbar-properties-custom">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center" id="navbarNav">
                <ul class="navbar-nav navbar-items-custom-left">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Men</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Women</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">New Arrivals</a>
                    </li>
                    <hr class="line-break-small-screen-custom">
                </ul>
            </div>
            
            <a href="#" class="navbar-brand mx-auto">
                <span class="logo-title">ROADRUNNER</span>
            </a>

            <ul class="navbar-nav flex-row navbar-items-custom-right">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <img src="icons/cart.svg" alt="Cart" width="30" height="30" class="d-inline-block align-top">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/profile" class="nav-link">
                        <img src="icons/sign-up-clear.svg" alt="Sign up" width="30" height="30" class="d-inline-block align-top">
                    </a>
                </li>
            </ul>
        </nav>

        <section class="signup-form-section">
            <div class="row d-flex justify-content-center signup-form-properties-custom">
                <div class="col-lg-6 col-md-6 col-sm-8 col-9 signup-form mt-5">
                    <div class="row offset-lg-3 offset-md-2 offset-sm-2 offset-1 mt-5">
                        <form action="#">
                            <div class="form-group signup-form-group-custom">
                                <input value="Some Frst Name" type="text" class="formTextFeildRegistration form-control signup-form-input-properties-custom" id="fname" placeholder="First Name">
                            </div>
                            <div class="form-group signup-form-group-custom">
                                <input type="text" value="Some last name" class="formTextFeildRegistration form-control signup-form-input-properties-custom" id="lname" placeholder="Last Name">
                            </div>
                            <div class="form-group signup-form-group-custom">
                                <input type="email" value="someEmail@idk.123.com" class="formTextFeildRegistration form-control signup-form-input-properties-custom" id="email" placeholder="Email">
                            </div>
                            <div class="form-group signup-form-group-custom">
                                <input type="password" value="123123" class="formTextFeildRegistration form-control signup-form-input-properties-custom" id="password" placeholder="Password">
                            </div>
                            <div class="form-group signup-form-group-custom">
                                <input type="password" value="123123" class="formTextFeildRegistration form-control signup-form-input-properties-custom" id="cpassword" placeholder="Confirm Password">
                            </div>
                            <div class="form-group signup-form-group-custom">
                                <input type="date" value="2011-09-29" class="formTextFeildRegistration form-control signup-form-input-properties-custom" id="dob">
                            </div>
                            <div class="form-group radio-button-properties-custom mt-4">
                                <label for="form-custom">Gender: </label>
                                <div class="form-check form-check-inline" id="form-custom">
                                    <input class="form-check-input" checked type="radio" name="gender" id="male" value="male">
                                    <label class="form-check-label" for="male">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check form-check-inline" id="form-custom">
                                    <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                                    <label class="form-check-label" for="female">
                                        Female
                                    </label>
                                </div>
                            </div>
                            
                            <input class="button-properties-custom col-4 offset-1 offset-lg-6 col-lg-2" type="submit" value="Save">
                            <button class="button-properties-custom offset-1 col-4 col-lg-2" type="submit">Back</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <footer id=footer>
            <div class="container">
                <div class="row " id=footerCol>
                    <div class="col-10 col-sm-4 col-lg-1 offset-1">
                        <p id=heading>Accounts</p>
                        <p>Sign in</p>
                        <p>Regester</p>
                        <p>Order Status</p>
                    </div>
                    <div class="col-10 col-sm-4 col-lg-1 offset-1">
                        <p id=heading>About Us</p>
                        <p>Our Stroy</p>
                        <p>Career</p>
                    </div>
                    <div class="col-10 col-sm-4 col-lg-1 offset-1">
                        <p id=heading>Help</p>
                        <p>Contact Us</p>
                        <p>Order Status</p>
                    </div>
                    <div class="col-10 col-sm-5 col-lg-4 offset-1">
                        <p id=heading>Follow us</p>
                        <p>uwhf efh eoshae fosuoh sdfohse fhosdhf osdfhosdfoh fhfsdoh fosdhfosd hfo shdf sdofh sod foh fos dfohsdfo hfosd hfosd hfo hsfsod hod fho</p>
                        <p><i class="fa-brands fa-facebook"></i> <i class="fa-brands fa-instagram"></i>  <i class="fa-brands fa-twitter"></i></p>
                        
                    </div>
                </div>
            </div>
            <div id=hr></div>
    
            <div class="container">
                <div class="row">
                    <div class="col-11 offset-1 col-sm-2 order-sm-first order-last">
                        <p id=logo>ROADRUNNER</p>
                    </div>
                    <div class="col-11 offset-1 col-sm-2">
                        <p >©ROADRUNNER 2020</p>
                    </div>
                    <div id="privacypolicy" class="col-11 offset-1 col-sm-2 order-sm-last order-first ">
                        <a href="#">Terms of use</a>
                        <a href="#">Privacy policy</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>