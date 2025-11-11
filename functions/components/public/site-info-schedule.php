<?php
function render_site_info_schedule()
{
    $com_items = get_field('com_items', 'option');
    $table = $com_items['schedule'] ?? [];
    $schedule_desc = $com_items['schedule_desc'] ?? [];
    if ($table) :
?>
        <div class="flex flex-col items-start justify-center gap-6">
            <table class="w-full">
                <?php if ($table['header']) : ?>
                    <thead class="border-t-[0.5px] border-body">
                        <tr>
                            <?php foreach ($table['header'] as $header) : ?>
                                <th class="text-body font-normal px-3 py-2 tb:text-base text-sm"><?php echo $header['c']; ?></th>
                            <?php endforeach; ?>
                        </tr>
                    </thead>
                <?php endif; ?>
                <tbody class="border-t-[0.5px] border-body">
                    <?php foreach ($table['body'] as $body) : ?>
                        <tr class="border-b-[0.5px] border-body">
                            <?php foreach ($body as $b) : ?>
                                <td class="text-body font-normal text-center px-3 py-2 tb:text-base text-sm"><?php echo $b['c']; ?></td>
                            <?php endforeach; ?>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="text-body tb:text-sm/6 text-xs/5">
                <?php echo $schedule_desc; ?>
            </div>
            <a herf="#" class="flex flex-row gap-2 items-center py-3 px-4 bg-body text-white rounded self-center hover:opacity-80 transition-all duration-300 ease-in-out delay-100 cursor-pointer">
                <img src="<?php echo img_path('icon--calendar.svg'); ?>" alt="カレンダーアイコン">
                <span class="flex flex-col font-bold tb:text-base/5 text-sm/5">
                    <span>WEBからの</span>
                    <span>ご予約はこちら</span>
                </span>
            </a>
        </div>
<?php
    endif;
}
