<?php
$items = get_field('top_blog_items', 'option') ?: [];
if ($items) {
    $bg_img = $items['bg_img'];
    $bg_class = 'background-image: url(' . $bg_img . ')';
    $icon = $items['icon'];
    $icon_class = 'background-image: url(' . $icon . ')';
    $title_en = $items['title_en'];
    $title_ja = $items['title_ja'];
    $desc = $items['desc'];
    $cat = $items['category'] ?: [];
}
?>
<div class="pb-xl bg-center bg-cover relative" style="<?php echo $bg_class ?>">
    <div class="bg-white/90 absolute inset-0"></div>
    <div class="flex flex-col gap-15 items-center relative z-1 tb:px-5 px-3">
        <h2 class="size-[155px] flex flex-col justify-center items-center bg-primary text-white rounded-full -mt-5">
            <i class="size-[47px] bg-no-repeat bg-center" style="<?php echo $icon_class ?>"></i>
            <span class="text-[28px] font-bold"><?php echo $title_en; ?></span>
            <span class="font-bold"><?php echo $title_ja; ?></span>
        </h2>
        <p class="text-primary text-center"><?php echo $items['desc']; ?></p>
        <ul class="flex tb:flex-row flex-col justify-center items-start gap-5">
            <?php
            $args = array(
                'post_status' => 'publish',
                'post_type' => 'post',
                'orderby' => 'date',
                'order' => 'DESC',
                'posts_per_page' => 3
            );
            if ($cat) {
                $args['category__in'] = $cat;
            }
            $loop = new WP_Query($args);
            while ($loop->have_posts()) : $loop->the_post();
            ?>
                <li class="max-w-[312px] w-fulls">
                    <article>
                        <a href="<?= the_permalink(); ?>" class="group flex flex-col gap-5">
                            <figure class="max-w-[312px] w-full overflow-clip rounded-xl">
                                <?php
                                if (has_post_thumbnail()) :
                                    $img_url = get_the_post_thumbnail_url();
                                    $img_alt = get_the_title();
                                else :
                                    $img_url = img_path('nophoto.png');
                                    $img_alt = 'no-image';
                                endif;
                                ?>
                                <img
                                    src="<?= esc_url($img_url); ?>"
                                    alt="<?= esc_attr($img_alt); ?>"
                                    class="w-full h-full object-cover group-hover:scale-110 transition duration-400">
                            </figure>
                            <h4 class="text-xl text-secondary font-medium">
                                <?php the_title(); ?>
                            </h4>
                            <div class="text-body text-sm">
                                <?php the_excerpt(); ?>
                            </div>
                        </a>
                    </article>
                </li>
            <?php
            endwhile;
            wp_reset_postdata();
            ?>
        </ul>
    </div>
</div>