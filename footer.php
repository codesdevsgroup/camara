<section class="shadow pt-4 footer">
    <div class="container">
        <div class="row">
            <div class="ml-2 col-md-5 text-md-start mb-md-0">     
                <h6 class="">Câmara no Mapa </h6>  
                <iframe class="ml-3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1539.8047847575906!2d-43.06082514205571!3d-18.473494252861574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xae5c5534e4c117%3A0x7f8350fc0f014ab8!2sC%C3%A2mara%20Municipal%20de%20Materl%C3%A2ndia!5e1!3m2!1spt-BR!2sbr!4v1607005357464!5m2!1spt-BR!2sbr" width="360" height="190" frameborder="0" aria-hidden="false">
                </iframe>
            </div>
            
            <div class="col-md-6 text-md-end  pt-5">
                <ul>
                    <h6 class="h2">Entre em Contato</h6>
                    <li><p><span class=""></span><a href="https://goo.gl/maps/m2HFq5F2Vnd4jgLu9">Pça. Geraldo Anadir, 11, Centro, Materlândia - MG 39755-000.</a></p></li>
                    <li><a href="tel:+55 33 3427-1170"><span class=""></span> +55 33 3427-1170</a></li>
                    <li><a href="mailto:contato@materlandia.mg.leg.br" class="mail"><span class=""></span> contato@materlandia.mg.leg.br</a></li>
                </ul>
            </div>
        </div>
    
        <div class="row pt-3">
            <div class="col-md-4 text-md-start mb-md-0">
                <ul>
                    <h6 class="h3">Principais</h6>
                    <li class="nav"><a href="index.php">Transparência</a></li>
                    <li class="nav"><a href="vereadores.php">Notícias</a></li>
                    <li class="nav"><a href="regimento.php">Regimento</a></li>
                    <li class="nav"><a href="contato.php.html">Contato</a></li>
                </ul>
            </div>
            <div class="col-md-4 text-md-end">
                <ul>
                    <h6 class="h3">Links Úteis</h6>
                    <li class="nav"><a href="index.html">Pref. de Materlândia</a></li>
                    <li class="nav"><a href="about.html">Minas Gerais</a></li>
                    <li class="nav"><a href="services.html">Copasa</a></li>
                    <li class="nav"><a href="#">Cemig</a></li>
                </ul>
            </div>
            <div class="col-md-4 text-md-end pt-sm-3">
                <ul>
                    <br>
                    <li class="nav"><a href="contact.html">Polícia Militar</a></li>
                    <li class="nav"><a href="#">TCU</a></li>
                    <li class="nav"><a href="contact.html">Assembleia Legislativa de Minas Gerais</a></li>
                    <li class="nav"><a href="https://webmail.hostinger.com.br/auth">Servidor de E-mail</a> </li>
                </ul>
        </div>
    </div>
</section>
<section id="copyright">
    <div class="copyright text-light" data-wow-delay="0.1s">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-md-0">
                    &copy;<a href="#">2022 Câmara de Materlândia</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center">
                    Desenvolvido por: <a href="https://codesdevs.com">CodesDevs.com</a>
                </div>
            </div>
        </div>
    </div>
     <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
      <span class="fa fa-angle-up"></span>
    </button>
    <script>
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function() {
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
    <script>
    $(function() {
      $('.navbar-toggler').click(function() {
        $('body').toggleClass('noscroll');
      })
    });
    </script>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
</body>
</html>