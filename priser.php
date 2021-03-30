<?php /* Template Name: Priser */?>

<?php get_header(); ?>


<section id="underside-intro-head">

    <div id="priser-billeder">

    </div>
    

    <div data-aos="fade-left" id="blue-undersider">
        <h1>
            <?php wp_title(''); ?>
        </h1>
    </div>

</section>

<main>

    <div class="halv-halv">

        <div id="kørekort-personbil-tekst">

            <div data-aos="fade-up">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


                <?php the_content(); ?>
				<div class="main-streg"></div>

                <?php endwhile; else: ?>

                <p>Sorry, this page does not exist</p>

                <?php endif; ?>
            </div>

        </div>

        <div data-aos="fade-up" id="pris-personbil">
            <?php the_field('pris_personbil'); ?>
            <a href="tilmeld" class=""> <button class="pris-knap">Tilmeld hold</button></a>
        </div>

    </div>

    <div class="halv-halv">

        <div data-aos="fade-up" id="pris-motorcykel">
            <?php the_field('pris_mc'); ?>
            <a href="tilmeld" class=""> <button class="pris-knap">Tilmeld hold</button></a>
        </div>

        <div id="kørekort-motorcykel-tekst">
            <div data-aos="fade-up">
                <?php the_field('motorcykel_tekst'); ?>
				<div class="main-streg"></div>
            </div>   
        </div>

    </div>

    <div class="halv-halv">

        <div id="kørekort-trailer-tekst">
            <div data-aos="fade-up">
                <?php the_field('trailer_tekst'); ?>
				<div class="main-streg"></div>
            </div>
        </div>

        <div id="pris-trailer" data-aos="fade-up">
            <?php the_field('pris_trailer'); ?>
            <a href="tilmeld" class=""> <button class="pris-knap">Tilmeld hold</button></a>
        </div>

    </div>

    <div class="halv-halv">

        <div id="generhverv-pris" data-aos="fade-up">
            <?php the_field('pris_generhverv'); ?>
            <a href="tilmeld" class=""> <button class="pris-knap">Tilmeld hold</button></a>
        </div>

        <div id="kørekort-generhverv-tekst">
            <div data-aos="fade-up">
               <?php the_field('generhverv'); ?>
				<div class="main-streg"></div>
            </div>
        </div>

    </div>



</main>



<?php get_footer(); ?>