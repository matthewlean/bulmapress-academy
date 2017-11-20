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

<section class="hero">
<div class="hero-body">
	<div id="course-tiles" class="container">
		<div class="columns is-desktop">
			<!-- Course 1 -->
			<div class="column is-half-desktop">
				<article class="tile is-child notification is-dark col-1-border-t">
					<!-- <p class="small green-highlighted-text">TOP COURSE</p> -->
					<h1 class="title has-text-weight-bold">8 Day - Level 4</h1>
					<p class="subtitle">‘Experience Package’</p>
					<div class="content">
						<p>
							This Eight Day Course will not only provide you with a
							comprehensive understanding and practical application
							of locksmith techniques, but on successful completion
							you will also be awarded a Level 4 NCFE Certificate in Locksmithing…
						</p>
						<p class="price">£2649 + VAT</p>
					</div>
					<a class="button is-green is-inverted is-outlined is-medium" href="keytek-8-day-level-4-experience-package/">View</a>
				</article>
			</div>
			<!-- Course 2 -->
			<div class="column is-quater-desktop">
		    <article class="tile is-child notification is-dark col-2-border-t">
					<p class="small green-highlighted-text">TOP COURSE</p>
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
						<p class="price">£2149 + VAT</p>
		      </div>
					<a class="button is-green is-inverted is-outlined is-medium" href="keytek-5-day-level-4-accredited-course">View</a>
		    </article>
		  </div>
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
						<p class="price">£495 + VAT</p>
		      </div>
					<a class="button is-green is-inverted is-outlined is-medium" href="keytek-two-day-non-destructive-entry-and-upvc-course">View</a>
		    </article>
		  </div>
		</div>
		<div class="tile is-ancestor">
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
						<p class="price">£399 + VAT</p>
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
						<p class="price">£299 + VAT</p>
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
						<p class="price">£295 + VAT</p>
						<a class="button is-green is-inverted is-outlined is-medium" href="keytek-1-day-non-destructive-entry-course">View</a>
					</div>
				</article>
			</div>
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

		<!-- Old Auto Display Post Section -->
		<?php
		// bulmapress_custom_query(array(
		// 	'post_type' => 'page',
		// 	'post_class'	=> 'landing',
		// 	'section_title' => 'Courses',
		// 	'section_columns' => 4,
		// 	'section_max_posts' => 4,
		// 	'section_button_text' => 'See all Posts'
		// 	)
		// );
		//
		// bulmapress_custom_query(array(
		// 	'post_type' => 'page',
		// 	'post_class'	=> 'pages',
		// 	'section_title' => 'Recent Pages',
		// 	'section_columns' => 4,
		// 	'section_max_posts' => 4
		// 	)
		// );
		?>

<!-- Quote Section -->
<?php get_template_part('template-parts/quote-section'); ?>

<!-- Download Pack Section -->
<?php get_template_part('template-parts/download-pack-section'); ?>


<div class="line-break">
</div>

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
						<th style="padding: 15px 50px; font-size: 18px;">Other Locksmith Courses</th>
					</tr>
				</thead>

				<tbody>

					<tr><td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
					<td class="is-narrow" style="border-left: 3px solid #77ad1a; border-right: 3px solid #77ad1a;">
						<i class="fa fa-check is-green is-center"></i>
					</td>
					<td class="is-narrow"><p>-</p></td></tr>

					<tr><td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
						<td class="is-narrow" style="border-left: 3px solid #77ad1a; border-right: 3px solid #77ad1a;">
						<i class="fa fa-check is-green is-center"></i>
					</td>
					<td class="is-narrow"><p>-</p></td></tr>

					<tr><td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
						<td class="is-narrow" style="border-left: 3px solid #77ad1a; border-right: 3px solid #77ad1a;">
						<i class="fa fa-check is-green is-center"></i>
					</td>
					<td class="is-narrow"><p>-</p></td></tr>

					<tr><td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
						<td class="is-narrow" style="border-left: 3px solid #77ad1a; border-right: 3px solid #77ad1a;">
						<i class="fa fa-check is-green is-center"></i>
					</td>
					<td class="is-narrow"><p>-</p></td></tr>

					<tr><td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
						<td class="is-narrow" style="border-left: 3px solid #77ad1a; border-right: 3px solid #77ad1a;">
						<i class="fa fa-check is-green is-center"></i>
					</td>
					<td class="is-narrow"><p>-</p></td></tr>

					<tr><td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
						<td class="is-narrow" style="border-left: 3px solid #77ad1a; border-right: 3px solid #77ad1a;">
						<i class="fa fa-check is-green is-center"></i>
					</td>
					<td class="is-narrow"><p>-</p></td></tr>

					<tr><td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
						<td class="is-narrow" style="border-left: 3px solid #77ad1a; border-right: 3px solid #77ad1a;">
						<i class="fa fa-check is-green is-center"></i>
					</td>
					<td class="is-narrow"><p>-</p></td></tr>

					<tr><td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
						<td class="is-narrow" style="border-left: 3px solid #77ad1a; border-right: 3px solid #77ad1a;">
						<i class="fa fa-check is-green is-center"></i>
					</td>
					<td class="is-narrow"><p>-</p></td></tr>


					<tr>
						<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
						<td class="is-narrow" style="border-bottom: 3px solid #77ad1a;border-left: 3px solid #77ad1a;border-right: 3px solid #77ad1a;">
							<i class="fa fa-check is-green is-center"></i>
						</td>
						<td class="is-narrow">
							<p>-</p>
						</td>
					</tr>

				</tbody>
			</table>
		</div>
	</section>

</main><!-- #main -->
</div><!-- #primary -->


<?php get_sidebar(); ?>
<?php get_footer(); ?>
