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
<section class="w3l-footer-29-main">
  <div class="footer-29">
      <div class="container">
          <div class="d-grid grid-col-4 footer-top-29">
              <div class="footer-list-29 footer-1">
                  <h6 class="footer-title-29">Entre em Contato</h6>
                  <ul>
                      <li><p><span class="fa fa-map-marker"></span><a href="https://goo.gl/maps/ohzyZ3u2QF95RNW37">Pça. Geraldo Anadir, 11, Centro, Materlândia - MG 39755-000.</a></p></li>
                      <li><a href="tel:+55 33 3427-1170"><span class="fa fa-phone"></span> +55 33 3427-1170</a></li>
                      <li><a href="mailto:contato@materlandia.mg.leg.br" class="mail"><span class="fa fa-envelope-open-o"></span> contato@materlandia.mg.leg.br</a></li>
                  </ul>
                  <div class="main-social-footer-29">
                      <a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
                      <a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>
                      <a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
                      <a href="#google-plus" class="google-plus"><span class="fa fa-google-plus"></span></a>
                      <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a>
                  </div>
              </div>
              <div class="footer-list-29 footer-2">
                  <ul>
                      <h6 class="footer-title-29">Menu Principal</h6>
                      <li><a href="index.php">Início</a></li>
                       <li><a href="vereadores.php">Vereadores</a></li>
                      <li><a href="regimento.php">Regimento</a></li>
                      <li><a href="ouvidoria.php">Ouvidoria</a></li>
                      <li><a href="contato.php.html">Contato</a></li>
                  </ul>
              </div>
              <div class="footer-list-29 footer-3">
                 
                  <h6 class="footer-title-29">Câmara no Mapa </h6>
                  
                  
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1539.8047847575906!2d-43.06082514205571!3d-18.473494252861574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xae5c5534e4c117%3A0x7f8350fc0f014ab8!2sC%C3%A2mara%20Municipal%20de%20Materl%C3%A2ndia!5e1!3m2!1spt-BR!2sbr!4v1607005357464!5m2!1spt-BR!2sbr" width="400" height="175" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        
              </div>
              <div class="footer-list-29 footer-4">
                  <ul>
                      <h6 class="footer-title-29">Links Úteis</h6>
                      <li><a href="index.html">Pref. de Materlândia</a></li>
                      <li><a href="about.html">Minas Gerais</a></li>
                      <li><a href="services.html">Copasa</a></li>
                      <li><a href="#"> Cemig</a></li>
                      <li><a href="contact.html">Polícia Militar</a></li>
                  </ul>
              </div>
          </div>
          <div class="d-grid grid-col-2 bottom-copies">
              <p class="copy-footer-29">© 2020 Farm Planning. Todos os Direitos Reservados | Designed by <a href="https://w3layouts.com">W3layouts</a></p>
               <ul class="list-btm-29">
                      <li><a href="#link">Política de Privacidade</a></li>
                      <li><a href="#link">Termos de de Serviço</a></li>
                      
                  </ul>
          </div>
      </div>
  </div>
  <!-- move top -->
  <button onclick="topFunction()" id="movetop" title="Go to top">
    <span class="fa fa-angle-up"></span>
  </button>
  <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("movetop").style.display = "block";
      } else {
        document.getElementById("movetop").style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
  <!-- /move top -->
</section>
<script src="assets/js/jquery-3.3.1.min.js"></script>
<!-- //footer-28 block -->
</section>
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
  integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
  integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
  integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>

<!-- Template JavaScript -->
<script src="assets/js/all.js"></script>
<!-- Smooth scrolling -->
<!-- <script src="assets/js/smoothscroll.js"></script> -->
<script src="assets/js/owl.carousel.js"></script>

<!-- script for -->
<script>
  $(document).ready(function () {
    $('.owl-one').owlCarousel({
      loop: true,
      margin: 0,
      nav: true,
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

</body>

</html>
<!-- // grids block 5 -->