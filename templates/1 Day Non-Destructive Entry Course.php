<?php
/**
 * Template name: 1 Day Non-Destructive Entry Course
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Scops_UX
 */
?>

<?php get_header(); ?>

<div id="primary" class="content-area landing">
	<main id="main" class="site-main angled-header" role="main">
		<section class="main-header hero home is-medium" style="background-image: url( <?php the_post_thumbnail_url(); ?>); background-size: cover;
    background-repeat: no-repeat;" />
		  <div class="hero-body">
				<div class="container">
				<div class="columns">
				  <div class="column is-half">
						<h1 class="title">
							<?php bulmapress_the_title('is-1', FALSE); ?>
				     </h1>
			      <h2 class="subtitle">
				        "Non Destructive Entry & uPVC"
				     </h2>
						 <!-- <p class="has-text-white has-text-weight-bold is-size-4 pad-bot-20">
							 The Keytek™ non-destructive entry and uPVC course covers all aspects of uPVC and wooden door lock identification and the correct tools to use, as well as bypassing and opening various types of doors and locks.
						</p> -->
							<a class="button is-green-fill is-large m-b-10" href="/">Apply Now</a>
							<a class="button is-white is-inverted is-outlined is-large" href="/">Call for more info <br> <i class="fa fa-phone" aria-hidden="true"></i></a>
				  </div>
				  <div class="column is-half is-video-header">
						<iframe width="100%" height="315px" src="https://www.youtube.com/embed/9aPkUE3WUGs?rel=0&amp;controls=0" frameborder="0" allowfullscreen></iframe>
				  </div>
				</div>
			</div>
		  </div>
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
				<polygon fill="white" points="0,100 100,0 100,100"/>
			</svg>
		</section>
	</main>
</div>

<!-- Subnav  -->
<!-- <div class="hero-foot">
	<div class="container">
		<nav class="tabs is-boxed" role="navigation">
			<?php bulmapress_sub_navigation(); ?>
		</nav>
	</div>
</div> -->

<!-- Editable Top Wordpress Content -->
<section class="hero">
<div class="hero-body">
	<div class="container">
		<div id="primary" class="content-area">
			<main id="main" class="site-main wrapper" role="main">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/content-course' ); ?>
					<?php bulmapress_get_comments(); ?>
				<?php endwhile; ?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div>
</div>
</section>

<!-- Callback Email Section -->
<?php get_template_part( 'template-parts/callback-email-section' ); ?>

