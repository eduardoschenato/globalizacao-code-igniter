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
            <a class="navbar-brand" href="#">Globalização</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>admin//home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>admin/posts">Listagem</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>admin/form">Cadastro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>admin/contacts">Contatos do Site</a>
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
                <a href="<?php echo base_url(); ?>admin/contacts" class="btn btn-primary float-right">Voltar para a Listagem</a>
                <h1>Contatos do Site</h1>
            </div>
        </div>
    </header>
    <section class="container mt-5">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="mt-3">
                    <?php if($this->session->userdata("success") !== null) { ?>
                        <div class="alert alert-success" role="alert"><?php echo $this->session->userdata("success"); ?></div>
                    <?php } ?>
                    <?php if($this->session->userdata("error") !== null) { ?>
                        <div class="alert alert-danger" role="alert"><?php echo $this->session->userdata("error"); ?></div>
                    <?php } ?>
                </div>
                <ul>
                    <li>
                        <strong>Nome: </strong><?php echo $contact["name"]; ?>
                    </li>
                    <li>
                        <strong>E-Mail: </strong><?php echo $contact["email"]; ?>
                    </li>
                    <li>
                        <strong>Mensagem: </strong><?php echo $contact["message"]; ?>
                    </li>
                </ul>
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
    <script>
        function deleteItem(id) {
            if(confirm("Deseja realmente excluir este registro?")) {
                window.location.href = "<?php echo base_url(); ?>admin/removeContact/" + id;
            }
        }
    </script>
  </body>
</html>
