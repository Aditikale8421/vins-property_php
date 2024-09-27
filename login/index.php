<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
</head>
<body>

	<a href="logout.php">Logout</a>
	<!--<h1>This is the index page</h1>-->
	<!--vins property start-->
	
	<style>
  <h2>Card</h2>
  <div class="card">
    <img src="architect.png" alt="Avatar" style="width:50%">
    <div class="container">
      <h4><b>vins property </b></h4> 
      <p>Architect & Engineer</p> 
    </div>


{font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}







{margin:0;}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  position: fixed;
  top: 0;
  width: 100%;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
}

{font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}



.section-header h3 {
    font-size: 36px;
    color: #283d50;
    text-align: center;
    font-weight: 500;
    position: relative;
}

.section-header p {
    text-align: center;
    margin: auto;
    font-size: 15px;
    padding-bottom: 60px;
    color: #556877;
    width: 50%;
}

#clients {
    padding: 60px 0;
    
}
#clients .clients-wrap {
    border-top: 1px solid #d6eaff;
    border-left: 1px solid #d6eaff;
    margin-bottom: 30px;
}

#clients .client-logo {
    padding: 64px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    border-right: 1px solid #d6eaff;
    border-bottom: 1px solid #d6eaff;
    overflow: hidden;
    background: #fff;
    height: 160px;
}

#clients img {
    transition: all 0.4s ease-in-out;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}

</style> 
</head>
<body>
  
<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>

<div style="padding:20px;margin-top:30px;background-color:#33001a;height:1500px;">

  
  <h2>HTML Image</h2>
<img src="My image 123.jpg" alt="Trulli" width="1215" height="900">

  
</div>

<p>OUR SERVICES</p>
<p>Buy. Sell. Rent. Invest.</p>

  <p>No matter if you’re Buying, Selling or Leasing, take advantage of our specialized knowledge and expert services to make sure you get the best opportunities available. </p>
  <p>We'll make sure everything runs as smoothly as possible.</p>
  <p>Review a list of our services below..</p>
<p>.</p>
</div>
</div>
<h2>Card</h2>
<div class="card">
  <img src="architect.png" alt="Avatar" style="width:50%">
  <div class="container">
    <h4><b>vins property </b></h4> 
    <p>Architect & Engineer</p> 
  </div>
</div>
<section id="clients" class="section-bg">

  <div class="container">

    <div class="section-header">
      <h3>Our CLients</h3>
      <p>Meet our happy clients</p>
    </div>

    <div class="row no-gutters clients-wrap clearfix wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">

      <div class="col-lg-3 col-md-4 col-xs-6">
        <div class="client-logo">
          <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1559460149/abof.png" class="img-fluid" alt="">
        </div>
      </div>
      
      <div class="col-lg-3 col-md-4 col-xs-6">
        <div class="client-logo">
          <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1559460224/cropped-cropped-20170720-lucuLogo-squ2-e1500543540803.png" class="img-fluid" alt="">
        </div>
      </div>
    
      <div class="col-lg-3 col-md-4 col-xs-6">
        <div class="client-logo">
          <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1559460269/104840a62d46c05d285762857fecb61a.png" class="img-fluid" alt="">
        </div>
      </div>
      
      <div class="col-lg-3 col-md-4 col-xs-6">
        <div class="client-logo">
          <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1559460358/client-4.png" class="img-fluid" alt="">
        </div>
      </div>
      
      <div class="col-lg-3 col-md-4 col-xs-6">
        <div class="client-logo">
          <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1559460379/client-5.png" class="img-fluid" alt="">
        </div>
      </div>
    
      <div class="col-lg-3 col-md-4 col-xs-6">
        <div class="client-logo">
          <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1559460398/client-6.png" class="img-fluid" alt="">
        </div>
      </div>
      
      <div class="col-lg-3 col-md-4 col-xs-6">
        <div class="client-logo">
          <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1559460418/client-7.png" class="img-fluid" alt="">
        </div>
      </div>
      
      <div class="col-lg-3 col-md-4 col-xs-6">
        <div class="client-logo">
          <img src="https://bootstrapmade.com/demo/themes/NewBiz/img/clients/client-8.png" class="img-fluid" alt="">
        </div>
      </div>

    </div>

  </div>

</section>

<footer>
	<p>Author: vins property <br>
	<a href="mailto:hege@example.com">hege@example.com</a></p>
  

	<!--end-->

	<br>
	Hello, <?php echo $user_data['user_name']; ?>
</body>
</html>