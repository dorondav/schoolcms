<?php ob_start();?>
<?php if (!isset($_SESSION['is_logged_in'])):
    header('Location: ' . ROOT_URL . 'users/login');
endif;?>
<form class="userCenterForm" method="POST" action="<?php $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
    <h3>Register New Administrator</h3>
    <hr>
    <div class="form-group">
        <label for="userName">User Name</label>
        <input type="text" class="form-control" id="userName" name="userName" placeholder="Enter Name">
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
