<!doctype html>
<html style="height:100%; margin:0; padding:0">
<head>
  <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">


</head>
<body style="height: 100%">
  

<!--/Smooth animation start-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>
<!--/.Smooth animation END-->

<!-- ================================================================================= -->
<!-- ============================ carousel and Nav Bar together======================= -->

<div id="container" style="min-height:100%; position:relative">
  <div id="main" style="overflow:auto; padding-bottom: 300px">

<div>
 <style>
@keyframes jump {
  0% { top: 0; } 50% { top: 50px; } 100% { top: 0; }
}

.demo a {
  position: absolute;
  bottom: 50px;
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
  animation: jump 5s infinite;
  top: 0;
  left: 50%;
  width: 60px;
  height: 60px;
  margin-left: -12px;
  border-left: 10px solid #000;
  border-bottom: 10px solid #000;
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
  <nav class="navbar navbar-expand-sm navbar-light" style="z-index:99; top:-25px;">
    <a class="navbar-brand" style="color:white" href="#">
      <a class="col-lg-9 col-xs-3" href="#">
            <img src="/assets/images/icon_256x256.png" style="width:150px;height:150px;">
          </a>
    </a>
    <div class="collapse navbar-collapse col-lg-3 col-xs-3">
      <ul class="navbar-nav">
        <li class="nav-item un">
          <a class="nav-link" style="color:rgba(0,0,0,0.8);font-size: 20px;" href="#">Home</a>
        </li>
        <li class="nav-item un">
          <a class="nav-link" style="color:rgba(0,0,0,0.8);font-size: 20px;" href="#">About Us</a>
        </li>
        <li class="nav-item un">
          <a class="nav-link" style="color:rgba(0,0,0,0.8);font-size: 20px;" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </nav>

  <section class="slider">
  <div class="bd-example" style="margin-top: -200px">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/assets/images/cover_photo_V1.png" alt="..." height="60%" width="100%">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>

      <div class="carousel-item">
        <img src="https://i.kinja-img.com/gawker-media/image/upload/s--uGlCJcn5--/c_scale,f_auto,fl_progressive,q_80,w_800/zskle8pr6kignbkaz06j.jpg" alt="..." height="100%" width="100%">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>

      <div class="carousel-item" >
        <img src="https://i.kinja-img.com/gawker-media/image/upload/s--uGlCJcn5--/c_scale,f_auto,fl_progressive,q_80,w_800/zskle8pr6kignbkaz06j.jpg" alt="..." height="100%" width="100%">
        <div class="carousel-caption d-none d-md-block">
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
</div>

<!-- =============================================================== -->




<!-- =============================================================== -->
<!-- ======================== KEVIN ======================= -->
<!-- =============================================================== -->


<div id="section02" >
<h1 class="text-center leader"> Member Profile </h1>
</div>

<div class="container-fluid p-3 mb-2 bg-light text-dark">

  <div class="row">

    <div class="col-lg-2 p-3 mb-2 bg-light text-dark text-center">Lucas Gao


      <h5>President</h5>
                
      <img src="http://img.sj33.cn/uploads/allimg/201401/7-140126231522E0.jpg" class=" rounded-circle" alt="loading" width="100" height="100"> 

      <p>content of person</p>
      <p><button class="btn btn-Info p-3 mb-2 bg-light text-dark">Contact</button></p>
    </div>



    <div class="col-lg-2 p-3 mb-2 bg-light text-dark text-center">Will Zhang

      <h5>Vice President</h5>
                
      <img src="http://img.sj33.cn/uploads/allimg/201401/7-140126231522E0.jpg" class="rounded-circle" alt="loading" width="100" height="100"> 

      <p>content of person</p>
      <p><button class="btn btn-Info p-3 mb-2 bg-light text-dark">Contact</button></p>
    </div>


    <div class="col-lg-2 p-3 mb-2 bg-light text-dark text-center">Martin

      <h5>Secretary</h5>
                
      <img src="http://img.sj33.cn/uploads/allimg/201401/7-140126231522E0.jpg" class="rounded-circle" alt="loading" width="100" height="100"> 

      <p>content of person</p>
      <p><button class="btn btn-Info p-3 mb-2 bg-light text-dark">Contact</button></p>



    </div>

  <div class="col-lg-2 p-3 mb-2 bg-light text-dark text-center">Kevin Ge

      <h5>Treasurer</h5>
                
      <img src="http://img.sj33.cn/uploads/allimg/201401/7-140126231522E0.jpg" class="rounded-circle" alt="loading" width="100" height="100"> 

      <p>content of person</p>
      <p><button class="btn btn-Info p-3 mb-2 bg-light text-dark">Contact</button></p>

  </div>


  <div class="col-lg-2 p-3 mb-2 bg-light text-dark text-center">Emily Yang

      <h5>Leader of xxx</h5>
                
      <img src="http://img.sj33.cn/uploads/allimg/201401/7-140126231522E0.jpg" class="rounded-circle" alt="loading" width="100" height="100"> 

      <p>content of person</p>
      <p><button class="btn btn-Info p-3 mb-2 bg-light text-dark">Contact</button></p>



  </div>


  <div class="col-lg-2 p-3 mb-2 bg-light text-dark text-center">Yujia Wu

      <h5>Leader of xxx</h5>
                
      <img src="http://img.sj33.cn/uploads/allimg/201401/7-140126231522E0.jpg" class="rounded-circle" alt="loading" width="100" height="100"> 

      <p>content of person</p>
      <p><button class="btn btn-Info p-3 mb-2 bg-light text-dark">Contact</button></p>

  </div>



 </div>
 </div>





<?php 
  $this->load->view("/common/footer");
?>
