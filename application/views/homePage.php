<?php 
  $this->load->view("/common/header");
?>
    
<!-- =============================================================== -->
<!-- ======================== MARTIN ======================= -->
<!-- =============================================================== -->
<p>type code here</p>
<!-- =============================================================== -->
<!-- <section calss="slider">
	<ul class="slides">
      <li>
        <img src="https://i1.wp.com/expresstricks.com/wp-content/uploads/2019/04/beautiful-picture-1.jpg?fit=1500%2C1000"> 
        <div class="caption center-align">
          <h3>Welcome to WebDevelopment&Consulting Club!</h3>
          <h5 class="light grey-text text-lighten-3 hile-on small-only">President is really hanssome</h5>
        </div>
      </li>
      <li>
        <img src="https://s7img.ftdi.com/is/image/ProvideCommerce/PF_18_R037_ROSE_SUMMER_V1_ALT1_PF_SITE_PLP_BANNER?&$proflowers-hero-banner-lv$"> 
        <div class="caption left-align">
          <h3>Learn webDevelopment easily!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="https://iso.500px.com/wp-content/uploads/2016/04/stock-photo-150595123.jpg"> 
        <div class="caption right-align">
          <h3>Right Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      
    </ul>
	
</section>


<script src="https://kit.fontawesome.com/e1573a2b30.js" crossorigin="anonymous"></script>

<script>
		//slider
	/*const slider = document.querySelector('.slider');
	M.Slider.init(slider,{
		indicators: flase,
		height: 500,
		transition: 500,
		interval: 6000
	});*/
	  $(document).ready(function(){
    $('.slider').slider();
  });

</script> -->





<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://i1.wp.com/pna.co.za/blog/wp-content/uploads/2017/08/Blog_3.png?fit=750%2C375&ssl=1" alt="..." height="400" width="1600">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://i.kinja-img.com/gawker-media/image/upload/s--uGlCJcn5--/c_scale,f_auto,fl_progressive,q_80,w_800/zskle8pr6kignbkaz06j.jpg" alt="..." height="400" width="1600">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://mymodernmet.com/wp/wp-content/uploads/archive/oe-oqDrb4nkmDH0vA90Z_PaperSpiral5.jpg" alt="..." height="400" width="1600">
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
      <img src="https://image.flaticon.com/icons/svg/599/599995.svg" alt="event icon" style="width:50px;height:50px;">
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