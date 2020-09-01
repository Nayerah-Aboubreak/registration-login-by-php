<?php

require_once("includes/header.php");
require_once("includes/footer.php");

if(isset($_SESSION['id'])){
    header('location:index.php');
  }

?>


<div class="container my-5 ">
    <div class="row">
    
    <div class="div col-md-8  offset-md-2">
    
    <?php if(isset($_SESSION['errors'])){ ?>

      <div class="alert alert-danger">
      <?php foreach($_SESSION['errors'] as $error){ ?>
        <p class="text-center mb-0"><?php echo $error; ?></p>
      <?php } ?>
      </div>

    <?php } ?>

    <?php unset($_SESSION['errors']) ;?>

    


<form action="handleRegister.php" method="POST" class="w-50 m-auto my-5 py-5">
    <div class="form-group">
        <label >Name</label>
        <input type="text" class="form-control"  name="name" value="<?php if (isset($_SESSION['old_name'])) {
                                                                                            echo $_SESSION['old_name'];
                                                                                        } ?> ">
    </div>
    <div class="form-group">
        <label >Email address</label>
        <input type="email" class="form-control" name="email" value="<?php if (isset($_SESSION['old_email'])) {
                                                                                            echo $_SESSION['old_email'];
                                                                                        } ?> ">
    </div>
    <div class="form-group">
        <label >Password</label>
        <input type="password" class="form-control" name="password" value="<?php if (isset($_SESSION['old_pass'])) {
                                                                                                    echo $_SESSION['old_pass'];
                                                                                                } ?>">
    </div>
    <div class="form-group">
        <label >Phone</label>
        <input type="text" class="form-control" name="phone" placeholder="type your phone" value="<?php if (isset($_SESSION['old_phone'])) {
                                                                                            echo $_SESSION['old_phone'];
                                                                                        } ?> ">
    </div>
    <div class="form-group">
        <label >Address</label>
        <input type="text" class="form-control" name="address" value="<?php if (isset($_SESSION['old_address'])) {
                                                                                            echo $_SESSION['old_address'];
                                                                                        } ?> ">
    </div>

    <button type="submit" class="btn btn-primary" name="submit" value="REGISTER">REGISTER</button>
</form>


<?php require_once("includes/footer.php");?>