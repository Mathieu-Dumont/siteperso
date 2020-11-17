<?php
include 'contact.php'
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Index</title>
    <link rel="stylesheet" href="css/css1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="home">
    <div class="topnav" id="myTopnav">
      <a href="#index"class="logo">Dumont-Mathieu</a>
      <a href="#a_propos"  class="centrage">A propos</a>
      <a href="#comp" class="centrage">Compétences</a>
      <a href="#xp" class="centrage">Expérience</a>
      <a href="#form" class="centrage">Formation</a>
      <a href="#Contact" class="centrage">Contact</a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fas fa-bars"></i></a>
      <!-- class="active" -->
    </div>
<div class="test">


      <div class="conteneur1" id="index">
        <div class="block">

          <div class="image_gauche">
           <div class="text_1">
            <div class="Prenom">
              <p>Mathieu</p>
            </div>
            <div class="Nom">
              <p>Dumont</p>
            </div>
            <div class="acroche">
              <p>Si vous aimez ce site vous m'aimerais moi !</p>
            </div>
          </div>
          </div>
          <div class="image_droite">
            <div class="menu_réseau">
                <p class="réseau">Réseau sociaux :</p>
                <a href="http://www.twitter.com" class="social"><img src="img/twi.png" alt="social"/></a>
                <a href="https://fr.linkedin.com/company/accueil" class="social"><img src="img/link.png" alt="social"/></a>
                <a href="https://mail.google.com/" class="social"><img src="img/gmail.png" alt="social"/></a>
                <a href="https://github.com/Mathieu-Dumont" class="social"><img src="img/github.jpg" alt="social"></a>

            </div>
          </div>

        </div>
      </div>

      <div class="conteneur2" id="a_propos">
        <div class="text_2">
          <div class="titre_a_propos">
            <p>A propos</p>
          </div>
          <div class="presentation">
            <p>Bonjour, je me présente je m'appelle Mathieu Dumont.
               Je suis passionné d'informatique depuis petit et je concrétise cette passion par les études dans ce domaine.
               J'ai actuellement 18ans et je suis en première année de BTS SIO (services aux organisations).
               Je souhaiterais donc prendre la spécialisation SLAM de ce BTS afin de devenir dévellopeur informatique.
               Après ce BTS je désirerais faire une licence dans le même domaine pour ensuite chercher du travail.
               <p>
          </div>
          <section>

               <p class="h3gauche_a_propos">Personnelles</p>
               <div class="comp2">
                   <p>Créativité</p>
                   <p>80%</p>
                   <div class="conteneur-barre2"><span class="barre c80"></span></div>
               </div>
               <div class="comp2">
                   <p>Adaptation</p>
                   <p>90%</p>
                   <div class="conteneur-barre2"><span class="barre c90"></span></div>
               </div>
               <div class="comp2">
                   <p>Sérieux</p>
                   <p>95%</p>
                   <div class="conteneur-barre2"><span class="barre c95"></span></div>
               </div>
          </section>
        </div>
          <img class="img_a_propos" src="img/img_moi_fume_2.jpg" alt="moi">
        <div class="menu_réseau_a_propos">
            <a href="http://www.twitter.com" class="social_a_propos"><img src="img/twi.png" alt="social"/></a>
            <a href="https://fr.linkedin.com/company/accueil" class="social_a_propos"><img src="img/link.png" alt="social"/></a>
            <a href="https://mail.google.com/" class="social_a_propos"><img src="img/gmail.png" alt="social"/></a>
            <a href="https://github.com/Mathieu-Dumont" class="social_a_propos"><img src="img/github.jpg" alt="social"></a>

        </div>
      </div>
      <div class="compétencesbackground" id="comp">
      <div class="conteneur3">
            <p class="titre_comp">Compétences</p>
            <p class="h3gauche">Professionnelles</p>
            <div class="comp">
                <p>HTML / CSS</p>
                <div class="conteneur-barre"><span class="barre c100"></span></div>
            </div>
            <div class="comp">
                <p>PHP </p>
                <div class="conteneur-barre"><span class="barre c80"></span></div>
            </div>
            <div class="comp">
                <p>JavaScript</p>
                <div class="conteneur-barre"><span class="barre c0"></span></div>
            </div>


            <div class="menu_réseau_comp">
                <a href="http://www.twitter.com" class="social_comp"><img src="img/twi.png" alt="social_comp"/></a>
                <a href="https://fr.linkedin.com/company/accueil" class="social_comp"><img src="img/link.png" alt="social_comp"/></a>
                <a href="https://mail.google.com/" class="social_comp"><img src="img/gmail.png" alt="social_comp"/></a>
                <a href="https://github.com/Mathieu-Dumont" class="social_comp"><img src="img/github.jpg" alt="social_comp"></a>
            </div>
      </div>
      </div>
    <div class="xp" id="xp">
      <div class="conteneur4">
      <div class="titre_experience">
        <p>Expérience</p>
      </div>
        <div class="entreprise">
          <div class="logo_entreprise">
          </div>
            <div class="poste">
              <p>Stagiaire</p>
            </div>
            <div class="entreprise_nom">
              <p>Génération net</p>
            </div>
            <div class="date_durée">
              <p>1 semaine en 2016</p>
            </div>
            <div class="adresse">
              <p>8 longue Vue des Astronomes,14111 Louvigny</p>
            </div>
        </div>
        <div class="description">
          <p>Lors de ce stage j'ai appris à monter de A à Z à monter un ordinateur.
            J'ai aussi appris à avoir de la rigeur dans le diagnostique de problème sur une machine.
            De plus j'ai vu comment ce passer la vente en magasin et l'éxplication qu'il faut donner
            au client pour différent matériel. Mais surtout bien comprendre ce que demande le client
            et lui conseiller du matériel qui lui correspond.</p>
        </div>
        <a href="https://www.w3docs.com/" class="button">Télécharger mon CV</a>
      </div>
    </div>
    <div class="form" id="form">
      <div class="conteneur5">
        <div class="titre_form">
          <p>Formation</p>
        </div>
        <div class="conteneur4">
         <div class="formation_lycee">
          <div class="etablissement_formation">
            <div class="logo_formation_lycee">

            </div>
              <div class="formation">
                <p>BAC STI2D option SIN</p>
              </div>
              <div class="etablissement_nom">
                <p>Institut lemonnier</p>
              </div>
              <div class="date_durée_form">
                <p>3 ans de 2017 à 2019</p>
              </div>
              <div class="adresse_form">
                <p>60 Rue d'hérouville, 14000 Caen</p>
              </div>
          </div>
          <div class="description_formation">
            <p>Lors de mon BAC qui est un bac technologique, j'ai vu dans ma spécialisation
               qui était la S.I.N (Système Information Numérique) principalement le language C.
               j'y ai dévelloper plusieur projet avec ce language qui allais de faire clignoter
               une led à gérer une salle serveur.</p>
          </div>
         </div>
         <div class="formation_bts">
          <div class="etablissement_formation2">
            <div class="logo_formation_supp">

            </div>
              <div class="formation2">
                <p>BTS SIO</p>
              </div>
              <div class="etablissement_nom2">
                <p>Sainte Ursule</p>
              </div>
              <div class="date_durée_form2">
                <p>2 ans de 2020 à 2022</p>
              </div>
              <div class="adresse_form2">
                <p>30 Rue de la miséricorde B.P.3132, 14000 Caen</p>
              </div>
          </div>
          <div class="description_formation2">
            <p>Lors de cette formation qui est encore en cours j'ai pu déjà voir différent language don't
            quelque un que je me suis servie pour création de ce site. Les languages que j'ai vu jusqu'à la
            sont les suivant. Pour commencer nous avons vu le html avec le css ensuite nous avons vu le php
            et bientôt nous commencerons le javascript. </p>
          </div>
        </div>
      </div>
    </div>
  </div>
      <div class="conteneur6">
        <form action="Contact.php" method="POST" name="inscription" id="Contact">
            <div class="contact-section">
                <div class="contact-form">
                    <h1>Contact Moi</h1>
                    <div class="txtb">
                        <label>Nom :*</label>
                        <input type="text" name="nom" value="" placeholder="Entrer votre nom" required>
                    </div>

                    <div class="txtb">
                        <label>Email :*</label>
                        <input type="email" name="mail" value="" placeholder="Entrer votre Email" required>
                    </div>

                    <div class="txtb">
                        <label>Message :</label>
                        <textarea name="mess"></textarea>
                    </div>
                    <div class="middle">
                        <div class="g-recaptcha" data-sitekey="6Lc-DuEZAAAAAINHRGGi0vy0pvymBHuYLGvEODQv"></div>
                    </div>
                    <input class="btn" type="submit" value="Valider" name="submitpost">
                </div>

            </div>
        </form>
      </div>
</div>
<div id="footer">
    <div class="footer">
        <p class="margin">Mentions légales, crédits</p>
        <p>@DUMONT Mathieu</p>
        <p>06.70.56.97.71</p>
        <p>Le bas de Banneville, Banneville Sur Ajon, 14260</p>
    </div>

<script src='https://www.google.com/recaptcha/api.js?hl=fr'></script>
      <script>
  function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
  </script>
  </body>
</html>
