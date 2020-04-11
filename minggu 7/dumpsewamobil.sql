/*
Navicat MySQL Data Transfer

Source Server         : rootcon
Source Server Version : 50530
Source Host           : localhost:3306
Source Database       : sewamobil

Target Server Type    : MYSQL
Target Server Version : 50530
File Encoding         : 65001

Date: 2020-04-11 13:24:40
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for kendaraan
-- ----------------------------
DROP TABLE IF EXISTS `kendaraan`;
CREATE TABLE `kendaraan` (
  `no_plat` varchar(10) NOT NULL,
  `tahun` varchar(4) DEFAULT NULL,
  `tarif` int(15) DEFAULT NULL,
  `status` varchar(6) DEFAULT NULL,
  `id_type` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`no_plat`),
  UNIQUE KEY `NOPLAT` (`no_plat`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of kendaraan
-- ----------------------------
INSERT INTO `kendaraan` VALUES ('H 123 ABC', '2020', '200000', 'KOSONG', 'MN01');

-- ----------------------------
-- Table structure for pelanggan
-- ----------------------------
DROP TABLE IF EXISTS `pelanggan`;
CREATE TABLE `pelanggan` (
  `no_ktp` varchar(20) DEFAULT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `telepon` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pelanggan
-- ----------------------------
INSERT INTO `pelanggan` VALUES ('123456789', 'RARA', 'JL BIMA NO 14', '08123456789');

-- ----------------------------
-- Table structure for sopir
-- ----------------------------
DROP TABLE IF EXISTS `sopir`;
CREATE TABLE `sopir` (
  `id_sopir` varchar(10) DEFAULT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `telpon` varchar(15) DEFAULT NULL,
  `sim` varchar(20) DEFAULT NULL,
  `tarif` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sopir
-- ----------------------------
INSERT INTO `sopir` VALUES ('A1234', 'YUDHA', 'JL CINDE DALAM NO 12', '083345672', '9876453210', '300000');

-- ----------------------------
-- Table structure for tipe_kendaraan
-- ----------------------------
DROP TABLE IF EXISTS `tipe_kendaraan`;
CREATE TABLE `tipe_kendaraan` (
  `id_type` varchar(15) NOT NULL,
  `type` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_type`),
  UNIQUE KEY `TYPEKENDARAAN` (`id_type`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tipe_kendaraan
-- ----------------------------
INSERT INTO `tipe_kendaraan` VALUES ('MN01', 'MINI BUS');
INSERT INTO `tipe_kendaraan` VALUES ('SE01', 'SEDAN');

-- ----------------------------
-- Table structure for transaksi
-- ----------------------------
DROP TABLE IF EXISTS `transaksi`;
CREATE TABLE `transaksi` (
  `no_transaksi` varchar(10) DEFAULT NULL,
  `no_plat` varchar(10) DEFAULT NULL,
  `no_ktp` varchar(20) DEFAULT NULL,
  `tgl_pesan` date DEFAULT NULL,
  `tgl_pinjam` date DEFAULT NULL,
  `tgl_rencana_kembali` date DEFAULT NULL,
  `jam_rencana_kembali` time DEFAULT NULL,
  `tgl_kembali_realisasi` date DEFAULT NULL,
  `jam_kembali_realisasi` time DEFAULT NULL,
  `denda` int(15) DEFAULT NULL,
  `kilometer_pinjam` float DEFAULT NULL,
  `kilometer_kembali` float DEFAULT NULL,
  `bbm_pinjam` float DEFAULT NULL,
  `bbm_kembali` float DEFAULT NULL,
  `kondisi_mobil_pinjam` varchar(75) DEFAULT NULL,
  `kondisi_mobil_kembali` varchar(75) DEFAULT NULL,
  `kerusakan` varchar(75) DEFAULT NULL,
  `biaya_kerusakan` int(15) DEFAULT NULL,
  `biaya_bbm` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of transaksi
-- ----------------------------
INSERT INTO `transaksi` VALUES ('A124536', 'H 123 ABC', '123456789', '2020-03-11', '2020-03-12', '2020-03-14', '12:28:35', '2020-03-14', '12:29:00', '0', '100', '250', '20', '1', 'BAIK', 'BAIK', 'TIDAK ADA', '0', '200000');

-- ----------------------------
-- View structure for vtransaksi
-- ----------------------------
DROP VIEW IF EXISTS `vtransaksi`;
CREATE ALGORITHM=UNDEFINED DEFINER=`adismg`@`%` SQL SECURITY DEFINER  VIEW `vtransaksi` AS SELECT
transaksi.no_transaksi,
transaksi.no_ktp,
transaksi.tgl_pesan,
transaksi.tgl_pinjam,
transaksi.tgl_rencana_kembali,
transaksi.jam_rencana_kembali,
transaksi.tgl_kembali_realisasi,
transaksi.jam_kembali_realisasi,
transaksi.denda,
transaksi.kilometer_pinjam,
transaksi.kilometer_kembali,
transaksi.bbm_pinjam,
transaksi.bbm_kembali,
transaksi.kondisi_mobil_pinjam,
transaksi.kondisi_mobil_kembali,
transaksi.kerusakan,
transaksi.biaya_kerusakan,
transaksi.biaya_bbm,
pelanggan.nama,
pelanggan.alamat,
pelanggan.telepon,
transaksi.no_plat,
kendaraan.tahun,
kendaraan.tarif,
kendaraan.`status`,
kendaraan.id_type,
tipe_kendaraan.type
FROM
transaksi
LEFT JOIN pelanggan ON transaksi.no_ktp = pelanggan.no_ktp
LEFT JOIN kendaraan ON transaksi.no_plat = kendaraan.no_plat
LEFT JOIN tipe_kendaraan ON kendaraan.id_type = tipe_kendaraan.id_type ;
