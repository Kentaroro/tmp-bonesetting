<?php

/**
 * TOPページ about check レイアウト
 */
if (!function_exists('render_top_about_check_content')) {
    function render_top_about_check_content($items, $section_name = '')
    {
        $data = get_field($items, 'option') ?: [];

        // 安全に代入（存在しない場合は空文字）
        $title_arr = !empty($data['title']) ? mb_str_split($data['title']) : [];
        $head      = $data['heading']   ?? '';
        $desc      = $data['desc']      ?? '';
        $img       = $data['img']       ?? '';
        $link_text = $data['link_text'] ?? '';
        $link_url  = $data['link_url']  ?? '';

        if ($section_name === 'about') {
            $bg_class = 'bg-beige';
            $flex_class = 'pc:flex-row flex-col';
            $img_class = 'pc:justify-start justify-center';
            $text_class = 'justify-start';
        } elseif ($section_name === 'check') {
            $bg_class = 'bg-white';
            $flex_class = 'pc:flex-row-reverse flex-col';
            $img_class = 'pc:justify-end justify-center';
            $text_class = 'justify-end';
        }
?>
        <div class="flex flex-col items-center">
            <?php if ($title_arr): ?>
                <h2 class="top--h2 translate-y-[55%]">
                    <?php foreach ($title_arr as $char): ?>
                        <span><?= esc_html($char); ?></span>
                    <?php endforeach; ?>
                </h2>
            <?php endif; ?>

            <div class="<?= esc_attr($bg_class); ?> w-full md:py-xl py-lg">
                <div class="max-w-[1920px] mx-auto flex <?= esc_attr($flex_class); ?> items-center gap-8">
                    <div class="flex items-center <?= esc_attr($img_class); ?> flex-1/2">
                        <?php if (!empty($img['url'])): ?>
                            <figure class="max-w-[565px] w-full">
                                <img src="<?= esc_url($img['url']); ?>" alt="<?= esc_attr($img['alt'] ?? ''); ?>" class="object-cover">
                            </figure>
                        <?php endif; ?>
                    </div>

                    <div class="flex items-center text-body md:px-5 px-3 flex-1/2 <?= esc_attr($text_class); ?>">
                        <div class="flex flex-col md:gap-8 gap-6">
                            <?php if ($head): ?><h3 class="text-2xl"><?= $head; ?></h3><?php endif; ?>
                            <?php if ($desc): ?><p class="max-w-[810px] w-full"><?= $desc; ?></p><?php endif; ?>
                            <?php if ($link_text || $link_url): ?>
                                <a href="<?= esc_url($link_url); ?>"
                                    class="text-primary bg-white border-primary border rounded-sm max-w-[355px] w-full px-3 py-3 flex pc:justify-between justify-center items-center max-pc:self-center transition ease-in-out duration-300 hover:bg-primary hover:text-white">
                                    <?= $link_text; ?>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
    }
}
?>