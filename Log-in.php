<?php
session_start();
if(isset($_SESSION['user'])) header('location: adminDashboard.php');

$error_message = '';

    if($_POST){
        include('database/connection.php');

        $username = $_POST['username'];
        $password = $_POST['password']; 

        $query = 'SELECT * FROM users WHERE users.email="'. $username .'" AND users.password="'. $password .'"';
        $stmt = $conn->prepare($query);
        $stmt->execute();
         
        if($stmt->rowCount()> 0){
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $user = $stmt->fetchAll()[0];
        $_SESSION['user'] = $user;

        header('Location: adminDashboard.php');
        }else $error_message = 'Please make sure that user name and password are correct.';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Sign-in.css">

    <title>King Custom - Sign In</title>
</head>
<body id="loginBody">
    <?php
    if(!empty($error_message)){?>
    <div id="errorMessage">
        <strong>Error:</strong> <p><?= $error_message ?> </p>
    </div>
    <?php }?>

    <div class="container">
        <div class="loginHeader">
            <h1>Sign In</h1>
            <p>KING CUSTOMS</p>
        </div>  

        <div class="loginBody">
        <form action="Log-in.php" method="POST">
        <div class="loginInputsContainer">
            <label for="">Email or Username</label>
            <input type="text" name="username">
        </div>
        <br>
        <div class="loginInputsContainer">
            <label for="">Password</label>
            <input type="password" name="password">
        </div>
            <div class="loginButtonContainer">
            <button>Login</button>
            </div>
        </form>
        </div>
    </div>
</body>
</html>