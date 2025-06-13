<!DOCTYPE html>
    <html lang="en-US" prefix="og: http://ogp.me/ns#">
        <head>
            <title>Van Tatenhove Center for Counseling</title>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
            <link href="/wp-content/theme/temp/addons/slick/fonts/slick.svg" rel="stylesheet">
            <?php wp_head(); ?>
            <link rel="stylesheet" type="text/css" href="/wp-content/theme/temp/addons/slick/slick.css"/>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
        </head>

        <body class="w-full flex flex-col min-h-screen justify-between bg-vtcgrey-200">
            <div>
                <header>
                    <nav class="flex text-atsblue-100 justify-between items-center px-5 py-2 bg-white">
                        <a href="/">
                            <img src="/wp-content/uploads/vtc-logo.png" class="w-[300px]" />
                        </a>
                        <div class="menu">
                            <div class="hidden md:flex gap-5">
                                <?php include 'inc/main-nav.php'; ?>
                            </div>
                            
                        <?php include 'inc/mobile-nav.php'; ?>
                        </div>
                    </nav>



                    <div style="background: transparent linear-gradient(269deg, #0D5E82 0%, #0A455C 100%) 0% 0% no-repeat padding-box; opacity: 1;">
                        <p class="text-white  px-5 py-2 italic font-bold -mb-2">Professional + Confidential + Accessible</p>
                    </div>
                    
                            <div class="w-full relative h-[450px] max-lg:h-[350px] max-md:h-[250px] max-sm:h-[150px]" style="background: url('<?php the_field('header_image');?>') no-repeat center center;  background-size: cover; z-index: -1;">
                            </div>
                </header>
