-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2021 at 08:48 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_norte`
--

-- --------------------------------------------------------

--
-- Table structure for table `adesao`
--

CREATE TABLE `adesao` (
  `id_adesao` int(11) NOT NULL,
  `exercicio` varchar(3000) NOT NULL,
  `num_adesao` int(11) NOT NULL,
  `num_inexigibilidade` int(11) NOT NULL,
  `objeto` varchar(3000) NOT NULL,
  `categoria` varchar(200) NOT NULL,
  `dt_inicio` date DEFAULT NULL,
  `dt_ratificacao` date DEFAULT NULL,
  `dt_portaria` date DEFAULT NULL,
  `dt_solicitacao` date DEFAULT NULL,
  `dt_orcamento` date DEFAULT NULL,
  `dt_solicitacaoo` date DEFAULT NULL,
  `dt_autorizacao` date DEFAULT NULL,
  `dt_solicitacao_empresa` date DEFAULT NULL,
  `verificacao` text DEFAULT NULL,
  `documento` text DEFAULT NULL,
  `dt_confirmacao` date DEFAULT NULL,
  `dt_ata` date DEFAULT NULL,
  `dt_autorizacao_abertura` date DEFAULT NULL,
  `dt_autuacao` date DEFAULT NULL,
  `dt_ata_inexigibilidade` date DEFAULT NULL,
  `dt_parecer` date DEFAULT NULL,
  `dt_publicacao` date DEFAULT NULL,
  `dt_contrato_firmado` date DEFAULT NULL,
  `dt_publicacao_contrato` date DEFAULT NULL,
  `copia_notas` varchar(3000) DEFAULT NULL,
  `valor_total` float DEFAULT NULL,
  `observacoes` text DEFAULT NULL,
  `dt_lancamento` datetime DEFAULT NULL,
  `orgao` varchar(200) NOT NULL,
  `codigo_processo` varchar(200) DEFAULT NULL,
  `conSolic` text NOT NULL,
  `conPreco` text NOT NULL,
  `conSolicO` text DEFAULT NULL,
  `conAtori` text DEFAULT NULL,
  `conSolE` text DEFAULT NULL,
  `conAut` text DEFAULT NULL,
  `conAuto` text DEFAULT NULL,
  `conAutuacao` text DEFAULT NULL,
  `conParec` text DEFAULT NULL,
  `conRat` text DEFAULT NULL,
  `conPub` text DEFAULT NULL,
  `conFir` text DEFAULT NULL,
  `dt_pesquisa` date DEFAULT NULL,
  `dt_abertura` date DEFAULT NULL,
  `dt_autorizacao_empresa` date DEFAULT NULL,
  `dt_homologacao` date NOT NULL,
  `conAb` text DEFAULT NULL,
  `apostilamento` text DEFAULT NULL,
  `pesquisa` text DEFAULT NULL,
  `porcentagem` float DEFAULT NULL,
  `valor_aditivo` float DEFAULT NULL,
  `conAd` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adesao`
--

