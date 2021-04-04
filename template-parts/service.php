<?php 
$service_section = get_field('service_section');
if ( $service_section ) :
?>
    <section class="cta py" id="cta">
        <div class="row ">
            <div class="col text-center mb-5" style="max-width: 800px; margin: 0 auto;">

                <?php if( $service_section['heading'] ) : ?>
                    <h2 class="heading-2 title-style"><?php echo $service_section['heading']; ?></h2>
                <?php endif; ?>

                <?php if( $service_section['description'] ) : ?>
                    <p class="m-0"><?php echo $service_section['description']; ?></p>
                <?php endif; ?>

            </div>
        </div>
        <div class="row">
                    <div class="col text-center">
                    <?php  display_lastest_services(); ?></div>
        </div>
    </section>
<?php endif;?>
