<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Lien Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <!-- Lien Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Stardos+Stencil&display=swap" rel="stylesheet" />
  <!-- Lien Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Lien CSS -->
  <link rel="stylesheet" href="style.css" />
  <!-- Icone Onglet -->
  <link rel="shortcut icon" href="./content/logo.png" type="image/png" />
  <title>
    EGPB&I | Entreprise Générale de Peinture en Batiment & Industrielle
  </title>
</head>

<body>
  <!------------------------------------ Page 1 ------------------------------------>
  <div class="page1" id="accueil">
    <!-- Haut de page -->
    <div class="fb">
      <a href="https://www.facebook.com/Egpbi?ref=br_rs" target="_blank">
        Visitez Notre Page Facebook <i class="fab fa-facebook-square"></i></a>
    </div>
    <!-- NavBar -->
    <nav>
      <ul>
        <li><a href="#accueil">Accueil</a></li>
        <li><a href="#quiSommesNous">Qui Sommes-Nous ?</a></li>
        <li><a href="#prestations">Nos Prestations</a></li>
        <li>
          <a href="#contact"><button class="button0">Nous Contacter</button></a>
        </li>
      </ul>
    </nav>
    <!-- Header -->
    <header>
      <div class="logo">
        <!-- Logo -->
        <img src="./content/logo.png" alt="logo" />
      </div>
      <!-- Texte présentation -->
      <div class="welcomeText">
        <p>RELOOKING <span>STATIONS</span></p>
        <p><span>POSE</span> D'ENSEIGNES</p>
        <p>RÉFECTION <span>DE CUVES</span></p>
        <p><span>CLOISONS</span> SÈCHES</p>
        <p>PLAFONDS ET <span>SOLS TECHNIQUES</span></p>

        <button class="button1">Nos Réalisations</button>
      </div>
    </header>
  </div>
  <!------------------------------------ Page 2 ------------------------------------>
  <main id="quiSommesNous">
    <h2>Qui Sommes-Nous ?</h2>
    <div class="page2">
      <!-- Colonne texte gauche -->
      <div class="leftColumn">
        <p>
          La SARL EGPB&I, existant depuis 2012, est spécialisée dans la
          peinture anticorrosion. A ce jour plus de 260 STATIONS SERVICES ET
          DEPOTS PETROLIERS ont été relookés intégralement, des réfections de
          distributeurs à la pose ou l’échange d’enseigne, en passant par les
          peintures au sol et tout travails complémentaires (peintures de
          façade, d’intérieur, réagencement placo ou autre).
        </p>
        <p>
          Notre entreprise est certifiée ACQPA, RGE, avec les agréments
          électriques pour des petites opérations et l’agrément HSSE. La
          société EGPB&I peut intervenir sur de nombreux sites.
        </p>
      </div>
      <!-- Colonne Photos Droite -->
      <div class="rightColumn">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="./content/souprosse 40.JPG" class="d-block w-100" alt="1" />
            </div>
            <div class="carousel-item">
              <img src="./content/station services/lavaveix les mines 87.JPG" class="d-block w-100" alt="2" />
            </div>
            <div class="carousel-item">
              <img src="./content/station services/roquecourbe 81.JPG" class="d-block w-100" alt="3" />
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </main>
  <!------------------------------------ Page 3 ------------------------------------>
  <div class="page3" id="prestations">
    <!-- Titre Page 3 -->
    <h2>Nos Prestations</h2>
    <!-- Paragraphe -->
    <p></p>
    <!-- Cartes exemples -->
    <article class="cards">
      <!-- Carte 1 -->
      <div class="card" id="card0">
        <img src="./content/station services/blaignac sur cele 46 (2).JPG" alt="Station Service" />
        <div class="cardBody">
          <h3 class="cardTitle">Stations Services</h3>
          <p class="cardText">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga in,
            modi nulla fugit animi sint sapiente quam? In nemo, laboriosam
            possimus eligendi quidem eaque. Voluptatum.
          </p>
          <a href="./index2.html"><button>Découvrir</button></a>
        </div>
      </div>
      <!-- Carte 2 -->
      <div class="card" id="card1">
        <img src="./content/depots/Baraqueville 12/depot de barraqueville 1.JPG" alt="Cuves" />
        <div class="cardBody">
          <h3 class="cardTitle">Réfections de Cuves</h3>
          <p class="cardText">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga in,
            modi nulla fugit animi sint sapiente quam? In nemo, laboriosam
            possimus eligendi quidem eaque. Voluptatum.
          </p>
          <a href="./index3.html"><button>Découvrir</button></a>
        </div>
      </div>
      <!-- Carte 3 -->
      <div class="card" id="card2">
        <img src="./content/refection distributeur/saint pierre d'eyraud.JPG" alt="distributeur" />
        <div class="cardBody">
          <h3 class="cardTitle">Distributeurs</h3>
          <p class="cardText">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga in,
            modi nulla fugit animi sint sapiente quam? In nemo, laboriosam
            possimus eligendi quidem eaque. Voluptatum.
          </p>
          <a href="./index4.html"><button>Découvrir</button></a>
        </div>
      </div>
      <!-- Carte 4 -->
      <div class="card" id="card3">
        <img src="./content/souprosse 40.JPG" alt="" />
        <div class="cardBody">
          <h3 class="cardTitle">Divers</h3>
          <p class="cardText">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga in,
            modi nulla fugit animi sint sapiente quam? In nemo, laboriosam
            possimus eligendi quidem eaque. Voluptatum.
          </p>
          <a href="#!"><button>Découvrir</button></a>
        </div>
      </div>
    </article>
    <!-- Labels -->
    <div class="agréments">
      <h2>Agréments</h2>
      <a href="https://www.acqpa.com/" target="_blank"><button id="agrément">ACQPA</button></a>
      <a href="https://www.service-public.fr/professionnels-entreprises/vosdroits/F32251" target="_blank"><button id="agrément">RGE</button></a>
      <button id="agrément">HSSE</button>
    </div>
  </div>
  <!------------------------------------ Page 4 ------------------------------------>
  <div class="contact" id="contact">
    <h2>Nous contacter</h2>
    <p>
      Une question ? Une demande ? N'hésitez pas à nous contacter, nous vous
      répondrons dans les meilleurs délais !
    </p>
    <div class="forms">
      <!-- Colonne Gauche -->
      <div class="phoneMailLogo">
        <div class="name" id="infosEts">
          <i class="fas fa-signature"></i> Sébastien VILCHES
        </div>
        <div class="phone" id="infosEts">
          <i class="fas fa-phone"></i> 06.28.81.67.56
        </div>
        <div class="mail" id="infosEts">
          <i class="far fa-envelope"></i> <a href="mailto:egpbi.sv@gmail.com"> egpbi.sv@gmail.com</a>
        </div>
        <a href="#accueil">
          <div class="logoEts">
            <!-- Background image CSS -->
          </div>
        </a>

        <!-- Footer -->
        <footer>
          <ul>
            <li><a href="#!">Politique de Confidentialité</a></li>
            <li><a href="#!">Mentions Légales</a></li>
            <li><a href="index.php#accueil">Accueil</a></li>
          </ul>
        </footer>

      </div>
      <!-- Colonne Droite -->

      <!-- PHP gestion du mailing -->

      <?php

      $object = htmlspecialchars($_POST["object"]);
      $nomFamille = htmlspecialchars($_POST["name"]);
      $prenom = htmlspecialchars($_POST["firstName"]);
      $mail = htmlspecialchars($_POST["mail"]);
      $message = htmlspecialchars($_POST["message"]);


      if (isset($_POST["name"]) && isset($_POST["firstName"]) && isset($_POST["mail"]) && isset($_POST["message"])) {
        mail("bnjmn.lacour@gmail.com", $object, $prenom . " " . $nomFamille . " " . $mail, $message);
      }

      ?>

      <div class="contactForm">
        <h4>Formulaire de Contact</h4>
        <form method="post" action="index.php" class="formContact">
          <input name="object" type="text" placeholder="Sujet" required />
          <input name="name" type="text" placeholder="Nom" required />
          <input name="firstName" type="text" placeholder="Prénom" required />
          <input name="mail" type="email" placeholder="Adresse Mail" required />
          <textarea name="message" id="message" cols="30" rows="5" placeholder="Votre Message" required></textarea>
          <button type="submit">Envoyer</button>
        </form>
      </div>
    </div>
  </div>
  <!-- Script Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>