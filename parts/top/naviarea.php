<div class=" bg-beige py-md">
    <nav>
        <ul class="flex tb:flex-row flex-col justify-center tb:items-start items-center gap-6 tb:px-5 px-3">
            <?php
            $items = get_field('top_naviarea_items', 'option') ?: [];
            if ($items) :
                foreach ($items as $item) :
                    $post_id = $item['post'];
                    $title = get_the_title($post_id);
                    if (has_post_thumbnail($post_id)) :
                        $img_url = get_the_post_thumbnail_url($post_id);
                        $img_alt = get_the_title($post_id);
                    else :
                        $img_url = img_path('nophoto.png');
                        $img_alt = 'no-image';
                    endif;
                    $link = get_the_permalink($post_id);
                    $desc = $item['desc'];
            ?>
                    <li>
                        <a href="<?= esc_url($link); ?>" class="group flex flex-col tb:gap-5 gap-3">
                            <figure class="max-w-[312px] w-full overflow-clip rounded-xl">
                                <img src="<?= esc_url($img_url); ?>" alt="<?= esc_attr($img_alt); ?>" class="w-full h-full object-cover group-hover:scale-110 transition duration-400">
                            </figure>
                            <h4 class="tb:text-xl text-lg text-secondary font-medium">
                                <?php echo $title; ?>
                            </h4>
                            <p class="text-body tb:text-sm text-xs">
                                <?php echo $desc; ?>
                            </p>
                        </a>
                    </li>
            <?php
                endforeach;
            endif;
            ?>
        </ul>
    </nav>
</div>