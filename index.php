<?php
get_header();
?>
<main>
    <!-- about -->
    <section id="about" class="-mt-10">
        <?php get_template_part('parts/top/about'); ?>
    </section>
    <!-- check -->
    <section id="check" class="-mt-58">
        <?php get_template_part('parts/top/check'); ?>
    </section>
    <!-- naviarea -->
    <section id="naviarea">
        <?php get_template_part('parts/top/naviarea'); ?>
    </section>
    <!-- blog -->
    <section id="blog">
        <?php get_template_part('parts/top/blog'); ?>
    </section>
</main>
<?php get_footer(); ?>