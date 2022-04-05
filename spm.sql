-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Apr 2022 pada 08.21
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_balita`
--

CREATE TABLE `tb_balita` (
  `id` int(10) NOT NULL,
  `asembagus` int(10) NOT NULL,
  `gudang` int(10) NOT NULL,
  `wringin` int(10) NOT NULL,
  `trigonco` int(10) NOT NULL,
  `perante` int(10) NOT NULL,
  `awar` int(10) NOT NULL,
  `kedunglo` int(10) NOT NULL,
  `bantal` int(10) NOT NULL,
  `kertosari` int(10) NOT NULL,
  `mojosari` int(10) NOT NULL,
  `pkm_induk` int(10) NOT NULL,
  `luar_wilayah` int(10) NOT NULL,
  `bulan` set('januari','februari','maret','april','mei','juni','juli','agustus','september','oktober','november','desember') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_balita`
--

INSERT INTO `tb_balita` (`id`, `asembagus`, `gudang`, `wringin`, `trigonco`, `perante`, `awar`, `kedunglo`, `bantal`, `kertosari`, `mojosari`, `pkm_induk`, `luar_wilayah`, `bulan`) VALUES
(1, 26, 11, 19, 17, 15, 18, 20, 10, 27, 16, 0, 0, 'januari'),
(2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'februari'),
(3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'maret'),
(4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'april'),
(5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'mei'),
(6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'juni'),
(7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'juli'),
(8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'agustus'),
(9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'september'),
(10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'oktober'),
(11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'november'),
(12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'desember');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bbl`
--

CREATE TABLE `tb_bbl` (
  `id` int(10) NOT NULL,
  `asembagus` int(10) NOT NULL,
  `gudang` int(10) NOT NULL,
  `wringin` int(10) NOT NULL,
  `trigonco` int(10) NOT NULL,
  `perante` int(10) NOT NULL,
  `awar` int(10) NOT NULL,
  `kedunglo` int(10) NOT NULL,
  `bantal` int(10) NOT NULL,
  `kertosari` int(10) NOT NULL,
  `mojosari` int(10) NOT NULL,
  `pkm_induk` int(10) NOT NULL,
  `luar_wilayah` int(10) NOT NULL,
  `bulan` set('januari','februari','maret','april','mei','juni','juli','agustus','september','oktober','november','desember') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_bbl`
--

INSERT INTO `tb_bbl` (`id`, `asembagus`, `gudang`, `wringin`, `trigonco`, `perante`, `awar`, `kedunglo`, `bantal`, `kertosari`, `mojosari`, `pkm_induk`, `luar_wilayah`, `bulan`) VALUES
(1, 5, 6, 7, 5, 3, 4, 4, 2, 3, 6, 0, 0, 'januari'),
(2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'februari'),
(3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'maret'),
(4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'april'),
(5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'mei'),
(6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'juni'),
(7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'juli'),
(8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'agustus'),
(9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'september'),
(10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'oktober'),
(11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'november'),
(12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'desember');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bulin`
--

CREATE TABLE `tb_bulin` (
  `id` int(10) NOT NULL,
  `asembagus` int(10) NOT NULL,
  `gudang` int(10) NOT NULL,
  `wringin` int(10) NOT NULL,
  `trigonco` int(10) NOT NULL,
  `perante` int(10) NOT NULL,
  `awar` int(10) NOT NULL,
  `kedunglo` int(10) NOT NULL,
  `bantal` int(10) NOT NULL,
  `kertosari` int(10) NOT NULL,
  `mojosari` int(10) NOT NULL,
  `pkm_induk` int(10) NOT NULL,
  `luar_wilayah` int(10) NOT NULL,
  `bulan` set('januari','februari','maret','april','mei','juni','juli','agustus','september','oktober','november','desember') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_bulin`
--

