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
                <h1>Postagens</h1>
            </div>
        </div>
    </header>
    <section class="container mt-5">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <ul class="nav nav-pills mt-3">
                    <?php if($lang == "") { ?>
                        <li class="nav-item">
                            <a class="nav-link active" href="<?php echo base_url(); ?>admin/list">Todos</a>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>admin/list">Todos</a>
                        </li>
                    <?php } ?>
                    <?php foreach($languages as $language) { ?>
                        <?php if($language["prefix"] == $lang) { ?>
                        <li class="nav-item">
                            <a class="nav-link active" href="<?php echo base_url(); ?>admin/list/<?php echo $language["prefix"]; ?>"><?php echo $language["name"]; ?></a>
                        </li>
                        <?php } else { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>admin/list/<?php echo $language["prefix"]; ?>"><?php echo $language["name"]; ?></a>
                        </li>
                        <?php } ?>
                    <?php } ?>
                </ul>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <table class="table table-striped table-bordered table-condensed mt-3">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Título</th>
                            <th>Data</th>
                            <th>Autor</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($posts as $post) { ?>
                            <tr>
                                <td><?php echo $post["id"]; ?></td>
                                <td><?php echo $post["title"]; ?></td>
                                <td><?php echo getDateShowFormat($post["date"]); ?></td>
                                <td><?php echo $post["author"]; ?></td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-info">Editar</a>
                                    <a href="#" class="btn btn-sm btn-danger">Excluir</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </thead>
                </table>
            </div>
            <!-- <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <nav class="mt-3">
                    <ul class="pagination justify-content-center">
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                    </ul>
                </nav>
            </div> -->
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
