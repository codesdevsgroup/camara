<?php
			require_once('./header.php');
?>

<!--/team-sec-->
	<section class="w3l-team-main">
		<div class="team py-5">
			<div class="container py-lg-5">
					<div class="row team-row pt-3 mt-5">
						
						
						<?php
						if ($_GET['tipo']) {
							if ($_GET['tipo']=='1') {
								$idArtigo = $_GET['id'];
								$resultado = $conn->query("SELECT a.tituloArtigo, a.artigo,a.imgArtigo01,a.imgArtigo02,a.dataPublicacao,u.nomeUsuario from tb_artigos a INNER JOIN tb_usuario u on u.idUsuario=a.idUsuario WHERE ativoArtigo='1' AND a.idArtigo=".$idArtigo);
							
								foreach ($resultado as $linha) { ?>

									<div class="caixa">
										<h3 align="center"><?= $linha[0] ?></h3>
										<div class="imagem">
											<img src="dados/imagemArtigo/<?= $linha[2] ?>" align="center">
										</div>
										<?= $linha[1] ?>
										<div class="imagem">
											<img src="dados/imagemArtigo/<?= $linha[3] ?>" align="center">
										</div>
										<div class="publicacao">
											Publicado por: <?= $linha[5] ?> em <?= $linha[4] ?>
										</div>
									</div>
						<?php
								}
							}
						}
						?>
							<!-- end team member -->
					</div>
			</div>
		</div>
	</section>

  
<?php require_once 'footer.php'; ?>