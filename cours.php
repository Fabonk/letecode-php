<?php include 'header.php'; ?>
<?php
$cours = [["Image" => "html55.png",
        "Titre" => "HTML5",
        "Description" => "Apprenez le meilleur langage de balisage",
        "VolumeHoraire"=>"5 heures"
          ],
          [
        "Image" => "css3.png",
        "Titre"=>"CSS3",
        "Description"=>"Apprenez le meilleur langage de style",
        "VolumeHoraire"=>"8 heures"
    ],
    [
        "Image" => "python.png",
        "Titre"=>"PYTHON",
        "Description"=>"Apprenez le meilleur langage de programmation",
        "VolumeHoraire"=>"8 heures"
        ]
    ];
?> 
    <section class="Cmembres">
        <div class="container">
            <h1>Cours</h1>
            <div class="cours-list">
            <?php foreach ($cours as $categorie => $element) {?>
                <div class="cours-item"> 
                            <img src="images/<?php echo $element['Image']; ?>" alt="Photo"> 
                            <h2><?php echo $element['Titre']; ?></h2> 
                            <p><?php echo $element['Description']; ?></p>
                            <p><?php echo $element['VolumeHoraire']; ?></p> 
                </div>
            <?php }?>
            </div>
        </div>
       
    </section>

    <section class="section learn">
        <div class="container">
            <div class="bloc-item al-center">
                <h2 class="mar-b-30">Abonnez-vous à la boite<br> aux lettres</h2>
                <p class="mar-b-30">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi, ut! Cum repudiandae, quaerat ut unde dolore odit provident iste dolores numquam nostrum sunt. Nulla id neque, incidunt temporibus asperiores dolores.</p>
            </div>
            <div class="bloc-item al-center">
               <form action="cours.html" method="get">
                <input class="input" type="text" value="Adresse email"><br>
                <button class="btn form">S'abonner</button>
               </form>
            </div>
        </div>
    </section>
<?php include 'footer.php'; ?>