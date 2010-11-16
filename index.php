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
					  rpp: 5,
					  interval: 8000,
					  width: 250,
					  height: 185,
					  theme: {
						shell: {
						  background: '#F8F8F8',
						  color: '#000000'
						},
						tweets: {
						  background: '#F8F8F8',
						  color: '#A60000',
						  links: '#C0C0C0'
						}
					  },
					  features: {
						scrollbar: false,
						loop: true,
						live: true,
						hashtags: true,
						timestamp: true,
						avatars: true,
						behavior: 'default'
					  }
					}).render().setUser('FalkoJanak').start();
					</script>
				</div>
				<div id="leer">
				</div>
			
				
<?php get_footer(); ?>
				
