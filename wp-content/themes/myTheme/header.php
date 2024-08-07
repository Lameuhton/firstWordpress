<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title><?php bloginfo('name'); ?></title>
    
</head>
<body <?php body_class(); ?>>
    <header class="absolute top-0 left-0 w-full bg-transparent z-10">
        <nav class="container mx-auto px-4 py-2 grid grid-cols-3 items-center h-[81px]">
            <div class="bg-white px-5 py-1 rounded-full font-medium flex items-center gap-2 w-28">
                <i class="fa-solid fa-bars w-[18px] h-[18px] flex items-center"></i>
                <div>Menu</div>
            </div>
            <a href="<?php echo home_url(); ?>" class="text-white text-2xl font-bold mx-auto">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo">
            </a>
            <div class="flex space-x-4 justify-end">
                <a href="#section1" class="text-white">Contact Us</a>
                <a href="#section2" class="text-white">About Us</a>
            <div>
        </nav>
    </div>
    </header>
    
<?php wp_head(); ?>