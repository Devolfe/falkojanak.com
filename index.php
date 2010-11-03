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

<!--<a href="http://blog.seankoole.com" title="Home" class="current">Home</a>	-->
				<ul class="tab">
					<li><a id="menue_home" href="#home" ><?php echo $homname; ?></a></li>
					<li><a id="menue_about_me" href="#about_me"><?php echo $aboutmename; ?></a></li>
					<li><a id="menue_contact"href="#contact"><?php echo $contactname; ?></a></li>
				</ul>
				<div id="home" class="tabgesicht">
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
