<?php
/*
The Single Posts Loop
=====================
*/


?> 

<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
        <header>
            <h3><?php the_title()?></h3>
            
            <p class="bbe-author-time">
                    <i class="glyphicon glyphicon-calendar"></i>&nbsp; 
                    <?php if (bbe_option_is_true('singlepost_meta_date')): ?><time  class="text-muted" datetime="<?php the_time('d-m-Y')?>"><?php the_time('M d,Y') ?></time><?php endif ?>&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php if (bbe_option_is_true('singlepost_meta_category')): ?><i class="glyphicon glyphicon-folder-open"></i>&nbsp; <?php the_category(', ') ?><br/><?php endif ?>
            </p>
            
        </header>
        <section>
           
            <?php the_content()?>
            <?php wp_link_pages(); ?>
        </section>
    </article>
<?php comments_template('/includes/loops/comments.php'); ?>
<?php endwhile; ?>
<?php else: ?>
<?php wp_redirect(get_bloginfo('siteurl').'/404', 404); exit; ?>
<?php endif; ?>