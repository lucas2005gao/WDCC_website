<?php 
  $this->load->view("/common/header");
?>



<!-- =============================================================== -->
<!-- ======================== MARTIN ======================= -->
<!-- =============================================================== -->

<!-- =============================================================== -->

<style>
.demo a {
  position: relative;
  bottom: 20px;
  left: 50%;
  z-index: 2;
  display: inline-block;
  -webkit-transform: translate(0, -50%);
  transform: translate(0, -50%);
  color: #fff;
}
.demo a:hover {
  opacity: .5;
}
.demo a {
  padding-top: 60px;
}

.demo a span {
  position: absolute;
  top: 0;
  left: 50%;
  width: 30px;
  height: 30px;
  margin-left: -12px;
  border-left: 1px solid #fff;
  border-bottom: 1px solid #fff;
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg);
  box-sizing: border-box;
}
</style>
<div id="container" style="min-height:100%; position:relative">
  <div id="main" style="overflow:auto; padding-bottom: 300px">
<div>
 <style>
.demo a {
  position: relative;
  bottom: 20px;
  left: 50%;
  z-index: 2;
  display: inline-block;
  -webkit-transform: translate(0, -50%);
  transform: translate(0, -50%);
  color: #fff;
}
.demo a:hover {
  opacity: .5;
}
.demo a {
  padding-top: 60px;
}

.demo a span {
  position: absolute;
  top: 0;
  left: 50%;
  width: 30px;
  height: 30px;
  margin-left: -12px;
  border-left: 1px solid #fff;
  border-bottom: 1px solid #fff;
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg);
  box-sizing: border-box;
}
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
            <img src="/assets/coming-soon.jpg" style="width:50px;height:50px;">
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

  <section class="slider">
  <div class="bd-example" style="margin-top: -100px">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://i.kinja-img.com/gawker-media/image/upload/s--uGlCJcn5--/c_scale,f_auto,fl_progressive,q_80,w_800/zskle8pr6kignbkaz06j.jpg" alt="..." height="100%" width="100%">
        <div class="carousel-caption d-none d-md-block">
          <h3>Welcome to WebDevelop & Consolting Club!</h3>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>

      <div class="carousel-item">
        <img src="https://i.kinja-img.com/gawker-media/image/upload/s--uGlCJcn5--/c_scale,f_auto,fl_progressive,q_80,w_800/zskle8pr6kignbkaz06j.jpg" alt="..." height="100%" width="100%">
        <div class="carousel-caption d-none d-md-block">
          <h3>Second slide label</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>

      <div class="carousel-item" >
        <img src="https://i.kinja-img.com/gawker-media/image/upload/s--uGlCJcn5--/c_scale,f_auto,fl_progressive,q_80,w_800/zskle8pr6kignbkaz06j.jpg" alt="..." height="100%" width="100%">
        <div class="carousel-caption d-none d-md-block">
          <h3>Third slide label</h3>
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

     <section class="demo">
        <a href="#section02"><span></span></a>
     </section>
    </div>
  </div>
    </section>
</div>


<!-- =============================================================== -->
<!-- ======================== EMILY ======================= -->
<!-- =============================================================== -->
<div>
  <div>
    <div style="padding-top: 30px">
      <!-- title -->
      <h2 style="text-align: center;">ABOUT US</h2> 
   
      <!-- detail explanation  -->
      <p style="text-align:center">XXXXXXXXXXXXX XXXXXXXXXXXXXXXXXXX XXXXXXXXXXXX XXXXXXX XXXXXXXXXX</p>
    
    </div>

    <style>
      .button span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
      }

      .button span:after {
        content: '\00bb';
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
        transition: 0.5s;
      }

      .button:hover span {
        padding-right: 25px;
      }

      .button:hover span:after {
        opacity: 1;
        right: 0;
      }
  </style>
  <div class="row" style="padding-left: 30px; padding-right:30px; padding-top:50px; padding-bottom: 80px">
    <div class="col" style="text-align:center">
      <img src="https://image.flaticon.com/icons/svg/1256/1256650.svg" alt="team icon" style="width:50px;height:50px;">
      <h4> Our Team </h4>
      <p>Click the button below to find out more of our team.</p>
      <button type="button" class="button btn btn-secondary"><span>Learn More</span></button>
    </div>

    <div class="col" style="text-align:center">
      <img src="https://image.flaticon.com/icons/svg/1517/1517470.svg" alt="event icon" style="width:50px;height:50px;">
      <h4> Our Event </h4>
      <p> Click the button below to checkout more of our amazing events!</p>
      <button type="button" class="button btn btn-secondary"><span>Learn More</span></button>
    </div>

    <div class="col" style="text-align:center">
      <img src="https://image.flaticon.com/icons/svg/1441/1441932.svg" alt="sponsor icon" style="width:50px;height:50px;">
      <h4> Our Sponsor </h4>
      <p> discription of the team </p>
      <button type="button" class="button btn btn-secondary"><span>Learn More</span></button>
    </div>

    <div class="col" style="text-align:center">
      <img src="https://image.flaticon.com/icons/svg/1894/1894482.svg" alt="membership icon" style="width:50px;height:50px;">
      <h4> Our Membership </h4>
      <p> discription of the team </p>
      <button type="button" class="button btn btn-secondary"><span>Learn More</span></button>
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





<?php 
  $this->load->view("/common/footer");
?>