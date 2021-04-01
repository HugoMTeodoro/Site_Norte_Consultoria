-- MySQL dump 10.13  Distrib 8.0.23, for Win64 (x86_64)
--
-- Host: localhost    Database: db_site_norte_consultoria
-- ------------------------------------------------------
-- Server version	8.0.23

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `aditivo`
--

DROP TABLE IF EXISTS `aditivo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `aditivo` (
  `id_aditivo` int NOT NULL AUTO_INCREMENT,
  `numero_aditivo` int DEFAULT NULL,
  `prazo_aditivo` date DEFAULT NULL,
  `data_aditivo` date DEFAULT NULL,
  `valor_aditivo` float DEFAULT NULL,
  PRIMARY KEY (`id_aditivo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `analista`
--

DROP TABLE IF EXISTS `analista`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `analista` (
  `id_analista` int NOT NULL AUTO_INCREMENT,
  `nome_analista` varchar(500) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_analista`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `dispensa`
--

DROP TABLE IF EXISTS `dispensa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `dispensa` (
  `id_dispensa` int NOT NULL AUTO_INCREMENT,
  `exercicio` int DEFAULT NULL,
  `num_processo` int DEFAULT NULL,
  `num_modalidade` int DEFAULT NULL,
  `inciso` int DEFAULT NULL,
  `objeto` varchar(3000) DEFAULT NULL,
  `categoria` int DEFAULT NULL,
  `data_inicio` date DEFAULT NULL,
  `data_ratificacao` date DEFAULT NULL,
  `data_portaria_comissao` date DEFAULT NULL,
  `data_solicitacao_compras_servicos` date DEFAULT NULL,
  `data_preco_estimativo` date DEFAULT NULL,
  `data_autorizacao_abertura` date DEFAULT NULL,
  `data_autuacao` date DEFAULT NULL,
  `data_especificacao_objeto` date DEFAULT NULL,
  `data_enquadramento` date DEFAULT NULL,
  `data_minuta_contrato` date DEFAULT NULL,
  `data_proposta_favorecido` date DEFAULT NULL,
  `data_documento_habilitacao` date DEFAULT NULL,
  `data_ata` date DEFAULT NULL,
  `data_parecer_juridico` date DEFAULT NULL,
  `data_contrato_firmado` date DEFAULT NULL,
  `data_publicacao` date DEFAULT NULL,
  `data_copia_empenho_compras_legais` date DEFAULT NULL,
  `codigo_registro` varchar(20) DEFAULT NULL,
  `valor_total` float DEFAULT NULL,
  `observacoes` varchar(3000) DEFAULT NULL,
  `data_lancamento` datetime DEFAULT NULL,
  PRIMARY KEY (`id_dispensa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `orgao`
--

DROP TABLE IF EXISTS `orgao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orgao` (
  `nome_orgao` varchar(50) NOT NULL,
  PRIMARY KEY (`nome_orgao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `tipo_aditivo`
--

DROP TABLE IF EXISTS `tipo_aditivo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tipo_aditivo` (
  `id_tipo_aditivo` int NOT NULL AUTO_INCREMENT,
  `nome_tipo_aditivo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_tipo_aditivo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `vendedores`
--

DROP TABLE IF EXISTS `vendedores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `vendedores` (
  `id_vencedores` int NOT NULL AUTO_INCREMENT,
  `nome_empresa` varchar(250) DEFAULT NULL,
  `valor` float DEFAULT NULL,
  PRIMARY KEY (`id_vencedores`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-04-01 11:07:45
