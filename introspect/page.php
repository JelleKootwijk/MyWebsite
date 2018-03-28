<?php get_header(); ?>
		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">
					<div class="inner">	
						<h2><?= the_title();?></h2>
						<?php the_post();  the_content(); ?>
					</div>
				</div>
			</section>

<?php  get_footer(); ?>
  