<?php


$id = get_the_ID();
$image = wp_get_attachment_image_src( get_post_thumbnail_id( $id ), 'single-post-thumbnail' ); 
    
    

	if( class_exists('Dynamic_Featured_Image') ) 
	{

		global $dynamic_featured_image;

		$featured_images = $dynamic_featured_image->get_featured_images( );

		//print_r($featured_images);

		foreach($featured_images as $featured_image) 
		{

			$fullSizedImage = $dynamic_featured_image->get_image_url($featured_image['attachment_id'], 'full');

		 
		}  
	 
	 } 


?>


      <div class="productRow rows exact_width_underline_left_align left_align_head clearfix" id="technology-<?php echo get_the_ID();?>">
        <h3 class="head_three exact_width"><?php echo get_the_title();?></h3>
        <!-- rating -->
        <div class="ratingHolder">       
          <div class="ratingArea">
            <ul>
            <?php 
              (int)$ratings = 10 - get_post_meta(get_the_ID(),'rating_rating_out_of_10',true);  

                for($y=0;$y<$ratings;$y++){                
                    echo "<li></li>";
                }
                for ($x = 0; $x < get_post_meta(get_the_ID(),'rating_rating_out_of_10',true); $x++) {
                    echo " <li class='doneRating'></li>";
                }           
              ?> 
            </ul>
          </div>
          <div class="ratingText"> <span class="ratingPoint"> <?php echo get_post_meta(get_the_ID(),'rating_rating_out_of_10',true);?> 
          <?php if(get_post_meta(get_the_ID(),'rating_rating_out_of_10',true) == "") echo "0";?> </span> <span>Comfort Rating</span> </div>
        </div>
        <!-- ratin end --> 
        
        <!-- product content -->
        <div class="productContentInner clearfix">
          <div class="proDuctImg">
            <div class="imgArea"> <img src="<?php echo $image[0];?>" alt="#"> </div>
          </div>
          <!-- product image -->
          <div class="productInfo">
            <div class="productFeatures full_width_underline">
              <h4 class="head_four left_align_head full_width">Features :</h4>
              <ul class="featuresLi">
				  
				  <?php
				  global $custom_mb;
				  $meta = get_post_meta($id, $custom_mb->get_the_ID(), TRUE);
				  
				  //print_r($meta['docs']);
				  
				  
				  foreach ($meta['docs']as $meat)
				  {
					 // print_r($meat);
					  ?>
					  <li><a href="javascript:void(0)"><img src="<?php echo $meat['imgurl']?>" alt=""></a> <span><?php echo $meat['title']?></span> </li>
					 
					 <?php
					 
					 }
				  ?>
				  
				  
				  
               
              </ul>
            </div>
            <!-- product features -->
            <div class="productSpec full_width_underline">
              <h4 class="head_four left_align_head full_width">Specifications :</h4>
              <ul>
				  
				  <?php $post_filed_custom =  get_post_custom_keys(get_the_ID()); 
				  
						foreach($post_filed_custom as $post_filed_custom_name)
						{
							//print_r($post_filed_custom_name);
							$post_meta = get_post_meta(get_the_ID(),$post_filed_custom_name,true);
							if($post_filed_custom_name !='_edit_last' && $post_filed_custom_name !='_edit_lock' && $post_filed_custom_name !='_custom_meta' && $post_filed_custom_name !='_thumbnail_id'&& $post_filed_custom_name !='dfiFeatured'&& $post_filed_custom_name !='_thumbnail_id'&& $post_filed_custom_name !='fabric_name_technology_fabric_name' &&$post_filed_custom_name !='rating_rating_out_of_10')
							{
								?>
								<li><?php echo $post_filed_custom_name;?><span><?php echo $post_meta;?></span></li>
								<?php
								}
						}
				  
				  ?> 

              </ul>
            </div>
          </div>
          <!-- product info --> 
        </div>
        <!-- product more description -->
        <div class="readMoreContent">
          <div class="row clearfix">
              <div class="right_content">
                <div class="img_outer_box">
                   <div class="img_inner_box">
                      <img src="<?php echo $fullSizedImage;?>" alt="#">
                   </div>
                </div>
              </div>
              <div class="left_content">
            
            <div class="productHeading full_width_underline"> 
             <h4 class="head_four left_align_head full_width">Description:</h4>
           </div>
            <?php the_content();?>
              </div>
          </div>
          <div class="row fabrics clearfix">
              <div class="left_content">
                <div class="productHeading full_width_underline"> 
                  <h4 class="head_four left_align_head full_width">fabric:</h4>
                </div>
                
                <p><big><?php echo $fab_name = get_post_meta( $id, 'fabric_name_technology_fabric_name', true ); ?></big></p>
                
                <?php
$args = array(
	'title' => $fab_name,
	'numberposts' => 1,
	'offset' => 0,
	'category' => 0,
	'order' => 'ASC',
	
	'exclude' => '',
	'meta_key' => '',
	'meta_value' =>'',
	'post_type' => 'Fabric',
	'post_status' => 'publish',
	'suppress_filters' => true
);
$post_count =0;
$recent_posts = wp_get_recent_posts( $args, ARRAY_A );
$j=1;
$input = array();
foreach($recent_posts as $recent_posts)
{ echo $recent_posts['post_content'];
	$post_count ++;
	//echo $recent_posts['ID'];
	$image = wp_get_attachment_image_src( get_post_thumbnail_id( $recent_posts['ID'] ), 'single-post-thumbnail' ); 
	
	?>
	
	</div>
              <div class="right_content">
                <div class="img_outer_box">
                   <div class="img_inner_box">
                      <img src="<?php echo $image[0];?>" alt="#">
                   </div>
                </div>
              </div>
	
	
<?php }	?>
                
               
          </div>
        </div>
        <!-- product content end -->
        <div class="btnHolder"> <a class="btn btn_readMore" href="javascript:void">Read More <i class="fa fa-angle-double-down" aria-hidden="true"></i> </a> </div>
      </div>
      <!-- productRow 1 -->


