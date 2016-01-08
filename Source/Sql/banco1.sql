-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.6.17 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              8.3.0.4694
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando estrutura do banco de dados para banco1
DROP DATABASE IF EXISTS `banco1`;
CREATE DATABASE IF NOT EXISTS `banco1` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `banco1`;


-- Copiando estrutura para tabela banco1.administradores
DROP TABLE IF EXISTS `administradores`;
CREATE TABLE IF NOT EXISTS `administradores` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) COLLATE latin1_general_ci DEFAULT NULL,
  `senha` varchar(45) COLLATE latin1_general_ci DEFAULT NULL,
  `email` varchar(45) COLLATE latin1_general_ci DEFAULT NULL,
  `n` int(2) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- Copiando dados para a tabela banco1.administradores: 1 rows
DELETE FROM `administradores`;
/*!40000 ALTER TABLE `administradores` DISABLE KEYS */;
INSERT INTO `administradores` (`id`, `nome`, `senha`, `email`, `n`) VALUES
	(1, 'Andre Machado', NULL, 'teste@gmail.com', 0);
/*!40000 ALTER TABLE `administradores` ENABLE KEYS */;


-- Copiando estrutura para tabela banco1.ambiente
DROP TABLE IF EXISTS `ambiente`;
CREATE TABLE IF NOT EXISTS `ambiente` (
  `turno` int(11) NOT NULL,
  `age` int(2) DEFAULT NULL,
  `inicio` varchar(45) DEFAULT NULL,
  `final` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`turno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela banco1.ambiente: ~0 rows (aproximadamente)
DELETE FROM `ambiente`;
/*!40000 ALTER TABLE `ambiente` DISABLE KEYS */;
/*!40000 ALTER TABLE `ambiente` ENABLE KEYS */;


-- Copiando estrutura para tabela banco1.clans
DROP TABLE IF EXISTS `clans`;
CREATE TABLE IF NOT EXISTS `clans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `feudos` int(11) DEFAULT NULL,
  `lider` varchar(45) DEFAULT 'feudal',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela banco1.clans: ~30 rows (aproximadamente)
DELETE FROM `clans`;
/*!40000 ALTER TABLE `clans` DISABLE KEYS */;
INSERT INTO `clans` (`id`, `nome`, `feudos`, `lider`) VALUES
	(1, 'Clan Padrao 1', 3, 'feudal'),
	(2, 'Clan Padrao 2', 6, 'feudal'),
	(3, 'Clan Padrao 3', 4, 'feudal'),
	(4, 'Clan Padrao 4', 4, 'feudal'),
	(5, 'Clan Padrao 5', 2, 'feudal'),
	(6, 'Clan Padrao 6', 0, 'feudal'),
	(7, 'Clan Padrao 7', 4, 'feudal'),
	(8, 'Clan Padrao 8', 1, 'feudal'),
	(9, 'Clan Padrao 9', 4, 'feudal'),
	(10, 'Clan Padrao 10', 1, 'feudal'),
	(11, 'Clan Padrao 11', 2, 'feudal'),
	(12, 'Clan Padrao 12', 2, 'feudal'),
	(13, 'Clan Padrao 13', 0, 'feudal'),
	(14, 'Clan Padrao 14', 0, 'feudal'),
	(15, 'Clan Padrao 15', 0, 'feudal'),
	(16, 'Clan Padrao 16', 0, 'feudal'),
	(17, 'Clan Padrao 17', 2, 'feudal'),
	(18, 'Clan Padrao 18', 1, 'feudal'),
	(19, 'Clan Padrao 19', 0, 'feudal'),
	(20, 'Clan Padrao 20', 1, 'feudal'),
	(21, 'Clan Padrao 21', 3, 'feudal'),
	(22, 'Clan Padrao 22', 1, 'feudal'),
	(23, 'Clan Padrao 23', 1, 'feudal'),
	(24, 'Clan Padrao 24', 2, 'feudal'),
	(25, 'Clan Padrao 25', 1, 'feudal'),
	(26, 'Clan Padrao 26', 0, 'feudal'),
	(27, 'Dragon Kings', 1, 'legionario'),
	(29, '55555555555555555555', 0, 'rapaiz'),
	(30, 'Clan do Dono', 2, 'DONO DO JOGO'),
	(32, '#SamuraiX#', 1, 'Feudo Teste');
/*!40000 ALTER TABLE `clans` ENABLE KEYS */;


-- Copiando estrutura para tabela banco1.exercito
DROP TABLE IF EXISTS `exercito`;
CREATE TABLE IF NOT EXISTS `exercito` (
  `id` int(11) NOT NULL,
  `UN001` int(11) DEFAULT '0',
  `UN002` int(11) DEFAULT '0',
  `UN003` int(11) DEFAULT '0',
  `UN004` int(11) DEFAULT '0',
  `UN005` int(11) DEFAULT '0',
  `UN006` int(11) DEFAULT '0',
  `UN007` int(11) DEFAULT '0',
  `UN008` int(11) DEFAULT '0',
  `UN001_BASE` int(11) DEFAULT '0',
  `UN002_BASE` int(11) DEFAULT '0',
  `UN003_BASE` int(11) DEFAULT '0',
  `UN004_BASE` int(11) DEFAULT '0',
  `UN005_BASE` int(11) DEFAULT '0',
  `UN006_BASE` int(11) DEFAULT '0',
  `UN007_BASE` int(11) DEFAULT '0',
  `UN008_BASE` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela banco1.exercito: 24 rows
DELETE FROM `exercito`;
/*!40000 ALTER TABLE `exercito` DISABLE KEYS */;
INSERT INTO `exercito` (`id`, `UN001`, `UN002`, `UN003`, `UN004`, `UN005`, `UN006`, `UN007`, `UN008`, `UN001_BASE`, `UN002_BASE`, `UN003_BASE`, `UN004_BASE`, `UN005_BASE`, `UN006_BASE`, `UN007_BASE`, `UN008_BASE`) VALUES
	(1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
	(7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
	(8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
	(9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
	(11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
	(12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
	(13, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
	(14, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
	(15, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
	(16, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
	(17, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
	(18, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
	(20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
	(23, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
	(26, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
	(27, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
	(28, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
	(29, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
	(30, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
	(31, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
	(32, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
	(33, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
	(34, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
	(35, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
/*!40000 ALTER TABLE `exercito` ENABLE KEYS */;


-- Copiando estrutura para tabela banco1.feudos
DROP TABLE IF EXISTS `feudos`;
CREATE TABLE IF NOT EXISTS `feudos` (
  `id` int(11) NOT NULL,
  `feudo` varchar(45) DEFAULT NULL,
  `origem` varchar(45) DEFAULT NULL,
  `sushi` int(11) DEFAULT '0',
  `prata` int(11) DEFAULT '0',
  `madeira` int(11) DEFAULT '0',
  `peao_sushi` int(11) DEFAULT '0',
  `peao_prata` int(11) DEFAULT '0',
  `peao_madeira` int(11) DEFAULT '0',
  `peao_notwork` int(11) DEFAULT '0',
  `peao_total` int(11) DEFAULT '0',
  `unidades` int(11) DEFAULT '0',
  `ninjas` int(11) DEFAULT '0',
  `posicao` int(2) DEFAULT '0',
  `nivel` int(2) DEFAULT '0',
  `ataque_total` int(11) DEFAULT '0',
  `defesa_total` int(11) DEFAULT '0',
  `clan` varchar(45) DEFAULT NULL,
  `daimyo` int(2) DEFAULT '0',
  `bloqueio` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela banco1.feudos: ~46 rows (aproximadamente)
DELETE FROM `feudos`;
/*!40000 ALTER TABLE `feudos` DISABLE KEYS */;
INSERT INTO `feudos` (`id`, `feudo`, `origem`, `sushi`, `prata`, `madeira`, `peao_sushi`, `peao_prata`, `peao_madeira`, `peao_notwork`, `peao_total`, `unidades`, `ninjas`, `posicao`, `nivel`, `ataque_total`, `defesa_total`, `clan`, `daimyo`, `bloqueio`) VALUES
	(1, 'DONO DO JOGO', 'Kogeki', 3759146, 3869320, 3676640, 29, 48, 23, 100, 200, 0, 0, 4, 2, 0, 0, 'Clan do Dono', 18, 0),
	(7, 'ijijij', 'Supai', 673960, 500, 1000, 5, 0, 0, 0, 5, 0, 0, 13, 1, 0, 0, 'Clan Padrao 2', 2, 0),
	(8, 'Dragon King\\\'s', 'Supai', 673960, 500, 1000, 5, 0, 0, 0, 5, 0, 0, 14, 1, 0, 0, 'Clan Padrao 3', 5, 0),
	(9, 'Aritoleda', 'Kogeki', 671000, 500, 1000, 5, 0, 0, 0, 5, 0, 0, 16, 1, 0, 0, 'Clan Padrao 4', 3, 0),
	(11, 'legionario', 'Shubi', 5128630, 2396150, 4792300, 40, 30, 30, 0, 100, 0, 0, 7, 1, 0, 0, 'Dragon Kings', 7, 0),
	(12, 'Ourisso', 'Seisan', 670960, 500, 1000, 5, 0, 0, 0, 5, 0, 0, 20, 1, 0, 0, 'Clan Padrao 1', 4, 0),
	(13, 'pedrin', 'Shubi', 670920, 500, 1000, 5, 0, 0, 0, 5, 0, 0, 18, 1, 0, 0, 'Clan Padrao 2', 9, 0),
	(14, 'guto', 'Seisan', 670920, 500, 1000, 5, 0, 0, 0, 5, 0, 0, 19, 1, 0, 0, 'Clan Padrao 3', 6, 0),
	(15, 'Marquinho', 'Supai', 642720, 50, 100, 5, 0, 0, 0, 5, 0, 0, 46, 1, 0, 0, 'Clan Padrao 4', 0, 1),
	(16, 'Tropa de Elite', 'Seisan', 1334520, 4170750, 4171250, 10, 50, 25, 0, 85, 0, 0, 3, 1, 0, 0, 'Clan Padrao 5', 1, 0),
	(18, 'Pasqual TOP1', 'Shubi', 3190, 8269325, 1000, 0, 100, 0, 0, 100, 0, 0, 1, 1, 0, 0, 'Clan Padrao 1', 0, 0),
	(20, 'Man do Facao', 'Kogeki', 654920, 500, 1000, 5, 0, 0, 80, 85, 0, 0, 15, 1, 0, 0, 'Clan Padrao 2', 0, 0),
	(21, 'Pranke\\\'s feudo', 'Kogeki', 5217744, 2442950, 4885900, 40, 30, 30, 0, 100, 0, 0, 6, 1, 0, 0, 'Clan Padrao 3', 4, 0),
	(22, 'JABU', 'Kogeki', 2214016, 500, 1000, 17, 0, 0, 62, 79, 0, 0, 17, 1, 0, 0, 'Clan Padrao 4', 1, 0),
	(23, 'comecu', 'Kogeki', 650960, 325980, 977440, 5, 4, 6, 0, 15, 0, 0, 8, 1, 0, 0, 'Clan Padrao 5', 0, 0),
	(26, 'Sandrinha.com', 'Shubi', 626600, 50, 100, 5, 0, 0, 0, 5, 0, 0, 34, 1, 0, 0, 'Clan Padrao 22', 0, 0),
	(27, 'Pedrin X', 'Kogeki', 626600, 50, 100, 5, 0, 0, 0, 5, 0, 0, 35, 1, 0, 0, 'Clan Padrao 7', 0, 0),
	(28, 'Ryudragon', 'Kogeki', 236110, 4667050, 100, 0, 100, 0, 0, 100, 0, 0, 2, 1, 0, 0, 'Clan Padrao 1', 0, 0),
	(29, 'adriano', 'Supai', 976990, 50, 100, 8, 0, 0, 0, 8, 0, 0, 36, 1, 0, 0, 'Clan Padrao 21', 0, 0),
	(30, 'Fabricio', 'Shubi', 593560, 50, 100, 5, 0, 0, 0, 5, 0, 0, 37, 1, 0, 0, 'Clan Padrao 3', 0, 0),
	(31, 'Tokyo', 'Supai', 581560, 50, 100, 5, 0, 0, 0, 5, 0, 0, 38, 1, 0, 0, 'Clan Padrao 25', 0, 0),
	(32, 'Peletrigna', 'Supai', 581080, 50, 100, 5, 0, 0, 0, 5, 0, 0, 39, 1, 0, 0, 'Clan Padrao 7', 0, 0),
	(33, 'wrig', 'Shubi', 578280, 50, 100, 5, 0, 0, 0, 5, 0, 0, 40, 1, 0, 0, 'Clan Padrao 11', 0, 0),
	(34, 'kanuji', 'Seisan', 570120, 50, 100, 5, 0, 0, 0, 5, 0, 0, 41, 1, 0, 0, 'Clan Padrao 9', 0, 0),
	(35, 'Tokyo', 'Kogeki', 556440, 50, 100, 5, 0, 0, 0, 5, 0, 0, 42, 1, 0, 0, 'Clan Padrao 11', 0, 0),
	(36, 'raparigamen', 'Shubi', 482880, 50, 100, 5, 0, 0, 0, 5, 0, 0, 43, 1, 0, 0, 'Clan Padrao 9', 0, 0),
	(37, 'clÃ£ lopes', 'Kogeki', 464500, 58105, 116210, 5, 1, 1, 0, 7, 0, 0, 10, 1, 0, 0, 'Clan Padrao 12', 0, 0),
	(39, 'aaaa', 'Supai', 378080, 50, 100, 5, 0, 0, 0, 5, 0, 0, 44, 1, 0, 0, 'Clan Padrao 24', 0, 0),
	(40, 'Lol', 'Shubi', 377760, 50, 100, 5, 0, 0, 0, 5, 0, 0, 45, 1, 0, 0, 'Clan Padrao 21', 0, 0),
	(41, 'tribo da lua', 'Supai', 150192, 46960, 187740, 2, 1, 2, 0, 5, 0, 0, 11, 1, 0, 0, 'Clan Padrao 2', 0, 0),
	(42, 'Jackz', 'Kogeki', 150032, 46860, 187340, 2, 1, 2, 0, 5, 0, 0, 12, 1, 0, 0, 'Clan Padrao 2', 0, 0),
	(43, 'Aster', 'Kogeki', 373160, 50, 100, 5, 0, 0, 0, 5, 0, 0, 33, 1, 0, 0, 'Clan Padrao 12', 0, 0),
	(44, 'swat maximus', 'Supai', 373240, 50, 100, 5, 0, 0, 0, 5, 0, 0, 32, 1, 0, 0, 'Clan Padrao 17', 0, 0),
	(45, 'TrueChinese', 'Supai', 368280, 50, 100, 5, 0, 0, 0, 5, 0, 0, 23, 1, 0, 0, 'Clan Padrao 10', 0, 0),
	(46, 'Feudo Teste', 'Kogeki', 1669206, 2570595, 1729660, 20, 62, 18, 0, 100, 0, 0, 5, 1, 0, 0, '#SamuraiX#', 10, 0),
	(47, 'Purper', 'Kogeki', 361240, 50, 100, 5, 0, 0, 0, 5, 0, 0, 21, 1, 0, 0, 'Clan Padrao 23', 0, 0),
	(48, 'teste', 'Supai', 360720, 50, 100, 5, 0, 0, 0, 5, 0, 0, 22, 1, 0, 0, 'Clan Padrao 4', 0, 0),
	(49, 'pato malvadinh', 'Kogeki', 1077050, 134675, 100, 15, 3, 0, 0, 18, 0, 0, 9, 1, 0, 0, 'Clan Padrao 24', 0, 0),
	(50, 'Andrew', 'Supai', 336520, 50, 100, 5, 0, 0, 0, 5, 0, 0, 24, 1, 0, 0, 'Clan Padrao 21', 0, 0),
	(51, 'iZerang', 'Supai', 336400, 50, 100, 5, 0, 0, 0, 5, 0, 0, 25, 1, 0, 0, 'Clan Padrao 7', 0, 0),
	(52, 'teste', 'Supai', 335960, 50, 100, 5, 0, 0, 0, 5, 0, 0, 26, 1, 0, 0, 'Clan Padrao 9', 0, 0),
	(53, 'Bitokachan', 'Supai', 335320, 50, 100, 5, 0, 0, 0, 5, 0, 0, 27, 1, 0, 0, 'Clan Padrao 9', 0, 0),
	(54, 'kinho', 'Supai', 322410, 50, 100, 5, 0, 0, 1, 6, 0, 0, 28, 1, 0, 0, 'Clan do Dono', 0, 0),
	(55, 'Predador', 'Supai', 172000, 50, 100, 5, 0, 0, 0, 5, 0, 0, 29, 1, 0, 0, 'Clan Padrao 7', 0, 0),
	(56, 'dssds', 'Shubi', 19280, 50, 100, 5, 0, 0, 0, 5, 0, 0, 30, 1, 0, 0, 'Clan Padrao 20', 0, 0),
	(57, 'Daniela', 'Supai', 440, 50, 100, 5, 0, 0, 0, 5, 0, 0, 31, 1, 0, 0, 'Clan Padrao 17', 0, 0);
/*!40000 ALTER TABLE `feudos` ENABLE KEYS */;


-- Copiando estrutura para tabela banco1.menu
DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `idmenu` int(11) NOT NULL,
  `linkmenu` varchar(45) DEFAULT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `acesso` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idmenu`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela banco1.menu: 14 rows
DELETE FROM `menu`;
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
INSERT INTO `menu` (`idmenu`, `linkmenu`, `nome`, `acesso`) VALUES
	(2, 'main.php?op=conta', 'Minha conta', 'usuario'),
	(3, 'main.php?op=feudo', 'Feudo', 'usuario'),
	(4, 'main.php?op=exercito', 'Exercito', 'usuario'),
	(6, 'main.php?op=espionagem', 'Espionagem', 'usuario'),
	(8, 'main.php?op=ranking', 'Ranking', 'usuario'),
	(13, 'main.php?op=combates', 'Combates', 'usuario'),
	(15, '/forum', 'Forum', 'usuario'),
	(16, 'main.php?op=estruturas', 'Estruturas', 'usuario'),
	(17, 'main.php?op=clan', 'Clan', 'usuario'),
	(18, '#', 'Bate-papo', 'usuario'),
	(19, 'main.php?op=memo', 'Anotacoes', 'usuario'),
	(20, '4DM1N15TR4D0R/P4G1N4.php', 'Controle', '4DM1N'),
	(21, '#', 'Ferramentas', 'usuario'),
	(22, 'codado/sair.php', 'Sair', 'usuario');
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;


-- Copiando estrutura para tabela banco1.motor
DROP TABLE IF EXISTS `motor`;
CREATE TABLE IF NOT EXISTS `motor` (
  `turno` int(11) NOT NULL,
  `horario` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`turno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela banco1.motor: ~0 rows (aproximadamente)
DELETE FROM `motor`;
/*!40000 ALTER TABLE `motor` DISABLE KEYS */;
INSERT INTO `motor` (`turno`, `horario`) VALUES
	(17344, '2014-04-07 00:35:02');
/*!40000 ALTER TABLE `motor` ENABLE KEYS */;


-- Copiando estrutura para tabela banco1.unidades
DROP TABLE IF EXISTS `unidades`;
CREATE TABLE IF NOT EXISTS `unidades` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(11) DEFAULT 'UN',
  `nome` varchar(45) DEFAULT NULL,
  `ataque` int(11) DEFAULT '75',
  `defesa` int(11) DEFAULT '50',
  `prata` int(11) DEFAULT '150',
  `sushi` int(11) DEFAULT '200',
  `madeira` int(11) DEFAULT '300',
  `origem` varchar(45) DEFAULT NULL,
  `nivel` int(2) DEFAULT NULL,
  `categoria` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=96 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela banco1.unidades: 80 rows
DELETE FROM `unidades`;
/*!40000 ALTER TABLE `unidades` DISABLE KEYS */;
INSERT INTO `unidades` (`id`, `codigo`, `nome`, `ataque`, `defesa`, `prata`, `sushi`, `madeira`, `origem`, `nivel`, `categoria`) VALUES
	(1, 'UN001', 'Personagem 1', 1000, 500, 200, 300, 100, 'Supai', 1, 'ataque'),
	(2, 'UN002', 'Personagem 2', 500, 1000, 200, 300, 100, 'Supai', 1, 'defesa'),
	(3, 'UN003', 'Personagem 3', 1000, 500, 200, 300, 100, 'Kogeki', 1, 'ataque'),
	(4, 'UN004', 'Personagem 4', 500, 1000, 200, 300, 100, 'Kogeki', 1, 'defesa'),
	(5, 'UN005', 'Personagem 5', 1000, 500, 200, 300, 100, 'Shubi', 1, 'ataque'),
	(6, 'UN006', 'Personagem 6', 500, 1000, 200, 300, 100, 'Shubi', 1, 'defesa'),
	(7, 'UN007', 'Personagem 7', 1000, 500, 200, 300, 100, 'Seisan', 1, 'ataque'),
	(8, 'UN008', 'Personagem 8', 500, 1000, 200, 300, 100, 'Seisan', 1, 'defesa'),
	(9, 'UN009', 'Personagem 9', 2000, 500, 200, 300, 400, 'Supai', 2, 'ataque'),
	(10, 'UN010', 'Personagem 10', 500, 2000, 200, 300, 400, 'Supai', 2, 'defesa'),
	(11, 'UN', 'Personagem 11', 2000, 500, 200, 300, 400, 'Kogeki', 2, 'ataque'),
	(12, 'UN', 'Personagem 12', 500, 2000, 200, 300, 400, 'Kogeki', 2, 'defesa'),
	(13, 'UN', 'Personagem 13', 2000, 500, 200, 300, 400, 'Shubi', 2, 'ataque'),
	(14, 'UN', 'Personagem 14', 500, 2000, 200, 300, 400, 'Shubi', 2, 'defesa'),
	(15, 'UN', 'Personagem 15', 2000, 500, 200, 300, 400, 'Seisan', 2, 'ataque'),
	(16, 'UN', 'Personagem 16', 500, 2000, 200, 300, 400, 'Seisan', 2, 'defesa'),
	(17, 'UN', 'Personagem 17', 3000, 500, 200, 300, 400, 'Supai', 3, 'ataque'),
	(18, 'UN', 'Personagem 18', 500, 3000, 200, 300, 400, 'Supai', 3, 'defesa'),
	(19, 'UN', 'Personagem 19', 3000, 500, 200, 300, 400, 'Kogeki', 3, 'ataque'),
	(20, 'UN', 'Personagem 20', 500, 3000, 200, 300, 400, 'Kogeki', 3, 'defesa'),
	(21, 'UN', 'Personagem 21', 3000, 500, 200, 300, 400, 'Shubi', 3, 'ataque'),
	(22, 'UN', 'Personagem 22', 500, 3000, 200, 300, 400, 'Shubi', 3, 'defesa'),
	(23, 'UN', 'Personagem 23', 3000, 500, 200, 300, 400, 'Seisan', 3, 'ataque'),
	(24, 'UN', 'Personagem 24', 500, 3000, 200, 300, 400, 'Seisan', 3, 'defesa'),
	(25, 'UN', 'Personagem 25', 4000, 500, 200, 300, 400, 'Supai', 4, 'ataque'),
	(26, 'UN', 'Personagem 26', 500, 4000, 200, 300, 400, 'Supai', 4, 'defesa'),
	(27, 'UN', 'Personagem 27', 4000, 500, 200, 300, 400, 'Kogeki', 4, 'ataque'),
	(28, 'UN', 'Personagem 28', 500, 4000, 200, 300, 400, 'Kogeki', 4, 'defesa'),
	(29, 'UN', 'Personagem 29', 4000, 500, 200, 300, 400, 'Shubi', 4, 'ataque'),
	(30, 'UN', 'Personagem 30', 500, 4000, 200, 300, 400, 'Shubi', 4, 'defesa'),
	(31, 'UN', 'Personagem 31', 4000, 500, 200, 300, 400, 'Seisan', 4, 'ataque'),
	(32, 'UN', 'Personagem 32', 500, 4000, 200, 300, 400, 'Seisan', 4, 'defesa'),
	(33, 'UN', 'Personagem 33', 5000, 500, 200, 300, 400, 'Supai', 5, 'ataque'),
	(34, 'UN', 'Personagem 34', 500, 5000, 200, 300, 400, 'Supai', 5, 'defesa'),
	(35, 'UN', 'Personagem 35', 5000, 500, 200, 300, 400, 'Kogeki', 5, 'ataque'),
	(36, 'UN', 'Personagem 36', 500, 5000, 200, 300, 400, 'Kogeki', 5, 'defesa'),
	(37, 'UN', 'Personagem 37', 5000, 500, 200, 300, 400, 'Shubi', 5, 'ataque'),
	(38, 'UN', 'Personagem 38', 500, 5000, 200, 300, 400, 'Shubi', 5, 'defesa'),
	(39, 'UN', 'Personagem 39', 5000, 500, 200, 300, 400, 'Seisan', 5, 'ataque'),
	(40, 'UN', 'Personagem 40', 500, 5000, 200, 300, 400, 'Seisan', 5, 'defesa'),
	(41, 'UN', 'Personagem 41', 6000, 500, 200, 300, 400, 'Supai', 6, 'ataque'),
	(42, 'UN', 'Personagem 42', 500, 6000, 200, 300, 400, 'Supai', 6, 'defesa'),
	(43, 'UN', 'Personagem 43', 6000, 500, 200, 300, 400, 'Kogeki', 6, 'ataque'),
	(44, 'UN', 'Personagem 44', 500, 6000, 200, 300, 400, 'Kogeki', 6, 'defesa'),
	(45, 'UN', 'Personagem 45', 6000, 500, 200, 300, 400, 'Shubi', 6, 'ataque'),
	(46, 'UN', 'Personagem 46', 500, 6000, 200, 300, 400, 'Shubi', 6, 'defesa'),
	(47, 'UN', 'Personagem 47', 6000, 500, 200, 300, 400, 'Seisan', 6, 'ataque'),
	(48, 'UN', 'Personagem 48', 500, 6000, 200, 300, 400, 'Seisan', 6, 'defesa'),
	(49, 'UN', 'Personagem 49', 7000, 500, 200, 300, 400, 'Supai', 7, 'ataque'),
	(50, 'UN', 'Personagem 50', 500, 7000, 200, 300, 400, 'Supai', 7, 'defesa'),
	(66, 'UN', 'Personagem 51', 7000, 500, 150, 200, 300, 'Kogeki', 7, 'ataque'),
	(67, 'UN', 'Personagem 52', 500, 7000, 150, 200, 300, 'Kogeki', 7, 'defesa'),
	(68, 'UN', 'Personagem 53', 7000, 500, 150, 200, 300, 'Shubi', 7, 'ataque'),
	(69, 'UN', 'Personagem 54', 500, 7000, 150, 200, 300, 'Shubi', 7, 'defesa'),
	(70, 'UN', 'Personagem 55', 7000, 500, 150, 200, 300, 'Seisan', 7, 'ataque'),
	(71, 'UN', 'Personagem 56', 500, 7000, 150, 200, 300, 'Seisan', 7, 'defesa'),
	(72, 'UN', 'Personagem 57', 8000, 500, 150, 200, 300, 'Supai', 8, 'ataque'),
	(73, 'UN', 'Personagem 58', 500, 8000, 150, 200, 300, 'Supai', 8, 'defesa'),
	(74, 'UN', 'Personagem 59', 8000, 500, 150, 200, 300, 'Kogeki', 8, 'ataque'),
	(75, 'UN', 'Personagem 60', 500, 8000, 150, 200, 300, 'Kogeki', 8, 'defesa'),
	(76, 'UN', 'Personagem 61', 8000, 500, 150, 200, 300, 'Shubi', 8, 'ataque'),
	(77, 'UN', 'Personagem 62', 500, 8000, 150, 200, 300, 'Shubi', 8, 'defesa'),
	(78, 'UN', 'Personagem 63', 8000, 500, 150, 200, 300, 'Seisan', 8, 'ataque'),
	(79, 'UN', 'Personagem 64', 500, 8000, 150, 200, 300, 'Seisan', 8, 'defesa'),
	(80, 'UN', 'Personagem 65', 9000, 500, 150, 200, 300, 'Supai', 9, 'ataque'),
	(81, 'UN', 'Personagem 66', 500, 9000, 150, 200, 300, 'Supai', 9, 'defesa'),
	(82, 'UN', 'Personagem 67', 9000, 500, 150, 200, 300, 'Kogeki', 9, 'ataque'),
	(83, 'UN', 'Personagem 68', 500, 9000, 150, 200, 300, 'Kogeki', 9, 'defesa'),
	(84, 'UN', 'Personagem 69', 9000, 500, 150, 200, 300, 'Shubi', 9, 'ataque'),
	(85, 'UN', 'Personagem 70', 500, 9000, 150, 200, 300, 'Shubi', 9, 'defesa'),
	(86, 'UN', 'Personagem 71', 9000, 500, 150, 200, 300, 'Seisan', 9, 'ataque'),
	(87, 'UN', 'Personagem 72', 500, 9000, 150, 200, 300, 'Seisan', 9, 'defesa'),
	(88, 'UN', 'Personagem 73', 10000, 500, 150, 200, 300, 'Supai', 10, 'ataque'),
	(89, 'UN', 'Personagem 74', 500, 10000, 150, 200, 300, 'Supai', 10, 'defesa'),
	(90, 'UN', 'Personagem 75', 10000, 500, 150, 200, 300, 'Kogeki', 10, 'ataque'),
	(91, 'UN', 'Personagem 76', 500, 10000, 150, 200, 300, 'Kogeki', 10, 'defesa'),
	(92, 'UN', 'Personagem 77', 10000, 500, 150, 200, 300, 'Shubi', 10, 'ataque'),
	(93, 'UN', 'Personagem 78', 500, 10000, 150, 200, 300, 'Shubi', 10, 'defesa'),
	(94, 'UN', 'Personagem 79', 10000, 500, 150, 200, 300, 'Seisan', 10, 'ataque'),
	(95, 'UN', 'Personagem 80', 500, 10000, 150, 200, 300, 'Seisan', 10, 'defesa');
/*!40000 ALTER TABLE `unidades` ENABLE KEYS */;


-- Copiando estrutura para tabela banco1.usuarios
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `nome` varchar(45) DEFAULT 'Anonimo',
  `avatar` varchar(45) DEFAULT '0000.jpg',
  `background` varchar(45) DEFAULT '0000.jpg',
  `ip` varchar(45) DEFAULT NULL,
  `lanterior` varchar(45) DEFAULT NULL,
  `lmounth` varchar(45) DEFAULT NULL,
  `lday` varchar(45) DEFAULT NULL,
  `lvezes` varchar(45) DEFAULT '0',
  `status` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `sexo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela banco1.usuarios: ~51 rows (aproximadamente)
DELETE FROM `usuarios`;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `usuario`, `email`, `senha`, `nome`, `avatar`, `background`, `ip`, `lanterior`, `lmounth`, `lday`, `lvezes`, `status`, `cidade`, `sexo`) VALUES
	(1, 'usuarioteste', 'teste@gmail.com', 'c81e728d9d4c2f636f067f89cc14862c', 'Andre', 'PERFIL1032339.jpg', '0000.jpg', '127.0.0.1', '2014/04/07 00:40:21', '04-2014', '07-04-2014', '294', 'online', NULL, NULL),
	(7, 'asasa', 'aaa@gmail.com', 'c81e728d9d4c2f636f067f89cc14862c', 'Anonimo', 'padrao.png', '0000.jpg', '201.35.88.70', '2014/02/06 07:10:48', '02-2014', '06-02-2014', '6', 'online', 'aaaa', 'masculino'),
	(8, 'musachi', 'm35tr3@hotmail.com', 'c81e728d9d4c2f636f067f89cc14862c', 'Anonimo', 'padrao.png', '0000.jpg', '177.203.79.54', '2014/02/06 18:03:35', '02-2014', '06-02-2014', '1', 'online', 'santa maria', 'masculino'),
	(9, 'Ariane', 'ari@ari.com', 'c81e728d9d4c2f636f067f89cc14862c', 'Anonimo', 'padrao.png', '0000.jpg', '201.35.88.70', '2014/02/07 07:56:56', '02-2014', '07-02-2014', '4', 'online', 'Cac', 'feminino'),
	(10, 'thiago', 'thiago@teste.com', 'c81e728d9d4c2f636f067f89cc14862c', 'Anonimo', 'padrao.png', '0000.jpg', '177.192.176.218', '2014/02/07 03:45:53', '02-2014', '07-02-2014', '2', 'offline', 'rio de janeiro', 'masculino'),
	(11, 'ANDRE MACHADO', 'andre@gmail.com', 'c81e728d9d4c2f636f067f89cc14862c', 'Anonimo', 'padrao.png', '0000.jpg', '189.74.195.34', '2014/02/09 22:06:41', '02-2014', '09-02-2014', '2', 'offline', 'Cachoeira do Sul', 'masculino'),
	(12, 'ROBERTO', 'roberto@gmail.com', 'c81e728d9d4c2f636f067f89cc14862c', 'Anonimo', 'padrao.png', '0000.jpg', '201.35.88.70', '2014/02/07 08:04:41', '02-2014', '07-02-2014', '1', 'online', 'cachoeira do sul', 'masculino'),
	(13, 'pedrin', 'pedrin@hotmail.com', 'c81e728d9d4c2f636f067f89cc14862c', 'Anonimo', 'padrao.png', '0000.jpg', '201.35.88.70', '2014/02/07 08:05:43', '02-2014', '07-02-2014', '1', 'online', 'cachoeira', 'masculino'),
	(14, 'Guto', 'guto@gmail.com', 'c81e728d9d4c2f636f067f89cc14862c', 'Anonimo', 'padrao.png', '0000.jpg', '201.35.88.70', '2014/02/07 08:07:09', '02-2014', '07-02-2014', '1', 'online', 'cachoeira', 'masculino'),
	(15, 'marco', 'marco@gmail.com', 'c81e728d9d4c2f636f067f89cc14862c', 'Anonimo', 'padrao.png', '0000.jpg', '177.7.11.163', '2014/02/10 03:11:10', '02-2014', '10-02-2014', '34', 'offline', 'santa maria', 'masculino'),
	(16, 'Rodrigo', 'rodrigosantinim@gmail.com', 'c81e728d9d4c2f636f067f89cc14862c', 'Anonimo', 'padrao.png', '0000.jpg', '187.115.114.166', '2014/02/07 14:03:26', '02-2014', '07-02-2014', '1', 'online', 'santa maria', 'masculino'),
	(17, 'rABISCO', 'rabisco@gmail.com', 'c81e728d9d4c2f636f067f89cc14862c', 'Anonimo', 'padrao.png', '0000.jpg', '201.35.88.70', '2014/02/07 14:23:54', '02-2014', '07-02-2014', '1', 'offline', 'santa maria', 'masculino'),
	(18, 'Robson', 'pasqual@gmail.com', 'c81e728d9d4c2f636f067f89cc14862c', 'Anonimo', 'padrao.png', '0000.jpg', '200.203.30.174', '2014/02/11 15:08:43', '02-2014', '11-02-2014', '7', 'offline', 'CACHOEIRA', 'masculino'),
	(20, 'O Homem do Faca', 'facao@gmail.com', 'c81e728d9d4c2f636f067f89cc14862c', 'Anonimo', 'padrao.png', '0000.jpg', '177.4.253.68', '2014/02/08 15:49:47', '02-2014', '08-02-2014', '1', 'offline', 'cachoeira', 'masculino'),
	(21, 'Ismael', 'pranke.ismael@gmail.com', 'c81e728d9d4c2f636f067f89cc14862c', 'Anonimo', 'padrao.png', '0000.jpg', '177.32.26.125', '2014/02/08 20:16:52', '02-2014', '08-02-2014', '1', 'online', 'SÃ£o Paulo', 'masculino'),
	(22, 'jabu', 'jabu@gmail.com', 'c81e728d9d4c2f636f067f89cc14862c', 'Anonimo', 'padrao.png', '0000.jpg', '177.4.253.68', '2014/02/08 20:22:45', '02-2014', '08-02-2014', '1', 'offline', 'snata', 'masculino'),
	(23, 'bido', 'frbdbb@gmail.com', 'c81e728d9d4c2f636f067f89cc14862c', 'Anonimo', 'padrao.png', '0000.jpg', '201.79.228.155', '2014/02/09 00:01:23', '02-2014', '09-02-2014', '1', 'online', 'putero', 'masculino'),
	(24, 'Leonardo', 'leonardo@gmail.com', 'c81e728d9d4c2f636f067f89cc14862c', 'Anonimo', 'padrao.png', '0000.jpg', NULL, NULL, NULL, NULL, '0', 'cadastrado', 'cachoeira do sul', 'masculino'),
	(25, 'Robertinho', 'robertinhu@gmail.com', 'c81e728d9d4c2f636f067f89cc14862c', 'Anonimo', 'padrao.png', '0000.jpg', '200.203.30.174', '2014/02/11 03:07:58', '02-2014', '11-02-2014', '1', 'offline', 'cachoeira do sul', 'masculino'),
	(26, 'Sandrinha', 'sandrinha@gmail.com', 'c81e728d9d4c2f636f067f89cc14862c', 'Anonimo', 'padrao.png', '0000.jpg', '200.203.30.174', '2014/02/11 15:50:38', '02-2014', '11-02-2014', '1', 'offline', 'santa maria', 'feminino'),
	(27, 'Pedrinho Mad Li', 'pedrin@gmail.com', 'c81e728d9d4c2f636f067f89cc14862c', 'Anonimo', 'padrao.png', '0000.jpg', '200.203.30.174', '2014/02/11 15:58:49', '02-2014', '11-02-2014', '1', 'offline', 'c', 'masculino'),
	(28, 'Vinicius', 'vb.canteiro@gmail.com', 'c81e728d9d4c2f636f067f89cc14862c', 'Anonimo', 'padrao.png', '0000.jpg', '200.175.93.27', '2014/03/05 14:47:46', '03-2014', '05-03-2014', '2', 'online', 'POA', 'masculino'),
	(29, 'adriano vedoi', 'adrianobem@gmail.com', 'c81e728d9d4c2f636f067f89cc14862c', 'Anonimo', 'padrao.png', '0000.jpg', '189.6.194.46', '2014/02/13 00:22:55', '02-2014', '13-02-2014', '1', 'offline', 'poa', 'masculino'),
	(30, 'fabricio', 'fabricio@gmail.com', 'c81e728d9d4c2f636f067f89cc14862c', 'Anonimo', 'padrao.png', '0000.jpg', '177.184.174.23', '2014/02/14 12:49:22', '02-2014', '14-02-2014', '1', 'offline', 'cachoeira do sul', 'masculino'),
	(31, 'redbear', 'redbeargames@hotmail.com', 'c81e728d9d4c2f636f067f89cc14862c', 'Anonimo', 'PERFIL31021541.png', '0000.jpg', '189.46.168.89', '2014/02/15 13:57:56', '02-2014', '15-02-2014', '1', 'online', 'sp', 'masculino'),
	(32, 'astoolfa', 'asjas@de.de', 'c81e728d9d4c2f636f067f89cc14862c', 'Anonimo', 'padrao.png', '0000.jpg', '177.203.80.152', '2014/02/15 14:55:18', '02-2014', '15-02-2014', '1', 'online', '2', 'feminino'),
	(33, 'abc', 'abc@123.com', 'c81e728d9d4c2f636f067f89cc14862c', 'Anonimo', 'padrao.png', '0000.jpg', '189.46.168.89', '2014/02/15 20:48:22', '02-2014', '15-02-2014', '1', 'online', '123', 'masculino'),
	(34, 'maick', 'michaelmyersff6@hotmail.com', 'c81e728d9d4c2f636f067f89cc14862c', 'Anonimo', 'padrao.png', '0000.jpg', '177.72.69.56', '2014/02/16 12:51:01', '02-2014', '16-02-2014', '1', 'online', 'santa maria', 'masculino'),
	(35, 'NinjaAlien', 'jogosdanet15@hotmail.com', 'c81e728d9d4c2f636f067f89cc14862c', 'Anonimo', 'padrao.png', '0000.jpg', '201.95.11.93', '2014/02/17 17:19:30', '02-2014', '17-02-2014', '1', 'online', 'tokyo', 'masculino'),
	(36, 'rapariga', 'rapariga@gmail.com', 'c81e728d9d4c2f636f067f89cc14862c', 'Anonimo', 'padrao.png', '0000.jpg', '177.4.210.95', '2014/02/24 02:49:32', '02-2014', '24-02-2014', '1', 'offline', 'cachoeira', 'masculino'),
	(37, 'eder', 'ederbruxo2@hotmail.com', 'c81e728d9d4c2f636f067f89cc14862c', 'Anonimo', 'padrao.png', '0000.jpg', '179.130.251.158', '2014/02/25 16:13:00', '02-2014', '25-02-2014', '1', 'online', 'cachoeira do sul', 'masculino'),
	(38, 'denis', 'denis.santos1989@gmail.com', 'c81e728d9d4c2f636f067f89cc14862c', 'Anonimo', 'padrao.png', '0000.jpg', '189.47.4.252', '2014/03/03 11:17:21', '03-2014', '03-03-2014', '1', 'offline', 'sp', 'masculino'),
	(39, 'a', 'a@a.com', 'c81e728d9d4c2f636f067f89cc14862c', 'Anonimo', 'padrao.png', '0000.jpg', '189.41.32.39', '2014/03/05 05:08:50', '03-2014', '05-03-2014', '1', 'online', 'aaaa', 'masculino'),
	(40, 'sas', 'asas@sasa', 'c81e728d9d4c2f636f067f89cc14862c', 'Anonimo', 'padrao.png', '0000.jpg', '201.9.162.139', '2014/03/05 05:46:44', '03-2014', '05-03-2014', '1', 'online', 'asa', 'masculino'),
	(41, 'dalua', 'lucianobizzarri@gmail.com', 'c81e728d9d4c2f636f067f89cc14862c', 'Anonimo', 'padrao.png', '0000.jpg', '187.55.8.210', '2014/03/05 10:46:15', '03-2014', '05-03-2014', '1', 'online', 'brusque', 'masculino'),
	(42, 'jackzorr', 'jackzorr@gmail.com', 'c81e728d9d4c2f636f067f89cc14862c', 'Anonimo', 'padrao.png', '0000.jpg', '179.157.117.60', '2014/03/05 12:06:47', '03-2014', '05-03-2014', '1', 'online', 'lorena', 'masculino'),
	(43, 'mrcrowe', 'vinicius.granieri@gmail.com', 'c81e728d9d4c2f636f067f89cc14862c', 'Anonimo', 'padrao.png', '0000.jpg', '200.155.120.127', '2014/03/05 15:07:11', '03-2014', '05-03-2014', '1', 'online', 'guarujÃ¡', 'masculino'),
	(44, 'swat maximus', 'p-rafaelmarques@hotmail.com', 'c81e728d9d4c2f636f067f89cc14862c', 'Anonimo', 'padrao.png', '0000.jpg', '189.24.143.7', '2014/03/05 15:11:22', '03-2014', '05-03-2014', '1', 'online', 'volta redonda', 'masculino'),
	(45, 'Li', 'Lygames@hotmail.com', 'c81e728d9d4c2f636f067f89cc14862c', 'Anonimo', 'padrao.png', '0000.jpg', '200.144.94.41', '2014/03/06 01:28:31', '03-2014', '06-03-2014', '1', 'offline', 'SÃ£o Paulo', 'feminino'),
	(46, 'MorganBlack', 'yitschac@yahoo.com.br', 'c81e728d9d4c2f636f067f89cc14862c', 'Anonimo', 'PERFIL46033115.jpg', '0000.jpg', '110.175.239.1', '2014/03/31 09:15:02', '03-2014', '31-03-2014', '8', 'online', 'Melbourne', 'masculino'),
	(47, 'guilherme ', 'guilherme.purper@gmail.com', 'c81e728d9d4c2f636f067f89cc14862c', 'Anonimo', 'padrao.png', '0000.jpg', '201.14.225.120', '2014/03/06 16:10:39', '03-2014', '06-03-2014', '1', 'online', 'Cachoeira do Sul', 'masculino'),
	(48, 'teste', 'teste@teste.com', 'c81e728d9d4c2f636f067f89cc14862c', 'Anonimo', 'padrao.png', '0000.jpg', '187.54.176.192', '2014/03/06 17:18:21', '03-2014', '06-03-2014', '1', 'offline', 'teste', 'masculino'),
	(49, 'pato donald', 'pato@gmail.com', 'c81e728d9d4c2f636f067f89cc14862c', 'Anonimo', 'padrao.png', '0000.jpg', '200.180.160.77', '2014/03/06 17:26:43', '03-2014', '06-03-2014', '1', 'online', 'cacho', 'masculino'),
	(50, 'Andrew', 'gm_adriano_subwaylan@hotmail.com', 'c81e728d9d4c2f636f067f89cc14862c', 'Anonimo', 'padrao.png', '0000.jpg', '177.21.246.50', '2014/03/08 19:41:16', '03-2014', '08-03-2014', '1', 'online', 'navegantes', 'masculino'),
	(51, 'iZerang', 'admin@xat.com', 'c81e728d9d4c2f636f067f89cc14862c', 'Anonimo', 'padrao.png', '0000.jpg', '191.225.41.111', '2014/03/08 19:54:04', '03-2014', '08-03-2014', '1', 'online', 'Paraguay', 'masculino'),
	(52, 'teseq242141', 'teste12312@teste3123.com', 'c81e728d9d4c2f636f067f89cc14862c', 'Anonimo', 'padrao.png', '0000.jpg', '201.66.143.161', '2014/03/08 20:54:01', '03-2014', '08-03-2014', '1', 'online', 'teste', 'masculino'),
	(53, 'FILIPE', 'lipe760@yahoo.com.br', 'c81e728d9d4c2f636f067f89cc14862c', 'Anonimo', 'padrao.png', '0000.jpg', '187.15.215.53', '2014/03/08 22:09:44', '03-2014', '08-03-2014', '1', 'online', 'RIO DE JANEIRO', 'masculino'),
	(54, 'kinho', 'kinho_@hotmail.com', 'c81e728d9d4c2f636f067f89cc14862c', 'Anonimo', 'padrao.png', '0000.jpg', '187.94.196.150', '2014/03/10 00:51:04', '03-2014', '10-03-2014', '1', 'online', 'puma baldas', 'masculino'),
	(55, 'junior', 'juniornunes@divulgago.com.br', 'c81e728d9d4c2f636f067f89cc14862c', 'Anonimo', 'padrao.png', '0000.jpg', '177.67.96.244', '2014/03/23 02:24:22', '03-2014', '23-03-2014', '1', 'offline', '1256', 'masculino'),
	(56, 'dssdsd', 'teste2@gmail.com', 'c81e728d9d4c2f636f067f89cc14862c', 'Anonimo', 'padrao.png', '0000.jpg', '200.180.164.62', '2014/04/05 08:36:50', '04-2014', '05-04-2014', '1', 'offline', 'cacho', 'masculino'),
	(57, 'Daniela', 'xxxx@xxx', 'c81e728d9d4c2f636f067f89cc14862c', 'Anonimo', 'padrao.png', '0000.jpg', '187.66.43.169', '2014/04/06 23:49:33', '04-2014', '06-04-2014', '1', 'online', 'xxx', 'feminino');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
