<?php ob_start();?>

<form class="userCenterForm" method="POST" action="<?php $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
    <h3>Please Login</h3>
    <hr>

    <div class="form-group">
        <label for="userEmail">User name</label>
        <input type="email" name="userEmail" class="form-control" id="userEmail" placeholder="Enter email">
    </div>

    <div class="form-group">
        <label for="userPassword">Password</label>
        <input type="password" name="password" class="form-control" id="userPassword" placeholder="Password">
    </div>

    <br>
    <button type="submit" name="submit" class="btn btn-primary" value="submit">Submit</button>
</form>
