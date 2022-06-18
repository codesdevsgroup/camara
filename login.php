<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Login</title>
    <!-- web fonts -->
   <!-- web fonts -->
   <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
   <link href="//fonts.googleapis.com/css?family=Hind&display=swap" rel="stylesheet">
   <!-- //web fonts -->
    <!-- //web fonts -->
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <style>
	  .caixa
	{
		width: 50%;
		margin: auto;
		height: auto;
		padding: 3px;
		border-radius: 5px;
		border: 1px solid black;
	}
		.links 
		{
			width: auto;
			padding: 5px;
		}
	  </style>
  </head>
  <body>


<!-- Top Menu 1 -->
<?php
	  
	  session_start();
	 $_SESSION['logado']='Entrar';
	  require_once('./conexao.php');
	  require_once('./function.php');
	  
	  login();
	  ?>
<section class="w3l-about-breadcrum">
  <div class="breadcrum-bg">
    <div class="container py-5">
		<p><a href="index.php">Início</a> &nbsp; / &nbsp; Login</p>
    </div>
  </div>
</section>
<!-- content-with-photo4 block -->

<!--/team-sec-->
	<section class="w3l-team-main">
		<div class="team py-5">
			<div class="container py-lg-5">
				<div class="heading text-center mx-auto">
					<h3 class="head">Login</h3>
					<p class="my-3 head"> Faça login na área admnistrativa.</p>
					  
					</div>
					
					
					
					<div class="row team-row pt-3 mt-5">
					
					<div class="caixa">
					<?php
							echo($_SESSION['errologin']);
							$_SESSION['errologin']='';
						
							echo($_SESSION['errodireto']);
							$_SESSION['errodireto']='';
						
						
					?>
					<form name="login" action="logintrue.php" method="post">
					<input type="text" name="user" placeholder="Informe seu Usuário" required>
					<input type="password" name="pass" placeholder="Informe sua Senha" required>
					<input type="submit" value="Entrar" name="entrar">
					</form>

			</div>	
						
							
					
					
					
					
					
							<!-- end team member -->
				</div>
			</div>
	</section>
	<!--//team-sec-->
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
                      <li><a href="contact.html">Início</a></li>
                       <li><a href="contact.html">Vereadores</a></li>
                      <li><a href="contact.html">Regimento</a></li>
                      <li><a href="contact.html">Ouvidoria</a></li>
                      <li><a href="contact.html">Contato</a></li>
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

