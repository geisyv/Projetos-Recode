-- MySQL dump 10.13  Distrib 8.0.22, for Linux (x86_64)
--
-- Host: localhost    Database: fseletro
-- ------------------------------------------------------
-- Server version	8.0.22

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
-- Table structure for table `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pedidos` (
  `idpedidos` int NOT NULL AUTO_INCREMENT,
  `nomecliente` varchar(100) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `telefone` varchar(100) NOT NULL,
  `nomedoproduto` varchar(255) NOT NULL,
  `valorunitario` decimal(10,2) NOT NULL,
  `quantidade` varchar(50) NOT NULL,
  `valortotal` decimal(10,2) NOT NULL,
  PRIMARY KEY (`idpedidos`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedidos`
--

LOCK TABLES `pedidos` WRITE;
/*!40000 ALTER TABLE `pedidos` DISABLE KEYS */;
INSERT INTO `pedidos` VALUES (1,'Ana Luisa Silva','Rua: Jaguaré, 234','96535-1111','Geladeira Samsung Family Hub Frost Free French Door Inverse 582 Litros Inox',19000.00,'1',19000.00),(2,'Amanda Cristina','Av: Paulista, 7654','96532-4548','Micro-ondas Philco Pmo21e 21l - Prata 220v',429.00,'1',429.00),(3,'Lucios Moura','Rua: Cabral de Santo, 43','97452-8986','Lavadora Samsung com Motor Digital Inverter Branca – 11Kg',2924.10,'1',2924.10),(4,'Mariana Nascimento','Rua: Sete de Setembro, 63','93265-4512','Micro-ondas Philco Pmo21e 21l - Prata 220v',429.00,'1',429.00),(5,'João Pedro Sousa','Rua: Severino Vaz de Camargo, 324','95263-5847','Geladeira Electrolux Cycle Defrost 362 Litros DC44 Branco - 127V',1850.50,'1',1850.50),(6,'Davi do Santos','Av: Rio Pequeno, 9876 ','96130-9484','Lavadora Samsung com Motor Digital Inverter Branca – 11Kg',2924.10,'1',2924.10),(7,'Natalia da Costa Silva','Rua: Quarenta e Sete, 50','91937-8239','Fogão Brastemp 5 Bocas Inox Com Botões Removíveis e Exclusivo Aro Protetor',1199.00,'1',1199.00),(8,'Leticia Correa Antunes','Rua: Pedro Correia, 09','96895-8956','Lava Louça Compacta 8 Serviços Branca - 127V Brastemp\n\n',1599.00,'1',1599.00),(9,'Matheus Martineli','Rua: 15 de abril, 876','93576-6890','Geladeira Frost Free Brastemp Side Inverse 540 litros\n\n',5019.00,'1',5019.00),(10,'Giovana Pereira Santos','Rua: José da Silva, 89','96549-8732','Lavadora Samsung com Motor Digital Inverter Branca – 11Kg',2924.10,'1',2924.10),(11,'Carla Maria Costa','Rua: Maria Scrum, 55','96598-4527','Micro-ondas Philco Pmo21e 21l - Prata 220v',429.00,'1',429.00);
/*!40000 ALTER TABLE `pedidos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-10-26 17:48:15
