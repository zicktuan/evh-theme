<?php get_header();?>
<div class="container mt-[100px] md:mt-[50px]">
    <p class="text-3xl font-semibold"><?php the_title() ?></p>
    <span class="text-sm"><?php echo date('d/m/Y', strtotime($post->post_date))?></span>
    <div class="mt-8 text-lg">
        <?php the_content() ?>
    </div>
</div>
<?php get_footer();?>