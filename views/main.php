<?php ob_start();?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Doron's School Management System </title>
	<link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/school.css">
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

</head>

<body>
    <div class="content">


        <div class="header">
            <div>
                <img src="<?php echo ROOT_PATH; ?>assets/logo/doronproject.png">
            </div>
            <?php if (isset($_SESSION['is_logged_in'])): ?>

            <div class="leftbox">
                <div>School</div>
                <div>Administrtor</div>
            </div>
            <div class="rightbox">
                <div class='nav-username'> <?php echo $_SESSION['user_data']['name']; ?> </div>
                <div class="inner-right-box">
                    <div class="nav-role"> <?php echo $_SESSION['user_data']['role']; ?></div>
                    <a class="nav-logout" href="<?php echo ROOT_URL; ?>users/logout">logout</a>
                </div>
                <!-- <div class="nav-image"><?php echo $_SESSION['user_data']['image']; ?></div> -->
                <img class="nav-image" src="<?php echo ROOT_PATH . 'assets/image/' . $_SESSION['user_data']['image'] ?>">


            </div>
            <?php endif;?>

        </div>
        <!-- <nav class="nav-bar"></nav>
        <main class="main"></main> -->

        <div class="row userContent" >
                <?php require $view;?>
        </div>

        <div class="footer">
            <div class="my-details"> &copy Made by Doron Davidowitz; &nbsp dorondavidowitz@gmail.com;&nbsp</div>
            <div class="linkedin">
                <a href="http://www.linkedin.com/in/doron-davidowitz-43541a145">
                    &nbsp
                    <img src="<?php echo ROOT_PATH; ?>assets/logo/linkedin-logo-hd-png-3.png" alt="Linkedin Link">
                </a>
            </div>
            <div class="github">
                <a href="https://github.com/dorondav">&nbsp &nbsp
                    <img src="<?php echo ROOT_PATH; ?>assets/logo/git.png" alt="Github Link"> </a>
            </div>
        </div>


    </div>
</body>

</html>
