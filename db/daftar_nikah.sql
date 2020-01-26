-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 22. Januari 2020 jam 16:00
-- Versi Server: 5.5.16
-- Versi PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `daftar_nikah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_daftar`
--

CREATE TABLE IF NOT EXISTS `tbl_daftar` (
  `no_daftar` varchar(15) NOT NULL,
  `tgl_nikah` date NOT NULL,
  `lokasi_nikah` varchar(50) NOT NULL,
  `nik_pengantin` varchar(30) NOT NULL,
  `nama_pengantin` varchar(50) NOT NULL,
  `wali_nikah` varchar(50) NOT NULL,
  PRIMARY KEY (`no_daftar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_daftar`
--

INSERT INTO `tbl_daftar` (`no_daftar`, `tgl_nikah`, `lokasi_nikah`, `nik_pengantin`, `nama_pengantin`, `wali_nikah`) VALUES
('001/10/2020', '2020-01-14', 'LK XII KEL. BINJAI SERBANGAN', '1223679805000001 &132456789000', 'WISNU SYAHPUTRA & ENI NOVASARI', 'SUJUD');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(15) NOT NULL,
  `password` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `level` varchar(10) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `email`, `level`, `ket`) VALUES
('admin', 25, 'kurniatanti32@gmail.', '1', 'Sebagai Operator');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
