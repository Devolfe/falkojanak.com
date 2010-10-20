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
					$hom=$HOME->name;
					$ABOUTME=get_category_by_slug('about-me');
					$abo=$ABOUTME->name;
					$CONTACT=get_category_by_slug('contakt');
					$con=$CONTACT->name;
				?>
				<ul>
					<li><a id="menue_home" href="#home"><span class="ui-icon ui-icon-home" style="float: left; margin-top: .3em;  margin-right: .3em;"></span><?php echo $hom; ?></a></li>
					<li><a id="menue_about_me" href="#about_me"><span class="ui-icon ui-icon-person" style="float: left; margin-top: .3em;  margin-right: .3em;"></span><?php echo $abo; ?></a></li>
					<li><a id="menue_contact"href="#contact"><span class="ui-icon ui-icon-mail-closed" style="float: left; margin-top: .3em;  margin-right: .3em;"></span><?php echo $con; ?></a></li>
				</ul>
				<div id="home">
					<div id="intro" class="ui-state-highlight ui-corner-all" >
						<p>Willkommen auf meiner Website. Ich möchte mich an dieser Stelle als Freelancer vorstellen, um meine Dienste als Software Entwickler anzubieten. Sollte Ihr Interesse geweckt sein, würde ich mich über eine Nachricht an contact(at)falkojanak.com freuen.</p>
					</div>
					<div id="principles" style="position: relative; ">
						<div class="ui-overlay"><div class="ui-widget-overlay"></div><div class="ui-widget-shadow ui-corner-all" style="width: 251px; height: 161px; position: absolute; left: 614px; top:-27px;"></div></div>
						<div style="position: absolute; width: 210px; height: 120px;left:619px; margin-top:15px; padding: 10px; top:-27px;" class="ui-widget ui-widget-content ui-corner-all">
							<div class="ui-dialog-content ui-widget-content" style="background: none; border: 0;">
								<div id="principleHeadline" class="ui-state-default ui-corner-all ui-priority-primary">
									<p style="margin-top: 0px; margin-bottom: 0pt;"><span class="ui-icon ui-icon-info" style="float: left; margin-top: .2em; margin-right: .3em;"></span>Prinzipien</p>
								</div>
								<div id="principleLists" style="font-size: 0.9em;">
									<ul>
										<li><span class="ui-icon ui-icon-check" style="float: left; margin-top: .2em;  margin-right: .3em;"></span>agile</li>
										<li><span class="ui-icon ui-icon-check" style="float: left; margin-top: .2em;  margin-right: .3em;"></span>behavior driven</li>
										<li><span class="ui-icon ui-icon-check" style="float: left; margin-top: .2em;  margin-right: .3em;"></span>secure</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div id="skills">
						<h3 class="ui-state-active ui-corner-all" style="padding-bottom:5px;padding-left:10px; padding-top:5px;"><span class="ui-icon ui-icon-circle-triangle-e" style="float: left; margin-top: .3em;  margin-right: .3em;"></span>Skills</h3>
						<div id="skillsLists">
							<div style="display:inline-block; margin-top:20px;" class="ui-widget-content ui-corner-all">
								<ul>
									<li class="ui-state-default ui-corner-all" style="padding-right: 20px; padding-left: 30px; margin-top:-24px;">business</li>
									<li style="padding-right: 20px; padding-left: 30px;"><span class="ui-icon ui-icon-triangle-1-e" style="float: left; margin-top: .3em;  margin-right: .3em;"></span>.Net Framework</li>
									<li style="padding-right: 20px; padding-left: 30px;"><span class="ui-icon ui-icon-triangle-1-e" style="float: left; margin-top: .3em;  margin-right: .3em;"></span>C# / VB</li>
									<li style="padding-right: 20px; padding-left: 30px;"><span class="ui-icon ui-icon-triangle-1-e" style="float: left; margin-top: .3em;  margin-right: .3em;"></span>ASP.NET</li>
									<li style="padding-right: 20px; padding-left: 30px;"><span class="ui-icon ui-icon-triangle-1-e" style="float: left; margin-top: .3em;  margin-right: .3em;"></span>SQL Server 2005 / 2008</li>
								</ul>
							</div>
							<div style="display:inline-block; margin-left: 50px;" class="ui-widget-content ui-corner-all">
								<ul style="padding-top:30px;">
									<li class="ui-state-default ui-corner-all" style="padding-right: 20px; padding-left: 30px; margin-top:-24px;">web</li>
									<li style="padding-right: 20px; padding-left: 30px;"><span class="ui-icon ui-icon-triangle-1-e" style="float: left; margin-top: .3em;  margin-right: .3em;"></span>PHP / MySQL</li>
									<li style="padding-right: 20px; padding-left: 30px;"><span class="ui-icon ui-icon-triangle-1-e" style="float: left; margin-top: .3em;  margin-right: .3em;"></span>Java</li>
									<li style="padding-right: 20px; padding-left: 30px;"><span class="ui-icon ui-icon-triangle-1-e" style="float: left; margin-top: .3em;  margin-right: .3em;"></span>WordPress</li>
									<li style="padding-right: 20px; padding-left: 30px;"><span class="ui-icon ui-icon-triangle-1-e" style="float: left; margin-top: .3em;  margin-right: .3em;"></span>XTCommerce</li>
								</ul>
							</div>
						</div>
					</div>
					<div id="references">
						<h3 class="ui-state-active ui-corner-all" style="padding-bottom:5px;padding-left:10px; padding-top:5px;"><span class="ui-icon ui-icon-circle-triangle-e" style="float: left; margin-top: .3em;  margin-right: .3em;"></span>Referenzen</h3>
						<div id="referencesList">
							<dl>
								<dt><a href="http://www.codie.com" target="_blank"><span class="ui-icon ui-icon-triangle-1-e" style="float: left; margin-top: .3em;  margin-right: .3em;"></span>CODie software products e.K.</a></dt>
								<dd>.NET (Web-) Application Development</dd>
								<dt><a href="http://fh-brandenburg.de" target="_blank"><span class="ui-icon ui-icon-triangle-1-e" style="float: left; margin-top: .3em;  margin-right: .3em;"></span>Fachhochschule Brandenburg</a></dt>
								<dd>Web Development</dd>
								<dt><a href="http://shiftup.de/" target="_blank"><span class="ui-icon ui-icon-triangle-1-e" style="float: left; margin-top: .3em;  margin-right: .3em;"></span>shiftup | intermedia design</a></dt>
								<dd>Web Development</dd>
								<dt><a href="http://www.sosoft.de" target="_blank"><span class="ui-icon ui-icon-triangle-1-e" style="float: left; margin-top: .3em;  margin-right: .3em;"></span>Sozial Software Service GmbH</a></dt>
								<dd>VBA</dd>
							</dl>
						</div>
					</div>
				</div>
				<div id="about_me">
					<h3 class="ui-state-active ui-corner-all"><span class="ui-icon ui-icon-circle-triangle-e" style="float: left; margin-top: .3em;  margin-right: .3em;"></span>Lebenslauf</h3>
					<div id="trackrecordList" class="ui-widget-content ui-corner-all">
						<dl>
							<dt>geboren</dt>
							<dd>18.12.1982 in 17291 Prenzlau</dd>
							<br /><dt class="ui-state-default ui-corner-all">Ausbildung</dt><br /><br />
							<dt>2009</dt>
							<dd>Abschluss als Bachelor of Science (FH) im Studiengang Applied Computer Science
								<p class="kursiv">Thema: Spezifizierung und Umsetzung von Sicherheitsanforderungen an die Webanwendung CODieBOARD#finance-center Webfrontend in ASP.NET 2.0</p>
							</dd>
							<br /><dt class="ui-state-default ui-corner-all">Auslandserfahrungen</dt><br /><br />
													<dt>Okt 2007 - Feb 2008</dt>
							<dd>Universidad de Las Palmas de Gran Canaria - Auslandssemester</dd>
													<dt>Juli / Aug 2008</dt>
							<dd>University of the West of Scotland - Summer School</dd>
							<br /><dt class="ui-state-default ui-corner-all">Praktische Erfahrung</dt><br /><br />
							<dt>seit 2003</dt>
							<dd>CODie software products e.K. <br />Anwendungsentwurf und -entwicklung, Webanwendungsentwurf und -entwicklung</dd>
							<dt>seit 2010</dt>
							<dd>profimag GmbH & Co.KG <br />Webanwendungsentwurf und -entwicklung</dd>
							<br /><dt class="ui-state-default ui-corner-all">Weitere Erfahrung</dt><br />
							<p>IIS , LINQ, IronRuby, WCF, Silverlight, WPF, XAML, JQuery</p>
						</dl>
					</div>
				</div>
				<div id="contact">
					<h3 class="ui-state-active ui-corner-all" style="padding-bottom:5px;padding-left:10px; padding-top:5px;"><span class="ui-icon ui-icon-circle-triangle-e" style="float: left; margin-top: .3em;  margin-right: .3em;"></span>Falko Janak Software Development</h3>
					<div class="ui-widget-content ui-corner-all">
						<ul>
							<li class="ui-state-default ui-corner-all" style="padding-right: 20px; padding-left: 30px;" >Traditionell</li>
							<li>Falko Janak<br />Zeppelinstraße 45<br />14471 Potsdam</li>
							<li>(tel) 0173 64 35 834</li>
							<li>(mail) contact (at) falkojanak.com</li>
							<li>(www) www.falkojanak.com</li>
						</ul>
						<ul>
							<li class="ui-state-default ui-corner-all" style="padding-right: 20px; padding-left: 30px;" >Social Media</li>
							<li><img src="ui/img/FaceBook-icon-32.png" alt="Facebook"> <a href="http://www.facebook.com/daredude">Facebook</a></li>
							<li><img src="ui/img/xing_32.png" alt="Facebook"> <a href="http://www.xing.com/profile/Falko_Janak">XING</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

<?php get_footer(); ?>
