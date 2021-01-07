-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 07, 2021 lúc 03:16 PM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cua_hang_banh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_dang_nhap`
--

CREATE TABLE `tbl_dang_nhap` (
  `id_dang_nhap` int(11) NOT NULL,
  `ten_dang_nhap` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `so_dien_thoai` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_dang_nhap`
--

INSERT INTO `tbl_dang_nhap` (`id_dang_nhap`, `ten_dang_nhap`, `mat_khau`, `so_dien_thoai`, `email`, `dia_chi`) VALUES
(1, 'thuylinh', 'thuylinh2902', 0, '', ''),
(2, 'hoatrinh', '123', 112, '', ''),
(11, 'ngoc', '123', 245978, 'ngoc@gmail.com', 'hà nội');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_dang_nhap`
--
ALTER TABLE `tbl_dang_nhap`
  ADD PRIMARY KEY (`id_dang_nhap`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_dang_nhap`
--
ALTER TABLE `tbl_dang_nhap`
  MODIFY `id_dang_nhap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
