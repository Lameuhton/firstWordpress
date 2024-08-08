<?php get_header(); ?>

<main class="relative mx-auto w-screen h-screen" style="background-image: url(<?php the_field('image'); ?>); background-size: cover; background-position: center; height: 1440px;">
    <h1 class="pt-48 text-7xl text-center text-white font-medium max-w-[800px] mx-auto tracking-tight leading-tight"><?php the_field('titre'); ?></h1>

    <div class="prose lg:prose-xl mt-8 text-white text-center">
        <p><?php the_field('contenu'); ?></p>
    </div>
</main>

<section class="px-14 pt-24 pb-14 h-[496px] grid grid-cols-[40%_60%]">
    <h2 class="h2"><?php the_field('titre_section2'); ?></h2>
    <div class="flex flex-col justify-between">
        <p class="p"><?php the_field('texte_section2'); ?></p>
        <div class="grid grid-cols-3 grid-rows-2">
            <p class="col-start-1 col-end-2 row-start-1 row-end-2 h2"><?php the_field('stat1'); ?></p>
            <p class="col-start-1 col-end-2 row-start-2 row-end-3 p"><?php the_field('titre_stat1'); ?></p>
            <p class="col-start-2 col-end-3 row-start-1 row-end-2 h2"><?php the_field('stat2'); ?></p>
            <p class="col-start-2 col-end-3 row-start-2 row-end-3 p"><?php the_field('titre_stat2'); ?></p>
            <p class="col-start-3 col-end-4 row-start-1 row-end-2 h2"><?php the_field('stat3'); ?></p>
            <p class="col-start-3 col-end-4 row-start-2 row-end-3 p"><?php the_field('titre_stat3'); ?></p>
        </div>
    </div>
    
</section>

<section class="pl-14 max-h-[400px] py-10">
    <?php
    $images = get_field('images-gallery');
    if( $images ): ?>
        <div class="flex overflow-x-scroll no-scrollbar snap-x no-select gap-10 w-auto" id="imageSlider">
            <?php foreach( $images as $image ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="no-select max-h-[320px]" draggable="false"/>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</section>

<section class="grid grid-cols-[40%_60%] px-14 py-24 gap-y-12">
    <div class="col-start-2 col-end-3 flex flex-col gap-8">
       <h3 class="h3"><?php the_field('titre1_section4'); ?></h3>
        <p class="p"><?php the_field('texte1_section4'); ?></p> 
    </div>
    <div class="col-start-2 col-end-3 flex flex-col gap-8">
       <h3 class="h3"><?php the_field('titre2_section4'); ?></h3>
        <p class="p"><?php the_field('texte2_section4'); ?></p> 
    </div>
    <div class="col-start-2 col-end-3 flex flex-col gap-8">
       <h3 class="h3"><?php the_field('titre3_section4'); ?></h3>
        <p class="p"><?php the_field('texte3_section4'); ?></p> 
    </div>
</section>

<?php get_footer(); ?>
