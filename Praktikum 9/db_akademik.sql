-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               10.5.5-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for db_akademik
CREATE DATABASE IF NOT EXISTS `db_akademik` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_akademik`;

-- Dumping structure for table db_akademik.bukutamu
CREATE TABLE IF NOT EXISTS `bukutamu` (
  `id_bukutamu` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `komentar` text DEFAULT NULL,
  PRIMARY KEY (`id_bukutamu`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table db_akademik.jadwal
CREATE TABLE IF NOT EXISTS `jadwal` (
  `id_jadwal` int(11) NOT NULL AUTO_INCREMENT,
  `id_matkul` int(11) NOT NULL,
  `hari` varchar(50) DEFAULT NULL,
  `jam` varchar(50) DEFAULT NULL,
  `ruang` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_jadwal`),
  KEY `id_matkul` (`id_matkul`),
  CONSTRAINT `FK__matkul` FOREIGN KEY (`id_matkul`) REFERENCES `matkul` (`id_matkul`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table db_akademik.matkul
CREATE TABLE IF NOT EXISTS `matkul` (
  `id_matkul` int(11) NOT NULL AUTO_INCREMENT,
  `nm_matkul` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_matkul`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
