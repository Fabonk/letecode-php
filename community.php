<?php include 'header.php'; 

$membres = [[
            "Photo"=>"Photo.jpeg",
            "NomComplet"=>"Fabrice BONKILE" 
          ],
          [
            "Photo"=>"JeanC.jfif",
            "NomComplet"=>"Jean Claude MBIYA"
          ],
         [
            "Photo"=>"amour.jfif",
            "NomComplet"=>"Amour MIATELANA"
         ],
         [
            "Photo"=>"Mikaba.jfif",
            "NomComplet"=>"Elisee MIKABA"
         ],
         [
            "Photo"=>"Guenael.jfif",
            "NomComplet"=>"Guenael LUMBUMBU"
         ],
         [
            "Photo"=>"Rabbin.png",
            "NomComplet"=>"Rabbin ELEMBO"
         ],
         [
            "Photo"=>"benny.jfif",
            "NomComplet"=>"Benny SIMISI"
         ],
         [
            "Photo"=>"daniel.jfif",
            "NomComplet"=>"Daniel SHABANI"
         ]
    ];
?>
    <section class="section header">
        <div class="container">
            <h1 class="mar-b-10"> La plus puissante Communauté</h1>
            <p class="mar-b-20">Une grande communauté des <br> développeurs du monde entier</b></p>
            <a href="" class="link btn">Rejoindre</a>
        </div>
    </section>

    <section class="section learn">
        <div class="container">
            <div class="bloc-item al-center">
                <h2 class="mar-b-10">Apprendre la<br> programmation</h2>
                <p class="mar-b-30">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi, ut! Cum repudiandae, quaerat ut unde dolore odit provident iste dolores numquam nostrum sunt. Nulla id neque, incidunt temporibus asperiores dolores.</p>
            </div>
            <div class="bloc-item al-center">
                <img src="images/python.png" alt="Logo">
            </div>
        </div>
    </section>
    
    <section class="Cmembres">
        <h1>Les membres</h1>

        <div class="list-membre">
        <?php foreach ($membres as $categorie => $personne) {?>
           <div class="membre-item"> 
            <img src="images/<?php echo $personne['Photo']; ?>" alt="Photo"> 
            <h3><?php echo $personne['NomComplet']; ?></h3> 
            </div>
        <?php }?>
        </div>
        
    </section>
<?php include 'footer.php'; ?>