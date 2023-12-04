<?php include "header.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $error = [];
    $carname = $_POST["carname"];
    $model = $_POST["model"];
    $color = $_POST["color"];
    $cartype = $_POST["cartype"];
    $price = $_POST["price"];

    $imgname = $_FILES["image"]["name"];
    $tmpname = $_FILES["image"]["tmp_name"];
    $avatar =   rand(0, 1000000) . "_" . $imgname;
    $imgLoc = "imgtodatbase/$avatar";


    if ($carname == "" || strlen($carname) == 0 || empty($carname)) {
        $error[] = "car name is requerd";
    }
    if ($model == "" || strlen($model) == 0 || empty($model)) {
        $error[] = "model is requerd";
    }
    if ($color == "" || strlen($color) == 0 || empty($color)) {
        $error[] = "color is requerd";
    }
    if ($price == "" || strlen($price) == 0 || empty($price)) {
        $error[] = "price is requerd";
    }
    if ($avatar == "" || strlen($avatar) == 0 || empty($avatar)) {
        $error[] = "color is requerd";
    }
    if (count($error) == 0) {
        move_uploaded_file($tmpname,   $imgLoc);
        $conect = mysqli_connect("localhost", "root", "", "car_x_shop");
        mysqli_query($conect, "INSERT INTO `car_info`( `Car_Name`, `Model_Year`, `Color`, `Car_Type`, `Price`, `Image`) VALUES (' $carname','$model','$color','$cartype','$price','$imgLoc') ");
        header("location: index.php");
    } else {
        foreach ($error as $eror) {
            echo $eror;
        }
    }
}







?>

<section class="form_section">
    <div class="container form_section_container">
        <h2>Add car</h2>

        <form action="add_pos.php" method="post" enctype="multipart/form-data">
            <input type="text" name="carname" placeholder="name">
            <input type="text" name="color" placeholder="color">
            <input type="text" name="model" placeholder="model">
            <input type="text" name="cartype" placeholder="car type">
            <input type="text" name="price" placeholder="price">



            <div class="form_control">
                <label for="thumbnail">Add car image</label>
                <input type="file" id="thumbnail" name="image">
            </div>
            <button type="submit" class="btn">add car</button>

        </form>
    </div>
</section>

<?php include "footer.php" ?>