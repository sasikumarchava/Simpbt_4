<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "testdb";

$mycon= mysqli_connect($servername,$username,$password,$database);

$qq1 = "SELECT quantity FROM CART WHERE sno=1";
$rr1 = mysqli_query($mycon,$qq1);
// print_r($rr1);
$mynum1 = mysqli_num_rows($rr1);
while($mynum1>0){

  $onerow = mysqli_fetch_assoc($rr1);
  $quantity1 = $onerow['quantity'];
  
  $mynum1--;
}

$qq2 = "SELECT quantity FROM CART WHERE sno=2";
$rr2 = mysqli_query($mycon,$qq2);
// print_r($rr1);
$mynum2 = mysqli_num_rows($rr2);
while($mynum2>0){

  $onerow = mysqli_fetch_assoc($rr2);
  $quantity2 = $onerow['quantity'];
  
  $mynum2--;
}

$qq3 = "SELECT quantity FROM CART WHERE sno=3";
$rr3 = mysqli_query($mycon,$qq3);
// print_r($rr1);
$mynum3 = mysqli_num_rows($rr3);
while($mynum3>0){

  $onerow = mysqli_fetch_assoc($rr3);
  $quantity3 = $onerow['quantity'];
  
  $mynum3--;
}

$qq4 = "SELECT quantity FROM CART WHERE sno=4";
$rr4 = mysqli_query($mycon,$qq4);
// print_r($rr1);
$mynum4 = mysqli_num_rows($rr4);
while($mynum4>0){

  $onerow = mysqli_fetch_assoc($rr4);
  $quantity4 = $onerow['quantity'];
  
  $mynum4--;
}

$qq5 = "SELECT quantity FROM CART WHERE sno=5";
$rr5 = mysqli_query($mycon,$qq5);
// print_r($rr1);
$mynum5 = mysqli_num_rows($rr5);
while($mynum5>0){

  $onerow = mysqli_fetch_assoc($rr5);
  $quantity5 = $onerow['quantity'];
  
  $mynum5--;
}

$qq6 = "SELECT quantity FROM CART WHERE sno=6";
$rr6 = mysqli_query($mycon,$qq6);
// print_r($rr1);
$mynum6 = mysqli_num_rows($rr6);
while($mynum6>0){

  $onerow = mysqli_fetch_assoc($rr6);
  $quantity6 = $onerow['quantity'];
  
  $mynum6--;
}

$qq7 = "SELECT quantity FROM CART WHERE sno=7";
$rr7 = mysqli_query($mycon,$qq7);
// print_r($rr1);
$mynum7 = mysqli_num_rows($rr7);
while($mynum7>0){

  $onerow = mysqli_fetch_assoc($rr7);
  $quantity7 = $onerow['quantity'];
  
  $mynum7--;
}

$qq8 = "SELECT quantity FROM CART WHERE sno=8";
$rr8 = mysqli_query($mycon,$qq8);
// print_r($rr1);
$mynum8 = mysqli_num_rows($rr8);
while($mynum8>0){

  $onerow = mysqli_fetch_assoc($rr8);
  $quantity8 = $onerow['quantity'];
  
  $mynum8--;
}

$qq9 = "SELECT quantity FROM CART WHERE sno=9";
$rr9 = mysqli_query($mycon,$qq9);
// print_r($rr9);
$mynum9 = mysqli_num_rows($rr9);
while($mynum9>0){

  $onerow = mysqli_fetch_assoc($rr9);
  $quantity9 = $onerow['quantity'];
  
  $mynum9--;
}


$q1 = "SELECT * FROM CART";
$res1 = mysqli_query($mycon,$q1);
$mystr = 0;

$mynum = mysqli_num_rows($res1);
$myarr = array();

while($mynum>0){

    $onerow = mysqli_fetch_assoc($res1);
    $sno = $onerow['sno'];
    $pname = $onerow['product'];
    $price = $onerow['price'];
    $quantity = $onerow['quantity'];
    $loc = $onerow['location'];

    $mynum--;
    
    
    array_push($myarr,$sno);
    
   



}
$mystr = implode(',',$myarr);

// echo $mystr;

if(isset($_POST["checkout"])){
    $qe = "DELETE FROM cart";
    $result = mysqli_query($mycon,$qe);
}

