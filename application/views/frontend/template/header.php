<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootsnip -->
    <link href="<?php echo base_url(); ?>assets/select2.min.css" rel="stylesheet" />
                
    <link href="<?php echo base_url(); ?>assets/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="<?php echo base_url(); ?>assets/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/jquery.min.js"></script>
	<title>Superlógica Imobiliárias</title>
    <input type="hidden" value="<?php echo base_url(); ?>" id="base_url" />
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbarText">
		<a class="navbar-brand" href="#">Superlógica Imobiliárias</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
			aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse">
			<ul class="navbar-nav">
				<li class="nav-item
                    <?php if(isset($pagina) && $pagina == "home"){
                        echo " active";
                    }
                    ?>">
					<a class="nav-link" href="<?php echo base_url(); ?>">Home</a>
				</li>
                <li class="nav-item
                    <?php if(isset($pagina) && $pagina == "cadastrar"){
                        echo " active";
                    }
                    ?> dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Cadastrar
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo base_url(); ?>cadastrar/proprietario/">Proprietário</a>
                        <a class="dropdown-item" href="<?php echo base_url(); ?>cadastrar/locatario/">Locatário</a>
                        <a class="dropdown-item" href="<?php echo base_url(); ?>cadastrar/fiador/">Fiador</a>
                        <a class="dropdown-item" href="<?php echo base_url(); ?>cadastrar/corretor/">Corretor</a>
                        <a class="dropdown-item" href="<?php echo base_url(); ?>cadastrar/imovel/">Imóvel</a>
                    </div>
                </li>
                <li class="nav-item
                    <?php if(isset($pagina) && $pagina == "consultar"){
                        echo " active";
                    }
                    ?> dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Consultar
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo base_url(); ?>consultar/proprietarios/1/">Proprietários</a>
                        <a class="dropdown-item" href="<?php echo base_url(); ?>consultar/locatarios/1/">Locatários</a>
                        <a class="dropdown-item" href="<?php echo base_url(); ?>consultar/fiadores/1/">Fiadores</a>
                        <a class="dropdown-item" href="<?php echo base_url(); ?>consultar/corretores/1/">Corretores</a>
                        <a class="dropdown-item" href="<?php echo base_url(); ?>consultar/imoveis/1/">Imóveis</a>
                    </div>
                </li>               
			</ul>
            <?php 
            if($this->session->has_userdata('nome')){
            ?>
            <span class="navbar-text mr-5">
                <?php echo $this->session->userdata('nome'); ?>
            </span>
            <?php
            }
            ?>
		</div>
	</nav>
	<div class="container mt-5">
