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

		<?php

		bulmapress_custom_query(array(
			'post_type' => 'page',
			'post_class'	=> 'landing',
			'section_title' => 'Courses',
			'section_columns' => 4,
			'section_max_posts' => 4,
			'section_button_text' => 'See all Posts'
			)
		);
		
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
		<div class="container has-text-centered">
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
    </div>
  </div>
</section>

<section class=line-break>
</section>

<section class="hero is-medium">
		<div class="container">
      		<h1 class="title has-text-centered pad-top-40 green-bold">
        		How we compare to other courses?
      		</h1>
      	<div>
	<div class="comparison">
	  <table>
	    <thead>
	      <tr>
	        <th class="tl tl2"></th>
	        <th class="product" style="background:#77ad1a; border-top-left-radius: 5px; border-left:0px;">
	        	<img src="../wp-content/uploads/2017/10/keytek-academy-logo-white.png" style=" width:50px; height:20px;"> </img></th>
	        <th class="product" style="background:#77ad1a;">Product_2</th>
	      </tr>
	      <tr>
	        <!-- <th></th>
	        <th class="price-info">
	          <div class="price-now"><span>$ Price</span>
	            <p>  / year</p>
	          </div>
	        </th>
	        <th class="price-info">
	          <div class="price-now"><span>$ Price</span>
	            <p>  / year</p>
	          </div>
	        </th> -->
	      </tr>
	    </thead>
	    <tbody>
	      <tr>
	        <td></td>
	        <td colspan="3">item_1</td>
	      </tr>
	      <tr class="compare-row">
	        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
	        <td><i class="fa fa-check"></i>
	        </td>
	        <td><span>–</span></td>

	      </tr>
	      <tr>
	        <td> </td>
	        <td colspan="3">item_2</td>
	      </tr>
	      <tr>
	        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
	        <td><i class="fa fa-check"></i>
	        </td>
	        <td><span>–</span></td>
	      </tr>
	      </tr>
	      <tr>
	        <td> </td>
	        <td colspan="4">item_4</td>
	      </tr>
	      <tr>
	        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
	        <td><i class="fa fa-check"></i>
	        </td>
	        <td><span>–</span></td>
	      </tr>
	      <tr>
	        <td> </td>
	        <td colspan="3">item_5</td>
	      </tr>
	      <tr class="compare-row">
	        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
	        <td><span>–</span></td>
	       	<td><i class="fa fa-check"></i>
	      </tr>
	      <tr>
	        <td> </td>
	        <td colspan="4">item_6</td>
	      </tr>
	      <tr>
	        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
	        <td><span>–</span></td>
	        <td><i class="fa fa-check"></i>
	      </tr>
	      <tr>
	        <td> </td>
	        <td colspan="3">item_7</td>
	      </tr>
	      <tr class="compare-row">
	        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
	        <td><span>–</span></td>
	       	<td><i class="fa fa-check"></i>
	      </tr>
	      <tr>
	        <td> </td>
	        <td colspan="3">item_8</td>
	      </tr>
	      <tr>
	        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
	        <td><span>–</span></td>
	        <td><i class="fa fa-check"></i>
	        </td>
	      </tr>
	      <tr>
	        <td> </td>
	        <td colspan="3">item_9</td>
	      </tr>
	      <tr class="compare-row">
	        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
	        <td><span>–</span></td>
	        <td><i class="fa fa-check"></i>
	        </td>
	      </tr>
	      <tr>
	        <td> </td>
	        <td colspan="3">item_10</td>
	      </tr>
	      <tr>
	        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
	       	<td><span>–</span></td>
	        <td><i class="fa fa-check"></i>
	      </tr>
	      <tr>
	        <td> </td>
	      </tr>
	      <tr>
	        <td></td>
	        <td><a href="https://idc.wis.com.tw/contactUs?service=o365-email-security-solution" class="price-buy">button<span class="hide-mobile"></span></a></td>
	        <td><a href="https://idc.wis.com.tw/contactUs?service=o365-email-security-solution" class="price-buy">button<span class="hide-mobile"></span></a></td>
	      </tr>
	    </tbody>
	  </table>
	</div>
</section>

</main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
