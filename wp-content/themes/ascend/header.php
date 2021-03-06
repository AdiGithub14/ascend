<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Ascend_Theme
 * @since 1.0
 * @version 1.0
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/custom.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/flexslider.css">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
<link rel="stylesheet" href="http://onlinedevserver.biz/dev/ascend/wp-content/plugins/woocommerce/assets/css/woocommerce.css" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="wrapper">
<div class="nav_overlay">
              <a href="javascript:void(0)" class="close_btn">
                 
              </a>
           </div>
<div class="fullSecreenSearch">
  <div class="close"><i class="fa fa-close"></i></div>
  <div class="formArea">
    <form>
      <ul>
        <li>
          <input type="text" class="formInput">
        </li>
        <li>
          <input type="submit" class="formSubmit" value="Search">
        </li>
      </ul>
    </form>
  </div>
</div>
<div class="mobile-get-started-div"> <a class="btn mobile-btn-get-started" href="javascript:void(0)"> <img src="<?php echo get_template_directory_uri(); ?>/images/get-started-img.png"> </a> </div>
<!-- Header start -->
<header id="main_header" class="steky-header  ">
  <div class="headerWrap clearfix">
    <div class="container clearfix">
      <div class="logo_div"> 
      <?php the_custom_logo(); ?>
        <!-- logo area ends --> 
      </div>
      <div class="nav_section">
        <div class="topHeader ">
          <div class="ulset_wrapper clearfix">
            <div class="ulSet">
              <?php echo get_option('webq_top_head');?>
            </div>
            <div class="ulSet HeaderSocial">
              <ul>
                <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                <li><a href="javascript:void(0)"><i class="fa fa-instagram"></i></a></li>
              </ul>
            </div>
            <!-- ends ul set --> 
          </div>
        </div>
        <div class="main_nav_area clearfix">
<!--
          <nav class="mainNav">
            <div class="responsiveMenu"> <a href="javascript:void(0)"> <i class="fa fa-bars"></i> </a> </div>
         
            	
<ul class="navs">
	
	<?php global $product; global $woocommerce;?>
			  
			  
			
	
<li class="item">
<a href="http://onlinedevserver.biz/dev/ascend/shop/" class="title">Products</a>
  <ul class="subMenuLevel1 fullWidthMega">
      <li><a href="#" class="headLevel1">Cycling</a>
         <ul class="subMenuLevel2">
            <li><a href="#" class="headLevel2">Tops</a>
                <ul class="subMenuLevel3">
                   <li><a href="#">Jerseys</a></li>
                   <li><a href="#">Wind Vests</a></li>
                   <li><a href="#">Wind Jackets</a></li>
                   <li><a href="#">Thermal Vests</a></li>
                   <li><a href="#">Thermal Jackets</a></li>
                </ul>
            </li>
            <li><a href="#" class="headLevel2">Bottoms</a>
               <ul class="subMenuLevel3">
                  <li><a href="#">Shorts</a></li>
                  <li><a href="#">Bib Shorts</a></li>
               </ul>
            </li>
            <li><a href="#" class="headLevel2">Suits</a></li>
            <li><a href="#" class="headLevel2">Accessories</a></li>
         </ul>
      </li>
      <li><a href="#" class="headLevel1">Triathlon</a>
          <ul class="subMenuLevel2">
             <li><a href="#" class="headLevel2">Tops</a></li>
             <li><a href="#" class="headLevel2">Bottoms</a></li>
             <li><a href="#" class="headLevel2">Suits</a></li>
          </ul>
      </li>
      <li><a href="#" class="headLevel1">Running</a>
           <ul class="subMenuLevel2">
             <li><a href="#" class="headLevel2">Tops</a>
                 <ul class="subMenuLevel3">
                    <li><a href="#">Singlets</a></li>
                    <li><a href="#">Tech-T's</a></li>
                 </ul> 
             </li>
             <li><a href="#" class="headLevel2">Bottoms</a>
                 <ul class="subMenuLevel3">
                   <li><a href="#">Shorts</a></li>
                   <li><a href="#">Hipsters</a></li>
                 </ul>
             </li>
           </ul>
      </li>
      <li><a href="#" class="headLevel1">Casual</a>
         <ul class="subMenuLevel2">
            <li><a href="#" class="headLevel2">Shirts</a>
                <ul class="subMenuLevel3">
                   <li><a href="#">T-shirts</a></li>
                   <li><a href="#">Polo Shirts</a></li>
                   <li><a href="#">Mechanics Shirts</a></li>
                </ul>
            </li>
            <li><a href="#" class="headLevel2">Jackets</a>
               <ul class="subMenuLevel3">
                  <li><a href="#">Softshell</a></li>
                  <li><a href="#">Hoodies</a></li>
               </ul>
            </li>
            <li><a href="#" class="headLevel2">Bottoms</a></li>
            <li><a href="#" class="headLevel2">Accessories</a></li>
         </ul>
      </li>
  </ul>
