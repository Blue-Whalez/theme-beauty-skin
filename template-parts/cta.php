<?php 

$cta_section = get_field('cta_section'); 

if( $cta_section ): ?>

    <section class="cta" id="cta">

        <div class="row py">

            <div class="col text-center" style="max-width: 800px; margin: 0 auto;">


                <?php if( $cta_section['sub_heading'] ) : ?>

                    <p class="sub-text"><?php echo $cta_section['sub_heading']; ?></p>

                <?php endif; ?>


                <?php if( $cta_section['heading'] ) : ?>

                    <h2 class="heading-2"><?php echo $cta_section['heading']; ?></h2>

                <?php endif; ?>


                <?php if( $cta_section['description'] ) : ?>

                    <p class="m-0"><?php echo $cta_section['description']; ?></p>

                <?php endif; ?>


                <?php if( $cta_section['text_button'] ) : ?>

                    <a class="btn btn-style mt-5" href="<?php echo esc_url($cta_section['link_button'])?>">
                        <?php echo $cta_section['text_button']; ?>
                    </a>

                <?php endif; ?>


            </div>

        </div>
        

        <?php 
        
        // Display Gallery Carousel

        $images = $cta_section['gallery'];

        if( $images ): ?>

            <div  class="main-carousel gallery">

                <?php foreach( $images as $image ): ?>

                    <div class="carousel-cell"> 

                        <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

                    </div>

                <?php endforeach; ?>
                
            </div>

        <?php endif; ?>

    </section>

<?php endif; ?>  