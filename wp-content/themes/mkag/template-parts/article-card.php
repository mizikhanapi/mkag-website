<?php $category = get_the_category(); ?>
<div class="col-md-4 article-col <?php echo $category[0]->slug; ?>">
    <div class="article-card">
        <?php if ( has_term('podcast','post-type' ) ) {?>
            <a href="" class="badge">Podcast</a>
        <?php }?>
        <div class="image">
            <?php 
				$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
			?>
            <a href="<?php the_permalink(); ?>" target="_blank" style="background-image: url(<?php echo $featured_img_url; ?>);"><img src="<?php echo $featured_img_url; ?>" alt="" /></a>
        </div>
        <div class="detail">
            <ul class="meta caption grey">
                <li class="date"><?php echo get_the_date('d.m.Y'); ?></li>
                <li class="category"><?php echo $category[0]->cat_name; ?></li>
            </ul>
            <h5 class="title blue"><a href="<?php the_permalink(); ?>" target="_blank" ><?php the_title(); ?></a></h5>
            <div class="text">
                <a href="<?php the_permalink(); ?>" target="_blank" ><?php the_excerpt(5); ?></a>
            </div>
            <div class="action">
                <a href="<?php the_permalink(); ?>" target="_blank" class="readmore">Read More <i class="fa fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</div>