<?php
include_once('database.php');

if (isset($_SESSION['uToken'])) {
    header('location:education/index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ngetemplates.com/mshop/mshop/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Dec 2020 04:47:10 GMT -->

<head>
    <meta charset="UTF-8">
    <title>Educationpanel | Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1  maximum-scale=1 user-scalable=no">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="HandheldFriendly" content="True">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i" rel="stylesheet">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<style>
    body {
        /*            padding-top: 9.2rem;
                        padding-bottom: 4.2rem;*/
        background: url(img/bg1.jpg);
    }

    a {
        text-decoration: none !important;
    }

    h1,
    h2,
    h3 {
        font-family: monospace;
    }

    .myform {
        /*position: relative;*/
        display: -ms-flexbox;
        display: flex;
        padding: 1rem;
        -ms-flex-direction: column;
        flex-direction: column;
        width: 100%;
        pointer-events: auto;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, .2);
        border-radius: 1.1rem;
        outline: 0;
        max-width: 500px;
    }

    .tx-tfm {
        text-transform: uppercase;
    }

    .mybtn {
        border-radius: 6px;
    }

    .google {
        color: #666;
        width: 100%;
        height: 40px;
        text-align: center;
        outline: none;
        border: 1px solid lightgrey;
    }

    .alert-danger {
        color: #ffffff;
        background-color: #da3443;
        border-color: #da3443;
    }

    #second {
        display: none;
    }
</style>

<body>


    <div class="container-fluid h-100">
        <div class="row align-items-center h-100">
            <div class="col-lg-6 col-md-6 col-sm-12 mx-auto">
                <?php
                if (isset($_SESSION['loginfail'])) {
                ?>
                    <p class="alert alert-danger <?php echo isset($_SESSION['loginfail']) ? 'mt-5' : ''; ?>"><?php echo $_SESSION['loginfail']; ?></p>
                <?php
                }
                ?>
                <form action="controller/controller.php" method="post" class="border p-4 bg-white rounded <?php echo isset($_SESSION['loginfail']) ? '' : 'mt-5'; ?>" id="form-login">
                    <div class="text-center"><img src="img/logo.png" class="text-center" style="width: 30%; margin-bottom: 14px;">
                    </div>
                    <h2 class="text-center">Login</h2>
                    <div class="form-group">
                        <!--<label for="exampleInputEmail1">Email address</label>-->
                        <input type="email" name="uEmail" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <!--<label for="exampleInputEmail1">Password</label>-->
                        <input type="password" name="uPassword" id="password" class="form-control" aria-describedby="emailHelp" placeholder="Enter Password">
                    </div>

                    <div class="form-group">
                        <button type="submit" name="submit" class=" btn btn-block mybtn btn-primary tx-tfm" value="login">Login</button>
                    </div>

                    <a href="register.php" class="mb-3"><span style="color: #007bff;">Don't have an Account</span> Register!</a>
                </form>
            </div>
        </div>
    </div>

    <!-- scripts -->

    <!-- JavaScript Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

<!-- Mirrored from ngetemplates.com/mshop/mshop/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Dec 2020 04:47:10 GMT -->

</html>

<?php
if (isset($_SESSION['loginfail'])) {
    unset($_SESSION['loginfail']);
}
?>