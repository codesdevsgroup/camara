<?php
function valida_cnpj($cnpj) {
            // Deixa o CNPJ com apenas números
            $cnpj = preg_replace('/[^0-9]/', '', $cnpj);

            // Garante que o CNPJ é uma string
            $cnpj = (string) $cnpj;

            // O valor original
            $cnpj_original = $cnpj;

            // Captura os primeiros 12 números do CNPJ
            $primeiros_numeros_cnpj = substr($cnpj, 0, 12);

            /**
             * Multiplicação do CNPJ
             *
             * @param string $cnpj Os digitos do CNPJ
             * @param int $posicoes A posição que vai iniciar a regressão
             * @return int O
             *
             */
            if (!function_exists('multiplica_cnpj')) {

                function multiplica_cnpj($cnpj, $posicao = 5) {
                    // Variável para o cálculo
                    $calculo = 0;

                    // Laço para percorrer os item do cnpj
                    for ($i = 0; $i < strlen($cnpj); $i++) {
                        // Cálculo mais posição do CNPJ * a posição
                        $calculo = $calculo + ( $cnpj[$i] * $posicao );

                        // Decrementa a posição a cada volta do laço
                        $posicao--;

                        // Se a posição for menor que 2, ela se torna 9
                        if ($posicao < 2) {
                            $posicao = 9;
                        }
                    }
                    // Retorna o cálculo
                    return $calculo;
                }

            }

            // Faz o primeiro cálculo
            $primeiro_calculo = multiplica_cnpj($primeiros_numeros_cnpj);

            // Se o resto da divisão entre o primeiro cálculo e 11 for menor que 2, o primeiro
            // Dígito é zero (0), caso contrário é 11 - o resto da divisão entre o cálculo e 11
            $primeiro_digito = ( $primeiro_calculo % 11 ) < 2 ? 0 : 11 - ( $primeiro_calculo % 11 );

            // Concatena o primeiro dígito nos 12 primeiros números do CNPJ
            // Agora temos 13 números aqui
            $primeiros_numeros_cnpj .= $primeiro_digito;

            // O segundo cálculo é a mesma coisa do primeiro, porém, começa na posição 6
            $segundo_calculo = multiplica_cnpj($primeiros_numeros_cnpj, 6);
            $segundo_digito = ( $segundo_calculo % 11 ) < 2 ? 0 : 11 - ( $segundo_calculo % 11 );

            // Concatena o segundo dígito ao CNPJ
            $cnpj = $primeiros_numeros_cnpj . $segundo_digito;

            // Verifica se o CNPJ gerado é idêntico ao enviado
            if ($cnpj === $cnpj_original) {
                return true;
            }
        }

        function valida_cpf( $cpf = false ) {
            // Exemplo de CPF: 025.462.884-23

            /**
             * Multiplica dígitos vezes posições 
             *
             * @param string $digitos Os digitos desejados
             * @param int $posicoes A posição que vai iniciar a regressão
             * @param int $soma_digitos A soma das multiplicações entre posições e dígitos
             * @return int Os dígitos enviados concatenados com o último dígito
             *
             */
            if ( ! function_exists('calc_digitos_posicoes') ) {
                function calc_digitos_posicoes( $digitos, $posicoes = 10, $soma_digitos = 0 ) {
                    // Faz a soma dos dígitos com a posição
                    // Ex. para 10 posições: 
                    //   0    2    5    4    6    2    8    8   4
                    // x10   x9   x8   x7   x6   x5   x4   x3  x2
                    //   0 + 18 + 40 + 28 + 36 + 10 + 32 + 24 + 8 = 196
                    for ( $i = 0; $i < strlen( $digitos ); $i++  ) {
                        $soma_digitos = $soma_digitos + ( $digitos[$i] * $posicoes );
                        $posicoes--;
                    }

                    // Captura o resto da divisão entre $soma_digitos dividido por 11
                    // Ex.: 196 % 11 = 9
                    $soma_digitos = $soma_digitos % 11;

                    // Verifica se $soma_digitos é menor que 2
                    if ( $soma_digitos < 2 ) {
                        // $soma_digitos agora será zero
                        $soma_digitos = 0;
                    } else {
                        // Se for maior que 2, o resultado é 11 menos $soma_digitos
                        // Ex.: 11 - 9 = 2
                        // Nosso dígito procurado é 2
                        $soma_digitos = 11 - $soma_digitos;
                    }

                    // Concatena mais um dígito aos primeiro nove dígitos
                    // Ex.: 025462884 + 2 = 0254628842
                    $cpf = $digitos . $soma_digitos;

                    // Retorna
                    return $cpf;
                }
            }

            // Verifica se o CPF foi enviado
            if ( ! $cpf ) {
                return false;
            }

            // Remove tudo que não é número do CPF
            // Ex.: 025.462.884-23 = 02546288423
            $cpf = preg_replace( '/[^0-9]/is', '', $cpf );

            // Verifica se o CPF tem 11 caracteres
            // Ex.: 02546288423 = 11 números
            if ( strlen( $cpf ) != 11 ) {
                return false;
            }   

            // Captura os 9 primeiros dígitos do CPF
            // Ex.: 02546288423 = 025462884
            $digitos = substr($cpf, 0, 9);

            // Faz o cálculo dos 9 primeiros dígitos do CPF para obter o primeiro dígito
            $novo_cpf = calc_digitos_posicoes( $digitos );

            // Faz o cálculo dos 10 dígitos do CPF para obter o último dígito
            $novo_cpf = calc_digitos_posicoes( $novo_cpf, 11 );

            // Verifica se o novo CPF gerado é idêntico ao CPF enviado
            if ( $novo_cpf === $cpf ) {
                // CPF válido
                return true;
            } else {
                // CPF inválido
                return false;
            }
        }

