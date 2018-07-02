<?php if (!isset($_SESSION['is_logged_in'])):
    header('Location: ' . ROOT_URL . 'users/login');
endif;?>

<div class="mainNavBar">
    <ul>
        <li class="adminLeftSideNav">
            <p> Administrators </p>
            <span>
                <a  href="register">
                <i class="fa fa-plus-circle" aria-hidden="true">  </i>
                </a>
            </span>
        </li>

        <?php foreach ($viewmodel as $item): ?>
        <li class="adminSideBody">
            <img src="<?php echo ROOT_PATH . 'assets/image/' . $item['userImage']; ?>" class="adminManuImg">
            <div class="adminManuName" >
                <a  href="editUser.php?$admin_id">
                <?php echo $item["userName"]; ?>
            </div>
            <div class="adminManuRole">
                <?php echo $item['userRole']; ?>
            </div>
            <div class="adminManuPhone">
                <?php echo $item['userPhone']; ?>
            </div>
            <div class="adminManuEmail">
                <?php echo $item['userEmail']; ?>
            </div>
            </a>
        </li>
        <?php endforeach;?>
    </ul>
</div>
<div class="mainScreen">
</div>