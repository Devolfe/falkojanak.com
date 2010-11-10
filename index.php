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

				<ul class="tab">
					<li><a id="menue_home" href="#" ><?php echo $homname; ?></a></li>
					<li><a id="menue_about_me" href="#" ><?php echo $aboutmename; ?></a></li>
					<li><a id="menue_contact"href="#" ><?php echo $contactname; ?></a></li>
				</ul>
		</div>	

	
				<div id="root" >
					<div class="artikel">
						<div id="home" class="" >
							<?php
								echo $homeinhalt;
							?>
						</div>
						<div id="about_me" class="">
							<?php
								echo $aboutmeinhalt;
							?>
						</div>
						<div id="contact" class="">
							<?php
								echo $contactinhalt;
							?>
						</div>
					</div>
				</div>	
				<div id="twitter">
					<script src="http://widgets.twimg.com/j/2/widget.js"></script>
					<script>
					new TWTR.Widget({
					  version: 2,
					  type: 'profile',
					  rpp: 10,
					  interval: 6000,
					  width: 250,
					  height: 300,
					  theme: {
						shell: {
						  background: '#333333',
						  color: '#ffffff'
						},
						tweets: {
						  background: '#000000',
						  color: '#ffffff',
						  links: '#4aed05'
						}
					  },
					  features: {
						scrollbar: true,
						loop: false,
						live: false,
						hashtags: true,
						timestamp: true,
						avatars: false,
						behavior: 'all'
					  }
					}).render().setUser('Devolfe').start();
					</script>
				</div>
				<div id="leer">
				</div>
			
				
<?php get_footer(); ?>
				
