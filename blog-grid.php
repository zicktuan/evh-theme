
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
    <a class="col shadow-xl cursor-pointer" href="<?php the_permalink()?>">
        <img loading="lazy" src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title() ?>" class="block object-cover h-[243px] w-full">
        <div class="p-3">
            <p class="text-lg font-semibold text-menu line-clamp-2"><?php the_title(); ?></p>
            <p class="my-[10px] text-[13px]"><?php echo date('d/m/Y', strtotime($post->post_date))?></p>
            <p class="line-clamp-3 text-base">
                <?php the_excerpt() ?>
            </p>
        </div>
    </a>
<?php endwhile; endif; ?>