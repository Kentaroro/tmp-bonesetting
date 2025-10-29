<div id="fv" class="swiper top-slider w-full flex-1">
    <div class="swiper-wrapper">
        <?php
        if (have_rows('top_slider_items', 'option')) :
            while (have_rows('top_slider_items', 'option')) : the_row();
        ?>
                <div class="swiper-slide">
                    <?php
                    $file = get_sub_field('file')['name'];
                    if ($file) {
                        $extension = pathinfo($file, PATHINFO_EXTENSION);
                    }
                    if ($extension == 'mp4' || $extension == 'webm' || $extension == 'mov') : ?>
                        <video
                            src="<?php echo $file['url']; ?>"
                            alt="<?php echo $file['alt']; ?>"
                            class="w-full h-full object-center"
                            autoplay
                            muted
                            loop
                            playsinline>
                        </video>
                    <?php else : ?>
                        <img
                            src="<?php echo get_sub_field('file')['url']; ?>"
                            alt="<?php echo get_sub_field('file')['alt']; ?>"
                            class="w-full h-full object-center">
                    <?php endif; ?>
                </div>
        <?php
            endwhile;
        endif;
        ?>
    </div>
</div>