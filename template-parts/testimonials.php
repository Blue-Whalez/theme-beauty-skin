<?php 
$testimonial_section = get_field('testimonial_section');
if ( $testimonial_section ) :
    $heading = $testimonial_section['heading'];
    $description = $testimonial_section['description'];
    $background_image = $testimonial_section['background_image'];
    $section_class = '';
   
    if ( $background_image ) {
        $section_class = 'bg-overlay';
    } 

    if( $background_image ) {
        ?>
        <style>
            #testimonials {
                background-image:url("<?php echo esc_url($background_image['url']); ?>");
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                -webkit-background-size: cover;
                -o-background-size: cover;
                -moz-background-size: cover;
                -ms-background-size: cover;
                position: relative;
                z-index: 0;
            }
        </style>
        <?php
    }

?>

    <section class="testimonials py <?php echo esc_attr($section_class)?>" id="testimonials">
        <div class="row">
            <div class="col text-center mb-5" >

                <?php if( $heading ) : ?>
                    <h2 class="heading-2 title-style"><?php echo esc_html( $heading ); ?></h2>
                <?php endif; ?>

                <?php if( $description ) : ?>
                    <p class="m-0" style="max-width: 500px; margin: 0 auto;"><?php echo esc_html($description); ?></p>
                <?php endif; ?>

            </div>
        </div>
        <div class="row">
                    <div class="col">
                    <?php  display_lastest_testimonial(); ?></div>
        </div>
    </section>
<?php endif;?>
