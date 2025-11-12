<div id="header-nav-sp" class="w-full opacity-0 pc:hidden flex justify-center items-center fixed top-0 left-0 right-0 z-50 bg-beige h-[56px] px-4">
    <a href="<?php echo esc_url(home_url('/')) ?>">
        <figure class="max-w-[40px] w-full">
            <img src="<?php echo com_info('icon_sp'); ?>" alt="<?php bloginfo('name'); ?>">
        </figure>
    </a>
</div>
<button id="header-nav-sp-btn" class="flex flex-col gap-1.5 absolute top-4.5 right-4 z-51" aria-label="メニューを開く" aria-expanded="false">
    <span class="w-[24px] h-[2px] bg-body rounded-[5px] rotate-0 line"></span>
    <span class="w-[24px] h-[2px] bg-body rounded-[5px] rotate-0 line"></span>
    <span class="w-[24px] h-[2px] bg-body rounded-[5px] rotate-0 line"></span>
</button>
<div id="header-nav-sp-menu" class="w-full h-screen opacity-0 fixed top-0 left-0 right-0 z-50 bg-beige hidden flex-col justify-center items-center">
    <nav>
        <ul class="flex flex-col gap-5 flex-wrap justify-center items-center">
            <?php
            $menu_name = 'header';
            $locations = get_nav_menu_locations();
            $menu_id = $locations[$menu_name] ?? false;
            if ($menu_id) :
                $menu_items = wp_get_nav_menu_items($menu_id);
            ?>
                <?php foreach ($menu_items as $menu_item) : ?>
                    <li>
                        <a
                            href="<?php echo esc_url($menu_item->url); ?>"
                            class="text-body text-base block transition ease-in-out duration-300 hover:opacity-80">
                            <?php echo esc_html($menu_item->title); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </nav>

</div>