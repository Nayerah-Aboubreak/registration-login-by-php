<?php
if (isset($_COOKIE['id'])) {
    echo $_COOKIE['id'] . '<br>';
}


if (isset($_SESSION['success'])) {
    echo $_SESSION['success'];
    unset($_SESSION['success']);
}
require_once("includes/header.php");

if (isset($_SESSION['is_register']))
{
    echo "<script>
        window.alert(`Hello! You are register successfully`);
    </script>";
}

if (isset($_SESSION['is_login']))
{
    echo "<script>
    window.alert(`Hello! You are login successfully`);
    </script>";
}
?>

<div class="container m-auto w-50">
    <div class="row text-center  mt-5 ">
        <div class="col-md-12 my-5 pt-5">
            <h1 style="color: blue; font-weight: bold;">WELCOM TO OUR WEBSITE</h1>
            <?php
            if (isset($_SESSION['is_register']) or isset($_SESSION['is_login'])) {
            ?>
                <a href="handleLogout.php"><button type="button" class="btn btn-dark my-5">LOGOUT</button></a>
                <?php
            } else {?>
                <a href="register.php"><button type="button" class="btn btn-primary mx-2 my-5">REGISTER</button></a>
                <a href="login.php"><button type="button" class="btn btn-success mx-2 my-5">LOGIN</button></a>
            <?php  }  ?>
        </div>
    </div>
</div>