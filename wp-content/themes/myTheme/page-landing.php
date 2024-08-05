<?php
/* Template Name: Landing Page */
get_header();
?>

<div class="container mx-auto p-4" style="background-image: url('<?php the_field('image'); ?>');">
    <h1 class="text-5xl font-bold text-center"><?php the_field('titre'); ?></h1>
    <!-- <p class="text-2xl text-center mt-4"><?php the_field('sous_titre'); ?></p> -->
    <div class="prose lg:prose-xl mt-8">
        <?php the_field('contenu'); ?>
    </div>
    <!-- <div class="text-center mt-8">
        <a href="#" class="bg-blue-500 text-white py-2 px-4 rounded"><?php the_field('bouton_cta'); ?></a>
    </div> -->
</div>

<?php get_footer(); ?>
