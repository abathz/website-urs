<!-- Home Page -->
<section class="parallax-section clearfix slider" id="slider">
	<div class="mid-content">
		<div class="row">
			<div class="col-lg-12 text-center">
				<?php echo do_shortcode("[sangar-slider id=14]"); ?>
			</div>
		</div>
	</div>
</section>
<section class="parallax-section clearfix history" id="history">
	<div class="mid-content">
		<div class="row">
			<div class="pull-left" style="padding-left: 20px;">
				<h1 style="letter-spacing: 5px;"><span>History</span></h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-lg-offset-6">
				<p class="text-right" style="font-family: 'Gotham-Book'">UNPAR Radio Station (URS) is a Student Activity Unit focusing on the field of broadcasting. URS was established on June 9, 2003. URS aims at
becoming a medium of communication within the greater UNPAR campus. URS can also become a means of learning how to communicate for UNPAR students. URS consists of 7 divisions that are separated into on-air and off-air. ON-air
consists of Announcers, Producers, Music
Directors and Reporters, whereas Off-air consists of Public Relations, and Creative and Program Operators. URS broadcasting activity starts at 09:00 to 17:00 every Monday - Friday</p>
			</div>
		</div>
	</div>
</section>
<section class="parallax-section clearfix division" id="division">
	<div class="mid-content">
		<div class="row">
			<div class="col-lg-2" style="padding-left: 20px;">
				<h1 style="letter-spacing: 5px;"><span>Division</span></h1>
				<h1 style="font-size: 50pt; color: #fa4e68;">CORE</h1>
			</div>
			<div class="col-lg-10 text-center">
				<div class="team-listing clearfix">
					<div class="team-tab">
						<a href="#" class="clearfix team-image wow fadeInLeft" data-wow-delay="0.25s">
							<img src="<?php echo get_template_directory_uri(); ?>/images/imgacc.png" alt="">
							<h6>GENERAL MANAGER</h6>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section>
	<div style="background-color: #fa4e68; width: 100%; height: 50px;"></div>
</section>
<section class="parallax-section clearfix division" id="division">
	<div class="mid-content">
		<div class="row">
			<div class="pull-left">
				<h1 style="letter-spacing: 5px;"><span>Division</span></h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-2">
				<h1 style="font-size: 50pt; color: #fa4e68;">ON-AIR</h1>
			</div>
			<div class="col-lg-10">
				<div class="team-listing clearfix pull-right">
					<a href="http://localhost:8080/website-urs/announcer-2/" class="clearfix team-image wow fadeInLeft" data-wow-delay="0.25s">
						<img src="<?php echo get_template_directory_uri(); ?>/images/announcer.png" width="80px" alt="">
						<h6>ANNOUNCER</h6>
					</a>
					<a href="http://localhost:8080/website-urs/producer-2/" class="clearfix team-image wow fadeInLeft" data-wow-delay="0.25s">
						<img src="<?php echo get_template_directory_uri(); ?>/images/producer.png" width="115px" alt="">
						<h6>PRODUCER</h6>
					</a>
					<a href="http://localhost:8080/website-urs/reporter-2/" class="clearfix team-image wow fadeInLeft" data-wow-delay="0.25s">
						<img src="<?php echo get_template_directory_uri(); ?>/images/reporter.png" width="115px" style="padding-bottom: 15px;" alt="">
						<h6>REPORTER</h6>
					</a>
					<a href="http://localhost:8080/website-urs/music-director-2/" class="clearfix team-image wow fadeInLeft" data-wow-delay="0.25s">
						<img src="<?php echo get_template_directory_uri(); ?>/images/MD.png" width="120px" alt="">
						<h6>MUSIC DIRECTOR</h6>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<section>
	<div style="background-color: #fa4e68; width: 100%; height: 50px;"></div>