if(isset($_POST["b3"])){
  $qe = "DELETE FROM cart";
  $result = mysqli_query($mycon,$qe);
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>cart</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    
</head>

<body>
<input type="hidden" value="<?php echo $mystr ?>" id="str" name="str">

<div style="display:flex">
<form action="back.php" method="POST"><input class="btn btn-primary btn-lg  justify-content-center align-items-center align-content-center align-self-center mx-auto justify-content-sm-center align-items-sm-center align-content-sm-center align-self-sm-center mx-sm-auto justify-content-md-center align-items-md-center align-content-md-center align-self-md-center mx-md-auto justify-content-lg-center align-items-lg-center align-content-lg-center align-self-lg-center mx-lg-auto justify-content-xl-center align-items-xl-center align-content-xl-center align-self-xl-center mx-xl-auto justify-content-xxl-center align-items-xxl-center align-content-xxl-center align-self-xxl-center mx-xxl-auto" type="submit" style="width: 126.25px;height: 46px;margin: 0px;margin-left: 110px;margin-top:40px; margin-bottom:10px;padding: 8px 12px;border-top-left-radius: 15px;border-top-right-radius: 15px;border-bottom-right-radius: 15px;border-bottom-left-radius: 15px; color:white;background-color:red" value="<- Back" name="b2" id ="b2"></form>
<input class="btn btn-primary btn-lg  justify-content-center align-items-center align-content-center align-self-center mx-auto justify-content-sm-center align-items-sm-center align-content-sm-center align-self-sm-center mx-sm-auto justify-content-md-center align-items-md-center align-content-md-center align-self-md-center mx-md-auto justify-content-lg-center align-items-lg-center align-content-lg-center align-self-lg-center mx-lg-auto justify-content-xl-center align-items-xl-center align-content-xl-center align-self-xl-center mx-xl-auto justify-content-xxl-center align-items-xxl-center align-content-xxl-center align-self-xxl-center mx-xxl-auto" type="submit" style="width: 126.25px;height: 46px;margin: 0px;margin-left: 110px;margin-top:40px; margin-bottom:10px;padding: 8px 12px;border-top-left-radius: 15px;border-top-right-radius: 15px;border-bottom-right-radius: 15px;border-bottom-left-radius: 15px;" value="View cart" name="b1" id ="b1">
<form action="<?php $_PHP_SELF ?>" method="POST"><input class="btn btn-primary btn-lg  justify-content-center align-items-center align-content-center align-self-center mx-auto justify-content-sm-center align-items-sm-center align-content-sm-center align-self-sm-center mx-sm-auto justify-content-md-center align-items-md-center align-content-md-center align-self-md-center mx-md-auto justify-content-lg-center align-items-lg-center align-content-lg-center align-self-lg-center mx-lg-auto justify-content-xl-center align-items-xl-center align-content-xl-center align-self-xl-center mx-xl-auto justify-content-xxl-center align-items-xxl-center align-content-xxl-center align-self-xxl-center mx-xxl-auto" type="submit" style="width: 126.25px;height: 46px;margin: 0px;margin-left: 110px;margin-top:40px; margin-bottom:10px;padding: 8px 12px;border-top-left-radius: 15px;border-top-right-radius: 15px;border-bottom-right-radius: 15px;border-bottom-left-radius: 15px; color:white;background-color:red" value="Delete cart" name="b3" id ="b3"></form>
</div>
<div class="shopping-cart">
<div class="px-4 px-lg-0">

  <div class="pb-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

          <!-- Shopping cart table -->
          <div class="table-responsive">
            <table class="table" style="border-collapse:separate;">
              <thead>
                <tr>
                  <th scope="col" class="border-0 bg-light">
                    <div class="p-2 px-3 text-uppercase" id="h1" style="display:none">Product</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase" id="h2" style="display:none">Price($)</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase" id="h3" style="display:none">Quantity</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase" id="h4" style="display:none">Remove</div>
                  </th>
                </tr>
              </thead>
              <tbody>
              <h1><?php $mystr ?></h1>
                <tr id="i1">
                  <th scope="row" class="border-0">
                    <div class="p-2" id="item1" style="display:none" >
                      <img src="assets/img/burger_1.jpg" alt="" width="70" class="img-fluid rounded shadow-sm">
                      <div class="ml-3 d-inline-block align-middle">
                        <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">Burger</a></h5><span class="text-muted font-weight-normal font-italic d-block">Food-item: 1</span>
                      </div>
                    </div>
                  </th>
                  <td class="border-0 align-middle" ><strong id="item11" style="display:none">79</strong></td></div>
                  <td class="border-0 align-middle" ><strong id="item12" style="display:none"><?php echo $quantity1 ?></strong></td></div>
                  <td class="border-0 align-middle" ><a href="#" class="text-dark" id="item13" style="display:none"><i class="fa fa-trash"></i></a></td></div>
                </tr>
                <tr>
                   <th scope="row"  class="border-0">
                    <div class="p-2" id="item2" style="display:none">
                      <img src="assets/img/Masala Pasta.jpg" alt="" width="70" class="img-fluid rounded shadow-sm">
                      <div class="ml-3 d-inline-block align-middle">
                        <h5 class="mb-0"><a href="#" class="text-dark d-inline-block">Pasta</a></h5><span class="text-muted font-weight-normal font-italic">Food-item2</span>
                      </div>
                    </div>
                  </th>
                  <td class="align-middle border-0"><strong id="item21" style="display:none">40</strong></td>
                  <td class="align-middle border-0" ><strong id="item22" style="display:none"><?php echo $quantity2 ?></strong></td>
                  <td class="align-middle border-0"><a href="#" class="text-dark" id="item23" style="display:none"><i class="fa fa-trash"></i></a>
                  </td>
                </tr>
                <tr>
                  <th scope="row"  class="border-0">
                    <div class="p-2" id="item3" style="display:none">
                      <img src="assets/img/masalapastanew.jpg" alt="" width="70" class="img-fluid rounded shadow-sm">
                      <div class="ml-3 d-inline-block align-middle">
                        <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block">Pizza</a></h5><span class="text-muted font-weight-normal font-italic">Food-item: 3</span>
                      </div>
                    </div>
                    <td class="align-middle border-0"><strong id="item31" style="display:none">40</strong></td>
                    <td class="align-middle border-0"><strong id="item32" style="display:none"><?php echo $quantity3 ?></strong></td>
                    <td class="align-middle border-0"><a href="#" class="text-dark" id="item33" style="display:none"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                  <th scope="row"  class="border-0">
                    <div class="p-2" id="item4" style="display:none">
                      <img src="assets/img/French_Fries.jpg" alt="" width="70" class="img-fluid rounded shadow-sm">
                      <div class="ml-3 d-inline-block align-middle">
                        <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block">French Fries</a></h5><span class="text-muted font-weight-normal font-italic">Food-item: 4</span>
                      </div>
                    </div>
                    <td class="align-middle border-0"><strong id="item41" style="display:none">50</strong></td>
                    <td class="align-middle border-0"><strong id="item42" style="display:none"><?php echo $quantity4 ?></strong></td>
                    <td class="align-middle border-0"><a href="#" class="text-dark" id="item43" style="display:none"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                  <th scope="row"  class="border-0">
                    <div class="p-2" id="item5" style="display:none">
                      <img src="assets/img/chicken-momo-1.jpg" alt="" width="70" class="img-fluid rounded shadow-sm">
                      <div class="ml-3 d-inline-block align-middle">
                        <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block">Chicken Momo</a></h5><span class="text-muted font-weight-normal font-italic">Food-item: 5</span>
                      </div>
                    </div>
                    <td class="align-middle border-0"><strong id="item51" style="display:none">80</strong></td>
                    <td class="align-middle border-0"><strong id="item52" style="display:none"><?php echo $quantity5 ?></strong></td>
                    <td class="align-middle border-0"><a href="#" class="text-dark" id="item53" style="display:none"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                  <th scope="row" class="border-0">
                    <div class="p-2" id="item6" style="display:none">
                      <img src="assets/img/choco cake.jpg" alt="" width="70" class="img-fluid rounded shadow-sm">
                      <div class="ml-3 d-inline-block align-middle">
                        <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block">Choco lava cake</a></h5><span class="text-muted font-weight-normal font-italic">Food-item: 6</span>
                      </div>
                    </div>
                    <td class="align-middle border-0"><strong id="item61" style="display:none">29</strong></td>
                    <td class="align-middle border-0"><strong  id="item62" style="display:none"><?php echo $quantity6 ?></strong></td>
                    <td class="align-middle border-0"><a href="#" class="text-dark" id="item63" style="display:none"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                  <th scope="row" class="border-0">
                    <div class="p-2" id="item7" style="display:none">
                      <img src="assets/img/Noodles-with-chilli-oil-eggs-6ec34e9.jpg" alt="" width="70" class="img-fluid rounded shadow-sm">
                      <div class="ml-3 d-inline-block align-middle">
                        <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block">Noodles</a></h5><span class="text-muted font-weight-normal font-italic">Food-item: 7</span>
                      </div>
                    </div>
                    <td class="align-middle border-0"><strong id="item71" style="display:none">100</strong></td>
                    <td class="align-middle border-0"><strong id="item72" style="display:none"><?php echo $quantity7 ?></strong></td>
                    <td class="align-middle border-0"><a href="#" class="text-dark" id="item73" style="display:none"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                  <th scope="row" class="border-0">
                    <div class="p-2" id="item8" style="display:none">
                      <img src="assets/img/chicken biryani.jpg" alt="" width="70" class="img-fluid rounded shadow-sm">
                      <div class="ml-3 d-inline-block align-middle">
                        <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block">Chicken Biryani</a></h5><span class="text-muted font-weight-normal font-italic">Food-item: 8</span>
                      </div>
                    </div>
                    <td class="align-middle border-0"><strong id="item81" style="display:none">60</strong></td>
                    <td class="align-middle border-0" ><strong id="item82" style="display:none"><?php echo $quantity8 ?></strong></td>
                    <td class="align-middle border-0"><a href="#" class="text-dark" id="item83" style="display:none"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                  <th scope="row" class="border-0">
                    <div class="p-2" id="item9" style="display:none">
                      <img src="assets/img/watermelon-juice-shutterstock_285112223.jpg" alt="" width="70" class="img-fluid rounded shadow-sm">
                      <div class="ml-3 d-inline-block align-middle">
                        <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block">Watermelon Juice</a></h5><span class="text-muted font-weight-normal font-italic">Food-item: 9</span>
                      </div>
                    </div>
                    <td class="align-middle border-0"><strong id="item91" style="display:none">30</strong></td>
                    <td class="align-middle border-0"><strong id="item92" style="display:none"><?php echo $quantity9 ?></strong></td>
                    <td class="align-middle border-0"><a href="#" class="text-dark" id="item93" style="display:none"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                
              </tbody>
            </table>
          </div>
          <!-- End -->
        </div>
      </div>

      <div class="row py-5 p-4 bg-white rounded shadow-sm">
        <div class="col-lg-6">
          <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Coupon code</div>
          <div class="p-4">
            <p class="font-italic mb-4">If you have a coupon code, please enter it in the box below</p>
            <div class="input-group mb-4 border rounded-pill p-2">
              <input type="text" placeholder="Apply coupon" aria-describedby="button-addon3" class="form-control border-0" id="coupon">
              <div class="input-group-append border-0">
                <button id="cbutton" type="button" class="btn btn-dark px-4 rounded-pill"><i class="fa fa-gift mr-2"></i>Apply coupon</button>
                
              </div>
              
            </div>
            <li class="d-flex justify-content-between py-3"><strong id="cmsg" style="display:none;color:aqua">Coupon applied! Enjoy your discount</strong>
          </div>
          
          <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Instructions for seller</div>
          <div class="p-4">
            <p class="font-italic mb-4">If you have some information for the seller you can leave them in the box below</p>
            <textarea name="" cols="30" rows="2" class="form-control"></textarea>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order summary </div>
          <div class="p-4">
            <p class="font-italic mb-4">Shipping and additional costs are calculated based on values you have entered.</p>
            <ul class="list-unstyled mb-4">
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Order Subtotal </strong><strong id="st">0</strong></li>
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Shipping and handling</strong><strong id="ses">0</strong></li>
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Tax</strong><strong id="vat">0</strong></li>
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                <h5 class="font-weight-bold" id="nc">0</h5>
              </li>
              
            </ul><form action="summary/index.php" method="POST"><input type="submit" value="Procceed to checkout" class="btn btn-dark rounded-pill py-2 btn-block" name="checkout"></form>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
</div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
<script src="myyindex.js"></script>
</html>


