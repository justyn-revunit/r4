<?php
/*
The Default Loop (used by index.php and archive.php)
=====================================================

If you require only post excerpts to be shown in index and archive pages, then use the [---more---] tag within blog posts to cut content.

If you require different templates for different post types,
then simply duplicate this template, save the copy as, e.g. "content-aside.php",
and modify it the way you like it.
(The function-call "get_post_format()" within index.php, category.php and single.php will redirect WordPress to use your custom content template.)
 
*/
?>

<?php if(have_posts()): while(have_posts()): the_post();?>
<div class="col-xs-12 col-sm-6 col-md-4 blog-container">
    <article role="article" id="post-<?php the_ID()?>" <?php post_class(); ?>>
        <section>
            <a style="text-decoration:none;" href="<?php the_permalink(); ?>">
                <div class="row blog-posts-row">
                <?php if (!is_single()): ?><?php endif ?>
                <?php if (bbe_option_is_true('archives_featuredimage')){ ?>
                <div class="blog_featured_image" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>');">
                    
                </div>
                <?php }?>
                <?php if (!is_single()): ?><?php endif ?>
            </a>
            <div class="blog_content_container">
            <div class="blog_category"><?php the_category(', '); ?></div>
            <a style="text-decoration:none;" href="<?php the_permalink(); ?>">
                <div class="blog_title"><?php the_title()?></div>
                <div class="blog_content">
                <?php if(!bbe_option_is_true('archives_use_excerpt' ) or  bbe_post_is_using_bbe_template(get_the_ID())) the_excerpt(); else the_content( __( '&hellip; ' . __('Continue reading', 'bbe' ) . ' <i class="glyphicon glyphicon-arrow-right"></i>', 'bbe' ) ); ?>
                </div>
            </div><!-- .blog_content_container -->
            </a>
        </section>
    </article>
</div><!-- .row -->
<?php endwhile; ?>

<?php if ( function_exists('bbe_pagination') ) { bbe_pagination(); } else if ( is_paged() ) { ?>
  <ul class="pagination">
    <li class="older"><?php next_posts_link('<i class="glyphicon glyphicon-arrow-left"></i> ' . __('Previous', 'bbe')) ?></li>
    <li class="newer"><?php previous_posts_link(__('Next', 'bbe') . ' <i class="glyphicon glyphicon-arrow-right"></i>') ?></li>
  </ul>
<?php } ?>

<?php else: wp_redirect(get_bloginfo('siteurl').'/404', 404); exit; endif; ?>
