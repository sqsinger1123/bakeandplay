<!DOCTYPE html> <!-- Hooray for HTML5! -->
<html>

<!-- Welcome to the source code for Bake and Play! 
*
* We hope that you will support our wonderful bakery.
* This website version designed by Samuel Q Singer
* Available via sqsinger.com
*
**********************************************-->

  <head>
    <title>Bake and Play</title>
    
    <!-- Include latest jQuery and custom scripts that make this page possible -->
    <script src='http://code.jquery.com/jquery.min.js'></script>
    <script src='js/scripts.js'></script>

    <!-- Favicon links -->
    <link id='favicon_def' rel='shortcut icon' href='./favicon.ico' />
    <link id='favicon_def2' rel='icon' type='image/x-icon' href='./favicon.ico' />

    <!-- Stylesheet links: Bootstrap(+resp), GoogleFonts, & custom CSS (made with LESS, Sass, and/or PHP) -->
    <link rel="stylesheet" href="css/normalize.css" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link href='http://fonts.googleapis.com/css?family=Adamina' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/styles.css" type="text/css" />

    <!-- Metadata -->
    <meta name='about' content='Bake and Play' />
    <meta name='keywords' content='Bake and Play'/>
    <meta name='author' content='Barbara Howell' />
    <meta http-equiv='content-type' content='text/html;charset=UTF-8' />

  </head>

  <body>
    <div id="wrapper" class="container">
      <div class="span12">
        <?php include("pages/header.php"); ?>
        <div id="top" class="headliner">
          <?php include("pages/nav.php"); ?> 
        </div>
        <div id="main" class="row-fluid">
          <div class="span8">
            <?php
              include("pages/home.php");
              include("pages/menu.php");
              include("pages/activities.php");
              include("pages/about.php");
              include("pages/contact.php");
            ?>
          </div>
          <div class="span4">
            <?php
                include("pages/sidebar.php");
            ?>
          </div>
        </div>
      </div>
    </div> <!-- end div wrapper -->
    <?php
      include("pages/footer.php");
      include("pages/credits.php"); 
    ?>
  </body>
</html>