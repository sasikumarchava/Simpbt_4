<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "testdb";


$mycon= mysqli_connect($servername,$username,$password,$database);

$que1 = "SELECT * FROM MYUSER";
$resultt1 = mysqli_query($mycon,$que1);

$number = mysqli_num_rows($resultt1);
while($number>0){
    $one = mysqli_fetch_assoc($resultt1);
    $username = $one["curname"];
    $number--;
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>food list</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Articles-Cards.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/Navbar-Right-Links-Dark.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="cart/index.js"></script>
</head>

<body>
<form action="<?php $_PHP_SELF ?>" method="POST">
    <nav class="navbar navbar-dark navbar-expand-md bg-dark py-3">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="#"><span class="bs-icon-sm bs-icon-rounded bs-icon-primary fs-1 fw-bold d-flex justify-content-center align-items-center me-2 bs-icon"><i class="fas fa-pizza-slice text-center text-white-50 bg-dark"></i></span><span class="fs-3 fw-bold text-center text-white-50">RepEAT</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-5"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-5">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">Welcome <?php echo $username ?></a></li>
                    
                    <li class="nav-item"><a class="nav-link" href="cart/index.php">Cart</a></li>
                    <li class="nav-item"><a class="nav-link" href="demo.php">Log-out</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="carousel slide" data-bs-ride="carousel" id="carousel-1" style="margin-top: 29px;">
        <div class="carousel-inner" style="height: 406.75px;">
            <div class="carousel-item active"><img class="w-100 d-block" src="assets/img/f1.jpg" alt="Slide Image"></div>
            <div class="carousel-item"><img class="w-100 d-block" src="assets/img/myf2.png" alt="Slide Image"></div>
            <div class="carousel-item"><img class="w-100 d-block" src="assets/img/myf3.jpg" alt="Slide Image"></div>
        </div>
        <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a></div>
        <ol class="carousel-indicators">
            <li data-bs-target="#carousel-1" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carousel-1" data-bs-slide-to="1"></li>
            <li data-bs-target="#carousel-1" data-bs-slide-to="2"></li>
        </ol>
    </div>
    <div class="container py-4 py-xl-5">
        <div class="row mb-5" style="margin-right: 0px;margin-left: 0px;border-top-width: 0px;border-right-color: var(--bs-pink);border-left-width: 0px;border-left-style: groove;">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h1 class="fs-1 fw-bold text-center text-white-50 bg-dark bg-gradient border-3 border-primary shadow-lg d-block visible" style="width: 609px;height: 57.25px;margin-top: 20px;padding-top: 3px;border-top-left-radius: 47px;border-top-right-radius: 0px;border-bottom-right-radius: 47px;border-bottom-left-radius: 0px;border-top-style: groove;">RepEAT</h1>
                <p class="lead font-monospace text-truncate fs-3 fw-normal text-center text-black-50 w-lg-50" style="margin: 18px;">Your Food .........Your Choice</p>
            </div>
        </div>
        
        <div class="row gx-3 gy-1 row-cols-1 row-cols-md-2 row-cols-xl-3" style="border-top-left-radius: 56px;">
            <div class="col">
                <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="assets/img/burger_1.jpg">
                    <div class="card-body p-4">
                        <p class="text-primary card-text mb-0">Food Item-1</p>
                        <h4 class="card-title">Burger</h4>
                        <p class="card-text">A hamburger (or burger for short) is&nbsp;a food consisting of fillings —usually a patty of ground meat, typically beef—placed inside a sliced bun or bread roll.<br></p><span><h4 class="card-title">Price: $79</h4></span>
                        <input class="btn btn-primary btn-lg d-lg-flex justify-content-center align-items-center align-content-center align-self-center mx-auto justify-content-sm-center align-items-sm-center align-content-sm-center align-self-sm-center mx-sm-auto justify-content-md-center align-items-md-center align-content-md-center align-self-md-center mx-md-auto justify-content-lg-center align-items-lg-center align-content-lg-center align-self-lg-center mx-lg-auto justify-content-xl-center align-items-xl-center align-content-xl-center align-self-xl-center mx-xl-auto justify-content-xxl-center align-items-xxl-center align-content-xxl-center align-self-xxl-center mx-xxl-auto" type="text" style="color:blue;background-color:white;" placeholder="quantity" style="width: 100px;height: 46px;margin: 0px;margin-left: 110px;margin-top:40px; margin-bottom:10px;padding: 8px 12px;border-top-left-radius: 15px;border-top-right-radius: 15px;border-bottom-right-radius: 15px;border-bottom-left-radius: 15px;" name="q1" id ="q1"><br>
                        <input class="btn btn-primary btn-lg d-lg-flex justify-content-center align-items-center align-content-center align-self-center mx-auto justify-content-sm-center align-items-sm-center align-content-sm-center align-self-sm-center mx-sm-auto justify-content-md-center align-items-md-center align-content-md-center align-self-md-center mx-md-auto justify-content-lg-center align-items-lg-center align-content-lg-center align-self-lg-center mx-lg-auto justify-content-xl-center align-items-xl-center align-content-xl-center align-self-xl-center mx-xl-auto justify-content-xxl-center align-items-xxl-center align-content-xxl-center align-self-xxl-center mx-xxl-auto" type="submit" style="width: 126.25px;height: 46px;margin: 0px;margin-left: 110px;padding: 8px 12px;border-top-left-radius: 15px;border-top-right-radius: 15px;border-bottom-right-radius: 15px;border-bottom-left-radius: 15px;" value="Add to Cart" name="s1" id ="s1">
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="assets/img/Masala%20Pasta.jpg">
                    <div class="card-body p-4">
                        <p class="text-primary card-text mb-0">Food Item-2</p>
                        <h4 class="card-title">Pasta</h4>
                        <p class="card-text">Pasta&nbsp;is&nbsp;a type of food typically made from an unleavened dough of wheat flour mixed with water or eggs, and formed into sheets or other shapes.<br></p><h4 class="card-title">Price: $40</h4>
                        <input class="btn btn-primary btn-lg d-lg-flex justify-content-center align-items-center align-content-center align-self-center mx-auto justify-content-sm-center align-items-sm-center align-content-sm-center align-self-sm-center mx-sm-auto justify-content-md-center align-items-md-center align-content-md-center align-self-md-center mx-md-auto justify-content-lg-center align-items-lg-center align-content-lg-center align-self-lg-center mx-lg-auto justify-content-xl-center align-items-xl-center align-content-xl-center align-self-xl-center mx-xl-auto justify-content-xxl-center align-items-xxl-center align-content-xxl-center align-self-xxl-center mx-xxl-auto" type="text" style="color:blue;background-color:white;" placeholder="quantity" style="width: 100px;height: 46px;margin: 0px;margin-left: 110px;margin-top:40px; margin-bottom:10px;padding: 8px 12px;border-top-left-radius: 15px;border-top-right-radius: 15px;border-bottom-right-radius: 15px;border-bottom-left-radius: 15px;" name="q2" id ="q2"><br>
                        <input class="btn btn-primary btn-lg d-lg-flex justify-content-center align-items-center align-content-center align-self-center mx-auto justify-content-sm-center align-items-sm-center align-content-sm-center align-self-sm-center mx-sm-auto justify-content-md-center align-items-md-center align-content-md-center align-self-md-center mx-md-auto justify-content-lg-center align-items-lg-center align-content-lg-center align-self-lg-center mx-lg-auto justify-content-xl-center align-items-xl-center align-content-xl-center align-self-xl-center mx-xl-auto justify-content-xxl-center align-items-xxl-center align-content-xxl-center align-self-xxl-center mx-xxl-auto" type="submit" style="width: 126.25px;height: 46px;margin: 0px;margin-left: 110px;padding: 8px 12px;border-top-left-radius: 15px;border-top-right-radius: 15px;border-bottom-right-radius: 15px;border-bottom-left-radius: 15px;" value="Add to Cart" name="s10">
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="assets/img/pizza%20(1).jpg">
                    <div class="card-body p-4">
                        <p class="text-primary card-text mb-0">Food Item-3</p>
                        <h4 class="card-title">Pizza</h4>
                        <p class="card-text">pizza, dish of Italian origin consisting of a flattened disk of bread dough topped with some combination of olive oil, oregano, tomato, olives, mozzarella or other cheese.<br></p><h4 class="card-title">Price: $40</h4>
                        <input class="btn btn-primary btn-lg d-lg-flex justify-content-center align-items-center align-content-center align-self-center mx-auto justify-content-sm-center align-items-sm-center align-content-sm-center align-self-sm-center mx-sm-auto justify-content-md-center align-items-md-center align-content-md-center align-self-md-center mx-md-auto justify-content-lg-center align-items-lg-center align-content-lg-center align-self-lg-center mx-lg-auto justify-content-xl-center align-items-xl-center align-content-xl-center align-self-xl-center mx-xl-auto justify-content-xxl-center align-items-xxl-center align-content-xxl-center align-self-xxl-center mx-xxl-auto" type="text" style="color:blue;background-color:white;" placeholder="quantity" style="width: 100px;height: 46px;margin: 0px;margin-left: 110px;margin-top:40px; margin-bottom:10px;padding: 8px 12px;border-top-left-radius: 15px;border-top-right-radius: 15px;border-bottom-right-radius: 15px;border-bottom-left-radius: 15px;" name="q3" id ="q3"><br>
                        <input class="btn btn-primary btn-lg d-lg-flex justify-content-center align-items-center align-content-center align-self-center mx-auto justify-content-sm-center align-items-sm-center align-content-sm-center align-self-sm-center mx-sm-auto justify-content-md-center align-items-md-center align-content-md-center align-self-md-center mx-md-auto justify-content-lg-center align-items-lg-center align-content-lg-center align-self-lg-center mx-lg-auto justify-content-xl-center align-items-xl-center align-content-xl-center align-self-xl-center mx-xl-auto justify-content-xxl-center align-items-xxl-center align-content-xxl-center align-self-xxl-center mx-xxl-auto" type="submit" style="width: 126.25px;height: 46px;margin: 0px;margin-left: 110px;padding: 8px 12px;border-top-left-radius: 15px;border-top-right-radius: 15px;border-bottom-right-radius: 15px;border-bottom-left-radius: 15px;" value="Add to Cart" name="s3">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-4 py-xl-5">
        <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
            <div class="col">
                <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="assets/img/French_Fries.jpg">
                    <div class="card-body p-4">
                        <p class="text-primary card-text mb-0">Food Item-4</p>
                        <h4 class="card-title">French Fries</h4>
                        <p class="card-text">French fries are&nbsp;thin strips of deep-fried potato topped with a choice of condiments. Perfect as a snack or a side dish, French fries have long been a fast-food.<br></p><h4 class="card-title">Price: $50</h4>
                        <input class="btn btn-primary btn-lg d-lg-flex justify-content-center align-items-center align-content-center align-self-center mx-auto justify-content-sm-center align-items-sm-center align-content-sm-center align-self-sm-center mx-sm-auto justify-content-md-center align-items-md-center align-content-md-center align-self-md-center mx-md-auto justify-content-lg-center align-items-lg-center align-content-lg-center align-self-lg-center mx-lg-auto justify-content-xl-center align-items-xl-center align-content-xl-center align-self-xl-center mx-xl-auto justify-content-xxl-center align-items-xxl-center align-content-xxl-center align-self-xxl-center mx-xxl-auto" type="text" style="color:blue;background-color:white;" placeholder="quantity" style="width: 100px;height: 46px;margin: 0px;margin-left: 110px;margin-top:40px; margin-bottom:10px;padding: 8px 12px;border-top-left-radius: 15px;border-top-right-radius: 15px;border-bottom-right-radius: 15px;border-bottom-left-radius: 15px;" name="q4" id ="q4"><br>
                        <input class="btn btn-primary btn-lg d-lg-flex justify-content-center align-items-center align-content-center align-self-center mx-auto justify-content-sm-center align-items-sm-center align-content-sm-center align-self-sm-center mx-sm-auto justify-content-md-center align-items-md-center align-content-md-center align-self-md-center mx-md-auto justify-content-lg-center align-items-lg-center align-content-lg-center align-self-lg-center mx-lg-auto justify-content-xl-center align-items-xl-center align-content-xl-center align-self-xl-center mx-xl-auto justify-content-xxl-center align-items-xxl-center align-content-xxl-center align-self-xxl-center mx-xxl-auto" type="submit" style="width: 126.25px;height: 46px;margin: 0px;margin-left: 110px;padding: 8px 12px;border-top-left-radius: 15px;border-top-right-radius: 15px;border-bottom-right-radius: 15px;border-bottom-left-radius: 15px;" value="Add to Cart" name="s4">
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="assets/img/chicken-momo-1.jpg">
                    <div class="card-body p-4">
                        <p class="text-primary card-text mb-0">Food Item-5</p>
                        <h4 class="card-title">Momos</h4>
                        <p class="card-text">Momo is&nbsp;a type of steamed dumpling with some form of filling, most commonly buff and it is originally from Tibet.<br>Momo has become a delicacy in Nepal and Tibetan.<br></p><h4 class="card-title">Price: $80</h4>
                        <input class="btn btn-primary btn-lg d-lg-flex justify-content-center align-items-center align-content-center align-self-center mx-auto justify-content-sm-center align-items-sm-center align-content-sm-center align-self-sm-center mx-sm-auto justify-content-md-center align-items-md-center align-content-md-center align-self-md-center mx-md-auto justify-content-lg-center align-items-lg-center align-content-lg-center align-self-lg-center mx-lg-auto justify-content-xl-center align-items-xl-center align-content-xl-center align-self-xl-center mx-xl-auto justify-content-xxl-center align-items-xxl-center align-content-xxl-center align-self-xxl-center mx-xxl-auto" type="text" style="color:blue;background-color:white;" placeholder="quantity" style="width: 100px;height: 46px;margin: 0px;margin-left: 110px;margin-top:40px; margin-bottom:10px;padding: 8px 12px;border-top-left-radius: 15px;border-top-right-radius: 15px;border-bottom-right-radius: 15px;border-bottom-left-radius: 15px;" name="q5" id ="q5"><br>
                        <input class="btn btn-primary btn-lg d-lg-flex justify-content-center align-items-center align-content-center align-self-center mx-auto justify-content-sm-center align-items-sm-center align-content-sm-center align-self-sm-center mx-sm-auto justify-content-md-center align-items-md-center align-content-md-center align-self-md-center mx-md-auto justify-content-lg-center align-items-lg-center align-content-lg-center align-self-lg-center mx-lg-auto justify-content-xl-center align-items-xl-center align-content-xl-center align-self-xl-center mx-xl-auto justify-content-xxl-center align-items-xxl-center align-content-xxl-center align-self-xxl-center mx-xxl-auto" type="submit" style="width: 126.25px;height: 46px;margin: 0px;margin-left: 110px;padding: 8px 12px;border-top-left-radius: 15px;border-top-right-radius: 15px;border-bottom-right-radius: 15px;border-bottom-left-radius: 15px;" value="Add to Cart" name="s5">
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="assets/img/800px-Chocolate_Fondant.jpg">
                    <div class="card-body p-4">
                        <p class="text-primary card-text mb-0">Food Item-6</p>
                        <h4 class="card-title">Choco Lava Cake</h4>
                        <p class="card-text"><strong>Molten chocolate cake</strong>&nbsp;is a popular dessert&nbsp;that combines the elements of a chocolate cake&nbsp;and a souffle.<br>Its name derives from&nbsp;<strong>chocolate&nbsp;<em>moelleux.</em></strong><br></p><h4 class="card-title">Price: $29</h4>
                        <input class="btn btn-primary btn-lg d-lg-flex justify-content-center align-items-center align-content-center align-self-center mx-auto justify-content-sm-center align-items-sm-center align-content-sm-center align-self-sm-center mx-sm-auto justify-content-md-center align-items-md-center align-content-md-center align-self-md-center mx-md-auto justify-content-lg-center align-items-lg-center align-content-lg-center align-self-lg-center mx-lg-auto justify-content-xl-center align-items-xl-center align-content-xl-center align-self-xl-center mx-xl-auto justify-content-xxl-center align-items-xxl-center align-content-xxl-center align-self-xxl-center mx-xxl-auto" type="text" style="color:blue;background-color:white;" placeholder="quantity" style="width: 100px;height: 46px;margin: 0px;margin-left: 110px;margin-top:40px; margin-bottom:10px;padding: 8px 12px;border-top-left-radius: 15px;border-top-right-radius: 15px;border-bottom-right-radius: 15px;border-bottom-left-radius: 15px;" name="q6" id ="q6"><br>
                        <input class="btn btn-primary btn-lg d-lg-flex justify-content-center align-items-center align-content-center align-self-center mx-auto justify-content-sm-center align-items-sm-center align-content-sm-center align-self-sm-center mx-sm-auto justify-content-md-center align-items-md-center align-content-md-center align-self-md-center mx-md-auto justify-content-lg-center align-items-lg-center align-content-lg-center align-self-lg-center mx-lg-auto justify-content-xl-center align-items-xl-center align-content-xl-center align-self-xl-center mx-xl-auto justify-content-xxl-center align-items-xxl-center align-content-xxl-center align-self-xxl-center mx-xxl-auto" type="submit" style="width: 126.25px;height: 46px;margin: 0px;margin-left: 110px;padding: 8px 12px;border-top-left-radius: 15px;border-top-right-radius: 15px;border-bottom-right-radius: 15px;border-bottom-left-radius: 15px;" value="Add to Cart" name="s6">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-4 py-xl-5">
        <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
            <div class="col">
                <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="assets/img/raja-noodles-and-fried-rice-nellore-fast-food-0uoqvxvycx.jpg">
                    <div class="card-body p-4">
                        <p class="text-primary card-text mb-0">Food Item-7</p>
                        <h4 class="card-title">Chicken Noodles</h4>
                        <p class="card-text">noodle,&nbsp;a cooked egg-and-flour paste prominent in European and Asian cuisine, generally distinguished from pasta by its elongated ribbonlike form.&nbsp;<br></p><h4 class="card-title">Price: $100</h4>
                        <input class="btn btn-primary btn-lg d-lg-flex justify-content-center align-items-center align-content-center align-self-center mx-auto justify-content-sm-center align-items-sm-center align-content-sm-center align-self-sm-center mx-sm-auto justify-content-md-center align-items-md-center align-content-md-center align-self-md-center mx-md-auto justify-content-lg-center align-items-lg-center align-content-lg-center align-self-lg-center mx-lg-auto justify-content-xl-center align-items-xl-center align-content-xl-center align-self-xl-center mx-xl-auto justify-content-xxl-center align-items-xxl-center align-content-xxl-center align-self-xxl-center mx-xxl-auto" type="text" style="color:blue;background-color:white;" placeholder="quantity" style="width: 100px;height: 46px;margin: 0px;margin-left: 110px;margin-top:40px; margin-bottom:10px;padding: 8px 12px;border-top-left-radius: 15px;border-top-right-radius: 15px;border-bottom-right-radius: 15px;border-bottom-left-radius: 15px;" name="q7" id ="q7"><br>
                        <input class="btn btn-primary btn-lg d-lg-flex justify-content-center align-items-center align-content-center align-self-center mx-auto justify-content-sm-center align-items-sm-center align-content-sm-center align-self-sm-center mx-sm-auto justify-content-md-center align-items-md-center align-content-md-center align-self-md-center mx-md-auto justify-content-lg-center align-items-lg-center align-content-lg-center align-self-lg-center mx-lg-auto justify-content-xl-center align-items-xl-center align-content-xl-center align-self-xl-center mx-xl-auto justify-content-xxl-center align-items-xxl-center align-content-xxl-center align-self-xxl-center mx-xxl-auto" type="submit" style="width: 126.25px;height: 46px;margin: 0px;margin-left: 110px;padding: 8px 12px;border-top-left-radius: 15px;border-top-right-radius: 15px;border-bottom-right-radius: 15px;border-bottom-left-radius: 15px;" value="Add to Cart" name="s7">
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="assets/img/chicken%20biryani.jpg">
                    <div class="card-body p-4">
                        <p class="text-primary card-text mb-0">Food Item-8</p>
                        <h4 class="card-title">Chicken Biryani</h4>
                        <p class="card-text">Chicken Biryani is a delicious savory rice dish that is loaded with spicy marinated chicken, caramelized onions, and flavorful saffron rice.&nbsp;<br></p><h4 class="card-title">Price: $60</h4>
                        <input class="btn btn-primary btn-lg d-lg-flex justify-content-center align-items-center align-content-center align-self-center mx-auto justify-content-sm-center align-items-sm-center align-content-sm-center align-self-sm-center mx-sm-auto justify-content-md-center align-items-md-center align-content-md-center align-self-md-center mx-md-auto justify-content-lg-center align-items-lg-center align-content-lg-center align-self-lg-center mx-lg-auto justify-content-xl-center align-items-xl-center align-content-xl-center align-self-xl-center mx-xl-auto justify-content-xxl-center align-items-xxl-center align-content-xxl-center align-self-xxl-center mx-xxl-auto" type="text" style="color:blue;background-color:white;" placeholder="quantity" style="width: 100px;height: 46px;margin: 0px;margin-left: 110px;margin-top:40px; margin-bottom:10px;padding: 8px 12px;border-top-left-radius: 15px;border-top-right-radius: 15px;border-bottom-right-radius: 15px;border-bottom-left-radius: 15px;" name="q8" id ="q8"><br>
                        <input class="btn btn-primary btn-lg d-lg-flex justify-content-center align-items-center align-content-center align-self-center mx-auto justify-content-sm-center align-items-sm-center align-content-sm-center align-self-sm-center mx-sm-auto justify-content-md-center align-items-md-center align-content-md-center align-self-md-center mx-md-auto justify-content-lg-center align-items-lg-center align-content-lg-center align-self-lg-center mx-lg-auto justify-content-xl-center align-items-xl-center align-content-xl-center align-self-xl-center mx-xl-auto justify-content-xxl-center align-items-xxl-center align-content-xxl-center align-self-xxl-center mx-xxl-auto" type="submit" style="width: 126.25px;height: 46px;margin: 0px;margin-left: 110px;padding: 8px 12px;border-top-left-radius: 15px;border-top-right-radius: 15px;border-bottom-right-radius: 15px;border-bottom-left-radius: 15px;" value="Add to Cart" name="s8">
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="assets/img/watermelon-juice-shutterstock_285112223.jpg">
                    <div class="card-body p-4">
                        <p class="text-primary card-text mb-0">Food Item-9</p>
                        <h4 class="card-title">Watermelon Juice</h4>
                        <p class="card-text"><strong>Watermelon Juice</strong>&nbsp;is best enjoyed during hot summer days as it quickly cools the body and replenishes it with water and minerals lost in sweat.&nbsp;<br></p><h4 class="card-title">Price: $30</h4>
                        <input class="btn btn-primary btn-lg d-lg-flex justify-content-center align-items-center align-content-center align-self-center mx-auto justify-content-sm-center align-items-sm-center align-content-sm-center align-self-sm-center mx-sm-auto justify-content-md-center align-items-md-center align-content-md-center align-self-md-center mx-md-auto justify-content-lg-center align-items-lg-center align-content-lg-center align-self-lg-center mx-lg-auto justify-content-xl-center align-items-xl-center align-content-xl-center align-self-xl-center mx-xl-auto justify-content-xxl-center align-items-xxl-center align-content-xxl-center align-self-xxl-center mx-xxl-auto" type="text" style="color:blue;background-color:white;" placeholder="quantity" style="width: 100px;height: 46px;margin: 0px;margin-left: 110px;margin-top:40px; margin-bottom:10px;padding: 8px 12px;border-top-left-radius: 15px;border-top-right-radius: 15px;border-bottom-right-radius: 15px;border-bottom-left-radius: 15px;" name="q9" id ="q9"><br>
                        <input class="btn btn-primary btn-lg d-lg-flex justify-content-center align-items-center align-content-center align-self-center mx-auto justify-content-sm-center align-items-sm-center align-content-sm-center align-self-sm-center mx-sm-auto justify-content-md-center align-items-md-center align-content-md-center align-self-md-center mx-md-auto justify-content-lg-center align-items-lg-center align-content-lg-center align-self-lg-center mx-lg-auto justify-content-xl-center align-items-xl-center align-content-xl-center align-self-xl-center mx-xl-auto justify-content-xxl-center align-items-xxl-center align-content-xxl-center align-self-xxl-center mx-xxl-auto" type="submit" style="width: 126.25px;height: 46px;margin: 0px;margin-left: 110px;padding: 8px 12px;border-top-left-radius: 15px;border-top-right-radius: 15px;border-bottom-right-radius: 15px;border-bottom-left-radius: 15px;" value="Add to Cart" name="s9">
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script></form>
</body>


</html>


<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "testdb";

$mycon= mysqli_connect($servername,$username,$password,$database);



if(isset($_POST["s1"])){

    $q1 = $_POST['q1'];
    $q1 = "INSERT INTO CART VALUES(1,'Burger',79,'$q1','assets/img/burger_1.jpg')";
    $res1 = mysqli_query($mycon,$q1);

}

if(isset($_POST["s10"])){

    $q2 = $_POST['q2'];

    $q2 = "INSERT INTO CART VALUES(2,'Pasta',40,'$q2','assets/img/Masala Pasta.jpg')";
    $res2 = mysqli_query($mycon,$q2);

}

if(isset($_POST["s3"])){

    $q3 = $_POST['q3'];
    $q3 = "INSERT INTO CART VALUES(3,'Pizza',40,'$q3','assets/img/masalapastanew.jpg')";
    $res3 = mysqli_query($mycon,$q3);

}

if(isset($_POST["s4"])){

    $q4 = $_POST['q4'];
    $q4 = "INSERT INTO CART VALUES(4,'French Fries',50,'$q4','assets/img/French_Fries.jpg')";
    $res4 = mysqli_query($mycon,$q4);

}

if(isset($_POST["s5"])){

    $q5 = $_POST['q5'];
    $q5 = "INSERT INTO CART VALUES(5,'Chicken Momo',80,'$q5','assets/img/chicken-momo-1.jpg')";
    $res5 = mysqli_query($mycon,$q5);

}

if(isset($_POST["s6"])){

    $q6 = $_POST['q6'];
    $q6 = "INSERT INTO CART VALUES(6,'Choco lava cake',29,'q6','assets/img/choco cake.jpg')";
    $res6 = mysqli_query($mycon,$q6);

}

if(isset($_POST["s7"])){

    $q7 = $_POST['q7'];
    $q7 = "INSERT INTO CART VALUES(7,'Noodles',100,'$q7','assets/img/Noodles-with-chilli-oil-eggs-6ec34e9.jpg')";
    $res7 = mysqli_query($mycon,$q7);

}

if(isset($_POST["s8"])){

    $q8 = $_POST['q8'];
    $q8 = "INSERT INTO CART VALUES(8,'Chicken Biryani',60,'$q8','assets/img/chicken biryani.jpg')";
    $res8 = mysqli_query($mycon,$q8);

}

if(isset($_POST["s9"])){

    $q9 = $_POST['q9'];
    $q9 = "INSERT INTO CART VALUES(9,'Watermelon juice',30,'$q9','assets/img/watermelon-juice-shutterstock_285112223.jpg')";
    $res9 = mysqli_query($mycon,$q9);

}

// if(isset($_POST["s10"])){
//     $q2 = "INSERT INTO CART VALUES(2,'Pasta',40,1,'assets/img/Masala Pasta.jpg')";
//         $res2 = mysqli_query($mycon,$q2);   
// }


?>
