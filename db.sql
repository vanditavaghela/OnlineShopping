--  SQL Dump
--
-- Host: localhost

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userdetails`
--

CREATE TABLE IF NOT EXISTS `tbl_userdetails` (
  `userid` varchar(45) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `update_time` datetime DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `logged_in` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_userdetails`
--

INSERT INTO `tbl_userdetails` (`userid`, `username`, `password`, `update_time`, `active`, `logged_in`) VALUES
('user001', 'Vandita', '0192023a7bbd73250516f069df18b500', '2020-09-29 10:25:00', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users_cart`
--

CREATE TABLE IF NOT EXISTS `tbl_users_cart` (
  `userid` varchar(45) NOT NULL,
  `productid` varchar(45) NOT NULL,
  `update_time` datetime DEFAULT NULL,
  `active_cart` tinyint(1) DEFAULT '1' COMMENT '1 when cart is active 0 when cart details succeeded or cancelled'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users_cart`
--

INSERT INTO `tbl_users_cart` (`userid`, `productid`, `update_time`, `active_cart`) VALUES
('user001', '1', '2020-09-29 06:11:49', 1),
('user001', '3', '2020-09-29 06:12:17', 1);
