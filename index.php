<?php
	require_once('./header.php');
?>
<section class="banner">
	<div class="row " style="display: block;" ><!--Row -->
        <div class="col-sm-12 m-auto"><!--col-sm8 -->
			<img src="assets/img/banner.jpg" class="img-fluid" alt="Responsive image">
</section>

<section class="">
	<div class="container p-3 shadow mt-3 mb-5 rounded bg-light">
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
			<div class="col-sm">
				<img src="./assets/img/logo.png" class="img-fluid ">
			</div>
		</div>
	</div>
</section>

  <!-- news -->
<section>
<div class="container">
	<div class="row  rounded bg-light mb-4">
		<div class="col-lg-9 shadow p-3 col-12 mr-auto ">
			<div class="heading text-center mx-auto">
				<h3 class="head">Ultimas Notícias</h3>
				<p class="my-3 head"> Acompanhe aqui, as ultimas notícias publicadas pela Câmara Municipal de Materlândia - MG. Para ver todas as notícias, <a href="listamateria.php">clique aqui.</a></p>
			</div>
		<div class="row p-3">
			<?php 
				$consulta = $conn->query("select tituloArtigo,artigo, imgArtigo01, dataPublicacao, idArtigo from tb_artigos ORDER BY idArtigo DESC LIMIT 4");
				foreach ($consulta as $linhas)
				{
				$parcial = substr($linhas[1],0,100); 
			?>
			<div class="card m-2 col-lg col-sm-5 text-center shadow p-3 mb-5 rounded">
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
	<div class="col-lg-3 col-12 shadow p-2 mr-auto">
			<div class="p-3 shadow pb-5">
				<span class="" aria-hidden="true"></span>
				<img src="./assets/img/transparencia.jpg" class="img-fluid ">
				<p class="pl-1 h6">Nesta área, você pode acompanhar relatórios de gestão e demais itens de transparência da Câmara Municipal de Materlândia-MG.</p>
				<button type="button" class="float-right btn btn-primary"><a class="float-right text-info-50 text-light" href="https://contasabertas.inf.br/entidade/cm-materlandia/">Acesse</a></button>
			</div>		
	</div>
</div>
</section>

<section class="banner_cidade shadow text-center p-4 bg-light">
	<div class="container pb-1 mb-4 mt-3">
		<h3>Website da Câmara Municipal de Materlândia - MG</3>
		<h5>Um canal de informação a serviço dos MATERLANDIENSES!</h5>
	</div>
</section>

<section class="container">
	<div class="bg-light row py-lg-5 mt-2 shadow mb-3 mt-4">
		<div class="p-3">
			<div class="heading text-center mx-auto">
				<h3 class="head">Corpo Legislativo</h3>
					<p class="my-3 head"> Conheça os Parlamentares <br> Legislatura 2021/2024</p>
			</div>
			<div class="row team-row pt-3 mt-5">
				<?php
					$resultado = $conn->query("SELECT v.NomeVereador, v.fotoVereador, o.nomeOrdem from tb_vereadores v INNER JOIN tb_ordem o on v.ordemVereador=o.idOrdem WHERE v.ativoVereador='1' ORDER BY v.idVereador");
					foreach($resultado as $row)
				{
					?>
				
					<div class="col-lg-4 col-sm-6 team-wrap mt-sm-0 pt-sm-0 mt-4 pt-2 text-center">
						<div class="shadow team-info">
						<div class="column position-relative p-4">
							<a href="#url"><img src="dados/vereadores/<?= $row[1] ?>" alt="" class="img-fluid p-5" /></a>
					</div>
					<div class="column-btm">
						<h3 class="h5"><a href="#url"><?= $row[0] ?></a></h3>
						<p><?= $row[2] ?></p>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</section>

<?php require_once 'footer.php'; ?>