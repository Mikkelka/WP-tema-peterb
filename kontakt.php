<?php /* Template Name: kontakt */?>


<?php get_header(); ?>
<?php 
	
if (isset($_POST['submit'])) {
	$result="";
	require 'PHPMailer/PHPMailerAutoload.php';
	$mail = new PHPMailer;
	$mail->IsSMTP();
	$mail->CharSet = 'UTF-8'; 
	$mail->Host='smtp.unoeuro.com';
	$mail->Port=587;
	$mail->SMTPAuth=true;
	$mail->SMTPSecure='tls';
	$mail->AuthType='LOGIN';
	$mail->Username='testpeterb@simon-krogh.com';
	$mail->Password='TICKuHani';
	
	$mail->setFrom(''.$_POST['email']);
	$mail->addAddress('gruppe10test@gmail.com');
	
	$mail->isHTML(true);
	$mail->Subject=''.$_POST['emne'];
	$mail->Body='<p> Navn: '.$_POST['navn']. '<br> Mailadresse: ' .$_POST['email']. '<br> Mobilnummer: '
		.$_POST['mobilnummer']. '<br> Besked: ' .$_POST['Besked']. '</p>';
	
	
	if(!$mail->send()){
		$result="Noget gik galt, prøv venligst igen";
		
	}
	else{
		$result="<p style='color: #1E88E5; font-weight: 800;'> Tak for din mail "
			.$_POST['navn']." vi vender tilbage til dig hurtigst muligt. </p>";
	}
}

?>

<section id="underside-intro-head">

    <div id="kontakt-billede">

    </div>

    <div data-aos="fade-left" id="blue-undersider">
        <h1>
            <?php wp_title(''); ?>
        </h1>
    </div>

</section>

<main>

    <div class="halv-halv">

        <div id="kontakt-os-tekst">

            <div data-aos="fade-up">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <?php the_content(); ?>
				<div class="main-streg"></div>

                <?php endwhile; else: ?>

                <p>Sorry, this page does not exist</p>

                <?php endif; ?>
            </div>

        </div>

        <div id="kontakt-form">
	
            <form class="" method="post">
				<h2>
					Kontaktformular
				</h2>
                <input type="text" name="navn" placeholder="Fulde navn">
                <input type="email" name="email" placeholder="Din mail">
                <input type="text" name="mobilnummer" placeholder="Nummmer">
				<input type="text" name="emne" placeholder="Emne">
                <textarea name="Besked" id="" placeholder="Skriv besked"></textarea>
                <button id="kontakt-knap" type="submit" name="submit">SEND</button>
				<?=$result; ?>
            </form>

        </div>

    </div>

    <div class="halv-halv">

        <div id="kontakt-google-maps">
            <div class="mapouter">
                <div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas"
                        src="https://maps.google.com/maps?q=Granlunden%204A%2C%209310%20Vodskov%20&t=&z=17&ie=UTF8&iwloc=&output=embed"
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div>
                <style>
                    .mapouter {
                        position: relative;
                        text-align: right;
                        height: 500px;
                        width: 100%;
                    }

                    .gmap_canvas {
                        overflow: hidden;
                        background: none !important;
                        height: 500px;
                        width: 100%;
                    }
                </style>
            </div>
        </div>

        <div id="kontakt-find-os">
            <div data-aos="fade-up">
                <?php the_field('informationer'); ?>
				<div class="main-streg"></div>
            </div>
        </div>

    </div>

</main>

<?php get_footer(); ?>