INSERT INTO `adesao` (`id_adesao`, `exercicio`, `num_adesao`, `num_inexigibilidade`, `objeto`, `categoria`, `dt_inicio`, `dt_ratificacao`, `dt_portaria`, `dt_solicitacao`, `dt_orcamento`, `dt_solicitacaoo`, `dt_autorizacao`, `dt_solicitacao_empresa`, `verificacao`, `documento`, `dt_confirmacao`, `dt_ata`, `dt_autorizacao_abertura`, `dt_autuacao`, `dt_ata_inexigibilidade`, `dt_parecer`, `dt_publicacao`, `dt_contrato_firmado`, `dt_publicacao_contrato`, `copia_notas`, `valor_total`, `observacoes`, `dt_lancamento`, `orgao`, `codigo_processo`, `conSolic`, `conPreco`, `conSolicO`, `conAtori`, `conSolE`, `conAut`, `conAuto`, `conAutuacao`, `conParec`, `conRat`, `conPub`, `conFir`, `dt_pesquisa`, `dt_abertura`, `dt_autorizacao_empresa`, `dt_homologacao`, `conAb`, `apostilamento`, `pesquisa`, `porcentagem`, `valor_aditivo`, `conAd`) VALUES
(1, '', 0, 0, '', '-1', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', NULL, '', '2021-05-26 10:19:25', 'P. M. Ouro Branco', 'adesP. M. Ouro Branco___', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', NULL, '', 'Adesão//', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `aditivo`
--

CREATE TABLE `aditivo` (
  `id_aditivo` int(11) NOT NULL,
  `numero_aditivo` int(11) DEFAULT NULL,
  `prazo_aditivo` date DEFAULT NULL,
  `data_aditivo` date DEFAULT NULL,
  `valor_aditivo` float DEFAULT NULL,
  `tipo_aditivo` varchar(200) NOT NULL,
  `nome_empresa` varchar(1000) NOT NULL,
  `codigo_processo` varchar(1000) NOT NULL,
  `id_processo` int(11) NOT NULL,
  `categoria` varchar(200) DEFAULT NULL,
  `orgao` varchar(200) DEFAULT NULL,
  `exercicio` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `analista`
--

CREATE TABLE `analista` (
  `id_analista` int(11) NOT NULL,
  `nome_analista` varchar(500) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `analista`
--

INSERT INTO `analista` (`id_analista`, `nome_analista`, `id_usuario`) VALUES
(6, 'ADM', 24);

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `categoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `categoria`) VALUES
(1, 'Obras e serviços de engenharia');

-- --------------------------------------------------------

--
-- Table structure for table `dispensa`
--

CREATE TABLE `dispensa` (
  `id_dispensa` int(11) NOT NULL,
  `exercicio` int(11) DEFAULT NULL,
  `num_processo` int(11) DEFAULT NULL,
  `num_dispensa` int(11) DEFAULT NULL,
  `inciso` varchar(200) DEFAULT NULL,
  `objeto` varchar(3000) DEFAULT NULL,
  `categoria` varchar(200) DEFAULT NULL,
  `data_inicio` date DEFAULT NULL,
  `data_ratificacao` date DEFAULT NULL,
  `data_portaria_comissao` date DEFAULT NULL,
  `data_solicitacao_compras_servicos` date DEFAULT NULL,
  `data_preco_estimativo` date DEFAULT NULL,
  `data_autorizacao_abertura` date DEFAULT NULL,
  `data_autuacao` date DEFAULT NULL,
  `especificacao_objeto` varchar(3000) DEFAULT NULL,
  `enquadramento` varchar(3000) DEFAULT NULL,
  `minuta_contrato` varchar(3000) DEFAULT NULL,
  `data_proposta_favorecido` date DEFAULT NULL,
  `documento_habilitacao` varchar(3000) DEFAULT NULL,
  `data_ata` date DEFAULT NULL,
  `data_parecer_juridico` date DEFAULT NULL,
  `data_contrato_firmado` date DEFAULT NULL,
  `data_publicacao` date DEFAULT NULL,
  `copia_empenho_compras_legais` varchar(3000) DEFAULT NULL,
  `valor_total` float DEFAULT NULL,
  `observacoes` text CHARACTER SET utf8mb4 DEFAULT NULL,
  `data_lancamento` datetime DEFAULT NULL,
  `orgao` varchar(200) DEFAULT NULL,
  `codigo_processo` varchar(150) DEFAULT NULL,
  `conSolic` text NOT NULL,
  `conPreco` text DEFAULT NULL,
  `conAut` text DEFAULT NULL,
  `conAtuacao` text DEFAULT NULL,
  `conRat` text DEFAULT NULL,
  `conPub` text DEFAULT NULL,
  `conPar` text DEFAULT NULL,
  `dt_pesquisa` date DEFAULT NULL,
  `dt_abertura` date DEFAULT NULL,
  `emergencia` varchar(3) DEFAULT NULL,
  `pesquisa` text DEFAULT NULL,
  `porcentagem` float DEFAULT NULL,
  `valor_aditivo` float DEFAULT NULL,
  `conAd` text DEFAULT NULL,
  `dt_sessao` date DEFAULT NULL,
  `conAb` text DEFAULT NULL,
  `apostilamento` text DEFAULT NULL,
  `judicial` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `inciso`
--

CREATE TABLE `inciso` (
  `id_inciso` int(11) NOT NULL,
  `inciso` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `inexigibilidade`
--

CREATE TABLE `inexigibilidade` (
  `id_inexigibilidade` int(11) NOT NULL,
  `exercicio` varchar(200) NOT NULL,
  `num_processo` int(11) NOT NULL,
  `num_inexigibilidade` int(11) NOT NULL,
  `objeto` varchar(3000) NOT NULL,
  `categoria` varchar(200) NOT NULL,
  `dt_inicio` date DEFAULT NULL,
  `dt_ratificacao` date DEFAULT NULL,
  `portaria_nomeando` varchar(200) DEFAULT NULL,
  `dt_solicitacao` date DEFAULT NULL,
  `dt_autorizacao` date NOT NULL,
  `dt_orcamento` date DEFAULT NULL,
  `dt_autuacao` date DEFAULT NULL,
  `especificacao` varchar(300) DEFAULT NULL,
  `enquadramento` varchar(300) DEFAULT NULL,
  `minuta` varchar(300) DEFAULT NULL,
  `dt_aprovacao` date DEFAULT NULL,
  `dt_proposta` date DEFAULT NULL,
  `documentos` varchar(50) DEFAULT NULL,
  `dt_ata` date DEFAULT NULL,
  `dt_parecer_juridico` date DEFAULT NULL,
  `dt_contrato_firmado` date DEFAULT NULL,
  `dt_publicacao` date DEFAULT NULL,
  `copia_notas` varchar(300) DEFAULT NULL,
  `valor_total` float DEFAULT NULL,
  `observacoes` text DEFAULT NULL,
  `dt_lancamento` datetime DEFAULT NULL,
  `orgao` varchar(200) NOT NULL,
  `codigo_processo` varchar(200) DEFAULT NULL,
  `conSolic` text NOT NULL,
  `conPreco` text NOT NULL,
  `conAut` text NOT NULL,
  `conAtuacao` text NOT NULL,
  `conRat` text NOT NULL,
  `conPub` text NOT NULL,
  `dt_pesquisa` date DEFAULT NULL,
  `dt_abertura` date DEFAULT NULL,
  `dt_sessao` date DEFAULT NULL,
  `conAb` text DEFAULT NULL,
  `apostilamento` text DEFAULT NULL,
  `pesquisa` text DEFAULT NULL,
  `porcentagem` float DEFAULT NULL,
  `valor_aditivo` float DEFAULT NULL,
  `conAd` text DEFAULT NULL,
  `conPar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `modalidade`
--

CREATE TABLE `modalidade` (
  `id_modalidade` int(11) NOT NULL,
  `exercicio` varchar(3000) DEFAULT NULL,
  `num_processo` int(11) DEFAULT NULL,
  `modalidade` varchar(100) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `objeto` varchar(3000) DEFAULT NULL,
  `registro` int(11) DEFAULT NULL,
  `categoria` varchar(100) DEFAULT NULL,
  `dt_edital` date DEFAULT NULL,
  `dt_entrega` date DEFAULT NULL,
  `dt_abertura` date DEFAULT NULL,
  `dt_portaria` date DEFAULT NULL,
  `dt_solicitacao` date DEFAULT NULL,
  `dt_orcamento` date DEFAULT NULL,
  `dt_autorizacao` date DEFAULT NULL,
  `dt_autuacao` date DEFAULT NULL,
  `enquadramento` varchar(3000) DEFAULT NULL,
  `dt_anexos` date DEFAULT NULL,
  `dt_aprovacao` date DEFAULT NULL,
  `minuta` varchar(3000) DEFAULT NULL,
  `dt_publicacao` date DEFAULT NULL,
  `especificacao` varchar(3000) DEFAULT NULL,
  `dt_recibo` date DEFAULT NULL,
  `documentos` varchar(50) DEFAULT NULL,
  `dt_ata` date DEFAULT NULL,
  `dt_confirmacao` date DEFAULT NULL,
  `prazo` varchar(50) DEFAULT NULL,
  `dt_parecer_juridico` date DEFAULT NULL,
  `dt_adjudicacao` date DEFAULT NULL,
  `dt_homologacao` date DEFAULT NULL,
  `dt_contrato_firmado` date DEFAULT NULL,
  `dt_publicacao_contrato` date DEFAULT NULL,
  `copia` varchar(100) DEFAULT NULL,
  `codigo` varchar(50) DEFAULT NULL,
  `valor_total` float DEFAULT NULL,
  `observacoes` text DEFAULT NULL,
  `dt_lancamento` datetime DEFAULT NULL,
  `orgao` varchar(200) NOT NULL,
  `codigo_processo` varchar(200) DEFAULT NULL,
  `dt_pesquisa` date NOT NULL,
  `dt_emissao` date DEFAULT NULL,
  `dt_ata_julgamento` date DEFAULT NULL,
  `dt_sessao` date NOT NULL,
  `classificados` text DEFAULT NULL,
  `dt_pub_res` date DEFAULT NULL,
  `prazo2` date DEFAULT NULL,
  `conSolic` text DEFAULT NULL,
  `conPreco` text DEFAULT NULL,
  `conAut` text DEFAULT NULL,
  `conAtuacao` text DEFAULT NULL,
  `conAprov` text DEFAULT NULL,
  `conPub` text DEFAULT NULL,
  `conAta` text DEFAULT NULL,
  `conPar` text DEFAULT NULL,
  `conFirm` text DEFAULT NULL,
  `apostilamento` text DEFAULT NULL,
  `pesquisa` text DEFAULT NULL,
  `porcentagem` float DEFAULT NULL,
  `valor_aditivo` float DEFAULT NULL,
  `conAd` text DEFAULT NULL,
  `conAb` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orgao`
--

CREATE TABLE `orgao` (
  `id_orgao` int(11) NOT NULL,
  `nome_orgao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orgao`
--

INSERT INTO `orgao` (`id_orgao`, `nome_orgao`) VALUES
(2, 'P. M. Ouro Branco');

-- --------------------------------------------------------

--
-- Table structure for table `orgao_atual`
--

CREATE TABLE `orgao_atual` (
  `nome_orgao_atual` varchar(50) NOT NULL,
  `id_orgao_atual` int(11) NOT NULL,
  `exercicio_atual` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orgao_atual`
--

INSERT INTO `orgao_atual` (`nome_orgao_atual`, `id_orgao_atual`, `exercicio_atual`) VALUES
('P. M. Ouro Branco', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pregao`
--

CREATE TABLE `pregao` (
  `id_pregao` int(11) NOT NULL,
  `exercicio` varchar(3000) NOT NULL,
  `num_processo` int(11) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `numero` int(11) NOT NULL,
  `objeto` varchar(3000) NOT NULL,
  `registro` tinyint(1) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `dt_edital` date NOT NULL,
  `dt_abertura` date DEFAULT NULL,
  `dt_nomeacao` date DEFAULT NULL,
  `dt_solicitacao` date DEFAULT NULL,
  `dt_orcamento` date DEFAULT NULL,
  `dt_autorizacao` date DEFAULT NULL,
  `dt_autuacao` date DEFAULT NULL,
  `enquadramento` varchar(300) DEFAULT NULL,
  `edital` varchar(300) DEFAULT NULL,
  `dt_aprovacao` date DEFAULT NULL,
  `minuta` varchar(300) DEFAULT NULL,
  `dt_publicacao` date DEFAULT NULL,
  `especificacao` varchar(300) DEFAULT NULL,
  `dt_credenciamento` date DEFAULT NULL,
  `proposta_precos` varchar(200) DEFAULT NULL,
  `dt_ata_abertura` date DEFAULT NULL,
  `documento` varchar(100) DEFAULT NULL,
  `dt_confirmacao` date DEFAULT NULL,
  `prazo` varchar(300) DEFAULT NULL,
  `dt_adjudicacao` date DEFAULT NULL,
  `dt_homologacao` date DEFAULT NULL,
  `dt_contrato_firmado` date DEFAULT NULL,
  `dt_publicacao_ata` date DEFAULT NULL,
  `copia_notas` varchar(3000) DEFAULT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `valor_total` float DEFAULT NULL,
  `observacoes` text DEFAULT NULL,
  `dt_lancamento` datetime DEFAULT NULL,
  `orgao` varchar(200) NOT NULL,
  `codigo_processo` varchar(200) DEFAULT NULL,
  `dt_pesquisa` date DEFAULT NULL,
  `dt_emissao` date DEFAULT NULL,
  `dt_aprov_minuta` date DEFAULT NULL,
  `dt_sessao` date DEFAULT NULL,
  `dt_parecer` date DEFAULT NULL,
  `conSolic` text DEFAULT NULL,
  `conPreco` text DEFAULT NULL,
  `conAut` text DEFAULT NULL,
  `conAtuacao` text DEFAULT NULL,
  `conAprov` text DEFAULT NULL,
  `conPub` text DEFAULT NULL,
  `conCred` text DEFAULT NULL,
  `conAta` text DEFAULT NULL,
  `conPar` text DEFAULT NULL,
  `conHomo` text DEFAULT NULL,
  `conFirm` text DEFAULT NULL,
  `apostilamento` text DEFAULT NULL,
  `pesquisa` text DEFAULT NULL,
  `porcentagem` float DEFAULT NULL,
  `valor_aditivo` float DEFAULT NULL,
  `conAd` text DEFAULT NULL,
  `conAb` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tipo_modalidade`
--

CREATE TABLE `tipo_modalidade` (
  `id_modalidade` int(11) NOT NULL,
  `modalidade` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `login` varchar(30) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `nome` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `login`, `senha`, `nome`) VALUES
(24, 'adm', 'b09c600fddc573f117449b3723f23d64', 'ADM'),
(25, 'hugo', 'f1f58e8c06b2a61ce13e0c0aa9473a72', 'Hugo');

-- --------------------------------------------------------

--
-- Table structure for table `vencedor`
--

CREATE TABLE `vencedor` (
  `id_vencedor` int(11) NOT NULL,
  `nome_empresa` varchar(250) DEFAULT NULL,
  `valor` float DEFAULT NULL,
  `id_processo` int(11) NOT NULL,
  `codigo_processo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adesao`
--
ALTER TABLE `adesao`
  ADD PRIMARY KEY (`id_adesao`),
  ADD UNIQUE KEY `codigo_processo` (`codigo_processo`);

--
-- Indexes for table `aditivo`
--
ALTER TABLE `aditivo`
  ADD PRIMARY KEY (`id_aditivo`);

--
-- Indexes for table `analista`
--
ALTER TABLE `analista`
  ADD PRIMARY KEY (`id_analista`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`),
  ADD UNIQUE KEY `categoria` (`categoria`);

--
-- Indexes for table `dispensa`
--
ALTER TABLE `dispensa`
  ADD PRIMARY KEY (`id_dispensa`),
  ADD UNIQUE KEY `codigo_disp` (`codigo_processo`),
  ADD KEY `codigo_processo` (`codigo_processo`);

--
-- Indexes for table `inciso`
--
ALTER TABLE `inciso`
  ADD PRIMARY KEY (`id_inciso`);

--
-- Indexes for table `inexigibilidade`
--
ALTER TABLE `inexigibilidade`
  ADD PRIMARY KEY (`id_inexigibilidade`),
  ADD UNIQUE KEY `codigo_processo` (`codigo_processo`);

--
-- Indexes for table `modalidade`
--
ALTER TABLE `modalidade`
  ADD PRIMARY KEY (`id_modalidade`);

--
-- Indexes for table `orgao`
--
ALTER TABLE `orgao`
  ADD PRIMARY KEY (`id_orgao`);

--
-- Indexes for table `orgao_atual`
--
ALTER TABLE `orgao_atual`
  ADD PRIMARY KEY (`id_orgao_atual`);

--
-- Indexes for table `pregao`
--
ALTER TABLE `pregao`
  ADD PRIMARY KEY (`id_pregao`),
  ADD UNIQUE KEY `codigo_processo` (`codigo_processo`);

--
-- Indexes for table `tipo_modalidade`
--
ALTER TABLE `tipo_modalidade`
  ADD PRIMARY KEY (`id_modalidade`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `login` (`login`);

--
-- Indexes for table `vencedor`
--
ALTER TABLE `vencedor`
  ADD PRIMARY KEY (`id_vencedor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adesao`
--
ALTER TABLE `adesao`
  MODIFY `id_adesao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `aditivo`
--
ALTER TABLE `aditivo`
  MODIFY `id_aditivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `analista`
--
ALTER TABLE `analista`
  MODIFY `id_analista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dispensa`
--
ALTER TABLE `dispensa`
  MODIFY `id_dispensa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `inexigibilidade`
--
ALTER TABLE `inexigibilidade`
  MODIFY `id_inexigibilidade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `modalidade`
--
ALTER TABLE `modalidade`
  MODIFY `id_modalidade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orgao`
--
ALTER TABLE `orgao`
  MODIFY `id_orgao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orgao_atual`
--
ALTER TABLE `orgao_atual`
  MODIFY `id_orgao_atual` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pregao`
--
ALTER TABLE `pregao`
  MODIFY `id_pregao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tipo_modalidade`
--
ALTER TABLE `tipo_modalidade`
  MODIFY `id_modalidade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `vencedor`
--
ALTER TABLE `vencedor`
  MODIFY `id_vencedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
