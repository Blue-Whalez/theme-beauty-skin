<?php 
$service_section = get_field('service_section');
if ( $service_section ) :
    $heading = $service_section['heading'];
    $description = $service_section['description'];
?>
    <section class="services py" id="services">
        <div class="row ">
            <div class="col text-center mb-5" style="max-width: 800px; margin: 0 auto;">

                <?php if( $heading ) : ?>
                    <h2 class="heading-2 title-style"><?php echo esc_html( $heading ); ?></h2>
                <?php endif; ?>

                <?php if( $description ) : ?>
                    <p class="m-0"><?php echo esc_html($description); ?></p>
                <?php endif; ?>

            </div>
        </div>
        <div class="row">
                    <div class="col text-center">
                    <?php  display_lastest_services(); ?></div>
        </div>
    </section>
<?php endif;?>
