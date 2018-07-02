<?php if (!isset($_SESSION['is_logged_in'])):
    header('Location: ' . ROOT_URL . 'users/login');
endif;?>
<style>
    .mainNavBar {
        border: 2px solid #C92240;
        border-radius: 25px;
        padding: 15px;
        grid-column: 1/4;
        display: grid;

    }

    .mainNavBar ul {
        display: grid;
        grid-auto-rows: 80px;
        list-style-type: none;
        grid-template-columns: repeat(4, 1fr);
        width: 100%;
        grid-gap: 5px;


    }

    #studentSideHeadId {
        grid-column: 1/3;
        /* background: greenyellow; */
    }

    #coursesSideHeadId {
        grid-column: 3/6;
        /* background: teal; */
    }

    .studentSideBody {
        grid-column: 1/3;
        /* background: fuchsia; */
        border: 2px solid #C92240;

    }

    .coursesSideBody {
        grid-column: 3/6;
        /* background: darkorange; */
        border: 2px solid #C92240;
    }

    .lestSideHeader {
        text-align: center;
        padding: 25px;
        border: 2px solid #C92240;
        text-decoration: underline;

    }
</style>

<div class="mainNavBar">

    <ul>
        <li class="lestSideHeader" id="studentSideHeadId">Student</li>
        <li class="lestSideHeader" id="coursesSideHeadId">Courses</li>
        <li class="studentSideBody">Student</li>
        <li class="coursesSideBody">Courses</li>
        <li class="studentSideBody">Student</li>
        <li class="coursesSideBody">Courses</li>
        <li class="studentSideBody">Student</li>
        <li class="coursesSideBody">Courses</li>
    </ul>
</div>
<div class="mainScreen">

</div>