<?php
$com_items = get_field('com_items', 'option');
$address_items = $com_items['address_items'] ?? [];
$post_num = $address_items['post_num'] ?? '';
$address = $address_items['address'] ?? '';
$tel = $com_items['tel'] ?? '';
$open = $com_items['open'] ?? '';
$close = $com_items['close'] ?? '';
$close_desc = $com_items['close_desc'] ?? '';
$map = $com_items['map'] ?? '';
$access = $com_items['access'] ?? '';
?>
<footer>
    <div class="max-w-7xl w-full mx-auto tb:px-5 px-3 py-md grid tb:grid-cols-2 grid-cols-1 gap-8 text-body">
        <?php render_site_info_logo(); ?>
        <?php render_site_info_map(); ?>
    </div>
    <div class=" bg-beige py-3 text-center">
        <small class="text-body">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</small>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>