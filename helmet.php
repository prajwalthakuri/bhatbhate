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
  margin-bottom: 10px;
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
      <h3>kappa half helmet</h3>
      <img src="https://media.kappamoto.com/AK-Prodotti/foto/HKKV40BR301_trequarti_sx.jpg" alt="helmet1" height="100px" width="100px"/>
      <p>Price: Rs. 3000/-</p>
        <button>Order Now</button>
    </div>
  </div>

  <div class="column">
    <div class="card">
    <h3>Vega strom automic</h3>
      <img src="https://5.imimg.com/data5/PC/MY/TO/SELLER-96592994/vega-storm-atomic-black-red-helmet-500x500.jpg" alt="helmet1" height="100px" width="100px"/>
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
    <h3>Studds thunder</h3>
      <img src="https://www.studds.com/Adminpanel/uploads/THUNDER-420X4201.png" alt="helmet1" height="100px" width="100px"/>
      <p>Price: Rs.6800/-</p>
        <button>Order Now</button>
    </div>
  </div>
  <div class="column mt-8">
    <div class="card " style={{marginTop:"10px"}}>
    <h3>Nolan N53</h3>
      <img src="https://cdn3.louis.de/dynamic/articles/o_resize,w_800,h_800,m_limit,c_fff/c8.31.48.D6NolanN53SmartMattSchwarz21555541019.JPG" alt="helmet1" height="100px" width="100px"/>
      <p>Price: Rs. 10500/-</p>
        <button>Order Now</button>
    </div>
  </div>
  <div class="column">
    <div class="card">
    <h3>agv k1 gothic 46</h3>
      <img src="https://motorsportstore.pl/eng_pl_Motorcycle-Helmet-AGV-K1-GOTHIC-46-41889_1.jpg" alt="helmet1" height="100px" width="100px"/>
      <p>Price: Rs. 40000/-</p>
        <button>Order Now</button>
    </div>
  </div>
  <div class="column">
    <div class="card">
    <h3>Airoh GP 550 s skyline</h3>
      <img src="https://www.mdracingproducts.co.uk/media/catalog/product/cache/5f305f0123a97be44e2d540498980a2b/g/p/gp55s38-01.jpg" alt="helmet1" height="100px" width="100px"/>
      <p>Price: Rs. 24000/-</p>
        <button>Order Now</button>
    </div>
  </div>
  <div class="column">
    <div class="card">
    <h3>ls2 rebellion half helmets</h3>
      <img src="https://m.media-amazon.com/images/I/61uCBxet4pL.jpg" alt="helmet1" height="100px" width="100px"/>
      <p>Price: Rs. 3500/-</p>
        <button>Order Now</button>
    </div>
  </div>
  <div class="column">
    <div class="card">
    <h3>prorider gloves</h3>
      <img src="https://5.imimg.com/data5/GZ/GF/MY/SELLER-37750562/probiker-full-racing-motorcycle-gloves-black-all-sizes--250x250.jpg" alt="helmet1" height="100px" width="100px"/>
      <p>Price: Rs. 800/-</p>
        <button>Order Now</button>
    </div>
  </div>
  <div class="column">
    <div class="card">
    <h3>Previt fly3</h3>
      <img src="https://cdn.webshopapp.com/shops/101410/files/313713057/image.jpg" alt="helmet1" height="100px" width="100px"/>
      <p>Price: Rs. 4000/-</p>
        <button>Order Now</button>
    </div>
  </div>
  <div class="column">
    <div class="card">
    <h3>Dririder Aesen2</h3>
      <img src="https://images.squarespace-cdn.com/content/v1/58c88a9859cc68243822bfda/1594894658981-JQ4CIEWOO3AX7MLVPAXR/Dririder+Assen+2+gloves+dHonk+9.jpg?format=1000w" alt="helmet1" height="100px" width="100px"/>
      <p>Price: Rs. 6000/-</p>
        <button>Order Now</button>
    </div>
  </div>
  <div class="column">
    <div class="card">
    <h3>Previt sand 4</h3>
      <img src="https://cdn.webshopapp.com/shops/101410/files/313713057/image.jpg" alt="helmet1" height="100px" width="100px"/>
      <p>Price: Rs. 8000/-</p>
        <button>Order Now</button>
    </div>
  </div>
  <div class="column">
    <div class="card">
    <h3>Servo 4t SAE 4</h3>
      <img src="https://m.media-amazon.com/images/I/71ExpwDoGzL._SL1500_.jpg" alt="helmet1" height="100px" width="100px"/>
      <p>Price: Rs. 1350/-</p>
        <button>Order Now</button>
    </div>
  </div>
  <div class="column">
    <div class="card">
    <h3>Yamalube SL 10W40</h3>
      <img src="https://www.yamaha-motor-india.com/theme/v3/image/parts/yamalube-details/sporty-premium.jpg" alt="helmet1" height="100px" width="100px"/>
      <p>Price: Rs. 1550/-</p>
        <button>Order Now</button>
    </div>
  </div>
  <div class="column">
    <div class="card">
    <h3>Castol power</h3>
      <img src="https://5.imimg.com/data5/SELLER/Default/2021/7/GV/RY/SU/76068280/10w-304t-castrol-power-engine-oil-500x500.jpg" alt="helmet1" height="100px" width="100px"/>
      <p>Price: Rs. 1945/-</p>
        <button>Order Now</button>
    </div>
  </div>
  <div class="column">
    <div class="card">
    <h3>Motul 7100 4T 10w-50</h3>
      <img src="https://static-01.daraz.com.np/p/fd4be8376787d490297d204009f89050.jpg" alt="helmet1" height="100px" width="100px"/>
      <p>Price: Rs.4000/-</p>
        <button>Order Now</button>
    </div>
  </div>
  <div class="column">
    <div class="card">
    <h3>Full sleeves pant raincoat</h3>
      <img src="https://static-01.daraz.com.bd/p/945e1c98f07a412a4f9a272c2553f032.jpg" alt="helmet1" height="100px" width="100px"/>
      <p>Price: Rs.3000/-</p>
        <button>Order Now</button>
    </div>
  </div>
  <div class="column">
    <div class="card">
    <h3>double rain coat for bike</h3>
      <img src="https://static-01.daraz.com.np/p/414ee490caef539e823d5580752ca17c.jpg" alt="helmet1" height="100px" width="100px"/>
      <p>Price: Rs.2500/-</p>
        <button>Order Now</button>
    </div>
  </div>
  <div class="column">
    <div class="card">
    <h3>thick layer bike cover</h3>
      <img src="https://static-01.daraz.com.np/p/a46aed2b0b979de505b973257467e83c.jpg" alt="helmet1" height="100px" width="100px"/>
      <p>Price: Rs.1200/-</p>
        <button>Order Now</button>
    </div>
  </div>
  <div class="column">
    <div class="card">
    <h3>riderscart waterproof bike cover</h3>
      <img src="https://www.jiomart.com/images/product/original/rv0q5qxamr/riderscart-waterproof-two-wheeler-body-cover-with-storage-bag-for-bajaj-pulsar-150-black-product-images-orv0q5qxamr-p591078776-0-202202250004.jpg" alt="helmet1" height="100px" width="100px"/>
      <p>Price: Rs.1550/-</p>
        <button>Order Now</button>
    </div>
  </div>
  

 

</body>

</html>
