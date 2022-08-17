-- Adminer 4.8.1 MySQL 5.5.5-10.5.15-MariaDB-0+deb11u1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `bioskop`;
CREATE TABLE `bioskop` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kd_bioskop` varchar(3) NOT NULL,
  `nama_bioskop` varchar(70) NOT NULL,
  `alamat_bioskop` varchar(255) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kd_bioskop` (`kd_bioskop`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `film`;
CREATE TABLE `film` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kd_film` varchar(10) NOT NULL,
  `judul_film` varchar(150) NOT NULL,
  `tgl_launc` date NOT NULL,
  `synopys` mediumtext NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `reservasi`;
CREATE TABLE `reservasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tayangan_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tayangan_id` (`tayangan_id`),
  CONSTRAINT `reservasi_ibfk_1` FOREIGN KEY (`tayangan_id`) REFERENCES `tayangan` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `tayangan`;
CREATE TABLE `tayangan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bioskop_id` int(11) NOT NULL,
  `film_id` int(11) NOT NULL,
  `kd_tayang` varchar(30) NOT NULL,
  `judul_film` varchar(170) NOT NULL,
  `tanggal_waktu_tayang` datetime NOT NULL,
  `jumlah_kursi` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `bioskop_id` (`bioskop_id`),
  KEY `film_id` (`film_id`),
  CONSTRAINT `tayangan_ibfk_1` FOREIGN KEY (`bioskop_id`) REFERENCES `bioskop` (`id`),
  CONSTRAINT `tayangan_ibfk_2` FOREIGN KEY (`film_id`) REFERENCES `film` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- 2022-08-17 21:36:34
