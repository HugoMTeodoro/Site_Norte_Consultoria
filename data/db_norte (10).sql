-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2021 at 08:39 PM
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
  `valor` float DEFAULT NULL,
  `observacoes` varchar(3000) DEFAULT NULL,
  `dt_lancamento` datetime DEFAULT NULL,
  `orgao` varchar(200) NOT NULL,
  `codigo_processo` varchar(200) DEFAULT NULL,
  `conSolic` text NOT NULL,
  `conPreco` text NOT NULL,
  `conAut` text NOT NULL,
  `conAutuacao` text NOT NULL,
  `conRat` text NOT NULL,
  `conPub` text NOT NULL,
  `dt_pesquisa` date DEFAULT NULL,
  `dt_abertura` date DEFAULT NULL,
  `dt_autorizacao_empresa` date DEFAULT NULL,
  `dt_homologacao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adesao`
--

INSERT INTO `adesao` (`id_adesao`, `exercicio`, `num_adesao`, `num_inexigibilidade`, `objeto`, `categoria`, `dt_inicio`, `dt_ratificacao`, `dt_portaria`, `dt_solicitacao`, `dt_orcamento`, `dt_solicitacaoo`, `dt_autorizacao`, `dt_solicitacao_empresa`, `verificacao`, `documento`, `dt_confirmacao`, `dt_ata`, `dt_autorizacao_abertura`, `dt_autuacao`, `dt_ata_inexigibilidade`, `dt_parecer`, `dt_publicacao`, `dt_contrato_firmado`, `dt_publicacao_contrato`, `copia_notas`, `valor`, `observacoes`, `dt_lancamento`, `orgao`, `codigo_processo`, `conSolic`, `conPreco`, `conAut`, `conAutuacao`, `conRat`, `conPub`, `dt_pesquisa`, `dt_abertura`, `dt_autorizacao_empresa`, `dt_homologacao`) VALUES
(1, '', 0, 0, '', 'Manutenção', '0000-00-00', '2000-09-19', '0000-00-00', '2000-09-22', '2000-09-22', '2000-09-21', '2000-09-19', '2000-09-20', '', '', '0000-00-00', '0000-00-00', '2000-09-18', '2000-09-17', '2000-09-21', '2000-09-20', '2000-09-30', '2000-09-18', '2000-09-18', '', 0, '', '0000-00-00 00:00:00', 'PMOB', 'adesPMOB___', '', '', '', '', '', '', NULL, NULL, '2000-09-19', '0000-00-00');

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
  `categoria` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aditivo`
--

INSERT INTO `aditivo` (`id_aditivo`, `numero_aditivo`, `prazo_aditivo`, `data_aditivo`, `valor_aditivo`, `tipo_aditivo`, `nome_empresa`, `codigo_processo`, `id_processo`, `categoria`) VALUES
(2, 0, '0000-00-00', '0000-00-00', 500, 'Valor', 'Ferragens', 'dispPMOB_5_6_2021', 20, NULL),
(4, 4, '2001-09-21', '2000-09-21', 50, 'Prazo', 'Havan', 'dispPMOB_5_6_2021', 20, NULL),
(5, 5, '2000-09-22', '2000-09-21', 0, 'Prazo', 'Magazine Luiza', 'dispPMOB_5_6_2021', 20, NULL),
(18, 1, '2001-09-21', '2000-09-21', 1, 'Valor e Prazo', 'Capeta Industrial ', 'dispP.M. SAO JOAO NEPOMUCENO_1_1_2020', 0, NULL),
(19, 0, '0000-00-00', '0000-00-00', 0, 'Prazo', 'Industrial', 'dispP.M. SAO JOAO NEPOMUCENO_1_1_2020', 0, NULL),
(20, 1, '0000-00-00', '0000-00-00', 1, 'Prazo', 'Industrial', 'dispP.M. SAO JOAO NEPOMUCENO_1_1_2020', 0, NULL),
(22, 0, '0000-00-00', '2000-09-21', 1, 'Prazo', '', 'dispP.M. SAO JOAO NEPOMUCENO___', 0, NULL),
(23, 0, '0000-00-00', '0000-00-00', 0, 'Prazo', '', 'dispP.M. SAO JOAO NEPOMUCENO___', 0, NULL),
(24, 2323, '2021-12-31', '2021-12-31', 2.78, 'Valor', 'Vinicera', 'dispP.M. SAO JOAO NEPOMUCENO___2020', 0, NULL),
(25, 1, '0000-00-00', '0000-00-00', 1, 'Prazo', 'Industrial', 'dispPMOB_1_1_2020', 0, NULL);

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
(3, 'Manutenção'),
(2, 'Vinicius');

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
  `observacoes` varchar(3000) DEFAULT NULL,
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
  `dt_sessao` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dispensa`
