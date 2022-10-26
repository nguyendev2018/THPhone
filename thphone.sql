-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 07, 2020 lúc 03:17 PM
-- Phiên bản máy phục vụ: 10.3.16-MariaDB
-- Phiên bản PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `thphone-mas`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL,
  `trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`id`, `img`, `trangthai`) VALUES
(1, 's20_696x404.png', 1),
(2, 'banner-note-10-lite-didongviet.png', 0),
(3, 'banner-valentine-ip11.11pro.11promax_696x404.png', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `mabl` int(10) NOT NULL,
  `idnd` int(11) NOT NULL,
  `idsp` int(10) NOT NULL,
  `noidung` varchar(250) NOT NULL,
  `ngayBinhluan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`mabl`, `idnd`, `idsp`, `noidung`, `ngayBinhluan`) VALUES
(13, 86, 9, 'sản phẩm tuyệt vời', '2020-02-04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `mahd` int(11) NOT NULL,
  `tensp` varchar(50) NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  `id_hdct` int(10) NOT NULL,
  `idsp` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`mahd`, `tensp`, `soluong`, `gia`, `id_hdct`, `idsp`) VALUES
(53, 'Samsung Galaxy 02', 1, 5000000, 36, 20),
(54, 'Huawai Nova', 1, 10000000, 37, 13),
(53, 'Huawei', 1, 200000, 38, 39),
(53, 'Nokia', 2, 5000000, 39, 24),
(53, 'Vsmart', 1, 800000, 40, 41),
(53, 'Huawei', 1, 200000, 41, 39),
(53, 'Vsmart', 1, 800000, 42, 41),
(53, 'Vsmart', 1, 800000, 43, 41),
(53, 'Vivo LX', 1, 5000000, 44, 14);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `madm` int(11) NOT NULL,
  `tendm` varchar(50) NOT NULL,
  `dequi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`madm`, `tendm`, `dequi`) VALUES
(1, 'Điện thoại', 0),
(2, 'Phụ kiện', 2),
(3, 'Tai nghe', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `mahd` int(11) NOT NULL,
  `idnd` int(11) NOT NULL,
  `hoten` varchar(50) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `dienthoai` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ngaydathang` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`mahd`, `idnd`, `hoten`, `diachi`, `dienthoai`, `email`, `ngaydathang`) VALUES
