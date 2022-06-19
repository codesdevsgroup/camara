<?php
	require_once('./header.php');
?>
<section class="">
	<div>
		<p> Banner de fotos </p>
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
	<div class="col-lg-3 col-12 mr-auto bg-primary">
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