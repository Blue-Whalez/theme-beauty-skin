<?php /* Template Name: Home Template */ ?>
<?php get_header(); ?>
<main>
    <!-- Hero -->
    <section class="hero" <?php 
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
    <section class="cta">
        <div class="row">
          <div class="col text-center">
          <p class="sub-heading">UT ENIM AD MINIM VENIAM, QUIS NOSTRUD</p>
          <h2>We have the best Services</h2>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
          <a class="btn btn-style">Let's get started!</a>
          </div>
        </div>
        <div class="my-slider">
          <div><img src="https://wp.w3layouts.com/beauty-skin/wp-content/themes/beauty-skin/assets/images/img1.jpg" alt=""></div>
          <div><img src="https://wp.w3layouts.com/beauty-skin/wp-content/themes/beauty-skin/assets/images/img2.jpg" alt=""></div>
          <div><img src="https://wp.w3layouts.com/beauty-skin/wp-content/themes/beauty-skin/assets/images/img3.jpg" alt=""></div>
          <div><img src="https://wp.w3layouts.com/beauty-skin/wp-content/themes/beauty-skin/assets/images/img4.jpg" alt=""></div>
          <div><img src="https://wp.w3layouts.com/beauty-skin/wp-content/themes/beauty-skin/assets/images/img5.jpg" alt=""></div>
          <div><img src="https://wp.w3layouts.com/beauty-skin/wp-content/themes/beauty-skin/assets/images/img6.jpg" alt=""></div>
        </div>
    </section>         
</main>

<?php get_footer(); ?>
