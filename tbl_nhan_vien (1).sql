-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 19, 2021 lúc 02:55 PM
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
-- Cấu trúc bảng cho bảng `tbl_nhan_vien`
--

CREATE TABLE `tbl_nhan_vien` (
  `id_nhan_vien` int(11) NOT NULL,
  `ho_ten` text COLLATE utf8_unicode_ci NOT NULL,
  `hinh_anh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cong_viec` text COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `instagram` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_nhan_vien`
--

INSERT INTO `tbl_nhan_vien` (`id_nhan_vien`, `ho_ten`, `hinh_anh`, `cong_viec`, `facebook`, `instagram`) VALUES
(1, 'Thanh Loan', 'team-1.jpg', 'Nhân viên bồi bàn', 'https://www.facebook.com/thanh.loann.5', 'https://www.instagram.com/helloiamloan/'),
(2, 'Doãn Thực', 'team-4.jpg', 'Nhân viên thu ngân', 'https://www.facebook.com/doanthuc12.03', 'https://www.instagram.com/_mequang/'),
(3, 'Thùy Linh', 'team-3.jpg', 'Nhân viên thu ngân', 'https://www.facebook.com/tlinh.29', 'https://www.instagram.com/linh_linh2902/'),
(4, 'Diệu Linh', 'team-2.jpg', 'Nhân viên bồi bàn', 'https://www.facebook.com/eolynnn', 'https://www.instagram.com/_lynnn.xinh.gai/'),
(27, 'Thảo Anh', 'anh.jpg', 'Nhân viên trực page', 'https://www.facebook.com/nguyenthaoanh32', ''),
(28, 'Trịnh Thu Hòa', 'hoa.jpg', '0', 'https://www.facebook.com/hoatrinh.2312', ''),
(29, 'Đào Nguyệt', 'nguyet.jpg', 'Nhân viên trực page', 'https://www.facebook.com/Nguyet.7012', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_nhan_vien`
--
ALTER TABLE `tbl_nhan_vien`
  ADD PRIMARY KEY (`id_nhan_vien`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_nhan_vien`
--
ALTER TABLE `tbl_nhan_vien`
  MODIFY `id_nhan_vien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
