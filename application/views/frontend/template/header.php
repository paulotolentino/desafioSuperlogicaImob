<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <!-- Bootsnip -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
                
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<title>Superlógica Imobiliárias</title>
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
