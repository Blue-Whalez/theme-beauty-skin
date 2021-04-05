<?php 
$our_team_section = get_field('our_team_section');
if ( $our_team_section ) :
    $heading = $our_team_section['heading'];
    $description = $our_team_section['description'];
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
                    <?php  display_lastest_members(); ?></div>
        </div>
    </section>
<?php endif;?>
