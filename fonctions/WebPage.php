<?php
    function EnteteHTML($page, $index = false)
    {
      if($index == false)
      {
        ?>
      <!Doctype html>
      <html lang="fr">

      <head>
          <meta charset="utf-8" />
          <meta name="viewport" content="width=device-width, initial-scale =1.0"/>
          <meta name="description" content="Service de planification financière" />
          <meta name="keywords" content="REER, CELI, REEE, REEI, RPDB, REER Collectif. CELI Collectif, RRS,  Investissement non-enregistré"/>
          <meta name="author" content="Olivier D'amours , Jean-François Labonté" />
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous" />
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
          <link rel="StyleSheet" href="CSS/StyleSheet.css" />
          <link rel="StyleSheet" href="CSS/ImgCSS.css" />

          <title><?php $page ?></title>
      </head>
    <?php
    }
    //Nav with Header and carousel
    else if($index == true)
    {
      ?>
      <!Doctype html>
      <html lang="fr">
        <head>
            <meta charset="utf-8" />
            <meta name="description" content="Service de planification financière" />
            <meta name="keywords" content="REER, CELI, REEE, REEI, RPDB, REER Collectif. CELI Collectif, RRS,  Investissement non-enregistré"/>
            <meta name="author" content="Olivier D'Amours , Jean-François Labonté" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous" />
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
            <link rel="StyleSheet" href="CSS/StyleSheet.css"/>
            <link rel="stylesheet" href="CSS/stylesheet.css">
            <link rel="StyleSheet" href="CSS/ImgCSS.css" />
            <title><?php echo $page?></title>
        </head>
        <body>
          <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
          fjs.parentNode.insertBefore(js, fjs);
          }(document, 'script', 'facebook-jssdk'));</script>
          <header class="container">
            <div id="outer-wrap">
            <div id="inner-wrap">

          <header id="top" role="banner">
          </header>

          <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">

              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
                  <img class="navbar-brand logo-mara" src="Images/LOGO_Pamphlet.png">
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                  <ul class="navbar-right nav">
                    <p class="lien-nav"><a class="lien-font-nav" href="https://www.merici.com/ia/"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Accès Investisseurs</a></p>
                    <p class="tel-nav"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> Téléphone : 418 627-7007</p>
                    <p class="fax-nav"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> Sans frais : 1 866 634-1155</p>
                    <p><a><img class="img-logo-sociaux-f" src="Images/facebook.png" ></a></p>
                    <p><a><img class="img-logo-sociaux-l" src="Images/linkedin.png" ></a></p>
                </ul>
                <ul class="navbar-nav nav">
                  <li class="lien-mara"><a class="font-family-nav font-mara" href="index.php">Acceuil</a></li>
                  <li class="dropdown lien-entreprise"><a class="font-family-nav" data-toggle="dropdown" href="#">Notre Entreprise
                  <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li class="color"><a class="font-family-nav" href="../notreEntreprise.php#equipe">Notre Équipe</a></li>
                      <li class="color"><a class="font-family-nav" href="../distinction.php">Notre Distinction</a></li>
                      <li class="color"><a class="font-family-nav" href="../distinction.php#mission">Notre Mission</a></li>
                    </ul>
                  </li>
                  <li class="dropdown lien-service"><a class="font-family-nav" data-toggle="dropdown" href="#">Service Personnalisés
                   <span class="caret"></span></a>
                   <ul class="dropdown-menu">
                     <li><a class="font-family-nav" href="../serviceConseil.php#invest">Investisseurs</a></li>
                     <li><a class="font-family-nav" href="../serviceConseil.php#entreprise">Entreprises</a></li>
                     <li><a class="font-family-nav" href="../lienEssentiel.php">Lien Essentiels</a></li>
                   </ul>
                  </li>
                  <li class="dropdown lien-contact"><a href="../contact.php" class="font-family-nav contact-position">Contactez-nous</a></li>


                </ul>


              </div>
              <!-- /.navbar-collapse -->
          </div>
          <!-- /.container -->
      </nav>
               <div class="row carousel-holder">
                 <div class="col-md-12">
                   <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                     <ol class="carousel-indicators">
                       <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                       <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                       <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>
                    <div style="max-width:1920px;" class="carousel-inner">
                      <div class="item active">
                        <img class="slide-image" src="Images/imageCarousel.png" alt=""/>
                      </div>
                      <div class="item">
                        <img class="slide-image" src="Images/imageCarousel1.png" alt="">
                      </div>
                      <div class="item">
                        <img class="slide-image" src="Images/imageCarousel2.png" alt="">
                      </div>
                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                  </div>
                </div>
              </div>
            </header>

    <?php
      }
    }

    function NavBarHTML()
    {?>
      <header class="spaceForNav">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
          <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img class="navbar-brand logo-mara" src="Images/LOGO_Pamphlet.png">
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="navbar-right nav">
                  <p class="lien-nav"><a class="lien-font-nav" href="https://www.merici.com/ia/"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Accès Investisseurs</a></p>
                  <p class="tel-nav"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> Téléphone : 418 627-7007</p>
                  <p class="fax-nav"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> Sans frais : 1 866 634-1155</p>
                  <p><a><img class="img-logo-sociaux-f" src="Images/facebook.png" ></a></p>
                  <p><a><img class="img-logo-sociaux-l" src="Images/linkedin.png" ></a></p>
              </ul>
              <ul class="navbar-nav nav">
                <li class="lien-mara"><a class="font-family-nav font-mara" href="index.php">Acceuil</a></li>
                <li class="dropdown lien-entreprise"><a class="font-family-nav" data-toggle="dropdown" href="#">Notre Entreprise
                <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li class="color"><a class="font-family-nav" href="../notreEntreprise.php#equipe">Notre Équipe</a></li>
                    <li class="color"><a class="font-family-nav" href="../distinction.php">Notre Distinction</a></li>
                    <li class="color"><a class="font-family-nav" href="../distinction.php#mission">Notre Mission</a></li>
                  </ul>
                </li>
                <li class="dropdown lien-service"><a class="font-family-nav" data-toggle="dropdown" href="#">Service Personnalisés
                 <span class="caret"></span></a>
                 <ul class="dropdown-menu">
                   <li><a class="font-family-nav" href="../serviceConseil.php#invest">Investisseurs</a></li>
                   <li><a class="font-family-nav" href="../serviceConseil.php#entreprise">Entreprises</a></li>
                   <li><a class="font-family-nav" href="../lienEssentiel.php">Lien Essentiels</a></li>
                 </ul>
                </li>
                <li class="dropdown lien-contact"><a href="../contact.php" class="font-family-nav contact-position">Contactez-nous</a></li>
              </ul>


            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
      </header>

    <?php
    }

    function EndHTML()
    {
      ?>
        <footer class="container">
          <div class="row">
            <div class="faireBordure col-md-8">
              <small>&copy;Mara inc. planification financière <?php echo date('Y'); ?></small>
            </div>

          </div>
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="js/script.js"> </script>

        <script>
        //Some JQuery Script
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
      <?php

    }
?>