INSERT INTO `tb_bulin` (`id`, `asembagus`, `gudang`, `wringin`, `trigonco`, `perante`, `awar`, `kedunglo`, `bantal`, `kertosari`, `mojosari`, `pkm_induk`, `luar_wilayah`, `bulan`) VALUES
(1, 9, 2, 4, 4, 4, 5, 5, 5, 8, 9, 0, 0, 'januari'),
(2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'februari'),
(3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'maret'),
(4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'april'),
(5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'mei'),
(6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'juni'),
(7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'juli'),
(8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'agustus'),
(9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'september'),
(10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'oktober'),
(11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'november'),
(12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'desember');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bumil`
--

CREATE TABLE `tb_bumil` (
  `id` int(10) NOT NULL,
  `asembagus` int(10) NOT NULL,
  `gudang` int(10) NOT NULL,
  `wringin` int(10) NOT NULL,
  `trigonco` int(10) NOT NULL,
  `perante` int(10) NOT NULL,
  `awar` int(10) NOT NULL,
  `kedunglo` int(10) NOT NULL,
  `bantal` int(10) NOT NULL,
  `kertosari` int(10) NOT NULL,
  `mojosari` int(10) NOT NULL,
  `pkm_induk` int(10) NOT NULL,
  `luar_wilayah` int(10) NOT NULL,
  `bulan` set('januari','februari','maret','april','mei','juni','juli','agustus','september','oktober','november','desember') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_bumil`
--

INSERT INTO `tb_bumil` (`id`, `asembagus`, `gudang`, `wringin`, `trigonco`, `perante`, `awar`, `kedunglo`, `bantal`, `kertosari`, `mojosari`, `pkm_induk`, `luar_wilayah`, `bulan`) VALUES
(1, 5, 2, 4, 1, 2, 3, 5, 3, 1, 8, 0, 0, 'januari'),
(2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'februari'),
(3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'maret'),
(4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'april'),
(5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'mei'),
(6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'juni'),
(7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'juli'),
(8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'agustus'),
(9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'september'),
(10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'oktober'),
(11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'november'),
(12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'desember');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dm`
--

CREATE TABLE `tb_dm` (
  `id` int(10) NOT NULL,
  `asembagus` int(10) NOT NULL,
  `gudang` int(10) NOT NULL,
  `wringin` int(10) NOT NULL,
  `trigonco` int(10) NOT NULL,
  `perante` int(10) NOT NULL,
  `awar` int(10) NOT NULL,
  `kedunglo` int(10) NOT NULL,
  `bantal` int(10) NOT NULL,
  `kertosari` int(10) NOT NULL,
  `mojosari` int(10) NOT NULL,
  `pkm_induk` int(10) NOT NULL,
  `luar_wilayah` int(10) NOT NULL,
  `bulan` set('januari','februari','maret','april','mei','juni','juli','agustus','september','oktober','november','desember') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_dm`
--

INSERT INTO `tb_dm` (`id`, `asembagus`, `gudang`, `wringin`, `trigonco`, `perante`, `awar`, `kedunglo`, `bantal`, `kertosari`, `mojosari`, `pkm_induk`, `luar_wilayah`, `bulan`) VALUES
(1, 25, 16, 71, 23, 5, 3, 8, 14, 0, 19, 16, 0, 'januari'),
(2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'februari'),
(3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'maret'),
(4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'april'),
(5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'mei'),
(6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'juni'),
(7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'juli'),
(8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'agustus'),
(9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'september'),
(10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'oktober'),
(11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'november'),
(12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'desember');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hiv`
--

CREATE TABLE `tb_hiv` (
  `id` int(10) NOT NULL,
  `asembagus` int(10) NOT NULL,
  `gudang` int(10) NOT NULL,
  `wringin` int(10) NOT NULL,
  `trigonco` int(10) NOT NULL,
  `perante` int(10) NOT NULL,
  `awar` int(10) NOT NULL,
  `kedunglo` int(10) NOT NULL,
  `bantal` int(10) NOT NULL,
  `kertosari` int(10) NOT NULL,
  `mojosari` int(10) NOT NULL,
  `pkm_induk` int(10) NOT NULL,
  `luar_wilayah` int(10) NOT NULL,
  `bulan` set('januari','februari','maret','april','mei','juni','juli','agustus','september','oktober','november','desember') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_hiv`
