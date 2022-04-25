-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 23, 2022 lúc 02:43 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `chickendev`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `feedback`
--

INSERT INTO `feedback` (`name`, `phone`, `email`, `message`) VALUES
('Bùi Thanh Nghĩa', 342345342, 'Nghiab12@gmail.com', 'Cơm rất ngon '),
('Trần Trọng Hiếu', 345456839, 'hieub12@gmail.dev.com', 'Chất lượng phục vụ và giao hàng rất tốt!'),
('Nguyễn Thành Nhân', 345584833, 'nhanvb@gmail.com', 'Giao hàng nhanh, thái độ phục vụ tốt');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `introduce`
--

CREATE TABLE `introduce` (
  `des` varchar(2000) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `introduce`
--

INSERT INTO `introduce` (`des`, `img`) VALUES
('Chicken-DEV ra đời và phát triển từ năm 2021, không chỉ đã chinh phục hàng triệu khách hàng khó tính bằng hương vị đậm đà và riêng biệt, mà còn là một trong những thương hiệu cơm gà đầu tiên sử dụng hộp nhôm giữ nhiệt, đảm bảo mỗi phần cơm ăn đến tay khách hàng sẽ luôn nóng hổi như mới nấu tại nhà. <br> <br> Hộp nhôm còn là bao bì chuyên dụng cho thức ăn nóng, được dùng phổ biến ở các hãng hàng không nên rất an toàn và thân thiện với sức khoẻ, không nảy sinh chất độc hại khi gặp nhiệt nóng.', '../images/introduce/chef.jpg'),
('Chicken-DEV đã nói khởi đầu là vô cùng khó khăn nhưng chúng tôi có một niềm tin mãnh liệt là chúng tôi sẽ làm được và lấy được niềm tin từ các thực khách khó tính nhất Chicken-DEV được phát triên hôm nay cũng một phần nhờ các khách hàng quí mến và ủng hộ. <br> <br> Chúng tôi thật sự rất biết ơn về điều đó, vì thể Chicken-DEV sẽ cố gắng hết mình để không phụ lại niềm tin của khách hàng, cho ra thật nhiều món ăn ngon bổ dưỡng xứng đang với niềm tin khách hàng đã đặt cho chúng tôi.', '../images/introduce/chicken-rice-08.jpg'),
('Chicken-DEV là chuỗi cửa hàng được sáng lập bởi Nguyễn Hữu Nhân. Những bước khởi đầu rất khó khăn nhưng cũng chính vì sự khó khăn ấy mà cái tên Chicken-DEV được nhiều người biết đến hơn và thật sự là một thương hiệu chất lượng. Vì thế chúng tôi sẽ cố gắng hoàn thiện bản thân mình nhằm mục đích giúp thương hiệu ngày càng đi lên và có được niềm tin từ các thực khách. <br> <br> Để đạt được tiêu chí ấy thì chúng tôi đã trải qua rất nhiều thách thức và các bạn cũng có thể xem thêm phần giới thiệu rất độc đáo của quán cơm gà chúng tôi ở các phần bên dưới nhé.', '../images/introduce/open-shop.jfif'),
('Và niềm tin mãnh liệt ấy được chúng tôi cụ thể hóa bằng những chuỗi ngày hành động không biết mệt mõi để cho ra thị trường một thương hiệu uy tín như ngày hôm nay, chúng tôi có các tiêu chí để nói Chicken-DEV là một trong những hãng cơm gà lớn nhất Việt Nam và vương tầm quốc tế. Không chỉ phát triển trong nước mà hãng cơm gà chúng tôi muốn được nhiều người nước ngoài biết đến. <br> <br> Và đó là các động lực để chúng tôi làm ra những món ăn chất lượng đạt chuẩn với tiêu chí ngon, bổ , rẻ phù hợp với túi tiền của mọi người.', '../images/introduce/success.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `myuser`
--

CREATE TABLE `myuser` (
  `username` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `numberphone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `myuser`
--

INSERT INTO `myuser` (`username`, `password`, `email`, `numberphone`) VALUES
('Nguyễn Hải Đăng', 'Nhan123!', 'dangb1910112@student.ctu.edu.v', '0342056043'),
('Nguyễn Hữu Nhân', 'Nhan123!', 'nhanpi00123456789@gmail.com', '0343050043'),
('Nguyễn Thành Nhân', 'Nhan123!', 'thanhnhanb1910345@student.ctu.', '0342040063'),
('Nguyễn Thị Mỹ Ngọc', 'Nhan123!', 'myngocb19102@student.ctu.edu.v', '0342056042'),
('NhanCoder1010', 'Nhan123!', 'nhanb1910114@student.ctu.edu.v', '0342040063');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `name` varchar(50) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `location` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`name`, `phone`, `location`, `address`, `note`) VALUES
('Trần Thị Tuyết Nhung', '0342040065', 'Thị xã Phước Long(40.000 VNĐ)', 'Kí túc xá khu D', 'Mua dùm 1k nước đá'),
('Nguyễn Duy Thanh', '0342053433', 'Thị trấn Phú Hòa(9.000 VNĐ)', 'Số nhà 172.10.10', '2 phần cơm thêm\r\n'),
('Nguyễn Hiếu Nghĩa', '0342056789', 'Nơi khác(50.000 VNĐ)', 'Chùa cô tám', '3 phần cơm chay ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `photoslibrary`
--

CREATE TABLE `photoslibrary` (
  `title` varchar(80) NOT NULL,
  `des` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `photoslibrary`
--

INSERT INTO `photoslibrary` (`title`, `des`) VALUES
('Chuỗi cửa hàng của Chicken DEV', 'Chicken DEV đã và đang phấn đấu để trở thành một thương hiệu vượt trội về mảng cơm Gà tại Việt Nam, với những tiêu chí được đánh giá rất cao như thực phẩm sạch, món ăn bổ dưỡng, phù hợp giá tiền với tất cả mọi người. Chicken DEV hiện đang có 20 cửa hàng trên đất nước Việt Nam, chúng tôi sẽ mở rộng và phát triển con số này lên'),
('Khách hàng của Chicken DEV', 'Khách hàng là yếu tố quan trọng nhất đối với Chicken DEV, chúng tôi đã lưu trữ lại những hình ảnh của các thực khách vào những ngày có sự kiện khuyến mãi của cửa hàng, mỗi tấm hình được xem như là một sự ủng hộ để Chicken DEV ngày càng phát triển hơn'),
('Nhân sự quán của Chicken DEV', 'Những nhân sự đã và đang gắn bó cùng Chicken DEV, chúng tôi lưu họ ở đây như 1 kĩ niệm'),
('Top những món ăn bán chạy nhất', 'Những món ăn thật ngon và bổ dưỡng lấy được niềm tin với một số lượng lớn khách hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `photoslibrarystore`
--

CREATE TABLE `photoslibrarystore` (
  `img` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `photoslibrarystore`
--

INSERT INTO `photoslibrarystore` (`img`) VALUES
('../images/provinces/angiang.jpg'),
('../images/provinces/baclieu.png'),
('../images/provinces/bacninh.png'),
('../images/provinces/bentre.jpg'),
('../images/provinces/cantho.jpg'),
('../images/provinces/dongthap.jpg'),
('../images/provinces/haiphong.jpg'),
('../images/provinces/hanoi.jpg'),
('../images/provinces/kiengiang.jpg'),
('../images/provinces/laichau.png'),
('../images/provinces/longan.jpg'),
('../images/provinces/nghean.jpg'),
('../images/provinces/ninhbinh.jpg'),
('../images/provinces/phutho.png'),
('../images/provinces/quangnam.png'),
('../images/provinces/saigon.jpg'),
('../images/provinces/thainguyen.jpg'),
('../images/provinces/travinh.jpg'),
('../images/provinces/vinglong.jpg'),
('../images/provinces/vungtau.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `type_id`, `name`, `price`, `discount`, `img`) VALUES
(1, 1, 'cơm gà áp chảo', 150000, 0, '../images/menu-homepage/chicken-rice-01.jfif'),
(2, 1, 'cơm gà lát mỏng', 25000, 0, '../images/menu-homepage/chicken-rice-02.jfif'),
(3, 1, 'combo đùi gà nướng', 99000, 0, '../images/menu-homepage/chicken-rice-03.jfif'),
(4, 1, 'cánh gà chiên xù', 49000, 0, '../images/menu-homepage/chicken-rice-04.png'),
(5, 1, 'cơm gà lá dứa', 39000, 0, '../images/menu-homepage/chicken-rice-05.jpg'),
(6, 1, 'cơm gà luộc', 25000, 0, '../images/menu-homepage/chicken-rice-06.jpg'),
(7, 2, '2 Miếng gà giòn', 60000, 10, '../images/menu-discount/discount-1.png'),
(8, 2, '4 Miếng gà giòn', 70000, 20, '../images/menu-discount/discount-2.png'),
(9, 2, '6 Miếng gà giòn', 80000, 15, '../images/menu-discount/discount-3.png'),
(10, 2, 'Cơm gà giòn', 90000, 20, '../images/menu-discount/discount-4.png'),
(11, 2, 'Gà giòn + khoai tây', 100000, 30, '../images/menu-discount/discount-5.png'),
(12, 2, 'Gà giòn + súp bí đỏ', 110000, 10, '../images/menu-discount/discount-6.png'),
(13, 2, 'Gà giòn + nước ngọt', 120000, 35, '../images/menu-discount/discount-7.png'),
(14, 2, 'Gà nhỏ + khoai tây', 50000, 12, '../images/menu-discount/discount-8.png'),
(15, 2, '1 đùi gà giòn', 140000, 12, '../images/menu-discount/discount-9.png'),
(24, 3, 'Cơm gà chiên xù', 19000, 0, '../images/menu-main/chicken-rice-1/chicken-rice-09.jpg'),
(25, 3, 'Cơm gà sả ớt', 30000, 0, '../images/menu-main/chicken-rice-1/chicken-rice-10.jpg'),
(26, 3, 'Cơm gà lá dứa', 190000, 0, '../images/menu-main/chicken-rice-1/chicken-rice-05.jpg'),
(27, 3, 'Cơm gà luộc', 90000, 0, '../images/menu-main/chicken-rice-1/chicken-rice-06.jpg'),
(28, 3, 'Cơm gà phô mai', 70000, 0, '../images/menu-main/chicken-rice-1/chicken-rice-11.jpg'),
(29, 3, 'Cơm gà BBQ', 80000, 0, '../images/menu-main/chicken-rice-1/chicken-rice-12.jpg'),
(30, 3, 'Cơm gà lát mỏng', 25000, 0, '../images/menu-main/chicken-rice-1/chicken-rice-02.jfif'),
(31, 3, 'Cơm gà áp chảo', 150000, 0, '../images/menu-main/chicken-rice-1/chicken-rice-01.jfif'),
(32, 3, 'Cơm gà xối mỡ', 50000, 0, '../images/menu-main/chicken-rice-1/chicken-rice-13.jpg'),
(33, 4, 'Cơm gà chicken dev', 99000, 0, '../images/menu-main/chicken-rice-2/chicken-rice-14.jpg'),
(34, 4, 'Cơm gà nguyên con', 139000, 0, '../images/menu-main/chicken-rice-2/chicken-rice-15.jpg'),
(35, 4, 'Cơm gà An Giang', 999999, 0, '../images/menu-main/chicken-rice-2/chicken-rice-16.jpg'),
(36, 4, 'Cơm gà hội an', 50000, 0, '../images/menu-main/chicken-rice-2/chicken-rice-17.jpg'),
(37, 4, 'Cơm gà nha trang', 70000, 0, '../images/menu-main/chicken-rice-2/chicken-rice-18.jpg'),
(38, 4, 'Cơm gà kho bia', 89000, 0, '../images/menu-main/chicken-rice-2/chicken-rice-19.jpg'),
(39, 4, 'Đùi gà mật ông', 450000, 0, '../images/menu-main/chicken-rice-2/chicken-rice-20.jpg'),
(40, 4, 'Gà đốt ô thum', 129000, 0, '../images/menu-main/chicken-rice-2/chicken-rice-22.jpg'),
(41, 4, 'Gà hấp là trúc', 130000, 0, '../images/menu-main/chicken-rice-2/chicken-rice-21.jpg'),
(57, 5, 'Cánh gà chiên xù', 45000, 0, '../images/menu-main/chicken-rice-3/chicken-rice-04.png'),
(58, 5, 'Khoai tây chiên', 26000, 0, '../images/menu-main/chicken-rice-3/chicken-rice-23.jpg'),
(59, 5, 'Humberger', 30000, 0, '../images/menu-main/chicken-rice-3/chicken-rice-24.jpg'),
(60, 5, 'Khoai lắc rong biển', 19000, 0, '../images/menu-main/chicken-rice-3/chicken-rice-25.jpg'),
(61, 5, 'Mý Ý', 60000, 0, '../images/menu-main/chicken-rice-3/chicken-rice-26.png'),
(62, 5, 'Pizza', 89000, 0, '../images/menu-main/chicken-rice-3/chicken-rice-27.jpg'),
(63, 5, 'hot dog', 450000, 0, '../images/menu-main/chicken-rice-3/chicken-rice-28.jfif'),
(64, 5, 'Bánh gạo', 100000, 0, '../images/menu-main/chicken-rice-3/chicken-rice-29.jfif'),
(65, 5, 'Mì cay', 130000, 0, '../images/menu-main/chicken-rice-3/chicken-rice-30.jpg'),
(66, 6, 'Sinh tố bơ', 20000, 0, '../images/menu-main/water/drink-01.jpg'),
(67, 6, 'Trà đào cam sả', 25000, 0, '../images/menu-main/water/drink-02.jpg'),
(68, 6, 'Cà phê sữa dừa', 29000, 0, '../images/menu-main/water/drink-03.jpg'),
(69, 6, 'Cam ép', 19000, 0, '../images/menu-main/water/drink-04.jpg'),
(70, 6, 'Sữa gạo', 20000, 0, '../images/menu-main/water/drink-05.jpg'),
(71, 6, 'Nước ép rau má', 15000, 0, '../images/menu-main/water/drink-06.jpg'),
(72, 6, 'Mattcha', 30000, 0, '../images/menu-main/water/drink-07.jpg'),
(73, 6, 'Trà sữa truyền thống', 40000, 0, '../images/menu-main/water/drink-08.jpg'),
(74, 6, 'Trà bí đao', 22000, 0, '../images/menu-main/water/drink-09.webp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `recruitment`
--

CREATE TABLE `recruitment` (
  `fullname` varchar(50) NOT NULL,
  `birth` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `link` varchar(100) NOT NULL,
  `exp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `recruitment`
--

INSERT INTO `recruitment` (`fullname`, `birth`, `phone`, `address`, `link`, `exp`) VALUES
('Nguyễn Văn Bảo', 2003, 345654343, 'Hà Nội', 'baofb.com', 'Có kinh nghiệm ở vị trí thu ngân'),
('Nguyễn Thời Đại', 2001, 342056789, 'Hồng Ngự', 'daifb.com', 'Có kinh nghiệm ở vị trí phục vụ khách hàng'),
('Đào Thị Ngọc Mỹ', 2004, 345453453, 'Thoại Sơn, An Giang', 'daongocmyfb.com', 'Có kinh nghiệm ở vị trí thu ngân'),
('Nguyễn Duy Thanh', 2002, 345676345, 'Đồng Tháp', 'thanhfb.com', 'Có kinh nghiệm ở vị trí giao hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `service`
--

CREATE TABLE `service` (
  `icon` varchar(100) NOT NULL,
  `title` varchar(50) NOT NULL,
  `des` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `service`
--

INSERT INTO `service` (`icon`, `title`, `des`) VALUES
('<i class=\"fa-solid fa-drumstick-bite trademark-icon\"></i>', 'EVENT HẤP DẪN', 'Đến với Chicken - DEV bạn sẽ được tham dự và trải nghiệm rất nhiều sự kiện của chúng tôi, cùng với rất nhiều món quà ý nghĩa'),
('<i class=\"fa-solid fa-calendar-days trademark-icon\"></i>', 'QUẢNG BÁ THƯƠNG HIỆU', 'Thật đẳng cấp và có một màn giới thiệu đầy tinh tế khi tên thương hiệu và sự kiện của bạn được in nổi trên nắp mỗi phần cơm của khách mời'),
('<i class=\"fa-solid fa-hand-holding-heart trademark-icon\"></i>', 'THỊ TRƯỜNG RỘNG LỚN', 'Chicken - DEV hiện đang có hơn 19 cửa hàng trải dài trên mọi nẻo đường của đất nước, chúng tôi sẽ phấn đấu vì bữa ăn ngon của người Việt'),
('<i class=\"fa-solid fa-star trademark-icon\"></i>', 'THỨC ĂN ĐẠT CHUẨN', 'Đến với chúng tôi bạn không phải lo lắng về độ an toàn của thực phẩm, bởi vì Chicken - DEV luôn đặt sức khỏe người dùng lên hàng đầu');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `introduce`
--
ALTER TABLE `introduce`
  ADD PRIMARY KEY (`img`);

--
-- Chỉ mục cho bảng `myuser`
--
ALTER TABLE `myuser`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`phone`);

--
-- Chỉ mục cho bảng `photoslibrary`
--
ALTER TABLE `photoslibrary`
  ADD PRIMARY KEY (`title`);

--
-- Chỉ mục cho bảng `photoslibrarystore`
--
ALTER TABLE `photoslibrarystore`
  ADD PRIMARY KEY (`img`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `recruitment`
--
ALTER TABLE `recruitment`
  ADD PRIMARY KEY (`link`);

--
-- Chỉ mục cho bảng `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`title`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
