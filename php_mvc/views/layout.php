<!DOCTYPE html>
<html>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Blog groupe 3</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="style.css" type="text/css" rel="stylesheet">
  </head>
  <body>
    <header>

    <nav class="green lighten-3" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo">Blog</a>
      <ul class="right hide-on-med-and-down">
        <li><a href='?controller=pages&action=home'>Accueil</a></li>
         <li><a href='?controller=posts&action=index'>Articles</a></li>
         <li><a href='?controller=posts&action=edit'>Ajouter un article</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
         <li><a href='?controller=pages&action=home'>Accueil</a></li>
         <li><a href='?controller=posts&action=index'>Articles</a></li>
         <li><a href='?controller=posts&action=edit'>Ajouter un article</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

      
    </header>
    <main>
    <?php require_once('routes.php'); ?>
    </main>
    </body>
    <footer class="page-footer teal">
    <div class="footer-copyright center">
      <span class="center"> Blog développé par la Dream team, Romain, Sarah, Cédric, et Brahim.</span>
    </div>
  </footer>
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
</html>
