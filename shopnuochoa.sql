-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 12, 2023 lúc 09:07 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shopnuochoa`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `noidung` varchar(200) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `id_taikhoan` int(11) NOT NULL,
  `ngaybinhluan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `id_sanpham`, `id_taikhoan`, `ngaybinhluan`) VALUES
(4, 'sản phẩm xịn, chất lượng cao', 1, 2, '2023-11-30'),
(15, 'Tôi rất thích mùi hương này, nó cực kỳ gợi cảm và quyến rũ', 3, 2, '2023-12-02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `slogan` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `ten`, `slogan`) VALUES
(18, 'Dior', 'Hương thơm độc đáo, quyến rũ, sang trọng và lâu phai'),
(19, 'Chanel', 'Hương thơm cao cấp, sang trọng, huyền bí'),
(23, 'Calvin Klein', 'Thời thượng, sang trọng, thanh lịch, phá cách');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id` int(11) NOT NULL,
  `id_taikhoan` int(11) NOT NULL,
  `ten_nguoinhan` varchar(50) NOT NULL,
  `email_nguoinhan` varchar(50) DEFAULT NULL,
  `sdt_nguoinhan` varchar(13) NOT NULL,
  `diachi_nguoinhan` varchar(255) NOT NULL,
  `id_pttt` tinyint(1) NOT NULL,
  `tongtien` int(11) NOT NULL,
  `tongtien_dathanhtoan` int(11) NOT NULL DEFAULT 0,
  `ngaydat` date NOT NULL DEFAULT current_timestamp(),
  `ghichu` varchar(200) NOT NULL,
  `id_trangthai` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id`, `id_taikhoan`, `ten_nguoinhan`, `email_nguoinhan`, `sdt_nguoinhan`, `diachi_nguoinhan`, `id_pttt`, `tongtien`, `tongtien_dathanhtoan`, `ngaydat`, `ghichu`, `id_trangthai`) VALUES
