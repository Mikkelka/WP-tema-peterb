<?php 

if (isset($_POST['submit'])) {
    $name = $_POST['navn'];
    $mailfra = $_POST['mail'];
    $nummer = $_POST['mobilnummer'];
    $besked = $_POST['besked'];

    $mailTil = "1067556@ucn.dk";
    $headers = "From: ".$mailfra;
    $tekst = "Du har modtaget en mail fra ".$navn.".\n\n".$besked;

    mail($mailTil, $name, $tekst, $headers);
    header("Location: page.php?mailsend");

}

?>