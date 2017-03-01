<?php
/*
Featured Image
=====================
*/


?> 

<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <div class="row blog_featured_image" style="
        background-image:url('<?php echo get_the_post_thumbnail_url(); ?>'); 
        height:250px;
        background-repeat: no-repeat;
        background-size: cover;
        background-position:center center;
        ">
        <div style="
        width:100%;
        height:100%;
        background-color:rgba(0,0,0,0.3);
        text-align:center;
        position:absolute;
        ">
            <h1 style="color:#fff;position:relative;margin-top:75px;"><?php the_title(); ?></h1>
        </div>
    </div>
    
<?php endwhile; ?>
<?php endif; ?>