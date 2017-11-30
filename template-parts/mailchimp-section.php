<?php
/**
 * Mailchimp Section
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bulmapress
 */
?>

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
						If you are considering taking a locksmith course with <a href="keytek.co.uk">Keytek™</a>
            and have any enquiries relating to funding, course content,
            special requirements or anything else, please let us know and
            we will gladly answer your questions for you.
					</p>
          <div class="field">
            <script>
              (function($) {
              $(document).ajaxComplete(function() {
              setTimeout(
              function()
              {
              $('.wpcf7-response-output').slideUp('slow');
              // change this value to make the popup show for more or less time
              }, 4000);
              });
              })(jQuery);
            </script>
              <?php echo do_shortcode( '[contact-form-7 id="576" title="Email Callback"]' ); ?>
    			</div>

			  </div>
			</div>
    </div>
  </div>
</section>
