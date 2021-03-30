<?php /* Template Name: Tilmeld */?>

<?php get_header(); ?>

<main>

    <div id="tilmeldning">
		
		<div id="tilmeldform">
			
			<form method="POST" required>
            <select name="hold" required>
                <option selected hidden value="">Vælg et hold</option>
                <option value="Personbil">Personbil <span> - Dato 13-05-2019</span> </option>
                <option value="Motorcykel">Motorcykel <span> - Dato 13-05-2019 </span> </option>
                <option value="Trailer">Trailer <span> - Dato 13-05-2019 </span> </option>
                <option value="Generhverv">Generhverv <span> - Dato 13-05-2019 </span> </option>
            </select>

            <label for="">Fornavn</label> <input type="text" name="fornavn" required
                placeholder="Fornavn..">
            <label>Efternavn</label><input type="text" name="efternavn" required placeholder="Efternavn..">
            <label>Email</label><input type="email" name="email" required placeholder="Email Adresse..">
            <label>Telefon</label><input type="tel" name="tel" required placeholder="Telefonnummer..">
            <input id="tilmeld-knap" type="submit" name="submit" value="Send" id="button">
        </form>
			
		</div>

        <div id="tilmeld-tekst">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<h2>
					<?php the_title(); ?>
				</h2>
			
                <?php the_content(); ?>
				<div class="main-streg"></div>
                <?php endwhile; else: ?>

                <p>Sorry, this page does not exist</p>

                <?php endif; ?>
        </div>


    </div>
</main>
<?php

$hold = $_POST['hold'];
$fornavn = $_POST['fornavn'];
$efternavn = $_POST['efternavn'];
$email = $_POST['email'];
$tel = $_POST['tel'];

if (!empty($hold) || !empty($fornavn) || !empty($efternavn) || !empty($email) || !empty($tel))  {
    $host = "mysql60.unoeuro.com";
       $dbUsername = "mikkelkjaer_dk0";
       $dbPassword = "gfeabcdx";
       $dbname = "mikkelkjaer_dk0_db";
       //create connection
       $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
       if (mysqli_connect_error()) {
        exit('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
       } else {
        $SELECT = "SELECT email From tilmeld Where email = ? Limit 1";
        $INSERT = "INSERT INTO tilmeld (hold, fornavn, efternavn, email, tel) values(?, ?, ?, ?, ?)";
        //Prepare statement
       //Checker de allerede eksisterende mails for at sikre at der ikke er et overlap.
       //
       //
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum = $stmt->num_rows;
        if ($rnum==0) {
		if(isset($_POST['submit'])) {
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
    $mail->Username='peterbv2@xn--mikkelkjr-n3a.dk ';
    $mail->Password='zi61rowocuxa';
    $mail->setFrom('gruppe10test@gmail.com');
    $mail->addAddress($_POST['email']);
    
    $mail->isHTML(true);
    $mail->Subject='Din tilmelding hos Peter-Bs køreskole';
    $mail->Body='Tak fordi du tilmeldte dig et af vores hold, vi glæder os til at se dig. Hvis du mener at dette er en fejl, så send skriv venligst en besked til os på: testpeterb@simon-krogh.com';
    
    if(!$mail->send()){
        $result="Noget gik galt, prøv venligst igen";
        
    }
    else{
        $result="<p style='color: #1E88E5; font-weight: 800;'> Tak for din tilmeldelse ";
    }
}
         $stmt->close();

        //Klargører statement for options som skal indsættes i databasen.
         $stmt = $conn->prepare($INSERT);
         //Følgende parametre "string, string, string, string, integer - bindes til de udarbejdede keys//
         $stmt->bind_param("ssssi", $hold, $fornavn, $efternavn, $email, $tel);
         $stmt->execute();
         echo "<div id='align'> Sådan, du er nu tilmeldt vores hold! Tak fordi du valgte Peter-B's køreskole - vi glæder os til at se dig.</div>";
        } else {
         echo "<div id='align'> Denne email eksisterer allerede i vores database. Kontakt os hvis du mener at dette er en fejl.</div>";
        }
        $stmt->close();
        $conn->close();
       }
   } else{
get_footer(); 
    exit();
   }
?>
<?php get_footer(); ?>



