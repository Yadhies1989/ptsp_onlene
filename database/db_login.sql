-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Bulan Mei 2023 pada 08.24
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_login`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_daftar_diska`
--

CREATE TABLE `tbl_daftar_diska` (
  `id_diska` int(11) NOT NULL,
  `kode` varchar(100) DEFAULT NULL,
  `nomor_perkara` varchar(100) DEFAULT NULL,
  `tgl_daftar` date DEFAULT NULL,
  `kode_kua` varchar(100) DEFAULT NULL,
  `jenis_permohonan` varchar(100) DEFAULT NULL,
  `nama_p1` varchar(200) DEFAULT NULL,
  `ayah_p1` varchar(200) DEFAULT NULL,
  `tempat_lahir_p1` varchar(200) DEFAULT NULL,
  `tgl_lahir_p1` date DEFAULT NULL,
  `umur_p1` varchar(100) DEFAULT NULL,
  `nik_p1` varchar(200) DEFAULT NULL,
  `tgl_nik_p1` varchar(100) DEFAULT NULL,
  `agama_p1` varchar(100) DEFAULT NULL,
  `pendidikan_p1` varchar(200) DEFAULT NULL,
  `pekerjaan_p1` varchar(200) DEFAULT NULL,
  `alamat_p1` varchar(200) DEFAULT NULL,
  `nama_p2` varchar(200) DEFAULT NULL,
  `ayah_p2` varchar(200) DEFAULT NULL,
  `tempat_lahir_p2` varchar(200) DEFAULT NULL,
  `tgl_lahir_p2` date DEFAULT NULL,
  `umur_p2` varchar(100) DEFAULT NULL,
  `nik_p2` varchar(200) DEFAULT NULL,
  `agama_p2` varchar(100) DEFAULT NULL,
  `pendidikan_p2` varchar(200) DEFAULT NULL,
  `pekerjaan_p2` varchar(200) DEFAULT NULL,
  `alamat_p2` varchar(200) DEFAULT NULL,
  `nama_anak` varchar(200) DEFAULT NULL,
  `nik_anak` varchar(200) DEFAULT NULL,
  `jk_anak` varchar(100) DEFAULT NULL,
  `agama_anak` varchar(100) DEFAULT NULL,
  `tempat_lahir_anak` varchar(200) DEFAULT NULL,
  `tgl_lahir_anak` date DEFAULT NULL,
  `umur_anak` varchar(100) DEFAULT NULL,
  `pekerjaan_anak` varchar(200) DEFAULT NULL,
  `pendidikan_anak` varchar(200) DEFAULT NULL,
  `penghasilan_anak` varchar(200) DEFAULT NULL,
  `alamat_anak` varchar(200) DEFAULT NULL,
  `nama_calon` varchar(200) DEFAULT NULL,
  `nik_calon` varchar(200) DEFAULT NULL,
  `jk_calon` varchar(100) DEFAULT NULL,
  `agama_calon` varchar(100) DEFAULT NULL,
  `ayah_calon` varchar(200) DEFAULT NULL,
  `tempat_lahir_calon` varchar(200) DEFAULT NULL,
  `tgl_lahir_calon` date DEFAULT NULL,
  `umur_calon` varchar(100) DEFAULT NULL,
  `pekerjaan_calon` varchar(200) DEFAULT NULL,
  `pendidikan_calon` varchar(200) DEFAULT NULL,
  `alamat_calon` varchar(200) DEFAULT NULL,
  `lama_mengenal_calon` varchar(100) DEFAULT NULL,
  `penghasilan_calon` varchar(200) DEFAULT NULL,
  `tgl_lamaran` date DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `file_ktp_p1` longtext DEFAULT NULL,
  `file_ktp_p2` longtext DEFAULT NULL,
  `file_kk` longtext DEFAULT NULL,
  `file_akta_anak` longtext DEFAULT NULL,
  `file_akta_calon` longtext DEFAULT NULL,
  `file_ijazah_anak` longtext DEFAULT NULL,
  `progress` int(11) DEFAULT NULL,
  `catatan_pa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_daftar_isbat`
--

CREATE TABLE `tbl_daftar_isbat` (
  `id_isbat` int(11) NOT NULL,
  `kode` varchar(100) NOT NULL,
  `kode_kua` varchar(100) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `nama_p1` varchar(100) NOT NULL,
  `nik_p1` varchar(100) NOT NULL,
  `umur_p1` varchar(100) NOT NULL,
  `agama_p1` varchar(100) NOT NULL,
  `pekerjaan_p1` varchar(100) NOT NULL,
  `pendidikan_p1` varchar(100) NOT NULL,
  `alamat_p1` varchar(200) NOT NULL,
  `nama_p2` varchar(100) NOT NULL,
  `nik_p2` varchar(100) NOT NULL,
  `umur_p2` varchar(100) NOT NULL,
  `agama_p2` varchar(100) NOT NULL,
  `pekerjaan_p2` varchar(100) NOT NULL,
  `pendidikan_p2` varchar(100) NOT NULL,
  `alamat_p2` varchar(200) NOT NULL,
  `tgl_nikah` date NOT NULL,
  `tempat_nikah` varchar(200) NOT NULL,
  `nama_imam` varchar(100) NOT NULL,
  `tipe_wali` varchar(100) NOT NULL,
  `nama_wali` varchar(100) NOT NULL,
  `nama_saksi1` varchar(100) NOT NULL,
  `umur_saksi1` varchar(100) NOT NULL,
  `agama_saksi1` varchar(100) NOT NULL,
  `nama_saksi2` varchar(100) NOT NULL,
  `umur_saksi2` varchar(100) NOT NULL,
  `agama_saksi2` varchar(100) NOT NULL,
  `maskawin` varchar(200) NOT NULL,
  `alasan_tipe_wali` varchar(200) NOT NULL,
  `alamat_akad` varchar(200) NOT NULL,
  `status_p1` varchar(100) NOT NULL,
  `status_p2` varchar(100) NOT NULL,
  `alamat_selama_nikah` varchar(100) NOT NULL,
  `jumlah_anak` varchar(100) NOT NULL,
  `nama_anak` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `progress` varchar(100) NOT NULL,
  `file_ktp_p1` varchar(100) NOT NULL,
  `file_ktp_p2` varchar(100) NOT NULL,
  `file_kk` varchar(100) NOT NULL,
  `file_ktp_semua_anak` varchar(100) NOT NULL,
  `file_ket_kua` varchar(100) NOT NULL,
  `file_surat_mati` varchar(100) NOT NULL,
  `tempat_lahir_p1` varchar(100) NOT NULL,
  `tgl_lahir_p1` varchar(100) NOT NULL,
  `tempat_lahir_p2` varchar(100) NOT NULL,
  `tgl_lahir_p2` varchar(100) NOT NULL,
  `jk_p1` varchar(100) NOT NULL,
  `jk_p2` varchar(100) NOT NULL,
  `tempat_lahir_saksi1` varchar(100) NOT NULL,
  `tempat_lahir_saksi2` varchar(100) NOT NULL,
  `tgl_lahir_saksi1` varchar(100) NOT NULL,
  `tgl_lahir_saksi2` varchar(100) NOT NULL,
  `catatan_pa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_inovasi`
--

CREATE TABLE `tbl_inovasi` (
  `id_inovasi` int(11) NOT NULL,
  `nama_inovasi` varchar(200) DEFAULT NULL,
  `deskripsi` varchar(200) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_inovasi`
--

INSERT INTO `tbl_inovasi` (`id_inovasi`, `nama_inovasi`, `deskripsi`, `image`, `created_at`, `updated_at`) VALUES
(5, 'JATI', 'Layanan Informasi Perkara Melalui Whatsapp Gateway Melalui Nomor +62 811-3051-4686', 'jati2.png', '2023-02-19 17:00:00', '0000-00-00 00:00:00'),
(6, 'LANGIT CERAH', 'Layanan Pengiriman Akta Cerai Sampai Rumah Bekerja Sama dengan PT. POS Indonesia', 'langit_cerah.png', '2023-02-19 17:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_persyaratan_berperkara`
--

CREATE TABLE `tbl_persyaratan_berperkara` (
  `id_persyaratan` int(11) NOT NULL,
  `nama_perkara` varchar(200) DEFAULT NULL,
  `syarat_perkara` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_persyaratan_berperkara`
--

INSERT INTO `tbl_persyaratan_berperkara` (`id_persyaratan`, `nama_perkara`, `syarat_perkara`) VALUES
(6, 'PERSYARATAN CERAI TALAK / CERAI GUGAT', '\"<ol><li>Foto Copy KTP Penggugat/Pemohon sebanyak 1 lembar yang masih berlaku dan diberi meterai 10.000, kemudian dilegalisir di Kantor Pos.</li><li>Foto Copy Kutipan/Duplikat Akta Nikah Penggugat/Pemohon sebanyak 1 lembar, dan diberi meterai 10.000 kemudian dilegalisir di Kantor Pos.</li><li>Menyerahkan surat gugatan/permohonan sebanyak 6 lembar, yang meliputi 3 rangkap untuk Majelis Hakim, 1 rangkap untuk Panitera Pengganti, 1 rangkap untuk Tergugat/Termohon dan 1 rangkap untuk dalam berkas.</li><li>Membayar Panjar Biaya Perkara melalui Bank Syariah Indonesia, yang jumlahnya sesuai dengan perhitungan Meja 1 yang tersebut dalam SKUM (Surat Kuasa Untuk Membayar).</li><li>Bagi pihak yang mengguganakan Kuasa Hukum, seperti Advokat/Pengacara harus melampirkan surat kuasa khusus dan foto copy Kartu Advokat sebanyak 1 lembar yang masih berlaku.</li><li>Bagi pihak yang menggunakan Kuasa Insidentil, harus menyertakan surat Izin dari Ketua Pengadilan Agama Bojonegoro</li><li>Bagi pihak Penggugat/Pemohon yang bekerja sebagai Pegawai Negeri Sipil (PNS) atau anggota TNI/POLRI, harus melampirkan surat izin bercerai dari atasannya.</li></ol><p><br></p>\"'),
(7, 'PERSYARATAN DISPENSASI NIKAH', '\"<ol><li>Satu (1) lembar foto copy KTP Pemohon I yang dimateraikan Rp 10.000,- di Kantor Pos Besar;</li><li>Satu (1) lembar foto copy KTP Pemohon II yang dimateraikan Rp 10.000,- di Kantor Pos Besar;</li><li>Foto copy KK (Kartu Keluarga) Pemohon yang dimateraikan Rp 10.000,- di Kantor Pos Besar;</li><li>Satu (1) lembar foto copy akta kelahiran anak Pemohon yang dimateraikan Rp 10.000,- di Kantor Pos Besar</li><li>Satu (1) lembar foto copy akta kelahiran calon suami/istri yang dimateraikan Rp 10.000,- di Kantor Pos Besar</li><li>Satu (1) lembar foto copy ijazah terakhir anak Pemohon yang dimateraikan Rp 10.000,- di Kantor Pos Besar</li><li>Surat Keterangan Dokter Yang Menyatakan Anak Pemohon Dalam Keadaan Sehat yang dimateriakan Rp 10.000,-;</li><li>Surat Pernyataan Pemohon Yang Menyatakan Komitmen Pemohon Ikut Bertanggung Jawab Terkait Masalah Ekonomi, Sosial, Kesehatan dan Pendidikan Anak, bermeterai Rp 10.000,- (Perma Nomor 5 Tahun 2019 Pasal 16 huruf (j) )</li><li>Membayar panjar biaya perkara</li></ol><p><br></p>\"'),
(8, 'PERSYARATAN POLIGAMI', '\"<ol><li>Satu (1) lembar foto copy akta nikah / duplikat kutipan akta nikah yang dimateraikan Rp 10.000,- (NAZEGELEN) dan distempel Kantor Pos Besar</li><li>Foto copy KTP Pemohon 1 lembar (atas bawah tidak boleh dipotong) yang dimateraikan Rp 10.000,- (NAZEGELEN) dan distempel Kantor Pos Besar</li><li>Foto copy KTP Istri 1 Pemohon 1 lembar (atas bawah tidak boleh dipotong) yang dimateraikan Rp 10.000,- (NAZEGELEN) dan distempel Kantor Pos Besar</li><li>Foto copy KTP calon istri 1 lembar (atas bawah tidak boleh dipotong) yang dimateraikan Rp 10.000,- (NAZEGELEN) dan distempel Kantor Pos Besar</li><li>Foto copy akta cerai apabila calon istri berstatus janda cerai 1 lembar (atas bawah tidak boleh dipotong) yang dimateraikan Rp 10.000,- (NAZEGELEN) dan distempel Kantor Pos Besar</li><li>Surat keterangan dari Kelurahan yang menerangkan status calon istri kedua (Misalkan janda mati, janda cerai atau masih perawan)</li><li>Foto copy akta kelahiran calon istri 1 lembar (atas bawah tidak boleh dipotong) yang dimateraikan Rp 6.000,- (NAZEGELEN) dan distempel Kantor Pos Besar</li><li>Membuat data / daftar harta gono gini / harta bersama yang diperoleh dengan istri 1 (Misalkan : Mobil dengan STNK No : …. , Tanah beserta bangunan rumah dengan sertifikat No : …. , Motor dengan STNK No : …. Dll)</li><li>Membuat surat keterangan penghasilan Pemohon yang dibuat oleh Lurah/Kepala Desa/Instansi Pemohon</li><li>Membuat daftar kekayaan dan Penghasilan Pemohon</li><li>Membuat surat pernyataan pernyataan berlaku adil</li><li>Membayar biaya panjar perkara</li><li>Membuat surat pernyataan siap dimadu</li></ol><p><br></p>\"'),
(9, 'PERSYARATAN PENETAPAN AHLI WARIS', '\"<ol><li>Foto copy KTP dan Kartu Keluarga semua ahli waris sebanyak 1 lembar folio (tidak boleh dipotong) yang dimateraikan Rp 10.000,- (NAZEGELEN) dan distempel Kantor Pos Besar</li><li>Foto copy akta nikah Pewaris sebanyak 1 lembar yang dimateraikan Rp 10.000,- (NAZEGELEN) dan distempel Kantor Pos Besar</li><li>Foto copy Kartu Keluarga Pewaris 1 lembar yang dimateraikan Rp 10.000,- (NAZEGELEN) dan distempel Kantor Pos Besar</li><li>Foto copy akta kelahiran semua anak dari Pewaris sebanyak 1 lembar yang dimateraikan Rp 10.000,- (NAZEGELEN) dan distempel Kantor Pos Besar</li><li>Foto copy surat kematian Pewaris dan ahli waris yang lain sebanyak 1 lembar yang dimateraikan Rp 10.000,- (NAZEGELEN) dan distempel Kantor Pos Besar</li><li>Surat Penetapan Ahli Waris (Data RT-RW-Kelurahan-Kecamatan).</li><li>Surat kepemilikan harta (sertipikat/akta jual beli/buku tabungan, dll)</li><li>Surat keterangan dari Kelurahan yang diketahui Camat yang menyatakan dengan sebenarnya bahwa ahli waris (misalnya : suami, istri, anak) dari almarhum …………. guna mengurus Penetapan Ahli Waris di Pengadilan Agama Bojonegoro)</li><li>Foto copy surat keterangan ahli waris sebanyak 1 lembar yang dimateraikan Rp 10.000,- (NAZEGELEN) dan distempel Kantor Pos Besar</li></ol>\"'),
(10, 'PERSYARATAN PERWALIAN', '\"<ol><li>Foto copy KTP 1 Pemohon 1 lembar folio 1 muka (atas bawah tidak boleh dipotong) yang dimateraikan Rp 10.000,- (NAZEGELEN) dan distempel Kantor Pos Besar</li><li>Foto copy akta nikah / akta cerai Pemohon dan orang tua anak apabila sudah bercerai yang dimateraikan Rp 10.000,- (NAZEGELEN) dan distempel Kantor Pos Besar</li><li>Foto copy 1 lembar akte kelahiran anak dimateraikan Rp 10.000,- (NAZEGELEN) dan distempel Kantor Pos Besar</li><li>Pemohon berumur minimal 30 tahun dibuktikan dengan KTP Pemohon/Akta Kelahiran</li><li>Berkelakuan baik yang dibuktikan dengan surat keterangan baik dari kepolisian</li><li>Mampu secara ekonomi dibuktikan dengan surat keterangan penghasilan dari instansi / kepala Desa</li><li>Pemohon beragama sama dengan agama yang dianut anak</li><li>Persetujuan dari suami/istri Pemohon (bagi yang sudah menikah)</li><li>Pernyataan bersedia menjadi wali</li><li>Pernyataan secara tertulis tidak pernah dan tidak akan melakukan : kekerasaan, eksploitasi, penelantaran dan perlakuan salah terhadap anak penerapan hukum fisik dengan alasan apappun termasuk untuk penegakan disiplin terhadap anak</li><li>Persetujuan tertulis dari orang tua kandung jika : (masih ada/diketahui tempat tinggalnya/cakap melakukan perbuatan hukum)</li><li>Foto copy sertifikat tanah / surat lain yang dimateraikan Rp 10.000,- (NAZEGELEN) dan distempel Kantor Pos Besar (apabila untuk menjual / membeli)</li><li>Membayar biaya panjar perkara</li></ol><p><br></p>\"'),
(11, 'PERSYARATAN WALI ADHOL', '\"<ol><li>Surat penolakan dari KUA</li><li>Surat keterangan adanya halangan / kurang persyaratan dari KUA</li><li>Foto copy KTP Pemohon (calon suami dan istri) yang dimateraikan Rp 10.000,- (NAZEGELEN) dan distempel Kantor Pos Besar</li><li>Foto copy kartu keluarga Pemohon yang dimateraikan Rp 10.000,- (NAZEGELEN) dan distempel Kantor Pos Besar</li><li>Foto copy buku nikah orang tua Pemohon yang dimateraikan Rp 10.000,- (NAZEGELEN) dan distempel Kantor Pos Besar</li><li>Foto copy akte cerai Pemohon (bila orang tua telah bercerai) yang dimateraikan Rp 10.000,- (NAZEGELEN) dan distempel Kantor Pos Besar</li><li>Foto copy akta kelahiran Pemohon yang dimateraikan Rp 10.000,- (NAZEGELEN) dan distempel Kantor Pos Besar (Asli harus ada)</li><li>Foto copy ijazah Pemohon yang dimateraikan Rp 10.000,- (NAZEGELEN) dan distempel Kantor Pos Besar (Asli harus ada)</li><li>Membayar panjar biaya perkara</li></ol><p><br></p>\"'),
(12, 'PERSYARATAN PENGANGKATAN ANAK', '\"<ol><li>Fotocopy surat nikah Pemohon (suami+istri) dan orang tua anak yang mau diangkat yang dimateraikan Rp. 10.000,- (NAZEGELEN) dan distempel Kantor Pos Besar</li><li>Fotocopy KTP Pemohon dan orang tua anak yang dimateraikan Rp 10.000,- (NAZEGELEN) dan distempel Kantor Pos Besar</li><li>Fotocopy Kartu Keluarga (KK) Pemohon dan orang tua anak yang dimateraikan Rp 10.000,- (NAZEGELEN) dan distempel Kantor Pos Besar</li><li>Akta Kelahiran/Surat Kelahiran Anak</li><li>Surat Persetujuan Orang Tua Anak (bila diketahui) bermaterai</li><li>Foto copy akta kelahiran anak yang mau diangkat atau surat keterangan kelahiran dari Bidan, yang dimateraikan Rp 10.000,- (NAZEGELEN) dan distempel Kantor Pos Besar</li><li>Surat keterangan kelakuan baik dari Kepolisian</li><li>Surat keterangan kesehatan dari Dokter</li><li>Surat keterangan penghasilan disahkan oleh Kelurahan</li><li>Surat rekomendasi dari Dinas Sosial</li><li>Membayar panjar biaya perkara</li></ol><p><br></p>\"'),
(13, 'PERSYARATAN ASAL USUL ANAK', '\"<ol><li>Surat Permohonan (membuat sendiri atau melalui Posbakum) sertakan Softcopy Surat Permohonan (File) di Flashdisk atau CD saat mendaftar</li><li>Fotocopy KTP Pemohon (Suami & Istri)</li><li>Fotocopy Kutipan Akta Nikah Pemohon</li><li>Surat Keterangan Nikah dibawah tangan dari Kepala Desa / Lurah</li><li>Fotocopy Kartu Keluarga (KK) Pemohon</li><li>Fotocopy Penetapan Itsbat Nikah (jika ada)</li><li>Fotocopy Akta Kelahiran Anak atau Surat Kenal Lahir dari Bidan atau Lurah</li><li>Membayar Panjar Biaya Perkara</li></ol>\"'),
(14, 'PERSYARATAN GUGATAN HARTA BERSAMA', '\"<ol><li>Fotocopy KTP Penggugat yang masih berlaku sebanyak 1 lembar yang diberi meterai 10.000 dan dilegalisir di Kantor Pos.</li><li>Fotocopy Kutipan/Duplikat Akta Nikah Penggugat sebanyak 1 lembar yang diberi meterai 10.000 dan dilegalisir di Kantor Pos, jika pengajuan gugatan harta bersama tersebut bersama-sama dengan gugatan perceraian.</li><li>Foto Copy Akte Cerai sebanyak 1 lembar yang diberi meterai 10.000 dan dilegalisir di Kantor Pos, jika pengajuan gugatan harta bersama setelah terjadinya perceraian Penggugat dengan Tergugat.</li><li>Membayar Panjar Biaya Perkara melalui BSM Cabang Bojonegoro yang jumlahnya sesuai dengan taksiran Meja 1 seperti tersebut dalam SKUM (Surat Kuasa Untuk Membayar).</li><li>Bagi Penggugat / Tergugat yang menggunakan Kuasa Hukum seperti Pengacara / Advokat, harus melampirkan Surat Kuasa Khusus dan Foto Copy Kartu Anggota Advokat yang masih berlaku sebanyak 1 lembar.</li><li>Foto Copy semua tanda bukti harta yang dimilki (sertipikat, akta jual beli, buku rekening bank, STNK, dll)</li><li>Surat gugatan dibuat sebanyak 6 rangkap, masing-masing 3 rangkap untuk majelis hakim, 1 rangkap untuk Panitera Pengganti, 1 rangkap untuk Tergugat, dan 1 rangkap untuk dalam berkas.</li></ol>\"'),
(15, 'PERSYARATAN GUGATAN WARIS', '\"<ol><li>Foto Copy KTP Penggugat/Para Penggugat (jika Penggugatnya banyak) yang diberi meterai 6000 dan dilegalisir di Kantor Pos.</li><li>Silsilah Ahli waris yang dibuat oleh Kepala Desa/Lurah tempat tinggal Penggugat.</li><li>Surat Keterangan Kematian Pewaris dari Lurah/Kepala Desa tempat tinggal pewaris.</li><li>Membayar Panjar Biaya Perkara melalui BSM Cabang Bojonegoro yang jumlahnya sesuai dengan taksiran meja 1 yang tersebut dalam SKUM (Surat Kuasa Untuk Membayar).</li><li>Bagi Penggugat yang menggunakan kuasa hukum Pengacara/Advokat, harus melampirkan Surat Kuasa Khusus dan foto copy Kartu Anggota Advokat yang masih berlaku.</li><li>Surat Gugatan dibuat 3 rangkap untuk majelis Hakim, 1 rangkap untuk Panitera Pengganti, 1 rangkap untuk dalam berkas, dan sejumlah pihak dalam gugatan waris tersebut.</li></ol>\"'),
(16, 'PERSYARATAN ITSBAT NIKAH', '\"<ol><li>Fotocopy KTP Pemohon yang dimateraikan Rp. 10.000,- (NAZEGELEN) di Kantor Pos Besar</li><li>Fotocopy KTP semua anak-anak Pemohon yang dimateraikan Rp. 6000,- (NAZEGELEN) di Kantor Pos Besar</li><li>Fotocopy Surat Keterangan dari KUA tempat menikah yang dimateraikan Rp.6000,- (NAZEGELEN) di Kantor Pos Besar</li><li>Fotocopy Kartu Keluarga (KK) Pemohon yang dimateraikan Rp. 6000,- di Kantor Pos Besar</li><li>Membayar Panjar Biaya Perkara</li></ol>\"');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_petugas`
--

CREATE TABLE `tbl_petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `loket` varchar(200) DEFAULT NULL,
  `deskripsi` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_petugas`
--

INSERT INTO `tbl_petugas` (`id_petugas`, `nama`, `loket`, `deskripsi`, `created_at`, `updated_at`, `image`) VALUES
(13, 'MOH. ZAINAL ABIDIN. S.KOM', 'Produk Pengadilan', '', '2023-03-07 17:00:00', '2023-03-07 17:00:00', 'produk_pengadilan.jpg'),
(14, 'M. TANTOWI NUR ANSORI, S.H', 'Kasir', '', '2023-03-07 17:00:00', '2023-03-07 17:00:00', 'kasir.jpg'),
(15, 'WINDA WARA PRATIWI, S.H.', 'Pendaftaran', '', '2023-03-07 17:00:00', '2023-03-07 17:00:00', 'pendaftaran.jpg'),
(16, 'NOVIA ADITIA NINGSIH, S.H.', 'Informasi dan Pengaduan', '', '2023-03-07 17:00:00', '2023-03-07 17:00:00', 'informasi_dan_pengaduan.jpg'),
(17, 'NILNA HIMAWATI, S.H.', 'eCourt', '', '2023-03-07 17:00:00', '2023-03-07 17:00:00', 'ecourt.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `password` varchar(256) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `name`, `email`, `image`, `role_id`, `is_active`, `password`, `date_created`) VALUES
(1, 'Yadi Sepriadi', 'yadi.sepriadi@gmail.com', '1a5f47f6276c7800c455d7911d863f41-removebg-preview.png', 1, 1, '$2y$10$6u1coz6JofBSmWhKvCEb0evHxqmb2OTHei.J5KcJKFhTcyD1RwqK2', '0000-00-00 00:00:00'),
(2, 'Andakara Xherdan', 'andakara.xherdan@gmail.com', 'default.jpg', 2, 1, '$2y$10$FKvQBwQ8Aq03MMrwPsHnRurV4hqwgpAba61I7zumhaW3ZNYtvqK3C', '0000-00-00 00:00:00'),
(3, 'Margomulyo', 'margomulyo@mail.com', 'default.jpg', 2, 1, '$2y$10$bBeLdq1xQnJ2zz4jrmS47euJGQJiga1SV2B0W4vQnQ4cf/f0MOs.u', '0000-00-00 00:00:00'),
(4, 'balen', 'bal@en.kua', 'default.jpg', 2, 1, '$2y$10$bBeLdq1xQnJ2zz4jrmS47euJGQJiga1SV2B0W4vQnQ4cf/f0MOs.u', '0000-00-00 00:00:00'),
(5, 'baureno', 'baure@no.kua', 'default.jpg', 2, 1, '$2y$10$bBeLdq1xQnJ2zz4jrmS47euJGQJiga1SV2B0W4vQnQ4cf/f0MOs.u', '0000-00-00 00:00:00'),
(6, 'bojonegoro', 'bojonego@ro.kua', 'default.jpg', 2, 1, '$2y$10$bBeLdq1xQnJ2zz4jrmS47euJGQJiga1SV2B0W4vQnQ4cf/f0MOs.u', '0000-00-00 00:00:00'),
(7, 'bubulan', 'bubul@an.kua', 'default.jpg', 2, 1, '$2y$10$bBeLdq1xQnJ2zz4jrmS47euJGQJiga1SV2B0W4vQnQ4cf/f0MOs.u', '0000-00-00 00:00:00'),
(8, 'dander', 'dand@er.kua', 'default.jpg', 2, 1, '$2y$10$bBeLdq1xQnJ2zz4jrmS47euJGQJiga1SV2B0W4vQnQ4cf/f0MOs.u', '0000-00-00 00:00:00'),
(9, 'gayam', 'gay@am.kua', 'default.jpg', 2, 1, '$2y$10$bBeLdq1xQnJ2zz4jrmS47euJGQJiga1SV2B0W4vQnQ4cf/f0MOs.u', '0000-00-00 00:00:00'),
(10, 'gondang', 'gonda@ng.kua', 'default.jpg', 2, 1, '$2y$10$bBeLdq1xQnJ2zz4jrmS47euJGQJiga1SV2B0W4vQnQ4cf/f0MOs.u', '0000-00-00 00:00:00'),
(11, 'kalitidu', 'kaliti@du.kua', 'default.jpg', 2, 1, '$2y$10$bBeLdq1xQnJ2zz4jrmS47euJGQJiga1SV2B0W4vQnQ4cf/f0MOs.u', '0000-00-00 00:00:00'),
(12, 'kanor', 'kan@or.kua', 'default.jpg', 2, 1, '$2y$10$bBeLdq1xQnJ2zz4jrmS47euJGQJiga1SV2B0W4vQnQ4cf/f0MOs.u', '0000-00-00 00:00:00'),
(13, 'kapas', 'kap@as.kua', 'default.jpg', 2, 1, '$2y$10$bBeLdq1xQnJ2zz4jrmS47euJGQJiga1SV2B0W4vQnQ4cf/f0MOs.u', '0000-00-00 00:00:00'),
(14, 'kasiman', 'kasim@an.kua', 'default.jpg', 2, 1, '$2y$10$bBeLdq1xQnJ2zz4jrmS47euJGQJiga1SV2B0W4vQnQ4cf/f0MOs.u', '0000-00-00 00:00:00'),
(15, 'kedewan', 'kedew@an.kua', 'default.jpg', 2, 1, '$2y$10$bBeLdq1xQnJ2zz4jrmS47euJGQJiga1SV2B0W4vQnQ4cf/f0MOs.u', '0000-00-00 00:00:00'),
(16, 'kedungadem', 'kedungad@em.kua', 'default.jpg', 2, 1, '$2y$10$bBeLdq1xQnJ2zz4jrmS47euJGQJiga1SV2B0W4vQnQ4cf/f0MOs.u', '0000-00-00 00:00:00'),
(17, 'kepohbaru', 'kepohba@ru.kua', 'default.jpg', 2, 1, '$2y$10$bBeLdq1xQnJ2zz4jrmS47euJGQJiga1SV2B0W4vQnQ4cf/f0MOs.u', '0000-00-00 00:00:00'),
(18, 'margomulyo', 'margomul@yo.kua', 'default.jpg', 2, 1, '$2y$10$bBeLdq1xQnJ2zz4jrmS47euJGQJiga1SV2B0W4vQnQ4cf/f0MOs.u', '0000-00-00 00:00:00'),
(19, 'malo', 'ma@lo.kua', 'default.jpg', 2, 1, '$2y$10$bBeLdq1xQnJ2zz4jrmS47euJGQJiga1SV2B0W4vQnQ4cf/f0MOs.u', '0000-00-00 00:00:00'),
(20, 'ngambon', 'ngamb@on.kua', 'default.jpg', 2, 1, '$2y$10$bBeLdq1xQnJ2zz4jrmS47euJGQJiga1SV2B0W4vQnQ4cf/f0MOs.u', '0000-00-00 00:00:00'),
(21, 'ngasem', 'ngas@em.kua', 'default.jpg', 2, 1, '$2y$10$bBeLdq1xQnJ2zz4jrmS47euJGQJiga1SV2B0W4vQnQ4cf/f0MOs.u', '0000-00-00 00:00:00'),
(22, 'ngraho', 'ngra@ho.kua', 'default.jpg', 2, 1, '$2y$10$bBeLdq1xQnJ2zz4jrmS47euJGQJiga1SV2B0W4vQnQ4cf/f0MOs.u', '0000-00-00 00:00:00'),
(23, 'padangan', 'padang@an.kua', 'default.jpg', 2, 1, '$2y$10$bBeLdq1xQnJ2zz4jrmS47euJGQJiga1SV2B0W4vQnQ4cf/f0MOs.u', '0000-00-00 00:00:00'),
(24, 'purwosari', 'purwosa@ri.kua', 'default.jpg', 2, 1, '$2y$10$bBeLdq1xQnJ2zz4jrmS47euJGQJiga1SV2B0W4vQnQ4cf/f0MOs.u', '0000-00-00 00:00:00'),
(25, 'sekar', 'sek@ar.kua', 'default.jpg', 2, 1, '$2y$10$bBeLdq1xQnJ2zz4jrmS47euJGQJiga1SV2B0W4vQnQ4cf/f0MOs.u', '0000-00-00 00:00:00'),
(26, 'sugihwaras', 'sugihwar@as.kua', 'default.jpg', 2, 1, '$2y$10$bBeLdq1xQnJ2zz4jrmS47euJGQJiga1SV2B0W4vQnQ4cf/f0MOs.u', '0000-00-00 00:00:00'),
(27, 'sukosewu', 'sukose@wu.kua', 'default.jpg', 2, 1, '$2y$10$bBeLdq1xQnJ2zz4jrmS47euJGQJiga1SV2B0W4vQnQ4cf/f0MOs.u', '0000-00-00 00:00:00'),
(28, 'sumberrejo', 'sumberre@jo.kua', 'default.jpg', 2, 1, '$2y$10$bBeLdq1xQnJ2zz4jrmS47euJGQJiga1SV2B0W4vQnQ4cf/f0MOs.u', '0000-00-00 00:00:00'),
(29, 'tambakrejo', 'tambakre@jo.kua', 'default.jpg', 2, 1, '$2y$10$bBeLdq1xQnJ2zz4jrmS47euJGQJiga1SV2B0W4vQnQ4cf/f0MOs.u', '0000-00-00 00:00:00'),
(30, 'temayang', 'temaya@ng.kua', 'default.jpg', 2, 1, '$2y$10$bBeLdq1xQnJ2zz4jrmS47euJGQJiga1SV2B0W4vQnQ4cf/f0MOs.u', '0000-00-00 00:00:00'),
(31, 'trucuk', 'truc@uk.kua', 'default.jpg', 2, 1, '$2y$10$bBeLdq1xQnJ2zz4jrmS47euJGQJiga1SV2B0W4vQnQ4cf/f0MOs.u', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3),
(6, 2, 4),
(7, 1, 4),
(8, 1, 6),
(9, 1, 7),
(10, 1, 8),
(11, 1, 9),
(12, 1, 10),
(13, 1, 11),
(14, 1, 12),
(15, 2, 11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) CHARACTER SET utf8 NOT NULL,
  `icon` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`, `icon`) VALUES
(1, 'Admin', 'nav-icon fas fa-tachometer-alt'),
(2, 'User', 'nav-icon fas fa-users'),
(3, 'Menu', 'nav-icon fas fa-folder'),
(7, 'Petugas', ' nav-icon fas fa-users'),
(9, 'Dashboard', 'nav-icon fas fa-folder'),
(10, 'Informasi', 'nav-icon fas fa-table'),
(11, 'Pendaftaran', 'nav-icon fas fa-table');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id_role` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id_role`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member'),
(3, 'Moderator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-columns nav-icon', 1),
(2, 2, 'My Profile', 'user', 'fas fa-user nav-icon', 1),
(3, 3, 'Menu Management', 'menu/', 'fas fa-folder-open nav-icon', 1),
(4, 3, 'Submenu Management', 'menu/submenu/', 'fas fa-folder-open nav-icon', 1),
(9, 1, 'Role Management', 'admin/role/', 'nav-icon fas fa-user-tie', 1),
(10, 2, 'Edit Profile', 'user/edit/', 'nav-icon fas fa-user-edit', 1),
(11, 2, 'Change Password', 'user/ubahpassword/', 'nav-icon fas fa-key', 1),
(12, 6, 'Daftar Induk SK', 'arsip/', 'nav-icon fas fa-book-open', 1),
(13, 7, 'Petugas PTSP', 'petugas/', 'nav-icon fas fa-users', 1),
(14, 9, 'Inovasi', 'dashboard/inovasi', 'nav-icon fas fa-folder', 1),
(15, 9, 'Tentang PTSP', 'dashboard/tentang_ptsp', 'nav-icon fas fa-folder', 1),
(17, 11, 'Dispensasi Kawin', 'pendaftaran/dispensasi_kawin', 'nav-icon fas fa-users', 1),
(21, 10, 'Persyaratan Berperkara', 'informasi/persyaratan_berperkara', 'nav-icon fas fa-list', 1),
(22, 11, 'Sidang Isbat', 'pendaftaran/sidang_isbat', ' nav-icon fas fa-list', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_daftar_diska`
--
ALTER TABLE `tbl_daftar_diska`
  ADD PRIMARY KEY (`id_diska`);

--
-- Indeks untuk tabel `tbl_daftar_isbat`
--
ALTER TABLE `tbl_daftar_isbat`
  ADD PRIMARY KEY (`id_isbat`);

--
-- Indeks untuk tabel `tbl_inovasi`
--
ALTER TABLE `tbl_inovasi`
  ADD PRIMARY KEY (`id_inovasi`);

--
-- Indeks untuk tabel `tbl_persyaratan_berperkara`
--
ALTER TABLE `tbl_persyaratan_berperkara`
  ADD PRIMARY KEY (`id_persyaratan`);

--
-- Indeks untuk tabel `tbl_petugas`
--
ALTER TABLE `tbl_petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_daftar_diska`
--
ALTER TABLE `tbl_daftar_diska`
  MODIFY `id_diska` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_daftar_isbat`
--
ALTER TABLE `tbl_daftar_isbat`
  MODIFY `id_isbat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_inovasi`
--
ALTER TABLE `tbl_inovasi`
  MODIFY `id_inovasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_persyaratan_berperkara`
--
ALTER TABLE `tbl_persyaratan_berperkara`
  MODIFY `id_persyaratan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tbl_petugas`
--
ALTER TABLE `tbl_petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
