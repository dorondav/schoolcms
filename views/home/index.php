<?php if (!isset($_SESSION['is_logged_in'])):
    header('Location: ' . ROOT_URL . 'users/login');
endif;?>
<style>
</style>

<div class="mainNavBar">

    <ul>

        <li class="lestSideHeader" id="studentSideHeadId">
            <p> Students </p>
            <span>
                <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </span>
        </li>
        <li class="lestSideHeader" id="coursesSideHeadId">
            <p>Courses</p>
            <span>
                <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </span>
        </li>

        <li class="studentSideBody">
            <img src="" alt="" srcset="" class="studentManuImg">
            <div class="studentManuName">221</div>
            <div class="studentManuPhone">2</div>
        </li>
        <li class="coursesSideBody">
            <img src="" alt="" srcset="" class="coursManuImg">
            <div class="coursManuName">1</div>
            <div class="coursManuPhone">2</div>
        </li>
        <li class="studentSideBody">
            <img src="" alt="" srcset="" class="studentManuImg">
            <div class="studentManuName">1</div>
            <div class="studentManuPhone">2</div>
        </li>
        <li class="coursesSideBody">
            <img src="" alt="" srcset="" class="coursManuImg">
            <div class="coursManuName">1</div>
            <div class="coursManuPhone">2</div>
        </li>


    </ul>
</div>
