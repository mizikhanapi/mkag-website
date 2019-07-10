<?php /* Template Name: Learn */
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main content-main">
        <?php// get_template_part( 'template-parts/featured-content' ); ?>



        <div class="section-latest-posts learn-page">
            <div class="container-fluid">
                <div class="article-list">
                    <div class="row list-row">

                        <?php //$the_query = new WP_Query( 'posts_per_page=6', 'orderby=ASC' ); 
                            $args = array(
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'posts_per_page' => '12',
                                'order' => 'DESC',
                            );
                            $the_query = new WP_Query( $args );
                        ?>
                        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                        <?php get_template_part( 'template-parts/article-card', get_post_format() ); ?>
                        <?php 
						endwhile;
						wp_reset_postdata();
					 ?>
                    </div>
                    <div class="row justify-content-md-center">
                        <div class="col-md-8">
                            <div class="article-list-action">
                                <button id="loadmore" class="btn btn-secondary btn-block">Show More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main><!-- #main -->
</div><!-- #primary -->

<script>
var ajax_nonce = '<?php echo wp_create_nonce("fetch_articles"); ?>';
</script>

<?php
get_footer();