</li>
<li class="item">
<a href="#" class="title">Custom Design</a>
<!-- <ul class="subMenuLevel1 ">
      
  </ul> 
</li>
<li class="item">
<a href="#" class="title">Ordering</a>
</li>
<li class="item">
<a href="#" class="title">Technology</a>
</li>
<li class="item">
<a href="#" class="title">Resources</a>
<ul class="subMenuLevel1 flyoutMenu">
   <li><a href="#">Price List</a></li>
   <li><a href="#">Sizing Chart</a></li>
   <li><a href="#">Artwork Templates</a></li>
</ul>
</li>
<li class="seperator"><img src="http://onlinedevserver.biz/dev/ascend/wp-content/themes/ascend/images/seperator.png" alt="seperator"></li>
</ul>

                
          </nav>
-->

<nav class="mainNav">

<?php wp_nav_menu( array( 'container' => 'ul', 'menu_class' => 'collapse navs', 'theme_location' => 'top' )); ?></nav>
          <div class="searchAndBtn"> <a href="javascript:void(0)" class="fullSearch"><i class="fa fa-search"></i></a> <a href="javascript:void(0)" class="btn btn-get-started"><span>get started</span></a> </div>
        </div>
       <?php if(!is_front_page()) {?>


         <section class="custom-breadcumb">
          <div class="bred-cumb">
            <?php
        echo do_shortcode( '[breadcrumb]' ); 
        if(is_product_category())
        {?>
			<div class="woo-bread">
		<?php	
        echo woocommerce_breadcrumb();?>
        </div>
        <?php }$current_url="https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        if($current_url=="https://onlinedevserver.biz/dev/ascend/chamois/")
        {?>
        <div class="breadcrumb-container theme1" itemprop="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList"><ul itemtype="http://schema.org/BreadcrumbList" itemscope=""><li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" title="Home" href="http://onlinedevserver.biz/dev/ascend">Home</a></li><li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><span class="separator">»</span><a itemprop="item" title="Chamois" href="#">Chamois</a><span class="separator">»</span></li></ul></div>
		<?php } ?>
            </div>
      </section>
    <?php }?>
    
    <?php //echo do_shortcode( '[breadcrumb]' ); ?>
      </div>
      <!-- <div class="mobile-top-section clearfix">
        <div class="nav_section">
          <div class="topHeader ">
            <div class="ulset_wrapper clearfix">
              <div class="ulSet">
                <?php echo get_option('webq_top_head_responsive');?>
              </div>
              <div class="ulSet HeaderSocial">
                <ul>
                  <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="javascript:void(0)"><i class="fa fa-instagram"></i></a></li>
                </ul>
              </div>
              
            </div>
          </div>
          <div class="logo_div"> <?php the_custom_logo(); ?></div>
          <div class="main_nav_area clearfix">
           <nav class="mainNav">
              <div class="responsiveMenu">
               <a href="javascript:void(0)" >
                   <span class="bars bar1"></span> 
                   <span class="bars bar2"></span> 
                   <span class="bars bar3"></span> 
               </a> </div>
           <div class="overlay">
              <a href="javascript:void(0)" class="close_btn">
                 
              </a>
           </div>          

<ul class="navs">

