<?php
	require_once('./header.php');
?>
<section class="banner">
	<div class="row " style="display: block;" ><!--Row -->
        <div class="col-sm-12 m-auto"><!--col-sm8 -->
          <div id="carousel-legenda" class="carousel slide" data-ride="carousel"><!--Carousel -->

            <!-- Indicadores -->
            <ol class="carousel-indicators">

              <li class="active" data-target="#carousel-legenda" data-slide-to="0"></li>

              <li data-target="#carousel-legenda" data-slide-to="1"></li>

              <li data-target="#carousel-legenda" data-slide-to="2"></li>

            </ol>

            <div class="carousel-inner"><!--Inner -->
              
              <div class="carousel-item active">
                <img src="./assets/img/imagem1.jpg" class="img-fluid ">
                <div class="carousel-caption">
                  <div style="background: black; padding: 10px;">
                    <h3>Item 1</h3>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                  </div>
                </div>
              </div>

              <div class="carousel-item">
                <img src="./assets/img/imagem2.jpg" class="img-fluid">
                <div class="carousel-caption">
                  <h3>Item 2</h3>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  </p>
                </div>
              </div>

              <div class="carousel-item">
                <img src="./assets/img/imagem3.jpg" class="img-fluid">
                <div class="carousel-caption">
                  <h3>Item 3</h3>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  </p>
                </div>
              </div>

            </div><!--/Inner -->

            <!-- Controles -->
            <a href="#carousel-legenda" class="carousel-control-prev" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>

            <a href="#carousel-legenda" class="carousel-control-next" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>

          </div><!--/Carousel -->
          

        </div><!--/col-sm8 -->
      </div><!--/Row -->
    </div>

</section>

<section>
	<div class="container p-3 shadow p-3 mb-5 bg-white rounded">
		<div class="row d-flex justify-content-center bg-light h5">
			<div class="col-lg-7 col-12col-7 ml-2 mt-4">
			<p>Sejam Bem-vindos</p>
			<p>
			A Camara Municipal de Materlândia apresenta seu novo Portal, em atendimento à Lei Complementar 131/2009 de 27 de maio de 2009 e à Lei 12.527, chamada de "Lei de Acesso à Informação" sancionada pela Presidenta da República em 18/11/2011, que tem o propósito de regulamentar o direito constitucional de acesso dos cidadãos às informações públicas.
			</p>
			<p>
			Por este canal o cidadão poderá acompanhar de forma dinâmica a aplicação dos recursos públicos da Câmara, compreendendo as receitas transferidas e a execução das despesas, sendo oferecidas outras informações de interesse do cidadão, tais como projetos dos vereadores, pauta parlamentar e andamento de contratos e relatórios exigidos pela lei de responsabilidade fiscal.
			</p>
			</div>
			<div class="col-4">
				<img src="./assets/img/logo.png" class="img-fluid ">
			</div>
		</div>
	</div>
</section>

  <!-- news -->
<section>
<div class="container ">
	<div class="row py-3 mb-5 bg-white rounded">
		<div class="col-lg-8 shadow p-3 col-12 mr-auto ">
			<div class="heading text-center mx-auto">
				<h3 class="head">Ultimas Notícias</h3>
				<p class="my-3 head"> Acompanhe aqui, as ultimas notícas publicadas pela Câmara Municipal de Materlândia - MG. Para ver todas as notícias, <a href="listamateria.php">clique aqui.</a></p>
			</div>
		<div class="row p-3">
			<?php 
				$consulta = $conn->query("select tituloArtigo,artigo, imgArtigo01, dataPublicacao, idArtigo from tb_artigos ORDER BY idArtigo DESC LIMIT 4");
				foreach ($consulta as $linhas)
				{
				$parcial = substr($linhas[1],0,100); 
			?>
			<div class="card m-2 col-lg col-sm-5 text-center shadow p-3 mb-5 bg-white rounded">
				<a href="generic.php?tipo=1&id=<?=$linhas[4]?>"><img src="./dados/imagemArtigo/<?=$linhas[2]?>" alt="" class="img-fluid img-thumbnail " width="140" ></a>
				<div class="blog-info">
					<p class="h6"><a href="generic.php?tipo=1&id=<?=$linhas[4]?>"><?=$linhas[0]?>.</a></p>
					<p class="date text-right text-info-50"><a href="generic.php?tipo=1&id=<?=$linhas[4]?>">Leia mais...</a></p>
					<p class="h6 date text-right"><?=date("d/m/Y", strtotime($linhas[3]))?></p>
				</div>
			</div>
			<?php
			}?>
		</div>
	</div>
	<div class="col-lg-4 col-12 shadow p-3 mr-auto">
			<div class="">
				<span class="" aria-hidden="true"></span>
				<h4>Licitações e Contratos</h4>
				<p>Nesta área, você pode acompanhar na íntegra todas as Licitações e Contratos firmados pela Câmara Municipal de Materlândia - MG.</p>
				<a href="licitacoes.php" class="">Acesse</a>
			</div>
			<div class="">
				<span class="" aria-hidden="true"></span>
				<h4>Portal da Transparência</h4>
				<p>Nesta área, você pode acompanhar relatórios de gestão e demais itens de transparência da Câmara Municipal de Materlândia - MG.</p>
				<a href="https://contasabertas.inf.br/entidade/cm-materlandia/" class="">Acesse </a>
			</div>
			<div class="">
				<span class="" aria-hidden="true"></span>
				<h4>Produção Legislativa</h4>
				<p>Nesta área, você pode acompanhar toda Produção Legislativa, Indicações, Projetos de Lei da Câmara Municipal de Materlândia - MG</p>
				<a href="producao.php" class="">Acesse </a>
			</div>
		
	</div>
</div>
</section>

<section class="">
	<div class="container py-lg-5 shadow p-3">
		<div class="heading text-center mx-auto">
			<h3 class="head">Corpo Legislativo</h3>
				<p class="my-3 head"> Aqui você encontra informaçõe sobre os atuais vereadores da Câmara Municipal de Materlândia - MG.</p>
		</div>
		<div class="row team-row pt-3 mt-5">
		<?php
			$resultado = $conn->query("SELECT v.NomeVereador, v.fotoVereador, o.nomeOrdem from tb_vereadores v INNER JOIN tb_ordem o on v.ordemVereador=o.idOrdem WHERE v.ativoVereador='1' ORDER BY v.idVereador");
			foreach($resultado as $row)
		{
			printf('<div class="col-lg-3 col-sm-6 team-wrap mt-sm-0 pt-sm-0 mt-4 pt-2">
					<div class="shadow team-info">
					<div class="column position-relative">
						<a href="#url"><img src="dados/vereadores/%s" alt="" class="img-fluid team-image" /></a>
					</div>
					<div class="column-btm">
						<h3 class="name-pos"><a href="#url">%s</a></h3>
						<p>%s</p>
							<div class="social">
								<a href="#facebook" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
								<a href="#twitter" class="twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
							</div>
					</div>
				</div>
				</div>',$row[1],$row[0],$row[2]);
				}
				?>	
	</div>
</section>

<?php require_once 'footer.php'; ?>