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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>admin//home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>admin/list">Listagem</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>admin/form">Cadastro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>admin/logout">Sair</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="container mt-5">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <h1>Postagem</h1>
            </div>
        </div>
    </header>
    <section class="container mt-5">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <form>
                    <div class="form-row">
                        <div class="form-group col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                            <label for="language_id">Idioma</label>
                            <select class="form-control" id="language_id">
                                <?php foreach($languages as $language) { ?>
                                    <option value="<?php echo $language["id"]; ?>"><?php echo $language["name"]; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                            <label for="author">Autor</label>
                            <input type="text" class="form-control" id="author" placeholder="Digite o nome do autor">
                        </div>
                        <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                            <label for="date">Data</label>
                            <input type="text" class="form-control" id="date" placeholder="Digite a data no formato DD/MM/AAAA">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <label for="title">Título</label>
                            <input type="text" class="form-control" id="title" placeholder="Digite o título da postagem">
                        </div>
                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <label for="subtitle">Subtítulo</label>
                            <input type="text" class="form-control" id="subtitle" placeholder="Digite o subtítulo da postagem">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text">Texto</label>
                        <textarea class="form-control" id="text" rows="10" placeholder="Digite o texto da postagem"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-success">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <footer class="container mt-5">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <p class="text-muted text-center">Desenvolvido por Eduardo Schenato dos Santos &copy; 2018</p>
            </div>
        </div>
    </footer>
    <script src="<?php echo base_url(); ?>public/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