--

INSERT INTO `tb_hiv` (`id`, `asembagus`, `gudang`, `wringin`, `trigonco`, `perante`, `awar`, `kedunglo`, `bantal`, `kertosari`, `mojosari`, `pkm_induk`, `luar_wilayah`, `bulan`) VALUES
(1, 1, 1, 0, 0, 1, 0, 0, 0, 1, 2, 0, 1, 'januari'),
(2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'februari'),
(3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'maret'),
(4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'april'),
(5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'mei'),
(6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'juni'),
(7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'juli'),
(8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'agustus'),
(9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'september'),
(10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'oktober'),
(11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'november'),
(12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'desember');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ht`
--

CREATE TABLE `tb_ht` (
  `id` int(10) NOT NULL,
  `asembagus` int(10) NOT NULL,
  `gudang` int(10) NOT NULL,
  `wringin` int(10) NOT NULL,
  `trigonco` int(10) NOT NULL,
  `perante` int(10) NOT NULL,
  `awar` int(10) NOT NULL,
  `kedunglo` int(10) NOT NULL,
  `bantal` int(10) NOT NULL,
  `kertosari` int(10) NOT NULL,
  `mojosari` int(10) NOT NULL,
  `pkm_induk` int(10) NOT NULL,
  `luar_wilayah` int(10) NOT NULL,
  `bulan` set('januari','februari','maret','april','mei','juni','juli','agustus','september','oktober','november','desember') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_ht`
--

INSERT INTO `tb_ht` (`id`, `asembagus`, `gudang`, `wringin`, `trigonco`, `perante`, `awar`, `kedunglo`, `bantal`, `kertosari`, `mojosari`, `pkm_induk`, `luar_wilayah`, `bulan`) VALUES
(1, 83, 96, 88, 124, 79, 53, 62, 48, 87, 38, 14, 0, 'januari'),
(2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'februari'),
(3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'maret'),
(4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'april'),
(5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'mei'),
(6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'juni'),
(7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'juli'),
(8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'agustus'),
(9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'september'),
(10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'oktober'),
(11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'november'),
(12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'desember');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_lansia`
--

CREATE TABLE `tb_lansia` (
  `id` int(10) NOT NULL,
  `asembagus` int(10) NOT NULL,
  `gudang` int(10) NOT NULL,
  `wringin` int(10) NOT NULL,
  `trigonco` int(10) NOT NULL,
  `perante` int(10) NOT NULL,
  `awar` int(10) NOT NULL,
  `kedunglo` int(10) NOT NULL,
  `bantal` int(10) NOT NULL,
  `kertosari` int(10) NOT NULL,
  `mojosari` int(10) NOT NULL,
  `pkm_induk` int(10) NOT NULL,
  `luar_wilayah` int(10) NOT NULL,
  `bulan` set('januari','februari','maret','april','mei','juni','juli','agustus','september','oktober','november','desember') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_lansia`
--

INSERT INTO `tb_lansia` (`id`, `asembagus`, `gudang`, `wringin`, `trigonco`, `perante`, `awar`, `kedunglo`, `bantal`, `kertosari`, `mojosari`, `pkm_induk`, `luar_wilayah`, `bulan`) VALUES
(1, 159, 176, 98, 162, 61, 51, 66, 60, 31, 114, 27, 0, 'januari'),
(2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'februari'),
(3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'maret'),
(4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'april'),
(5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'mei'),
(6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'juni'),
(7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'juli'),
(8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'agustus'),
(9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'september'),
(10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'oktober'),
(11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'november'),
(12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'desember');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_laporan`
--

CREATE TABLE `tb_laporan` (
  `no` int(10) NOT NULL,
  `desa` varchar(10) NOT NULL,
  `sasaran` int(10) NOT NULL,
  `bulan` set('januari','februari','maret','april','mei','juni','juli','agustus','september','oktober','november','desember') NOT NULL,
  `capaian` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_odgj`
