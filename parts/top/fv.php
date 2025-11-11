<div class="relative">
    <div class="swiper top-slider w-full h-svh">
        <div class="swiper-wrapper">
            <?php
            if (have_rows('top_slider_items', 'option')) :
                while (have_rows('top_slider_items', 'option')) : the_row();
            ?>
                    <div class="swiper-slide">
                        <?php
                        $file_name = get_sub_field('file')['filename'];
                        $extension = pathinfo($file_name, PATHINFO_EXTENSION);
                        if ($extension == 'mp4' || $extension == 'webm' || $extension == 'mov') : ?>
                            <video
                                src="<?php echo get_sub_field('file')['url']; ?>"
                                alt="<?php echo get_sub_field('file')['alt']; ?>"
                                class="w-full h-full object-cover"
                                autoplay
                                muted
                                loop
                                playsinline>
                            </video>
                        <?php else : ?>
                            <img
                                src="<?php echo get_sub_field('file')['url']; ?>"
                                alt="<?php echo get_sub_field('file')['alt']; ?>"
                                class="w-full h-full object-cover">
                        <?php endif; ?>
                    </div>
            <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
    <div
        class="
        pc:absolute inset-x-0 bottom-0 z-10 flex pc:flex-row flex-col pc:items-end items-center justify-center pc:gap-5 gap-10 text-body bg-white/85 tb:p-10 p-5 pc:max-w-5xl w-full mx-auto
        ">
        <?php render_site_info_logo(); ?>
        <?php render_site_info_schedule(); ?>
    </div>
</div>