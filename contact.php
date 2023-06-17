<?php include 'header.php'; ?>
<?php


if (isset($_POST["submit_btn"])) {


    $to = "fabricebonkile@gmail.com";

    $subject = 'Mail sent from sendmail PHP script';

    $from = $_POST["email"];

    $message = $_POST["msg"];

    $headers = "From: $from";


    if (mail($to, $subject, $message, $headers)) {

        $responseText = 'Mail sent successfully.';

    } else {

        $responseText = 'Unable to send mail. Please try again.';

    }
}

?>
<?php 

if(!empty($responseText)) {

?>


<div class="response-ribbon">

<?php echo $responseText; ?>

</div>


<?php 

}

?>

<div class="bloc-formulaire">
    <div class="enteteF">
        <h2>Nous contacter</h2>
    <p class="mar-b-20">Remplissez le formulaire pour nous laisser un message</p>
    </div>

                <form id="email-form" name="email-form" action="contact.php" method="post">
                    <section class="B-Contact">
                        <div class="B-input">
                            <label for="Nom" class="mar-b-40">Nom</label>
                            <input type="text" name="nom" class="input"><br>
                            <label for="Nom" class="mar-b-40">Adresse e-mail</label>
                            <input type="text" name="email" class="input"><br>
                        </div>

                        <div class="B-input">
                            <label for="Nom" class="mar-b-20">Pays</label>
                            <select name="list-pays" class="input">
                                <option class="mar-b-20">Choisir</option>
                                <option class="mar-b-20">RDC</option>
                                <option class="mar-b-20">Cameroun</option>
                                <option class="mar-b-20">Tchad</option>
                                <option class="mar-b-20">Gabon</option>
                            </select><br>
                            <label for="Nom" class="mar-b-40">Objectif</label>
                            <input type="text" name="nom" class="input">
                        </div>
                    </section>
                    <div class="B-Area">
                    <label for="Message">Message</label>
                    <textarea name="msg" id="" cols="30" rows="10" class="area"></textarea><br>
                    <button class="btn form submit_btn">Envoyer le message</button>
                    </div>
                </form>
            </div>

    <section class="section learn">
        <div class="container">
            <div class="bloc-item al-center contactF">
                <h2 class="mar-b-10">Abonnez-vous à la boite<br> aux lettres</h2>
                <p class="mar-b-20">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi, ut! Cum repudiandae, quaerat ut unde dolore odit provident iste dolores numquam nostrum sunt. Nulla id neque, incidunt temporibus asperiores dolores.</p>
            </div>
            <div class="bloc-item newletter">
               <form action="cours.html" method="get">
                <input class="input" type="text" value="Adresse email"><br>
                <button class="btn form">S'abonner</button>
               </form>
            </div>

        </div>
    </section>
<?php include 'footer.php'; ?>