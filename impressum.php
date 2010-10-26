<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query. 
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 */

get_header(); 
		 wp_enqueue_style('layout1', get_bloginfo('template_url').'ui/layout_1/layout_1.css',false,'1.0',all);
		 wp_enqueue_style ('jqueryuicss', get_bloginfo('template_url').'ui/jquery-design/css/pepper-grinder/jquery-ui-1.7.2.custom.css',false,'1.0',all);

?>

		
			
				<?php
					
					$impressumid=$IMPRESSUM->cat_ID;
					$impressumposts = get_posts('category='.$impressumid);
					$impressuminhalt="";
					foreach($impressumposts as $post){
						 $impressuminhalt=$post->post_content;
					}
					
				?>
				<div id="impressum">
				<?php
					echo $impressuminhalt;
				?>
				</div>
			
		

<?php get_footer(); ?>
