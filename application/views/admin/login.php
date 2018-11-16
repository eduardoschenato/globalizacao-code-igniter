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
    <title>Admin - Globalização</title>
    <link href="<?php echo base_url(); ?>public/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <header class="container mt-5">
        <div class="row">
            <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-10 offset-sm-1 col-12">
                <h1 class="text-center">Painel de Administração</h1>
            </div>
        </div>
    </header>
    <section class="container mt-5">
        <div class="row">
            <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-10 offset-sm-1 col-12">
                <form>
                    <div class="form-group">
                        <label for="login">Login</label>
                        <input type="text" class="form-control" id="login" placeholder="Digite seu Login">
                    </div>
                    <div class="form-group">
                        <label for="password">Senha</label>
                        <input type="password" class="form-control" id="password" placeholder="Digite sua Senha">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary">Entrar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <footer class="container mt-5">
        <div class="row">
            <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-10 offset-sm-1 col-12">
                <p class="text-muted text-center">Desenvolvido por Eduardo Schenato dos Santos &copy; 2018</p>
            </div>
        </div>
    </footer>
    <script src="<?php echo base_url(); ?>public/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
