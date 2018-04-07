<?php
session_start();
include '../../config/connection.php';

$user_check = $_SESSION['login_user'];

$session_sql = mysqli_query($db, "SELECT AdminName from admins WHERE adminName = '$user_check'");
$row = mysqli_fetch_array($session_sql, MYSQLI_ASSOC);
$login_session = $row['adminName'];

if (!isset($_SESSION['login_user'])) {
    header("location: ../login.php");
}
;
