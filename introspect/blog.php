<?php 
/*
Template Name: page blog

*/

$blogPosts = new wp_query([
    'post_type' => 'post'
]);

$posts = $query->posts;

//
// foreach(blas as bla): 
// endforeach;
//

$items = [];

get_header(); ?>
    <!-- Main -->
        <section id="main" class="wrapper">
            <div class="container">

                <header class="major special">
                    <h2><?php the_title(); ?></h2>
                </header>
                <h1>er zijn <?= $query->post_count; ?> blog posts</h1>

                <?php foreach($blogPosts as $post):?>
                    <div class="blog-posts">
                        <h1>asdk</h1>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
<?php  get_footer(); ?>