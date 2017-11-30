<?php
/**
 * Template name: landing
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
	<main id="main" class="site-main" role="main">
		<section class="main-header hero home is-medium" style="background-image: url( <?php header_image(); ?>); background-size: cover;
    background-repeat: no-repeat;" />
			<div class="hero-body">
				<div class="container">
				<div class="columns" style="display: flex;justify-content: center;align-items: center;height: 100%;">
				  <div class="column is-half">
						<h1 class="title">
							<?php the_field('main-title'); ?>
				     </h1>
			      <h2 class="subtitle">
				       <?php the_field('subtitle'); ?>
				     </h2>
						 <div>
						 <!-- Read More Button -->
						 <a class="button is-dark is-large" href="/why-become-a-locksmith/">
	                <span>
	                  <strong>Read More</strong>
	                </span>
	            </a>
							<!-- Call Now Button -->
							<a class="button is-info is-large" href="tel:01202711195">
	                 <span>
	                   <strong>Call Now <i class="fa fa-phone" aria-hidden="true"></i></strong>
	                 </span>
	             </a>
						 </div>
						 <!-- Phone Number -->
						 <div>
							 <a class="button is-green-fill is-large m-t-10" href="tel:01202711195">
 	                 <span>
 	                   <strong><i class="fa fa-phone p-r-10" aria-hidden="true"></i>01202 711195</strong>
 	                 </span>
 	             </a>
						 </div>

						 <div class="m-t-10">
							 <a class="button is-light is-medium" href="https://www.facebook.com/locksmiths.training/">
								<i class="fa fa-facebook fa-2x is-facebook" aria-hidden="true"></i>
							 </a>
							 <a class="button is-light is-medium" href="https://twitter.com/keytek_academy">
								 <i class="fa fa-twitter fa-2x is-twitter" aria-hidden="true"></i>
							 </a>
							 <a class="button is-light is-medium" href="https://www.instagram.com/keytek_locksmiths/">
								<i class="fa fa-instagram fa-2x is-instagram" aria-hidden="true"></i>
							 </a>
						 </div>

				  </div>
				  <div class="column is-half">
						<!-- Column Right -->
					</div>
				</div>
			</div>
		 </div>
		 <div class="container">

		</div>

		</section>

		<div class="hero-foot">
    <div class="container">
    	<nav class="tabs is-boxed" role="navigation">
     		<?php bulmapress_sub_navigation(); ?>
    	</nav>
    </div>
    </div>

<!-- Quick View Course Section -->
<section class="hero">
<div class="hero-body">
	<div id="course-tiles" class="container">
		<div class="columns is-desktop">
			<!-- Opening Paragraph -->
			<div class="column is-half-desktop">
			  <article class="tile is-child">
			    <div class="All-courses" style="display:flex;justify-content: center;align-items: center;height: 100%;">
			      <div class="has-text-centered is-size-5">
							<!-- Wordpress Content -->
							<?php get_template_part('template-parts/simple-content'); ?>
							<!-- Wordpress Content end -->
			        <a class="borderless" href="courses/">
								<img src="http://new.locksmiths-training.co.uk/wp-content/uploads/2017/11/keytek-ncfe-logos.svg" alt="ncfe trust a trader logos">
						</a>
			      </div>
			    </div>
			  </article>
			</div>
			<!-- Course 1 -->
			<div class="column is-quater-desktop">
				<article class="tile is-child notification is-dark col-1-border-t">
					<!-- Old Style for Top Course -->
					<!-- <p class="small green-highlighted-text">TOP COURSE<i class="fa fa-check" aria-hidden="true"></i></p> -->
					<h1 class="title has-text-weight-bold">8 Day - Level 4</h1>
					<p class="subtitle">‘Experience Package’</p>
					<div class="content">
						<p>
							Our Eight Day Course will provide you with a detailed understanding and practical application of locksmithing techniques. After you have completed the eight days you will be awarded a Level 4 Accreditation...
						</p>
					</div>
					<a class="button is-green is-inverted is-outlined is-medium" href="keytek-8-day-level-4-experience-package/">View</a>
				</article>
			</div>
			<!-- Course 2 -->
			<div class="column is-quater-desktop">
		    <article class="tile is-child notification is-dark col-2-border-t">
					<!-- Top Course Icon -->
					<!-- <p class="small green-highlighted-text">TOP COURSE<i class="fa fa-check" aria-hidden="true"></i></p> -->
		      <p class="title has-text-weight-bold">5 Day - Level 4</p>
		      <p class="subtitle">‘The Complate Package’</p>
		      <div class="content">
		        <p>
							Our Five Day Course will provide you with a thorough and detailed understanding of locksmith techniques, as well as expose you to the practical elements of successful locksmithing. The Five Day Course will provide you with a Level 4 Accreditation...
						</p>
		      </div>
					<a class="button is-green is-inverted is-outlined is-medium" href="keytek-5-day-level-4-accredited-course">View</a>
		    </article>
		  </div>
		</div>
		<div class="tile is-ancestor">
			<!-- Course 3 -->
		  <div class="column is-quater-desktop">
		    <article class="tile is-child notification is-dark col-3-border-t">
		      <p class="title has-text-weight-bold">2 Day</p>
		      <p class="subtitle">‘NDE & uPVC’</p>
		      <div class="content">
		        <p>
							The Keytek™ non-destructive entry and uPVC course covers all aspects of uPVC and wooden door lock identification and the correct tools to use, as well as bypassing and opening various types of doors and locks...
						</p>
		      </div>
					<a class="button is-green is-inverted is-outlined is-medium" href="keytek-two-day-non-destructive-entry-and-upvc-course">View</a>
		    </article>
		  </div>
			<!-- Course 4 -->
			<div class="column is-quater-desktop">
				<article class="tile is-child notification is-dark col-4-border-t">
					<p class="title has-text-weight-bold">Fitment Course</p>
					<p class="subtitle">‘Brush up Course’</p>
					<div class="content">
						<p>
							The ‘Keytek™ Fitment Course’ is aimed
							at locksmiths who perhaps wish to brush
							up on their fitting techniques.
							This course covers all aspects of lock fitting
							and encompasses a wide variety of locks.
						</p>
					</div>
					<a class="button is-green is-inverted is-outlined is-medium" href="keytek-1-day-fitment-course">View</a>
				</article>
			</div>
			<!-- Course 5 -->
			<div class="column is-quater-desktop">
				<article class="tile is-child notification is-dark col-4-border-t">
					<p class="title has-text-weight-bold">1 Day - uPVC</p>
					<p class="subtitle">‘uPVC  Insight Course’</p>
					<div class="content">
						<p>
							The Keytek™ One Day ‘uPVC Course’ is aimed at professionals who have experience as a locksmith on wooden doors but who have very little or no experience in uPVC. This course is also ideal for those already...
						</p>
					</div>
					<a class="button is-green is-inverted is-outlined is-medium" href="keytek-1-day-upvc-course">View</a>
				</article>
			</div>
			<!-- Course 6 -->
			<div class="column is-quater-desktop">
				<article class="tile is-child notification is-dark col-4-border-t">
					<p class="title has-text-weight-bold">1 Day - Non Destructive</p>
					<div class="content">
						<p>
							Being able to open a door quickly and without causing any damage is an essential locksmith skill, but it can be the confidence in the tools or processes that prevent many techniques being used on site...
						</p>
						<a class="button is-green is-inverted is-outlined is-medium" href="keytek-1-day-non-destructive-entry-course">View</a>
					</div>
				</article>
			</div>
		</div>
		<div class="tile is-ancestor">
			<!-- All Courses -->
			<div class="column is-quater-desktop">
				<article class="tile is-child notification box">
					<div class="All-courses" style="display:flex;justify-content: center;align-items: center;height: 100%;">
						<div class="content has-text-centered">
							<p class="title has-text-weight-bold">All Courses</p>
							<a href="courses/" class="button is-green is-inverted is-outlined is-medium">View All</a>
						</div>
					</div>
				</article>
			</div>
		</div>
	</div>
</div>
</section>

<!-- Quote Section -->
<?php get_template_part('template-parts/quote-section'); ?>

<!-- Download Pack Section -->
<?php get_template_part('template-parts/download-pack-section'); ?>


<div class="line-break">
</div>

<!-- Compare Section -->
<section class="hero is-medium">
		<div class="container">
      		<h1 class="title has-text-centered pad-top-40 green-bold">
        		How we compare to other courses?
      		</h1>
      	<div>
		<div class="comparison">
			<table class="table is-bordered">
				<thead>
					<tr id="no-hover">
						<th class="is-no-border"></th>
						<th style="background-color:#77ad1a; border-top: 3px solid #77ad1a;border-left: 3px solid #77ad1a;border-right: 3px solid #77ad1a;"><img src="/wp-content/uploads/2017/11/keytek-academy-logo-white.png"></th>
					</tr>
				</thead>

				<tbody>

					<tr><td><a href="https://www.ncfe.org.uk/">NCFE</a> accredited courses available.</td>
					<td class="is-narrow" style="border-left: 3px solid #77ad1a; border-right: 3px solid #77ad1a;">
						<i class="fa fa-check is-green is-center"></i>
					</td>


					<tr><td>On-going 24 our technical support.</td>
						<td class="is-narrow" style="border-left: 3px solid #77ad1a; border-right: 3px solid #77ad1a;">
						<i class="fa fa-check is-green is-center"></i>
					</td>


					<tr><td>Level 4 accredited courses available.</td>
						<td class="is-narrow" style="border-left: 3px solid #77ad1a; border-right: 3px solid #77ad1a;">
						<i class="fa fa-check is-green is-center"></i>
					</td>


					<tr><td>Experienced trainers.</td>
						<td class="is-narrow" style="border-left: 3px solid #77ad1a; border-right: 3px solid #77ad1a;">
						<i class="fa fa-check is-green is-center"></i>
					</td>


					<tr><td><a href="http://www.enhancedlearningcredits.com/">ELCAS</a> approved courses.</td>
						<td class="is-narrow" style="border-left: 3px solid #77ad1a; border-right: 3px solid #77ad1a;">
						<i class="fa fa-check is-green is-center"></i>
					</td>


					<tr><td>Live on site training*.</td>
						<td class="is-narrow" style="border-left: 3px solid #77ad1a; border-right: 3px solid #77ad1a;">
						<i class="fa fa-check is-green is-center"></i>
					</td>


					<tr><td>uPVC specialist training.</td>
						<td class="is-narrow" style="border-left: 3px solid #77ad1a; border-right: 3px solid #77ad1a;">
						<i class="fa fa-check is-green is-center"></i>
					</td>


					<tr><td>Bespoke courses available.</td>
						<td class="is-narrow" style="border-left: 3px solid #77ad1a; border-right: 3px solid #77ad1a;">
						<i class="fa fa-check is-green is-center"></i>
					</td>

					<tr><td>Lunch and refreshments provided throughout courses.</td>
						<td class="is-narrow" style="border-left: 3px solid #77ad1a; border-right: 3px solid #77ad1a;">
						<i class="fa fa-check is-green is-center"></i>
					</td>

					<tr><td>Ongoing support training available.</td>
						<td class="is-narrow" style="border-left: 3px solid #77ad1a; border-right: 3px solid #77ad1a;">
						<i class="fa fa-check is-green is-center"></i>
					</td>

					<tr><td>Dedicated locksmith academy support team.</td>
						<td class="is-narrow" style="border-left: 3px solid #77ad1a; border-right: 3px solid #77ad1a;">
						<i class="fa fa-check is-green is-center"></i>
					</td>

					<tr><td>Possibility of sub-contracting for the <a href="https://www.keytek.co.uk/">UK’s largest national locksmith company</a>!.</td>
						<td class="is-narrow" style="border-bottom: 3px solid #77ad1a;border-left: 3px solid #77ad1a;border-right: 3px solid #77ad1a;">
							<i class="fa fa-check is-green is-center"></i>
						</td>
					</tr>

				</tbody>
			</table>
			<p class="is-center">*8 day course only. </p>
		</div>
</section>

<!-- Custom hero -->
<?php get_template_part('template-parts/custom-hero'); ?>


<!-- Secondary Content -->
<section class="hero">
<div class="hero-body">
	<div class="container secondaryPage-container" id="additional">
				<?php the_field('secondary_text'); ?>
	</div>
</div>
</section>

</main><!-- #main -->
</div><!-- #primary -->


<?php get_sidebar(); ?>
<?php get_footer(); ?>