<section class="hero">
	<div class="hero-body">
		<div class="container">
			<h1 class="title is-center"><strong>Course Breakdown</strong></h1>
		</div>
	</div>

  <div id="who-is-this-guide-for" class="container m-b-40">
		<div class="columns">
		  <div class="column is-one-third has-text-centered is-one-third-mobile">
				<div class="picture column is-one-fifth has-text-centered">
					<svg version="1.2" baseProfile="tiny" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
							 x="0px" y="0px" viewBox="0 0 800 800" overflow="scroll" xml:space="preserve">
						<circle fill="none" stroke="#29CB71" stroke-width="10" stroke-miterlimit="10" cx="393.5" cy="315.5" r="33.5"/>
						<circle fill="none" stroke="#29CB71" stroke-width="10" stroke-miterlimit="10" cx="391.5" cy="424.5" r="33.5"/>
						<circle fill="none" stroke="#29CB71" stroke-width="10" stroke-miterlimit="10" cx="391.5" cy="222.5" r="13.5"/>
						<circle fill="none" stroke="#29CB71" stroke-width="10" stroke-miterlimit="10" cx="391.5" cy="567.5" r="13.5"/>
						<g>
							<path fill="#29CB71" d="M385.4,412.1c0,8.6,0,17.3,0,25.9c0,7.2,11.3,7.3,11.3,0.1c0-8.6,0-17.3,0-25.9
								C396.6,404.9,385.4,404.8,385.4,412.1L385.4,412.1z"/>
						</g>
						<path fill="none" stroke="#29CB71" stroke-width="10" stroke-miterlimit="10" d="M371,451v44.3c0,11.2,9.3,20.2,20.5,20.2
							c11.2,0,20.5-9.1,20.5-20.3V451"/>
						<path fill="none" stroke="#29CB71" stroke-width="10" stroke-miterlimit="10" d="M366,335H212.3c-6.8,0-12.3-4.9-12.3-10.9v-19.4
							c0-6,5.5-10.7,12.3-10.7H368"/>
						<path fill="none" stroke="#29CB71" stroke-width="10" stroke-miterlimit="10" d="M336,292v-73.3c0-28.2,24-51,54-51
							c30,0,54,22.8,54,51v362c0,28.2-24,51-54,51c-30,0-54-22.8-54-51V336"/>
						<line fill="none" stroke="#29CB71" stroke-width="10" stroke-miterlimit="10" x1="502" y1="168" x2="502" y2="622"/>
						<path fill="none" stroke="#29CB71" stroke-width="10" stroke-miterlimit="10" d="M600,319c0,6.6-5.4,12-12,12h-74
							c-6.6,0-12-5.4-12-12v-3c0-6.6,5.4-12,12-12h74c6.6,0,12,5.4,12,12V319z"/>
						<path fill="none" stroke="#29CB71" stroke-width="10" stroke-miterlimit="10" d="M599,376c0,6.6-5.4,12-12,12h-74
							c-6.6,0-12-5.4-12-12v-3c0-6.6,5.4-12,12-12h74c6.6,0,12,5.4,12,12V376z"/>
						<path fill="none" stroke="#29CB71" stroke-width="10" stroke-miterlimit="10" d="M599,432c0,6.6-5.4,12-12,12h-74
							c-6.6,0-12-5.4-12-12v-3c0-6.6,5.4-12,12-12h74c6.6,0,12,5.4,12,12V432z"/>
						<path fill="none" stroke="#29CB71" stroke-width="10" stroke-miterlimit="10" d="M599,488c0,6.6-5.4,12-12,12h-74
							c-6.6,0-12-5.4-12-12v-3c0-6.6,5.4-12,12-12h74c6.6,0,12,5.4,12,12V488z"/>
					</svg>
				</div>
				<strong>Cylinders</strong>
				<p>Euro, Oval and Rim (Basic Training)</p>
			</div>

		  <div class="column is-one-third has-text-centered is-one-third-mobile">
				<div class="picture column is-one-fifth has-text-centered">
					<svg version="1.2" baseProfile="tiny" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
							 x="0px" y="0px" viewBox="0 0 800 800" overflow="scroll" xml:space="preserve">
						<polygon fill="none" stroke="#29CB71" stroke-width="15" stroke-miterlimit="10" points="575.4,577 321,577 278.4,537.4
							278.4,266.4 328,223 575.4,223 "/>
						<rect x="575.4" y="344.4" fill="none" stroke="#29CB71" stroke-width="15" stroke-miterlimit="10" width="65.6" height="123"/>
						<line fill="none" stroke="#29CB71" stroke-width="15" stroke-miterlimit="10" x1="575.4" y1="223" x2="575.4" y2="89.4"/>
						<line fill="none" stroke="#29CB71" stroke-width="15" stroke-miterlimit="10" x1="575.4" y1="710.6" x2="575.4" y2="577"/>
						<circle fill="#29CB71" cx="372.9" cy="474.1" r="15.6"/>
						<line fill="none" stroke="#29CB71" stroke-width="15" stroke-miterlimit="10" x1="372.9" y1="485" x2="372.9" y2="532.8"/>
						<line fill="none" stroke="#29CB71" stroke-width="15" stroke-miterlimit="10" x1="226.1" y1="648.8" x2="440.4" y2="648.8"/>
						<polygon fill="#29CB71" points="429.9,654.1 429.9,701.7 422.2,701.7 422.2,696.8 416.4,696.8 416.4,701.7 407.3,701.7 407.3,696.8
							401.5,696.8 401.5,701.7 394.5,701.7 394.5,654.1 "/>
						<path fill="#29CB71" d="M195.7,612.7c-20.1,0-36.4,16.3-36.4,36.4c0,20.1,16.3,36.4,36.4,36.4c20.1,0,36.4-16.3,36.4-36.4
							C232.1,629,215.8,612.7,195.7,612.7z M181.3,657c-4.6,0-8.3-3.7-8.3-8.3c0-4.6,3.7-8.3,8.3-8.3c4.6,0,8.3,3.7,8.3,8.3
							C189.7,653.3,185.9,657,181.3,657z"/>
					</svg>
				</div>
				<strong>Mortice Locks</strong><br>
				(Basic Training)
			</div>
			<div class="column is-one-third has-text-centered is-one-third-mobile">
				<div class="picture column is-one-fifth has-text-centered">
					<svg version="1.2" baseProfile="tiny" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
							 x="0px" y="0px" viewBox="0 0 800 800" overflow="scroll" xml:space="preserve">
						<path fill="#29CB71" d="M280,233v327l192,38V201L280,233z M451,404c-6.1,0-11-4.9-11-11s4.9-11,11-11c6.1,0,11,4.9,11,11
							S457.1,404,451,404z"/>
						<polyline fill="none" stroke="#29CB71" stroke-width="15" stroke-miterlimit="10" points="488,241.5 520.5,241.5 520.5,556.5
							488,556.5 "/>
					</svg>
				</div>
				<strong>uPVC Doors</strong><br>
				(Basic Training)
			</div>

		</div>
	</div>
