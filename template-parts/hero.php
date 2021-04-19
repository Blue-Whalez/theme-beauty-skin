<?php 
    
    // Get ACF Fields of Hero Section
    $hero_title =  get_field('hero_title');
    $hero_description = get_field('hero_description');
    $hero_image = get_field('hero_image');

    $text_primary_button = get_field('text_primary_button');
    $link_primary_button = get_field('link_primary_button');

    $text_play_button = get_field('text_play_button');
    $source_link_video = get_field('source_link_video');

?>

<?php

    // Background Hero
    if( $hero_image ) {
        ?>
        <style>
            #hero {
                background-image:url("<?php echo esc_url($hero_image['url']); ?>");
            }
        </style>
        <?php
    }
?>

<section class="hero py" id="hero" >
    <div class="row">
        <div class="col large-6">
            
            <?php if ( $hero_title ) : ?>
                <h1 class="hero__heading"><?php echo $hero_title; ?></h1>
            <?php endif; ?>

            <?php if ( $hero_title ) : ?>
                <div class="hero__description"><?php echo $hero_description; ?></div>
            <?php endif; ?>

            <?php  if( $text_primary_button ||  $text_play_button ) : ?>
                <div class="buttons-banner mt-5">

                    <?php if($text_primary_button && $link_primary_button) : ?> 
                        <a class="btn btn-style btn--large " href="<?php echo esc_url($link_primary_button); ?>"> 
                            <?php echo esc_html($text_primary_button)?>
                        </a> 
                    <?php endif; ?>

                    <?php if( $text_play_button && $source_link_video ) : ?>
                        <a class="btn btn-play btn--large " id="openModalBox" href="#">
                            <i class="fa fa-play-circle" aria-hidden="true"></i> <?php echo esc_html($text_play_button)?>
                        </a> 
                    <?php endif; ?>

                </div>
            <?php endif; ?>

        </div>
      </div>
</section>

<!-- Box Modal -->
<?php if( $source_link_video ) : ?>
<div class="modal" id="modalBox">
    <div class="modal__content">
        <span class="modal__close" id="closeModalBox">&times;</span>

        <?php echo $source_link_video; ?>         

    </div>
</div>
<?php endif; ?>

