<!doctype html>
<html style="height:100%; margin:0; padding:0">
<head>
  <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.css">

</head>
<body style="height: 100%">
  

<div id="container" style="min-height:100%; position:relative">
  <div id="main" style="overflow:auto; padding-bottom: 300px">


<!-- ================================================================================= -->
<!-- ============================ carousel and Nav Bar together======================= -->
<div>
  <style>
    .un {
      display: inline-block;
      color: rgba(255,255,255,0.8)
    }
    .un:after {
      content: '';
      width: 0px;
      height: 2px;
      display: block;
      background: white;
      color: rgba(255,255,255,1);
      -moz-transition: all 1s ease;
      -webkit-transition: all 1s ease;
      transition: all 1s ease;
    }
    .un:hover:after {
      width: 100%;
      color: rgba(255,255,255,1);
    }
    .font {
      font-size: 16px;
    }
  </style>
  <nav class="navbar navbar-expand-sm navbar-light" style="z-index:99">
    <a class="navbar-brand" style="color:white" href="#">
      <a class="col-lg-9 col-xs-3" href="#">
            <img src="/assets/Image-Coming-Soon.png" style="width:50px;height:50px;">
          </a>
    </a>
    <div class="collapse navbar-collapse col-lg-3 col-xs-3">
      <ul class="navbar-nav">
        <li class="nav-item un">
          <a class="nav-link" style="color:rgba(255,255,255,0.8)" href="#">Home</a>
        </li>
        <li class="nav-item un">
          <a class="nav-link" style="color:rgba(255,255,255,0.8)" href="#">About Us</a>
        </li>
        <li class="nav-item un">
          <a class="nav-link" style="color:rgba(255,255,255,0.8)" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="bd-example" style="margin-top: -100px">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner position-carousel">
        <div class="carousel-item active">
          <img src="https://i1.wp.com/pna.co.za/blog/wp-content/uploads/2017/08/Blog_3.png?fit=750%2C375&ssl=1" alt="..." height="400" width="100%">
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
          </div>
        </div>
        <div class="carousel-item position-carousel">
          <img src="https://i.kinja-img.com/gawker-media/image/upload/s--uGlCJcn5--/c_scale,f_auto,fl_progressive,q_80,w_800/zskle8pr6kignbkaz06j.jpg" alt="..." height="400" width="100%">
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
        <div class="carousel-item position-carousel">
          <img src="https://mymodernmet.com/wp/wp-content/uploads/archive/oe-oqDrb4nkmDH0vA90Z_PaperSpiral5.jpg" alt="..." height="400" width="100%">
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

  </div>
</div>
<!-- ================================================================================= -->


<!-- =============================================================== -->
<!-- ======================== EMILY ======================= -->
<!-- =============================================================== -->
<div>
  <div>
    <div style="padding-top: 30px">
      <!-- title -->
      <h2 style="text-align: center;">ABOUT US</h2> 
   
      <!-- detail explanation  -->
      <p style="text-align:center; padding-right:30%; padding-left:30%">XXXXXXXXXXXXX XXXXXXXXXXXXXXXXXXX XXXXXXXXXXXX XXXXXXX XXXXXXXXXX</p>
    
    </div>

    <style>
      .hoverButton span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
      }

      .hoverButton span:after {
        content: '\00bb';
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
        transition: 0.5s;
      }

      .hoverButton:hover span {
        padding-right: 25px;
      }

      .hoverButton:hover span:after {
        opacity: 1;
        right: 0;
      }
  </style>
  <div class="row" style="padding-left: 30px; padding-right:30px; padding-top:50px; padding-bottom: 80px">
    <div class="col" style="text-align:center">
      <img src="https://image.flaticon.com/icons/svg/1256/1256650.svg" alt="team icon" style="width:50px;height:50px;">
      <h4> Our Team </h4>
      <p style="min-height:40%">Click the button below to find out more of our team.</p>
      <button type="button" class="hoverButton btn btn-secondary"><span>Learn More</span></button>
    </div>

    <div class="col" style="text-align:center">
      <img src="https://image.flaticon.com/icons/svg/1517/1517470.svg" alt="event icon" style="width:50px;height:50px;">
      <h4> Our Event </h4>
      <p style="min-height:40%"> Click the button below to checkout more of our amazing events!</p>
      <button type="button" class="hoverButton btn btn-secondary"><span>Learn More</span></button>
    </div>

    <div class="col" style="text-align:center">
      <img src="https://image.flaticon.com/icons/svg/1441/1441932.svg" alt="sponsor icon" style="width:50px;height:50px;">
      <h4> Our Sponsor </h4>
      <p style="min-height:40%"> discription of the team </p>
      <button type="button" class="hoverButton btn btn-secondary"><span>Learn More</span></button>
    </div>

    <div class="col" style="text-align:center">
      <img src="https://image.flaticon.com/icons/svg/1894/1894482.svg" alt="membership icon" style="width:50px;height:50px;">
      <h4> Our Membership </h4>
      <p style="min-height:40%"> discription of the team </p>
      <button type="button" class="hoverButton btn btn-secondary"><span>Learn More</span></button>
    </div>
  </div>

