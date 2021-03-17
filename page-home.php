<?php /* Template Name: Home Template */ ?>
<?php get_header(); ?>
<main>
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
                        <a class="btn btn-style" href="<?php echo esc_url($link_primary_button); ?>"><i class="fa fa-play-circle" aria-hidden="true"></i> <?php echo esc_html($text_primary_button)?></a> 
                        <?php
                      }
                      if( $text_play_button && $source_link_video ) {
                        ?>
                        <a class="btn btn-play" href="<?php echo esc_url($source_link_video); ?>"><i class="fa fa-play-circle" aria-hidden="true"></i> <?php echo esc_html($text_play_button)?></a> 
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
</main>

<?php get_footer(); ?>
