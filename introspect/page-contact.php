<?php
/*
Template Name: template for the contact page

*/
get_header(); ?>
		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">
                    <?php the_post();  the_content(); ?>
				</div>
			</section>

<?php  get_footer(); ?>
  