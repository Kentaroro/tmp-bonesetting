<?php
$items = get_field('top_blog_items', 'option') ?: [];
if ($items) {
    $bg_img = $items['bg_img'];
    $bg_class = 'background-image: url(' . $bg_img . ')';
    $title_en = $items['title_en'];
    $title_ja = $items['title_ja'];
    $desc = $items['desc'];
}
?>
<div class="pb-xl bg-center bg-cover relative" style="<?php echo $bg_class ?>">
    <div class="bg-white/80 absolute inset-0"></div>
    <div class="flex flex-col gap-6 items-center relative z-1">
        <h2 class="size-[155px] flex flex-col justify-center items-center bg-primary text-white rounded-full">
            <i class="size-[45px] bg-[url(../img/icon--pen.png)]"></i>
            <span class="text-[28px] font-bold"><?php echo $title_en; ?></span>
            <span class="font-bold"><?php echo $title_ja; ?></span>
        </h2>
        <p class="text-primary text-center"><?php echo $items['desc']; ?></p>
    </div>
</div>