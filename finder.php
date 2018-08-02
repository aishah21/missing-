<?php
require "connect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!--- Basic Page Needs  -->
    <meta charset="utf-8">
    <title>FINDER</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Specific Meta  -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <link rel="stylesheet" href="assets/css/magnificpopup.css">
    <link rel="stylesheet" href="assets/css/jquery.mb.YTPlayer.min.css">
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="assets/img/icon/favicon.ico">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>
<body>

 <section class="team-area bg-gray ptb--100" id="team">
        <div class="container">
            <div class="section-title">
                <h2>Finder </h2>
                <p>search for what you looking for .. </p>
            </div>
           <!-- <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 col-6">
                    <div class="single-team">
                        <div class="team-thumb">
                            <img src="http://drsazini.com/wp-content/uploads/2017/03/crying-boy.jpg" alt="image">
                        </div>
                        <h4>Ahmad </h4>
                        <span><b>055123456789</b></span><br>
                        <span>i found the chidern near to A-23 camp</span>
                       
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 col-6">
                    <div class="single-team">
                        <div class="team-thumb">
                            <img src="https://cdn.shopify.com/s/files/1/0145/1752/products/Both-05.jpg?v=1416154722" alt="image">
                        </div>
                        <h4>Hifa </h4>
                        <span><b>055123456789</b></span><br>
                        <span>i found wellet .if you lost your wellet contact me to be sure is yours</span>
                        
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 col-6">
                    <div class="single-team">
                        <div class="team-thumb">
                            <img src="https://images-na.ssl-images-amazon.com/images/I/A1YvbwuyNLL._UX425_.jpg" alt="image">
                        </div>
                         <h4>Khalide </h4>
                        <span><b>055123456789</b></span><br>
                        <span>i found wellet .if you lost your wellet contact me to be sure is yours </span>
                        
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 col-6">
                    <div class="single-team">
                        <div class="team-thumb">
                            <img src="https://ieltsintaiwan.files.wordpress.com/2015/09/kimchanoldasian.jpg?w=640" alt="image">
                        </div>
                        <h4>Noura fahad</h4>
                        <span><b>055123456789</b></span><br>
                        <span>if you know this man please come to camp D-04 </span>
                        
                    </div>
                </div>
            </div>
        </div>-->
        <div class="row">
              <?php 

$sql="SELECT * FROM info WHERE name_it='Found it'";
$res=mysqli_query($link,$sql);
if(mysqli_num_rows($res)>0){
    while ($row=mysqli_fetch_array($res)) {
        echo '
         <div class="col-md-3 col-sm-6 col-xs-12 col-6">
                    <div class="single-team">
                        <div class="team-thumb">
                            <img src="'.$row['pic'].'" alt="image">
                        </div>
                        <h4>'.$row['name'].'</h4>
                        <span> <b>'.$row['phone'].'</b></span><br>
                        <span>'.$row['description'].'</span>
                        
                    </div>
                </div>
        ';
    }
}
            ?>
        </div>
    </section>
    <!-- team area end -->
   