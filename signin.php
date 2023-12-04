<?php



include "inti.php";

session_start();

if (isset($_SESSION["login"])) {
    header("location: index.php");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST["user"];
    $pass = $_POST["pass"];
    $query = ("SELECT * FROM `users` WHERE `Username` = '$user' AND Password = '$pass'");

    $conection =  mysqli_connect("localhost", "root", "", "car_x_shop");
    mysqli_query($conection, $query);

    $count = mysqli_affected_rows($conection);
    if ($count > 0) {
        $_SESSION["login"] = $user;
        header("location: index.php");
    }
}



?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> logen</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>

<section class="form_section">
    <div class="container form_section_container">
        <h2>Sign In</h2>

        <form action="signin.php" method="post">
            <input type="text" placeholder="Username" name="user">
            <input type="password" placeholder=" Password" name="pass">

            <button type="submit" class="btn">Sign in</button>
            <small>Don't have an account?<a style="font-size: 20px;" href="singout.php"> Sign Up</a></small>

        </form>
    </div>
</section>

<script src="script.js"></script>
</body>

</html>
