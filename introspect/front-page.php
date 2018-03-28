<?php 
get_header();
?>
<!-- Banner -->
<section id="banner">
				<div class="inner">
					<h1><?php bloginfo( 'name' ); ?>: <span><?php bloginfo( 'description' );?></span></h1>
					<ul class="actions">
						<li><a href="#" class="button alt">Get Started</a></li>
					</ul>
				</div>
			</section>

		<!-- One -->
			<section id="one">
				<div class="inner">
					<header>
						<h2>Magna Etiam Lorem</h2>
					</header>
					<p>Suspendisse mauris. Fusce accumsan mollis eros. Pellentesque a diam sit amet mi ullamcorper vehicula. Integer adipiscin sem. Nullam quis massa sit amet nibh viverra malesuada. Nunc sem lacus, accumsan quis, faucibus non, congue vel, arcu, erisque hendrerit tellus. Integer sagittis. Vivamus a mauris eget arcu gravida tristique. Nunc iaculis mi in ante.</p>
					<ul class="actions">
						<li><a href="#" class="button alt">Learn More</a></li>
					</ul>
				</div>
			</section>

		<!-- Two -->


			<section id="two">
				<div class="inner">
					<?php 
						$args = array(
							'cat' => 4,
							'posts_per_page' => 3,
							'post_type' => 'post'
						);
						$post_query = new WP_Query($args);
						if($post_query->have_posts() ) {
							while($post_query->have_posts() ) {
								echo "<article>";
									echo "<div class='content'>";
										$post_query->the_post();
										?>
										<header>
											<h3><?php the_title(); ?></h3>
										</header>
										<div class="image fit">
											<img src="<?= get_field('two'); ?>" alt="">
										</div>
										<p><?php the_content(); ?></p>
										<?php
									echo "</div>";
								echo "</article>";
							}
						}
					?>
				</div>
			</section>

		<!-- Three -->
			<section id="three">
				<div class="inner">

					<?php 
						$args = array(
							'cat' => 3,
							'posts_per_page' => 3,
							'post_type' => 'post'
						);

						$post_query = new WP_Query($args);
						if($post_query->have_posts() ) {
							while($post_query->have_posts() ) {
								echo "<article>";
									echo "<div class='content'>";
										$post_query->the_post();
										?>
										<header>
											<h3><?php the_title(); ?></h3>
										</header>
										<?php the_content(); ?>
										<?php
										
									echo "</div>";
								echo "</article>";
							}
						}
					?>
				</div>
			</section>
			
<?php get_footer();?>