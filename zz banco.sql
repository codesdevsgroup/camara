-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 16/06/2022 às 16:50
-- Versão do servidor: 10.5.13-MariaDB-cll-lve
-- Versão do PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `u464363209_cm`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_andamentoOuvidoria`
--

CREATE TABLE `tb_andamentoOuvidoria` (
  `idAndamento` int(11) NOT NULL,
  `idOuvidoria` int(11) NOT NULL,
  `mensagemAndamento` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anexoAndamento` int(50) DEFAULT NULL,
  `usuarioAndamento` int(11) NOT NULL,
  `dataAndamento` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_anexo_processo`
--

CREATE TABLE `tb_anexo_processo` (
  `idAnexo` int(11) NOT NULL,
  `descricaoAnexo` varchar(100) NOT NULL,
  `arquivoAnexo` varchar(100) NOT NULL,
  `tipoAnexo` int(11) NOT NULL,
  `idProcesso` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `dataPublicacao` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `tb_anexo_processo`
--

INSERT INTO `tb_anexo_processo` (`idAnexo`, `descricaoAnexo`, `arquivoAnexo`, `tipoAnexo`, `idProcesso`, `idUsuario`, `dataPublicacao`) VALUES
(1, 'EDITAL PROCESSO SELETIVO SIMPLIFICADO Nº 01/2022, PARA CONTRATAÇÃO  DE AUXILIAR DE SERVIÇOS GERAIS P', 'CMM104042022153519.pdf', 1, 6, 1, '2022-04-04 15:35:19');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_artigos`
--

