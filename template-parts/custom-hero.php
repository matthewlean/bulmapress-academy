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
<section id="custom-hero" style="background-image: url(<?php the_field('hero-image');?>); background-size: cover;"; class="hero is-primary is-medium">
  <div class="hero-body">
    <div class="container">
      <h1 class="title has-text-weight-bold is-size-1">
        <?php the_field('hero-title'); ?>
      </h1>
      <h2 class="subtitle is-size-3">
        <?php the_field('hero-subtitle'); ?>
      </h2>
    </div>
  </div>
</section>
