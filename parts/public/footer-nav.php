<nav id="footer-nav" class="max-w-5xl mx-auto tb:px-5 px-3">
    <ul class="flex flex-wrap justify-center bg-white">
        <?php
        $menu_name = 'footer';
        $locations = get_nav_menu_locations();
        $menu_id = $locations[$menu_name] ?? false;
        if ($menu_id) :
            $menu_items = wp_get_nav_menu_items($menu_id);
        ?>
            <?php foreach ($menu_items as $menu_item) : ?>
                <li>
                    <a
                        href="<?php echo esc_url($menu_item->url); ?>"
                        class="text-secondary text-base py-5 px-5 block transition ease-in-out duration-300 hover:opacity-80"><?php echo esc_html($menu_item->title); ?>
                    </a>
                </li>
            <?php endforeach; ?>
        <?php endif; ?>
    </ul>
</nav>