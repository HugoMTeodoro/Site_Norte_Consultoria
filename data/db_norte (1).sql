-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Maio-2021 às 03:12
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_norte`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adesao`
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
  `codigo` varchar(50) DEFAULT NULL,
  `valor` float DEFAULT NULL,
  `observacoes` varchar(3000) DEFAULT NULL,
  `dt_lancamento` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aditivo`
--

CREATE TABLE `aditivo` (
  `id_aditivo` int(11) NOT NULL,
  `numero_aditivo` int(11) DEFAULT NULL,
  `prazo_aditivo` date DEFAULT NULL,
  `data_aditivo` date DEFAULT NULL,
  `valor_aditivo` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `analista`
--

CREATE TABLE `analista` (
  `id_analista` int(11) NOT NULL,
  `nome_analista` varchar(500) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `analista`
--

INSERT INTO `analista` (`id_analista`, `nome_analista`, `id_usuario`) VALUES
(4, 'Leonardo Dias', 19);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `categoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `categoria`) VALUES
(3, 'Manutenção'),
(2, 'Vinicius');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dispensa`
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
  `orgao` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `dispensa`
--

INSERT INTO `dispensa` (`id_dispensa`, `exercicio`, `num_processo`, `num_dispensa`, `inciso`, `objeto`, `categoria`, `data_inicio`, `data_ratificacao`, `data_portaria_comissao`, `data_solicitacao_compras_servicos`, `data_preco_estimativo`, `data_autorizacao_abertura`, `data_autuacao`, `especificacao_objeto`, `enquadramento`, `minuta_contrato`, `data_proposta_favorecido`, `documento_habilitacao`, `data_ata`, `data_parecer_juridico`, `data_contrato_firmado`, `data_publicacao`, `copia_empenho_compras_legais`, `valor_total`, `observacoes`, `data_lancamento`, `orgao`) VALUES
(1, 12345, 0, 0, 'bila3', '', 'Manutenção', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', 0, '', '0000-00-00 00:00:00', NULL),
(2, 2020, 1, 1, 'bila3', 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.', '0', '2021-05-09', '2021-05-09', '2021-05-09', '2021-06-09', '2021-05-09', '2021-05-09', '2021-02-09', 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.', 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.', 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.', '2000-09-21', 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.', '2000-09-21', '2000-09-21', '2000-09-21', '2000-09-21', 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.', NULL, 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.', '2018-09-21 03:06:00', NULL),
(3, 0, 0, 0, '-1', '', '0', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', NULL, '', '2021-05-10 11:07:00', NULL),
(4, 0, 0, 0, '-1', '', 'Manutenção ', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', NULL, '', '2021-05-10 11:18:00', NULL),
(5, 0, 0, 0, '-1', '', 'Manutenção ', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', NULL, '', '2021-05-10 11:19:00', NULL),
(6, 0, 0, 0, 'Nenhum', '', 'Vinicius ', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', NULL, '', '2021-05-10 11:19:00', NULL),
(7, 0, 0, 0, 'bila3', '', 'Manutenção ', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', NULL, '', '2021-05-10 11:20:00', NULL),
(8, 0, 0, 0, 'bila3', '', 'Manutenção ', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', NULL, '', '2021-05-10 15:34:00', 'maximo'),
(9, 0, 0, 0, 'bila3', '', 'Manutenção ', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', NULL, '', '2021-05-10 16:41:00', 'Varginha'),
(10, 0, 0, 0, 'bila3', '', 'Manutenção ', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', NULL, '', '2021-05-10 16:41:00', 'Varginha'),
(11, 0, 0, 0, 'bila3', '', 'Manutenção ', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', NULL, '', '2021-05-10 16:42:00', 'Varginha');

-- --------------------------------------------------------

--
-- Estrutura da tabela `inciso`
--

CREATE TABLE `inciso` (
  `id_inciso` int(11) NOT NULL,
  `inciso` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `inciso`
--

INSERT INTO `inciso` (`id_inciso`, `inciso`) VALUES
(0, 'bila3');

-- --------------------------------------------------------

--
-- Estrutura da tabela `inexigibilidade`
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
  `dt_orcamento` date DEFAULT NULL,
  `dt_autorizacao` date NOT NULL,
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
  `codigo` varchar(50) DEFAULT NULL,
  `valor_total` float DEFAULT NULL,
  `observacoes` varchar(300) DEFAULT NULL,
  `dt_lancamento` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `inexigibilidade`
--

INSERT INTO `inexigibilidade` (`id_inexigibilidade`, `exercicio`, `num_processo`, `num_inexigibilidade`, `objeto`, `categoria`, `dt_inicio`, `dt_ratificacao`, `portaria_nomeando`, `dt_solicitacao`, `dt_orcamento`, `dt_autorizacao`, `dt_autuacao`, `especificacao`, `enquadramento`, `minuta`, `dt_aprovacao`, `dt_proposta`, `documentos`, `dt_ata`, `dt_parecer_juridico`, `dt_contrato_firmado`, `dt_publicacao`, `copia_notas`, `codigo`, `valor_total`, `observacoes`, `dt_lancamento`) VALUES
(1, '123123', 123123, 123, '123', 'Manutenção', '2021-12-12', '2021-12-31', '123', '2021-12-31', '2021-12-31', '2021-12-31', '2021-12-31', '123', '123', '123', '2021-12-31', '2021-12-01', '123', '2021-12-31', '2021-12-31', '2021-12-31', '2021-12-31', '123', '123', 123, '123', '2021-12-31 23:59:00'),
(2, '1', 1, 1, '1', 'Manutenção', '2021-12-31', '2021-12-31', '1', '2021-12-31', '2021-12-31', '2021-12-31', '2021-12-31', '1', '1', '1', '2021-12-31', '2021-12-31', '1', '2021-12-31', '2021-12-31', '2021-12-31', '2021-12-31', '1', '1', 1, '1', '2021-12-31 23:59:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `modalidade`
--

CREATE TABLE `modalidade` (
  `id_modalidade` int(11) NOT NULL,
  `exercicio` varchar(3000) NOT NULL,
  `num_processo` int(11) NOT NULL,
  `modalidade` varchar(100) NOT NULL,
  `numero` int(11) NOT NULL,
  `objeto` varchar(3000) NOT NULL,
  `registro` varchar(50) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `dt_edital` date NOT NULL,
  `dt_entrega` date NOT NULL,
  `dt_abertura` datetime NOT NULL,
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
  `dt_ata_julgamento` date NOT NULL,
  `classificados` varchar(100) NOT NULL,
  `dt_pub_resultado` date NOT NULL,
  `dt_parecer_juridico` date DEFAULT NULL,
  `dt_adjudicacao` date DEFAULT NULL,
  `dt_homologacao` date DEFAULT NULL,
  `dt_contrato_firmado` date DEFAULT NULL,
  `dt_publicacao_contrato` date DEFAULT NULL,
  `copia` varchar(100) DEFAULT NULL,
  `codigo` varchar(50) DEFAULT NULL,
  `valor_total` float DEFAULT NULL,
  `observacoes` varchar(300) DEFAULT NULL,
  `dt_lancamento` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `modalidade`
--

INSERT INTO `modalidade` (`id_modalidade`, `exercicio`, `num_processo`, `modalidade`, `numero`, `objeto`, `registro`, `categoria`, `dt_edital`, `dt_entrega`, `dt_abertura`, `dt_portaria`, `dt_solicitacao`, `dt_orcamento`, `dt_autorizacao`, `dt_autuacao`, `enquadramento`, `dt_anexos`, `dt_aprovacao`, `minuta`, `dt_publicacao`, `especificacao`, `dt_recibo`, `documentos`, `dt_ata`, `dt_confirmacao`, `prazo`, `dt_ata_julgamento`, `classificados`, `dt_pub_resultado`, `dt_parecer_juridico`, `dt_adjudicacao`, `dt_homologacao`, `dt_contrato_firmado`, `dt_publicacao_contrato`, `copia`, `codigo`, `valor_total`, `observacoes`, `dt_lancamento`) VALUES
(1, '1', 0, 'Vinas', 1, '1', 'Erick', '', '2021-12-31', '2021-12-31', '0000-00-00 00:00:00', '2021-12-31', '2021-12-31', '2021-12-31', '0000-00-00', '0000-00-00', '1', '2021-12-31', '2021-12-31', '2021-12-31', '2021-12-31', '1', '2021-12-31', '1', '0000-00-00', '2021-12-31', '2021-12-31', '2021-12-31', '1', '2021-12-31', '0000-00-00', '2021-12-31', '2021-12-31', '0000-00-00', '0000-00-00', '1', '1', 1, '1', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `orgao`
--

CREATE TABLE `orgao` (
  `id_orgao` int(11) NOT NULL,
  `nome_orgao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `orgao`
