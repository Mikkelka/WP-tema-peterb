<?php /* Template Name: Om os */?>

<?php get_header(); ?>

<section id="underside-intro-head">

    <div id="omos-billede">
        
    </div>
    

    <div data-aos="fade-left" id="blue-undersider">
        <h1>
            <?php wp_title(''); ?>
        </h1>
    </div>

</section>

<main>

    <div class="halv-halv">

        <div id="om-os-tekst">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <div data-aos="fade-up"><?php  the_content(); ?></div>
			<div class="main-streg" data-aos="fade-up"></div>
            
            <?php endwhile; else: ?>

            <p>Sorry, this page does not exist</p>

            <?php endif; ?>
            
            
        </div>

        <div id="om-os-billede">

        </div>

    </div>

    <div id="korelærer">
        <h1 data-aos="fade-up">Mød os</h1>

        <div id="lærer">

            <?php 
            $args = array
            (
            'post_type' => 'post',
            'posts_per_page' => -1,
            'order' => 'ASC' 
            );

            $loop = new WP_Query( $args );

            if ( $loop->have_posts() ) : 
                
            while ( $loop->have_posts() ) : $loop->the_post(); ?>

            <div id="kørelærer-template" data-aos="fade-up">
                <?php the_post_thumbnail('medium'); ?>
                <h2><?php the_title(); ?></h2>
                <div class="streg"></div>
                <p><?php the_content(); ?></p>
            </div>


            <?php endwhile;

            wp_reset_postdata();

            else : 
                
            endif; 
            ?>

        </div>

    </div>


    <div class="halv-halv">

        <div id="ks-lokaler-billede">
         
        </div>

        <div id="ks-lokaler" data-aos="fade-up">
            <?php the_field('lokaler'); ?>
			<div class="main-streg" data-aos="fade-up"></div>
        </div>

    </div>

</main>

<?php get_footer(); ?>