</section>

<!-- Quote Section -->
<?php get_template_part( 'template-parts/quote-section' ); ?>

<section class="hero">
<div class="hero-body">
	<div class="container" id="additional">
				<h1 class="m-tb-20">Additional 1 Day Course Information</h1>
				<h2 class="m-tb-20">Non-Destructive Entry Course</h2>
				<p class="m-tb-20">Being able to open a door quickly and without causing any damage is an essential locksmith skill, but it can be the confidence in the tools or processes that prevent many techniques being used on site.</p>
				<p class="m-tb-20">The Keytek™ non-destructive entry course has been designed to provide you with a comprehensive guide to the range of tooling available and practical hands on training to help give you the confidence to tackle any lock out situation using only non-destructive entry methods. More often than not, the secret to being able to carry out a non-destructive opening technique effectively is understanding the product you are working with. This course offers an in-depth explanation and dissection of a range of locks to help improve your understanding of the lock itself.</p>
				<h2 class="m-tb-20">Included in the One Day Course</h2>
				<p class="m-tb-20">Opening techniques on the following locks</p>
				<p>
					<ul>
						<li>Cylinders – Euro, Oval, rim and wafer type cylinders</li>
						<li>Complete range of Nightlatches</li>
						<li>2 and 3 lever mortices</li>
						<li>uPVC door mechanisms</li>
						<li>Garage and patio door locks</li>
						<li>Radial Cylinders</li>
					</ul>
				</p>
				<p class="m-tb-20">The non-destructive entry course is carried out over 1 day with class numbers limited to a maximum of 6 people per course.</p>
				<p class="m-tb-20">An existing understanding of the locks listed above is desirable but not essential.</p>
				<div class="google-maps m-t-40">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2524.653878715499!2d-1.9521893485264126!3d50.74490817941667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4873a1514d6200c5%3A0xd94f650518a220a!2sKeytek+Locksmith+Training+Academy!5e0!3m2!1sen!2suk!4v1508423974149" width="400" height="70" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
	</div>
</div>
</section>

<!-- MailChimp Section -->
<?php get_template_part( 'template-parts/mailchimp-section' ); ?>

</main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
