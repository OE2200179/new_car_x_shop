 <?php





    session_start();


    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $username = $_POST["username"];
        $name = $_POST["name"];
        $password = $_POST["pass"];
        $email = $_POST["email"];

        $conect = mysqli_connect("localhost", "root", "", "car_x_shop");
        mysqli_query($conect, "INSERT INTO `users`( `Name`, `Username`, `Email`, `Password` ) VALUES ('$name','$username','$email','$password')");
        $_SESSION["login"] = $username;
        header("location: signin.php");
    }






    ?>



 <!DOCTYPE html>
 <html>

 <head>
     <meta charset="utf-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <title>Sign Up</title>
     <meta name="viewport" content="width=device-width, initial-scale=1" />
     <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />

     <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
 </head>

 <body>
     <section class="form_section">
         <div class="container form_section_container">
             <h2>Sign Up</h2>

             <form action="singout.php" method="post" enctype="multipart/form-data">
                 <input type="text" name="username" placeholder="username" required />
                 <input type="text" name="name" placeholder="name" required />
                 <input type="email" name="email" placeholder="email" required />
                 <input type="password" name="pass" placeholder="Password" required />


                 <button type="submit" class="btn">Sign Up</button>
                 <small>Already have an account? <a href="signin.php">Sign in</a></small>
             </form>
         </div>
     </section>

     <script src="script.js"></script>
 </body>

 </html>