</div>
<!-- =============================================================== -->




<!-- =============================================================== -->
<!-- ======================== KEVIN ======================= -->
<!-- =============================================================== -->
<!-- <div class="mx-auto"> -->
	<!-- <marquee>  -->


    
<!--  <pre class="pre-x-scrollable">
 -->
 <!-- container-fluid-->
<!--  <div class="container"> -->
 	 <!-- <div class="pre-x-scrollable"> -->

<!-- <div class="row">
 -->

<div class="container-fluid">  
<div>
<h1 class="text-center leader"> Member Profile </h1>
</div>



 <div class="col d-flex justify-content-center">

 <div class="card-deck">


<!-- <div class="col-lg-2 p-3 mb-2 bg-light text-dark"> -->
<div class="card-body p-3 mb-2 bg-light text-dark">Lucas Gao
  
  	
		<h5>President</h5>
		            
		<img src="http://img.sj33.cn/uploads/allimg/201401/7-140126231522E0.jpg" class="rounded-circle" alt="loading" width="100" height="100"> 

		<p>content of person</p>
		<p><button class="btn btn-Info p-3 mb-2 bg-light text-dark">Contact</button></p>
</div>



<!-- <div class="col-lg-2 p-3 mb-2 bg-light text-dark"> -->

  <div class="card-body p-3 mb-2 bg-light text-dark">Will Zhang
  	
		<h5>Vice President</h5>
		            
		<img src="http://img.sj33.cn/uploads/allimg/201401/7-140126231522E0.jpg" class="rounded-circle" alt="loading" width="100" height="100"> 

		<p>content of person</p>
		<p><button class="btn btn-Info p-3 mb-2 bg-light text-dark">Contact</button></p>
 </div>
<!-- <div class="col-lg-2 p-3 mb-2 bg-light text-dark"> -->
  <div class="card-body p-3 mb-2 bg-light text-dark">Martin
  	
		<h5>Secretary      </h5>
		            
		<img src="http://img.sj33.cn/uploads/allimg/201401/7-140126231522E0.jpg" class="rounded-circle" alt="loading" width="100" height="100"> 

		<p>content of person</p>
		<p><button class="btn btn-Info p-3 mb-2 bg-light text-dark">Contact</button></p>

</div>

<!-- <div class="col-lg-2 p-3 mb-2 bg-light text-dark"> -->
  <div class="card-body p-3 mb-2 bg-light text-dark">Kevin Ge
  	
		<h5>Treasurer</h5>
		            
		<img src="http://img.sj33.cn/uploads/allimg/201401/7-140126231522E0.jpg" class="rounded-circle" alt="loading" width="100" height="100"> 

		<p>content of person</p>
		<p><button class="btn btn-Info p-3 mb-2 bg-light text-dark">Contact</button></p>

</div>

<!-- <div class="col-lg-2 p-3 mb-2 bg-light text-dark"> -->
  <div class="card-body p-3 mb-2 bg-light text-dark">Emily Yang
  	
		<h5>Leader of xxx </h5>
		            
		<img src="http://img.sj33.cn/uploads/allimg/201401/7-140126231522E0.jpg" class="rounded-circle" alt="loading" width="100" height="100"> 

		<p>content of person</p>
		<p><button class="btn btn-Info p-3 mb-2 bg-light text-dark">Contact</button></p>

</div>
<!-- <div class="col-lg-2 p-3 mb-2 bg-light text-dark"> -->
  <div class="card-body p-3 mb-2 bg-light text-dark">Yujia Wu
  	
		<h5>Leader of xxx </h5>
		            
		<img src="http://img.sj33.cn/uploads/allimg/201401/7-140126231522E0.jpg" class="rounded-circle" alt="loading" width="100" height="100"> 

		<p>content of person</p>
		<p><button class="btn btn-Info p-3 mb-2 bg-light text-dark">Contact</button></p>
</div>

<!-- <div class="col-lg-2 p-3 mb-2 bg-light text-dark"> -->
  


<!-- </marquee> 
 -->

<!-- </div>  -->

</div>

</div>
</div>
<!-- </div>
 -->
<!-- =============================================================== -->



<!-- =============================================================== -->
<!-- ======================== YUJIA ======================= -->
<!-- =============================================================== -->
<p>type code here</p>
<!-- =============================================================== -->


<!-- =============================================================== -->
<!-- ======================== KEVIN ======================= -->
<!-- =============================================================== -->
<p>type code here</p>
<!-- =============================================================== -->



<?php 
  $this->load->view("/common/footer");
?>