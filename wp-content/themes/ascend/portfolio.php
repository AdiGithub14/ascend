<?php
/**
 * Template Name: Portfolio Template
 */
get_header();
?>

<?php
while (have_posts()) : the_post();

?>
<!-- chamois slider -->
<section class="slider shop_page"> </section>
<!-- chamois slider ends -->
<section id="page_header">
  <div class="container">
    <div class="middle_align_head portfolio_page">
      <h2 class="partical_bothside">
         <span></span> 
         Cycling Jersey Design Portfolio
      </h2>
    </div>
  </div>
</section>

<!-- Main content area -->
<div class="container contents shop porfolio clearfix"> 
  
  <!-- main sidebar -->
  <aside class="mainSidebar">
    <div class="asideContainer pro_cat">
      <!-- <h5>Tags: </h5> -->
<!--
      <section class="filterTopSection porfolioFilter">
        <div class="TagHolder clearfix">
            <a class="currrent" href="">All</a>
            <a href="">Recreational</a>
            <a href="">Red</a>
            <a href="">Scenic</a>
            <a href="">Argyle</a>
            <a href="">Black </a>
            <a href="">Logo</a>
            <a href="">Red</a>
             <a href="">Scenic</a>
            <a href="">Technical</a>
            <a href="">Aggressive</a>
            <a href="">Typography</a>           
            
            <a href="">Scenic</a>
            <a href="">Argyle</a>
            <a href="">Black </a>
            <a href="">Logo</a>
            <a href="">Red</a>
             <a href="">Scenic</a>
            <a href="">Technical</a>
            <a href="">Aggressive</a>
            <a href="">Typography</a>
            
            <a href="">Red</a>
            <a href="">Scenic</a>
            <a href="">Argyle</a>
            <a href="">Black </a>
            <a href="">Logo</a>
            <a href="">Red</a>
             <a href="">Scenic</a>
            <a href="">Technical</a>
            <a href="">Aggressive</a>
            <a href="">Typography</a>
            <a href="">Recreational</a>
            <a href="">Red</a>
            <a href="">Scenic</a>
            <a href="">Argyle</a>
            <a href="">Black </a>
            <a href="">Logo</a>
            <a href="">Red</a>
             <a href="">Scenic</a>
            <a href="">Technical</a>
            <a href="">Aggressive</a>
            <a href="">Typography</a>
        </div>       
      </section>
-->
      <!-- filter top section -->
      
     </div>
    <!-- end aside container --> 
  </aside>
  <!-- main sidebar ends --> 
  <!-- <center></center>ontent Section -->
  <section class="productContent portfolio_content">  

  <!-- select Filter area -->
<!--
      <section class="SelectFilter">
          <div class="selectHolder">
            <i class="fa fa-caret-down"></i>
             <select>
              <option value="all">All Products</option>
              <option value="volvo">Volvo</option>
              <option value="saab">Saab</option>
              <option value="mercedes">Mercedes</option>
              <option value="audi">Audi</option>
            </select> 
          </div>
      </section>
-->
  <!-- end select Filter area -->
    
    <!-- product holder start -->
    <div class="product_area">
<!--
      <ul>
        <li >
          <span>Nordstrop 1 Front</span>
          <a href="javascript:void(0)" class="hvr-float-shadow">
          <div class="Productimg_holder" >           
            <img src="images/pro_1.png"/> </div>          
            </a>
        </li>
        <li>
        <span>United Velo Front</span>
        <a href="javascript:void(0)" class="hvr-float-shadow">
         
          <div class="Productimg_holder">            
            <img src="images/pro_2.png"/> </div>     
            </a>    
        </li>
        <li>
        <span>United Velo Back</span>
         <a href="javascript:void(0)" class="hvr-float-shadow">
          <div class="Productimg_holder">           
            <img src="images/pro_3.png"/> </div>    
            </a>   
        </li>
        <li >
        <span>Ride Cincinnati Back</span>
          <a href="javascript:void(0)" class="hvr-float-shadow">
          <div class="Productimg_holder" >           
            <img src="images/pro_4.png"/> </div>          
            </a>
        </li>
        <li >
          <a href="javascript:void(0)" class="hvr-float-shadow">
          <div class="Productimg_holder" >           
            <img src="images/pro_4.png"/> </div>          
            </a>
        </li>
        <li>
       
        <a href="javascript:void(0)" class="hvr-float-shadow">
         
          <div class="Productimg_holder">            
            <img src="images/pro_5.png"/> </div>     
            </a>    
        </li>
        <li>
         <a href="javascript:void(0)" class="hvr-float-shadow">
          <div class="Productimg_holder">           
            <img src="images/pro_6.png"/> </div>    
            </a>   
        </li>
         <li >
          <a href="javascript:void(0)" class="hvr-float-shadow">
          <div class="Productimg_holder" >           
            <img src="images/pro_7.png"/> </div>          
            </a>
        </li>
        <li>
         <a href="javascript:void(0)" class="hvr-float-shadow">
          <div class="Productimg_holder">           
            <img src="images/pro_9.png"/> </div>    
            </a>   
        </li>
        <li >
          <a href="javascript:void(0)" class="hvr-float-shadow">
          <div class="Productimg_holder" >           
            <img src="images/pro_10.png"/> </div>          
            </a>
        </li>
        <li>
        
        <a href="javascript:void(0)" class="hvr-float-shadow">
         
          <div class="Productimg_holder">            
            <img src="images/pro_11.png"/> </div>     
            </a>    
        </li>
        <li>
         <a href="javascript:void(0)" class="hvr-float-shadow">
          <div class="Productimg_holder">           
            <img src="images/pro_12.png"/> </div>    
            </a>   
        </li>
      </ul>   
-->
<?php //echo do_shortcode('[justified_image_grid preset=c1 mobile_preset=c1 ids=182,169,180,179 animation_speed=300 width_mode=responsive_fallback]');?>
<?php the_content();?>
    </div>
    
    
    

<!-- pagination -->

<!--
    <section class="pagination clearfix">
      <ul class="clearfix">
       
        <li><span><i class="fa fa-refresh" aria-hidden="true"></i> Loading... </span></li>        
      </ul>
    </section>   
    
-->
  </section>
  <!-- end content section --> 
  
</div>



<?php
endwhile;
?>

<?php
get_footer();
?>

<script type="text/javascript">
	var slider = document.getElementById('slider');

noUiSlider.create(slider, {
	start: [0, 100],
	connect: true,
	range: {
		'min': 0,
		'max': 100
	}
});

</script>
