<?php
require "connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!--- Basic Page Needs  -->
    <meta charset="utf-8">
    <title>SEARCHER</title>
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
                <h2>Searcher </h2>
                <p>find what you looking for .. </p>
            </div>
            <div class="row">
              <!--  <div class="col-md-3 col-sm-6 col-xs-12 col-6">
                    <div class="single-team">
                        <div class="team-thumb">
                            <img src="https://images-na.ssl-images-amazon.com/images/I/717Ac0oQ-AL._SL1500_.jpg" alt="image">
                        </div>
                        <h4>Hala </h4>
                        <span><b>055123456789</b></span><br>
                        <span>my phone losted , the contact imprtent to me .please fell free to contact my sis any time</span>
                       
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 col-6">
                    <div class="single-team">
                        <div class="team-thumb">
                            <img src="https://answersafrica.com/wp-content/uploads/2015/06/Cute-and-Unique-Baby-Girl-Names-640x426.jpg" alt="image">
                        </div>
                        <h4>Fahad </h4>
                        <span><b>055123456789</b></span><br>
                        <span>my baby losted .she wear jens and white shert </span>
                        
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 col-6">
                    <div class="single-team">
                        <div class="team-thumb">
                            <img src="https://climg6.bluestone.com/f_jpg,c_scale,w_1024,b_rgb:f0f0f0/giproduct/BIRS0139R73_YAA18XXXXXXXXXXXX_ABCD00-PICS-00001-1024-5449.png" alt="image">
                        </div>
                        <h4>Majda</h4>
                        <span> <b>055123456789</b></span><br>
                        <span>my gold ring losted ..</span>
                        
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 col-6">
                    <div class="single-team">
                        <div class="team-thumb">
                            <img src="https://stockx.imgix.net/products/streetwear/Supreme-Shoulder-Bag-SS18-Black-1.jpg?fit=fill&bg=FFFFFF&w=1400&h=1000&auto=format,compress&trim=color&q=90" alt="image">
                        </div>
                        <h4>Fawaz</h4>
                        <span> <b>055123456789 </b></span><br>
                        <span>my bag contain many things .. </span>
                        
                    </div>
                </div>
            </div>-->
            <?php 

$sql="SELECT * FROM info WHERE name_it='Lost it'";
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
   