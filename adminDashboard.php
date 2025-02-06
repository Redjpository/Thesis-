<?php
    session_start();
    if(!isset($_SESSION['user'])) header('location: index.php');
    $user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminDashboard.css" href="Sign-in.css">
    <title>King Custom - Admin Dashboard</title>
</head>

<header>
    <div class="header-left">
        <img src="KC logoRed.png" alt="LOGO Image Category" class="logo">
        <h3>Category</h3>
    </div>

    <div class="header-right">
        <span><?= $user['FIRST_NAME']. ' '.$user['LAST_NAME']?></span>
        <a href="database/logout.php">Logout</a>
    </div>
</header>

<body style="background-color: gray;">

    <div class="dashboardMainContainer">
    <div class="dashboard_sidebar">
        <div class="dashboard_sidebar_menus">
            <ul class="dashboard_menu_lists">
                <li class="menuActive">
                    <a href="#" >Account Creation</a>
                </li>
                <li>
                    <a href="#">Verification</a>
                </li>
                <li>
                    <a href="#">Client Complaints</a>
                </li>
                <li>
                    <a href="#">Order Confirmation</a>
                </li>
                <li>
                    <a href="#">Update Status Order</a>
                </li>
            </ul>
        </div>    
    </div>

    <div class="dashboard_content_container">
        <div class="dashboard_content">
            <div class="dashboard_content_main">

            </div>
        </div>
    </div>
</div>
</body>
</html>