<?php
/**
 * Quote Section
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bulmapress
 */
?>
<!-- Quote Section -->
<a href="/keytek-locksmith-training-course-testimonials/">
<section id="quote-section" class="hero is-medium has-bg-img quote">
	<div class="hero-body">
		<div class="container has-text-centered w-850-center quote-container">
			<div class="tile is-center card-content ">
			<article style="padding: 10px;" class="tile is-child is-purple is-primary">
				<!-- Quote 1 -->
				<div id="content-1">
          	<p class="title has-text-white">"The assessment was well worked out, a great deal of hard work and thought has obviously gone into putting the Assessment together."</p>
          	<p class="subtitle has-text-white">- Colin Preston</p>
				</div>
        <!-- Quote 2 -->
				<div id="content-2">
					<p class="title has-text-white">"The Accreditation itself was well structured but still relaxed and it was great to meet other guys in the trade."</p>
					<p class="subtitle has-text-white">-  Terry Read</p>
				</div>
				<!-- Quote 3 -->
				<div id="content-1">
          	<p class="title has-text-white">"I have been trading as a locksmith in the Swansea area for over ten years, the skills, the know how, the knowledge, the training I got from the locksmith training course has been really vast.
						Craig & Tom, you are doing a sterling good job."</p>
          	<p class="subtitle has-text-white">- Robert Gundu</p>
				</div>
        <!-- Quote 4 -->
				<div id="content-2">
					<p class="title has-text-white">"Keytek™ are professional, organised and provide a relaxed learning environment, from start to finish you are treated like an adult. Guided through all aspects of the training and given the opportunity to ask relevant questions, both Instructors were exceptional throughout."</p>
					<p class="subtitle has-text-white">-  Carl Walker</p>
				</div>
      </article>
			</div>
		</div>
	</div>
</section>
</a>

<!-- Quote Section Script -->
<script >
var divs = $('div[id^="content-"]').hide(),
		i = 0;
(function cycle() {
		divs.eq(i).fadeIn(600)
							.delay(4000)
							.fadeOut(600, cycle);
		i = ++i % divs.length;
})();
</script>
