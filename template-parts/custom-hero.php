<?php
/**
 * Custom Hero
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bulmapress
 */
?>

<!-- Custom Quote Section -->
<section id="custom-hero" style="background-image: url(<?php the_field('image');?>)"; class="hero is-primary is-medium">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
        Medium title
      </h1>
      <h2 class="subtitle">
        Medium subtitle
      </h2>
    </div>
  </div>
</section>
