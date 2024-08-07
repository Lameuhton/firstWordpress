<?php get_header(); ?>

<main class="relative mx-auto w-screen h-screen" style="background-image: url(<?php the_field('image'); ?>); background-size: cover; background-position: center; height: 1440px;">

    <h1 class="pt-48 text-7xl text-center text-white font-medium max-w-[800px] mx-auto tracking-tight leading-tight"><?php the_field('titre'); ?></h1>

    <div class="prose lg:prose-xl mt-8 text-white text-center">
        <p><?php the_field('contenu'); ?></p>
    </div>

</main>
<section>

</section>
<section class="pl-8 ">
    <?php
    $images = get_field('images-gallery');
    if( $images ): ?>
        <div class="flex  overflow-x-scroll gap-10">
            <?php foreach( $images as $image ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="w-full" />
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

</section>
<section>

</section>

<?php get_footer(); ?>
