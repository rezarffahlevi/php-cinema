# Host: localhost  (Version 5.5.5-10.1.10-MariaDB)
# Date: 2016-12-07 22:29:59
# Generator: MySQL-Front 5.3  (Build 5.39)

/*!40101 SET NAMES latin1 */;

#
# Structure for table "komen"
#

DROP TABLE IF EXISTS `komen`;
CREATE TABLE `komen` (
  `id_komen` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `komentar` text,
  `tgl` date DEFAULT NULL,
  PRIMARY KEY (`id_komen`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

#
# Data for table "komen"
#

INSERT INTO `komen` VALUES (2,'Sakti','Jam','2016-11-30');

#
# Structure for table "tb_film"
#

DROP TABLE IF EXISTS `tb_film`;
CREATE TABLE `tb_film` (
  `kode` varchar(12) NOT NULL DEFAULT '',
  `judul` varchar(40) NOT NULL DEFAULT '',
  `sinopsis` text,
  `cover` varchar(100) DEFAULT NULL,
  `id_tahun` int(11) DEFAULT NULL,
  `id_negara` int(11) DEFAULT NULL,
  `id_genre` int(11) DEFAULT NULL,
  `id_harga` int(11) DEFAULT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "tb_film"
#

INSERT INTO `tb_film` VALUES ('BAT12','Batman VS Superman','Beranteman beranteman gitu dehh','Lighthouse.jpg',1,2,2,2),('DES32','desert','Menyerah bukan solusi','Desert.jpg',1,2,2,2),('IND12','Ngenest','Cinaaa','Koala.jpg',1,1,3,2),('kor21','A long visit','Sedih dehh','Lighthouse.jpg',1,5,1,1),('OUIN','Ouija','Sereeemmmmm','Penguins.jpg',1,3,4,1),('par21','paranormal activity','Ga ada loh','Lighthouse.jpg',1,3,4,2);

#
# Structure for table "tb_genre"
#

DROP TABLE IF EXISTS `tb_genre`;
CREATE TABLE `tb_genre` (
  `id_genre` int(11) NOT NULL AUTO_INCREMENT,
  `genre` varchar(40) DEFAULT '',
  PRIMARY KEY (`id_genre`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

#
# Data for table "tb_genre"
#

INSERT INTO `tb_genre` VALUES (1,'Drama'),(2,'Aksi'),(3,'Komedi'),(4,'Horor');

#
# Structure for table "tb_harga"
#

DROP TABLE IF EXISTS `tb_harga`;
CREATE TABLE `tb_harga` (
  `id_harga` int(11) NOT NULL AUTO_INCREMENT,
  `harga` double DEFAULT NULL,
  PRIMARY KEY (`id_harga`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

#
# Data for table "tb_harga"
#

INSERT INTO `tb_harga` VALUES (1,25000),(2,30000),(3,35000);

#
# Structure for table "tb_jadwal"
#

DROP TABLE IF EXISTS `tb_jadwal`;
CREATE TABLE `tb_jadwal` (
  `id_jadwal` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_tayang` date DEFAULT NULL,
  `jam` varchar(40) DEFAULT NULL,
  `kode` varchar(12) DEFAULT NULL,
  `username` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id_jadwal`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

#
# Data for table "tb_jadwal"
#

INSERT INTO `tb_jadwal` VALUES (5,'2016-11-21','00:59, 01:59 dan 12:00','BAT12','admin'),(7,'2016-12-31','12:59, 12:59 dan 00:59','kor21','admin'),(8,'2016-11-09','01:00, 01:21 dan 12:01','IND12','admin'),(9,'2016-12-07','00:00, 01:59 dan 20:00','OUIN','admin'),(29,'2016-11-24','12:23, 14:03 dan 14:34','DES32','admin'),(30,'2016-11-03','00:12, 01:01 dan 14:02','par21','Nanang Bakhtiar'),(34,'2016-12-14','12:31, 02:31 dan 12:31','asfsa','Ada Mimin');

#
# Structure for table "tb_login"
#

DROP TABLE IF EXISTS `tb_login`;
CREATE TABLE `tb_login` (
  `username` varchar(40) NOT NULL DEFAULT '',
  `password` varchar(40) NOT NULL DEFAULT '',
  `level` varchar(12) NOT NULL DEFAULT '',
  `nama` varchar(40) DEFAULT NULL,
  `lahir` date DEFAULT NULL,
  `notelp` varchar(16) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `alamat` text,
  `foto` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "tb_login"
#

INSERT INTO `tb_login` VALUES ('admin','9f6e6800cfae7749eb6c486619254b9c','admin','Ada Mimin','1992-12-12','0838271824','admin@admin.com','Jonggol',NULL),('nanang','a1931ec126bbad3fa7a3fc64209fd921','admin','Nanang Bakhtiar','1999-12-12','0898123213','admin@ass','Gandul',NULL),('reza','44f437ced647ec3f40fa0841041871cd','admin','Reza Fahlevi','1992-12-12','0838271824','admin@admin.com','Jonggol\n',NULL),('Sakti','9f6e6800cfae7749eb6c486619254b9c','user','Sakti Nur Alfarizi','1991-12-12','98384462728','sakti@GMAIL.COM','Limo',NULL);

#
# Structure for table "tb_negara"
#

DROP TABLE IF EXISTS `tb_negara`;
CREATE TABLE `tb_negara` (
  `id_negara` int(11) NOT NULL AUTO_INCREMENT,
  `negara` varchar(40) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_negara`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

#
# Data for table "tb_negara"
#

INSERT INTO `tb_negara` VALUES (1,'Indonesia'),(2,'Amerika'),(3,'Inggris'),(4,'India'),(5,'Korea'),(6,'Jepang'),(7,'Finlandia');

#
# Structure for table "tb_tahun"
#

DROP TABLE IF EXISTS `tb_tahun`;
CREATE TABLE `tb_tahun` (
  `id_tahun` int(11) NOT NULL AUTO_INCREMENT,
  `tahun` year(4) NOT NULL DEFAULT '2016',
  PRIMARY KEY (`id_tahun`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Data for table "tb_tahun"
#

INSERT INTO `tb_tahun` VALUES (1,2015),(2,2016);