--

CREATE TABLE `tb_odgj` (
  `id` int(10) NOT NULL,
  `asembagus` int(10) NOT NULL,
  `gudang` int(10) NOT NULL,
  `wringin` int(10) NOT NULL,
  `trigonco` int(10) NOT NULL,
  `perante` int(10) NOT NULL,
  `awar` int(10) NOT NULL,
  `kedunglo` int(10) NOT NULL,
  `bantal` int(10) NOT NULL,
  `kertosari` int(10) NOT NULL,
  `mojosari` int(10) NOT NULL,
  `pkm_induk` int(10) NOT NULL,
  `luar_wilayah` int(10) NOT NULL,
  `bulan` set('januari','februari','maret','april','mei','juni','juli','agustus','september','oktober','november','desember') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_odgj`
--

INSERT INTO `tb_odgj` (`id`, `asembagus`, `gudang`, `wringin`, `trigonco`, `perante`, `awar`, `kedunglo`, `bantal`, `kertosari`, `mojosari`, `pkm_induk`, `luar_wilayah`, `bulan`) VALUES
(1, 19, 10, 11, 7, 7, 10, 9, 12, 12, 4, 0, 0, 'januari'),
(2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'februari'),
(3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'maret'),
(4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'april'),
(5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'mei'),
(6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'juni'),
(7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'juli'),
(8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'agustus'),
(9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'september'),
(10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'oktober'),
(11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'november'),
(12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'desember');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rekap`
--

CREATE TABLE `tb_rekap` (
  `no` int(10) NOT NULL,
  `jenis layanan dasar` varchar(20) NOT NULL,
  `target 1 tahun` int(10) NOT NULL,
  `sasaran 1 tahun` int(10) NOT NULL,
  `bulan` set('januari','februari','maret','april','mei','juni','juli','agustus','september','oktober','november','desember') NOT NULL,
  `target` int(10) NOT NULL,
  `realisasi` int(10) NOT NULL,
  `persen` int(10) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tb`
--

CREATE TABLE `tb_tb` (
  `id` int(10) NOT NULL,
  `asembagus` int(10) NOT NULL,
  `gudang` int(10) NOT NULL,
  `wringin` int(10) NOT NULL,
  `trigonco` int(10) NOT NULL,
  `perante` int(10) NOT NULL,
  `awar` int(10) NOT NULL,
  `kedunglo` int(10) NOT NULL,
  `bantal` int(10) NOT NULL,
  `kertosari` int(10) NOT NULL,
  `mojosari` int(10) NOT NULL,
  `pkm_induk` int(10) NOT NULL,
  `luar_wilayah` int(10) NOT NULL,
  `bulan` set('januari','februari','maret','april','mei','juni','juli','agustus','september','oktober','november','desember') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_tb`
--

INSERT INTO `tb_tb` (`id`, `asembagus`, `gudang`, `wringin`, `trigonco`, `perante`, `awar`, `kedunglo`, `bantal`, `kertosari`, `mojosari`, `pkm_induk`, `luar_wilayah`, `bulan`) VALUES
(1, 11, 7, 25, 3, 9, 0, 1, 3, 9, 6, 0, 2, 'januari'),
(2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'februari'),
(3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'maret'),
(4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'april'),
(5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'mei'),
(6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'juni'),
(7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'juli'),
(8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'agustus'),
(9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'september'),
(10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'oktober'),
(11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'november'),
(12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'desember');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_us`
--

CREATE TABLE `tb_us` (
  `id` int(10) NOT NULL,
  `asembagus` int(10) NOT NULL,
  `gudang` int(10) NOT NULL,
  `wringin` int(10) NOT NULL,
  `trigonco` int(10) NOT NULL,
  `perante` int(10) NOT NULL,
  `awar` int(10) NOT NULL,
  `kedunglo` int(10) NOT NULL,
  `bantal` int(10) NOT NULL,
  `kertosari` int(10) NOT NULL,
  `mojosari` int(10) NOT NULL,
  `pkm_induk` int(10) NOT NULL,
  `luar_wilayah` int(10) NOT NULL,
  `bulan` set('januari','februari','maret','april','mei','juni','juli','agustus','september','oktober','november','desember') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_us`
--

INSERT INTO `tb_us` (`id`, `asembagus`, `gudang`, `wringin`, `trigonco`, `perante`, `awar`, `kedunglo`, `bantal`, `kertosari`, `mojosari`, `pkm_induk`, `luar_wilayah`, `bulan`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'januari'),
(2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'februari'),
(3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'maret'),
(4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'april'),
(5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'mei'),
(6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'juni'),
(7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'juli'),
(8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'agustus'),
(9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'september'),
(10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'oktober'),
(11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'november'),
(12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'desember');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_uspro`
--

CREATE TABLE `tb_uspro` (
  `id` int(10) NOT NULL,
  `asembagus` int(10) NOT NULL,
  `gudang` int(10) NOT NULL,
  `wringin` int(10) NOT NULL,
  `trigonco` int(10) NOT NULL,
  `perante` int(10) NOT NULL,
  `awar` int(10) NOT NULL,
  `kedunglo` int(10) NOT NULL,
  `bantal` int(10) NOT NULL,
  `kertosari` int(10) NOT NULL,
  `mojosari` int(10) NOT NULL,
  `pkm_induk` int(10) NOT NULL,
  `luar_wilayah` int(10) NOT NULL,
  `bulan` set('januari','februari','maret','april','mei','juni','juli','agustus','september','oktober','november','desember') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_uspro`
--

INSERT INTO `tb_uspro` (`id`, `asembagus`, `gudang`, `wringin`, `trigonco`, `perante`, `awar`, `kedunglo`, `bantal`, `kertosari`, `mojosari`, `pkm_induk`, `luar_wilayah`, `bulan`) VALUES
(1, 204, 300, 351, 312, 204, 209, 263, 316, 351, 150, 79, 0, 'januari'),
(2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'februari'),
(3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'maret'),
(4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'april'),
(5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'mei'),
(6, 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'juni'),
(7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'juli'),
(8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'agustus'),
(9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'september'),
(10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'oktober'),
(11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'november'),
(12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'desember');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_balita`
--
ALTER TABLE `tb_balita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_bbl`
--
ALTER TABLE `tb_bbl`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_bulin`
--
ALTER TABLE `tb_bulin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_bumil`
--
ALTER TABLE `tb_bumil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_dm`
--
ALTER TABLE `tb_dm`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_hiv`
--
ALTER TABLE `tb_hiv`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_ht`
--
ALTER TABLE `tb_ht`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_lansia`
--
ALTER TABLE `tb_lansia`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_odgj`
--
ALTER TABLE `tb_odgj`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_tb`
--
ALTER TABLE `tb_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_us`
--
ALTER TABLE `tb_us`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_uspro`
--
ALTER TABLE `tb_uspro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_balita`
--
ALTER TABLE `tb_balita`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_bbl`
--
ALTER TABLE `tb_bbl`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_bulin`
--
ALTER TABLE `tb_bulin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_bumil`
--
ALTER TABLE `tb_bumil`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_dm`
--
ALTER TABLE `tb_dm`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_hiv`
--
ALTER TABLE `tb_hiv`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_ht`
--
ALTER TABLE `tb_ht`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_lansia`
--
ALTER TABLE `tb_lansia`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_odgj`
--
ALTER TABLE `tb_odgj`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_tb`
--
ALTER TABLE `tb_tb`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_us`
--
ALTER TABLE `tb_us`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_uspro`
--
ALTER TABLE `tb_uspro`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
