<?php
/**
 * Template name: One Day uPVC Course
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
				        "uPVC Insight Course"
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
			<h1 class="title is-center">Course Breakdown</h1>
		</div>
	</div>

  <div id="who-is-this-guide-for" class="container m-b-40">
		<div class="columns">
		  <div class="column is-one-fifth has-text-centered is-one-third-mobile">
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
				<h1>Cylinders</h1>
				<p>Euro, Oval and Rim</p>
			</div>
		  <div class="column is-one-fifth has-text-centered is-one-third-mobile">
				<div class="picture columm is-one-fifth has-text-centered">
					<svg version="1.2" baseProfile="tiny" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
						 x="0px" y="0px" viewBox="0 0 800 800" overflow="scroll" xml:space="preserve">
						<path fill="none" stroke="#29CB71" stroke-width="15" stroke-miterlimit="10" d="M611.5,338H364.9l-0.1-0.2
							c-21.2-36.1-60.4-60.3-105.3-60.3c-67.4,0-122,54.6-122,122s54.6,122,122,122c45.3,0,84.9-24.7,105.9-61.4l0.1-0.1H415l38.5-38.5
							L485,453l29.5-29.5L544,453l30-30l28,28l61.2-61.2L611.5,338z M207.5,431.5c-17.7,0-32-14.3-32-32c0-17.7,14.3-32,32-32
							s32,14.3,32,32C239.5,417.2,225.2,431.5,207.5,431.5z"/>
					</svg>
				</div>
				Key Cutting
			</div>
		  <div class="column is-one-fifth has-text-centered is-one-third-mobile">
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
				Mortice Locks<br>
				2, 3 and 5 lever Standard
			</div>
			<div class="column is-one-fifth has-text-centered is-one-third-mobile">
				<div class="picture column is-one-fifth has-text-centered">
					<svg version="1.2" baseProfile="tiny" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
							 x="0px" y="0px" viewBox="0 0 800 800" overflow="scroll" xml:space="preserve">
						<path fill="#29CB71" d="M280,233v327l192,38V201L280,233z M451,404c-6.1,0-11-4.9-11-11s4.9-11,11-11c6.1,0,11,4.9,11,11
							S457.1,404,451,404z"/>
						<polyline fill="none" stroke="#29CB71" stroke-width="15" stroke-miterlimit="10" points="488,241.5 520.5,241.5 520.5,556.5
							488,556.5 "/>
					</svg>
				</div>
				uPVC Doors<br>
				Locks and Mechanisms
			</div>
			<div class="column is-one-fifth has-text-centered is-one-third-mobile">
				<div class="picture column is-one-fifth has-text-centered">
					<svg version="1.2" baseProfile="tiny" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
							 x="0px" y="0px" viewBox="0 0 800 800" overflow="scroll" xml:space="preserve">
						<path fill="#29CB71" d="M101.7,511.6L104,372c0,0,38.3-15,73.3-13.6s56.3,13.3,59,23c2.7,9.7,8.7,26.8,8.3,74.8
							c-0.3,48,0,55.8,0,55.8H193l4-87.8c0,0,1-11.1-4-15.8c-5-4.7-31.3-7.4-37-1.1l-2.7,106L101.7,511.6z"/>
						<path fill="#29CB71" d="M381,368v47c0,0-12.5-14.8-32.8-14s-39,15.3-39,36.5s16.3,37,34.3,36.5s35.8-12,39.5-16v45
							c0,0-27.5,17-47.8,15.5s-83.5-18.2-77.5-82.7s38.1-70.3,62.4-74.8S381,368,381,368z"/>
						<path fill="#29CB71" d="M394,360h23c0,0-5-44,13.3-61.3c18.3-17.3,35.3-18.3,47.3-18.3S511,292,511,292l-1.7,42c0,0-7-10-17.7-10
							c-10.7,0-23.7,4-23.3,15c0.3,11-0.3,21-0.3,21h35l0.7,44l-30,0.3L474,512h-54l-0.7-108l-25.3-0.3V360z"/>
						<path fill="#29CB71" d="M578.7,363.6c-73.5-0.8-75.3,80.1-75.3,80.1c-1.1,58.9,63.6,73.7,88.1,75c24.5,1.3,46.8-13.6,46.8-13.6
							l-0.3-38.9c-4.5,3.3-18.5,14.6-46,13.9s-39-22-39-22h91.8c0,0,2-7.6,2.2-21.8S652.2,364.3,578.7,363.6z M554,428
							c0,0,6.8-21.8,26.3-21.8S602,428,602,428H554z"/>
						<circle fill="#29CB71" cx="676.5" cy="498.5" r="21.5"/>
					</svg>
				</div>
				ncfe Certificate<br>
				Level 4
			</div>
		</div>
	</div>
</section>

<!-- Quote Section -->
<?php get_template_part( 'template-parts/quote-section' ); ?>

<section class="hero">
<div class="hero-body">
	<div class="container" id="additional">
				<h1 class="m-tb-20">Additional 1 Day uPVC Course Information</h1>
				<p class="m-tb-20">The Keytek™ One Day ‘uPVC Course’ is aimed at professionals who have experience as a locksmith on wooden doors but who have very little or no experience in uPVC. This course is also ideal for those already active in the industry looking to gain an insight into the latest locks, standards, tools and opening techniques on uPVC.</p>
				<h2 class="m-tb-20">Course Breakdown</h2>
				<p class="m-tb-20">During the course of the day, students are tutored and assessed on locksmith techniques covering the identification, operation, opening techniques and replacement of the most common lock types on uPVC doors:</p>
				<h2 class="m-tb-20">Included in the One Day Course:</h2>
				<h2 class="m-tb-20">Locking Systems</h2>
				<p>
					<ul>
						<li>Operation, application, benefits and pitfalls of cylinders</li>
						<li>uPVC Mechanism specification, operation and application</li>
						<li>Security features</li>
						<li>Upgrading and retrofitting</li>
						<h3 class="m-tb-20">Entry methods</h3>
						<li>Both Non-destructive and professional destructive techniques</li>
						<li>Lock Bypass Techniques</li>
						<li>Discontinued locks and Identifying Solutions</li>
					</ul>
				</p>
				<h2 class="m-tb-20">Industry Standards</h2>
				<p>
					<ul>
						<li>PAS 24</li>
						<li>British Standards</li>
						<li>TS:007</li>
					</ul>
				</p>
				<h2 class="m-tb-20">This course will also cover</h2>
				<p>
					<ul>
						<li>Additional Security Products</li>
						<li>Ordering from catalogues</li>
					</ul>
				</p>
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
