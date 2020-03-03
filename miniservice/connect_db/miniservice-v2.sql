-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03 มี.ค. 2020 เมื่อ 08:46 AM
-- เวอร์ชันของเซิร์ฟเวอร์: 10.4.11-MariaDB
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
-- โครงสร้างตาราง `tblanswer`
--

CREATE TABLE `tblanswer` (
  `number` int(10) NOT NULL,
  `question_id` int(10) NOT NULL,
  `emp_id` int(10) NOT NULL,
  `answer` text COLLATE utf8_unicode_ci NOT NULL,
  `dateanswer` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `tblcustomer`
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

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `tblemployee`
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
-- dump ตาราง `tblemployee`
--

INSERT INTO `tblemployee` (`emp_id`, `emp_id_card`, `emp_prefix`, `emp_firstname`, `emp_lastname`, `emp_phoneno`, `emp_email`, `position_id`, `emp_username`, `emp_password`) VALUES
(1, '1909802272043', 'นาย', 'วรพล', 'เหมือนทองมาก', '0946797960', '6210210621@psu.ac.th', 1, 'admin', '1234'),
(2, '1909802197335', 'นาย', 'ทนงศักดิ์', 'สุขยะฤกษ์', '0887832654', '6210210599@psu.ac.th', 3, '3', '1234'),
(3, '1909802197456', 'นางสาว', 'สมศรี', 'สมมาตร', '0847894545', 'somsri@gmail.com', 2, '2', '1234');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `tbljob`
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
  `image_accessory` text COLLATE utf8_unicode_ci NOT NULL,
  `status_id` int(10) NOT NULL,
  `date_jobstart` date NOT NULL,
  `date_jobend` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `tbljobcost`
--

CREATE TABLE `tbljobcost` (
  `number` int(10) NOT NULL,
  `job_id` int(10) NOT NULL,
  `list` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `cost` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `tbljobstatus`
--

CREATE TABLE `tbljobstatus` (
  `number` int(10) NOT NULL,
  `job_id` int(10) NOT NULL,
  `status_id` int(10) NOT NULL,
  `emp_id` int(10) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `tblmemo`
--

CREATE TABLE `tblmemo` (
  `number` int(10) NOT NULL,
  `job_id` int(10) NOT NULL,
  `status_id` int(10) NOT NULL,
  `message_memo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date_memo` date NOT NULL DEFAULT current_timestamp(),
  `emp_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `tblposition`
--

CREATE TABLE `tblposition` (
  `position_id` int(10) NOT NULL,
  `position_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- dump ตาราง `tblposition`
--

INSERT INTO `tblposition` (`position_id`, `position_name`) VALUES
(1, 'ผู้ดูแลระบบ'),
(2, 'พนักงานหน้าร้าน'),
(3, 'พนักงานซ่อม');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `tblquestion`
--

CREATE TABLE `tblquestion` (
  `question_id` int(10) NOT NULL,
  `cus_id` int(10) NOT NULL,
  `datequestion` date NOT NULL DEFAULT current_timestamp(),
  `questiontext` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `tblstatus`
--

CREATE TABLE `tblstatus` (
  `status_id` int(10) NOT NULL,
  `status_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- dump ตาราง `tblstatus`
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
-- โครงสร้างตาราง `tbltransferslip`
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
-- โครงสร้างตาราง `tblvideo`
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
-- Indexes for table `tblanswer`
--
ALTER TABLE `tblanswer`
  ADD PRIMARY KEY (`number`),
  ADD KEY `question_id` (`question_id`,`emp_id`),
  ADD KEY `emp_id` (`emp_id`);

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
  ADD PRIMARY KEY (`question_id`),
  ADD KEY `cus_id` (`cus_id`);

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
-- AUTO_INCREMENT for table `tblanswer`
--
ALTER TABLE `tblanswer`
  MODIFY `number` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblcustomer`
--
ALTER TABLE `tblcustomer`
  MODIFY `cus_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblemployee`
--
ALTER TABLE `tblemployee`
  MODIFY `emp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbljob`
--
ALTER TABLE `tbljob`
  MODIFY `job_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbljobcost`
--
ALTER TABLE `tbljobcost`
  MODIFY `number` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbljobstatus`
--
ALTER TABLE `tbljobstatus`
  MODIFY `number` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblmemo`
--
ALTER TABLE `tblmemo`
  MODIFY `number` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblposition`
--
ALTER TABLE `tblposition`
  MODIFY `position_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblquestion`
--
ALTER TABLE `tblquestion`
  MODIFY `question_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- Constraints for table `tblanswer`
--
ALTER TABLE `tblanswer`
  ADD CONSTRAINT `tblanswer_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `tblquestion` (`question_id`),
  ADD CONSTRAINT `tblanswer_ibfk_2` FOREIGN KEY (`emp_id`) REFERENCES `tblemployee` (`emp_id`);

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
-- Constraints for table `tblquestion`
--
ALTER TABLE `tblquestion`
  ADD CONSTRAINT `tblquestion_ibfk_1` FOREIGN KEY (`cus_id`) REFERENCES `tblcustomer` (`cus_id`);

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
