<?php 

require_once("includes/header.php");

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

    

<form action="handleLogin.php" method="POST" class="w-50 m-auto my-5 py-5">
  
    <div class="form-group">
        <label >Email address</label>
        <input type="email" class="form-control" name="email"  value="<?php if (isset($_SESSION['old_email'])) {
                                                                                            echo $_SESSION['old_email'];
                                                                                        } ?> ">
    </div>
    <div class="form-group">
        <label >Password</label>
        <input type="password" class="form-control" name="password" value="<?php if (isset($_SESSION['old_pass'])) {
                                                                                                    echo $_SESSION['old_pass'];
                                                                                                } ?>">
    </div>


    <button type="submit" class="btn btn-primary" name="submit" value="LOGIN">LOGIN</button>
</form>

<?php require_once("includes/footer.php");?>