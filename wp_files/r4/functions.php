<?php
add_action( 'wp_enqueue_scripts', 'r4_enqueue_styles' );
function r4_enqueue_styles() {
    wp_enqueue_style( 'r4', get_template_directory_uri() . '/style.css' );

}

function r4_carousel_function(){?>
<script>
jQuery(window).load(function(){


// Config
var carouselRun = true; // initially running the carousel
var timer = 3000;       // milliseconds for the timer on the carousel

// Hover functions
jQuery("#person01").hover(function(){
    person01();
});
jQuery("#person02").hover(function(){
    person02();
});
jQuery("#person03").hover(function(){
    person03();
});
jQuery("#person04").hover(function(){
    person04();
});

// Display functions
function person01(){
    // Clear active
    clearAllActive();
    // Add b&w 
    jQuery("#person02").addClass("person02BW");
    jQuery("#person03").addClass("person03BW");
    jQuery("#person04").addClass("person04BW");
    jQuery("#description01, #description02, #description03, #description04").removeClass("activeDescription");
    jQuery("#description01").addClass("activeDescription");
    jQuery("#person01").addClass("activeBg person01");
}
function person02(){
    // Clear active
    clearAllActive();
    // Add b&w 
    jQuery("#person01").addClass("person01BW");
    jQuery("#person03").addClass("person03BW");
    jQuery("#person04").addClass("person04BW");
    jQuery("#description01, #description02, #description03, #description04").removeClass("activeDescription");
    jQuery("#description02").addClass("activeDescription");
    jQuery("#person02").addClass("activeBg person02");
}
function person03(){
    // Clear active
    clearAllActive();
    // Add b&w 
    jQuery("#person01").addClass("person01BW");
    jQuery("#person02").addClass("person02BW");
    jQuery("#person04").addClass("person04BW");
    jQuery("#description01, #description02, #description03, #description04").removeClass("activeDescription");
    jQuery("#description03").addClass("activeDescription");
    jQuery("#person03").addClass("activeBg person03");
}
function person04(){
    // Clear active
    clearAllActive();
    // Add b&w 
    jQuery("#person01").addClass("person01BW");
    jQuery("#person02").addClass("person02BW");
    jQuery("#person03").addClass("person03BW");
    jQuery("#description01, #description02, #description03, #description04").removeClass("activeDescription");
    jQuery("#description04").addClass("activeDescription");
    jQuery("#person04").addClass("activeBg person04");
}

function clearAllActive(){
    jQuery("#person01").removeClass("person01").removeClass("activeBg");
    jQuery("#person02").removeClass("person02").removeClass("activeBg");
    jQuery("#person03").removeClass("person03").removeClass("activeBg");
    jQuery("#person04").removeClass("person04").removeClass("activeBg");
}

// Stateful stuff
jQuery(".peopleCarousel").mouseenter( pauseCarousel ).mouseleave( unpauseCarousel );

function pauseCarousel(){
    console.log("pausing...");
    carouselRun = false;
}
function unpauseCarousel(){
    console.log("unpausing...")
    carouselRun = true;
}

// Autoplay the carousel
setInterval(function(){
    if(carouselRun === true){
        if(jQuery("#person01").hasClass("activeBg")){
            person02();
            return;
        }
        if(jQuery("#person02").hasClass("activeBg")){
            person03();
            return;
        }
        if(jQuery("#person03").hasClass("activeBg")){
            person04();
            return;
        }
        if(jQuery("#person04").hasClass("activeBg")){
            person01();
            return;
        }
    }
},3000)
})// on load
</script>
<?php }// r4_carousel_function

add_shortcode( 'r4_carousel', 'r4_carousel_function' );

function get_blog_posts($atts){
    $category   = $atts['category'];
    $number     = $atts['number'];
    $args = array(
        'posts_per_page'   => $number,
        'offset'           => 0,
        'category_name'    => $category,
        'orderby'          => 'date',
        'order'            => 'DESC',
        'post_type'        => 'post',
        'post_status'      => 'publish',
        'suppress_filters' => true 
    );
    $posts_array = get_posts( $args );
    if(count($posts_array)>0){
        $header = '<section class="blog-grid-wrap"><div class="container"><div class="row blog-row">';
        $footer = '</div></div></section>';
        $html   = '';
        foreach($posts_array as $p){
            $url = site_url().'/'.$p->post_name;
            $img = get_the_post_thumbnail( $p->ID, 'medium' );
            $cats = get_the_category( $p->ID );
            $cat = $cats[0]->name;
            $title = $p->post_title; 
            $excerpt = substr( $p->post_excerpt, 0, 170 ).'...';
            $html .= '<div class="col-xs-12 col-md-4"><a href="' . $url .'" class="shadow bg-white grid-blog-post"><div class="img-wrap">'.$img.'</div><div class="text-wrap"> <span class="caps blog-grid-cat">'.$cat.'</span><h4>'. $title.'</h4><p>'.$excerpt.'</p></div></a></div>';
        }
        return $header.$html.$footer;
    } else {
        $posts = '';
    }
    return $posts;
}// get_blog_posts

add_shortcode( 'blog_posts', 'get_blog_posts' );
?>