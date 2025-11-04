<div class=" bg-beige py-md">
    <nav>
        <ul class="flex md:flex-row flex-col justify-center gap-6">
            <?php
            $items = get_field('top_naviarea_items', 'option') ?: [];
            if ($items) :
                foreach ($items as $item) :
                    $post_id = $item['post'];
                    $title = get_the_title($post_id);
                    $img = get_the_post_thumbnail_url($post_id);
                    $link = get_the_permalink($post_id);
                    $desc = $item['desc'];
            ?>
                    <li>
                        <a href="<?= esc_url($link); ?>" class="group flex flex-col gap-5">
                            <figure class="max-w-[312px] w-full overflow-clip rounded-xl">
                                <img src="<?= esc_url($img); ?>" alt="<?= esc_attr($title); ?>" class="w-full h-full object-cover group-hover:scale-110 transition duration-400">
                            </figure>
                            <h4 class="text-xl text-secondary font-medium">
                                <?php echo $title; ?>
                            </h4>
                            <p class="text-body text-sm">
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