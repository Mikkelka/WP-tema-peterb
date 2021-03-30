<?php /* Template Name: bilerne */?>

<?php get_header(); ?>

<section id="underside-intro-head">

    <div id="biler-billede"> 
    </div>

    <div data-aos="fade-left" id="blue-undersider">
        <h1>
            <?php wp_title(''); ?>
        </h1>
    </div>

</section>

<main>

    <div class="halv-halv">

        <div id="bilerne-tekst">
            <div data-aos="fade-up">
                <?php the_field('mc'); ?>
				<div class="main-streg"></div>
            </div>

        </div>

        <div id="bilerne-billede">
        </div>

    </div>

    <div class="halv-halv">

        <div id="motorcyklerne-billede">

        </div>

        <div id="motorcyklerne-tekst">

            <div data-aos="fade-up">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <?php the_content(); ?>
				<div class="main-streg"></div>

                <?php endwhile; else: ?>

                <p>Sorry, this page does not exist</p>

                <?php endif; ?>
            </div>

        </div>

    </div>

</main>

<?php get_footer(); ?>