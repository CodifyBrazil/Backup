<?php

	class photos extends model{

		public function savePhoto(){

			date_default_timezone_set('America/Sao_Paulo');
			$data = date('d/m/Y');
			$hora = date('H:i:s');

			//$hash128 = md5(sha1('Backup'.md5(time().rand(0, 999).md5('S3mcRyPtiNDat0s')).time().'Pukcab'));

			$hash128 = 'ef8517f0967b8e9e26462c5de3bc2ab724f77e6f';

			if (isset($_FILES['arquivo']) && !empty($_FILES['arquivo']['tmp_name'])) {
				$permitidos = array('image/jpeg', 'image/jpg', 'image/png');

				if (in_array($_FILES['arquivo']['type'], $permitidos)) {
					$nome = md5(time().rand(0, 999)).'.jpg';	

					move_uploaded_file($_FILES['arquivo']['tmp_name'], 'media/'.$nome);	

					$titulo = '';
					if (isset($_POST['titulo']) && !empty($_POST['titulo'])) {
						$titulo = addslashes($_POST['titulo']);						
					}

					$sql = "INSERT INTO photos SET hash128 = :hash128, titulo = :titulo, url = :nome";
					$sql = $this->db->query($sql);


				}
			}
		}


		public function getPhotos(){
			
				$array = array();

				$hash128 = "ef8517f0967b8e9e26462c5de3bc2ab724f77e6f";

				$sql = "SELECT * FROM photos WHERE hash128 = :hash128";
				$sql = $this->db->prepare($sql);
				$sql->bindValue(":hash128", $hash128);
				$sql->execute();

				if ($sql->rowCount() > 0) {
					$array = $sql->fetchAll();
				}
				else{
					echo "nenhuma foto no sistema com esta hash128!";
				}

			return $array;
		}

		public function excluirphoto($id){

			$array = array();

			$sql = "DELETE * FROM photos WHERE id = :id";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(":id", $id);
			$sql->execute();


			return $array;
		}

	}