<!DOCTYPE html>
<html>
<head>
	<title>Backup</title>
	<link href="assets/css/emoji.css" rel="stylesheet">
	<link rel="stylesheet" href="sistema/emoji-em/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/template.css">
	<link rel="stylesheet" type="text/css" href="assets/css/home.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.css">
</head>
<body>	
	<div class="menu">
		<div class="opt">
			<button id="apk"><i class="fa fa-th"></i></button>
			<span>Aplicativos</span>
			<a href="cloud"><button id="cloud" style="background-color: #009ace;color: #fff"><i class="fa fa-skyatlas"></i></button></a>
			<span>Nuvem</span>
			<button id="call" style="background-color: #3faf7b; color:#fff"><i class="fa fa-comment"></i></button>
			<span>Conversas</span>
			<button id="salve" style="background-color: #f25757; color:#fff"><i class="fa fa-heart"></i></button>
			<span>Salvos</span>
			<button id="groups" style="background-color: #5fdbf4; color:#fff"><i class="fa fa-group"></i></button>
			<span>Grupos</span>
			<button id="lougth" style="background-color: #494646; color:#fff"><i class="fa fa-sign-out"></i></button>
			<span>Sair</span>
		</div>
	</div>
	<div class="aplicativos-home">
		<div class="apk-ups">
			<div class="apk-ups-title">
				<span class="svl">Salvar</span>
			</div>			
			<div class="opt-apk">
				<button><i class="fa fa-camera"></i></button><br />
				<span>Foto</span>
			</div>	
			<div class="opt-apk">
				<button><i class="fa fa-video-camera"></i></button><br />
				<span>Video</span>
			</div>	
			<div class="opt-apk">
				<button><i class="fa fa-file-text"></i></button><br />
				<span>Texto</span>
			</div>	
			<div class="opt-apk">
				<button><i class="fa fa-file"></i></button><br />
				<span>Arquivos</span>
			</div>
			<div class="opt-apk">
				<button><i class="fa fa-music"></i></button><br />
				<span>Musicas</span>
			</div>
			<div class="apk-ups-title2">
				<span>Conta</span>
			</div>
			<div class="opt-apk">
				<button style="background-color: #fff; color:#333"><i class="fa fa-user"></i></button><br />
				<span>Conta</span>				
			</div>
			<div class="opt-apk">
				<button style="background-color: #fff; color:#333"><i class="fa fa-cogs"></i></button><br />
				<span>Config.</span>
			</div>
			<div class="opt-apk">
				<button style="background-color: #fff; color:#333"><i class="fa fa-database"></i></button><br />
				<span>Espaço</span>
			</div>

		</div>
		
	</div>
	<?php $this->loadViewInTemplate($viewName, $viewData) ?>	
	<div style="clear: both;"></div>
</body>

<script type="text/javascript" src="assets/js/jQuery.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
<script type="text/javascript" src="assets/js/emoji.js"></script>
</html>