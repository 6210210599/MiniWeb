-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2020 at 08:57 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miniservice`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` varchar(2) NOT NULL,
  `department_name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_name`) VALUES
('01', 'Engineering'),
('02', 'Administration');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(11) NOT NULL,
  `employee_name` varchar(128) NOT NULL,
  `position_id` varchar(2) NOT NULL,
  `salary` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `employee_name`, `position_id`, `salary`) VALUES
(1, 'John Mendez', '01', 3000.5),
(2, 'Ben Mauri', '02', 5000),
(3, 'Nina Valengo', '01', 2500.8),
(4, 'Sarah Willis', '03', 1800),
(5, 'Jane Johnson', '04', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `position_id` varchar(2) NOT NULL,
  `position_name` varchar(64) NOT NULL,
  `department_id` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`position_id`, `position_name`, `department_id`) VALUES
('01', 'Engineer', '01'),
('02', 'Head Engineer', '01'),
('03', 'Secretary', '02'),
('04', 'Senior Secretary', '02');

-- --------------------------------------------------------

--
-- Table structure for table `tblcustomer`
--

CREATE TABLE `tblcustomer` (
  `cus_id` int(10) NOT NULL,
  `cus_id_card` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `cus_prefix` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `cus_firstname` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `cus_lastname` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `cus_phoneno` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `cus_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cus_username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `cus_password` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblcustomer`
--

INSERT INTO `tblcustomer` (`cus_id`, `cus_id_card`, `cus_prefix`, `cus_firstname`, `cus_lastname`, `cus_phoneno`, `cus_email`, `cus_username`, `cus_password`) VALUES
(2, '1909802197335', 'นาย', 'ทนงศักดิ์', 'สุขยะฤกษ์', '0874772222', '6210210599@psu.ac.th', '4', '123456'),
(3, '1909805448775', 'นางสาว', 'สมศรี', 'สมสม', '0874512525', '1513@gmail.com', '5', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `tblemployee`
--

CREATE TABLE `tblemployee` (
  `emp_id` int(10) NOT NULL,
  `emp_id_card` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `emp_prefix` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `emp_firstname` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `emp_lastname` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `emp_phoneno` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `emp_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `position_id` int(10) NOT NULL,
  `emp_username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `emp_password` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblemployee`
--

INSERT INTO `tblemployee` (`emp_id`, `emp_id_card`, `emp_prefix`, `emp_firstname`, `emp_lastname`, `emp_phoneno`, `emp_email`, `position_id`, `emp_username`, `emp_password`) VALUES
(2, '1909802197335', 'นาย', 'ทนงศักดิ์', 'สุขยะฤกษ์', '0887831111', '6210210599@psu.ac.th', 3, '3', '1234'),
(3, '1909802197456', 'นางสาว', 'สมศรี', 'สมมาตร', '0847899999', 'somsri@gmail.com', 2, '2', '1234'),
(4, '1909802197446', 'นาย', 'วรพล', 'เหมืองทองมาก', '0946797960', '6210210621@psu.ac.th', 1, '1', '1234'),
(5, '2222222222222', 'นาย', 'ทดสอบ', 'ทดสอบ', '0748954862', '1516@psu.ac.th', 2, '60', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `tbljob`
--

CREATE TABLE `tbljob` (
  `job_id` int(10) NOT NULL,
  `cus_id` int(10) NOT NULL,
  `sn` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `type_product` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `product_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `product_model` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `accessory` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `symptoms` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `status_id` int(10) NOT NULL,
  `date_jobstart` datetime NOT NULL,
  `date_jobend` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbljob`
--

INSERT INTO `tbljob` (`job_id`, `cus_id`, `sn`, `type_product`, `product_name`, `product_model`, `accessory`, `symptoms`, `image`, `status_id`, `date_jobstart`, `date_jobend`) VALUES
(2, 2, '4561', 'NOTEBOOK', 'ACER', '1234', 'สาย', 'เสีย', '202002152081500772.jpg', 5, '2020-03-08 10:21:57', '0000-00-00 00:00:00'),
(3, 3, '4561', 'NOTEBOOK', 'ACER', '1234', 'bag', 'เสีย', '202002152081500772.jpg', 3, '2020-03-08 10:23:25', '0000-00-00 00:00:00'),
(4, 3, '1234862591', 'PC', 'LENOVO', 'A533', 'สายชาร์จ', 'เปิดไม่ติด', '202002152081500772.jpg', 3, '2020-03-08 10:23:25', '0000-00-00 00:00:00'),
(14, 2, '1', 'PC', '1', '1', '1', '1', '221032020.jpg', 11, '2020-03-22 21:13:50', '0000-00-00 00:00:00'),
(16, 2, '4', 'NOTEBOOK', '4', '4', '4', '4', '221032020-07-12-40.jpeg', 10, '2020-03-22 21:10:48', '0000-00-00 00:00:00'),
(18, 2, '977616151616', 'PC', 'lenovo', 'a530', 'สายชาร์จ', 'ใช้งานไม่ได้', '222032020-09-36-50.jpg', 1, '2020-03-22 21:36:50', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbljobcost`
--

CREATE TABLE `tbljobcost` (
  `number` int(10) NOT NULL,
  `job_id` int(10) NOT NULL,
  `list` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `cost` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbljobcost`
--

INSERT INTO `tbljobcost` (`number`, `job_id`, `list`, `cost`) VALUES
(5, 2, 'ค่าแรง', 20),
(9, 2, 'ค่าอะไหล่', 900);

-- --------------------------------------------------------

--
-- Table structure for table `tbljobstatus`
--

CREATE TABLE `tbljobstatus` (
  `number` int(10) NOT NULL,
  `job_id` int(10) NOT NULL,
  `status_id` int(10) NOT NULL,
  `emp_id` int(10) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbljobstatus`
--

INSERT INTO `tbljobstatus` (`number`, `job_id`, `status_id`, `emp_id`, `date`) VALUES
(3, 2, 1, 2, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tblmemo`
--

CREATE TABLE `tblmemo` (
  `number` int(10) NOT NULL,
  `job_id` int(10) NOT NULL,
  `status_id` int(10) NOT NULL,
  `message_memo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date_memo` date NOT NULL DEFAULT current_timestamp(),
  `emp_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblmemo`
--

INSERT INTO `tblmemo` (`number`, `job_id`, `status_id`, `message_memo`, `date_memo`, `emp_id`) VALUES
(5, 2, 14, 'ซ่อมแล้ว', '2020-03-22', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tblposition`
--

CREATE TABLE `tblposition` (
  `position_id` int(10) NOT NULL,
  `position_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblposition`
--

INSERT INTO `tblposition` (`position_id`, `position_name`) VALUES
(1, 'ผู้ดูแลระบบ'),
(2, 'พนักงานหน้าร้าน'),
(3, 'พนักงานซ่อม');

-- --------------------------------------------------------

--
-- Table structure for table `tblquestion`
--

CREATE TABLE `tblquestion` (
  `question_id` int(10) NOT NULL,
  `question` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `details` text COLLATE utf8_unicode_ci NOT NULL,
  `questiondate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblquestion`
--

INSERT INTO `tblquestion` (`question_id`, `question`, `details`, `questiondate`) VALUES
(1, 'เครื่องมือตรวจเช็คที่ดีที่สุด ถูกติดตั้งอยู่ในร้าน เพื่อได้รับการวิเคราะห์อาการที่มีความแม่นยำมากๆๆๆ', 'PC = 400 / notebook = 500\r\nพร้อมโปรแกรมพื้นฐานทั่วไป หากต้องการลงโปรแกรมใช้งานเฉพาะด้าน เช่นออกแบบ เขียนแบบ ตัดต่อวีดีโอต่างๆ รวมไปถึงเกมส์ขนาดใหญ่ คิดโปรแกรมละ100 หรือเหมาจ่าย300 จะลงกี่โปรแกรมก็ได้', '2020-04-02 16:37:58'),
(2, 'คำถามที่ 2', 'คำตอบที่ 2', '2020-04-02 16:37:58'),
(3, 'คำถามที่ 3', 'คำตอบที่ 3', '2020-04-02 16:37:58'),
(4, 'คำถามที่ 4', 'คำตอบที่ 4', '2020-04-02 16:37:58');

-- --------------------------------------------------------

--
-- Table structure for table `tblstatus`
--

CREATE TABLE `tblstatus` (
  `status_id` int(10) NOT NULL,
  `status_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblstatus`
--

INSERT INTO `tblstatus` (`status_id`, `status_name`) VALUES
(1, 'รออนุมัติ'),
(2, 'รอรับสินค้าจากลูกค้า'),
(3, 'รับสินค้าจากลูกค้าแล้ว'),
(4, 'พนักงานซ่อมรับสินค้า'),
(5, 'ตรวจสอบอาการ'),
(6, 'รอเสนอราคา'),
(7, 'ยืนยันการเสนอราคา'),
(8, 'ดำเนินการซ่อม'),
(9, 'จบงานซ่อม'),
(10, 'ปิดงาน'),
(11, 'ยกเลิก'),
(12, 'โทรเข้า'),
(13, 'โทรออก'),
(14, 'ภายใน');

-- --------------------------------------------------------

--
-- Table structure for table `tbltransferslip`
--

CREATE TABLE `tbltransferslip` (
  `transfer_slip_id` int(10) NOT NULL,
  `job_id` int(10) NOT NULL,
  `cus_id` int(10) NOT NULL,
  `data_transfer` date NOT NULL,
  `money` int(10) NOT NULL,
  `Bank _number` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Bank_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `transfer_slip` text COLLATE utf8_unicode_ci NOT NULL,
  `transfer_slip _date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblvideo`
--

CREATE TABLE `tblvideo` (
  `video_id` int(10) NOT NULL,
  `video_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `video_description` text COLLATE utf8_unicode_ci NOT NULL,
  `url` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`position_id`);

--
-- Indexes for table `tblcustomer`
--
ALTER TABLE `tblcustomer`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `tblemployee`
--
ALTER TABLE `tblemployee`
  ADD PRIMARY KEY (`emp_id`),
  ADD KEY `position_id` (`position_id`);

--
-- Indexes for table `tbljob`
--
ALTER TABLE `tbljob`
  ADD PRIMARY KEY (`job_id`),
  ADD KEY `cus_id` (`cus_id`,`status_id`),
  ADD KEY `status_id` (`status_id`);

--
-- Indexes for table `tbljobcost`
--
ALTER TABLE `tbljobcost`
  ADD PRIMARY KEY (`number`),
  ADD KEY `job_id` (`job_id`);

--
-- Indexes for table `tbljobstatus`
--
ALTER TABLE `tbljobstatus`
  ADD PRIMARY KEY (`number`),
  ADD KEY `job_id` (`job_id`,`status_id`,`emp_id`),
  ADD KEY `emp_id` (`emp_id`),
  ADD KEY `status_id` (`status_id`);

--
-- Indexes for table `tblmemo`
--
ALTER TABLE `tblmemo`
  ADD PRIMARY KEY (`number`),
  ADD KEY `job_id` (`job_id`,`status_id`,`emp_id`),
  ADD KEY `status_id` (`status_id`),
  ADD KEY `emp_id` (`emp_id`);

--
-- Indexes for table `tblposition`
--
ALTER TABLE `tblposition`
  ADD PRIMARY KEY (`position_id`);

--
-- Indexes for table `tblquestion`
--
ALTER TABLE `tblquestion`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `tblstatus`
--
ALTER TABLE `tblstatus`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `tbltransferslip`
--
ALTER TABLE `tbltransferslip`
  ADD PRIMARY KEY (`transfer_slip_id`),
  ADD KEY `job_id` (`job_id`,`cus_id`),
  ADD KEY `cus_id` (`cus_id`);

--
-- Indexes for table `tblvideo`
--
ALTER TABLE `tblvideo`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblcustomer`
--
ALTER TABLE `tblcustomer`
  MODIFY `cus_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblemployee`
--
ALTER TABLE `tblemployee`
  MODIFY `emp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbljob`
--
ALTER TABLE `tbljob`
  MODIFY `job_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbljobcost`
--
ALTER TABLE `tbljobcost`
  MODIFY `number` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbljobstatus`
--
ALTER TABLE `tbljobstatus`
  MODIFY `number` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblmemo`
--
ALTER TABLE `tblmemo`
  MODIFY `number` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblposition`
--
ALTER TABLE `tblposition`
  MODIFY `position_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblquestion`
--
ALTER TABLE `tblquestion`
  MODIFY `question_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblstatus`
--
ALTER TABLE `tblstatus`
  MODIFY `status_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbltransferslip`
--
ALTER TABLE `tbltransferslip`
  MODIFY `transfer_slip_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblvideo`
--
ALTER TABLE `tblvideo`
  MODIFY `video_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblemployee`
--
ALTER TABLE `tblemployee`
  ADD CONSTRAINT `tblemployee_ibfk_1` FOREIGN KEY (`position_id`) REFERENCES `tblposition` (`position_id`);

--
-- Constraints for table `tbljob`
--
ALTER TABLE `tbljob`
  ADD CONSTRAINT `tbljob_ibfk_1` FOREIGN KEY (`status_id`) REFERENCES `tblstatus` (`status_id`),
  ADD CONSTRAINT `tbljob_ibfk_2` FOREIGN KEY (`cus_id`) REFERENCES `tblcustomer` (`cus_id`);

--
-- Constraints for table `tbljobcost`
--
ALTER TABLE `tbljobcost`
  ADD CONSTRAINT `tbljobcost_ibfk_1` FOREIGN KEY (`job_id`) REFERENCES `tbljob` (`job_id`);

--
-- Constraints for table `tbljobstatus`
--
ALTER TABLE `tbljobstatus`
  ADD CONSTRAINT `tbljobstatus_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `tblemployee` (`emp_id`),
  ADD CONSTRAINT `tbljobstatus_ibfk_2` FOREIGN KEY (`job_id`) REFERENCES `tbljob` (`job_id`),
  ADD CONSTRAINT `tbljobstatus_ibfk_3` FOREIGN KEY (`status_id`) REFERENCES `tblstatus` (`status_id`);

--
-- Constraints for table `tblmemo`
--
ALTER TABLE `tblmemo`
  ADD CONSTRAINT `tblmemo_ibfk_1` FOREIGN KEY (`job_id`) REFERENCES `tbljob` (`job_id`),
  ADD CONSTRAINT `tblmemo_ibfk_2` FOREIGN KEY (`status_id`) REFERENCES `tblstatus` (`status_id`),
  ADD CONSTRAINT `tblmemo_ibfk_3` FOREIGN KEY (`emp_id`) REFERENCES `tblemployee` (`emp_id`);

--
-- Constraints for table `tbltransferslip`
--
ALTER TABLE `tbltransferslip`
  ADD CONSTRAINT `tbltransferslip_ibfk_1` FOREIGN KEY (`job_id`) REFERENCES `tbljob` (`job_id`),
  ADD CONSTRAINT `tbltransferslip_ibfk_2` FOREIGN KEY (`cus_id`) REFERENCES `tblcustomer` (`cus_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
