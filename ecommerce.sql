-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 06, 2023 at 03:15 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `HelpRequest`
--

CREATE TABLE `HelpRequest` (
  `ticketnum` int(11) NOT NULL,
  `usernum` int(11) NOT NULL,
  `orderid` varchar(50) NOT NULL,
  `challenges` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `HelpRequest`
--

INSERT INTO `HelpRequest` (`ticketnum`, `usernum`, `orderid`, `challenges`) VALUES
(6, 1, '1', 'Help');

-- --------------------------------------------------------

--
-- Table structure for table `Order_History`
--

CREATE TABLE `Order_History` (
  `Order_ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Order_History`
--

INSERT INTO `Order_History` (`Order_ID`, `User_ID`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Order_History_Information`
--

CREATE TABLE `Order_History_Information` (
  `Order_ID` int(11) NOT NULL,
  `Prod_Name` varchar(50) NOT NULL,
  `Price` decimal(9,2) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Order_History_Information`
--

INSERT INTO `Order_History_Information` (`Order_ID`, `Prod_Name`, `Price`, `Quantity`) VALUES
(1, 'PS5', 699.99, 1),
(2, 'PS5', 699.99, 1),
(3, 'Xbox', 499.99, 1),
(4, 'CyberTruck', 79999.99, 1),
(6, 'CyberTruck', 79999.99, 1),
(7, 'PS5', 699.99, 1),
(8, 'PS5', 699.99, 1),
(9, 'PS5', 699.99, 1),
(10, 'PS5', 699.99, 1),
(11, 'PS5', 699.99, 1),
(12, 'PS5', 699.99, 1),
(13, 'PS5', 699.99, 1),
(13, 'PS5', 699.99, 1),
(14, 'CyberTruck', 79999.99, 1),
(15, 'CyberTruck', 79999.99, 1),
(16, 'CyberTruck', 79999.99, 1),
(17, 'CyberTruck', 79999.99, 1),
(18, 'CyberTruck', 79999.99, 1),
(19, 'CyberTruck', 79999.99, 1),
(22, 'CyberTruck', 79999.99, 1),
(23, 'Model X', 80000.00, 1),
(24, 'CyberTruck', 79999.99, 1),
(25, 'Model X', 80000.00, 1),
(26, 'iPhone 5s', 99.99, 1),
(27, 'Xbox', 499.99, 1),
(27, 'Xbox', 499.99, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Product_Information`
--

CREATE TABLE `Product_Information` (
  `Product_ID` int(11) NOT NULL,
  `Prod_Name` varchar(50) NOT NULL,
  `Prod_Description` varchar(100) NOT NULL,
  `Company` varchar(25) NOT NULL,
  `Price` decimal(9,2) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Product_Information`
--

INSERT INTO `Product_Information` (`Product_ID`, `Prod_Name`, `Prod_Description`, `Company`, `Price`, `Quantity`) VALUES
(14, 'PS5', 'Gaming', 'Sony', 699.99, 0),
(15, 'Xbox', 'Another Gaming', 'Microsoft', 499.99, 0),
(16, 'iPhone 5s', 'Old Phone!!', 'Apple', 99.99, 0),
(17, 'CyberTruck', 'NEW CAR', 'Tesla', 79999.99, 0),
(18, 'Model X', 'A car', 'Tesla', 80000.00, 3);

-- --------------------------------------------------------

--
-- Table structure for table `Product_Seller_Information`
--

CREATE TABLE `Product_Seller_Information` (
  `Product_ID` int(11) NOT NULL,
  `Seller_ID` int(11) NOT NULL,
  `Seller_Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Product_Seller_Information`
--

INSERT INTO `Product_Seller_Information` (`Product_ID`, `Seller_ID`, `Seller_Email`) VALUES
(14, 1, 'hi@gmail.com'),
(15, 1, 'hi@gmail.com'),
(16, 1, 'hi@gmail.com'),
(17, 1, 'hi@gmail.com'),
(18, 1, 'hi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `Return_Order`
--

CREATE TABLE `Return_Order` (
  `Order_ID` int(50) NOT NULL,
  `User_ID` int(50) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `Prod_Name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Return_Order`
--

INSERT INTO `Return_Order` (`Order_ID`, `User_ID`, `Status`, `Prod_Name`) VALUES
(1, 1, 'Returned', 'PS5'),
(23, 1, 'Returned', 'Model X'),
(27, 1, 'Returned', 'Xbox');

-- --------------------------------------------------------

--
-- Table structure for table `Reviews`
--

CREATE TABLE `Reviews` (
  `Review_ID` int(11) NOT NULL,
  `User_ID` int(11) DEFAULT NULL,
  `Product_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Reviews`
--

INSERT INTO `Reviews` (`Review_ID`, `User_ID`, `Product_ID`) VALUES
(1, 1, 14),
(2, 2, 14),
(3, 3, 14),
(4, 3, 14);

-- --------------------------------------------------------

--
-- Table structure for table `Review_Information`
--

CREATE TABLE `Review_Information` (
  `Review_ID` int(11) NOT NULL,
  `Rating` int(11) DEFAULT NULL,
  `Content` varchar(100) DEFAULT NULL,
  `MyTime` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Review_Information`
--

INSERT INTO `Review_Information` (`Review_ID`, `Rating`, `Content`, `MyTime`) VALUES
(1, 5, 'Decent', 'hi'),
(2, 10, 'LOVED IT', 'hi'),
(4, 0, 'Not in box', 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `Rollback`
--

CREATE TABLE `Rollback` (
  `RollBack_ID` int(11) NOT NULL,
  `User_ID` int(11) DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Shopping_Cart`
--

CREATE TABLE `Shopping_Cart` (
  `ShoppingCart_ID` int(50) NOT NULL,
  `Product_ID` int(50) DEFAULT NULL,
  `usernum` int(50) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Transcations`
--

CREATE TABLE `Transcations` (
  `Transaction_ID` int(50) NOT NULL,
  `ShoppingCart_ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `Card_Number` varchar(16) NOT NULL,
  `CCV_Num` varchar(4) NOT NULL,
  `Expiration_Date` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `Usernum` int(11) NOT NULL,
  `First_Name` varchar(20) NOT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `mypassword` varchar(50) NOT NULL,
  `Phone_Number` varchar(25) NOT NULL,
  `myaddress` varchar(50) NOT NULL,
  `City` varchar(15) NOT NULL,
  `mystate` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`Usernum`, `First_Name`, `Last_Name`, `Email`, `mypassword`, `Phone_Number`, `myaddress`, `City`, `mystate`) VALUES
(1, 'Shubh', 'Patel', 'sp2020@gmail.com', 'Shubh', '230-232-2334', '320 Lane Way', 'York City', 'PA'),
(2, 'Yash', 'Raj', 'yr@gmail.com', 'yash', '234-342-2343', '230 Lane Rd', 'York', 'PA'),
(3, 'Michael', 'Jackson', 'mj@gmail.com', 'mj3030', '113-436-788', '300 2nd St', 'Harrisburg', 'Pennsylvania'),
(4, 'Alex', 'Smith', 'aj@gmail.com', 'as2020', '134-394-788', '400 Main Ave', 'State College', 'Pennsylvania'),
(9, 'Dong', 'Xie', 'dongxie@gmail.com', '431', '234-533-3345', '100 Main Ave', 'lpl', 'Pennsylvania'),
(10, 'Donald', 'Trump', 'Dtrump@yahoo.com', 'america', '234-445-2433', '1235 White House Ave', 'Seattle', 'WA');

-- --------------------------------------------------------

--
-- Table structure for table `User_Cart_Items`
--

CREATE TABLE `User_Cart_Items` (
  `User_ID` int(11) DEFAULT NULL,
  `Prod_Name` varchar(25) DEFAULT NULL,
  `Price` decimal(9,2) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `Total_Price` decimal(9,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `User_Cart_Items`
--

INSERT INTO `User_Cart_Items` (`User_ID`, `Prod_Name`, `Price`, `Quantity`, `Total_Price`) VALUES
(1, 'PS5', 699.99, 1, 699.99),
(1, 'PS5', 699.99, 1, 699.99);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `HelpRequest`
--
ALTER TABLE `HelpRequest`
  ADD PRIMARY KEY (`ticketnum`);

--
-- Indexes for table `Order_History`
--
ALTER TABLE `Order_History`
  ADD PRIMARY KEY (`Order_ID`),
  ADD KEY `fbkusers` (`User_ID`);

--
-- Indexes for table `Order_History_Information`
--
ALTER TABLE `Order_History_Information`
  ADD KEY `fkborder` (`Order_ID`);

--
-- Indexes for table `Product_Information`
--
ALTER TABLE `Product_Information`
  ADD PRIMARY KEY (`Product_ID`);

--
-- Indexes for table `Product_Seller_Information`
--
ALTER TABLE `Product_Seller_Information`
  ADD PRIMARY KEY (`Product_ID`),
  ADD KEY `Seller_ID` (`Seller_ID`);

--
-- Indexes for table `Return_Order`
--
ALTER TABLE `Return_Order`
  ADD PRIMARY KEY (`Order_ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Indexes for table `Reviews`
--
ALTER TABLE `Reviews`
  ADD PRIMARY KEY (`Review_ID`),
  ADD KEY `User_ID` (`User_ID`),
  ADD KEY `Product_ID` (`Product_ID`);

--
-- Indexes for table `Review_Information`
--
ALTER TABLE `Review_Information`
  ADD PRIMARY KEY (`Review_ID`);

--
-- Indexes for table `Rollback`
--
ALTER TABLE `Rollback`
  ADD PRIMARY KEY (`RollBack_ID`);

--
-- Indexes for table `Shopping_Cart`
--
ALTER TABLE `Shopping_Cart`
  ADD PRIMARY KEY (`ShoppingCart_ID`),
  ADD KEY `User_ID` (`usernum`),
  ADD KEY `Product_ID` (`Product_ID`);

--
-- Indexes for table `Transcations`
--
ALTER TABLE `Transcations`
  ADD PRIMARY KEY (`Transaction_ID`),
  ADD KEY `User_ID` (`User_ID`),
  ADD KEY `ShoppingCart_ID` (`ShoppingCart_ID`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`Usernum`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `HelpRequest`
--
ALTER TABLE `HelpRequest`
  MODIFY `ticketnum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Product_Information`
--
ALTER TABLE `Product_Information`
  MODIFY `Product_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `Product_Seller_Information`
--
ALTER TABLE `Product_Seller_Information`
  MODIFY `Product_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `Reviews`
--
ALTER TABLE `Reviews`
  MODIFY `Review_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `Review_Information`
--
ALTER TABLE `Review_Information`
  MODIFY `Review_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Shopping_Cart`
--
ALTER TABLE `Shopping_Cart`
  MODIFY `ShoppingCart_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `Transcations`
--
ALTER TABLE `Transcations`
  MODIFY `Transaction_ID` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `Usernum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Order_History`
--
ALTER TABLE `Order_History`
  ADD CONSTRAINT `fbkusers` FOREIGN KEY (`User_ID`) REFERENCES `Users` (`Usernum`);

--
-- Constraints for table `Order_History_Information`
--
ALTER TABLE `Order_History_Information`
  ADD CONSTRAINT `fkborder` FOREIGN KEY (`Order_ID`) REFERENCES `Order_History` (`Order_ID`) ON DELETE CASCADE;

--
-- Constraints for table `Product_Seller_Information`
--
ALTER TABLE `Product_Seller_Information`
  ADD CONSTRAINT `product_seller_information_ibfk_1` FOREIGN KEY (`Product_ID`) REFERENCES `Product_Information` (`Product_ID`),
  ADD CONSTRAINT `product_seller_information_ibfk_2` FOREIGN KEY (`Seller_ID`) REFERENCES `Users` (`Usernum`);

--
-- Constraints for table `Return_Order`
--
ALTER TABLE `Return_Order`
  ADD CONSTRAINT `return_order_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `Users` (`Usernum`);

--
-- Constraints for table `Reviews`
--
ALTER TABLE `Reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `Users` (`Usernum`),
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`Product_ID`) REFERENCES `Product_Information` (`Product_ID`);

--
-- Constraints for table `Review_Information`
--
ALTER TABLE `Review_Information`
  ADD CONSTRAINT `review_information_ibfk_1` FOREIGN KEY (`Review_ID`) REFERENCES `Reviews` (`Review_ID`);

--
-- Constraints for table `Rollback`
--
ALTER TABLE `Rollback`
  ADD CONSTRAINT `rollback_ibfk_1` FOREIGN KEY (`RollBack_ID`) REFERENCES `Transcations` (`Transaction_ID`);

--
-- Constraints for table `Shopping_Cart`
--
ALTER TABLE `Shopping_Cart`
  ADD CONSTRAINT `shopping_cart_ibfk_1` FOREIGN KEY (`usernum`) REFERENCES `Users` (`Usernum`);

--
-- Constraints for table `Transcations`
--
ALTER TABLE `Transcations`
  ADD CONSTRAINT `transcations_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `Users` (`Usernum`),
  ADD CONSTRAINT `transcations_ibfk_2` FOREIGN KEY (`ShoppingCart_ID`) REFERENCES `Shopping_Cart` (`ShoppingCart_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
