<?php
			require_once('./header.php');
		 ?>

<section class="m-5">
	<div class="bg-primary">
			<div class="middle-section grid-column text-center">
				<div class="three-grids-columns">
					<span class="fa fa-file-text" aria-hidden="true"></span>
					<h4>Licitações e Contratos</h4>
					<p>Nesta área, você pode acompanhar na íntegra todas as Licitações e Contratos firmados pela Câmara Municipal de Materlândia - MG.</p>
					<a href="licitacoes.php" class="red mt-3">Acesse</a>
				</div>
				<div class="three-grids-columns">
					<span class="fa fa-wpexplorer" aria-hidden="true"></span>
					<h4>Portal da Transparência</h4>
					<p>Nesta área, você pode acompanhar relatórios de gestão e demais itens de transparência da Câmara Municipal de Materlândia - MG.</p>
					<a href="https://contasabertas.inf.br/entidade/cm-materlandia/" class="red mt-3">Acesse </a>
				</div>
				<div class="three-grids-columns">
			
					<span class="fa fa-database" aria-hidden="true"></span>
					<h4>Produção Legislativa</h4>
					<p>Nesta área, você pode acompanhar toda Produção Legislativa, Indicações, Projetos de Lei da Câmara Municipal de Materlândia - MG</p>
					<a href="producao.php" class="red mt-3">Acesse </a>
				</div>
			</div>
	</div>
</section>
  <!-- news -->
<section class="">
  <div class="container mr-auto">
    <div class="heading text-center mx-auto">
			<h3 class="head">Ultimas Notícias</h3>
			<p class="my-3 head"> Acompanhe aqui, as ultimas notícas publicadas pela Câmara Municipal de Materlândia - MG. Para ver todas as notícias, <a href="listamateria.php">clique aqui.</a></p>
		</div>
      <div class="row">
        <?php 
		    $consulta = $conn->query("select tituloArtigo,artigo, imgArtigo01, dataPublicacao, idArtigo from tb_artigos ORDER BY idArtigo DESC LIMIT 3");
			  foreach ($consulta as $linhas)
			  {
			  $parcial = substr($linhas[1],0,100); 
        ?>
          <div class="card border-primary m-3 col-lg-3 col-md-4 text-center ">
            <a href="generic.php?tipo=1&id=<?=$linhas[4]?>"><img src="./dados/imagemArtigo/<?=$linhas[2]?>" alt="" class="img-fluid img-thumbnail w-50"></a>
              <div class="blog-info">
                <h4><a href="generic.php?tipo=1&id=<?=$linhas[4]?>"><?=$linhas[0]?></a></h4>
                <p class="blog-text"><?=$parcial?>...</p>
                <button type="button" class="float-left btn btn-outline-primary btn-sm">
                  <a href="generic.php?tipo=1&id=<?=$linhas[4]?>" class="btn-outline-primary">Acessar conteúdo <span class=""></span> </a>
                </button>
                <p class="date text-right"><?=date("d/m/Y", strtotime($linhas[3]))?></p>
              </div>
          </div>
        <?php
				}?>
      </div>
  </div>
</section>
<!-- end news-->

<?php require_once 'footer.php'; ?>