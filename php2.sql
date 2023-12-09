-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 14, 2023 lúc 10:01 AM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `php2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `ID` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Đang xử lý',
  `date` date NOT NULL DEFAULT current_timestamp(),
  `total_money` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`ID`, `user_name`, `address`, `phone`, `status`, `date`, `total_money`, `user_id`) VALUES
(4, 'hao', '123', 123, 'Hoàn tất', '2023-06-08', 210000, 1),
(5, 'hao', '19/7c Đông Tác, Dĩ An, Bình Dương', 113, 'Hoàn tất', '2023-06-11', 370003, 1),
(6, 'hao', 'ềwgwegweagwe', 123, 'Hoàn tất', '2023-06-12', 210000, 1),
(7, 'viet', 'das', 855089572, 'Đang xử lý', '2023-06-13', 50, 1),
(8, '', '', 0, 'Đang xử lý', '2023-06-13', 1800, 1),
(9, '', '', 0, 'Đang xử lý', '2023-06-13', 1800, 1),
(10, 'thinh1', 'đường 39, hiệp Bình Chánh', 961095114, 'Đang xử lý', '2023-06-14', 400, 1),
(11, 'thinh1', 'đường 39, hiệp Bình Chánh', 961095114, 'Đang xử lý', '2023-06-14', 400, 1),
(12, '', '', 0, 'Đang xử lý', '2023-06-14', 200, 1),
(13, '', '', 0, 'Đang xử lý', '2023-06-14', 200, 1),
(14, 'viet1', 'đường 39, hiệp Bình Chánh', 961095114, 'Đang xử lý', '2023-06-14', 600, 1),
(15, 'viet1', 'đường 39, hiệp Bình Chánh', 961095114, 'Đang xử lý', '2023-06-14', 600, 1),
(16, 'viet1', 'đường 39, hiệp Bình Chánh', 961095114, 'Đang xử lý', '2023-06-14', 300, 1),
(17, 'viet1', 'đường 39, hiệp Bình Chánh', 961095114, 'Đang xử lý', '2023-06-14', 300, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_detail`
--

CREATE TABLE `bill_detail` (
  `ID` int(11) NOT NULL,
  `bill_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `bill_detail`
--

INSERT INTO `bill_detail` (`ID`, `bill_id`, `book_id`, `quantity`) VALUES
(3, 4, 2, 3),
(4, 5, 2, 1),
(5, 5, 1, 3),
(6, 6, 2, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `book`
--

CREATE TABLE `book` (
  `ID` int(11) NOT NULL,
  `book_name` varchar(50) NOT NULL,
  `book_price` int(11) NOT NULL,
  `description` varchar(200) NOT NULL,
  `thumnail` varchar(50) NOT NULL,
  `stock` int(11) NOT NULL,
  `catergory_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `book`
--

INSERT INTO `book` (`ID`, `book_name`, `book_price`, `description`, `thumnail`, `stock`, `catergory_id`) VALUES
(16, 'Ghế', 100, '', 'product-13.jpg', 2, 6),
(17, 'Giường', 200, '', 'product-14.jpg', 4, 7),
(18, 'Bàn ', 300, '', 'product-15.jpg', 5, 8),
(19, '123', 1200, '', 'Screenshot 2023-06-06 205352.png', 123, 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `book_catergory`
--

CREATE TABLE `book_catergory` (
  `ID` int(11) NOT NULL,
  `catergory_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `book_catergory`
--

INSERT INTO `book_catergory` (`ID`, `catergory_name`) VALUES
(6, 'ghế '),
(7, 'Giường'),
(8, 'Bàn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `book_detail`
--

CREATE TABLE `book_detail` (
  `ID` int(11) NOT NULL,
  `book_author` varchar(50) NOT NULL,
  `pages` int(11) NOT NULL,
  `collection` varchar(50) NOT NULL,
  `publisher` varchar(50) NOT NULL,
  `book_cover` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `book_detail`
--

INSERT INTO `book_detail` (`ID`, `book_author`, `pages`, `collection`, `publisher`, `book_cover`) VALUES
(1, '', 0, '', '', ''),
(2, '', 0, '', '', ''),
(3, 'ácasv', 123, '', 'Nhã nam', 'Bìa mềm'),
(4, 'aegaewg', 123, '', '123', 'Bìa cứng'),
(5, 'ăegweg', 0, '', 'aewgaweg', 'Bìa mềm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `pass_word` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 0,
  `avatar` varchar(50) NOT NULL DEFAULT '/views/images/avatarDefault.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`ID`, `user_name`, `pass_word`, `email`, `role`, `avatar`) VALUES
(1, 'hao', '$2y$10$kKWJNtS2IxZapotY6P9nhuICEbydozCCia9VXIqagd4uuHsc6j5KG', 'hao123@gmail.com', 0, '/views/images/avatarDefault.png	'),
(8, 'tri123', '$2y$10$V7Jidks4nEHCCd3SDet6wOaI13kYqsvO589wWxi1v34DAJGhQvAaG', 'viet@gmail.com', 0, '/views/images/avatarDefault.png'),
(9, 'admin', '$2y$10$Z7/Ep1gmSrCe2pUfJn/jQOqtJnwc3D23RRmYBEdX9PAGTVpcw6vha', 'admins@gmail.com', 1, '/views/images/avatarDefault.png');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `book_catergory`
--
ALTER TABLE `book_catergory`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `book_detail`
--
ALTER TABLE `book_detail`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `book`
--
ALTER TABLE `book`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `book_catergory`
--
ALTER TABLE `book_catergory`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `book_detail`
--
ALTER TABLE `book_detail`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