--

INSERT INTO `dispensa` (`id_dispensa`, `exercicio`, `num_processo`, `num_dispensa`, `inciso`, `objeto`, `categoria`, `data_inicio`, `data_ratificacao`, `data_portaria_comissao`, `data_solicitacao_compras_servicos`, `data_preco_estimativo`, `data_autorizacao_abertura`, `data_autuacao`, `especificacao_objeto`, `enquadramento`, `minuta_contrato`, `data_proposta_favorecido`, `documento_habilitacao`, `data_ata`, `data_parecer_juridico`, `data_contrato_firmado`, `data_publicacao`, `copia_empenho_compras_legais`, `valor_total`, `observacoes`, `data_lancamento`, `orgao`, `codigo_processo`, `conSolic`, `conPreco`, `conAut`, `conAtuacao`, `conRat`, `conPub`, `conPar`, `dt_pesquisa`, `dt_abertura`, `emergencia`, `pesquisa`, `dt_sessao`) VALUES
(92, 2, 0, 0, 'bila3', '', 'Manutenção ', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', NULL, '', '0000-00-00 00:00:00', 'PMOB', 'dispPMOB___2', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dispensa//2', NULL),
(93, 2, 2, 0, 'bila3', '', 'Manutenção ', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', NULL, '', '0000-00-00 00:00:00', 'PMOB', 'dispPMOB_2__2', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dispensa//2', NULL),
(94, 2020, 1, 1, 'bila3', 'aaa', 'Manutenção', '2000-09-21', '2000-09-19', '0000-00-00', '2000-09-22', '2000-09-22', '2000-09-21', '2000-09-20', '', '', '', '0000-00-00', '', '0000-00-00', '2000-09-20', '0000-00-00', '2000-10-20', '', 0, '', '0000-00-00 00:00:00', 'PMOB', 'dispPMOB___', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2000-09-21', NULL, 'Dispensa/1/2020', '2000-09-21'),
(95, 2020, 1, 1, 'bila3', 'aaa', 'Manutenção', '2021-02-21', '2021-09-23', '2021-09-21', '2020-09-21', '2021-09-20', '2021-09-22', '2021-09-21', '', '', '', '2021-09-21', '', '2021-09-21', '2021-09-22', '2021-09-21', '2021-09-24', '', 0, '', '0000-00-00 00:00:00', 'PMOB', 'dispPMOB_1_1_2020', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-09-22', NULL, 'Dispensa/1/2020', '2000-09-21');

-- --------------------------------------------------------

--
-- Table structure for table `inciso`
--

CREATE TABLE `inciso` (
  `id_inciso` int(11) NOT NULL,
  `inciso` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inciso`
--

INSERT INTO `inciso` (`id_inciso`, `inciso`) VALUES
(0, 'bila3');

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
  `observacoes` varchar(300) DEFAULT NULL,
  `dt_lancamento` datetime DEFAULT NULL,
  `orgao` varchar(200) NOT NULL,
  `codigo_processo` varchar(200) DEFAULT NULL,
  `conSolic` text NOT NULL,
  `conPreco` text NOT NULL,
  `conAut` text NOT NULL,
  `conAutuacao` text NOT NULL,
  `conRab` text NOT NULL,
  `conPub` text NOT NULL,
  `dt_pesquisa` date DEFAULT NULL,
  `dt_abertura` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inexigibilidade`
--

INSERT INTO `inexigibilidade` (`id_inexigibilidade`, `exercicio`, `num_processo`, `num_inexigibilidade`, `objeto`, `categoria`, `dt_inicio`, `dt_ratificacao`, `portaria_nomeando`, `dt_solicitacao`, `dt_autorizacao`, `dt_orcamento`, `dt_autuacao`, `especificacao`, `enquadramento`, `minuta`, `dt_aprovacao`, `dt_proposta`, `documentos`, `dt_ata`, `dt_parecer_juridico`, `dt_contrato_firmado`, `dt_publicacao`, `copia_notas`, `valor_total`, `observacoes`, `dt_lancamento`, `orgao`, `codigo_processo`, `conSolic`, `conPreco`, `conAut`, `conAutuacao`, `conRab`, `conPub`, `dt_pesquisa`, `dt_abertura`) VALUES
(1, '1', 1, 1, '1', '-1', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', 0, '', '0000-00-00 00:00:00', '', NULL, '', '', '', '', '', '', NULL, NULL),
(2, '1', 1, 1, '1', 'Manutenção', '2021-12-31', '2021-12-31', '1', '2021-12-31', '2021-12-31', '2021-12-31', '2021-12-31', '1', '1', '1', '2021-12-31', '2021-12-31', '1', '2021-12-31', '2021-12-31', '2021-12-31', '2021-12-31', '1', 1, '1', '2021-12-31 23:59:00', '', NULL, '', '', '', '', '', '', NULL, NULL),
(3, '', 0, 0, '', '-1', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', NULL, '', '0000-00-00 00:00:00', 'PMOB', 'inexPMOB___', '', '', '', '', '', '', NULL, NULL);

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
  `observacoes` varchar(300) DEFAULT NULL,
  `dt_lancamento` datetime DEFAULT NULL,
  `orgao` varchar(200) NOT NULL,
  `codigo_processo` varchar(200) DEFAULT NULL,
  `conSolic` text DEFAULT NULL,
  `conPreco` text DEFAULT NULL,
  `conAut` text DEFAULT NULL,
  `conAutuacao` text DEFAULT NULL,
  `conRat` text DEFAULT NULL,
  `conPub` text DEFAULT NULL,
  `dt_pesquisa` date NOT NULL,
  `dt_emissao` date DEFAULT NULL,
  `dt_ata_julgamento` date DEFAULT NULL,
  `dt_sessao` date NOT NULL,
  `classificados` text DEFAULT NULL,
  `dt_pub_res` date DEFAULT NULL,
  `prazo2` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `modalidade`
--

INSERT INTO `modalidade` (`id_modalidade`, `exercicio`, `num_processo`, `modalidade`, `numero`, `objeto`, `registro`, `categoria`, `dt_edital`, `dt_entrega`, `dt_abertura`, `dt_portaria`, `dt_solicitacao`, `dt_orcamento`, `dt_autorizacao`, `dt_autuacao`, `enquadramento`, `dt_anexos`, `dt_aprovacao`, `minuta`, `dt_publicacao`, `especificacao`, `dt_recibo`, `documentos`, `dt_ata`, `dt_confirmacao`, `prazo`, `dt_parecer_juridico`, `dt_adjudicacao`, `dt_homologacao`, `dt_contrato_firmado`, `dt_publicacao_contrato`, `copia`, `codigo`, `valor_total`, `observacoes`, `dt_lancamento`, `orgao`, `codigo_processo`, `conSolic`, `conPreco`, `conAut`, `conAutuacao`, `conRat`, `conPub`, `dt_pesquisa`, `dt_emissao`, `dt_ata_julgamento`, `dt_sessao`, `classificados`, `dt_pub_res`, `prazo2`) VALUES
(1, '', -1, '-1', 0, '', -1, 'Manutenção', '0000-00-00', '0000-00-00', '2000-09-21', '0000-00-00', '2000-09-22', '2000-09-20', '2000-09-21', '2000-09-20', '', '0000-00-00', '2000-09-22', '', '2000-09-21', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '2000-09-21', '2000-09-24', '2000-09-24', '2000-09-22', '0000-00-00', '', NULL, NULL, '', '0000-00-00 00:00:00', 'PMOB', 'modPMOB___', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', '2000-09-22', '2000-09-20', '2000-09-20', '', '0000-00-00', '0000-00-00');

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
(1, 'P.M. SAO JOAO NEPOMUCENO'),
(3, 'PMOB'),
(4, 'Varginha');

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
('PMOB', 1, 0);

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
  `observacoes` varchar(3000) DEFAULT NULL,
  `dt_lancamento` datetime DEFAULT NULL,
  `orgao` varchar(200) NOT NULL,
  `codigo_processo` varchar(200) DEFAULT NULL,
  `conSolic` text NOT NULL,
  `conPreco` text NOT NULL,
  `conAut` text NOT NULL,
  `conAutuacao` text NOT NULL,
  `conRat` text NOT NULL,
  `conPub` text NOT NULL,
  `dt_pesquisa` date DEFAULT NULL,
  `dt_emissao` date DEFAULT NULL,
  `dt_aprov_minuta` date DEFAULT NULL,
  `dt_sessao` date DEFAULT NULL,
  `dt_parecer` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pregao`
--

INSERT INTO `pregao` (`id_pregao`, `exercicio`, `num_processo`, `tipo`, `numero`, `objeto`, `registro`, `categoria`, `dt_edital`, `dt_abertura`, `dt_nomeacao`, `dt_solicitacao`, `dt_orcamento`, `dt_autorizacao`, `dt_autuacao`, `enquadramento`, `edital`, `dt_aprovacao`, `minuta`, `dt_publicacao`, `especificacao`, `dt_credenciamento`, `proposta_precos`, `dt_ata_abertura`, `documento`, `dt_confirmacao`, `prazo`, `dt_adjudicacao`, `dt_homologacao`, `dt_contrato_firmado`, `dt_publicacao_ata`, `copia_notas`, `codigo`, `valor_total`, `observacoes`, `dt_lancamento`, `orgao`, `codigo_processo`, `conSolic`, `conPreco`, `conAut`, `conAutuacao`, `conRat`, `conPub`, `dt_pesquisa`, `dt_emissao`, `dt_aprov_minuta`, `dt_sessao`, `dt_parecer`) VALUES
(1, '', 0, 'pregao', 0, '', -1, '-1', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', NULL, NULL, '', '0000-00-00 00:00:00', 'PMOB', 'prPMOB___', '', '', '', '', '', '', NULL, NULL, NULL, NULL, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tipo_aditivo`
--

CREATE TABLE `tipo_aditivo` (
  `id_tipo_aditivo` int(11) NOT NULL,
  `prazo` date NOT NULL,
  `valor` float NOT NULL,
  `tipo_aditivo` varchar(100) NOT NULL,
  `data_aditivo` date NOT NULL,
  `codigo_processo` varchar(500) NOT NULL,
  `numero_aditivo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(24, 'adm', 'b09c600fddc573f117449b3723f23d64', 'ADM');

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
-- Dumping data for table `vencedor`
--

INSERT INTO `vencedor` (`id_vencedor`, `nome_empresa`, `valor`, `id_processo`, `codigo_processo`) VALUES
(2, 'Industriauuuu', 10, 17, 'dispP.M. SAO JOAO NEPOMUCENO_2_3_2020'),
(3, 'Industriau ferragens', 15000, 17, 'dispP.M. SAO JOAO NEPOMUCENO_2_3_2020'),
(9, 'Industrial ferragens', 2000.55, 18, 'dispPMOB_1_2_2020'),
(10, 'Teste', 100, 19, 'dispPMOB_2_2_2020'),
(11, 'Industrial', 25000, 19, 'dispPMOB_2_2_2020'),
(13, 'Industrial', 2000, 20, 'dispPMOB_5_6_2021'),
(14, 'Ferragens', 1000, 20, 'dispPMOB_5_6_2021'),
(16, 'Havan', 500, 20, 'dispPMOB_5_6_2021'),
(17, 'Industrial', 0, 20, 'dispPMOB_5_6_2021'),
(18, 'Magazine Luiza', 50, 20, 'dispPMOB_5_6_2021'),
(27, 'Industrial', 2000, 0, 'dispP.M. SAO JOAO NEPOMUCENO___2021'),
(46, 'Capeta Industrial ', 2000, 0, 'dispP.M. SAO JOAO NEPOMUCENO_1_1_2020'),
(47, 'Industrial', 1, 0, 'dispP.M. SAO JOAO NEPOMUCENO_1_1_2020'),
(48, 'Industrial', 1, 0, 'dispP.M. SAO JOAO NEPOMUCENO_1_1_2020'),
(57, 'Industrial', 1, 0, 'dispP.M. SAO JOAO NEPOMUCENO___'),
(58, '', 0, 0, 'dispP.M. SAO JOAO NEPOMUCENO___'),
(59, '', 0, 0, 'dispP.M. SAO JOAO NEPOMUCENO___'),
(60, 'Vinicera', 1200000, 0, 'dispP.M. SAO JOAO NEPOMUCENO___2020'),
(61, '', 0, 0, ''),
(62, 'Industrial', 1, 0, 'dispPMOB_1_1_2020');

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
-- Indexes for table `tipo_aditivo`
--
ALTER TABLE `tipo_aditivo`
  ADD PRIMARY KEY (`id_tipo_aditivo`);

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
  MODIFY `id_adesao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `aditivo`
--
ALTER TABLE `aditivo`
  MODIFY `id_aditivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `analista`
--
ALTER TABLE `analista`
  MODIFY `id_analista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dispensa`
--
ALTER TABLE `dispensa`
  MODIFY `id_dispensa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `inexigibilidade`
--
ALTER TABLE `inexigibilidade`
  MODIFY `id_inexigibilidade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `modalidade`
--
ALTER TABLE `modalidade`
  MODIFY `id_modalidade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orgao`
--
ALTER TABLE `orgao`
  MODIFY `id_orgao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orgao_atual`
--
ALTER TABLE `orgao_atual`
  MODIFY `id_orgao_atual` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pregao`
--
ALTER TABLE `pregao`
  MODIFY `id_pregao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tipo_aditivo`
--
ALTER TABLE `tipo_aditivo`
  MODIFY `id_tipo_aditivo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tipo_modalidade`
--
ALTER TABLE `tipo_modalidade`
  MODIFY `id_modalidade` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `vencedor`
--
ALTER TABLE `vencedor`
  MODIFY `id_vencedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
