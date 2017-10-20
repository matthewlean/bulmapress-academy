<?php
/**
 * Template name: Course
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
				        "Experience Package"
				     </h2>
						 <p class="has-text-white has-text-weight-bold is-size-4 pad-bot-20">
							 This Eight Day Course will not only provide you with a
								comprehensive understanding and practical application
						</p>
							<a class="button is-green-fill is-large" href="/">Apply Now</a>
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
<div class="hero-foot">
	<div class="container">
		<nav class="tabs is-boxed" role="navigation">
			<?php bulmapress_sub_navigation(); ?>
		</nav>
	</div>
</div>

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

<!-- Newsletter Section -->
<section id="newsletter" class="hero is-neon-green">
  <div class="hero-body">
		<div class="container">
			<p class="is-center has-text-centered m-b-20">For more information on timings and to register<br> attendance, please contact us.</p>
		</div>
    <div class="container is-narrow">
      <!-- Begin MailChimp Signup Form -->
      <div id="8DayLevel4" class="columns is-vcentered">
        <div class="column is-one-third is-left is-center">
					<a class="button is-white is-inverted is-outlined is-large">01202 7111 95</a>
        </div>

    <div class="column">
			<div class="field">
				<p class="control has-icons-left has-icons-right has-addons" style="height: 48px;">
					<input class="input is-medium" type="text" style="height: 48px;font-size: 20px;" placeholder="Email Address"><button style="height: 48px;font-size: 20px;" class="button is-white is-inverted is-outlined is-medium">Submit</button>
			    <span class="icon is-small-medium is-left is-center">
			      <i class="fa fa-envelope"></i>
			    </span>
			  </p>
			</div>
		</div>

    </div>
  </div>
	</div>
</section>

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

<section class="hero is-medium has-bg-img quote">
	<div class="hero-body">
		<div class="container has-text-centered w-850-center">
			<div class="tile is-center card-content ">
				<article class="tile is-child notification is-primary">
					<div class="container">
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
					</div>
	      	<p class="title">"The Assessment was well worked out!"</p>
	        <p class="subtitle">- Colin Preston</p>
	      </article>
			</div>
		</div>
	</div>
</section>

<section class="hero">
<div class="hero-body">
	<div class="container" id="additional">
				<h1>Additional 8 Day Course Information</h1>
				<h2 class="m-tb-20">Skill Enhancement Sessions</h2>
				<p>These one on one sessions can be used as time to develop your techniques as a locksmith, it will give you the opportunity to hone your skills and to go back over anything you have learnt over the previous week.</p>
				<h2 class="m-tb-20">Real Life Scenario Training</h2>
				<p class="m-tb-20">These training sessions are conducted within the practical training areas of the Academy, where commonly found scenarios will be played out. Using your new skills you will be faced with several different scenarios that any mobile locksmith will encounter whilst out on the road. These may include:</p>
				<p>
					<ul>
						<li>Various scenarios to gain entry to uPVC and wooden doors following a lock out, using a wide variety of techniques</li>
						<li>Following a break in, offering relevant security advise to the customer</li>
						<li>Upgrading home security, including doors and windows</li>
						<li>Removing snapped keys from a variety of locks</li>
						<li>Identifying faults on uPVC mechanisms and ordering replacement parts</li>
						<li>Gaining entry to a vehicle, when keys have been lost or locked inside</li>
					</ul>
				</p>
				<h2 class="m-tb-20">On-site Locksmith Shadowing</h2>
				<p>This is a unique opportunity to shadow an experienced locksmith on the road whilst he completes Keytek™ customer jobs, giving you an insight into the types of jobs that you will come across on a daily basis as a locksmith, witnessing first hand the techniques that you will have learnt being put into practice. This is also an ideal time to ask any questions of the locksmith that you may have.</p>
				<div class="google-maps m-t-40">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2524.653878715499!2d-1.9521893485264126!3d50.74490817941667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4873a1514d6200c5%3A0xd94f650518a220a!2sKeytek+Locksmith+Training+Academy!5e0!3m2!1sen!2suk!4v1508423974149" width="400" height="70" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
	</div>
</div>
</section>

<section class="hero is-medium is-dark is-bold">
  <div class="hero-body">
    <div class="container">
			<div class="columns">
			  <div class="column is-center hide-mobile">
					<svg version="1.2" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
							 x="0px" y="0px" width="200px"; height="200px;" viewBox="0 0 170 150" overflow="scroll" xml:space="preserve">
						<g>
							<path fill-rule="evenodd" fill="#FFFFFF" d="M13.2,50.6l17.5-13.1V5.9h104.7v31.8l18.3,12.9c0.3,0,0.7,0.2,0.7,0.4
								c0.6-0.1,1.4,0.2,1.8,1c0.5,0.3,0.8,0.8,0.9,1.1c0.5,0.7,0.8,1.7,0.8,3.1v84c0,1.7-0.4,3.4-1.7,4.2c-0.8,1.2-2.6,1.7-3.8,1.7H14.9
								c-1.7,0-3-0.4-4.3-1.7c-0.8-0.8-1.7-2.5-1.7-4.2v-84c0-1.6,0.4-2.5,1.1-3.2c0.1-0.4,0.3-0.7,0.5-1c0.5-0.8,1.4-1.1,2.3-1
								C13.1,51,13.2,50.9,13.2,50.6L13.2,50.6z M35.8,33.6L35.8,33.6v39.1l17.8,17.4L84,118.7l46.5-45.5V34V11.1H35.8V33.6z M14.1,138.1
								L14.1,138.1l45-35.5l-8.7-8.5L30.7,75.3v-0.5L14.1,58.7V138.1z M62.9,106.3L62.9,106.3L18.4,141h130.5L104.4,106l-17.2,16.8
								l-1.1,1.1c-0.1,0.2-0.2,0.5-0.4,0.8c-0.2,0.2-0.5,0.3-0.8,0.4L84,126l-0.7-0.7c-0.3,0-0.5-0.1-0.8-0.2h-0.1V125h-0.1h-0.1v-0.1
								h-0.1v-0.1h-0.1v-0.1h-0.1L62.9,106.3z M17.2,54.5L17.2,54.5l13.5,13.2v-24L17.2,54.5z M107.9,102.6L107.9,102.6l45.1,35.1V58.7
								L107.9,102.6z M135.4,68.8L135.4,68.8l14.8-14.4l-14.8-10.7V68.8z"/>
						</g>
					</svg>
			  </div>
			  <div class="column is-vcentered">
			    <h1 style="font-size: 2em!important; font-weight: 600!important;">Mailing List <i class="fa fa-envelope-o" aria-hidden="true"></i></h1>
					<p class="m-tb-20 is-white">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit
						Vivamus efficitur felis erat, et efficitur nisl semper et.
						Praesent nec mi.
					</p>
					<div class="control has-addons">
					  <input class="input is-medium" type="text" placeholder="Email Address"><button class="button is-medium is-green-fill">Submit</button>
					</div>
					<p class="has-text-grey">Powered by Mailchimp
					<svg version="1.2" baseProfile="tiny" id="Layer_1" width="25px"; height="25px;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
							 x="0px" y="0px" viewBox="0 0 500 500" overflow="scroll" xml:space="preserve">
						<g>
							<path fill="#684C46" d="M480.5,356.9c-0.4,1.3-37,142.2-181.1,142.1c-124.5,0-183.5-108.3-183.5-108.3c-9.1,0.5-17.8-0.9-25.9-3.9
								c-36.5-13.4-54.1-55.2-41.5-90.3l-20.1-15.3C-49.3,222,171-49.1,248.9,12.2c0.4,0.3,18.6,15,18.6,15c28-17,55.7-26.2,78.2-26.2
								c16,0,29.4,4.6,38.4,14.4c20.2,21.9,13,63.7-14.7,106c5.9,5.6,10.9,13.3,14.4,20.9c8.8,6.8,14.5,17.1,17.3,31.3
								c3.1,15.8,3.8,38.3,5.8,48c7.4,3.4,4.3,1.8,12.2,5.8c8.3,4.1,18.4,9.2,29.5,19.9c19.8,5,27.4,26,15.8,40.4c-0.3,0.4-1.7,2-3.2,3.7
								c0.3,0.9,4.1,7.1,6.9,19.6c8.2,1.9,14.7,7,18.2,14.3C492.2,339.6,480.5,356.9,480.5,356.9z M423.4,463.3v5.9h2.3v-5.9h2.3v-1.9
								h-6.8v1.9H423.4z M428.7,461.4v7.8h2.1v-5.6l1.7,5.6h1.8l1.7-5.6v5.6h2.1v-7.8h-3.2l-1.4,4.5l-1.4-4.5H428.7z"/>
							<path fill="#F5DCBA" d="M145.3,303.8L145.3,303.8L145.3,303.8c3.1-8,4.7-14.5,4.7-14.5c3.6,11,5.4,22.5,4.7,34.2l0,0l0,0
								c3-4,6.2-11.4,6.2-11.4c5.5,32.6-18.3,62.4-49.6,62.4c-27.8,0-50.4-23.7-50.4-53c0-29.3,22.6-53,50.4-53c7.2,0,14.1,1.6,20.3,4.5
								C131.6,272.9,142.3,278.3,145.3,303.8z M419.5,418.8c39.1-30.7,45.9-67.7,46.5-68.9c9.6-11.5,7-22.9-5.7-22.9c-4,0-7.1,1.1-7.1,1.1
								s0-16.8-7.7-29.9c-6,6.7-22.6,20.1-44.5,30.5c-20.5,9.7-47.8,18.2-81.7,19.4h0c-9.5,0.4-15.4-1.1-18.7,9.9
								c-1.1,3.9-0.6,9.7,0.2,11.4c2.7,9.2,9.7,13.2,18.8,15.3c7,1.6,14.4,1.8,14.4,1.8c68.7,1.9,123.9-51.7,124.5-52.1
								c0.6-0.5,1.2-1.1,1.2-1.1s-0.6,1.4-0.7,1.6c-9.9,22.3-67.4,62.8-124.6,61.6l-0.2,0.1c-13.3-0.1-29.4-3.5-37.8-13.9
								c-13.3-16.4-6.4-43.8,14.7-44.4c0,0,4.9-0.1,7-0.2c52.3-1.6,99.2-20.8,132.9-61c4.6-5.7-0.5-13.6-10.6-13.9c-0.1,0-0.2,0-0.2-0.1
								c-11.9-12.7-22.3-17.2-31.6-21.9c-19.5-9.9-17.6-1.4-22.2-49.5c-1.2-13-3.7-30.7-15.1-37.4c-3-1.8-6.3-2.5-9.6-2.5
								c-3.3,0-5,0.7-5.6,0.8c-6.2,1.4-9.8,4.9-14.2,9c-21,19.4-37.8,14.1-62.9,13.9c-23.5-0.2-44.3,16.2-48.3,41.4l0,0
								c-1.9,13.2-0.7,26.6,1.4,32.6c0,0-6.4-4.2-9.4-8c3.7,23,24.7,38.1,24.7,38.1c-3.3,0.8-8.1,0.4-8.1,0.4c0,0,12,9.5,22.4,12.8
								c-2.7,1.7-16.4,15.2-23.5,33.8c-6.6,17.4-3.9,38.3-3.9,38.3l5.7-8.6c0,0-3.7,19.1,3.5,37.5c2.4-5.5,7.7-15.3,7.7-15.3
								s-0.8,20.5,9,37.3c0.3-3.9,1.7-13.7,1.7-13.7s5.7,17.5,18.7,29.7C305.4,453.6,370.1,457.6,419.5,418.8z"/>
							<path fill="#0788BF" d="M56.1,281.6c-0.2-0.1-19-13.8-21.6-18.4c-15.8-26.6,11.7-81.4,31.2-112.5C114,74,194.4,13.3,230.9,22
								l37.5,19.4c-14.6,8.6-28.6,19.1-37.1,26.1l-8,6.7c0,0-23.3,15.7-34.9,25.6c-46.5,39.6-92.2,101-109.2,160.2
								C79.3,259.9,65.3,266.8,56.1,281.6z"/>
							<path fill="#46B8E3" d="M230.9,22L230.9,22C194.4,13.3,114,74,65.7,150.8c0,0,0,0,0,0.1l0.2,0l38.5,30.3
								c42.3-67.1,95.4-101.7,96.9-102.7l-6.1-41.1l11.4-5.5l22.9,7.4l-1.8-7.7L230.9,22L230.9,22z"/>
							<path fill="#FFD14F" d="M268.4,41.3l-37.1,26.1l-2.6,2l-32.9-26.9l-0.8-5.1l11.4-5.5c0.6,0.2,22,7.1,22.9,7.4l0.4-14.2l1.1-3.2
								l10-3.8C240.9,18.1,268.3,41.3,268.4,41.3z"/>
							<g>
								<path fill="#122030" d="M341.5,15.7c-24.5,0-52,12.9-73.2,25.6c-3,1.7-5.9,3.6-8.8,5.4l-11-9.3l4,13.9c-1.5,1-3,2.1-4.4,3.1
									l-22.8-7l15.1,12.6c-3.4,2.6-6.5,5.1-9.1,7.2l-36.2-29.9l1.9,13.4l26.3,23.2c0,0-23.3,15.7-34.9,25.6
									c-46.5,39.6-92.2,101-109.2,160.2l1-0.5c0.1-0.1,0.3-0.1,0.4-0.2c0.5-0.3,0.9-0.5,1.4-0.7c0.3-0.2,0.6-0.3,0.9-0.5
									c0.5-0.2,1-0.4,1.5-0.7c0.3-0.1,0.6-0.3,0.9-0.4c0.5-0.2,1.1-0.4,1.6-0.6c0.2-0.1,0.5-0.2,0.7-0.3c0.8-0.3,1.5-0.5,2.3-0.8
									c11.5-3.4,27.2-5.7,45.6,2.1c9.2-23.3,20.2-46.9,37.6-69.7c14.1-18.4,27.6-34.9,43.9-44c30.8-28.9,113.7-59.5,140.2-33
									c6.3-10.3,11.7-20,16.2-32.2C384.4,49.3,384.6,15.7,341.5,15.7z"/>
								<polygon fill="#122030" points="236.3,41.6 230.9,22 227.7,31.8 229.6,39.5 		"/>
							</g>
							<path fill="#FFFFFF" d="M453.2,328c0,0,0-16.8-7.7-29.9c-6,6.7-22.6,20.1-44.5,30.5c-20.5,9.7-47.8,18.2-81.7,19.4h0
								c-9.5,0.4-15.4-1.1-18.7,9.9c-0.3,1-0.4,2-0.5,3.1l0,0.1c0,0,0,0,0,0c0,0.4-0.1,0.7-0.1,1.1c0,1,0,1.9,0,2.7c0,0,0,0,0,0.1
								c0,0.1,0,0.1,0,0.2c0,0.5,0.1,1,0.1,1.4c0,0,0,0,0,0.1c0,0,0,0,0,0.1c0.2,1.8,0.6,2.6,0.6,2.7c0,0,0,0,0,0l0,0.1
								c2.7,9.1,9.7,13.1,18.8,15.2c7,1.6,14.4,1.8,14.4,1.8c56.1,1.6,103.1-33.8,118.9-47.1C453.2,335.5,453.3,332.9,453.2,328z
								 M292.2,28.6c13.4-6.2,27.7-11.1,41.5-12.5c-13.7,3.1-30.3,10.2-50.1,22.2c-0.5,0.3-46.7,31.5-75,59.5
								c-15.4,15.3-77.2,89.4-77.1,89.3c11.3-21.4,18.7-31.9,36.6-54.4c10.1-12.7,20.9-25.1,32-36.5c3.7-3.8,7.5-7.6,11.2-11.2l0,0l0,0
								C212.7,83.8,245,50.7,292.2,28.6z"/>
							<path fill="#EABE8D" d="M419.5,418.8c-6.7,5.3-13.7,9.7-20.8,13.5c-16.5-6.3-26.6-19.6-26.6-19.6s14.2-3.3,33.1-13
								c23-11.7,44.5-28.6,60.9-49.8C465.3,351.2,458.5,388.1,419.5,418.8z M374.5,240.6c-8-5.7-21.2-1.2-24.1,8.2
								c4.6,0.2,9.5,3.7,9.2,8.2c3.3-3.2,7.9-4.9,12.4-4.9C369.9,248.7,371,242.7,374.5,240.6z M290.8,355.3c2.5-9.4,9.6-16.8,20.5-17.1
								c0,0,4.9-0.1,7-0.2c52.3-1.6,99.2-20.8,132.9-61c4.6-5.7-0.5-13.6-10.6-13.9c0,0-0.1,0-0.1,0c-1.7,1.8-2,5.1-4.8,10
								c-10.2,17.8-24.4,25.9-43.2,35.3c-57.8,28.8-87.8,15.4-99.8,33C289.2,346.6,289.1,352.4,290.8,355.3
								C290.8,355.3,290.8,355.3,290.8,355.3z M395.4,234.6c-5.5-4-5.7-10.9-8.7-42.9c-1-10.2-2.7-23.3-8.9-31.8c-1.3-1.1-3.1-2.4-5.7-2.4
								c-3.9-0.2-8.4,3.9-10.9,6.7c-7.2,10.4-14,17-26.2,22.8c-12.3,5.6-23.9,7.6-36.1,7.2c-8.9-0.3-16.6-1.7-24.2-1.8
								c-14.1-0.2-26.3,4.4-35.2,15.6c-6.1,7.7-8.6,15.9-9.3,25.6c0,1.2,0.1,2.3,0.1,3.3c0.1,1.5,0.2,3,0.4,4.4c0.6,4.9,1.5,7.5,1.5,7.5
								c0,0,0,0.1,0,0.1c0.1,0.2,0.1,0.5,0.2,0.7c0,0-6.4-4.2-9.4-8c3.1,19.2,18.2,32.9,23.1,36.9c0.3,0.2,0.6,0.4,0.9,0.7
								c0,0,0,0,0.1,0.1c0.4,0.3,0.6,0.5,0.6,0.5c-3.3,0.8-8.1,0.4-8.1,0.4c0,0,12,9.5,22.4,12.8c13.8-11.7,29.4-16.1,42.3-17.5
								c7.8-4.8,16.1-9.6,25.1-14.1c-2.7-16.9,12.3-34,31.2-35.6c14.3-1,21.2,5.4,26.2,12.2c2.7-0.9,5.8-1.8,9.2-2.8
								C395.6,234.9,395.5,234.7,395.4,234.6z M402.2,348.6c-0.1,0-0.3,0-0.5,0.1c-5.7,1.3-64.4,24.1-101.6,12.4c-0.2,2-0.1,6.3,0.7,8.2
								c0,0,0,0,0,0c5.6,1.1,12.7,1.8,21,1.8C370.7,371.2,405.9,348.9,402.2,348.6z M128.8,344.1C128.8,344.1,128.9,344.1,128.8,344.1
								c3-3.2,4.3-7.7,3.6-12c-1.1-6.1-8.1-7.4-12.7-12.2c-0.1-0.1-0.1-0.2-0.2-0.2c-0.1-0.1-0.2-0.2-0.2-0.3c0,0,0,0,0,0
								c-2.1-2.4-2.8-5.1-2.6-7.5c0.4-6.3,6-8.1,8.9-6.9c0,0,3.4,0.8,6.1,4.5c0,0,0,0,0,0c-0.4-1.2-0.3-3.2-2.4-6.2
								c-3.4-4.9-11.3-9.8-22.4-7.4h0c-2.1,0.4-0.9,0.2-2.9,0.8c-0.3,0.1-0.6,0.2-0.9,0.3c-0.6,0.3-1.2,0.5-1.8,0.8l0,0
								c-0.3,0.2-2,0.9-4,2.4C84.6,316.4,105.9,345.8,128.8,344.1z"/>
							<path fill="#9C7356" d="M313.6,244.5c1.1,1.5,1.3,2.7,0.9,3.2c-0.9,1-3.9-0.3-8.4-2.1c-11.5-4.3-20-4.9-35,0.7
								c-3.8,1.4-6.5,2.6-7.8,2.4c-2.1-0.3-0.1-4.2,4.5-7.9c9.3-7.4,22-9.7,32.8-5.6C305.5,236.9,310.9,240.4,313.6,244.5z M311.4,256.3
								c-3.2-2.4-9-4-15-3c-1.3,0.2-2.4,0.6-3.6,0.9c-0.4,0.1-0.8,0.3-1.2,0.4c-2.5,1.1-4.7,2.2-6.7,4.2c-2.4,2.3-3.1,4.5-2.4,5
								c0.7,0.5,2.3-0.3,4.9-1.3c8.6-3.6,14.7-3.7,20.5-3.3c2.8,0.2,4.7,0.4,5.1-0.4C313.3,258.3,312.7,257.3,311.4,256.3z M125.9,300.4
								L125.9,300.4L125.9,300.4c1.4,1.1,2.5,2.3,3.3,3.5c2.6,3.8,1.8,5.9,2.9,7c0.4,0.4,1,0.5,1.5,0.3c1.5-0.6,2.2-3,2.4-4.7l0,0l0,0l0,0
								c0.4-4-1.7-8.5-4.5-11.7l0,0l0,0l0,0c-1.7-2-4-3.9-6.7-5.4c-2.7-1.5-5.8-2.6-9.3-3.2c-5.9-0.9-11.8,0.3-13.4,0.7l0,0
								c-0.8,0.2-1.9,0.5-2.8,0.8c-9.7,3.8-16.1,10.7-18.9,19.9l0,0l0,0c-1,3.5-1.5,6.9-1.5,10c0,2.7,0.3,5.2,0.8,7.4v0l0,0l0,0
								c0.8,3.7,2.5,8,5.1,10.7l0,0l0,0l0,0c3.3,3.5,6.9,2.9,5.3-0.4c-0.4-0.9-2.3-4.6-2.6-11.4c-0.2-4.4,0.4-9,2.1-13.2
								c0.9-2.3,2.1-4.5,3.7-6.5c3.3-4,7.3-5.8,7.8-6.1l0,0c0.6-0.3,1.2-0.5,1.8-0.8c0.2-0.1,0.5-0.2,0.9-0.3c2-0.6,0.9-0.3,2.9-0.8h0
								C114.5,294.8,121.2,296.6,125.9,300.4z M124.2,315.4c-1.1-0.8-1.6-1.6-1.9-2.7c-0.4-2-0.2-3.2,1.5-4.4c1.3-0.9,2.4-1.4,2.4-1.9
								c0.1-1.1-4.4-2.2-7.5,0.9c-2.6,2.8-3.4,8.5,0.7,13c4.6,5,11.8,6.1,12.9,12.4c0.1,0.9,0.3,1.9,0.2,2.8c0,1.1-0.4,2.7-0.4,2.8
								c-1.4,6-7.1,11.8-16.6,10.3c-1.7-0.3-2.9-0.5-3.2,0c-0.7,1,3.3,5.6,10.7,5.5c7.3-0.2,14.5-5.6,16.8-13.7c0-0.1,0.7-2.4,0.8-4.5
								c0.1-1.5,0-3.1-0.3-4.8C138.5,320.6,128.1,318.5,124.2,315.4z M377,240.6c-2.9-0.4-5.7,2.4-6.3,6.3c-0.6,3.9,1.2,7.5,4.1,7.9
								s5.7-2.4,6.3-6.3C381.7,244.6,379.9,241,377,240.6z M345.5,252c-1.6,2.9,0.3,7,4.3,9.1c3.9,2.2,8.4,1.6,10-1.3
								c1.6-2.9-0.3-7-4.3-9.1C351.6,248.6,347.1,249.2,345.5,252z M230.1,135.7c54.2-35.2,108.4-39.2,127-24.9c0,0,0,0,0,0
								c0-0.1-0.3-0.9-0.4-1.1l0,0c-4.7-10-15.7-17-25.5-19.8c1.7,1.8,4.2,5.1,5.2,7c-7.4-5.1-17.2-9.6-27.5-11.7c0,0,1.2,0.9,1.4,1.1
								c2,1.9,4.8,4.9,5.9,7.5c-9.8-3.9-22.2-6.1-32.8-4.1c-0.1,0-1.3,0.3-1.3,0.3s1.4,0.3,1.7,0.4c3.5,1,8.5,3.2,10.7,6.1
								c-17.6-3.1-37,0.3-47.4,6.2c1.3-0.1,1.3-0.1,2.5,0c3.8,0.1,11.6,0.6,14.8,2.7c-11.1,2.3-27.2,7.2-35.8,14.7
								c1.5-0.2,10.2-1.3,13.7-0.7c-47.6,27.2-69.3,68.4-69.3,68.4l0,0C187.1,169.4,205.3,151.8,230.1,135.7z"/>
							<path fill="#684C46" d="M358.1,212.5c-0.1-3.7,0.5-9.9,4-11.1l0,0c0,0,0,0,0,0l0,0c6-2.1,14,13.3,14.3,27
								c-4.8-2.4-10.3-3.4-16.1-2.9C359,221.2,358.3,217,358.1,212.5z"/>
						</g>
					</svg>
					</p>
			  </div>
			</div>
    </div>
  </div>
</section>


</main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
