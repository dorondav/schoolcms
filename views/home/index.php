<?php if (!isset($_SESSION['is_logged_in'])):
    header('Location: ' . ROOT_URL . 'users/login');
endif;?>
<style>
    .coursesSideNav {
        background: pink;
        text-align: center;
        grid-column: 3/5;
        grid-row: 1;
        padding: 15px;



    }

    .studentSideNav {
        background: hotpink;
        text-align: center;
        grid-column: 1/3;
        grid-row: 1;
        padding: 15px;


    }
</style>

<div class="mainNavBar">
    <div class="coursesSideNav">Courses</div>
    <div class="studentSideNav">Student</div>
</div>