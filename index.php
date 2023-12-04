<?php

include "inti.php";
include "header.php";


session_start();



if (isset($_SESSION["login"])) {

    $conect =  mysqli_connect("localhost", "root", "", "car_x_shop");
    $query = mysqli_query($conect, "SELECT * FROM car_info");
    $data = mysqli_fetch_all($query, 1);


?>

    <section class="featured">
        <div class="container featuerd_container ">
            <div class="post_thumbnail">
                <img src="assets/a.png" alt="">
            </div>
            <div class="post_info">
                <h2 class="post_title"><a href="post.html">
                        Welcome to Car X Shop
                    </a></h2>
                <p>Here are 10 cars below that are avaliable for rent.</p>
                <div class="post_auther">
                    <div class="post_auther_avatar">

                    </div>
                    <div class="post_auther_info">
                        <h5>By: Omar Mahmoud</h5>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="posts">
        <div class="container posts_container">
            <?php foreach ($data as $car) :
            ?>

                <article class="post">
                    <div class="post_thumbnail">
                        <img src="<?= $car["Image"] ?>" style="height: 150px;" alt="">
                    </div>
                    <div class="post_info">
                        <br>
                        <h3 class="post_title mr20"><a href="post.html">
                                <?= $car["Car_Name"] ?>

                            </a></h3>
                        <p class="mr20"> <?= $car["Model_Year"] ?> </p>
                        <div class="post_autner">
                            <div class="post_auther_avatar mr20" style="color: whitesmoke; font-size:20px">
                                <?= $car["Color"] ?>
                            </div>
                            <div class="post_auther_info">
                                <div class="post_auther_info">
                                    <h5 style="font-size: 20px;"> <?= $car["Car_Type"] ?></h5>
                                    <br>
                                    <small style="color: whitesmoke; font-size:20px"><?= $car["Price"] ?> </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>



            <?php endforeach ?>


        </div>
    </section>

<?php

    include "footer.php";
} else {
    header("location: signin.php");
}



?>