</section>
<section class="parallax-section clearfix division" id="division">
	<div class="mid-content">
		<div class="row">
			<div class="pull-left">
				<h1 style="letter-spacing: 5px;"><span>Division</span></h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-2">
				<h1 style="font-size: 50pt; color: #fa4e68;">OFF-AIR</h1>
			</div>
			<div class="col-lg-10">
				<div class="team-listing clearfix pull-right">
					<a href="http://localhost:8080/website-urs/public-relation/" class="clearfix team-image wow fadeInLeft" data-wow-delay="0.25s">
						<img src="<?php echo get_template_directory_uri(); ?>/images/PR.png" width="140px" alt="">
						<h6>PUBLIC RELATION</h6>
					</a>
					<a href="http://localhost:8080/website-urs/creative-2/" class="clearfix team-image wow fadeInLeft" data-wow-delay="0.25s">
						<img src="<?php echo get_template_directory_uri(); ?>/images/creative.png" width="105px" alt="">
						<h6>CREATIVE</h6>
					</a>
					<a href="http://localhost:8080/website-urs/operator-program/" class="clearfix team-image wow fadeInLeft" data-wow-delay="0.25s">
						<img src="<?php echo get_template_directory_uri(); ?>/images/OP.png" width="100px" alt="">
						<h6>OPERATOR PROGRAM</h6>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
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
 * @package accesspress_parallax
 */

	$sections = of_get_option('parallax_section');

	if(!empty($sections)):
	foreach ($sections as $section) :
		$page = get_post( $section['page'] );
		$overlay = $section['overlay'];
		$image = $section['image'];
		$layout = $section['layout'];
		$category = $section['category'];
		$googlemapclass = $layout == "googlemap_template" ? " google-map" : "";
	?>
	<?php if(!empty($section['page'])): ?>
		<section class="parallax-section clearfix<?php echo esc_attr($googlemapclass)." ".esc_attr($layout);  ?>" id="<?php echo "section-".absint($page->ID); ?>">
		<?php if(!empty($image) && $overlay != "overlay0") : ?>
			<div class="overlay"></div>
		<?php endif; ?>

		<?php if($layout != "googlemap_template") :?>
			<div class="mid-content">
		<?php endif; ?>
			<?php
	            $query = new WP_Query( 'page_id='.$section['page'] );
	            while ( $query->have_posts() ) : $query->the_post();
	        ?>
				<?php
				if($layout != "action_template" && $layout != "blank_template" && $layout != "googlemap_template"): ?>
					<h1><span><?php the_title(); ?></span></h1>

					<div class="parallax-content">
					<?php if(get_the_content() != "") : ?>
						<div class="page-content">
						<?php the_content(); ?>
						</div>
					<?php endif; ?>
					</div>
				<?php endif; ?>
			<?php
		        endwhile;
	        ?>

					<?php
						switch ($layout) {
							case 'default_template':
								$template = "layouts/default";
								break;

							case 'service_template':
								$template = "layouts/service";
								break;

							case 'team_template':
								$template = "layouts/team";
								break;

							case 'portfolio_template':
								$template = "layouts/portfolio";
								break;

							case 'testimonial_template':
								$template = "layouts/testimonial";
								break;

							case 'action_template':
								$template = "layouts/action";
								break;

							case 'blank_template':
								$template = "layouts/blank";
								break;

							case 'googlemap_template':
								$template = "layouts/googlemap";
								break;

							case 'blog_template':
								$template = "layouts/blog";
								break;

							default:
								$template = "layouts/default";
								break;
						}
					?>

					<?php include(locate_template($template."-section.php"));?>

			<?php if($layout != "googlemap_template") :?>
			</div>
			<?php endif; ?>
		</section>
	<?php

	endif;
	endforeach;
	else:
        get_template_part('demo');
	endif;

	?>
	<?php  ?>
	<section class="parallax-section clearfix final-section" id="final-section">
		<div class="mid-content">
			<div class="row">
				<div class="col-lg-6 text-center">
					<h1 style="letter-spacing: 5px;"><span>Program Schedule</span></h1>
					<?php echo do_shortcode("[ecs-list-events limit='4']"); ?>
				</div>
				<div class="col-lg-6 text-center">
					<h1 style="letter-spacing: 5px;"><span>Advertisement Board</span></h1>
					<?php echo do_shortcode("[R-slider id='2']"); ?>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3">
					<h1 style="letter-spacing: 5px;"><span>Games</span></h1>
					<object width="470" height="400">
						<param name="movie" value="http://games.jlbn.net/arcade/20002.swf">
						<embed src="http://games.jlbn.net/arcade/20002.swf" width="270" height="200"></embed>
					</object>
				</div>
			</div>
		</div>
	</section>
	<section class="parallax-section clearfix streaming" id="streaming">
		<div class="mid-content">
			<div class="row">
				<div class="col-lg-12 text-center">
					<script type="text/javascript">var cstrpuid = 404848;var cstrpwidth = "500";var cstrpheight = "325";</script>
					<script type="text/javascript" src="http://cdn.caster.fm/0070B7/widgets/player.js"></script>
					<!--   DO NOT REMOVE THE LINKS BELOW, THEY  WILL BE HIDDEN (AND WILL HELP US A LOT)   -->
					<a id="cstrplb" href="http://www.caster.fm/">Free Shoutcast Hosting</a>
					<a id="cstrplb2" href="http://www.caster.fm/">Radio Stream Hosting</a>
					<div id="cstrpdiv"></div>
				</div>
			</div>
		</div>
	</section>
