<?php
session_start();
include('includes/config.php');
error_reporting(0);

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px; margin-top:50px; margin-bottom:50px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>Bike Rental Portal</title>
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/styles.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<link href="assets/css/slick.css" rel="stylesheet">
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all" data-default-color="true" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/orange.css" title="orange" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/blue.css" title="blue" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/pink.css" title="pink" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/green.css" title="green" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/purple.css" title="purple" media="all" /> 
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/images/favicon-icon/24x24.png">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
</head>
<body>

<!-- Start Switcher -->
<?php include('includes/colorswitcher.php');?>
<!-- /Switcher -->

<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header -->

<!-- Banners -->
<section id="banner" class="banner-section">
  <div class="container">
    <div class="div_zindex">
      <div class="row">
        <div class="col-md-5 col-md-push-7">
          <div class="banner_content">
            <h1>Find Your Perfect bike</h1>
            <p>We have more than a thousand bikes for you to choose. </p>
            <a href="#" class="btn">Read More <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a> </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Banners -->

<div class="row">
  <div class="column">
    <div class="card">
      <h3>Two Wheeler bikes and scooter</h3>
      <img src="https://www.studds.com/Adminpanel/uploads/THUNDER-420X4201.png" alt="helmet1" height="100px" width="100px"/>
      <p>Price: Rs. 5000/-</p>
        <button>Order Now</button>
    </div>
  </div>

  <div class="column">
    <div class="card">
    <h3>Vega Cliff black</h3>
      <img src="https://m.media-amazon.com/images/I/61iYomOyJ-L._SL1500_.jpg" alt="helmet1" height="100px" width="100px"/>
      <p>Price: Rs. 3550/-</p>
        <button>Order Now</button>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
    <h3>Kappa</h3>
      <img src="https://media.kappamoto.com/AK-Prodotti/foto/HKKV40BR301_trequarti_sx.jpg" alt="helmet1" height="100px" width="100px"/>
      <p>Price: Rs. 4000/-</p>
        <button>Order Now</button>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
    <h3>Zeus</h3>
      <img src="data:image/jpeg;base64,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" alt="helmet1" height="100px" width="100px"/>
      <p>Price: Rs. 2500/-</p>
        <button>Order Now</button>
    </div>
  </div>
</div>

</body>

</html>
