<?php ob_start();?>

<?php if (!isset($_SESSION['is_logged_in'])): ?>
    header('Location: ' . ROOT_URL . 'users/login');
<?php endif;
?>
 <?php
$id = $_GET['id'];
echo print_r($id);
?>
<div class="mainNavBar">
    <ul>
        <li class="adminLeftSideNav">
            <p> Administrators </p>
        </li>

        <?php foreach ($viewmodel as $item): ?>
        <li class="adminSideBody">
            <img src="<?php echo ROOT_PATH . 'assets/image/' . $item['userImage']; ?>" class="adminManuImg">
            <div class="adminManuName" >
            <a  href="../editAdmin/?id=<?php echo $item['userID']; ?>">
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



<form class="userCenterForm" method="POST" action="<?php $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
    <h3>Edit Administrator</h3>
    <hr>
    <div class="form-group">


        <label for="userName">User Name</label>
        <input type="text" class="form-control" id="userName" name="userName" placeholder="<?php echo $userName ?>">
    </div>


    <div class="form-group">

    <label for="userRole">Role</label>
    <select class="form-control form-control-sm" name="userRole">
    <option value="default">Select Role</option>
    <option value="owner">Owner</option>
        <option value="maneger">Maneger</option>
        <option value="sales">Sales</option>
    </select>
    </div>
    <div class="form-group">
        <label for="userPassword">Password</label>
        <input type="password" name="password" class="form-control" id="userPassword" placeholder="Password">
    </div>

    <div class="form-group">
        <label for="userImage">Image</label>
        <input type="file"  class="form-control" name="userImage" id="userImage">
    </div>

    <div class="form-group">
        <label for="userEmail">Email address</label>
        <input type="email" name="userEmail" class="form-control" id="userEmail" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="userPhone">Phone Number</label>
        <input type="text" name="userPhone" class="form-control" id="userPhone" placeholder="Phone Number">
    </div>

    <br>
    <button type="submit" name="submit" class="btn btn-primary" value="submit">Submit</button>

</form>

</div>
