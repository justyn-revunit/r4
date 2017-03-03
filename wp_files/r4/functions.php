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

?>