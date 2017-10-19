<?php
/**
 * Template name: Landing
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
		      <h1 class="title">
						Locksmith Training
			     </h1>
		      <h2 class="subtitle">
			        securing your future
			     </h2>
					 <a class="button is-dark is-large" href="/">
                <span>
                  <strong>Learn More</strong>
                </span>
            </a>
						<a class="button is-light is-large" href="/">
                 <span>
                   <strong>Apply Now <i class="fa fa-check-circle-o fa-3x" aria-hidden="true"></i></strong>
                 </span>
             </a>
		    </div>
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
	<div class="container">
		<div class="tile is-ancestor">
			<!-- Course 1 -->
			<div class="tile is-parent is-6">
				<article class="tile is-child notification is-dark col-1-border-t">
					<p class="small green-highlighted-text">TOP COURSE</p>
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
					<a class="button is-green is-inverted is-outlined is-medium">View</a>
				</article>
			</div>
			<!-- Course 2 -->
			<div class="tile is-parent is-3">
		    <article class="tile is-child notification is-dark col-2-border-t">
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
					<a class="button is-green is-inverted is-outlined is-medium">View</a>
		    </article>
		  </div>
			<!-- Course 3 -->
		  <div class="tile is-parent is-3">
		    <article class="tile is-child notification is-dark col-3-border-t">
		      <p class="title has-text-weight-bold">2 Day - Level 4</p>
		      <p class="subtitle">‘Non Destructive Entry & uPVC’</p>
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
					<a class="button is-green is-inverted is-outlined is-medium">View</a>
		    </article>
		  </div>
		</div>
		<div class="tile is-ancestor">
			<!-- Course 4 -->
			<div class="tile is-parent is-3">
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
					<a class="button is-green is-inverted is-outlined is-medium">View</a>
				</article>
			</div>
			<!-- Course 5 -->
			<div class="tile is-parent is-3">
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
					<a class="button is-green is-inverted is-outlined is-medium">View</a>
				</article>
			</div>
			<!-- Course 6 -->
			<div class="tile is-parent is-3">
				<article class="tile is-child notification is-dark col-4-border-t">
					<p class="title has-text-weight-bold">1 Day - Non Destructive</p>
					<!-- <p class="subtitle">Subtitle</p> -->
					<div class="content">
						<p>
							Being able to open a door quickly
							and without causing any damage
							is an essential locksmith skill, but
							it can be the confidence in the tools ..
						</p>
						<p class="price">£295 + VAT</p>
						<a class="button is-green is-inverted is-outlined is-medium">View</a>
					</div>
				</article>
			</div>
			<!-- All Courses -->
			<div class="tile is-parent is-3">
				<article class="tile is-child notification box">
					<div class="All-courses" style="display:flex;justify-content: center;align-items: center;height: 100%;">
						<!-- <p class="subtitle">Subtitle</p> -->
						<div class="content has-text-centered">
							<p class="title has-text-weight-bold">All Courses</p>
							<a class="button is-green is-inverted is-outlined is-medium">View All</a>
						</div>
					</div>
				</article>
			</div>
		</div>
	</div>
</div>
</section>

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

<section class="hero is-medium has-bg-img quote">
	<div class="hero-body">
		<div class="container has-text-centered w-850-center">
			<div class="tile is-center card-content ">
			<article class="tile is-child notification is-primary">
          	<p class="title">"The assessment was well worked out, a great deal of hard work and thought has obviously gone into putting the Assessment together."</p>
          	<p class="subtitle">- Colin Preston</p>
        	</article>
			</div>
		</div>
	</div>
</section>

<section class="hero is-medium">
  <div class="hero-body">
    <div class="container">
      <h1 class="title has-text-centered">
        Interested in becoming a locksmith?
      </h1>
			<p class="field has-text-centered">
		  <a class="button is-info is-outlined is-medium">
		    <span class="icon">
		      <i class="fa fa-sign-in"></i>
		    </span>
		    <span>Sign Up</span>
		  </a>
		  <a class="button is-success is-outlined is-medium">
		    <span class="icon">
		      <i class="fa fa-download"></i>
		    </span>
		    <span>Download our info pack</span>
		  </a>
			<p class="field has-text-centered m-t-10">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit.
			</p>
    </div>
  </div>
</section>

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
						<th style="background-color:#77ad1a; border-top: 3px solid #77ad1a;border-left: 3px solid #77ad1a;border-right: 3px solid #77ad1a;"><img src="http://localhost/wordpress/wp-content/uploads/2017/10/keytek-academy-logo-white.png"></th>
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
