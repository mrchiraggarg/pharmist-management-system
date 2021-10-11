-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2021 at 04:37 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medical_store_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(25) NOT NULL,
  `admin_username` varchar(25) NOT NULL,
  `admin_password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`) VALUES
(1, 'admin', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_address` varchar(255) NOT NULL,
  `company_person` varchar(255) NOT NULL,
  `company_mobile` varchar(255) NOT NULL,
  `cid` varchar(255) NOT NULL,
  `company_check_item` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company_name`, `company_address`, `company_person`, `company_mobile`, `cid`, `company_check_item`) VALUES
(1, 'GENO PHARMA', 'GOA, INDIA', 'DILIP SALGAOCAR', '8322257216', '9287d50596c30554ca41', ''),
(2, 'MANKIND PHARMA LTD', 'NEW DELHI, INDIA', 'RAJEEV JUNEJA', '011 4654 1111', 'be4af3cdb79943a3cbfa', ''),
(3, 'FRANCO INDIAN PHARMACEUTICALS PVT LTD', 'MAHARASHTRA, INDIA', 'VRK SUBRAMANIAN', '022 2493 4026', 'a2b3e3b038321d4bb71a', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_disease` varchar(255) NOT NULL,
  `customer_medicine1` varchar(255) NOT NULL,
  `customer_quantity1` varchar(255) NOT NULL,
  `customer_mrp1` int(255) NOT NULL,
  `customer_prescription` text NOT NULL,
  `customer_medicine2` varchar(255) NOT NULL,
  `customer_mrp2` varchar(255) NOT NULL,
  `customer_quantity2` varchar(255) NOT NULL,
  `customer_medicine3` varchar(255) NOT NULL,
  `customer_mrp3` varchar(255) NOT NULL,
  `customer_quantity3` varchar(255) NOT NULL,
  `customer_address` varchar(255) NOT NULL,
  `customer_mobile` varchar(255) NOT NULL,
  `customer_date` varchar(255) NOT NULL,
  `customer_payment_method` varchar(255) NOT NULL,
  `customer_check_item` varchar(255) NOT NULL,
  `customer_doctor_name` varchar(255) NOT NULL,
  `customer_doctor_mobile` varchar(255) NOT NULL,
  `customer_doctor_special` varchar(255) NOT NULL,
  `cid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_disease`, `customer_medicine1`, `customer_quantity1`, `customer_mrp1`, `customer_prescription`, `customer_medicine2`, `customer_mrp2`, `customer_quantity2`, `customer_medicine3`, `customer_mrp3`, `customer_quantity3`, `customer_address`, `customer_mobile`, `customer_date`, `customer_payment_method`, `customer_check_item`, `customer_doctor_name`, `customer_doctor_mobile`, `customer_doctor_special`, `cid`) VALUES
(1, 'Nitin Solanki', 'Blood Pressure', 'AMLOKIND AT', '10', 25, '1.jpg', '', '0', '0', '', '0', '0', 'Shahdara, Delhi', '9999888899', '17/March/2021', 'Paytm', '', 'Dr. Arjun', '9898989898', 'MBBS', 'a25dd6897b47917734ee'),
(2, 'SHIVAM SHARMA', 'BLOOD PRESSURE, DIABETES AND FEVER', 'AMLOKIND AT', '10', 25, 'pic.jfif', 'GLYCIPHAGE SR', '30', '10', 'PARACETAMOL', '15', '10', 'SHAHDRA', '7897897897', '12/March/2021', 'Paytm', '', 'Dr. Arjun', '9898989898', 'MBBS', '2a2d623e1f1f47399ecd'),
(3, 'Samanth', 'FEVER', 'PARACETAMOL', '10', 15, 'pic.jfif', '', '0', '0', '', '0', '0', 'Shimla', '92843095', '12/feb/2021', 'Paytm', '', 'Dr. Arjun', '9898989898', 'MBBS', '806b265057ca84535323');

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `medicine_id` int(25) NOT NULL,
  `medicine_name` varchar(100) NOT NULL,
  `medicine_mrp` varchar(25) NOT NULL,
  `medicine_check_item` varchar(10) NOT NULL,
  `mid` varchar(255) NOT NULL,
  `medicine_purpose` varchar(255) NOT NULL,
  `medicine_batch_no` varchar(255) NOT NULL,
  `medicine_dom` varchar(255) NOT NULL,
  `medicine_doe` varchar(255) NOT NULL,
  `medicine_manufacturer` varchar(255) NOT NULL,
  `medicine_salt` varchar(255) NOT NULL,
  `medicine_inventory` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`medicine_id`, `medicine_name`, `medicine_mrp`, `medicine_check_item`, `mid`, `medicine_purpose`, `medicine_batch_no`, `medicine_dom`, `medicine_doe`, `medicine_manufacturer`, `medicine_salt`, `medicine_inventory`) VALUES
(1, 'AMLOKIND AT', '25', '', 'a47fe5020083ad205e63', 'BLOOD PRESSURE', '322134', '1/Jan/2021', '1/Jan/2022', 'MANKIND PHARMA LTD', 'AMLODIPINE + ATENOLOL', 40),
(2, 'GLYCIPHAGE SR', '30', '', '1278a7081cfe896138f3', 'DIABETES', '307054', '1/Jan/2021', '1/Jan/2022', 'FRANCO INDIAN PHARMACEUTICALS PVT LTD', 'METFORMIN', 50),
(3, 'PARACETAMOL', '12', '', 'f03c7509324189f353f2', 'FEVER', '307006', '1/Jan/2021', '1/Jan/2022', 'FRANCO INDIAN PHARMACEUTICALS PVT LTD', 'PARACETAMOL', 130);

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `purchase_id` int(255) NOT NULL,
  `supplier_name` varchar(255) NOT NULL,
  `purchase_date` varchar(255) NOT NULL,
  `purchase_product` varchar(255) NOT NULL,
  `purchase_quantity` int(255) NOT NULL,
  `purchase_description` varchar(255) NOT NULL,
  `purchase_mrp` varchar(255) NOT NULL,
  `purchase_check_item` varchar(255) NOT NULL,
  `pid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`purchase_id`, `supplier_name`, `purchase_date`, `purchase_product`, `purchase_quantity`, `purchase_description`, `purchase_mrp`, `purchase_check_item`, `pid`) VALUES
(1, 'MANKIND PHARMA LTD', '14/Feb/2021', 'AMLOKIND AT', 50, '', '25', '', 'b35e5c71eacc4da8580b'),
(2, 'FRANCO INDIAN PHARMACEUTICALS PVT LTD', '26/Feb/2021', 'AMLOKIND AT', 30, '', '30', '', '377d9c899df54bb64cf4'),
(3, 'FRANCO INDIAN PHARMACEUTICALS PVT LTD', '26/Feb/2021', 'PARACETAMOL', 50, '', '12', '', '5df0c8c406dbcaad6ba0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `medicines`
--
ALTER TABLE `medicines`
  ADD PRIMARY KEY (`medicine_id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`purchase_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
  MODIFY `medicine_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `purchase_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
