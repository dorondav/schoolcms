<?php
include "../config/connection.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Please Login</title>
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>

</head>

<body>
    <div class="main">
        <header class="header">
            <div class="logo">
                <img src="../logo/doronproject.png" alt="logo">
                <div class="clearfix"></div>
            </div>
            <div class="clearfix">
                <h1 id="Welcome"> Please login</h1>
            </div>
        </header>
        <div class="container">
            <center>
                <div class="middle">
                    <div id="login">
                        <form action="" name="login-form" method="post">
                            <fieldset class="clearfix">
                                <p>
                                    <span class="fa fa-user"></span>
                                    <input type="text" name="name" id="email-login" Placeholder="Username">
                                </p>
                                <p>
                                    <span class="fa fa-lock"></span>
                                    <input type="password" id="password" name="password" Placeholder="Password">
                                </p>
                                <div>
                                    <span style="width:50%; text-align:center;  display: inline-block;">
                                        <input type="submit" id="btn-login" name="login" value="Sign In">
                                    </span>
                                    <div class="error">
                                    </div>
                                </div>
                            </fieldset>
                            <div class="clearfix" id="error"></div>
                        </form>
                        <div class="clearfix"></div>

                    </div>
                </div>
            </center>
        </div>
    </div>

</body>
<script type="text/javascript" src="login.js"></script>

</html>