function cab()
{
	printf('<section class="w3l-top-menu-1">
	<div class="top-hd">
		<div class="container">
	<header class="row top-menu-top">
		<div class="accounts col-md-9 col-6">
				<li class="top_li"><span class="fa fa-phone"></span><a href="tel:+55 33 3424-1170">+55 33 3427-1170</a> </li>
				<li class="top_li1"><span class="fa fa-envelope-o"></span> <a href="mailto:contato@materlandia.mg.leg.br" class="mail"> contato@materlandia.mg.leg.br</a>	</li>
				<li class="top_li"><a href="https://webmail.hostinger.com.br/auth">Servidor de E-mail</a> </li>
		</div>
		<div class="social-top col-md-3 col-6">
			<div class="main-social-head">
				');
	session_start();
					if ($_SESSION['logado']!='Entrar')
					{
						echo($_SESSION['logado'].' <a href="killsess.php">Sair</a>');
					} else
					{
						echo('<a href="login.php">Entrar</a>');
					}
	printf('</div>
		</div>
	</header>
</div>
</div>
</section>
<!-- //Top Menu 1 -->
<section class="w3l-bootstrap-header">
  <nav class="navbar navbar-expand-lg navbar-light py-lg-2 py-2">
    <div class="container">
      <a class="navbar-brand" href="index.php"><img src="assets/images/logo.png"></a>
      <!-- if logo is image enable this   
    <a class="navbar-brand" href="#index.html">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon fa fa-bars"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mt-2">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Início</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="vereadores.php">Vereadores</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="regimento.php">Regimento</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="ouvidoria.php">Ouvidoria</a>
          </li>
         
        
          <li class="nav-item">
            <a class="nav-link" href="contato.php">Contato</a>
          </li>
        </ul>
        <form action="#" class="form-inline position-relative my-2 my-lg-0">
          <input class="form-control search" type="search" placeholder="Pesquise Aqui" aria-label="Search" required="">
          <button class="btn btn-search position-absolute" type="submit"><span class="fa fa-search" aria-hidden="true"></span></button>
        </form>
      </div>
    </div>
  </nav>
</section>');
}

?>