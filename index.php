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

		<div id="content">
			<div id="navi">
				<?php
					$HOME=get_category_by_slug('home');
					$homname=$HOME->name;
					
					$homeid=$HOME->cat_ID;
					$homeposts = get_posts('category='.$homeid);
					$homeinhalt="";
					foreach($homeposts as $post){
						 $homeinhalt=$post->post_content;
					}
					
					$ABOUTME=get_category_by_slug('about-me');
					$aboutmename=$ABOUTME->name;
					
					$aboutmeid=$ABOUTME->cat_ID;
					$aboutmeposts = get_posts('category='.$aboutmeid);
					$aboutmeinhalt="";
					foreach($aboutmeposts as $post){
						 $aboutmeinhalt=$post->post_content;
					}
					
					$CONTACT=get_category_by_slug('contact');
					$contactname=$CONTACT->name;
					
					$contactid=$CONTACT->cat_ID;
					$contactposts = get_posts('category='.$contactid);
					$contactinhalt="";
					foreach($contactposts as $post){
						 $contactinhalt=$post->post_content;
					}
				?>
<p>dies ist ein test. habe ein neues feature gerade gebaut.</p>
				<ul>
					<li><a id="menue_home" href="#home"><span ></span><?php echo $homname; ?></a></li>
					<li><a id="menue_about_me" href="#about_me"><span ></span><?php echo $aboutmename; ?></a></li>
					<li><a id="menue_contact"href="#contact"><span ></span><?php echo $contactname; ?></a></li>
				</ul>
				<div id="home">
				<?php
					echo $homeinhalt;
				?>
				</div>
				<div id="about_me">
				<?php
					echo $aboutmeinhalt;
				?>
				</div>
				<div id="contact">
				<?php
					echo $contactinhalt;
				?>
				</div>
			</div>
		</div>

<?php get_footer(); ?>
