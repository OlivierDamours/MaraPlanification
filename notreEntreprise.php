<?php
  include_once("fonctions/WebPage.php");
  EnteteHTML("Notre Entreprise");
  NavBarHTML();
?>
  <main class="giveSomeSpace container" role="main">
    <section>
        <div class="row">
          <div class="emphaseTitre col-lg-6">
            <h3 class="title-equipe title text-title">Notre Équipe</h3>
          </div>
        </div>
        <article class="row">
          <div class="moveText col-xm-9">
          <p><strong><em>Planification Financière Mara inc.</em></strong> a vu le jour grâce à sa fondatrice et présidente Martine Rainville. Malgré
            une vaste étendue des domaines touchant les finances personnelles, Planification Financière Mara inc. a développé
            son expertise spécialement dans la planification des revenus de retraite et la création de richesse. L’entreprise
            compte à son actif plus de six cents conférences, cours et formations personnalisées, sur la préparation de la
            retraite à travers la province de Québec.</p>
          <p>Nous utilisons une approche personnalisée en fonction de vos besoins, de votre budget et de votre personnalité
             au niveau financier, légal et fiscal.</p>
          </div>
        </article>
        <article class="row">
          <div>
            <div class="row">
              <div class="col-sm-4">
                <img class="imgText imgEquipe" src="Images/martineRainville.jpg" alt="Martine Rainville" />
              </div>
              <div class="text-martine text col-md-6">
                <p><strong><em>Martine Rainville</em></strong>, Panificateur Financier depuis 1994, membre de l&#8217;<strong><em>IQPF</em></strong>, représentante en
                  épargne collective auprès de Mérici Services Financiers et possède plus de 30 ans d’expérience
                  dans le domaine des services financiers. Depuis plus de 20 ans, elle agit à titre de consultante
                  en planification des revenus de retraite auprès de plusieurs entreprises publiques, parapubliques
                   et privées.</p>
              </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <img class="imgText imgEquipe" src="Images/sarahVerreault.jpg" alt="Sarah Verreault" />
                </div>
                <div class="text-sarah text col-md-6">
              <p><strong><em>Sarah Verreault</em></strong>, représentante en épargne collective auprès de Mérici Services Financiers, détient un
                baccalauréat en administration des affaires et s’est spécialisée en gestion des risques et assurances.
                Elle possède également le titre <strong><em>CRM</em></strong> qui lui procure la désignation de
                <strong><em>Gestionnaire de Risque Canadien</em></strong>.
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <img class="imgText imgEquipe-chantal" src="Images/chantalBilodeau.jpg" alt="Chantal Bilodeau" />
            </div>
            <div class="text-chantal text col-md-6">
              <p><strong><em>Chantal Bilodeau</em></strong>, adjointe administrative,
                 est responsable du service à la clientèle et du suivi depuis plus de 17 ans.</p>
          </div>
        </div>
      </div>
        </article>
    </section>
    <footer class="container">
      <div class="row">
        <div class="faireBordure col-md-8">
          <small>&copy;Mara inc. planification financière 2016</small>
        </div>

      </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
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
