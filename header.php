<!DOCTYPE html>
<html lang="en">

<head>
    <?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="tailwind.css"> -->
    <title>Peter-B's Køreskole</title>
</head>

<body>  
 

    <header>

       <a href="/"><h1> <?php bloginfo('name');?> </h1></a>

        <div>
            <?php wp_nav_menu(); ?>
        </div>
        
    
        <div id="mobile-menu-button"><i class="fas fa-bars"></i></div>

    </header>

   
        <div id="mobile-menu-container">
        <div id="mobile-close"><i class="fas fa-times"></i></div>
            <div id="mobile-content">
            <?php wp_nav_menu(); ?>
            </div>
        </div>
        