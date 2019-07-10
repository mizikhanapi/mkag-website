<?php /* Template Name: Learn */
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main content-main">
        <?php get_template_part( 'template-parts/featured-content' ); ?>

        <div class="section section-article-search">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                        <div class="article-search-form">
                            <form action="<?php esc_html(get_permalink());?>" method="get">
                                <div class="form-group search-type">
                                    <select name="type" id="" class="form-control select-arrow">
                                        <option value="all">All Post Types</option>
                                        <?php 
                                        $types = get_terms(array(
                                            'taxonomy' => 'post-type',
                                            'parent' => 0
                                        ));
                                        foreach ($types as $item):
                                            $plural_name = get_field('plural_name', $item);
                                            ?>
                                            <option value="<?php echo $item->term_id; ?>"><?php echo $plural_name ? $plural_name : $item->name; ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="form-group search-input">
                                    <input type="search" name="search" id="" class="form-control" placeholder="Search" value="">
                                    <span class="button-submit"></span>
                                </div>
                                <div class="form-group search-clear">
                                    <button type="button" class="btn btn-secondary btn-block button-clear">Clear All</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="filter-wrapper">
                    <ul class="filter-list">
                        <?php 
                        $args = array(
                            'orderby' => 'name',
                            'hide_empty'=> 0,
                        );
                        $categories = get_categories($args);
                        foreach ($categories as $item) : ?>
                            <li><button type="button" class="btn btn-small btn-outline filter-item" data-target="<?php echo $item->term_id;?>"><?php echo $item->name ;?></button></li>
                        <?php endforeach; ?>
                    </ul>
                </div>

            </div>
        </div>

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