<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>

<?php 
	$db = open_database(); 
	
	// if ($db) {
	// 	// echo '<h1>Banco de Dados Conectado!</h1>';
	// 	// echo '<h5 id="t" class="alert alert-primary">Bem-Vindo!</h5>';
		
	// } else {
	// 	echo '<h1>ERRO: Não foi possível Conectar!</h1>';
	// }
?>
<style>

 .bemvindo{
	/* background-color: rgb(201, 201, 201);
	height:30px;
	position: relative; */
}
</style>
<div class="alert alert-dark" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
<?php
if ($db){
	echo '<h5 style="text-align:left center;">Bem-Vindo!</h5>';
		
} else {
	echo '<h1>ERRO: Não foi possível Conectar!</h1>';
}
	
?>
</div>

<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>

<?php include(HEADER_TEMPLATE); ?>
<?php $db = open_database(); ?>

<h1>Painel de Controle</h1>
<hr />

<?php if ($db) : ?>

<!-- <link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet"> -->
<!-- <link rel="icon" type="imagem/png" href="imagens/meufavicon.png" /> -->


<div class="row">
	<div class="col-xs-6 col-sm-3 col-md-2">
		<a href="customers/add.php" class="btn btn-primary">
			<div class="row">
				<div class="col-xs-12 text-center">
					<i class="fa fa-plus fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Novo Cliente</p>
				</div>
			</div>
		</a>
	</div>

	<div class="col-xs-6 col-sm-3 col-md-2">
		<a href="customers" class="btn btn-default">
			<div class="row">
				<div class="col-xs-12 text-center">
					<i class="fa fa-user fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Clientes</p>
				</div>
			</div>
		</a>
	</div>
</div>

<?php else : ?>
	<div class="alert alert-danger" role="alert">
		<p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
	</div>

<?php endif; ?>

<?php include(FOOTER_TEMPLATE); ?>