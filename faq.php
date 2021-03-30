<?php /* Template Name: FAQ */?>

<?php get_header(); ?>

<section id="underside-intro-head">

    <div id="faq-billede">

    </div>

    <div data-aos="fade-left" id="blue-undersider">
        <h1>
            <?php wp_title(''); ?>
        </h1>
    </div>

</section>

<main>

    <div id="spørgsmål" data-aos="fade-up">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>

        <?php endwhile; else: ?>

        <p>Sorry, this page does not exist</p>

        <?php endif; ?>

        <div id="faq">
            
            <?php 

            $args = array
                (
                'post_type' => 'faqs',
                'posts_per_page' => -1,
                'order' => 'ASC' 
            );

            $loop = new WP_Query( $args );

            if ( $loop->have_posts() ) : 

            while ( $loop->have_posts() ) : $loop->the_post(); ?>


            <div id="faq-template" data-aos="fade-up">

                <h2 class="faq-input-header"><?php the_title(); ?></h2>
                <div class="faq-input-content">
                    <p><?php the_content(); ?></p>

            </div>


            <?php endwhile;

        wp_reset_postdata();

        else : 

        endif; 
        ?>


            </div>



        </div>

</main>

<?php get_footer(); ?>