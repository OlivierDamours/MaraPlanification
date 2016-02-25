<?php
  include_once("fonctions/WebPage.php");
  EnteteHTML("Liens Essentiel");
  NavBarHTML();

?>
  <main role="main" class="giveSomeSpace">
    <section class="container">
      <article class="row">
        <h3 class="col-lg-6">REER</h3>
        <div class="row">
        <div class="moveText col-sm-12">
          <p >Afin que votre cotisation au REER soit admissible à l’année d’imposition précédente,
            vous devez verser votre cotisation au plus tard dans les 60 premiers jours de l’année en cours. </p>
          <p>La date limite pour les cotisations au REER pour l’année d’imposition 2015 est le 29 février 2016.</p>
          <p>La limite de cotisation annuelle équivaut à 18 % du revenu gagné l’année précédente.</p>
        </div>
      </div>
      </article>
      <article class="row">
        <h3 class="col-lg-12">CELI</h3>
        <div class="row">
        <table class="col-sm-6">
          <tr>
            <th>Année</th>
            <th>Droits de cotisation à un CELI (plafond)</th>
          </tr>
          <tr>
              <td>2009 à 2012</td>
              <td>5 000$/an</td>
          </tr>
          <tr>
            <td>2013</td>
            <td>5 500$</td>
          </tr>
          <tr>
            <td>2014</td>
            <td>5 500$</td>
          </tr>
          <tr>
            <td>2015</td>
            <td>10 000$</td>
          </tr>
          <tr>
            <td>2016</td>
            <td>5 500$</td>
          </tr>
          <tr class="importantData">
            <td>Cotisations maximales accumulées</td>
            <td>46 500 $</td>
          </tr>
        </table>
      </div>
      </article>
      <article class="row">
        <h3 class="col-lg-6">Tables d’impôts et autres</h3>
        <div class="moveTextURL row">
          <p class="col-md-8"><a href="http://www.planiguide.ca/tableaux/quebec/">http://www.planiguide.ca/tableaux/quebec/</a></p>
        </div>
      </article>
    </section>
  </main>
<?php
  EndHTML();
?>
