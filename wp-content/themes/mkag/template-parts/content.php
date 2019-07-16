<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mkag
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-hero">
        <div class="entry-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <?php
						if ( is_singular() ) :
							the_title( '<h1 class="entry-title">', '</h1>' );
						else :
							the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
						endif;

						if ( 'post' === get_post_type() ) :
							?>
                        <div class="entry-meta white">
                            <span class="category caption">
                                <?php
								$category = get_the_category();
								echo $category[0]->cat_name;
								?>
                            </span>
                            <span class="date caption"><?php the_date('d.m.Y'); ?></span>
                        </div><!-- .entry-meta -->
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div><!-- .entry-header -->

        <?php wealthup_post_thumbnail(); ?>
    </div>

    <div class="entry-content">
        <div class="container-fluid">
            <?php
            if ( is_page_template( 'single-elementor.php' ) ) { ?>
                <?php
                the_content( sprintf(
                    wp_kses(
                        /* translators: %s: Name of current post. Only visible to screen readers */
                        __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'wealthup' ),
                        array(
                            'span' => array(
                                'class' => array(),
                            ),
                        )
                    ),
                    get_the_title()
                ) );

                wp_link_pages( array(
                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wealthup' ),
                    'after'  => '</div>',
                ) );
                ?>
            <?php 
            } else { ?>
            <div class="article-begin paragraph">
                <?php
                the_content( sprintf(
                    wp_kses(
                        /* translators: %s: Name of current post. Only visible to screen readers */
                        __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'wealthup' ),
                        array(
                            'span' => array(
                                'class' => array(),
                            ),
                        )
                    ),
                    get_the_title()
                ) );

                wp_link_pages( array(
                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wealthup' ),
                    'after'  => '</div>',
                ) );
                ?>
            </div>
            <?php
            }
            ?>

        </div>
    </div><!-- .entry-content -->
    
    <?php 
    $podcast_url = get_field('soundcloud_url');
    $podcast_name = get_field('soundcloud_name');
    if($podcast_url) : ?>
    <div class="the-podcast">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-sm-1 col-sm-10 offset-md-2 col-md-8">
                    <button type="button" class="btn btn-primary btn-block button-open-podcast icon left"
                        data-url="<?php echo home_url('/podcast-player/?id='.get_the_id()); ?>"
                        data-name="<?php echo $podcast_name; ?>">
                        <img src="<?php echo bloginfo('template_url');?>/assets/play.svg">
                        <?php echo $podcast_name; ?>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    
    <?php 
    $cta_event = do_shortcode('[event]');
    if($cta_event) : ?>
        <div class="container-fluid">
            <div class="row">
                <div class="offset-sm-1 col-sm-10 offset-md-2 col-md-8">
                    <?php// echo $cta_event; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
    
    <footer class="entry-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4 col-sm-6">
                    <div class="author-thumbnail">
                        <div class="thumbnail-container">
                            <?php 
						$author_id = get_the_author_meta('ID');
						$author_image = get_field('author_image', 'user_' . $author_id);
						if( !empty($author_image) ): ?>
                            <img src="<?php echo $author_image['url']; ?>" alt="<?php echo $author_image['alt']; ?>" />
                            <?php else: ?>
                            <img src="#">
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="author-meta">
                        <span class="caption green">Written by</span>
                        <?php
                        //$author_id = get_the_author_meta('ID');
                        $author_name = get_field('author_name');
                        if( !empty($author_name) ): ?>
                        <p><?php the_field('author_name'); ?></p>
                        <p class="small"><?php the_field('author_title'); ?></p>
                        <?php else: ?>
                        <p><?php the_author(); ?></p>
                        <?php endif; ?>
                    </div>
                    <?php //wealthup_entry_footer(); ?>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="author-meta">
                        <span class="caption green">Last updated on</span>
                        <p><?php echo get_the_modified_time('F jS Y'); ?>, <span
                                style="text-transform: uppercase;"><?php echo get_the_modified_time(); ?></span></p>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </footer><!-- .entry-footer -->

    <div class="section section-related-content">
        <div class="container-fluid">
            <div class="section-header">
                <h5>Also in
                    <?php
						$category = get_the_category();
						echo $category[0]->cat_name;
					?>
                </h5>
            </div>
            <div class="section-content-list">
                <div class="row">
                    <?php //$the_query = new WP_Query( 'posts_per_page=6', 'orderby=ASC' ); 
                        $args = array(
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'posts_per_page' => '3',
                                'order' => 'DESC',
                                'paged' => $paged+1,
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
            </div>
        </div>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->