<?php get_header(); ?>


<section id="forside-intro-head">

    <div></div>

    <div id="forside-billede">

    </div>

    <div id="blue-forside" >

        <h1 id="main-overskrift" data-aos="fade-right" class="text-purple-600">Klar på næste hold?</h1>

        <span id="nedtel">
            <p id="countdown" data-aos="fade-right" data-aos-delay="1000"></p>
        </span>
        
        <div>
			<a href="/tilmeld/" data-aos="fade-up"><button class="main-site-knap"  id="knap-first">Tilmeld Hold</button></a>
			<a href="/priser/" data-aos="fade-up"><button class="main-site-knap" id="knap-last">Læs om forløbet</button></a>
        </div>

    </div>
    <div id="scroll-knap"><i class="fas fa-arrow-down"></i></div>
</section>

<main>

    <div class="halv-halv">

        <div id="erfaring-titel-forside">
            <h2 data-aos="fade-up" data-aos-offset="-100"><?php the_field('erfaring_titel'); ?></h2>
            <div class="main-streg"></div>
        </div>

        <div id="erfaring-tekst-forside">
            <p data-aos="fade-up" data-aos-offset="-100"><?php the_field('erfaring_tekst'); ?></p>
            <a href="/om-peter-b/" class="linking-anchor-blue" data-aos="fade-up"> <button class="main-site-knap">Læs om Peter
                    B</button></a>
        </div>

    </div>

    <div id="biler-forside">
        <h2 data-aos="fade-up"><?php the_field('sikkerbil_titel'); ?></h2>
        <a href="/koretojer/" class="" data-aos="fade-up"><button class="main-site-knap">Se vores
                biler</button></a>
    </div>

    <div class="halv-halv">

        <div id="forløb-titel-forside">
            <h2 data-aos="fade-up"><?php the_field('forlob_titel'); ?></h2>
            <div class="main-streg"></div>
        </div>

        <div id="forløb-tekst-forside">
            <div data-aos="fade-up"> <?php the_field('forlob_tekst'); ?></div>
            <a href="/priser/" class="linking-anchor-blue" data-aos="fade-up"><button class="main-site-knap">Læs om
                    forløb</button></a>
        </div>
    </div>

    <div id="gear-forside">
        <div id="gear-forside-tekst" data-aos="fade-up">

            <?php the_field('fa_fat_i_peter');?>
        </div>
        <a href="/kontakt/" class="linking-anchor-blue" data-aos="fade-up"><button class="main-site-knap">Skriv til Peter</button></a>
    </div>

    <div id="elever">
        <h2 data-aos="fade-up">Hvad siger de tidligere elever?</h2>

        <div id="elever-kom" data-aos="fade-up">

            <div>
                <?php the_field('elev_1');?>
                <div class="main-halv-streg"></div>
            </div>
            <div>
                <?php the_field('elev_2');?> 
                <div class="main-halv-streg"></div>   
            </div>
            <div>
                <?php the_field('elev_3');?>
                <div class="main-halv-streg"></div>
            </div>
        </div>
    </div>

</main>

<script>
	
	/*coundown landing page*/

var countDownDate = new Date("Jun 26, 2019 12:30:00").getTime();

var x = setInterval(function() {

  var now = new Date().getTime();

  var distance = countDownDate - now;

  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  document.getElementById("countdown").innerHTML = days + "d " + hours + "t "
  + minutes + "m " + seconds + "s ";

  if (distance < 0) {
    clearInterval(x);
    document.getElementById("countdown").innerHTML = "Næste hold er netop startet!";
  }
}, 1000);

</script>

<?php get_footer(); ?>