<div id="header-nav" class="w-full opacity-0 max-pc:hidden">
    <div class="flex flex-row justify-between items-center tb:p-4 p-2 bg-white text-body">
        <a href="<?php echo esc_url(home_url('/')) ?>" class="flex flex-row items-center gap-2">
            <figure class="max-w-[80px] w-full">
                <img src="<?php echo site_logo('full'); ?>" alt="<?php bloginfo('name'); ?>">
            </figure>
            <h1 class="flex flex-col items-center justify-center gap-0 font-potta-one text-body">
                <span class="text-[32px]"><?php bloginfo('name'); ?></span>
                <span class="text-sm"><?php bloginfo('description'); ?></span>
            </h1>
        </a>
        <div class="flex flex-row items-center gap-4">
            <div class="flex flex-col items-center justify-center">
                <div class="flex justify-center items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="#686053">
                        <path d="M769.38-494.15q-6.02-116.98-87.65-198.61-81.63-81.63-198.35-87.39v-50.26q68.52 2.36 128.65 29.51 60.12 27.16 105.4 72.57 45.29 45.41 72.44 105.54 27.15 60.12 29.77 128.64h-50.26Zm-164.46 0q-6.02-48.08-39.74-81.91-33.72-33.84-81.8-39.22v-50.26q68.95 5.39 117.36 53.78 48.41 48.4 54.44 117.61h-50.26ZM776.13-140q-108.62 0-221.99-53.32T343.51-343.9q-96.87-97.25-150.19-210.43Q140-667.51 140-776.13q0-18.63 12.43-31.25Q164.85-820 183.49-820h119.57q15.48 0 26.52 10.09 11.03 10.09 15.01 25.71l23.54 110.68q2.18 15.55-1 27.52-3.18 11.97-11.85 20.13l-93.72 91.25q25.29 44.24 54.68 82.48 29.4 38.24 63.61 72.22 35.89 36.56 76.36 67.1 40.46 30.54 86.84 55.92l90.44-92.43q9.79-10.59 22.5-14.44 12.71-3.84 26.47-1.84l101.74 21.79q15.82 3.74 25.81 16 9.99 12.25 9.99 27.77v116.56q0 18.64-12.62 31.06Q794.76-140 776.13-140ZM236.97-580.97l78.83-76.16q1.66-1.54 2.24-4.23.58-2.69.06-5l-20.36-97.23q-.51-3.08-2.56-4.62-2.05-1.53-5.13-1.53h-94.2q-2.31 0-3.85 1.53-1.54 1.54-1.54 3.85 1.59 41.41 13.09 86.9 11.5 45.49 33.42 96.49Zm353.54 348q40.59 19.61 87.5 30.37 46.91 10.75 86.35 12.19 2.31 0 3.85-1.54 1.53-1.54 1.53-3.85v-93.48q0-3.08-1.53-5.13-1.54-2.05-4.62-2.56l-88.46-18.16q-2.31-.51-4.04.07-1.73.57-3.65 2.24l-76.93 79.85Zm-353.54-348Zm353.54 348Z" />
                    </svg>
                    <a href="tel:<?php echo com_info('tel'); ?>" class="text-[28px]/none font-bold cursor-default"><?php echo com_info('tel'); ?></a>
                </div>
                <p class="text-base"><?php echo com_info('open'); ?></p>
            </div>
            <a herf="#" class="flex flex-row gap-2 items-center py-3 px-4 bg-body text-white rounded self-center hover:opacity-80 transition-all duration-300 ease-in-out delay-100 cursor-pointer">
                <img src="<?php echo img_path('icon--calendar.svg'); ?>" alt="カレンダーアイコン">
                <span class="flex flex-col font-bold tb:text-base/5 text-sm/5">
                    <span>WEBからの</span>
                    <span>ご予約はこちら</span>
                </span>
            </a>
        </div>
    </div>
    <nav class="w-full max-tb:hidden">
        <ul class="flex flex-wrap justify-center bg-body">
            <?php
            $menu_name = 'header';
            $locations = get_nav_menu_locations();
            $menu_id = $locations[$menu_name] ?? false;
            if ($menu_id) :
                $menu_items = wp_get_nav_menu_items($menu_id);
                $icon = [
                    '<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="M160-120q-33 0-56.5-23.5T80-200v-560q0-33 23.5-56.5T160-840h640q33 0 56.5 23.5T880-760v560q0 33-23.5 56.5T800-120H160Zm80-160h480v-80H240v80Zm0-160h160v-240H240v240Zm240 0h240v-80H480v80Zm0-160h240v-80H480v80Z"/></svg>'
                ]
            ?>
                <?php foreach ($menu_items as $menu_item) : ?>
                    <li>
                        <a
                            href="<?php echo esc_url($menu_item->url); ?>"
                            class="text-white text-base py-2 px-5 block transition ease-in-out duration-300 hover:opacity-80"><?php echo esc_html($menu_item->title); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </nav>
</div>