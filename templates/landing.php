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
						 <a class="button is-dark is-large m-b-10" href="/why-become-a-locksmith/">
	                <span>
	                  <strong>Read More</strong>
	                </span>
	            </a>
							<a class="button is-info is-large" href="tel:01202711195">
	                 <span>
	                   <strong>Call Now <i class="fa fa-phone" aria-hidden="true"></i></strong>
	                 </span>
	             </a>
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
								<svg id="keytek-ncfe-logos" xmlns="http://www.w3.org/2000/svg" width="auto" height="75px" version="1.2" baseProfile="tiny" viewBox="0 0 554.2 88.7">
				        <path fill="#333333" d="M214.7 67.2h-2.1c-5.3 0-9.5-.7-12.9-2.2-4.7-2.1-7.1-5.6-7.1-10.5V39.6c0-4.7 2.4-8.1 7.1-10.3 3.4-1.6 7.6-2.4 12.6-2.4h15.3c4.1 0 7.7.8 10.7 2.3 3.9 2 5.9 5 5.9 8.9v9.7c0 2.4-.8 3.7-2.3 3.7h-40.8c0 5.6 3.5 8.3 10.6 8.3H224c2 0 3 1.1 3 3.3v.8c0 2.2-1 3.3-3 3.3h-9.3zm21.5-23.5v-5c0-1.5-1.6-2.7-4.7-3.5-2.2-.6-4.3-.9-6.4-.9h-11.9c-8.2 0-12.4 1.6-12.4 4.7v4.6l35.4.1zM68.9 67.2h-2.1c-5.3 0-9.5-.7-12.9-2.2-4.7-2.1-7.1-5.6-7.1-10.5V39.6c0-4.7 2.4-8.1 7.1-10.3 3.4-1.6 7.6-2.4 12.6-2.4h15.3c4.1 0 7.7.8 10.7 2.3 3.9 2 5.9 5 5.9 8.9v9.7c0 2.4-.8 3.7-2.3 3.7H55.3c0 5.6 3.5 8.3 10.6 8.3h12.3c2 0 3 1.1 3 3.3v.8c0 2.2-1 3.3-3 3.3h-9.3zm21.5-23.5v-5c0-1.5-1.6-2.7-4.7-3.5-2.2-.6-4.3-.9-6.4-.9H67.4C59.2 34.4 55 36 55 39.1v4.6h35.4zm53.3 23.2v10.3c0 2.6-3.1 3.8-9.3 3.8h-6.7c-2.1 0-3.1 1.1-3.1 3.3v1c0 2.2 1 3.3 3.1 3.3h6.6c11.8 0 17.6-3.9 17.6-11.8V30.2c0-2.2-1-3.3-3-3.3h-2.1c-2.1 0-3.1 1.1-3.1 3.3v29.3H121c-6.2 0-9.7-1.5-9.7-4.6V30.2c0-2.2-1-3.3-3-3.3h-2.1c-2 0-3 1.1-3 3.3v24.7c0 8 6.2 12 18.5 12h22zm26.8-15.6c0 5.6 3.5 8.3 10.6 8.3h6.1c2 0 3 1.1 3 3.3v.8c0 2.2-1 3.3-3 3.3H182c-5.3 0-9.5-.8-12.9-2.2-4.7-2.1-6.9-5.6-6.9-10.5V34.6h-2.9c-2.1 0-3.1-1.1-3.1-3.3v-.9c0-2.2 1-3.3 3.1-3.3h2.9v-7.9c0-2.2 1-3.3 3-3.3h2.1c2 0 3 1.1 3 3.3v7.9h13c2.1 0 3.1 1.1 3.1 3.3v.9c0 2.2-1 3.3-3.1 3.3h-13l.2 16.7zm122.1 9.6c1.4.8 2.1 1.8 2.1 3.2 0 2-1.2 3-3.5 3h-2.6c-.5 0-.9-.1-1.4-.3l-28-15.2v12.2c0 2.2-1 3.3-3 3.3h-2.1c-2 0-3-1.1-3-3.3V19.3c0-2.2 1-3.3 3-3.3h2.1c2 0 3 1.1 3 3.3v23.3l27.7-15c.7-.3 1.1-.3 1.4-.3h2.4c2.3 0 3.5 1 3.5 3 0 1.4-.7 2.5-2.1 3.2L266.8 47l25.8 13.9zm-251.1 0c1.4.8 2.1 1.8 2.1 3.2 0 2-1.2 3-3.5 3h-2.6c-.5 0-.9-.1-1.4-.3l-28-15.2v12.2c0 2.2-1 3.3-3 3.3H3c-2 0-3-1.1-3-3.3V19.3C0 17.1 1 16 3 16h2.1c2 0 3 1.1 3 3.3v23.3l27.7-15c.7-.3 1.1-.3 1.4-.3h2.4c2.3 0 3.5 1 3.5 3 0 1.4-.7 2.5-2.1 3.2L15.7 47l25.8 13.9zm337.4 7l.7-41s11.3-4.4 21.5-4c10.3.4 16.5 3.9 17.3 6.8.8 2.9 2.6 7.9 2.4 22-.1 14.1 0 16.4 0 16.4h-15.2l1.2-25.8s.3-3.2-1.2-4.6c-1.5-1.4-9.2-2.2-10.9-.3l-.8 31.1-15-.6zM461 25.7v13.8s-3.7-4.3-9.6-4.1c-6 .2-11.5 4.5-11.5 10.7S444.7 57 450 56.9s10.5-3.5 11.6-4.7v13.2s-8.1 5-14 4.6c-6-.4-24.5-5.3-22.8-24.3s11.2-20.7 18.3-22c7.2-1.3 17.9 2 17.9 2zm3.8-2.3h6.8s-1.5-12.9 3.9-18S485.9 0 489.4 0s9.8 3.4 9.8 3.4l-.5 12.3s-2.1-2.9-5.2-2.9-7 1.2-6.8 4.4c.1 3.2-.1 6.2-.1 6.2h10.3l.2 12.9-8.8.1.1 31.6h-15.9l-.2-31.7-7.4-.1V23.4zm54.3 1C497.5 24.2 497 48 497 48c-.3 17.3 18.7 21.7 25.9 22 7.2.4 13.8-4 13.8-4l-.1-11.3c-1.3 1-5.4 4.3-13.5 4.1-8.1-.2-11.5-6.5-11.5-6.5h27s.6-2.3.6-6.5 1.5-21.1-20.1-21.4zm-7.3 19s2-6.4 7.7-6.4 6.4 6.4 6.4 6.4h-14.1z"/>
				        <circle cx="547.8" cy="64.1" r="6.3" fill="#333333"/>
				      </svg>
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
							This Eight Day Course will not only provide you with a
							comprehensive understanding and practical application
							of locksmith techniques, but on successful completion
							you will also be awarded a Level 4 NCFE Certificate in Locksmithing…
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
							The Five Day Course will
							provide you with a
							comprehensive understanding
							and practical application of
							locksmith techniques..
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
							The Keytek™ non-destructive entry
							and uPVC course covers all aspects
							of uPVC and wooden door lock
							identification and the correct tools
							to use...
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
							The Keytek™ non-destructive
							entry and uPVC course covers
							all aspects of uPVC and wooden
							door lock identification and the
							 correct tools to use, as well as...
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
							The Five Day Course will
							provide you with a
							comprehensive understanding
							and practical application of
							locksmith techniques..
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
							Being able to open a door quickly
							and without causing any damage
							is an essential locksmith skill, but
							it can be the confidence in the tools ..
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
						<th style="background-color:#77ad1a; border-top: 3px solid #77ad1a;border-left: 3px solid #77ad1a;border-right: 3px solid #77ad1a;"><img src="http://new.locksmiths-training.co.uk/wp-content/uploads/2017/11/keytek-academy-logo-white.png"></th>
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

<!-- Secondary Text Section -->
<section class="hero">
<div class="hero-body">
	<div class="secondaryPage-container">
		<div id="primary" class="content-area">
			<main id="main" class="site-main wrapper post has-text-centered" role="main">
				<p class="has-text-centered">
					<?php the_field('secondary_text'); ?>
				</p>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div>
</div>
</section>

</main><!-- #main -->
</div><!-- #primary -->


<?php get_sidebar(); ?>
<?php get_footer(); ?>
