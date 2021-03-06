<?php
/**
 * Template part for displaying posts with excerpts
 *
 * Used in Search Results and for Recent Posts in Front Page panels.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Ascend_Theme
 * @since 1.0
 * @version 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php
					echo ascend_time_link();
					ascend_edit_link();
				?>
			</div><!-- .entry-meta -->
		<?php elseif ( 'page' === get_post_type() && get_edit_post_link() ) : ?>
			<div class="entry-meta">
				<?php ascend_edit_link(); ?>
			</div><!-- .entry-meta -->
		<?php endif; ?>

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header><!-- .entry-header -->

	<div class="faq_box ">
		
        <div class="half_container">
    <div class="accordion">
        		<div class="accordion_head">
        			<p><?php echo get_the_title();?> </p>
        			<span class="plus">+</span>
        			<div class="q"><p>Q</p></div>
        		</div>
        		<div class="content">
        			<p>
<?php echo get_the_content();?></p>
        		</div>
        	</div>
        	
        	
        	
        	
        </div>
	</div>

	<div class="entry-summary">
		<?php //the_excerpt(); ?>
	</div><!-- .entry-summary -->

</article><!-- #post-## -->
