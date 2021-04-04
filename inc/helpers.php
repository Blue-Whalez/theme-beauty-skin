<?php
/*
/* Function helpers
*/

function display_lastest_services() {
    $args = array(
        'numberposts'      => 3,
        'post_type'        => 'service'
    );
    $the_query = new WP_Query($args);
    
    if( $the_query->have_posts() ) : 
        echo '<div class="card-third">';
        while($the_query->have_posts()) : 
            $the_query->the_post();
            $card_title = get_the_title();
            $card_exceprt = get_the_excerpt();
            $card_link = get_permalink();
            
            ?>
                <article class="card card-service card-hover--style-1">
                   
                   <?php if( has_post_thumbnail() ) : ?>
                        <div class="card-image">
                            <a href="<?php echo esc_url( $card_link ); ?>">
                                <?php echo get_the_post_thumbnail(); ?>
                            </a>
                        </div>
                    <?php endif; ?>

                    <div class="card-info">

                        <?php if( !empty( $card_title ) ) : ?>
                            <h3>
                                <a class="card-title" href="<?php echo esc_url( $card_link ); ?>">
                                    <?php echo esc_html( $card_title ); ?>
                                </a>
                            </h3>
                        <?php endif; ?>

                        <?php if ( !empty( $card_exceprt ) ) : ?>
                            <p class="card-excerpt"><?php echo esc_html( $card_exceprt ); ?></p>
                        <?php endif; ?>

                        <a class="btn btn-style" href="<?php echo esc_url( $card_link ); ?>">
                            <?php echo esc_html( 'Read more' , 'beautyskin' ); ?>
                        </a>
                        
                    </div>

                </article>
            <?php
        endwhile;
        echo '</div>';
        wp_reset_postdata();
    else:
        echo  esc_html( 'Sorry, no posts matched your criteria.', 'beautyskin' ); 
    endif;
}

function display_lastest_testimonial() {
    $args = array(
        'numberposts'      => 3,
        'post_type'        => 'testimonial'
    );
    $the_query = new WP_Query($args);
    
    if( $the_query->have_posts() ) : 
        echo '<div class="card-third">';
        while($the_query->have_posts()) : 
            $the_query->the_post();

            $customer_name = get_the_title();
            $customer_review = get_field( 'customer_review' );
            $customer_avatar = get_field( 'customer_avatar' );
            $customer_job = get_field( 'customer_job' );

            
            ?>
                <article class="card card-testimonial">
                   
                    <?php if ( $customer_review = get_field( 'customer_review' ) ) : ?>
                        <p class="customer__review"><q><?php echo $customer_review; ?></q></p>
                    <?php endif; ?>

                    <div class="customer__info">

                        <?php if ( $customer_avatar ) : ?>
                            <div class="customer__avatar">
                                <img src="<?php echo esc_url( $customer_avatar['url'] ); ?>" alt="<?php echo esc_attr( $customer_avatar['alt'] ); ?>" />
                            </div>
                        <?php endif; ?>

                        <div class="customer__detail">
                            <?php if( $customer_name ): ?>
                                <h3 class="customer__name"><?php echo esc_html($customer_name); ?></h3>
                            <?php endif; ?>

                            <?php if ( $customer_job ) : ?>
                                <p class="customer__job"><?php echo esc_html( $customer_job ); ?></p>
                            <?php endif; ?>
                        </div>
                        
                    </div>

                </article>
            <?php
        endwhile;
        echo '</div>';
        wp_reset_postdata();
    else:
        echo  esc_html( 'Sorry, no posts matched your criteria.', 'beautyskin' ); 
    endif;
}