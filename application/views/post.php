<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Globalização">
    <meta name="author" content="Eduardo Schenato dos Santos">
    <title>Post - <?php echo $titleMenu; ?></title>
    <link href="<?php echo base_url(); ?>public/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url(); ?>public/css/clean-blog.min.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="<?php echo base_url() . $lang; ?>/home"><?php echo $titleMenu; ?></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url() . $lang; ?>/home"><?php echo $homeMenu; ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url() . $lang; ?>/about"><?php echo $aboutMenu; ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url() . $lang; ?>/map"><?php echo $mapMenu; ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url() . $lang; ?>/references"><?php echo $referencesMenu; ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url() . $lang; ?>/contact"><?php echo $contactMenu; ?></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $languageMenu; ?></a>
              <div class="dropdown-menu">
                <?php foreach($languages as $language) { ?>
                  <a class="dropdown-item" href="<?php echo base_url() . $language["prefix"] . "/home"; ?>"><?php echo $language["name"]; ?></a>
                <?php } ?>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <header class="masthead" style="background-image: url('<?php echo base_url(); ?>public/img/home-bg.png')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
              <h1><?php echo $post["title"]; ?></h1>
              <h2 class="subheading"><?php echo $post["subtitle"]; ?></h2>
              <span class="meta">Postado por
                <a href="#"><?php echo $post["author"]; ?></a>
                em <?php echo getDateShowFormat($post["date"]); ?></span>
            </div>
          </div>
        </div>
      </div>
    </header>
    <article>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <p><?php echo nl2br($post["text"]); ?></p>
          </div>
        </div>
      </div>
    </article>
    <hr>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright text-muted">Copyright &copy; Eduardo Schenato dos Santos 2018</p>
          </div>
        </div>
      </div>
    </footer>
    <script src="<?php echo base_url(); ?>public/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/clean-blog.min.js"></script>
  </body>
</html>
