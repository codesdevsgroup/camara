<?php
			require_once('./header.php');
		 ?>
	<section class="w3l-team-main">
		<div class="team py-5">
			<div class="container py-lg-5">
				<div class="heading text-center mx-auto">
					<h3 class="head">Corpo Legislativo</h3>
					<p class="my-3 head"> Aqui você encontra informaçõe sobre os atuais vereadores da Câmara Municipal de Materlândia - MG.</p>
					  
					</div>
					
					
					
					<div class="row team-row pt-3 mt-5">
						
						
						<?php
						$resultado = $conn->query("SELECT v.NomeVereador, v.fotoVereador, o.nomeOrdem from tb_vereadores v INNER JOIN tb_ordem o on v.ordemVereador=o.idOrdem WHERE v.ativoVereador='1' ORDER BY v.idVereador");
						foreach($resultado as $row)
						{ ?>
							<div class="col-lg-3 col-sm-6 team-wrap mt-sm-0 pt-sm-0 mt-4 pt-2">
                <div class="team-info">
                    <div class="column position-relative">
                      <a href="#url"><img src="dados/vereadores/<?= $row[1] ?>" alt="" class="img-fluid team-image" /></a>
                    </div>
                  <div class="column-btm">
                    <h3 class="name-pos"><a href="#url"><?= $row[0] ?></a></h3>
                    <p><?= $row[2] ?></p>
                    <div class="social">
                      <a href="#facebook" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                      <a href="#twitter" class="twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                    </div>
                  </div>
                </div>
							</div>

						<?php }
						?>
					
							<!-- end team member -->
				</div>
			</div>
	</section>
	<!--//team-sec-->

  <?php require_once 'footer.php'; ?>