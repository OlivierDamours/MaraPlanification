<?php
  include_once("fonctions/WebPage.php");
  EnteteHTML("Contacte");
  NavBarHTML();
 ?>
  <main class="container" role="main">
    <div class="spaceAdressContact row">
      <div class="adressContact col-md-4">
        <p class="textAdress textAdresse2">5400 Boulevard des Galeries, Québec, Qc, G2K 2B4</p>
        <p class="textAdress">téléphone : 418 627-7007</p>
        <p class="textAdress">sans-frais : 1 866 634-1155</p>
        <p class="textAdress">fax : 418 627-1515</p>
      </div>
      <div class="infoCenter googleMapsCentered col-md-8">
        <iframe width="100%" height="100%" frameborder="0" style="border:0"
        src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJEzPkXeuXuEwR5d7DAC-FjrE&key=AIzaSyBLkStKGcsxQjLPg8fRDz2ajHtXMvyg5P0" allowfullscreen></iframe>
      </div>
    </div>
  </main>
  <section class="">
    <article class="infoCenter">
      <div class="row">
        <div class=" col-sm-4">
          <p><img class="imgContact" src="Images/martineRainville.jpg" alt="Martine Rainville" title="Martine Rainville"/></p>
          <p><a href="mailto:martinerainville@maraplanif.com"><img class="mailLink" src="Images/enveloppe_bleue.png" alt="Email" title="Email"/></a>
            <a href="https://ca.linkedin.com/in/martine-rainville-0048a421"><img class="linkedInLink" src="Images/linkedin.png" alt="LinkedIn" title="LinkedIn"/></a></p>
          <p class="infoImp">Martine Rainville</p>
          <p>Présidente</p>
          <p>Planicatrice Financière</p>
          <p>Représentante en épargne collective</p>
          <p>auprès de Mérici Services Financiers</p>
          <p>Membre de l&#8217;AMF # 128286</p>
          <p>Membre de L&#8217;IQPF # 2654</p>
        </div>

        <div class="infoCenter col-sm-4">
          <p><img class=" imgContact" src="Images/sarahVerreault.jpg" alt="Sarah Verreault" title="Sarah Verreault"></p>
          <a class="mailLink" href="mailto:sarahverreault@maraplanif.com"><img class="mailLink" src="Images/enveloppe_bleue.png" alt="Email" title="Email"/></a>
          <a class="imgInline" href="https://www.linkedin.com/in/sarah-verreault-crm-678252a2"><img class="linkedInLink" src="Images/linkedin.png" alt="LinkedIn" title="LinkedIn"/></a>
          <p class="infoImp">Sarah Verreault, CRM</p>
          <p>Représantante en Épargne Collective</p>
          <p>auprès de Mérici Services Financiers</p>
          <p>Membre de l&#8217;AMF # 210220</p>
          </div>

          <div class="infoCenter col-sm-4">
          <p><img class="imgContact" src="Images/chantalBilodeau.jpg" alt="Chantal Bilodeau" title="Chantal Bilodeau"></p>
          <a href="mailto: chantalbilodeau@maraplanif.com"><img class="mailLink" src="Images/enveloppe_bleue.png" alt="Email" title="Email"/></a>
          <a href="https://www.linkedin.com/in/chantal-bilodeau-a3b89023"><img class="linkedInLink" src="Images/linkedin.png" alt="LinkedIn" title="LinkedIn"/></a>
          <p class="infoImp">Chantal Bilodeau</p>
          <p>Adjointe administrative</p>
          <p>Service à la clientèle</p>
        </div>
      </div>
  </section>

      <footer class="container">
        <div class="row">
          <div class="faireBordure col-md-7">
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
<script src="js/script.js"> </script>

  </body>
</html>
