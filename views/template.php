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
	<div class="media_players">
		<div class="media_players_mp3">
			<div class="frames">
				<span>Azul Piscina - mp3</span>
				<a href="javascript:;" class="close_frame">x</a>

			</div>
			<div class="progresso-bar">
				<div class="progresso-up">
					
				</div>
			</div>
			<div class="media_players_controls">
				<button><i class="fa fa-play"></i></button>
				<button><i class="fa fa-pause"></i></button>
				<button><i class="fa fa-volume-up"></i></button>
				<button class="expand"><i class="fa fa-expand"></i></button>
			</div>
		</div>
	</div>
	<!-- inicio modal dos frames abertos -->
	<div class="frames-modal">
		<div class="media_players_modal">
			<div class="media_players_mp3-modal">
				<div class="frames-modal-title">
					<span>Azul Piscina - mp3</span>

				</div>
				<div class="progresso-bar_modal">
					<div class="progresso_up_modal">
						
					</div>
				</div>
				<div class="media_players_controls_modal">
					<button><i class="fa fa-play"></i></button>
					<button><i class="fa fa-pause"></i></button>
					<button><i class="fa fa-volume-up"></i></button>
					<button class="compress"><i class="fa fa-compress"></i></button>
				</div>
			</div>
		</div>
	</div>
	<!-- fim dos frames abertos em modal -->
	<div class="view-image">
		<button class="btn btn-danger btn-xs bt">X</button>
		<!-- criar opcoes (excluir, ver datas de upload, adicionar comentario, enviar, salvar na maquina, publicar em meu mural...) -->
		<div class="modal_imagem">
			<img src="">
		</div>
	</div>
	<?php $this->loadViewInTemplate($viewName, $viewData) ?>	
	<div style="clear: both;"></div>
</body>

<script type="text/javascript" src="assets/js/jQuery.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
<script type="text/javascript" src="assets/js/emoji.js"></script>
</html>