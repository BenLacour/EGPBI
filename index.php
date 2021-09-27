<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="EGPBI est l'entreprise de peinture en batiment et industrielle qui répondra à toutes vos attentes dans le grand Sud-Ouest">
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
        <p>PEINTURE <span>ANTICORROSION</span> & ETANCHEITE <br>
          RELOOKING <span>STATIONS</span>
          <span>POSE</span> D'ENSEIGNES
          RÉFECTION <span>DE CUVES</span>
          <span>CLOISONS</span> SÈCHES
          PLAFONDS ET <span>SOLS TECHNIQUES</span>
        </p>

        <a href="#prestations"><button class="button1">Nos Réalisations</button></a>
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
          Notre entreprise est certifiée ACQPA N2 option ABE, RGE, avec les agréments électriques pour des petites opérations et l’agrément HSSE, nous pouvons intervenir sur de nombreux sites.
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
      <a href="./index2.html">
        <div class="card" id="card0">
          <img src="./content/station services/blaignac sur cele 46 (2).JPG" alt="Station Service" />
          <div class="cardBody">
            <h3 class="cardTitle">Stations Services</h3>
            <p class="cardText">
              Présent sur 22 départements du Grand Sud-Ouest de la France, les stations sont refaites dans leur intégralité, de la bordure du trottoir au changement d’enseigne en passant par la réfection du haut vent, des distributeurs ...
            </p>
            <a href="./index2.html"><button>Découvrir</button></a>
          </div>
        </div>
      </a>
      <!-- Carte 2 -->
      <a href="./index3.html">
        <div class="card" id="card1">
          <img src="./content/depots/Baraqueville 12/depot de barraqueville 1.JPG" alt="Cuves" />
          <div class="cardBody">
            <h3 class="cardTitle">Réfections de Cuves</h3>
            <p class="cardText">
              Certifié ACQPA N2 ABE, les dépôts sont nettoyés et les points de corrosion traités avant d’être peints ou repeints avec une peinture anti corrosion. <br>
              Les bacs sont nettoyés et une imperméabilisation est réalisée

            </p>
            <a href="./index3.html"><button>Découvrir</button></a>
          </div>
        </div>
      </a>
      <!-- Carte 3 -->
      <a href="./index4.html">
        <div class="card" id="card2">
          <img src="./content/refection distributeur/saint pierre d'eyraud.JPG" alt="Distributeur" />
          <div class="cardBody">
            <h3 class="cardTitle">Distributeurs</h3>
            <p class="cardText">
              Les portes de distributeurs sont dégraissées, poncées puis repeintes au pistolet basse pression, à la peinture polyuréthane pour un meilleur rendu. Généralement peintes sur place, il est toujours possible de les peindre en atelier
            </p>
            <a href="./index4.html"><button>Découvrir</button></a>
          </div>
        </div>
      </a>
      <!-- Carte 4 -->
      <a href="./index5.html">
        <div class="card" id="card3">
          <img src="./content/dga/30052012563.jpg" alt="Divers" />
          <div class="cardBody">
            <h3 class="cardTitle">Divers</h3>
            <p class="cardText">
              Le bâtiment est un milieu passionnant en constante évolution avec des champs d’exploration aussi vastes que divers et avec plus de 20 ans d’expériences dans ce domaine, j’ai exploré un certain nombre d’entre eux : isolation, agencement, etc…
            </p>
            <a href="./index5.html"><button>Découvrir</button></a>
          </div>
        </div>
      </a>
    </article>
    <!-- Labels -->
    <div class="agréments">
      <h2>Agréments & Certificat</h2>
      <a href="https://www.acqpa.com/" target="_blank"><button id="agrément">ACQPA N2 Options ABE</button></a>
      <a href="https://www.service-public.fr/professionnels-entreprises/vosdroits/F32251" target="_blank"><button id="agrément">R.G.E.</button></a>
      <button id="agrément">H.S.S.E.</button>
      <!-- Certificat ACQPA -->
      <div class="certification">
        <img src="./content/certificat ACQPA.PNG" alt="certificat" />
      </div>
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
          <i class="fas fa-phone"></i> <a href="tel:+33628816756">06.28.81.67.56</a>
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
          <a href="index.php#accueil">Haut de page</a>
        </footer>

      </div>

      <!-- Colonne Droite -->

      <!-- PHP gestion du mailing -->

      <?php

      // Définition des variables

      $object = $_POST["object"];
      $nomFamille = $_POST["name"];
      $entreprise = $_POST["enterprise"];
      $mail = $_POST["mail"];
      $message = $_POST["message"];

      // Traitement de l'envoi

      if (
        isset($_POST["object"]) && isset($_POST["name"]) && isset($_POST["enterprise"]) && isset($_POST["mail"]) && isset($_POST["message"])
        && $_POST["object"] != "" && $_POST["name"] != "" && $_POST["enterprise"] != "" && $_POST["mail"] != "" && $_POST["message"] != ""
      ) {

        $msg = "Nom Prenom:\t$nomFamille\n";
        $msg .= "Entreprise:\t$entreprise\n";
        $msg .= "E-Mail:\t$mail\n";
        $msg .= "Message:\t$message\n\n";

        $recipient = "egpbi.sv@gmail.com";
        $subject = " \t$object\n";

        $mailheaders = "Envoyé depuis le formulaire de contact du site \n";
        $mailheaders .= "Repondre à : $mail\n\n";

        mail($recipient, $subject, $msg, $mailheaders);

        // Message validation envoi mail

        $validation = '<div class = "alert alert-success mt-3">Merci, le message a bien été envoyé !</div>';
      }
      ?>

      <div class="contactForm">
        <h4>Formulaire de Contact</h4>
        <form method="post" action="index.php#contact" class="formContact">
          <input name="object" type="text" placeholder="Sujet de la demande" required />
          <input name="name" type="text" placeholder="Votre Prénom et Nom" required />
          <input name="enterprise" type="text" placeholder="Votre Entreprise" required />
          <input name="mail" type="email" placeholder="Votre Adresse Mail" required />
          <textarea name="message" id="message" cols="30" rows="5" placeholder="Votre Message" required></textarea>
          <button type="submit">Envoyer</button>
          <!-- Div alert success pour message OK -->
          <?= $validation ?? '' ?>
        </form>
      </div>
    </div>
  </div>
  <!-- Script Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>