(53, 86, 'le thi an', '', '0909786543', 'lethian@gmail.com', '2020-03-07'),
(54, 93, 'Lê Trần Nguyên', 'Nguyễn Thị Tú', '0909467324', 'nguyenltps08795@fpt.edu.vn', '2019-03-07'),
(61, 86, 'le thi an', '', '0909786543', 'lethian@gmail.com', '2020-03-07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hotro`
--

CREATE TABLE `hotro` (
  `maht` int(11) NOT NULL,
  `tennd` varchar(255) NOT NULL,
  `email` varchar(250) NOT NULL,
  `noidung` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `hotro`
--

INSERT INTO `hotro` (`maht`, `tennd`, `email`, `noidung`) VALUES
(11, 'Nguyen Thi Thao Nguyen', 'nguyenntps@gmail.com', 'Đơn hàng 12345 đã tiếp nhận chưa ạ?');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `idnd` int(11) NOT NULL,
  `tennd` varchar(255) COLLATE utf8_bin NOT NULL,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(50) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `dienthoai` varchar(11) COLLATE utf8_bin NOT NULL,
  `diachi` varchar(255) COLLATE utf8_bin NOT NULL,
  `phanquyen` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`idnd`, `tennd`, `username`, `password`, `email`, `dienthoai`, `diachi`, `phanquyen`) VALUES
(86, 'le thi an', 'anlt', '123', 'lethian@gmail.com', '0909786543', '', 1),
(90, 'Nguyen van B', 'user2', '231', 'nguyenb@gmail.com', '0909784352', '', 1),
(93, 'Lê Trần Nguyên', 'nguyenlt', '123', 'nguyenltps08795@fpt.edu.vn', '0909467324', 'Nguyễn Thị Tú', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `idsp` int(11) NOT NULL,
  `tensp` varchar(250) NOT NULL,
  `hinhanh` varchar(255) NOT NULL,
  `chitietngan` varchar(1000) NOT NULL,
  `soluong` int(11) NOT NULL,
  `daban` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  `khuyenmai` int(11) NOT NULL,
  `trangthai` int(11) NOT NULL,
  `madm` int(11) NOT NULL,
  `dungluong` varchar(250) NOT NULL,
  `mausac` text NOT NULL,
  `chitiet` text NOT NULL,
  `mota` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`idsp`, `tensp`, `hinhanh`, `chitietngan`, `soluong`, `daban`, `gia`, `khuyenmai`, `trangthai`, `madm`, `dungluong`, `mausac`, `chitiet`, `mota`) VALUES
(7, 'Bluetooth JBL', '1.jpg', '', 20, 40, 400000, 30, 5, 3, '', '', '', '0'),
(8, 'Bluetooth Mizood', '2.jpg', '', 50, 40, 400000, 10, 5, 3, '', '', '', '0'),
(9, 'Bao da Clear', 'bao-da-clear-view-galaxy-note10-ef-zn975.jpg', '', 79, 40, 500000, 40, 6, 2, '', '', '', '0'),
(10, 'Sạc nhanh Samsung', 'b-sac-nhanh-usb-c-samsung-travel-adapter-45w-ep-ta845x.jpg', 'Công suất 1: 5W / 7.5W / 10W (điện thoại di động). Đầu ra 2: 2W (iWatch). Đầu ra 3: 3W (AirPods). Chất liệu: ABS + PC. Bảo vệ nhiều mạch, sử dụng chuẩn giao thức QI. Giá tốt từ nơi bán: 380.000 Shopee', 40, 30, 500000, 20, 6, 2, '', '', 'Ngoài việc đảm bảo độ bền và thời gian sạc ra, một ưu điểm rất quan trọng mà ít người chú ý đến là củ sạc Samsung Galaxy S6-S7-S8 chính hãng cho dòng chuẩn nên luôn đảm bảo tốt cho pin', '0'),
(11, 'Đế sạc nhanh', 'de-sac-nhanh-khong-day-samsung-wireless-charger-stand-15w-ep-n5200.jpg', 'Công suất 1: 5W / 7.5W / 10W (điện thoại di động). Đầu ra 2: 2W (iWatch). Đầu ra 3: 3W (AirPods). Chất liệu: ABS + PC. Bảo vệ nhiều mạch, sử dụng chuẩn giao thức QI. Giá tốt từ nơi bán: 380.000 Shopee', 79, 40, 500000, 10, 6, 2, '', '', 'Ngoài việc đảm bảo độ bền và thời gian sạc ra, một ưu điểm rất quan trọng mà ít người chú ý đến là củ sạc Samsung Galaxy S6-S7-S8 chính hãng cho dòng chuẩn nên luôn đảm bảo tốt cho pin', '0'),
(12, 'Sạc nhanh không dây', 'pin-d-phong-khong-day-samsung-wireless-charger-eb-u1200-10000-mah.jpg', 'Công suất 1: 5W / 7.5W / 10W (điện thoại di động). Đầu ra 2: 2W (iWatch). Đầu ra 3: 3W (AirPods). Chất liệu: ABS + PC. Bảo vệ nhiều mạch, sử dụng chuẩn giao thức QI. Giá tốt từ nơi bán: 380.000 Shopee', 40, 30, 500000, 50, 6, 2, '', '', 'Ngoài việc đảm bảo độ bền và thời gian sạc ra, một ưu điểm rất quan trọng mà ít người chú ý đến là củ sạc Samsung Galaxy S6-S7-S8 chính hãng cho dòng chuẩn nên luôn đảm bảo tốt cho pin', '0'),
(13, 'Huawai Nova', 'huawei-nova-5t-blue-600x600-400x400.jpg', 'Như vậy là mẫu điện thoại cực hot Huawei Nova 3i đã chính thức được ra mắt với một mức giá khá hấp dẫn. Không chỉ vậy thiết bị này còn sở hữu rất nhiều tính năng vô cùng hấp dẫn giúp người dùng có được những trải nghiệm tuyệt vời. Hãy cùng xem chiếc smartphone này có điều gì đặc biệt qua bài trên tay Huawei Nova 3i dưới đây.', 60, 50, 10000000, 50, 1, 1, '', '', 'Điểm đáng chú ý nhất trên Huawei Nova 3i có thể kể đến đó là thiết kế như kính 2,5D cùng với phần khung bằng kim loại bo cong các mép tiếp giáp nên nó mang lại cảm giác cầm và vuốt từ viền rất tốt, không gợn và thoải mái mái khi cầm.  Toàn bộ cổng kết nối đều được đặt tại cạnh dưới như jack âm thanh 3,5 nhưng tiếc là cổng sạc/dữ liệu vẫn là microUSB chứ không phải USB-C. Tuy nhiên, cạnh dưới cũng có loa, dạng loa đơn và âm thanh đầu ra lớn nhưng chất lượng âm thanh thì ở mức trung bình.', '0'),
(14, 'Vivo LX', 'realme-5i-blue-amee-thumb-400x400.jpg', 'Vivo cho biết rằng họ đã tối ưu rất nhiều thuật toán làm đẹp nhờ AI để cung cấp cho người dùng một trải nghiệm selfie tuyệt vời nhất.', 70, 60, 5000000, 40, 1, 1, '', '', 'Camera chính cũng được đầu tư mạnh mẽ với cụm 4 camera trong đó camera chính có độ phân giải lên tới 48 MP.', '0'),
(15, 'Samsung Fold', 'samsung-galaxy-fold-2-z-flip-400x400.jpg', 'Pin siêu khủng, sạc siêu nhanh Xiaomi Redmi 8 chiếm ưu thế so với các đối thủ nhờ sở hữu viên pin 5000mAh cực khủng. Bạn có thể chơi game, nghe nhạc suốt nhiều giờ liền, thậm chí nếu chỉ đọc báo, lướt Facebook máy sẽ cho thời gian dùng đến hơn 2 ngày. Chưa hết, Xiaomi Redmi 8 còn được trang bị sạc nhanh Quick Change 3.0, cổng sạc Type-C thế hệ mới, giúp giảm thời gian sạc, cũng như truyền tải dữ liệu nhanh hơn.', 60, 50, 3000000, 20, 1, 1, '', '', 'Với Android Go thì Galaxy A2 Core hoạt động khá ổn định mặc dù sở hữu cấu hình không quá khủng.  Máy được cài sẵn một số phần mềm như Google Assistant Go hay Maps Go được tinh chỉnh riêng dành cho những thiết bị giá rẻ giúp bạn vẫn có được trải nghiệm khá đầy đủ.  Chưa hết, Galaxy A2 Core còn sở hữu bộ đôi camera “trước sau như một” có cùng độ phân giải 5 MP giúp bạn có thể lưu lại những khoảnh khắc đáng nhớ trong cuộc sống.', '0'),
(16, 'Samsung Y91', 'vivo-y19-white-quanghai-400x400.jpg', 'Pin siêu khủng, sạc siêu nhanh Xiaomi Redmi 8 chiếm ưu thế so với các đối thủ nhờ sở hữu viên pin 5000mAh cực khủng. Bạn có thể chơi game, nghe nhạc suốt nhiều giờ liền, thậm chí nếu chỉ đọc báo, lướt Facebook máy sẽ cho thời gian dùng đến hơn 2 ngày. Chưa hết, Xiaomi Redmi 8 còn được trang bị sạc nhanh Quick Change 3.0, cổng sạc Type-C thế hệ mới, giúp giảm thời gian sạc, cũng như truyền tải dữ liệu nhanh hơn.', 70, 60, 5000000, 40, 1, 1, '', '', 'Với Android Go thì Galaxy A2 Core hoạt động khá ổn định mặc dù sở hữu cấu hình không quá khủng.  Máy được cài sẵn một số phần mềm như Google Assistant Go hay Maps Go được tinh chỉnh riêng dành cho những thiết bị giá rẻ giúp bạn vẫn có được trải nghiệm khá đầy đủ.  Chưa hết, Galaxy A2 Core còn sở hữu bộ đôi camera “trước sau như một” có cùng độ phân giải 5 MP giúp bạn có thể lưu lại những khoảnh khắc đáng nhớ trong cuộc sống.', '0'),
(17, 'Samsung A51', 'samsung-galaxy-a51-white-400x400.jpg', 'Tự do thể hiện cá tính riêng với các phiên bản màu sắc: Đen, Xanh và Đỏ. Galaxy A01 với mặt lưng mịn cùng thiết kế mỏng nhẹ bậc nhất, chỉ 8.3 mm nằm vừa vặn trong lòng bàn tay, mang lại cảm giác cầm nắm dễ chịu.', 90, 60, 5000000, 10, 1, 1, '', '', 'Ở dòng sản phẩm chủ lực Samsung Galaxy S20, Samsung sẽ có sự nâng cấp vượt bậc hơn. Cảm biến chính của máy sẽ có độ phân giải lên đến 108MP. Đi kèm là ống kính tele, ống kính góc siêu rộng hay cảm biến ToF tùy vào mỗi model. Với những thông số camera', '0'),
(18, 'Samsung S20', 'samsung-galaxy-s20-ultra-600x600-1-400x400.jpg', 'Bộ đôi camera sau hỗ trợ chế độ chụp xóa phông hỗ trợ bởi phần cứng, giúp bức ảnh trở nên tự nhiên và nổi bật hơn, bất kể đối tượng là cảnh vật, động vật hay con người.', 90, 60, 6000000, 40, 1, 1, '', '', 'Chỉ mới vừa chính thức được trình làng tại sự kiện IFA 2019 diễn ra tại Berlin, Đức, thế nhưng Nokia 7.2 nhanh chóng chiếm được cảm tình của các tín đồ công nghệ. Nằm trong loạt 5 chiếc smartphone mới nhất của Nokia, Nokia 7.2 sở hữu nhiều nâng cấp vô cùng đáng giá so với những người “anh em tiền nhiệm” trước đây.', '0'),
(19, 'Oppo A5', 'oppo-a5-2020-white-400x400.jpg', 'Đặc điểm nổi bật của OPPO A5 (2020) 128GB\r\n\r\nTìm hiểu thêm\r\nTìm hiểu thêm\r\nBộ sản phẩm chuẩn: Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp, Cây lấy sim, Ốp lưng\r\n\r\nOPPO A5 (2020) 128GB là chiếc smartphone mới ra mắt của thương hiệu OPPO nhận nhiệm vụ đánh chiếm phân khúc giá rẻ/tầm trung với rất nhiều điểm nhấn đáng giá.', 90, 60, 7000000, 30, 7, 1, '', '', 'Đây là điểm ấn tượng nhất trên OPPO A5 (2020), sản phẩm này trang bị tới 4 camera gồm: camera chính 12 MP, camera góc rộng 8 MP 119 độ, camera đơn sắc 2 MP và camera hỗ trợ đo độ sâu 2 MP.', '0'),
(20, 'Samsung Galaxy 02', 'samsung-galaxy-a01-600x600-4-400x400.jpg', 'Pin siêu khủng, sạc siêu nhanh Xiaomi Redmi 8 chiếm ưu thế so với các đối thủ nhờ sở hữu viên pin 5000mAh cực khủng. Bạn có thể chơi game, nghe nhạc suốt nhiều giờ liền, thậm chí nếu chỉ đọc báo, lướt Facebook máy sẽ cho thời gian dùng đến hơn 2 ngày. Chưa hết, Xiaomi Redmi 8 còn được trang bị sạc nhanh Quick Change 3.0, cổng sạc Type-C thế hệ mới, giúp giảm thời gian sạc, cũng như truyền tải dữ liệu nhanh hơn.', 90, 60, 5000000, 20, 7, 1, '', '', 'Với Android Go thì Galaxy A2 Core hoạt động khá ổn định mặc dù sở hữu cấu hình không quá khủng.  Máy được cài sẵn một số phần mềm như Google Assistant Go hay Maps Go được tinh chỉnh riêng dành cho những thiết bị giá rẻ giúp bạn vẫn có được trải nghiệm khá đầy đủ.  Chưa hết, Galaxy A2 Core còn sở hữu bộ đôi camera “trước sau như một” có cùng độ phân giải 5 MP giúp bạn có thể lưu lại những khoảnh khắc đáng nhớ trong cuộc sống.', '0'),
(22, 'Iphone 11', 'iphone-11-red-400x400.jpg', 'iPhone 11 Pro Max 64GB - phiên bản cao cấp nhất trong số bộ ba iPhone được Apple trình làng trong năm 2019. Cho dù không có quá nhiều thay đổi đáng kể so với kỳ vọng, iPhone 11 Pro Max 64GB vẫn nhận được nhiều sự ủng hộ từ cộng đồng yêu công nghệ.', 60, 30, 6000000, 40, 7, 1, '', '', 'Sự thay đổi đáng kể nhất trên thiết kế của iPhone 11 Pro Max 64GB năm nay chính là cụm 3 camera sau hình vuông cỡ bự ở mặt lưng nhám, bên cạnh đó logo Táo khuyết thì được đẩy xuống một ít. Đối với nhiều người, hình ảnh thật của iPhone 11 Pro Max 64GB còn chẳng đẹp bằng những hình ảnh “fake” rò rỉ trước đó nhưng với một số khác vẫn cho rằng đây vẫn là một thiết kế nổi bật vì sự độc lạ rất đặc trưng của Apple.  Bên cạnh ba màu cơ bản là Gold, Silver, Space Gray thì năm nay Apple còn kết nạp thêm một màu sắc mới rất được ủng hộ nhiệt tình là Midnight Green. Đây là phiên bản màu hứa hẹn sẽ tạo nên bước đột phá về doanh số cho Apple trước tình trạng iPhone bị ế từ thời gian gần đây.', '0'),
(23, 'Realme', 'realme-5s-red-400x400.jpg', 'Bộ đôi camera sau hỗ trợ chế độ chụp xóa phông hỗ trợ bởi phần cứng, giúp bức ảnh trở nên tự nhiên và nổi bật hơn, bất kể đối tượng là cảnh vật, động vật hay con người.', 60, 30, 6000000, 20, 7, 1, '', '', 'Camera trước nổi bật với chế độ làm đẹp thông minh và selfie chân dung. Thuật toán AI thông minh mang tới vẻ đẹp được cá nhân hóa dựa trên từng người dùng.', '0'),
(24, 'Nokia', 'nokia-c1-600x600-1-400x400.jpg', 'Chỉ mới vừa chính thức được trình làng tại sự kiện IFA 2019 diễn ra tại Berlin, Đức, thế nhưng Nokia 7.2 nhanh chóng chiếm được cảm tình của các tín đồ công nghệ. Nằm trong loạt 5 chiếc smartphone mới nhất của Nokia, Nokia 7.2 sở hữu nhiều nâng cấp vô cùng đáng giá so với những người “anh em tiền nhiệm” trước đây.', 90, 40, 5000000, 20, 7, 1, '', '', 'Không chỉ được nâng cấp với diện mạo sang trọng, Nokia 7.2 còn sở hữu thiết kế cực kỳ mạnh mẽ và cuốn hút. Kết hợp với thiết kế mặt trước notch (trai thỏ) “giọt nước”, Nokia 7.2 tạo ấn tượng ngay từ cái nhìn đầu tiên nhờ “lớp áo” xanh ngọc vô cùng bắt mắt cùng cụm camera lồi và logo Nokia đặt tại trung tâm đầy tinh tế.  Một thiết kế thú vị không kém mà “ông lớn” Nokia mang đến cho người dùng trong lần ra mắt sản phẩm mới này đó chính là thiết kế cạnh trái có phím kích hoạt trợ lý Google Assistant, mang đến cho người dùng trải nghiệm tuyệt vời nhất.  Về thiết kế mặt sau, Nokia 7.2 sở hữu mặt lưng được hoàn thiện bằng hợp kim nhôm và bộ khung bằng hỗn hợp polymer, mang đến cảm giác khá chắc chắn, thoải mái khi cầm nắm.', '0'),
(25, 'Samsung Galaxy A01', 'samsung-galaxy-a01-600x600-4-400x400.jpg', 'Tự do thể hiện cá tính riêng với các phiên bản màu sắc: Đen, Xanh và Đỏ. Galaxy A01 với mặt lưng mịn cùng thiết kế mỏng nhẹ bậc nhất, chỉ 8.3 mm nằm vừa vặn trong lòng bàn tay, mang lại cảm giác cầm nắm dễ chịu.', 60, 30, 6000000, 20, 7, 1, '', '', 'Nhanh chóng lưu trọn từng khung cảnh dù thiếu sáng hay nắng rực rỡ với Camera sau 13MP từ Galaxy A01. Đừng quên thử nghiệm tính năng Xóa Phông Chuyên Nghiệp trước hoặc sau khi chụp để tạo nên hiệu ứng nhòe hậu cảnh đầy ảo diệu. Camera Chiều Sâu nhận ', '0'),
(26, 'Xiaomi redmi 8', 'xiaomi-redmi-8-64gb-red-400x400.jpg', 'Màn hình lớn, trải nghiệm cực đã Một màn hình lớn sẽ cho việc sử dụng, trải nghiệm thoải mái hơn bao giờ hết. Đáp ứng nhu cầu đó, Xiaomi Redmi 8 có kích thước màn hình lớn lên tới 6.22 inch, đi cùng thiết kế “giọt nước” nhỏ gọn.', 90, 40, 5000000, 20, 0, 1, '', '', 'Vẫn là những chiếc smartphone có thiết kế cực kỳ bắt mắt, Xiaomi luôn tạo được ấn tượng tốt với khách hàng từ cái nhìn đầu tiên. Xiaomi Redmi Note 8 sở hữu màn hình tai thỏ, kích thước 6.3 inch với công nghệ Full HD Plus cho màu sắc đẹp mắt khi giải ', '0'),
(38, 'OPPO Reno2 F', 'oppo-reno2-f-xanh-600x600-400x400_1.jpg', 'Thiết kế lấy cảm hứng từ thiên nhiên\r\nOPPO Reno2 F được hoàn thiện tinh xảo với vẻ đẹp đặc biệt lấy cảm hứng từ thiên nhiên. Cả hai phiên bản màu là Trắng bầu trời và Xanh mặt hồ đều mang đến hơi thở nhẹ nhàng, gần gũi rất tự nhiên. Sự hoàn thiện cao cấp, tinh tế đến từng chi tiết nhỏ và màu sắc ấn tượng tạo nên chiếc điện thoại tuyệt đẹp, thể hiện đẳng cấp ngay trên tay bạn.', 40, 20, 100000, 0, 2, 1, '32GB', 'Vàng', 'Chụp ảnh đỉnh cao với 4 camera sau; thiết kế không viền tuyệt mỹ; cảm biến vân tay trong màn hình và camera trước “tàng hình” độc đáo, OPPO Reno2 F tập hợp tất cả những tinh hoa công nghệ trong một sản phẩm tuyệt đẹp.', '0'),
(39, 'Huawei', 'huawei-nova-5t-blue-600x600-400x400_1.jpg', 'Sự đột phá của ranh giới hình ảnh, khai thác nghệ thuật nhiếp ảnh và quay phim, giải phóng sức mạnh và tốc độ, và sự đổi mới trong cách tương tác với điện thoại hiện đã sẵn sàng cùng bạn khám phá. Nắm bắt tương lai với những khả năng mới.', 60, 90, 200000, 0, 2, 1, '64GB', 'Đỏ', 'Thắp sáng những khả năng vô tận. Bộ 4 camera của HUAWEI Mate 30 Pro được bao quanh bởi vòng tròn tỏa sáng. Đó là một sự hợp nhất hoàn hảo của sự phản xạ và khúc xạ. Vẫn là Mate, nhưng với một biểu tượng mới.', '0'),
(40, 'Samsung Galaxy S20', 'samsung-galaxy-s20-ultra-600x600-1-400x400_2.jpg', 'Galaxy S20, S20 Plus và S20 Ultra là tên của dòng flagship tiếp theo của Samsung trong năm 2020. Là dòng flagship chủ lực của năm, các thiết bị được cho sẽ sở hữu những gì tốt nhất, mạnh mẽ nhất, hiện đại nhất trong năm tới.\r\nTrước đó, có thông tin về tên của bộ ba flagship kế nhiệm cho Galaxy S10 sẽ có tên là Galaxy S11e, S11 và S11 Plus. Tuy nhiên, có thông tin cho rằng các máy sẽ không đi theo thứ tự đặt tên này. Thay vào đó, Samsung Galaxy S20, S20 Plus và S20 Ultra sẽ là tên của thế hệ điện thoại kế tiếp. Trong đó, S20 sẽ là chiếc điện thoại có giá rẻ nhất của dòng, kế nhiệm cho chiếc S10e trước đó. S20 Plus sẽ thay thế cho S10 tiêu chuẩn và S20 Ultra là phiên bản cao cấp nhất dòng, kế nhiệm cho S10 Plus 5G.\r\n\r\n', 79, 50, 900000, 0, 2, 1, 'Đỏ', 'Xanh', 'Ở dòng sản phẩm chủ lực Samsung Galaxy S20, Samsung sẽ có sự nâng cấp vượt bậc hơn. Cảm biến chính của máy sẽ có độ phân giải lên đến 108MP. Đi kèm là ống kính tele, ống kính góc siêu rộng hay cảm biến ToF tùy vào mỗi model. Với những thông số camera', '0'),
(41, 'Vsmart', 'vsmart-joy-3-tim-600x600-400x400_1.jpg', 'Các viền được gia công cứng cáp, mặt lưng được làm láng và hoàn thiện mịn. Màn hình được làm mỏng hết sức có thể với tấm nền LCD, viền màn hình hợp lý chứ không hề dày và thô như những chiếc máy giá rẻ khác. Những phím vật lý bấm có độ nảy nhất định chứ không thô cứng mà cũng đồng thời ko lỏng lẻo.', 40, 20, 800000, 0, 2, 1, '32GB', 'Vàng', 'Vsmart Bee là chiếc smartphone được Vsmart thiết kế để nhắm vào phân khúc giá rẻ. Vậy nên không có gì lạ khi máy sử dụng vật liệu nhựa làm vật liệu hoàn thiện chính. Nhưng không vì vậy mà Bee cho cảm giác rẻ tiền. Thực tế, Vsmart Bee cho cảm giác cầm', '0'),
(42, 'Iphone 11 Promax', 'iphone-11-pro-max-green-400x400_1.jpg', 'iPhone 11 Pro và 11 Pro Max là phiên bản kế nhiệm của iPhone Xs và Xs Max đem đến nhiều thay đổi. Sự thay đổi lớn nhất là thay đổi trong thiết kế. Cụm 3 camera trên iPhone 11 Pro được đặt trên một khung vuông như những hình ảnh rò rỉ trước đó.', 300, 400, 170000, 0, 0, 1, '64GB', 'Đỏ', '<p>iPhone 11 Pro v&agrave; 11 Pro Max l&agrave; phi&ecirc;n bản kế nhiệm của iPhone Xs v&agrave; Xs Max đem đến nhiều thay đổi. Sự thay đổi lớn nhất l&agrave; thay đổi trong thiết kế. Cụm 3 camera tr&ecirc;n iPhone 11 Pro được đặt tr&ecirc;n một khung vu&ocirc;ng như những h&igrave;nh ảnh r&ograve; rỉ trước đ&oacute;.</p>\r\n', '0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `idtt` int(150) NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `img` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `title` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `content_ttct` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `ngaydang` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`idtt`, `content`, `img`, `title`, `content_ttct`, `ngaydang`) VALUES
(1, 'Huawei Nova 5T có những ưu điểm gì để thuyết phục người dùng chọn mua và nhất là phải mua vào thời điểm này? Đối với những ai thích thời trang, Nova 5T được xem là sự lựa chọn phù hợp, bạn sẽ thích thú với mặt lưng bằng kính tạo ra hiệu ứng ánh sáng ', 'huawei-nova-5t-tu-van_800x450-600x400.jpg', '5 lý do nên đặt mua ngay Huawei Nova 5T vào thời điểm này\r\n                        ', '<h1>&nbsp;</h1>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"\" src=\"https://cdn.tgdd.vn/Files/2020/02/13/1236249/xiaomi-mi-10-series_800x450.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p style=\"font-size:18px;color:black;line-height:2\">Xiaomi Mi 10 và Mi 10 Pro vừa chính thức ra mắt tại Trung Quốc thông qua một sự kiện online. Xiaomi cũng cho biết hai chiếc smartphone flagship này sẽ sớm được công bố trên toàn cầu.\r\nCả Xiaomi Mi 10 và Mi 10 Pro đều có màn hình AMOLED Full HD+ cong 6.67 inch với tốc độ làm tươi 90 Hz và tần số lấy mẫu cảm ứng 180 Hz. Ở góc trên bên trái màn hình có một lỗ khoét chứa camera selfie 20 MP và cảm biến vân tay cũng được nhúng dưới màn hình.\r\n\r\nBộ đôi smartphone flagship mới này của Xiaomi dùng chip Qualcomm Snapdragon 865, hỗ trợ 5G, RAM tối đa 12 GB và bộ nhớ trong 512 GB. Đáng chú ý, Mi 10 lại sở hữu pin 4.780 mAh hỗ trợ sạc nhanh có dây 30 W, còn Mi 10 Pro chỉ có pin 4.500 mAh nhưng lại song hành cùng công nghệ sạc nhanh 50 W. Cả hai máy đều được tích hợp sạc không dây 30 W và sạc ngược không dây 10 W.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"\" src=\" src=\"https://cdn.tgdd.vn/Files/2020/02/13/1236249/xiaomi-mi-10_830x467-800-resize.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p style=\"font-size:18px;color:black;line-height:2\">Bốn camera sau của Xiaomi Mi 10 bao gồm cảm biến chính ISOCELL Bright HMX 108 MP của Samsung + 2 cảm biến 2 MP với khẩu độ f/2.4 + ống kính góc rộng 13 MP f/2.4. Về phần Mi 10 Pro có camera chính 108 MP + ống kính tele ngắn 12 MP + ống kính tele dài 8 MP + ống kính góc cực rộng 20 MP.\r\n\r\nXiaomi tuyên bố Mi 10 Pro đã đạt được 124 điểm trên DxOMark, dẫn đầu bảng xếp hạng camera-phone chụp ảnh tốt nhất hiện nay. Cả hai model đều hỗ trợ quay video 8K giống như trên dòng Galaxy S20 của Samsung.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"\" src=\"src=\"https://cdn.tgdd.vn/Files/2020/02/13/1236249/xiaomi-mi-10-pro-dxomark_800x481.png\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p style=\"font-size:18px;color:black;line-height:2\">Các tính năng còn lại của dòng Xiaomi Mi 10 bao gồm: Chạy Android 10 với giao diện MIUI 11, cổng USB Type-C, Wi-Fi 6, Bluetooth 5.1 và công nghệ âm thanh Hi-Res Audio.\r\n\r\nXiaomi Mi 10 sẽ được bán tại Trung Quốc vào ngày 14/2 với giá 3.999 Yuan (khoảng 13.3 triệu đồng) cho phiên bản RAM 8 GB + ROM 128 GB. Còn Mi 10 Pro được bán vào ngày 18/2 với giá 4.999 Yuan (khoảng 16.6 triệu đồng) cho phiên bản RAM 8 GB + ROM 256 GB.\r\n\r\nBạn nhận xét thế nào về thiết kế, cấu hình và giá bán của dòng Xiaomi Mi 10?</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n', '2020-03-01 12:29:50'),
(2, 'Mua hàng Thế Giới Di Động luôn có ưu đãi tốt, đặc biệt là trong dịp năm mới. Chào năm 2020, khách hàng mua điện thoại mới tại Thế Giới Di Động sẽ có cơ hội trúng 2020 chuột vàng, tổng trị giá giải thưởng lên đến 8.6 tỷ đồng.', 'publicpreview_800x458-600x400.png', '(KẾT QUẢ) Thế Giới Di Động \'chơi lớn\' tặng 2020 chuột vàng', '<h1>&nbsp;</h1>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"\" src=\"https://cdn.tgdd.vn/Files/2020/02/21/1237855/k30pro2_800x449.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p style=\"font-size:18px;color:black;line-height:2\">Xiaomi đã cho ra mắt Redmi K30 tại quê nhà Trung Quốc và đang lên kế hoạch chuẩn bị giới thiệu phiên bản Pro của chiếc điện thoại này. Sau khi đạt được nhiều chứng nhận quan trọng, Redmi K30 Pro còn được giám đốc điều hành của Xiaomi hé lộ nhiều thông tin về cấu hình và thiết kế.\r\nTrong một phát biểu mới nhất, chủ tịch Xiaomi - Lu Weibing xác nhận flagship Redmi sắp ra mắt sẽ có thiết kế ấn tượng, cùng hiệu năng và cấu hình mạnh mẽ. \r\n\r\nLu Wei Chan còn tổ chức một cuộc thăm dò trên Weibo xem cơ chế đặt camera selfie nào được người dùng mong muốn nhất trên Redmi K30 Pro và phần lớn người dùng chọn camera selfie pop-up (bật lên).\r\n\r\nThú vị hơn khi hình ảnh báo chí mới rò rỉ của Redmi K30 Pro cho thấy điện thoại sẽ có camera selfie được tích hợp theo cơ chế thò thụt, tương tự như thế hệ tiền nhiệm Redmi K20 Pro.\r\n\r\n</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"\" src=\"https://cdn.tgdd.vn/Files/2020/02/21/1237855/2_800x543.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p style=\"font-size:18px;color:black;line-height:2\">Mới đây, hai thiết bị của Xiaomi có số model M2001J11E và M2001J11C đã đạt được chứng nhận từ cơ quan 3C của Trung Quốc, được xác định là mẫu Redmi K30 Pro. Ngoài ra, thiết bị được đồn đại sở hữu viên pin 4.700 mAh và hỗ trợ công nghệ sạc nhanh 33 W.\r\n\r\nMột báo cáo khác cho rằng Redmi K30 Pro sẽ có màn hình OLED tràn viền. Về khả năng nhiếp ảnh, máy sẽ được trang bị mô-đun bốn cảm biến, một trong số đó là cảm biến Sony IMX686.\r\n\r\nRedmi K30 Pro cũng đã xuất hiện trên Geekbench, từ đó tiết lộ trang bị chip Snapdragon 865, hỗ trợ 5G băng tần SA / NSA và tích hợp RAM 8 GB LPDDR5.\r\n\r\nBạn mong chờ thêm điều gì trên Redmi K30 Pro?</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n\r\n\r\n', '2020-03-01 12:30:01'),
(4, 'Vào rạng sáng ngày hôm nay (12/02), Samsung đã giới thiệu bộ ba Galaxy S20, Galaxy S20+, Galaxy S20 Ultra và một thiết bị màn hình gập Galaxy Z Flip. Thú vị hơn khi toàn bộ sự kiện Unpacked 2020 tổ chức tại San Francisco đều được quay và phát trực ti', '1_800x450-600x400.jpg', 'Galaxy S20 series chính thức ra mắt tại Việt Nam', '<h1>&nbsp;</h1>\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"\"  src=\"https://znews-photo.zadn.vn/w660/Uploaded/neg_wpeczyr/2020_02_19/86461625_145176349932317_5915999309127483392_n.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p style=\"font-size:18px;color:black;line-height:2\">Ngày 19/2, Samsung Việt Nam ra mắt bộ ba sản phẩm Galaxy S20 tại thị trường Việt Nam với giá từ 21,5 triệu đồng.\r\nMột tuần sau sự kiện Unpacked diễn ra tại New York, Galaxy S20 series đã có mặt tại Việt Nam.\r\n\r\nGalaxy S20 series có 3 phiên bản gồm S20 tiêu chuẩn, S20+ và S20 Ultra cao cấp nhất. Galaxy S20 có màn hình 6,2 inch, Galaxy S20+ với 6,7 inch. Trong khi, Galaxy S20 Ultra có màn hình 6,9 inch, được làm cong nhẹ.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"\" src=\"https://znews-photo.zadn.vn/w660/Uploaded/fcivbqmv/2020_02_12/galaxy_s20_zing_3120.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p style=\"font-size:18px;color:black;line-height:2\">CÔNG NGHỆ\r\n\r\nGalaxy S20 series ra mắt tại Việt Nam, giá cao nhất 30 triệu đồng\r\nTrọng Hưng15:19 19/02/2020Ngày 19/2, Samsung Việt Nam ra mắt bộ ba sản phẩm Galaxy S20 tại thị trường Việt Nam với giá từ 21,5 triệu đồng.\r\nMột tuần sau sự kiện Unpacked diễn ra tại New York, Galaxy S20 series đã có mặt tại Việt Nam.\r\n\r\nGalaxy S20 series có 3 phiên bản gồm S20 tiêu chuẩn, S20+ và S20 Ultra cao cấp nhất. Galaxy S20 có màn hình 6,2 inch, Galaxy S20+ với 6,7 inch. Trong khi, Galaxy S20 Ultra có màn hình 6,9 inch, được làm cong nhẹ.\r\n\r\nGalaxy S20 series ra mat tai Viet Nam, gia cao nhat 30 trieu dong hinh anh 1 86461625_145176349932317_5915999309127483392_n.jpg\r\nGalaxy S20, S20 Plus và S 20 Ultra ra mắt tại Việt Nam.\r\nMàn hình của của 3 máy đều có độ phân giải Quad HD+, tích hợp công nghệ màn hình Dynamic AMOLED, đạt chuẩn HDR10+. Phần camera đục lỗ ở giữa màn hình giờ đây cũng được làm nhỏ gọn hơn so với chiếc Note10.\r\n\r\nNgoài ra, cả 3 máy đều được trang bị màn hình tần số quét 120 Hz, cho ra hình ảnh chuyển động mịn và mượt mà hơn. Bên cạnh đó, Galaxy S mới còn sở hữu vân tay siêu âm dưới màn hình cho tốc độ mở khóa nhanh.\r\n\r\nGalaxy S20 và S20+ đều có camera chính 12 MP, ống kính tele 64 MP và camera góc rộng 12 MP ở mặt lưng. Cụm camera sau của Galaxy S20 Ultra bao gồm ống kính chính 108 MP, camera tele 48 MP, góc rộng 12 MP. Galaxy S20+ và Galaxy 20 Ultra có thêm camera Depth Vision, đảm nhận đo độ sâu trường ảnh.\r\n\r\n</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n', '2020-03-01 12:30:06'),
(5, ' Samsung vừa chính thức ra mắt tại Trung Quốc thông qua một sự kiện online. Xiaomi cũng cho biết hai chiếc smartphone flagship này sẽ sớm được công bố trên toàn cầu. Bạn nhận xét thế nào về thiết kế           ', 's20u_800x450-600x400.jpg', 'Vượt qua nhiều đối thủ sừng sỏ khác, Samsung Galaxy S20 Ultra đã xuất sắc', '<h1>&nbsp;</h1>\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"\"  src=\"https://cdn.tgdd.vn/Files/2020/02/18/1237326/s20u_800x450.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p style=\"font-size:18px;color:black;line-height:2\">Tại sự kiện Unpacked 2020, Samsung đã chính thức giới thiệu Galaxy S20 series với rất nhiều cải tiến so với thế hệ tiền nhiệm. Cụ thể hơn, DisplayMate đã đánh giá Galaxy S20 Ultra là smartphone có màn hình xuất sắc nhất thế giới tính tới thời điểm hiện tại.\r\n\r\nGalaxy S20 Ultra được trang bị màn hình 6.9 inch, tấm nền Dynamic AMOLED, độ phân giải 2K+, tốc độ làm tươi 120 Hz cùng hàng hoạt các tiêu chuẩn hình ảnh, màu sắc khác.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"\" src=\"https://cdn.tgdd.vn/Files/2020/02/18/1237326/samsung-galaxy-s20-1_800x536.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p style=\"font-size:18px;color:black;line-height:2\">S20 Ultra đã được DisplayMate đánh giá điểm A+, đồng thời smartphone này còn phá thêm 12 kỷ lục về các tiêu chuẩn đánh giá màn hình. Những yếu tố được đánh giá cao nhất bao gồm độ chính xác màu, độ sáng toàn màn hình, độ sáng tối đa, độ tương phản và độ phân giải hiển thị.\r\n\r\n“Điều quan trọng và cũng rất ấn tượng phải đề cập đến là Samsung đã liên tục cải tiến chất lượng màn hình OLED trên mọi thế hệ Galaxy từ năm 2010 – là thời điểm chúng tôi bắt đầu phân tích tấm nền OLED” – DisplayMate đề cập trong bài đánh giá.\r\n\r\nBạn thấy chất lượng hiển thị của Galaxy S20 Ultra như thế nào, đã đủ xứng đáng để “xưng bá top 1” chưa?\r\n\r\n</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '2020-03-01 12:30:13'),
(6, 'Mặc dù chưa được Apple xác nhận nhưng nguồn đáng tin cậy vừa chia sẻ thông tin cho biết, iPhone SE 2 sẽ ra mắt vào ngày 31/3. Thời điểm này nghe có vẻ hợp lý bởi thông thường, Apple cũng sẽ tung ra 1 vài sản phẩm trong tháng 3, trong khi dòng iPhone cao cấp hơn sẽ ra mắt trong tháng 9.', '3_1280x720-600x400.jpg', 'Apple chính thức đăng ảnh sự kiện quan trọng vào tháng 3 lên Instagram', '<h1>&nbsp;</h1>\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"\"  src=\"https://cdn.tgdd.vn/Files/2020/02/18/1237321/3_1280x720-800-resize.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p style=\"font-size:18px;color:black;line-height:2\">Nhiều báo cáo trước đây cho rằng, Apple sẽ ra mắt 1 chiếc iPhone giá rẻ vào năm 2020, trước thềm sự kiện WWDC 2020 (tháng 6/2020).\r\nMặc dù chưa được Apple xác nhận nhưng nguồn đáng tin cậy vừa chia sẻ thông tin cho biết, iPhone SE 2 sẽ ra mắt vào ngày 31/3. Thời điểm này nghe có vẻ hợp lý bởi thông thường, Apple cũng sẽ tung ra 1 vài sản phẩm trong tháng 3, trong khi dòng iPhone cao cấp hơn sẽ ra mắt trong tháng 9.\r\n\r\nĐáng chú ý là Apple trước đây đã ra mắt iPhone SE thế hệ đầu tiên vào khoảng thời gian tháng 3 năm 2016. Điều này sẽ giúp cho iPhone SE không gặp nhiều đối thủ. Nói cách khác, iPhone SE 2 sẽ tránh mặt được nhiều mẫu flagship từ các hãng khác.\r\n\r\n.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"\" src=\"https://cdn.tgdd.vn/Files/2020/02/18/1237321/2_1280x720-800-resize.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p style=\"font-size:18px;color:black;line-height:2\">Hơn nữa, báo cáo cũng cho biết, iPhone SE 2 sẽ lên kệ từ ngày 3/4/2020. Thiết bị sẽ dùng chip Apple A13 tương tự như iPhone 11 và có giá bán là 399 USD (khoảng 9.2 triệu đồng). Vì đây là một sản phẩm giá rẻ, nên nhà Táo có thể cắt giảm chi phí bằng việc sử dụng màn hình LCD độ phân giải HD, thậm chí là có thể tái chế từ bộ khung vỏ của iPhone 8.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '2020-03-01 12:30:20'),
(7, 'Mẫu smartphone tầm trung Galaxy M31 sẽ ra mắt vào ngày 25/2 tới đây, việc ra mắt vẫn còn 1 tuần nữa nhưng hầu như mọi thứ về thiết bị đã lộ diện. Bây giờ là cả thông số kỹ thuật đầy đủ kèm nhiều hình ảnh báo chí sắc nét.\r\n                ', '0_1280x720-600x400.jpg', 'Galaxy M31 lộ đầy đủ cấu hình', '<h1>&nbsp;</h1>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"\" src=\"https://cdn.tgdd.vn/Files/2020/02/19/1237468/0_1280x720-800-resize.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Mẫu smartphone tầm trung Galaxy M31 sẽ ra mắt v&agrave;o ng&agrave;y 25/2 tới đ&acirc;y, việc ra mắt vẫn c&ograve;n 1 tuần nữa nhưng hầu như mọi thứ về thiết bị đ&atilde; lộ diện. B&acirc;y giờ l&agrave; cả th&ocirc;ng số kỹ thuật đầy đủ k&egrave;m nhiều h&igrave;nh ảnh b&aacute;o ch&iacute; sắc n&eacute;t. R&ograve; rỉ mới nhất đến từ Sudhanshu Ambhore (@Sudhanshu1414), b&agrave;i đăng tr&ecirc;n Twitter của leaker n&agrave;y cho biết, Galaxy M31 sẽ d&ugrave;ng chip Exynos 9611, đ&acirc;y l&agrave; bộ vi xử l&yacute; đ&atilde; sử dụng tr&ecirc;n Galaxy M30s. M&aacute;y c&oacute; bộ nhớ RAM 6 GB, ROM 128 GB v&agrave; c&oacute; khe cắm thẻ nhớ microSD để mở rộng th&ecirc;m 512 GB nếu cần thiết.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"\" src=\"https://cdn.tgdd.vn/Files/2020/02/19/1237468/1-_3301x1223-800-resize.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>B&ecirc;n cạnh th&ocirc;ng số kỹ thuật, Sudhanshu Ambhore cũng chia sẻ th&ecirc;m nhiều h&igrave;nh ảnh b&aacute;o ch&iacute; của 3 m&agrave;u sắc kh&aacute;c nhau, bao gồm m&agrave;u Xanh, Đen v&agrave; m&agrave;u Đỏ. H&igrave;nh ảnh cho thấy mặt sau với cụm camera c&oacute; phần lồi l&ecirc;n 1 ch&uacute;t. Bạn cũng c&oacute; thể thấy m&aacute;y qu&eacute;t v&acirc;n tay mặt sau, cổng cắm tai nghe 3.5 mm ở cạnh dưới.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '2020-03-06 17:00:00');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`mabl`),
  ADD KEY `bl-sp` (`idsp`),
  ADD KEY `bl-kh` (`idnd`);

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`id_hdct`),
  ADD KEY `cthd-sp` (`idsp`),
  ADD KEY `hd-cthd` (`mahd`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`madm`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`mahd`),
  ADD KEY `hd-kh` (`idnd`);

--
-- Chỉ mục cho bảng `hotro`
--
ALTER TABLE `hotro`
  ADD PRIMARY KEY (`maht`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`idnd`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`idsp`),
  ADD KEY `dm-sp` (`madm`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`idtt`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `mabl` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `id_hdct` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `madm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `mahd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT cho bảng `hotro`
--
ALTER TABLE `hotro`
  MODIFY `maht` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `idnd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `idsp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `idtt` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `bl-kh` FOREIGN KEY (`idnd`) REFERENCES `khachhang` (`idnd`),
  ADD CONSTRAINT `bl-sp` FOREIGN KEY (`idsp`) REFERENCES `sanpham` (`idsp`);

--
-- Các ràng buộc cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `cthd-sp` FOREIGN KEY (`idsp`) REFERENCES `sanpham` (`idsp`),
  ADD CONSTRAINT `hd-cthd` FOREIGN KEY (`mahd`) REFERENCES `hoadon` (`mahd`);

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `kh-hd` FOREIGN KEY (`idnd`) REFERENCES `khachhang` (`idnd`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `dm-sp` FOREIGN KEY (`madm`) REFERENCES `danhmuc` (`madm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
