<?php 
$service_section = get_field('service_section');
if ( $service_section ) :
?>
    <section class="cta" id="cta">
        <div class="row py">
            <div class="col text-center" style="max-width: 800px; margin: 0 auto;">

                <?php if( $service_section['heading'] ) : ?>
                    <h2 class="heading-2"><?php echo $service_section['heading']; ?></h2>
                <?php endif; ?>

                <?php if( $service_section['description'] ) : ?>
                    <p class="m-0"><?php echo $service_section['description']; ?></p>
                <?php endif; ?>


            </div>
        </div>
    </section>
<?php endif;?>
