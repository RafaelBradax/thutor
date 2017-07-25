-- MySQL dump 10.13  Distrib 5.7.19, for Linux (x86_64)
--
-- Host: localhost    Database: thutor
-- ------------------------------------------------------
-- Server version	5.7.19-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL AUTO_INCREMENT,
  `msg_body` longtext CHARACTER SET utf8 NOT NULL,
  `msg_date` datetime NOT NULL,
  `msg_user` int(11) NOT NULL,
  PRIMARY KEY (`msg_id`),
  KEY `msg_user` (`msg_user`),
  CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`msg_user`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` VALUES (1,'mensagens aleatorias mensagens aleatorias mensagens aleatorias mensagens aleatorias mensagens aleatorias mensagens aleatorias mensagens aleatorias mensagens aleatorias mensagens aleatorias mensagens aleatorias mensagens aleatorias mensagens aleatorias mensagens aleatorias mensagens aleatorias mensagens aleatorias mensagens aleatorias mensagens aleatorias mensagens aleatorias mensagens aleatorias mensagens aleatorias mensagens aleatorias mensagens aleatorias mensagens aleatorias mensagens aleatorias mensagens aleatorias mensagens aleatorias mensagens aleatorias mensagens aleatorias mensagens aleatorias mensagens aleatorias mensagens aleatorias mensagens aleatorias mensagens aleatorias mensagens aleatorias mensagens aleatorias mensagens aleatorias mensagens aleatorias mensagens aleatorias mensagens aleatorias mensagens aleatorias mensagens aleatorias mensagens aleatorias mensagens aleatorias mensagens aleatorias mensagens aleatorias mensagens aleatorias mensagens aleatorias mensagens aleatorias mensagens aleatorias mensagens aleatorias mensagens aleatorias mensagens aleatorias mensagens aleatorias mensagens aleatorias mensagens aleatorias mensagens aleatorias mensagens aleatorias mensagens aleatorias mensagens aleatorias mensagens aleatorias mensagens aleatorias mensagens aleatorias mensagens aleatorias mensagens aleatorias','2017-07-24 20:14:48',9),(2,'teste','2017-07-24 20:23:56',9),(3,'1234567890123456789012345','2017-07-24 20:27:06',9),(4,'12345678901234567890123456','2017-07-24 20:27:33',9),(5,'','2017-07-24 23:18:36',9),(6,'aqweqweqwe','2017-07-24 23:38:27',11),(7,'eu sou a mosca que pousou na sua sopa\r\neu sou a mosca que veio para te atormentar\r\n','2017-07-25 00:01:33',9);
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `user_birthday` date NOT NULL,
  `user_biography` longtext NOT NULL,
  `user_creation` datetime NOT NULL,
  `user_address` longtext NOT NULL,
  `user_phone` varchar(14) NOT NULL,
  `user_trash` int(1) DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (9,'Rafael Bradaschia Cortez','1991-07-12','Eu sou o Rafael B. Cortez.','2017-07-24 23:59:10','13460-000;João Bolzan;Jd. Planalto;402;Fundos;Nova Odessa;SP','(19) 3363-5898',0),(10,'Rafael Cortez','2017-01-01','eu sou o batman','2017-07-24 22:20:56','12312-312;dasasdasd;123123;2332;123123;123123;123123','(13) 4564-5646',1),(11,'teste','2017-01-01','teste','2017-07-24 23:38:06','13070-170;Rua Sebastião Bueno Mendes;Jardim Chapadão;123;qweqwe;Campinas;SP','',1),(12,'nome','2017-01-01','asdfasdasdasddassdadasasdasd','2017-07-25 00:00:19','13460-000;asdasdasd;testte;123123;teste;Nova Odessa;SP','(12) 3123-1231',0),(13,'Roger','2017-01-01','Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.\r\nPorque nós o usamos?\r\n\r\nÉ um fato conhecido de todos que um leitor se distrairá com o conteúdo de texto legível de uma página quando estiver examinando sua diagramação. A vantagem de usar Lorem Ipsum é que ele tem uma distribuição normal de letras, ao contrário de \"Conteúdo aqui, conteúdo aqui\", fazendo com que ele tenha uma aparência similar a de um texto legível. Muitos softwares de publicação e editores de páginas na internet agora usam Lorem Ipsum como texto-modelo padrão, e uma rápida busca por \'lorem ipsum\' mostra vários websites ainda em sua fase de construção. Várias versões novas surgiram ao longo dos anos, eventualmente por acidente, e às vezes de propósito (injetando humor, e coisas do gênero).\r\n\r\nDe onde ele vem?\r\n\r\nAo contrário do que se acredita, Lorem Ipsum não é simplesmente um texto randômico. Com mais de 2000 anos, suas raízes podem ser encontradas em uma obra de literatura latina clássica datada de 45 AC. Richard McClintock, um professor de latim do Hampden-Sydney College na Virginia, pesquisou uma das mais obscuras palavras em latim, consectetur, oriunda de uma passagem de Lorem Ipsum, e, procurando por entre citações da palavra na literatura clássica, descobriu a sua indubitável origem. Lorem Ipsum vem das seções 1.10.32 e 1.10.33 do \"de Finibus Bonorum et Malorum\" (Os Extremos do Bem e do Mal), de Cícero, escrito em 45 AC. Este livro é um tratado de teoria da ética muito popular na época da Renascença. A primeira linha de Lorem Ipsum, \"Lorem Ipsum dolor sit amet...\" vem de uma linha na seção 1.10.32.','2017-07-25 00:07:21','12312-312;asdasdasd;123123;123;qweqwe;Campinas;123123','(12) 3123-1231',0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-07-25  0:17:06
