<?php

function render_site_info_logo()
{
    $com_items = get_field('com_items', 'option');
    $address_items = $com_items['address_items'] ?? [];
    $post_num = $address_items['post_num'] ?? '';
    $address = $address_items['address'] ?? '';
    $tel = $com_items['tel'] ?? '';
    $open = $com_items['open'] ?? '';
    $close = $com_items['close'] ?? '';
    $close_desc = $com_items['close_desc'] ?? '';
?>
    <div class="flex flex-col items-center justify-center gap-3 text-body">
        <figure class="max-w-[85px]">
            <?php the_custom_logo(); ?>
        </figure>
        <h2 class="flex flex-col items-center justify-center gap-3 font-potta-one">
            <span class="tb:text-4xl text-3xl"><?php bloginfo('name'); ?></span>
            <span class="tb:text-sm text-xs"><?php bloginfo('description'); ?></span>
        </h2>
        <ul class="flex flex-row flex-wrap tb:justify-around justify-center items-center gap-2 font-potta-one">
            <?php
            $tags = [
                '#神田',
                '#小川町',
                '#整体',
                '#接骨院',
                '#WEB予約',
            ];
            foreach ($tags as $tag) :
            ?>
                <li class="tb:text-sm text-xs text-white bg-body py-1 px-2 rounded"><?php echo $tag; ?></li>
            <?php endforeach; ?>
        </ul>
        <div class="flex justify-center items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="#686053">
                <path d="M769.38-494.15q-6.02-116.98-87.65-198.61-81.63-81.63-198.35-87.39v-50.26q68.52 2.36 128.65 29.51 60.12 27.16 105.4 72.57 45.29 45.41 72.44 105.54 27.15 60.12 29.77 128.64h-50.26Zm-164.46 0q-6.02-48.08-39.74-81.91-33.72-33.84-81.8-39.22v-50.26q68.95 5.39 117.36 53.78 48.41 48.4 54.44 117.61h-50.26ZM776.13-140q-108.62 0-221.99-53.32T343.51-343.9q-96.87-97.25-150.19-210.43Q140-667.51 140-776.13q0-18.63 12.43-31.25Q164.85-820 183.49-820h119.57q15.48 0 26.52 10.09 11.03 10.09 15.01 25.71l23.54 110.68q2.18 15.55-1 27.52-3.18 11.97-11.85 20.13l-93.72 91.25q25.29 44.24 54.68 82.48 29.4 38.24 63.61 72.22 35.89 36.56 76.36 67.1 40.46 30.54 86.84 55.92l90.44-92.43q9.79-10.59 22.5-14.44 12.71-3.84 26.47-1.84l101.74 21.79q15.82 3.74 25.81 16 9.99 12.25 9.99 27.77v116.56q0 18.64-12.62 31.06Q794.76-140 776.13-140ZM236.97-580.97l78.83-76.16q1.66-1.54 2.24-4.23.58-2.69.06-5l-20.36-97.23q-.51-3.08-2.56-4.62-2.05-1.53-5.13-1.53h-94.2q-2.31 0-3.85 1.53-1.54 1.54-1.54 3.85 1.59 41.41 13.09 86.9 11.5 45.49 33.42 96.49Zm353.54 348q40.59 19.61 87.5 30.37 46.91 10.75 86.35 12.19 2.31 0 3.85-1.54 1.53-1.54 1.53-3.85v-93.48q0-3.08-1.53-5.13-1.54-2.05-4.62-2.56l-88.46-18.16q-2.31-.51-4.04.07-1.73.57-3.65 2.24l-76.93 79.85Zm-353.54-348Zm353.54 348Z" />
            </svg>
            <a href="tel:<?php echo $tel; ?>" class="text-[28px]/none font-bold cursor-default"><?php echo $tel; ?></a>
        </div>
        <ul class="flex flex-col items-center justify-center gap-2">
            <li class="tb:text-base text-xs"><?php echo $open; ?></li>
            <li class="tb:text-base text-xs"><?php echo $close; ?></li>
            <?php if ($close_desc) : ?>
                <li class="tb:text-sm text-xs"><?php echo $close_desc; ?></li>
            <?php endif; ?>
        </ul>
        <address class="flex tb:flex-row flex-col justify-start items-center gap-2 text-sm not-italic">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15 19.923L9 17.823L5.04225 19.3537C4.78592 19.4487 4.54808 19.4209 4.32875 19.2702C4.10958 19.1196 4 18.9077 4 18.6345V6.40375C4 6.22558 4.04325 6.06283 4.12975 5.9155C4.21625 5.768 4.34225 5.66541 4.50775 5.60775L9 4.077L15 6.177L18.9578 4.64624C19.2141 4.55124 19.4519 4.56949 19.6712 4.70099C19.8904 4.83233 20 5.02816 20 5.28849V17.673C20 17.864 19.9471 18.0301 19.8413 18.1712C19.7356 18.3122 19.5937 18.4116 19.4155 18.4692L15 19.923ZM14.5 18.7037V7.00375L9.5 5.25775V16.9577L14.5 18.7037ZM15.5 18.7037L19 17.55V5.7L15.5 7.00375V18.7037ZM5 18.3L8.5 16.9577V5.25775L5 6.45V18.3Z" fill="#686053" />
            </svg>
            <span class="tb:text-base text-xs">〒<?php echo $post_num; ?></span>
            <span class="tb:text-base text-xs"><?php echo $address; ?></span>
        </address>
    </div>
<?php
}