CREATE TABLE `tb_artigos` (
  `idArtigo` int(11) NOT NULL,
  `tituloArtigo` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artigo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `imgArtigo01` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imgArtigo02` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dataPublicacao` timestamp NOT NULL DEFAULT current_timestamp(),
  `idUsuario` int(11) NOT NULL,
  `ativoArtigo` char(1) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `tb_artigos`
--

INSERT INTO `tb_artigos` (`idArtigo`, `tituloArtigo`, `artigo`, `imgArtigo01`, `imgArtigo02`, `dataPublicacao`, `idUsuario`, `ativoArtigo`) VALUES
(1, 'Resultado Processo Seletivo Simplificado nº 01/2022', '<p>Em obedi&ecirc;ncia ao Item 07 - Do Resultado Provis&oacute;rio&nbsp; do Processo Seletivo Simplificado n&ordm; 01/2022, esta Casa&nbsp; torna p&uacute;blica a ordem de classifica&ccedil;&atilde;o.</p>\r\n', 'CMM20052022105610A.jpeg', 'CMM20052022105610B.jpeg', '2022-05-20 10:56:10', 1, '1'),
(2, 'RESULTADO FINAL do Processo Seletivo  Simplificado nº 01/2022', '<p>Em obedi&ecirc;ncia ao Item 9. DO RESULTADO FINAL do Processo Seletivo Simplificado n&ordm; 01/2022 para contrata&ccedil;&atilde;o, por tempo determinado de AUXILIAR DE SERVI&Ccedil;OS GERAIS, esta Casa torna p&uacute;blica a ordem de classifica&ccedil;&atilde;o.</p>\r\n', 'CMM30052022102643A.jpg', 'CMM30052022102643B.jpg', '2022-05-30 10:26:43', 1, '1');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_compras`
--

CREATE TABLE `tb_compras` (
  `idProcesso` int(11) NOT NULL,
  `numeroProcesso` int(11) NOT NULL,
  `idModalidade` int(11) NOT NULL,
  `numeroModalidade` int(11) NOT NULL,
  `anoProcesso` int(11) NOT NULL,
  `objetoProcesso` varchar(200) NOT NULL,
  `dataAutuacao` date NOT NULL,
  `dataRatificacao` date DEFAULT NULL,
  `situacaoProcesso` int(1) NOT NULL,
  `datalancamento` datetime DEFAULT current_timestamp(),
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `tb_compras`
--

INSERT INTO `tb_compras` (`idProcesso`, `numeroProcesso`, `idModalidade`, `numeroModalidade`, `anoProcesso`, `objetoProcesso`, `dataAutuacao`, `dataRatificacao`, `situacaoProcesso`, `datalancamento`, `idUsuario`) VALUES
(6, 1, 2, 0, 2022, 'Contratação por tempo  determinado', '2022-04-04', '0000-00-00', 1, '2022-04-04 15:33:25', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_logDownload`
--

CREATE TABLE `tb_logDownload` (
  `idAnexo` int(11) NOT NULL,
  `docUsuario` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomeUsuario` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mailUsuario` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipoDownload` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `tb_logDownload`
--

INSERT INTO `tb_logDownload` (`idAnexo`, `docUsuario`, `nomeUsuario`, `mailUsuario`, `tipoDownload`) VALUES
(1, '10879120673', 'MAIRO JORGE', 'mnettec.tecnologia@gmail.com', '2'),
(2, '10879120673', 'MARIO JORGE NETO', 'mnettec.tecnologia@gmail.com', '2'),
(3, '10879120673', 'MARIO JORGE NETO', 'mnettec.tecnologia@gmail.com', '2'),
(5, '10879120673', 'MARIO JORGE NETO', 'mnettec.tecnologia@gmail.com', '1'),
(6, '10879120673', 'MARIO JORGE NETO', 'mnettec.tecnologia@gmail.com', '1');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_modalidades`
--

CREATE TABLE `tb_modalidades` (
  `idModalidade` int(11) NOT NULL,
  `nomeModalidade` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `tb_modalidades`
--

INSERT INTO `tb_modalidades` (`idModalidade`, `nomeModalidade`) VALUES
(1, 'DISPENSA POR VALOR'),
(2, 'DISPENSA POR EMERGÊNCIA'),
(3, 'DISPENSA POR INEXIGIBILIDADE'),
(4, 'PREGÃO PRESENCIAL'),
(5, 'PREGÃO ELETRÔNICO'),
(6, 'ADESÃO SRP');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_ordem`
--

CREATE TABLE `tb_ordem` (
  `idOrdem` int(11) NOT NULL,
  `nomeOrdem` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `tb_ordem`
--

INSERT INTO `tb_ordem` (`idOrdem`, `nomeOrdem`) VALUES
(1, 'PRESIDENTE'),
(2, 'VICE-PRESIDENTE'),
(3, '1º SECRETÁRIO (A)'),
(4, '2º SECRETÁRIO (A)'),
(5, 'VEREADOR');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_ouvidoria`
--

CREATE TABLE `tb_ouvidoria` (
  `idOuvidoria` int(11) NOT NULL,
  `razaoOuvidoria` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `documentoOuvidoria` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefoneOuvidoria` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mailOuvidoria` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipoOuvidoria` int(11) NOT NULL,
  `mensagemOuvidoria` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dataOuvidoria` timestamp NOT NULL DEFAULT current_timestamp(),
  `chaveOuvidoria` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `leituraOuvidoria` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `tb_ouvidoria`
--

INSERT INTO `tb_ouvidoria` (`idOuvidoria`, `razaoOuvidoria`, `documentoOuvidoria`, `telefoneOuvidoria`, `mailOuvidoria`, `tipoOuvidoria`, `mensagemOuvidoria`, `dataOuvidoria`, `chaveOuvidoria`, `leituraOuvidoria`) VALUES
(12, '', '', '', '', 2, 'ffffffffff', '2022-05-17 16:22:26', 'CMM051712045462921MG', '0'),
(13, 'Vaudicelia', '07480933622', '31989636597', 'vaudiceliasantosadv@gmail.com', 2, 'Teste ', '2022-05-17 16:23:07', 'CMM051712045870398MG', '0'),
(14, 'Adriana Alves da Silva ', '042.072.926-75', '33988392567', 'alvesdriana@gmail.com', 2, 'Gostaria de fazer uma denúncia a qual vem sendo questionado que é a respeito das informações no portal da transparência que desde dezembro e até hj não aparece a folha de pagamento dos funcionários da Câmara municipal de Materlândia . Estão omitindo informações ? Qual motivo?     \r\nPerante a lei todo o dinheiro público deve ser informado no portal da transparência. Inclusive toda renumeração detalhada  ,incluindo gratificação e vantagens .  Espero que não tenha que novamente informar ao ministério público,essa falta de informação,visto que já fiz essa reclamação.obrigada . Adriana.', '2022-05-28 20:58:44', 'CMM052812015242367MG', '0');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_situacao`
--

CREATE TABLE `tb_situacao` (
  `idSituacao` int(11) NOT NULL,
  `nomeSituacao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `tb_situacao`
--

INSERT INTO `tb_situacao` (`idSituacao`, `nomeSituacao`) VALUES
(1, 'EM ANDAMENTO'),
(2, 'RATIFICADO'),
(3, 'CANCELADO'),
(4, 'DESERTO');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_tipoanexo`
--

CREATE TABLE `tb_tipoanexo` (
  `idTipo` int(11) NOT NULL,
  `nomeTipo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `tb_tipoanexo`
--

INSERT INTO `tb_tipoanexo` (`idTipo`, `nomeTipo`) VALUES
(1, 'EDITAL'),
(2, 'CONTRATO'),
(3, 'ATA'),
(4, 'EMPENHO'),
(5, 'ORDEM DE FORNECIMENTO'),
(6, 'LIQUIDAÇÃO'),
(7, 'PAGAMENTO'),
(8, 'RESCISÃO');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_tipoOuvidoria`
--

CREATE TABLE `tb_tipoOuvidoria` (
  `idTipo` int(11) NOT NULL,
  `nomeTipo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `tb_tipoOuvidoria`
--

INSERT INTO `tb_tipoOuvidoria` (`idTipo`, `nomeTipo`) VALUES
(1, 'SOLICITAÇÃO DE DOCUMENTOS'),
(2, 'DENÚNICAS'),
(3, 'RECLAMAÇÕES'),
(4, 'SUGESTÕES'),
(5, 'OUTROS');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_tipoProcesso`
--

CREATE TABLE `tb_tipoProcesso` (
  `idTipo` int(11) NOT NULL,
  `nomeTipo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `tb_tipoProcesso`
--

INSERT INTO `tb_tipoProcesso` (`idTipo`, `nomeTipo`) VALUES
(1, 'OUVIDORIA'),
(2, 'SOLICITAÇÃO DE DOCUMENTOS');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_tiposdocumentos`
--

CREATE TABLE `tb_tiposdocumentos` (
  `idTipo` int(11) NOT NULL,
  `nomeTipo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `tb_tiposdocumentos`
--

INSERT INTO `tb_tiposdocumentos` (`idTipo`, `nomeTipo`) VALUES
(3, 'PRODUCAO'),
(4, 'OUTROS');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_transparencia`
--

CREATE TABLE `tb_transparencia` (
  `idLancamento` int(11) NOT NULL,
  `nomeDocumento` varchar(100) NOT NULL,
  `arquivoDocumento` varchar(100) NOT NULL,
  `idTipoDocumento` int(11) NOT NULL,
  `dataPostagem` datetime NOT NULL DEFAULT current_timestamp(),
  `dataReferencia` date NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `ativo` char(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `idUsuario` int(11) NOT NULL,
  `nomeUsuario` varchar(20) NOT NULL,
  `emailUsuario` varchar(50) NOT NULL,
  `dataCadastro` datetime NOT NULL DEFAULT current_timestamp(),
  `senhaUsuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`idUsuario`, `nomeUsuario`, `emailUsuario`, `dataCadastro`, `senhaUsuario`) VALUES
(1, 'ADMINISTRADOR', 'camara@materlandia.leg.mg.gov.br', '2020-10-22 19:26:43', 'P@ssw0rd++');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_vereadores`
--

CREATE TABLE `tb_vereadores` (
  `idVereador` int(11) NOT NULL,
  `NomeVereador` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fotoVereador` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ativoVereador` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ordemVereador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `tb_vereadores`
--

INSERT INTO `tb_vereadores` (`idVereador`, `NomeVereador`, `fotoVereador`, `ativoVereador`, `ordemVereador`) VALUES
(1, 'DARLAN CÉSAR MARQUES', '01.jpg', '1', 1),
(2, 'GAUDÊNCIO VENTURA DA CRUZ', '02.jpg', '1', 2),
(3, 'IVANILHA GERALDA DE JESUS', '03.jpg', '1', 3),
(4, 'JOZEMI NUNES', '04.jpg', '1', 4),
(5, 'JOÃO BATISTA NAZÁRIO', '05.jpg', '1', 5),
(6, 'JOSE GUALBERTO CARDOSO PEREIRA', '06.jpg', '1', 5),
(7, 'RENATO CESAR DOS SANTOS', '07.jpg', '1', 5),
(8, 'ROGÉRIO ROSA DOS SANTOS', '08.jpg', '1', 5),
(9, 'VICENTE LÚCIO DE SOUZA', '09.jpg', '1', 5);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_andamentoOuvidoria`
--
ALTER TABLE `tb_andamentoOuvidoria`
  ADD PRIMARY KEY (`idAndamento`),
  ADD KEY `idOuvidoria` (`idOuvidoria`),
  ADD KEY `usuarioAndamento` (`usuarioAndamento`);

--
-- Índices de tabela `tb_anexo_processo`
--
ALTER TABLE `tb_anexo_processo`
  ADD PRIMARY KEY (`idAnexo`),
  ADD KEY `FK_usuarioA` (`idUsuario`),
  ADD KEY `FK_processoanexo` (`idProcesso`),
  ADD KEY `FK_tipoanexo` (`tipoAnexo`);

--
-- Índices de tabela `tb_artigos`
--
ALTER TABLE `tb_artigos`
  ADD PRIMARY KEY (`idArtigo`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Índices de tabela `tb_compras`
--
ALTER TABLE `tb_compras`
  ADD PRIMARY KEY (`idProcesso`),
  ADD KEY `FK_usuarioC` (`idUsuario`),
  ADD KEY `FK_modalidades` (`idModalidade`),
  ADD KEY `FK_sITUCAOPROCESSO` (`situacaoProcesso`);

--
-- Índices de tabela `tb_logDownload`
--
ALTER TABLE `tb_logDownload`
  ADD PRIMARY KEY (`idAnexo`);

--
-- Índices de tabela `tb_modalidades`
--
ALTER TABLE `tb_modalidades`
  ADD PRIMARY KEY (`idModalidade`);

--
-- Índices de tabela `tb_ordem`
--
ALTER TABLE `tb_ordem`
  ADD PRIMARY KEY (`idOrdem`);

--
-- Índices de tabela `tb_ouvidoria`
--
ALTER TABLE `tb_ouvidoria`
  ADD PRIMARY KEY (`idOuvidoria`);

--
-- Índices de tabela `tb_situacao`
--
ALTER TABLE `tb_situacao`
  ADD PRIMARY KEY (`idSituacao`);

--
-- Índices de tabela `tb_tipoanexo`
--
ALTER TABLE `tb_tipoanexo`
  ADD PRIMARY KEY (`idTipo`);

--
-- Índices de tabela `tb_tipoOuvidoria`
--
ALTER TABLE `tb_tipoOuvidoria`
  ADD PRIMARY KEY (`idTipo`);

--
-- Índices de tabela `tb_tipoProcesso`
--
ALTER TABLE `tb_tipoProcesso`
  ADD PRIMARY KEY (`idTipo`);

--
-- Índices de tabela `tb_tiposdocumentos`
--
ALTER TABLE `tb_tiposdocumentos`
  ADD PRIMARY KEY (`idTipo`);

--
-- Índices de tabela `tb_transparencia`
--
ALTER TABLE `tb_transparencia`
  ADD PRIMARY KEY (`idLancamento`),
  ADD KEY `FK_TIPOS` (`idTipoDocumento`),
  ADD KEY `FK_usuariot` (`idUsuario`);

--
-- Índices de tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- Índices de tabela `tb_vereadores`
--
ALTER TABLE `tb_vereadores`
  ADD PRIMARY KEY (`idVereador`),
  ADD KEY `ordemVereador` (`ordemVereador`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_andamentoOuvidoria`
--
ALTER TABLE `tb_andamentoOuvidoria`
  MODIFY `idAndamento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_anexo_processo`
--
ALTER TABLE `tb_anexo_processo`
  MODIFY `idAnexo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tb_artigos`
--
ALTER TABLE `tb_artigos`
  MODIFY `idArtigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tb_compras`
--
ALTER TABLE `tb_compras`
  MODIFY `idProcesso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `tb_logDownload`
--
ALTER TABLE `tb_logDownload`
  MODIFY `idAnexo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tb_modalidades`
--
ALTER TABLE `tb_modalidades`
  MODIFY `idModalidade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tb_ordem`
--
ALTER TABLE `tb_ordem`
  MODIFY `idOrdem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tb_ouvidoria`
--
ALTER TABLE `tb_ouvidoria`
  MODIFY `idOuvidoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `tb_situacao`
--
ALTER TABLE `tb_situacao`
  MODIFY `idSituacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tb_tipoanexo`
--
ALTER TABLE `tb_tipoanexo`
  MODIFY `idTipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `tb_tipoOuvidoria`
--
ALTER TABLE `tb_tipoOuvidoria`
  MODIFY `idTipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tb_tipoProcesso`
--
ALTER TABLE `tb_tipoProcesso`
  MODIFY `idTipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tb_tiposdocumentos`
--
ALTER TABLE `tb_tiposdocumentos`
  MODIFY `idTipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tb_transparencia`
--
ALTER TABLE `tb_transparencia`
  MODIFY `idLancamento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tb_vereadores`
--
ALTER TABLE `tb_vereadores`
  MODIFY `idVereador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tb_andamentoOuvidoria`
--
ALTER TABLE `tb_andamentoOuvidoria`
  ADD CONSTRAINT `tb_andamentoOuvidoria_ibfk_1` FOREIGN KEY (`idOuvidoria`) REFERENCES `tb_ouvidoria` (`idOuvidoria`),
  ADD CONSTRAINT `tb_andamentoOuvidoria_ibfk_2` FOREIGN KEY (`usuarioAndamento`) REFERENCES `tb_usuario` (`idUsuario`);

--
-- Restrições para tabelas `tb_anexo_processo`
--
ALTER TABLE `tb_anexo_processo`
  ADD CONSTRAINT `FK_processoanexo` FOREIGN KEY (`idProcesso`) REFERENCES `tb_compras` (`idProcesso`),
  ADD CONSTRAINT `FK_tipoanexo` FOREIGN KEY (`tipoAnexo`) REFERENCES `tb_tipoanexo` (`idTipo`),
  ADD CONSTRAINT `FK_usuarioA` FOREIGN KEY (`idUsuario`) REFERENCES `tb_usuario` (`idUsuario`);

--
-- Restrições para tabelas `tb_artigos`
--
ALTER TABLE `tb_artigos`
  ADD CONSTRAINT `tb_artigos_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `tb_usuario` (`idUsuario`);

--
-- Restrições para tabelas `tb_compras`
--
ALTER TABLE `tb_compras`
  ADD CONSTRAINT `FK_modalidades` FOREIGN KEY (`idModalidade`) REFERENCES `tb_modalidades` (`idModalidade`),
  ADD CONSTRAINT `FK_sITUCAOPROCESSO` FOREIGN KEY (`situacaoProcesso`) REFERENCES `tb_situacao` (`idSituacao`),
  ADD CONSTRAINT `FK_usuarioC` FOREIGN KEY (`idUsuario`) REFERENCES `tb_usuario` (`idUsuario`);

--
-- Restrições para tabelas `tb_transparencia`
--
ALTER TABLE `tb_transparencia`
  ADD CONSTRAINT `FK_TIPOS` FOREIGN KEY (`idTipoDocumento`) REFERENCES `tb_tiposdocumentos` (`idTipo`),
  ADD CONSTRAINT `FK_usuariot` FOREIGN KEY (`idUsuario`) REFERENCES `tb_usuario` (`idUsuario`);

--
-- Restrições para tabelas `tb_vereadores`
--
ALTER TABLE `tb_vereadores`
  ADD CONSTRAINT `tb_vereadores_ibfk_1` FOREIGN KEY (`ordemVereador`) REFERENCES `tb_ordem` (`idOrdem`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
