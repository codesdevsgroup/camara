<?php
	require_once('./header.php');
?>
<section class="container">
	<div class="row"><!--Row -->
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
                <img src="./assets/img/imagem1.jpeg" class="img-fluid">
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
                <img src="./assets/img/imagem2.jpeg" class="img-fluid">
                <div class="carousel-caption">
                  <h3>Item 2</h3>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  </p>
                </div>
              </div>

              <div class="carousel-item">
                <img src="./assets/img/imagem3.jpeg" class="img-fluid">
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
</div>



</section>

  <!-- news -->
<section>
<div class="container">
	<div class="row bg-light">
		<div class="col-lg-8 col-12 mr-auto ">
			<div class="heading text-center mx-auto">
				<h3 class="head">Ultimas Notícias</h3>
				<p class="my-3 head"> Acompanhe aqui, as ultimas notícas publicadas pela Câmara Municipal de Materlândia - MG. Para ver todas as notícias, <a href="listamateria.php">clique aqui.</a></p>
			</div>
		<div class="row">
			<?php 
				$consulta = $conn->query("select tituloArtigo,artigo, imgArtigo01, dataPublicacao, idArtigo from tb_artigos ORDER BY idArtigo DESC LIMIT 8");
				foreach ($consulta as $linhas)
				{
				$parcial = substr($linhas[1],0,100); 
			?>
			<div class="card m-2 col-lg col-sm-5 text-center">
				<a href="generic.php?tipo=1&id=<?=$linhas[4]?>"><img src="./dados/imagemArtigo/<?=$linhas[2]?>" alt="" class="img-fluid img-thumbnail " width="140" ></a>
				<div class="blog-info">
					<p class="h5"><a href="generic.php?tipo=1&id=<?=$linhas[4]?>"><?=$linhas[0]?>.</a></p>
					<p class="date text-right text-info-50"><a href="generic.php?tipo=1&id=<?=$linhas[4]?>">Leia mais...</a></p>
					<p class="h6 date text-right"><?=date("d/m/Y", strtotime($linhas[3]))?></p>
				</div>
			</div>
			<?php
					}?>
		</div>
	</div>
	<div class="col-lg-4 col-12 mr-auto">
		<div class="">
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
</div>
</section>
<!-- end news-->


<?php require_once 'footer.php'; ?>