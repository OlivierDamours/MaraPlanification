<?php
  include_once("fonctions/WebPage.php");


  EnteteHTML("Notre Distinction");
  NavBarHTML();
?>

    <main class="giveSomeSpace container" role="main">
      <section>
        <div>
          <div  class="row">
            <div class="emphaseTitre col-lg-6">
              <h3 class="title text-title">Notre Distinction</h3>
            </div>
          </div>
          <article class="row">
            <div>
              <!---Image du haut--->
              <div id="premiereImage">
                <img id="moveImageTop">
              </div>
              <div class="textDistinction col-md-6">
              <p><div id="moveText">Vous apporter la tranquillité d’esprit pour la gestion de vos finances personnelles. En tant que
                planificateurs financiers accrédités, nous sommes en mesure de vous assister dans toutes les décisions
                financières qui surviennent lors des événements de la vie.  Que ce soit lors d’une naissance, d’un décès,</div><div id="afterText">
                d’un achat, d’une vente, d’un mariage ou d’une séparation, nous sommes en mesure de vous apporter conseil
                 et expertise.
                  Nous nous ferons un devoir de vous accompagner et d’agir à titre de conseillers financiers pour
                  vous aider à faire les meilleurs choix selon chaque situation. En tant que <em>conseillers indépendants</em>,
                 nous avons choisi d’offrir un service en toute objectivité et personnalisé adapté à vos besoins et vos préoccupations.</p>
                Notre rôle : bâtir, avec vous, un plan d’actions permettant de faire face à vos obligations financières et vos
                  objectifs d’épargne et vous aider à le réaliser. De plus, nous sommes en mesure de trouver pour vous les meilleurs
                  gestionnaires de fonds, les meilleurs produits financiers et les meilleures institutions financières.
                   Notre relation soutenue avec les différents gestionnaires et institutions nous permet d’être à l’affût des tendances
                    du marché et ainsi vous conseiller adéquatement.</div></p>
              </div>
              <div id="secondImage" class="col-md-5">
                <img id="moveImageBottom" class="imgDistinction" src="Images/notre_distinction.jpg">
              </div>

            </article>
        </div>
      </section>
      <section>
        <div id="mission"></div>
        <div>          
          <div class="row">
            <div class="giveSomeSpaceMission emphaseTitre col-lg-6">
              <h3 class="title-mission title text-title">Notre Mission</h3>
            </div>
          </div>
          <article class="row">
            <div>
              <div class="textMission col-md-6">
              <p>Notre mission est de vous conseiller à faire les bons choix de produits pour optimiser au maximum le rendement
                de vos placements tout en respectant vos objectifs et vos besoins.</p>
              <p>Nous voulons vous aider à gérer au mieux vos avoirs financiers et ainsi vous garantir une belle retraite.</p>
              </div>
              <div class="col-md-5">
                <img class="imgMission" src="Images/mission.jpg">
              </div>

            </article>
        </div>
      </section>

      <footer class="container faireBordure">
        <div class="row">
          <div class="col-md-5 ">
            <small>&copy;Mara inc. planification financière 2016</small>
          </div>
        </div>
      </footer>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
      <script src="js/script.js"> </script>
      <script>
      $(".nav li").on("click", function() {
        $(".nav li").removeClass("active");
        $(this).addClass("active");
      });
  </script>
  <script type="text/javascript">
  $('.dropdown-menu input, .dropdown-menu label').click(function(e) {
    e.stopPropagation();
  });
</script>

  </body>
</html>
