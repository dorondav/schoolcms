<?php

function login()
{
    global $db;
    if ($_SERVER['REQUEST_METHOD'] == "POST") {

        $adminEmail = mysqli_real_escape_string($db, $_POST['login-email']);
        $adminPass = mysqli_real_escape_string($db, $_POST['password']);

        $sql = "SELECT ID FROM admins WHERE adminEmail = '$adminEmail' and adminPassword = '$adminPass'";
        $result = mysqli_query($db, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        // $active = $row['active'];
        $count = mysqli_num_rows($result);

        if ($count == 1) {
            $_SESSION['login_user'] = $adminEmail;

            header("location: ../index.html");
        } else {
            echo "Your Login Name or Password is invalid";
        }

    }
}
