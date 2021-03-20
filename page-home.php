<?php /* Template Name: Home Template */ ?>
<?php get_header(); ?>
<main>
  <!-- Hero -->
  <section class="hero py" id="hero" <?php 
  $hero_image = get_field('hero_image');
  if( $hero_image ) {
    echo "style='background-image:url(" . esc_url($hero_image['url']) . "'";

  }
  ?>>
    <div class="row">
        <div class="col large-6">
          <h1 class="hero__heading"><?php the_field('hero_title'); ?></h1>
          <?php 
            $hero_description = get_field('hero_description');
            if( $hero_description ) {
                echo "<div>" . $hero_description ."</div>";
            }
          ?>
          <?php 
            $text_primary_button = get_field('text_primary_button');
            $link_primary_button = get_field('link_primary_button');

            $text_play_button = get_field('text_play_button');
            $source_link_video = get_field('source_link_video');

            if( $text_primary_button ||  $text_play_button ) {
              ?>
                <div class="buttons-banner mt-5">
                  <?php 
                    if($text_primary_button && $link_primary_button) {
                      ?>
                      <a class="btn btn-style" href="<?php echo esc_url($link_primary_button); ?>"> <?php echo esc_html($text_primary_button)?></a> 
                      <?php
                    }
                    if( $text_play_button && $source_link_video ) {
                      ?>
                      <a class="btn btn-play" id="openModalBox" href="#"><i class="fa fa-play-circle" aria-hidden="true"></i> <?php echo esc_html($text_play_button)?></a> 
                      <?php
                    }
                  ?>
                </div>
              <?php
            }
          ?>
        </div>
      </div>
  </section>
  <div class="modal" id="modalBox">
    <div class="modal__content">
      <span class="modal__close" id="closeModalBox">&times;</span>
      <?php echo $source_link_video; ?>         
    </div>
  </div>
  <!-- CTA Section -->
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

              <?php if( $cta_section['heading'] ) : ?>
                <a class="btn btn-style mt-5"><?php echo $cta_section['heading']; ?></a>
              <?php endif; ?>

            </div>
          </div>
          
          <?php 
          $images = $cta_section['gallery'];
          if( $images ): ?>
              <div  class="my-slider">
                  <?php foreach( $images as $image ): ?>
                      <div>
                              <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                      </div>
                  <?php endforeach; ?>
              </div>
          <?php endif; ?>

      </section>
    <?php endif; ?>         
</main>

<?php get_footer(); ?>
