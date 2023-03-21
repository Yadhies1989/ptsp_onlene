/*
SQLyog Ultimate v10.3 
MySQL - 5.5.5-10.6.8-MariaDB : Database - db_login
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_login` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_login`;

/*Table structure for table `tbl_daftar_diska` */

DROP TABLE IF EXISTS `tbl_daftar_diska`;

CREATE TABLE `tbl_daftar_diska` (
  `id_diska` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_perkara` varchar(200) DEFAULT NULL,
  `tgl_daftar` varchar(200) DEFAULT NULL,
  `nama_p1` varchar(200) DEFAULT NULL,
  `ayah_p1` varchar(200) DEFAULT NULL,
  `ttl_p1` varchar(200) DEFAULT NULL,
  `umur_p1` varchar(200) DEFAULT NULL,
  `nik_p1` varchar(200) DEFAULT NULL,
  `tgl_nik_p1` varchar(200) DEFAULT NULL,
  `agama_p1` varchar(200) DEFAULT NULL,
  `pendidikan_p1` varchar(200) DEFAULT NULL,
  `pekerjaan_p1` varchar(200) DEFAULT NULL,
  `alamat_p1` varchar(200) DEFAULT NULL,
  `nama_p2` varchar(200) DEFAULT NULL,
  `ayah_p2` varchar(200) DEFAULT NULL,
  `ttl_p2` varchar(200) DEFAULT NULL,
  `umur_p2` varchar(200) DEFAULT NULL,
  `nik_p2` varchar(200) DEFAULT NULL,
  `agama_p2` varchar(200) DEFAULT NULL,
  `pendidikan_p2` varchar(200) DEFAULT NULL,
  `pekerjaan_p2` varchar(200) DEFAULT NULL,
  `alamat_p2` varchar(200) DEFAULT NULL,
  `nama_anak` varchar(200) DEFAULT NULL,
  `ttl_anak` varchar(200) DEFAULT NULL,
  `umur_anak` varchar(200) DEFAULT NULL,
  `pekerjaan_anak` varchar(200) DEFAULT NULL,
  `penghasilan_anak` varchar(200) DEFAULT NULL,
  `alamat_anak` varchar(200) DEFAULT NULL,
  `nama_calon` varchar(200) DEFAULT NULL,
  `ayah_calon` varchar(200) DEFAULT NULL,
  `ttl_calon` varchar(200) DEFAULT NULL,
  `umur_calon` varchar(200) DEFAULT NULL,
  `pekerjaan_calon` varchar(200) DEFAULT NULL,
  `pendidikan_calon` varchar(200) DEFAULT NULL,
  `alamat_calon` varchar(200) DEFAULT NULL,
  `lama_mengenal_calon` varchar(200) DEFAULT NULL,
  `penghasilan_calon` varchar(200) DEFAULT NULL,
  `tgl_lamaran` varchar(200) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `jk_anak` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_diska`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_daftar_diska` */

/*Table structure for table `tbl_inovasi` */

DROP TABLE IF EXISTS `tbl_inovasi`;

CREATE TABLE `tbl_inovasi` (
  `id_inovasi` int(11) NOT NULL AUTO_INCREMENT,
  `nama_inovasi` varchar(200) DEFAULT NULL,
  `deskripsi` varchar(200) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_inovasi`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_inovasi` */

insert  into `tbl_inovasi`(`id_inovasi`,`nama_inovasi`,`deskripsi`,`image`,`created_at`,`updated_at`) values (5,'JATI','Layanan Informasi Perkara Melalui Whatsapp Gateway Melalui Nomor +62 811-3051-4686','jati2.png','2023-02-20 00:00:00','0000-00-00 00:00:00'),(6,'LANGIT CERAH','Layanan Pengiriman Akta Cerai Sampai Rumah Bekerja Sama dengan PT. POS Indonesia','langit_cerah.png','2023-02-20 00:00:00','0000-00-00 00:00:00');

/*Table structure for table `tbl_persyaratan_berperkara` */

DROP TABLE IF EXISTS `tbl_persyaratan_berperkara`;

CREATE TABLE `tbl_persyaratan_berperkara` (
  `id_persyaratan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_perkara` varchar(200) DEFAULT NULL,
  `syarat_perkara` longtext DEFAULT NULL,
  PRIMARY KEY (`id_persyaratan`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_persyaratan_berperkara` */

insert  into `tbl_persyaratan_berperkara`(`id_persyaratan`,`nama_perkara`,`syarat_perkara`) values (6,'PERSYARATAN CERAI TALAK / CERAI GUGAT','\"<ol><li>Foto Copy KTP Penggugat/Pemohon sebanyak 1 lembar yang masih berlaku dan diberi meterai 10.000, kemudian dilegalisir di Kantor Pos.</li><li>Foto Copy Kutipan/Duplikat Akta Nikah Penggugat/Pemohon sebanyak 1 lembar, dan diberi meterai 10.000 kemudian dilegalisir di Kantor Pos.</li><li>Menyerahkan surat gugatan/permohonan sebanyak 6 lembar, yang meliputi 3 rangkap untuk Majelis Hakim, 1 rangkap untuk Panitera Pengganti, 1 rangkap untuk Tergugat/Termohon dan 1 rangkap untuk dalam berkas.</li><li>Membayar Panjar Biaya Perkara melalui Bank Syariah Indonesia, yang jumlahnya sesuai dengan perhitungan Meja 1 yang tersebut dalam SKUM (Surat Kuasa Untuk Membayar).</li><li>Bagi pihak yang mengguganakan Kuasa Hukum, seperti Advokat/Pengacara harus melampirkan surat kuasa khusus dan foto copy Kartu Advokat sebanyak 1 lembar yang masih berlaku.</li><li>Bagi pihak yang menggunakan Kuasa Insidentil, harus menyertakan surat Izin dari Ketua Pengadilan Agama Bojonegoro</li><li>Bagi pihak Penggugat/Pemohon yang bekerja sebagai Pegawai Negeri Sipil (PNS) atau anggota TNI/POLRI, harus melampirkan surat izin bercerai dari atasannya.</li></ol><p><br></p>\"'),(7,'PERSYARATAN DISPENSASI NIKAH','\"<ol><li>Satu (1) lembar foto copy KTP Pemohon I yang dimateraikan Rp 10.000,- di Kantor Pos Besar;</li><li>Satu (1) lembar foto copy KTP Pemohon II yang dimateraikan Rp 10.000,- di Kantor Pos Besar;</li><li>Foto copy KK (Kartu Keluarga) Pemohon yang dimateraikan Rp 10.000,- di Kantor Pos Besar;</li><li>Satu (1) lembar foto copy akta kelahiran anak Pemohon yang dimateraikan Rp 10.000,- di Kantor Pos Besar</li><li>Satu (1) lembar foto copy akta kelahiran calon suami/istri yang dimateraikan Rp 10.000,- di Kantor Pos Besar</li><li>Satu (1) lembar foto copy ijazah terakhir anak Pemohon yang dimateraikan Rp 10.000,- di Kantor Pos Besar</li><li>Surat Keterangan Dokter Yang Menyatakan Anak Pemohon Dalam Keadaan Sehat yang dimateriakan Rp 10.000,-;</li><li>Surat Pernyataan Pemohon Yang Menyatakan Komitmen Pemohon Ikut Bertanggung Jawab Terkait Masalah Ekonomi, Sosial, Kesehatan dan Pendidikan Anak, bermeterai Rp 10.000,- (Perma Nomor 5 Tahun 2019 Pasal 16 huruf (j) )</li><li>Membayar panjar biaya perkara</li></ol><p><br></p>\"'),(8,'PERSYARATAN POLIGAMI','\"<ol><li>Satu (1) lembar foto copy akta nikah / duplikat kutipan akta nikah yang dimateraikan Rp 10.000,- (NAZEGELEN) dan distempel Kantor Pos Besar</li><li>Foto copy KTP Pemohon 1 lembar (atas bawah tidak boleh dipotong) yang dimateraikan Rp 10.000,- (NAZEGELEN) dan distempel Kantor Pos Besar</li><li>Foto copy KTP Istri 1 Pemohon 1 lembar (atas bawah tidak boleh dipotong) yang dimateraikan Rp 10.000,- (NAZEGELEN) dan distempel Kantor Pos Besar</li><li>Foto copy KTP calon istri 1 lembar (atas bawah tidak boleh dipotong) yang dimateraikan Rp 10.000,- (NAZEGELEN) dan distempel Kantor Pos Besar</li><li>Foto copy akta cerai apabila calon istri berstatus janda cerai 1 lembar (atas bawah tidak boleh dipotong) yang dimateraikan Rp 10.000,- (NAZEGELEN) dan distempel Kantor Pos Besar</li><li>Surat keterangan dari Kelurahan yang menerangkan status calon istri kedua (Misalkan janda mati, janda cerai atau masih perawan)</li><li>Foto copy akta kelahiran calon istri 1 lembar (atas bawah tidak boleh dipotong) yang dimateraikan Rp 6.000,- (NAZEGELEN) dan distempel Kantor Pos Besar</li><li>Membuat data / daftar harta gono gini / harta bersama yang diperoleh dengan istri 1 (Misalkan : Mobil dengan STNK No : …. , Tanah beserta bangunan rumah dengan sertifikat No : …. , Motor dengan STNK No : …. Dll)</li><li>Membuat surat keterangan penghasilan Pemohon yang dibuat oleh Lurah/Kepala Desa/Instansi Pemohon</li><li>Membuat daftar kekayaan dan Penghasilan Pemohon</li><li>Membuat surat pernyataan pernyataan berlaku adil</li><li>Membayar biaya panjar perkara</li><li>Membuat surat pernyataan siap dimadu</li></ol><p><br></p>\"'),(9,'PERSYARATAN PENETAPAN AHLI WARIS','\"<ol><li>Foto copy KTP dan Kartu Keluarga semua ahli waris sebanyak 1 lembar folio (tidak boleh dipotong) yang dimateraikan Rp 10.000,- (NAZEGELEN) dan distempel Kantor Pos Besar</li><li>Foto copy akta nikah Pewaris sebanyak 1 lembar yang dimateraikan Rp 10.000,- (NAZEGELEN) dan distempel Kantor Pos Besar</li><li>Foto copy Kartu Keluarga Pewaris 1 lembar yang dimateraikan Rp 10.000,- (NAZEGELEN) dan distempel Kantor Pos Besar</li><li>Foto copy akta kelahiran semua anak dari Pewaris sebanyak 1 lembar yang dimateraikan Rp 10.000,- (NAZEGELEN) dan distempel Kantor Pos Besar</li><li>Foto copy surat kematian Pewaris dan ahli waris yang lain sebanyak 1 lembar yang dimateraikan Rp 10.000,- (NAZEGELEN) dan distempel Kantor Pos Besar</li><li>Surat Penetapan Ahli Waris (Data RT-RW-Kelurahan-Kecamatan).</li><li>Surat kepemilikan harta (sertipikat/akta jual beli/buku tabungan, dll)</li><li>Surat keterangan dari Kelurahan yang diketahui Camat yang menyatakan dengan sebenarnya bahwa ahli waris (misalnya : suami, istri, anak) dari almarhum …………. guna mengurus Penetapan Ahli Waris di Pengadilan Agama Bojonegoro)</li><li>Foto copy surat keterangan ahli waris sebanyak 1 lembar yang dimateraikan Rp 10.000,- (NAZEGELEN) dan distempel Kantor Pos Besar</li></ol>\"'),(10,'PERSYARATAN PERWALIAN','\"<ol><li>Foto copy KTP 1 Pemohon 1 lembar folio 1 muka (atas bawah tidak boleh dipotong) yang dimateraikan Rp 10.000,- (NAZEGELEN) dan distempel Kantor Pos Besar</li><li>Foto copy akta nikah / akta cerai Pemohon dan orang tua anak apabila sudah bercerai yang dimateraikan Rp 10.000,- (NAZEGELEN) dan distempel Kantor Pos Besar</li><li>Foto copy 1 lembar akte kelahiran anak dimateraikan Rp 10.000,- (NAZEGELEN) dan distempel Kantor Pos Besar</li><li>Pemohon berumur minimal 30 tahun dibuktikan dengan KTP Pemohon/Akta Kelahiran</li><li>Berkelakuan baik yang dibuktikan dengan surat keterangan baik dari kepolisian</li><li>Mampu secara ekonomi dibuktikan dengan surat keterangan penghasilan dari instansi / kepala Desa</li><li>Pemohon beragama sama dengan agama yang dianut anak</li><li>Persetujuan dari suami/istri Pemohon (bagi yang sudah menikah)</li><li>Pernyataan bersedia menjadi wali</li><li>Pernyataan secara tertulis tidak pernah dan tidak akan melakukan : kekerasaan, eksploitasi, penelantaran dan perlakuan salah terhadap anak penerapan hukum fisik dengan alasan apappun termasuk untuk penegakan disiplin terhadap anak</li><li>Persetujuan tertulis dari orang tua kandung jika : (masih ada/diketahui tempat tinggalnya/cakap melakukan perbuatan hukum)</li><li>Foto copy sertifikat tanah / surat lain yang dimateraikan Rp 10.000,- (NAZEGELEN) dan distempel Kantor Pos Besar (apabila untuk menjual / membeli)</li><li>Membayar biaya panjar perkara</li></ol><p><br></p>\"'),(11,'PERSYARATAN WALI ADHOL','\"<ol><li>Surat penolakan dari KUA</li><li>Surat keterangan adanya halangan / kurang persyaratan dari KUA</li><li>Foto copy KTP Pemohon (calon suami dan istri) yang dimateraikan Rp 10.000,- (NAZEGELEN) dan distempel Kantor Pos Besar</li><li>Foto copy kartu keluarga Pemohon yang dimateraikan Rp 10.000,- (NAZEGELEN) dan distempel Kantor Pos Besar</li><li>Foto copy buku nikah orang tua Pemohon yang dimateraikan Rp 10.000,- (NAZEGELEN) dan distempel Kantor Pos Besar</li><li>Foto copy akte cerai Pemohon (bila orang tua telah bercerai) yang dimateraikan Rp 10.000,- (NAZEGELEN) dan distempel Kantor Pos Besar</li><li>Foto copy akta kelahiran Pemohon yang dimateraikan Rp 10.000,- (NAZEGELEN) dan distempel Kantor Pos Besar (Asli harus ada)</li><li>Foto copy ijazah Pemohon yang dimateraikan Rp 10.000,- (NAZEGELEN) dan distempel Kantor Pos Besar (Asli harus ada)</li><li>Membayar panjar biaya perkara</li></ol><p><br></p>\"'),(12,'PERSYARATAN PENGANGKATAN ANAK','\"<ol><li>Fotocopy surat nikah Pemohon (suami+istri) dan orang tua anak yang mau diangkat yang dimateraikan Rp. 10.000,- (NAZEGELEN) dan distempel Kantor Pos Besar</li><li>Fotocopy KTP Pemohon dan orang tua anak yang dimateraikan Rp 10.000,- (NAZEGELEN) dan distempel Kantor Pos Besar</li><li>Fotocopy Kartu Keluarga (KK) Pemohon dan orang tua anak yang dimateraikan Rp 10.000,- (NAZEGELEN) dan distempel Kantor Pos Besar</li><li>Akta Kelahiran/Surat Kelahiran Anak</li><li>Surat Persetujuan Orang Tua Anak (bila diketahui) bermaterai</li><li>Foto copy akta kelahiran anak yang mau diangkat atau surat keterangan kelahiran dari Bidan, yang dimateraikan Rp 10.000,- (NAZEGELEN) dan distempel Kantor Pos Besar</li><li>Surat keterangan kelakuan baik dari Kepolisian</li><li>Surat keterangan kesehatan dari Dokter</li><li>Surat keterangan penghasilan disahkan oleh Kelurahan</li><li>Surat rekomendasi dari Dinas Sosial</li><li>Membayar panjar biaya perkara</li></ol><p><br></p>\"'),(13,'PERSYARATAN ASAL USUL ANAK','\"<ol><li>Surat Permohonan (membuat sendiri atau melalui Posbakum) sertakan Softcopy Surat Permohonan (File) di Flashdisk atau CD saat mendaftar</li><li>Fotocopy KTP Pemohon (Suami & Istri)</li><li>Fotocopy Kutipan Akta Nikah Pemohon</li><li>Surat Keterangan Nikah dibawah tangan dari Kepala Desa / Lurah</li><li>Fotocopy Kartu Keluarga (KK) Pemohon</li><li>Fotocopy Penetapan Itsbat Nikah (jika ada)</li><li>Fotocopy Akta Kelahiran Anak atau Surat Kenal Lahir dari Bidan atau Lurah</li><li>Membayar Panjar Biaya Perkara</li></ol>\"'),(14,'PERSYARATAN GUGATAN HARTA BERSAMA','\"<ol><li>Fotocopy KTP Penggugat yang masih berlaku sebanyak 1 lembar yang diberi meterai 10.000 dan dilegalisir di Kantor Pos.</li><li>Fotocopy Kutipan/Duplikat Akta Nikah Penggugat sebanyak 1 lembar yang diberi meterai 10.000 dan dilegalisir di Kantor Pos, jika pengajuan gugatan harta bersama tersebut bersama-sama dengan gugatan perceraian.</li><li>Foto Copy Akte Cerai sebanyak 1 lembar yang diberi meterai 10.000 dan dilegalisir di Kantor Pos, jika pengajuan gugatan harta bersama setelah terjadinya perceraian Penggugat dengan Tergugat.</li><li>Membayar Panjar Biaya Perkara melalui BSM Cabang Bojonegoro yang jumlahnya sesuai dengan taksiran Meja 1 seperti tersebut dalam SKUM (Surat Kuasa Untuk Membayar).</li><li>Bagi Penggugat / Tergugat yang menggunakan Kuasa Hukum seperti Pengacara / Advokat, harus melampirkan Surat Kuasa Khusus dan Foto Copy Kartu Anggota Advokat yang masih berlaku sebanyak 1 lembar.</li><li>Foto Copy semua tanda bukti harta yang dimilki (sertipikat, akta jual beli, buku rekening bank, STNK, dll)</li><li>Surat gugatan dibuat sebanyak 6 rangkap, masing-masing 3 rangkap untuk majelis hakim, 1 rangkap untuk Panitera Pengganti, 1 rangkap untuk Tergugat, dan 1 rangkap untuk dalam berkas.</li></ol>\"'),(15,'PERSYARATAN GUGATAN WARIS','\"<ol><li>Foto Copy KTP Penggugat/Para Penggugat (jika Penggugatnya banyak) yang diberi meterai 6000 dan dilegalisir di Kantor Pos.</li><li>Silsilah Ahli waris yang dibuat oleh Kepala Desa/Lurah tempat tinggal Penggugat.</li><li>Surat Keterangan Kematian Pewaris dari Lurah/Kepala Desa tempat tinggal pewaris.</li><li>Membayar Panjar Biaya Perkara melalui BSM Cabang Bojonegoro yang jumlahnya sesuai dengan taksiran meja 1 yang tersebut dalam SKUM (Surat Kuasa Untuk Membayar).</li><li>Bagi Penggugat yang menggunakan kuasa hukum Pengacara/Advokat, harus melampirkan Surat Kuasa Khusus dan foto copy Kartu Anggota Advokat yang masih berlaku.</li><li>Surat Gugatan dibuat 3 rangkap untuk majelis Hakim, 1 rangkap untuk Panitera Pengganti, 1 rangkap untuk dalam berkas, dan sejumlah pihak dalam gugatan waris tersebut.</li></ol>\"'),(16,'PERSYARATAN ITSBAT NIKAH','\"<ol><li>Fotocopy KTP Pemohon yang dimateraikan Rp. 10.000,- (NAZEGELEN) di Kantor Pos Besar</li><li>Fotocopy KTP semua anak-anak Pemohon yang dimateraikan Rp. 6000,- (NAZEGELEN) di Kantor Pos Besar</li><li>Fotocopy Surat Keterangan dari KUA tempat menikah yang dimateraikan Rp.6000,- (NAZEGELEN) di Kantor Pos Besar</li><li>Fotocopy Kartu Keluarga (KK) Pemohon yang dimateraikan Rp. 6000,- di Kantor Pos Besar</li><li>Membayar Panjar Biaya Perkara</li></ol>\"');

/*Table structure for table `tbl_petugas` */

DROP TABLE IF EXISTS `tbl_petugas`;

CREATE TABLE `tbl_petugas` (
  `id_petugas` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) DEFAULT NULL,
  `loket` varchar(200) DEFAULT NULL,
  `deskripsi` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_petugas`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_petugas` */

insert  into `tbl_petugas`(`id_petugas`,`nama`,`loket`,`deskripsi`,`created_at`,`updated_at`,`image`) values (13,'MOH. ZAINAL ABIDIN. S.KOM','Produk Pengadilan','','2023-03-08 00:00:00','2023-03-08 00:00:00','produk_pengadilan.jpg'),(14,'M. TANTOWI NUR ANSORI, S.H','Kasir','','2023-03-08 00:00:00','2023-03-08 00:00:00','kasir.jpg'),(15,'WINDA WARA PRATIWI, S.H.','Pendaftaran','','2023-03-08 00:00:00','2023-03-08 00:00:00','pendaftaran.jpg'),(16,'NOVIA ADITIA NINGSIH, S.H.','Informasi dan Pengaduan','','2023-03-08 00:00:00','2023-03-08 00:00:00','informasi_dan_pengaduan.jpg'),(17,'NILNA HIMAWATI, S.H.','eCourt','','2023-03-08 00:00:00','2023-03-08 00:00:00','ecourt.jpg');

/*Table structure for table `tbl_user` */

DROP TABLE IF EXISTS `tbl_user`;

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `password` varchar(256) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_user` */

insert  into `tbl_user`(`id_user`,`name`,`email`,`image`,`role_id`,`is_active`,`password`,`date_created`) values (5,'Yadi Sepriadi','yadi.sepriadi@gmail.com','1a5f47f6276c7800c455d7911d863f41-removebg-preview.png',1,1,'$2y$10$6u1coz6JofBSmWhKvCEb0evHxqmb2OTHei.J5KcJKFhTcyD1RwqK2','2020-10-06 12:00:19'),(6,'Andakara Xherdan','andakara.xherdan@gmail.com','default.jpg',2,1,'$2y$10$FKvQBwQ8Aq03MMrwPsHnRurV4hqwgpAba61I7zumhaW3ZNYtvqK3C','2020-11-04 08:46:08');

/*Table structure for table `user_access_menu` */

DROP TABLE IF EXISTS `user_access_menu`;

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `user_access_menu` */

insert  into `user_access_menu`(`id`,`role_id`,`menu_id`) values (1,1,1),(2,1,2),(3,2,2),(4,1,3),(6,2,4),(7,1,4),(8,1,6),(9,1,7),(10,1,8),(11,1,9),(12,1,10),(13,1,11);

/*Table structure for table `user_menu` */

DROP TABLE IF EXISTS `user_menu`;

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu` varchar(128) CHARACTER SET utf8mb3 NOT NULL,
  `icon` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `user_menu` */

insert  into `user_menu`(`id`,`menu`,`icon`) values (1,'Admin','nav-icon fas fa-tachometer-alt'),(2,'User','nav-icon fas fa-users'),(3,'Menu','nav-icon fas fa-folder'),(7,'Petugas',' nav-icon fas fa-users'),(9,'Dashboard','nav-icon fas fa-folder'),(10,'Informasi','nav-icon fas fa-table'),(11,'Pendaftaran','nav-icon fas fa-users');

/*Table structure for table `user_role` */

DROP TABLE IF EXISTS `user_role`;

CREATE TABLE `user_role` (
  `id_role` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(128) NOT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `user_role` */

insert  into `user_role`(`id_role`,`role`) values (1,'Administrator'),(2,'Member'),(3,'Moderator');

/*Table structure for table `user_sub_menu` */

DROP TABLE IF EXISTS `user_sub_menu`;

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `user_sub_menu` */

insert  into `user_sub_menu`(`id`,`menu_id`,`title`,`url`,`icon`,`is_active`) values (1,1,'Dashboard','admin','fas fa-columns nav-icon',1),(2,2,'My Profile','user','fas fa-user nav-icon',1),(3,3,'Menu Management','menu/','fas fa-folder-open nav-icon',1),(4,3,'Submenu Management','menu/submenu/','fas fa-folder-open nav-icon',1),(9,1,'Role Management','admin/role/','nav-icon fas fa-user-tie',1),(10,2,'Edit Profile','user/edit/','nav-icon fas fa-user-edit',1),(11,2,'Change Password','user/ubahpassword/','nav-icon fas fa-key',1),(12,6,'Daftar Induk SK','arsip/','nav-icon fas fa-book-open',1),(13,7,'Petugas PTSP','petugas/','nav-icon fas fa-users',1),(14,9,'Inovasi','dashboard/inovasi','nav-icon fas fa-folder',1),(15,9,'Tentang PTSP','dashboard/tentang_ptsp','nav-icon fas fa-folder',1),(16,10,'Persyaratan Berperkara','informasi/persyaratan_berperkara','nav-icon fas fa-list',1),(17,11,'Dispensasi Kawin','pendaftaran/diska','nav-icon fas fa-list',1),(18,11,'Isbat Nikah','pendaftaran/isbat','nav-icon fas fa-table',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
