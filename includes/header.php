<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebSite</title>

    <nav class="navbar navbar-expand-sm navbar-light" style="background-color: #e3f2fd;">
        <a class="navbar-brand" href="#">Registration & Login</a>



        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item ">
                    <p class="m-auto mx-5 px-5 text-muted pt-2"><?php
                                                            if (isset($_SESSION['is_register']) || isset($_SESSION['is_login'])) {
                                                                echo 'WELCOM' . $_SESSION['name'];
                                                            }
                                                            ?></p>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/index_style.css">
</head>

<body>

    <div class="container m-auto">