<?php get_template_part('includes/header'); ?>
<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12">
    <?php get_template_part('includes/loops/featured'); ?>
  </div>
</div>
<div class="container-fluid" style="background-color:#F6F6F6;">
  <div class="container">
  <div class="row" style="margin-top:25px;">
    
    <div class="col-xs-12 col-sm-7 col-md-7">
      <div id="content" role="main">
        <?php get_template_part('includes/loops/content', 'single'); ?>
      </div><!-- /#content -->
    </div>
    
    <div class="col-md-2"></div>
    
    <div class="col-xs-12 col-sm-3 col-md-3" id="sidebar" role="navigation">
      <h3>Latest Posts</h3>
        <?php //get_template_part('includes/sidebar'); 
        $args = array(
          'numberposts' => 5,
          'offset' => 0,
          'category' => 0,
          'orderby' => 'post_date',
          'order' => 'DESC',
          'post_type' => 'post',
          'post_status' => 'publish',
          'suppress_filters' => true
        );
        $recent_posts = wp_get_recent_posts( $args );
        //var_dump($recent_posts);
        $n=0;
        foreach($recent_posts as $r){ ?>
        
          <div class="recent-posts-container" style="padding: 13px 0;margin: 25px 0 -25px 0;border-top: 1px solid #dadada;">
            <a href="<?php echo get_the_permalink($r['ID']); ?>" style="text-decoration:none;">
              <div class="recent-posts-featured" style="display:inline-block;width:25%;"><?php echo get_the_post_thumbnail($r['ID'],"thumbnail"); ?></div>
              <div class="recent-posts-title" style="display:inline-block;width:72%;padding-left:10px;">
                <div style="color:#000;"><strong><?php echo $r['post_title']; ?></strong></div>
                <div style="color:#BDBDBD;"><?php echo get_the_time('M d,Y', $r['ID']); ?></div>
              </div>
            </a>
          </div>
        
        <?php
        $n++;
        }// foreach $recent_posts
        ?>
    </div>
    
  </div><!-- /.row -->
  </div><!-- /.container -->
</div><!-- /.container-fluid -->
<div class="container">
  <div class="row">
  <?php if (bbe_option_is_true('singlepost_relatedposts'))  get_template_part('includes/related-posts'); ?>
  </div>
</div>

<?php get_template_part('includes/footer'); ?>
