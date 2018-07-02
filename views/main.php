<?php ob_start();?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Doron's School Management System </title>
	<link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/school.css">
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
    crossorigin="anonymous">
<script src="<?php echo ROOT_PATH; ?>assets/js/jquery.min.js"></script>
</head>

<body>
    <div class="content">


        <header class="header">
            <div>
                <img src="<?php echo ROOT_PATH; ?>assets/logo/doronproject.png">
            </div>
            <?php if (isset($_SESSION['is_logged_in'])): ?>

            <div class="leftbox">
            <div>    <a  href="<?php echo ROOT_URL; ?>">School</a></div>
                <div>    <a  href="<?php echo ROOT_URL; ?>users/administrator">Administrtor</a></div>

            </div>
            <div class="rightbox">
                <div class="inner-right-box">
                     <div class='nav-username'> <?php echo $_SESSION['user_data']['name']; ?> : </div>
                    <div class="nav-role"> <?php echo $_SESSION['user_data']['role']; ?></div>
                    <a class="nav-logout" href="<?php echo ROOT_URL; ?>users/logout">logout <i class="fa fa-sign-out" aria-hidden="true"></i>
                    </a>
                </div>
                <img class="nav-image" src="<?php echo ROOT_PATH . 'assets/image/' . $_SESSION['user_data']['image'] ?>">
                <!-- <div class="nav-image"><?php echo $_SESSION['user_data']['image']; ?></div> -->


            </div>
            <?php endif;?>

        </header>
        <!-- <nav class="nav-bar"></nav>
        <main class="main"></main> -->

        <div class="row userContent" >
                <?php require $view;?>
        </div>

         <footer class="footer">
            <div class="my-details"> &copy Made by Doron Davidowitz; &nbsp dorondavidowitz@gmail.com;&nbsp</div>
            <div class="linkedin">
                <a href="http://www.linkedin.com/in/doron-davidowitz-43541a145" target="_blank">
                    &nbsp
                    <img src="<?php echo ROOT_PATH; ?>assets/logo/linkedin-logo-hd-png-3.png" alt="Linkedin Link">
                </a>
            </div>
            <div class="github">
                <a href="https://github.com/dorondav" target="_blank">&nbsp &nbsp
                    <img src="<?php echo ROOT_PATH; ?>assets/logo/git.png" alt="Github Link"> </a>
            </div>
        </footer>


    </div>


</body>
<script src="<?php echo ROOT_PATH; ?>assets/js/javascript.js"></script>
</html>
