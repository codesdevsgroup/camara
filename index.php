<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<?php
			require_once('./header.php');
		 ?>

<body>

<!-- Top Menu 1 -->

<section class="w3l-main-slider" id="home">
  <!-- main-slider -->
  <div class="companies20-content">
   
    <div class="owl-one owl-carousel owl-theme">
      <div class="item">
        <li>
          <div class="slider-info banner-view bg bg2" data-selector=".bg.bg2">
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg mx-auto text-center">
                  <h5>CÂMARA MUNICIPAL DE MATERLÂNDIA - MG</h5>
               
                </div>
                
              </div>
            </div>
          </div>
        </li>
      </div>

      
      
    </div>
  </div>

</div>


  <script src="assets/js/owl.carousel.js"></script>
  <!-- script for -->
  <script>
    $(document).ready(function () {
      $('.owl-one').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        responsiveClass: true,
        autoplay: false,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: false,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          480: {
            items: 1,
            nav: false
          },
          667: {
            items: 1,
            nav: true
          },
          1000: {
            items: 1,
            nav: true
          }
        }
      })
    })
  </script>
  <!-- //script -->
  <!-- /main-slider -->
</section>
<section class="w3l-feature-3" id="">
	<div class="grid top-bottom mb-lg-5 pb-lg-5">
		<div class="container">
			
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
	</div>
</section>
 <!--  services section -->

 <!--  //services section -->
<!-- customers4 block -->
<section class="w3l-customers-4" id="testimonials">
  <div id="customers4-block" class="py-5">
    <div class="container py-md-3">



    </div>
  </div>


</section>
<div class="products-4" id="gallery">
    <!-- Products4 block -->
    
    <!-- Products4 block -->
</div>
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/lightbox-plus-jquery.min.js"></script>
<section class="w3l-features-4">
	<!-- /features -->
		
   <!-- //features -->
</section>
<section class="w3l-news" id="news">
  <section id="grids5-block" class="py-5">
    <div class="container py-lg-3">
      <div class="heading text-center mx-auto">
				<h3 class="head">Ultimas Notícias</h3>
				<p class="my-3 head"> Acompanhe aqui, as ultimas notícas publicadas pela Câmara Municipal de Materlândia - MG. Para ver todas as notícias, <a href="listamateria.php">clique aqui.</a></p>
			  </div>
      <div class="grid-view">
        <div class="row">
         <?php 
			$consulta = $conn->query("select tituloArtigo,artigo, imgArtigo01, dataPublicacao, idArtigo from tb_artigos ORDER BY idArtigo DESC LIMIT 3");
			foreach ($consulta as $linhas)
			{
			$parcial = substr($linhas[1],0,100); ?>
        <div class="col-lg-4 col-md-6 mt-md-4 mt-5">
            <div class="grids5-info">
              <a href="generic.php?tipo=1&id=<?=$linhas[4]?>" class="d-block zoom"><img src="./dados/imagemArtigo/<?=$linhas[2]?>" alt="" class="img-fluid news-image"></a>
              <div class="blog-info">
                <p class="date"><?=date("d/m/Y", strtotime($linhas[3]))?></p>
                <h4><a href="generic.php?tipo=1&id=<?=$linhas[4]?>"><?=$linhas[0]?></a></h4>
              
                <p class="blog-text"><?=$parcial?>...</p>
                <a href="generic.php?tipo=1&id=<?=$linhas[4]?>" class="btn btn-news">Acessar conteúdo <span class="fa fa-angle-right pl-1"></span> </a>
              </div>
            </div>
          </div>
          <?php
												}
		 ?>
     
          
          
        </div>
      </div>
    </div>
  </section>
</section>
<!-- grids block 5 -->
<?php require_once 'footer.php'; ?>