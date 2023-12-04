<?php
include "header.php";

// Establish a database connection
$connection = mysqli_connect("localhost", "root", "", "car_x_shop");

// Check if the connection was successful
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

// // Check if the search form was submitted
// if (isset($_POST['search'])) {
//     $searchTerm = $_POST['search'];

//     // Prepare the search query
//     $query = "SELECT * FROM `car_info` WHERE Car_Name LIKE '%{$searchTerm}%'";

//     // Execute the search query
//     $result = mysqli_query($connection, $query);

//     if ($result) {
//         // Check if any results were found
//         if (mysqli_num_rows($result) > 0) {
//             // Fetch and display the data
//             while ($row = mysqli_fetch_assoc($result)) {
//             }
//         } else {
//             echo "No results found.";
//         }

//         // Free the result set
//         mysqli_free_result($result);
//     } else {
//         echo "Error executing search query: " . mysqli_error($connection);
//     }
// }

// // Close the database connection
// mysqli_close($connection);
?>




<!-- form search=========================== -->

<section class="search_bar mr_top">
    <form action="blog.php" method="post" class="container search_bar_container">
        <div class="form_input">
            <i class="uil uil-search"></i>
            <input type="search" name="search" placeholder="find your car">
        </div>
        <button type="submit" class="btn">Go</button>
    </form>
</section>

<!-- form search===========================xxxx -->

<section class="posts">
    <div class="container posts_container">

        <?php

        // Check if the search form was submitted
        if (isset($_POST['search'])) {
            $searchTerm = $_POST['search'];

            // Prepare the search query
            $query = "SELECT * FROM `car_info` WHERE Car_Name LIKE '%{$searchTerm}%'";

            // Execute the search query
            $result = mysqli_query($connection, $query);

            if ($result) {
                // Check if any results were found
                if (mysqli_num_rows($result) > 0) {
                    // Fetch and display the data
                    while ($row = mysqli_fetch_assoc($result)) {





        ?>

                        <article class="post">
                            <div class="post_thumbnail">
                                <img src="<?= $row["Image"] ?>" alt="">
                            </div>
                            <div class="post_info">
                                <a href="" class="category_button mr20 mrt">wild Life</a>
                                <h3 class="post_title mr20"><a href="post.html">
                                        <?= $row["Car_Name"] ?>

                                    </a></h3>
                                <p class="mr20"> <?= $row["Model_Year"] ?> </p>
                                <div class="post_autner">
                                    <div class="post_auther_avatar mr20" style="color: whitesmoke;">
                                        <?= $row["Color"] ?>
                                    </div>
                                    <div class="post_auther_info">
                                        <div class="post_auther_info">
                                            <h5>By: <?= $row["Car_Type"] ?></h5>
                                            <small><?= $row["Price"] ?></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>


        <?php

                    }
                } else {
                    echo "No results found.";
                }

                // Free the result set
                mysqli_free_result($result);
            } else {
                echo "Error executing search query: " . mysqli_error($connection);
            }
        }

        // Close the database connection
        mysqli_close($connection);
        ?>
    </div>
</section>
<?php include "footer.php" ?>