(191, 3, 'Bùi Đỗ Đạt ', 'adudanchoi2000@gmail.com', '0965263725', 'Số nhà 28, ngõ giữa , thanh lương,bích hòa ,thanh oai, hà nội.', 1, 249000, 0, '2023-03-30', 'Che nội dung đơn hàng dùm', 4),
(192, 2, 'Nguyễn Hồng Hải', 'Haihh@fpt.edu.vn', '0327441322', 'Phố cổ , Hoàn kiếm, Hà Nội', 1, 375000000, 0, '2023-04-30', 'Giả vờ bom hàng', 3),
(193, 2, 'Bùi Đỗ Dương', 'adudanchoi2000@gmail.com', '0988804176', 'Phú lãm, Hà đông, Hà nội', 1, 51700000, 0, '2023-01-30', 'Mua nhiều được giảm dá không sốp', 4),
(194, 2, 'Chúa tể bom hàng', 'bomhang666@gmail.com', '0988804176', 'Thâm quyến, Trung quốc', 1, 10538000, 0, '2023-12-01', 'Thích thì bom, không thích cũng bom', 1),
(195, 2, 'Bùi đỗ đạt', 'datbdph38211@fpt.edu.vn', '096526725', 'Số nhà 101 , thôn trung, Thanh oai, hà nội', 1, 1900000, 0, '2023-08-01', 'che tên đơn hàng dùng please', 2),
(196, 2, 'Bùi Thị Ánh', 'anhbt2006@gmail.com', '03854566', 'Bích hòa', 1, 5895000, 0, '2023-10-01', 'Mua tặng duy ', 5),
(303, 2, 'Bùi Đỗ Đạt', 'datbdph38211@fpt.edu.vn', '0965263725', 'Bích hòa, Thanh oai, Hà nội', 2, 7479000, 7479000, '2023-12-07', '', 4),
(304, 2, 'dat', 'datbdph38211@fpt.edu.vn', '0965263725', 'Bích hòa, Thanh oai, Hà nội', 2, 2298000, 2298000, '2023-12-08', '', 3),
(305, 2, 'dat', 'datbdph38211@fpt.edu.vn', '0965263725', 'Bích hòa, Thanh oai, Hà nội', 2, 1996000, 0, '2023-12-09', '3131', 1),
(306, 2, 'dat', 'datbdph38211@fpt.edu.vn', '0965263725', 'Bích hòa, Thanh oai, Hà nội', 2, 249000, 249000, '2023-12-09', '', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhangchitiet`
--

CREATE TABLE `donhangchitiet` (
  `id` int(11) NOT NULL,
  `id_donhang` int(11) NOT NULL,
  `id_sanpham_thetich` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhangchitiet`
--

INSERT INTO `donhangchitiet` (`id`, `id_donhang`, `id_sanpham_thetich`, `soluong`, `gia`) VALUES
(107, 191, 1, 1, 249000),
(108, 192, 7, 150, 2500000),
(109, 193, 20, 50, 850000),
(110, 193, 14, 40, 230000),
(111, 194, 2, 22, 479000),
(112, 195, 19, 5, 380000),
(113, 196, 16, 5, 1179000),
(222, 303, 1, 1, 249000),
(223, 303, 12, 1, 180000),
(224, 303, 32, 3, 2350000),
(225, 304, 1, 2, 249000),
(226, 304, 10, 1, 300000),
(227, 304, 3, 3, 500000),
(228, 305, 1, 4, 249000),
(229, 305, 3, 2, 500000),
(230, 306, 1, 1, 249000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `id` int(11) NOT NULL,
  `id_sanpham_thetich` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `id_taikhoan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`id`, `id_sanpham_thetich`, `soluong`, `id_taikhoan`) VALUES
(175, 1, 1, 2),
(176, 7, 1, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phuongthucthanhtoan`
--

CREATE TABLE `phuongthucthanhtoan` (
  `id` tinyint(1) NOT NULL,
  `pttt` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phuongthucthanhtoan`
--

INSERT INTO `phuongthucthanhtoan` (`id`, `pttt`) VALUES
(1, 'Thanh toán khi giao hàng'),
(2, 'Thanh toán bằng VNPay');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `hinh` varchar(200) DEFAULT NULL,
  `xuatxu` varchar(50) DEFAULT NULL,
  `phongcach` varchar(50) DEFAULT NULL,
  `mota` text DEFAULT NULL,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `ten`, `hinh`, `xuatxu`, `phongcach`, `mota`, `iddm`) VALUES
(1, 'Nước Hoa Christian Dior Sauvage EDP Đậm Chất Hiện ', 'nchoadiorsauvageelixir1.jpg', 'Pháp', 'Mạnh mẽ, trẻ trung, hiện đại', 'Nước hoa nam Christian Dior Sauvage EDP đậm chất hiện đại, mang đến hương thơm mạnh mẽ, nam tính. Hương gỗ hòa quyện với các tầng hương tươi mới, tạo nên bản hòa âm phong cách và lôi cuốn.', 18),
(2, 'Nước hoa Dior Homme Sport Eau De Toilette NHD1', 'Nuoc-hoa-Dior-Homme-Sport-nam-NHD1-4.jpg', 'Pháp', 'Cá Tính, lịch lãm', 'Nước hoa Dior Homme Sport NHD1 là sự kết hợp hoàn hảo giữa sự tươi mới và tinh tế. Hương thơm độc đáo với nốt hương cam bergamot, gừng nồng, và cây lúa mi, tạo nên bức tranh hương năng động, phóng khoáng và lịch lãm, phản ánh tinh thần thể thao và sang trọng.', 18),
(3, 'Nước hoa Dior Pure Poison Eau De Parfum', 'thiet-ke-chai-dior-pure-poison-2014.jpg', 'Pháp', 'Gợi cảm, quyến rũ', 'Nước hoa Dior Pure Poison Eau De Parfum là biểu tượng của sự quyến rũ và nữ tính. Hương thơm tinh tế, hòa quyện giữa hoa trắng, vani và hổ phách, tạo nên một bản hòa âm nồng nàn, quyến rũ, làm nổi bật vẻ đẹp thuần khiết và sang trọng của phụ nữ.', 18),
(4, 'Nước Hoa Miss Dior Eau De Parfum NDT10', '27609_1560716983.jpg', 'Pháp', 'Huyền bí , lâu phai', 'Nước hoa Miss Dior Eau De Parfum là biểu tượng của sự quyến rũ và tinh tế. Hương thơm ngọt ngào, nữ tính, kết hợp nốt hương hoa hồng và quả mâm xôi, tạo nên sức cuốn hút độc đáo, là biểu tượng của sự lãng mạn và phong cách đẳng cấp.', 18),
(5, 'Nước Hoa Dior Hypnotic Poison Eau De Parfum ', 'nuoc-hoa-nu-Dior-Hypnotic-Poison-edt-5.png', 'Pháp', 'Ngọt ngào, lâu phai', 'Nước hoa Dior Hypnotic Poison Eau De Parfum là sự kết hợp quyến rũ giữa hương vani, hạt hạnh nhân và hoa ngọc lan tây. Hương thơm ấn tượng và gợi cảm, tạo nên bản hòa âm nồng nàn và độc đáo, đánh bại mọi giới hạn, tạo ra một vẻ quyến rũ khó cưỡng.', 18),
(6, 'Nước Hoa Miss Dior Eau De Parfum NDT11	', 'z4915542005717_369f727b91b73aaba47a7b700b9ee4e1.jpg', 'Pháp', 'Quyến rũ, lâu phai', 'Nước hoa Miss Dior Eau De Parfum  là biểu tượng của sự quyến rũ và thanh lịch. Hương hoa cỏ trắng kết hợp với nốt hương hổ phách và hương gỗ cùng một chút ngọt ngào, tạo nên một bản năng thơm gợi cảm và tinh tế.', 18),
(7, 'Nước Hoa Calvin Klein CK Eternity Aqua Eau De Toil', '1661744998243-nuoc-hoa-calvin-klein-eternity-men-aqua-edt-200ml-2_dda461e1a19e45678c8bf3e5909e35b0_1024x1024.jpg', 'Mỹ', 'Tươi mát, quý tộc', 'Nước hoa Calvin Klein CK Eternity Aqua Eau De Toilette là sự kết hợp tinh tế giữa hương thơm tươi mới của dưa hấu, cây lục bình và lô hội. Mùi hương trẻ trung, năng động, và dễ chịu, tạo nên cảm giác sảng khoái và gần gũi với thiên nhiên, hoàn hảo cho những người yêu thích sự nhẹ nhàng và tự do.', 23),
(8, 'Nước Hoa Dạng Xịt Calvin Klein Defy Eau De Parfum', 'Calvin-Klein-Defy-Eau-de-Parfum-4.jpg', 'Mỹ', 'Nam tính, tươi mát', 'Nước hoa xịt Calvin Klein Defy Eau De Parfum là biểu tượng của sự mạnh mẽ và tự tin. Hương thơm độc đáo kết hợp nốt hương gỗ cay, hoa violet và hạt tiêu đen, tạo nên sức mạnh hiện đại và sự quyến rũ đầy cuốn hút.', 23),
(9, ' Nước hoa nam CK Eternity Intense For Men EDT là t', 'Calvin-Klein-Eternity-Intense-for-Men-EDT-100ml-_1.jpg', 'Mỹ', 'Lịch lãm , trẻ trung', 'Nước hoa nam CK Eternity Intense For Men EDT là tác phẩm nghệ thuật hòa quyện giữa hương thảo mộc và các nốt hương trầm. Mang đến một cảm giác trầm bổng, nam tính và cuốn hút với hương thơm đặc trưng, lâu phai và quyến rũ.', 23),
(10, 'Nước Hoa Calvin Klein Eternity Eau de Parfum Love', 'f8c93b217e9985c7dc88.jpg', 'Mỹ', 'Trẻ trung, năng động', 'Nước hoa Calvin Klein Eternity Eau de Parfum là biểu tượng của tình yêu vĩnh cửu và tinh tế. Hương thơm quyến rũ với hoa lan, hoa hồng và hổ phách, tạo nên sự ấm áp và sang trọng, làm bật lên vẻ đẹp lâu dài của tình cảm và thời gian.', 23),
(11, 'Nước Hoa Chanel Eau De Parfum N°5 Limited', 'chanel-n5-100ml_ac7d6be555464e2db74f567422d457d1.jpg', 'Pháp', '', 'Nước hoa Chanel Eau de Parfum N°5 Limited là phiên bản giới hạn của huyền thoại. Hương thơm quyến rũ với hương hoa aldehydic và vanilla, tạo nên một trải nghiệm sang trọng, quý phái và độc đáo, kết hợp với tinh tế của nước hoa huyền bí Chanel N°5.', 19),
(12, 'Nước Hoa Chanel No. 5 Coco Mademoiselle EDP N5', 'DSC2789-13-scaled.jpg', 'Pháp ', 'Quyến rũ', 'Nước hoa Chanel No. 5 Coco Mademoiselle EDP N5 là biểu tượng của sự quý phái và quyến rũ. Hương hoa phương Đông sang trọng, kết hợp với nốt hương cam, hoa hồng và hoắc hương, tạo nên một bản hòa âm gợi cảm và quyến rũ, phản ánh vẻ đẳng cấp và cá tính của người phụ nữ hiện đại.', 19),
(13, 'Nước Hoa Chanel Bleu De Chanel Eau de Parfum', '1577354754-2305-nuoc-hoa-chanel-bleu-edp-100ml-nam-chinh-hang.webp', 'Pháp', 'Quý phái, sang trọng', 'Nước hoa Chanel Bleu De Chanel Eau de Parfum là biểu tượng của sự tinh tế và nam tính. Hương thơm cay nồng, kết hợp với các nốt hương citruses và gỗ, tạo nên một mùi hương độc đáo, mạnh mẽ và quyến rũ, phản ánh phong cách hiện đại và sang trọng.', 19),
(14, 'Nước hoa Dior Jadore Eau De Parfum Women ', 'nuoc-hoa-dior-jadore-edp-50ml-30ml-1597658633-2a4a7c.jpg', 'Pháp', 'Thanh lịch, ngọt ngào', 'Nước hoa Dior Jadore Eau De Parfum dành cho phụ nữ là một hương thơm tinh tế thể hiện sự thanh lịch và nữ tính vô tận. Với sự kết hợp quyến rũ của các hương hoa như hoa nhài, hoa hồng và hoa nhài vàng, nước hoa tạo nên một mùi hương tinh tế và quyến rũ. Hương thơm mở ra với một sự kết hợp hài hòa, để lại một dấu ấn của sự gợi cảm và duyên dáng', 18);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham_thetich`
--

CREATE TABLE `sanpham_thetich` (
  `id` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `id_thetich` tinyint(1) NOT NULL,
  `gia` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `trangthai` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham_thetich`
--

INSERT INTO `sanpham_thetich` (`id`, `id_sanpham`, `id_thetich`, `gia`, `soluong`, `trangthai`) VALUES
(1, 1, 1, 249000, 15, 1),
(2, 1, 2, 479000, 30, 1),
(3, 1, 3, 500000, 50, 1),
(7, 3, 1, 250000, 150, 1),
(8, 3, 2, 1350000, 50, 1),
(9, 2, 1, 249000, 20, 1),
(10, 4, 1, 300000, 100, 1),
(11, 5, 2, 350000, 20, 1),
(12, 5, 1, 180000, 20, 1),
(13, 5, 3, 750000, 30, 1),
(14, 7, 1, 230000, 40, 1),
(15, 7, 2, 450000, 20, 1),
(16, 7, 3, 1179000, 20, 1),
(17, 4, 2, 550000, 100, 1),
(18, 8, 1, 200000, 100, 1),
(19, 8, 2, 380000, 150, 1),
(20, 8, 3, 850000, 50, 1),
(21, 2, 2, 479000, 12, 1),
(22, 2, 3, 1159000, 30, 1),
(23, 9, 3, 150000, 100, 1),
(24, 10, 1, 500000, 20, 1),
(25, 11, 1, 270000, 10, 1),
(26, 12, 1, 250000, 20, 1),
(27, 6, 1, 150000, 30, 1),
(28, 13, 1, 500000, 20, 1),
(29, 14, 1, 250000, 30, 1),
(30, 14, 2, 750000, 80, 1),
(31, 14, 3, 2500000, 67, 1),
(32, 3, 3, 2350000, 7, 1),
(35, 12, 2, 500000, 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `hoten` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `sdt` varchar(13) NOT NULL,
  `matkhau` varchar(50) NOT NULL,
  `diachi` varchar(255) DEFAULT NULL,
  `capbac` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `hoten`, `email`, `sdt`, `matkhau`, `diachi`, `capbac`) VALUES
(1, 'buidodat', 'datbdph38211@fpt.edu.vn', '0965263725', 'datkk2k4', 'Số nhà 28, ngõ giữa thôn thanh lươnghh', 1),
(2, 'dat', 'datbdph38211@fpt.edu.vn', '0965263725', 'datkk2k4', 'Bích hòa, Thanh oai, Hà nội', 0),
(3, 'nguyentuananh', 'anhntph46933@fpt.edu.vn', '0327441322', '123456', 'Phố cổ, Hoàn kiếm, Hà Nội', 1),
(10, 'nguyenngockhanh', 'khanhnnph48284@fpt.edu.vn', '0988804176', 'khanh123', 'Phố Cổ, Hoàn Kiếm, Hà Nội', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thetich`
--

CREATE TABLE `thetich` (
  `id` tinyint(1) NOT NULL,
  `thetich` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thetich`
--

INSERT INTO `thetich` (`id`, `thetich`) VALUES
(1, '10ml'),
(2, '50ml'),
(3, '100ml');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trangthaidonhang`
--

CREATE TABLE `trangthaidonhang` (
  `id` tinyint(1) NOT NULL,
  `trangthai_dh` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `trangthaidonhang`
--

INSERT INTO `trangthaidonhang` (`id`, `trangthai_dh`) VALUES
(1, 'Chờ xử lý'),
(2, 'Đã xác nhận'),
(3, 'Đang vận chuyển'),
(4, 'Đã hoàn thành'),
(5, 'Đã hủy');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_sanpham` (`id_sanpham`),
  ADD KEY `id_taikhoan` (`id_taikhoan`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_taikhoan` (`id_taikhoan`),
  ADD KEY `id_pttt` (`id_pttt`),
  ADD KEY `id_trangthai` (`id_trangthai`);

--
-- Chỉ mục cho bảng `donhangchitiet`
--
ALTER TABLE `donhangchitiet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_donhang` (`id_donhang`),
  ADD KEY `id_sanpham_bienthe` (`id_sanpham_thetich`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `giohang_ibfk_2` (`id_sanpham_thetich`),
  ADD KEY `id_taikhoan` (`id_taikhoan`);

--
-- Chỉ mục cho bảng `phuongthucthanhtoan`
--
ALTER TABLE `phuongthucthanhtoan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iddm` (`iddm`);

--
-- Chỉ mục cho bảng `sanpham_thetich`
--
ALTER TABLE `sanpham_thetich`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_sanpham` (`id_sanpham`),
  ADD KEY `id_thetich` (`id_thetich`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thetich`
--
ALTER TABLE `thetich`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `trangthaidonhang`
--
ALTER TABLE `trangthaidonhang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=307;

--
-- AUTO_INCREMENT cho bảng `donhangchitiet`
--
ALTER TABLE `donhangchitiet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=231;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;

--
-- AUTO_INCREMENT cho bảng `phuongthucthanhtoan`
--
ALTER TABLE `phuongthucthanhtoan`
  MODIFY `id` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `sanpham_thetich`
--
ALTER TABLE `sanpham_thetich`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `thetich`
--
ALTER TABLE `thetich`
  MODIFY `id` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `trangthaidonhang`
--
ALTER TABLE `trangthaidonhang`
  MODIFY `id` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`id_sanpham`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`id_taikhoan`) REFERENCES `taikhoan` (`id`);

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`id_taikhoan`) REFERENCES `taikhoan` (`id`),
  ADD CONSTRAINT `donhang_ibfk_2` FOREIGN KEY (`id_pttt`) REFERENCES `phuongthucthanhtoan` (`id`),
  ADD CONSTRAINT `donhang_ibfk_3` FOREIGN KEY (`id_trangthai`) REFERENCES `trangthaidonhang` (`id`);

--
-- Các ràng buộc cho bảng `donhangchitiet`
--
ALTER TABLE `donhangchitiet`
  ADD CONSTRAINT `donhangchitiet_ibfk_1` FOREIGN KEY (`id_donhang`) REFERENCES `donhang` (`id`),
  ADD CONSTRAINT `donhangchitiet_ibfk_2` FOREIGN KEY (`id_sanpham_thetich`) REFERENCES `sanpham_thetich` (`id`);

--
-- Các ràng buộc cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_ibfk_2` FOREIGN KEY (`id_sanpham_thetich`) REFERENCES `sanpham_thetich` (`id`),
  ADD CONSTRAINT `giohang_ibfk_3` FOREIGN KEY (`id_taikhoan`) REFERENCES `taikhoan` (`id`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);

--
-- Các ràng buộc cho bảng `sanpham_thetich`
--
ALTER TABLE `sanpham_thetich`
  ADD CONSTRAINT `sanpham_thetich_ibfk_1` FOREIGN KEY (`id_sanpham`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `sanpham_thetich_ibfk_2` FOREIGN KEY (`id_thetich`) REFERENCES `thetich` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