--

INSERT INTO `orgao` (`id_orgao`, `nome_orgao`) VALUES
(1, 'P.M. SAO JOAO NEPOMUCENO'),
(3, 'PMOB'),
(4, 'Varginha');

-- --------------------------------------------------------

--
-- Estrutura da tabela `orgao_atual`
--

CREATE TABLE `orgao_atual` (
  `nome_orgao_atual` varchar(50) NOT NULL,
  `id_orgao_atual` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `orgao_atual`
--

INSERT INTO `orgao_atual` (`nome_orgao_atual`, `id_orgao_atual`) VALUES
('P.M. SAO JOAO NEPOMUCENO', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pregao`
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
  `dt_abertura` datetime DEFAULT NULL,
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
  `dt_parecer` date NOT NULL,
  `dt_homologacao` date DEFAULT NULL,
  `dt_contrato_firmado` date DEFAULT NULL,
  `dt_publicacao_ata` date DEFAULT NULL,
  `copia_notas` varchar(3000) DEFAULT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `valor_total` float DEFAULT NULL,
  `observacoes` varchar(3000) DEFAULT NULL,
  `dt_lancamento` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pregao`
--

INSERT INTO `pregao` (`id_pregao`, `exercicio`, `num_processo`, `tipo`, `numero`, `objeto`, `registro`, `categoria`, `dt_edital`, `dt_abertura`, `dt_nomeacao`, `dt_solicitacao`, `dt_orcamento`, `dt_autorizacao`, `dt_autuacao`, `enquadramento`, `edital`, `dt_aprovacao`, `minuta`, `dt_publicacao`, `especificacao`, `dt_credenciamento`, `proposta_precos`, `dt_ata_abertura`, `documento`, `dt_confirmacao`, `prazo`, `dt_adjudicacao`, `dt_parecer`, `dt_homologacao`, `dt_contrato_firmado`, `dt_publicacao_ata`, `copia_notas`, `codigo`, `valor_total`, `observacoes`, `dt_lancamento`) VALUES
(1, '2222', 2222, 'Vina', 2222, '2222', 0, 'Vinicius', '2021-12-31', '0000-00-00 00:00:00', '2021-12-31', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', 0, '', '0000-00-00 00:00:00'),
(2, '123', 123, 'Vina', 2134, '234', 0, 'Manutenção', '2021-12-31', '0000-00-00 00:00:00', '2021-12-31', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', 0, '', '0000-00-00 00:00:00'),
(3, '123', 123, 'Vina', 2134, '234', 0, 'Manutenção', '2021-12-31', '0000-00-00 00:00:00', '2021-12-31', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', 0, '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `registro`
--

CREATE TABLE `registro` (
  `id_registro` int(11) NOT NULL,
  `registro` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `registro`
--

INSERT INTO `registro` (`id_registro`, `registro`) VALUES
(1, 'Erick');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_aditivo`
--

CREATE TABLE `tipo_aditivo` (
  `id_tipo_aditivo` int(11) NOT NULL,
  `nome_tipo_aditivo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_modalidade`
--

CREATE TABLE `tipo_modalidade` (
  `id_modalidade` int(11) NOT NULL,
  `modalidade` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tipo_modalidade`
--

INSERT INTO `tipo_modalidade` (`id_modalidade`, `modalidade`) VALUES
(1, 'Vinas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_pregao`
--

CREATE TABLE `tipo_pregao` (
  `id_tipo` int(11) NOT NULL,
  `pregao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tipo_pregao`
--

INSERT INTO `tipo_pregao` (`id_tipo`, `pregao`) VALUES
(1, 'Vina');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `login` varchar(30) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `nome` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `login`, `senha`, `nome`) VALUES
(19, 'leo', '202cb962ac59075b964b07152d234b70', 'Leonardo'),
(21, 'Vinicius', '202cb962ac59075b964b07152d234b70', 'Vinicius');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vencedor`
--

CREATE TABLE `vencedor` (
  `id_vencedor` int(11) NOT NULL,
  `nome_empresa` varchar(250) DEFAULT NULL,
  `valor` float DEFAULT NULL,
  `id_processo` int(11) NOT NULL,
  `tipo_processo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `adesao`
--
ALTER TABLE `adesao`
  ADD PRIMARY KEY (`id_adesao`);

--
-- Índices para tabela `aditivo`
--
ALTER TABLE `aditivo`
  ADD PRIMARY KEY (`id_aditivo`);

--
-- Índices para tabela `analista`
--
ALTER TABLE `analista`
  ADD PRIMARY KEY (`id_analista`);

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`),
  ADD UNIQUE KEY `categoria` (`categoria`);

--
-- Índices para tabela `dispensa`
--
ALTER TABLE `dispensa`
  ADD PRIMARY KEY (`id_dispensa`);

--
-- Índices para tabela `inciso`
--
ALTER TABLE `inciso`
  ADD PRIMARY KEY (`id_inciso`);

--
-- Índices para tabela `inexigibilidade`
--
ALTER TABLE `inexigibilidade`
  ADD PRIMARY KEY (`id_inexigibilidade`);

--
-- Índices para tabela `modalidade`
--
ALTER TABLE `modalidade`
  ADD PRIMARY KEY (`id_modalidade`);

--
-- Índices para tabela `orgao`
--
ALTER TABLE `orgao`
  ADD PRIMARY KEY (`id_orgao`);

--
-- Índices para tabela `orgao_atual`
--
ALTER TABLE `orgao_atual`
  ADD PRIMARY KEY (`id_orgao_atual`);

--
-- Índices para tabela `pregao`
--
ALTER TABLE `pregao`
  ADD PRIMARY KEY (`id_pregao`);

--
-- Índices para tabela `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id_registro`);

--
-- Índices para tabela `tipo_aditivo`
--
ALTER TABLE `tipo_aditivo`
  ADD PRIMARY KEY (`id_tipo_aditivo`);

--
-- Índices para tabela `tipo_modalidade`
--
ALTER TABLE `tipo_modalidade`
  ADD PRIMARY KEY (`id_modalidade`);

--
-- Índices para tabela `tipo_pregao`
--
ALTER TABLE `tipo_pregao`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `login` (`login`);

--
-- Índices para tabela `vencedor`
--
ALTER TABLE `vencedor`
  ADD PRIMARY KEY (`id_vencedor`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `adesao`
--
ALTER TABLE `adesao`
  MODIFY `id_adesao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `aditivo`
--
ALTER TABLE `aditivo`
  MODIFY `id_aditivo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `analista`
--
ALTER TABLE `analista`
  MODIFY `id_analista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `dispensa`
--
ALTER TABLE `dispensa`
  MODIFY `id_dispensa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `inexigibilidade`
--
ALTER TABLE `inexigibilidade`
  MODIFY `id_inexigibilidade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `modalidade`
--
ALTER TABLE `modalidade`
  MODIFY `id_modalidade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `orgao`
--
ALTER TABLE `orgao`
  MODIFY `id_orgao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `orgao_atual`
--
ALTER TABLE `orgao_atual`
  MODIFY `id_orgao_atual` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `pregao`
--
ALTER TABLE `pregao`
  MODIFY `id_pregao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `registro`
--
ALTER TABLE `registro`
  MODIFY `id_registro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tipo_aditivo`
--
ALTER TABLE `tipo_aditivo`
  MODIFY `id_tipo_aditivo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tipo_modalidade`
--
ALTER TABLE `tipo_modalidade`
  MODIFY `id_modalidade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tipo_pregao`
--
ALTER TABLE `tipo_pregao`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `vencedor`
--
ALTER TABLE `vencedor`
  MODIFY `id_vencedor` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
