<?php 
require "connect.php";
/*if(isset($_POST['submit']))
{
    $fname=$_POST['fname'];
    $phone=$_POST['phone'];
    $descript=$_POST['description'];
    $Category=$_POST['Category'];
    $type=$_POST['type'];
    $sql="INSERT INTO info (name,phone,description,type,name_it)VALUES 
    ('$fname','$phone','$descript','$type','$Category')";
    $res=mysqli_query($link,$sql);

}*/

if (isset($_FILES['img'])) {
    $imgname=$_FILES['img']['name'];
     $imgtype=$_FILES['img']['type'];
      $imgsize=$_FILES['img']['size'];
       $imgtem=$_FILES['img']['tmp_name'];

       if(move_uploaded_file($imgtem, "images/".$imgname)){
        $path="images/".$imgname;
         $fname=$_POST['fname'];
    $phone=$_POST['phone'];
    $descript=$_POST['description'];
    $Category=$_POST['Category'];
    $type=$_POST['type'];
    $sql="INSERT INTO info (name,phone,description,type,name_it,pic)VALUES 
    ('$fname','$phone','$descript','$type','$Category','$path')";
    $res=mysqli_query($link,$sql);
       }
       else{
echo "string";
       }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!--- Basic Page Needs  -->
    <meta charset="utf-8">
    <title> ADD  </title>
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

    <section class="contact-area ptb--100" id="contact">
        <div class="container">
            <div class="section-title">
                <h2>ADD YOUR LOST IT OR FOUND IT</h2>
                <p>by submitting this form you help pepole to found thier lost or your lost </p>
            </div>
            


        <form class="well form-horizontal"  method="POST"  id="contact_form" enctype="multipart/form-data">
<fieldset>

<!-- Form Name -->


<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="fname" placeholder="" class="form-control"  type="text">
    </div>
  </div>
</div>
<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Phone</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="phone" placeholder="+966 555555555" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text area -->
  
<div class="form-group">
  <label class="col-md-4 control-label"> Description</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
            <textarea class="form-control" name="description" placeholder=""></textarea>
  </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label"> Image </label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
            <input name="img" placeholder="+966 555555555" class="form-control" type="file">
  </div>
  </div>
</div>

<!-- Select Basic -->
   
<div class="form-group"> 
  <label class="col-md-4 control-label">Category</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="Category" class="form-control selectpicker" >
      <option>Lost it</option>
      <option>Found it</option>
      
      
    </select>
  </div>
</div>
</div>
<!-- Select Basic -->
   
<div class="form-group"> 
  <label class="col-md-4 control-label">Type</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="type" class="form-control selectpicker" >
      <option>People</option>
      <option>Things</option>
      
      
    </select>
  </div>
</div>
</div>

 <!-- Google Map Button -->
 <div class="form-group">
  <label class="col-md-4 control-label"> Your location</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        
        <button type="button" onclick="showPosition();">Show My Position on Google Map</button >
    <div id="embedMap" style="width: 400px; height: 300px;">
        <!--Google map will be embedded here-->
    </div>
           
  </div>
  </div>
</div>



  <!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <input  name="submit" type="submit" class="btn btn-success" value="submit">
  </div>
</div>

 

 

</fieldset>
</form>
                    

    <!-- Scripts -->
    <script src="assets/js/jquery-3.2.0.min.js"></script>
    <script src="assets/js/jquery-ui.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/counterup.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.mb.YTPlayer.min.js"></script>
    <script src="assets/js/theme.js"></script>


    <script src="https://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
function showPosition(){
    if(navigator.geolocation){
        navigator.geolocation.getCurrentPosition(showMap, showError);
    } else{
        alert("Sorry, your browser does not support HTML5 geolocation.");
    }
}
 
// Define callback function for successful attempt
function showMap(position){
    // Get location data
    lat = position.coords.latitude;
    long = position.coords.longitude;
    var latlong = new google.maps.LatLng(lat, long);
    
    var myOptions = {
        center: latlong,
        zoom: 16,
        mapTypeControl: true,
        navigationControlOptions: {style:google.maps.NavigationControlStyle.SMALL}
    }
    
    var map = new google.maps.Map(document.getElementById("embedMap"), myOptions);
    var marker = new google.maps.Marker({position:latlong, map:map, title:"You are here!"});
}
 
// Define callback function for failed attempt
function showError(error){
    if(error.code == 1){
        result.innerHTML = "You've decided not to share your position, but it's OK. We won't ask you again.";
    } else if(error.code == 2){
        result.innerHTML = "The network is down or the positioning service can't be reached.";
    } else if(error.code == 3){
        result.innerHTML = "The attempt timed out before it could get the location data.";
    } else{
        result.innerHTML = "Geolocation failed due to unknown error.";
    }
}
</script>

</body>

</html>