<li class="item">
<a href="#" class="headLevel1">Products </a>
  <ul class="subMenuLevel1 fullWidthMega">
      <li><a href="#" class="headLevel2">Cycling</a>
         <ul class="subMenuLevel2">
            <li><a href="#" class="headLevel3">Tops</a>
                <ul class="subMenuLevel3">
                   <li><a href="#">Jerseys</a></li>
                   <li><a href="#">Wind Vests</a></li>
                   <li><a href="#">Wind Jackets</a></li>
                   <li><a href="#">Thermal Vests</a></li>
                   <li><a href="#">Thermal Jackets</a></li>
                </ul>
            </li>
            <li><a href="#" class="headLevel2">Bottoms</a>
               <ul class="subMenuLevel3">
                  <li><a href="#">Shorts</a></li>
                  <li><a href="#">Bib Shorts</a></li>
               </ul>
            </li>
            <li><a href="#" class="headLevel2">Suits</a></li>
            <li><a href="#" class="headLevel2">Accessories</a></li>
         </ul>
      </li>
      <li><a href="#" class="headLevel1">Triathlon</a>
          <ul class="subMenuLevel2">
             <li><a href="#" class="headLevel2">Tops</a></li>
             <li><a href="#" class="headLevel2">Bottoms</a></li>
             <li><a href="#" class="headLevel2">Suits</a></li>
          </ul>
      </li>
      <li><a href="#" class="headLevel1">Running</a>
           <ul class="subMenuLevel2">
             <li><a href="#" class="headLevel2">Tops</a>
                 <ul class="subMenuLevel3">
                    <li><a href="#">Singlets</a></li>
                    <li><a href="#">Tech-T's</a></li>
                 </ul> 
             </li>
             <li><a href="#" class="headLevel2">Bottoms</a>
                 <ul class="subMenuLevel3">
                   <li><a href="#">Shorts</a></li>
                   <li><a href="#">Hipsters</a></li>
                 </ul>
             </li>
           </ul>
      </li>
      <li><a href="#" class="headLevel1">Casual</a>
         <ul class="subMenuLevel2">
            <li><a href="#" class="headLevel2">Shirts</a>
                <ul class="subMenuLevel3">
                   <li><a href="#">T-shirts</a></li>
                   <li><a href="#">Polo Shirts</a></li>
                   <li><a href="#">Mechanics Shirts</a></li>
                </ul>
            </li>
            <li><a href="#" class="headLevel2">Jackets</a>
               <ul class="subMenuLevel3">
                  <li><a href="#">Softshell</a></li>
                  <li><a href="#">Hoodies</a></li>
               </ul>
            </li>
            <li><a href="#" class="headLevel2">Bottoms</a></li>
            <li><a href="#" class="headLevel2">Accessories</a></li>
         </ul>
      </li>
  </ul>
</li>
<li class="item">
<a href="#" class="title">Custom Design</a>
</li>
<li class="item">
<a href="#" class="title">Ordering</a>
</li>
<li class="item">
<a href="#" class="title">Technology</a>
</li>
<li class="item">
<a href="#" class="headLevel1">Resources</a>
   <ul class="subMenuLevel1 flyoutMenu">
   <li><a href="#">Price List</a></li>
   <li><a href="#">Sizing Chart</a></li>
   <li><a href="#">Artwork Templates</a></li>
</ul>
</li>
<li class="seperator"><img src="http://onlinedevserver.biz/dev/ascend/wp-content/themes/ascend/images/seperator.png" alt="seperator"></li>
</ul>

            </nav>

<?php wp_nav_menu( array( 'container' => 'ul', 'menu_class' => 'collapse', 'theme_location' => 'top' )); ?>
            <div class="searchAndBtn"> <a href="javascript:void(0)" class="fullSearch"><i class="fa fa-search"></i></a> <a href="javascript:void(0)" class="btn btn-get-started"><span>get started</span></a> </div>
          </div>
         
          
        </div>
      </div> -->
      
      <!-- nav area ends --> 
    </div>
    <div class="logoArea">
      <div class="logoInner clearfix"></div>
      <div class="logoInner2 clearfix"></div>
      <div class="logoInner3 clearfix"></div> 
      <div class="logoInner4 clearfix"></div>
    </div>
    <div class="navArea">
      <div class="bottomHeader clearfix"></div>

    </div>
  </div>

</header>


<!-- Header Ends -->


