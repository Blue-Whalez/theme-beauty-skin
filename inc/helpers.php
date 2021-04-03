<?php
/*
/* Function helpers
*/

function display_lastest_services() {
    $args = array(
        'numberposts'      => 5,
        'post_type'        => 'service'
    );
    $the_query = new WP_Query($args);
    
    if( $the_query->have_posts() ) : 
        echo '<div class="card-third">';
        while($the_query->have_posts()) : 
            $the_query->the_post();
            ?>
                <article class="card card-service">
                    <div class="card-image">
                        <img class="image-fuid" src="https://wp.w3layouts.com/beauty-skin/wp-content/themes/beauty-skin/assets/images/f1.jpg" alt="" srcset="">
                    </div>
                    <div class="card-info">
                        <h3><a class="card-title" href="#">Feature #1</a></h3>
                        <p class="card-excerpt">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a class="btn btn-style">Read more</a>
                    </div>
                </article>
            <?php
        endwhile;
        echo '</div>';
        wp_reset_postdata();
    else:
        echo _e( 'Sorry, no posts matched your criteria.' ); 
    endif;
}