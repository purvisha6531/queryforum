-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2018 at 05:37 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `queryforum`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatdetail`
--

CREATE TABLE `chatdetail` (
  `MsgId` int(11) NOT NULL,
  `ChatId` int(11) NOT NULL,
  `ChatDetail` varchar(500) NOT NULL,
  `Msg` varchar(500) NOT NULL,
  `TimeOfChat` int(11) NOT NULL,
  `EmployeeId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatdetail`
--

INSERT INTO `chatdetail` (`MsgId`, `ChatId`, `ChatDetail`, `Msg`, `TimeOfChat`, `EmployeeId`) VALUES
(1, 1, '', 'hi', 0, 0),
(4, 1, '', 'gfhfghfgh', 0, 8),
(5, 1, '', 'gfdfgdfg', 0, 8),
(6, 1, '', 'hgjghjghj', 0, 8),
(21, 2, '', 'hi', 0, 0),
(22, 1, '', 'hi', 0, 0),
(23, 1, '', 'hiiiiii', 0, 0),
(25, 2, '', 'hi', 0, 8),
(26, 1, '', 'hoi', 0, 0),
(27, 1, '', 'hi', 0, 0),
(28, 1, '', 'hiihihi', 0, 0),
(29, 2, '', 'ji', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `chatmaster`
--

CREATE TABLE `chatmaster` (
  `ChatId` int(11) NOT NULL,
  `EmployeeId` int(11) NOT NULL,
  `DateOfChat` date NOT NULL,
  `TimeOfChat` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatmaster`
--

INSERT INTO `chatmaster` (`ChatId`, `EmployeeId`, `DateOfChat`, `TimeOfChat`) VALUES
(1, 8, '2017-05-12', '838:59:59'),
(2, 1, '2017-05-12', '838:59:59');

-- --------------------------------------------------------

--
-- Table structure for table `citymaster`
--

CREATE TABLE `citymaster` (
  `CityId` int(11) NOT NULL,
  `CityName` varchar(20) NOT NULL,
  `StateId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `citymaster`
--

INSERT INTO `citymaster` (`CityId`, `CityName`, `StateId`) VALUES
(1, ' Ahmedabad ', 3),
(2, ' Gandhinagar  ', 2),
(3, ' Rajkot', 2);

-- --------------------------------------------------------

--
-- Table structure for table `clientmaster`
--

CREATE TABLE `clientmaster` (
  `ClientId` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Address` text NOT NULL,
  `Pincode` int(11) NOT NULL,
  `StateId` int(11) NOT NULL,
  `CountryId` int(11) NOT NULL,
  `EmailId` varchar(100) NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clientmaster`
--

INSERT INTO `clientmaster` (`ClientId`, `Name`, `Address`, `Pincode`, `StateId`, `CountryId`, `EmailId`, `Status`) VALUES
(1, ' Purvisha', 'Vasudev Buanglows\r\nb/h annpurna Hotel\r\njashoda ', 382445, 1, 1, 'pdpatel.6531@gmail.com', 1),
(9, 'Neel', 'Jashoda Nagar', 382445, 1, 1, 'neelpatel.6531@gmail.com', -1),
(10, 'Purvi', 'jasho', 382445, 2, 1, 'purvi@gmail.com', -1),
(11, 'Purvisha Patel', 'E-1 Vasudev Bunglows \r\nb/h Annpurna Hotel\r\nJashoda Chokdi Ahmedabad', 382445, 1, 1, 'purvishapatel_6531@yahoo.com', -1),
(15, 'Neel Patel', 'Jashoda', 382445, 1, 1, 'neelpatel.6531@gmail.com', -1);

-- --------------------------------------------------------

--
-- Table structure for table `countrymaster`
--

CREATE TABLE `countrymaster` (
  `CountryId` int(11) NOT NULL,
  `CountryName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countrymaster`
--

INSERT INTO `countrymaster` (`CountryId`, `CountryName`) VALUES
(1, ' India'),
(2, 'canada xk'),
(3, ' U.S.A'),
(4, ' huhud cv');

-- --------------------------------------------------------

--
-- Table structure for table `designationmaster`
--

CREATE TABLE `designationmaster` (
  `DesignationId` int(11) NOT NULL,
  `DesignationName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designationmaster`
--

INSERT INTO `designationmaster` (`DesignationId`, `DesignationName`) VALUES
(1, 'Be Computer'),
(2, 'Manager'),
(3, 'Programmer'),
(4, 'Assistant'),
(5, ' devloper 2');

-- --------------------------------------------------------

--
-- Table structure for table `employeedesignationdetail`
--

CREATE TABLE `employeedesignationdetail` (
  `EmployeeId` int(11) NOT NULL,
  `DesignationId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employeedesignationdetail`
--

INSERT INTO `employeedesignationdetail` (`EmployeeId`, `DesignationId`) VALUES
(1, 1),
(2, 2),
(4, 4),
(9, 4);

-- --------------------------------------------------------

--
-- Table structure for table `employeemaster`
--

CREATE TABLE `employeemaster` (
  `EmployeeId` int(11) NOT NULL,
  `EmployeeName` varchar(20) NOT NULL,
  `Address` text NOT NULL,
  `ContactNo` int(11) NOT NULL,
  `CityId` int(11) NOT NULL,
  `UserName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employeemaster`
--

INSERT INTO `employeemaster` (`EmployeeId`, `EmployeeName`, `Address`, `ContactNo`, `CityId`, `UserName`) VALUES
(1, 'purvi', 'jashoda ', 8844, 1, ' purvi'),
(2, 'abc', ' sjsknknd', 154854854, 1, ' poiu'),
(3, ' [ikjjq', 'derdr ', 6585484, 1, ' mkm'),
(4, 'heena', 'jaju ', 96964964, 1, ' heena patel'),
(5, 'neelpatel', '<p>uashoda</p>', 555555, 1, ' neel'),
(7, ' p', '<p>ojikj</p>', 54564, 1, ' p'),
(8, 'janki', '<p>jjjj</p>', 44, 1, 'janki'),
(9, ' piral', '<p>ujhu</p>', 89565896, 1, ' piral');

-- --------------------------------------------------------

--
-- Table structure for table `languagemaster`
--

CREATE TABLE `languagemaster` (
  `LanguageId` int(11) NOT NULL,
  `LanguageName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `languagemaster`
--

INSERT INTO `languagemaster` (`LanguageId`, `LanguageName`) VALUES
(1, 'Android ');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `UserTypeId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`UserName`, `Password`, `UserTypeId`) VALUES
(' neel', ' neel', 4),
(' p', 'abc', 4),
(' payu', '123456', 4),
('admin', 'admin', 1),
('d', 'c', 2),
('daxita.patel84@gmail.com', 'abc', 2),
('heena@gmail.com', '123', 2),
('janki', '123', 4),
('neel@gmail.com', 'neel', 2),
('neelpatel.6531@gmail.com', '123', 2),
('pdpatel.6531@gmail.com', 'abc', 2),
('purvi@gmail.com', '123', 2),
('purvishapatel_6531@yahoo.com', '123', 2);

-- --------------------------------------------------------

--
-- Table structure for table `modulemaster`
--

CREATE TABLE `modulemaster` (
  `ModuleId` int(11) NOT NULL,
  `ModuleName` varchar(30) NOT NULL,
  `ProjectId` int(11) NOT NULL,
  `Detail` text NOT NULL,
  `FlowImgURL` varchar(100) NOT NULL,
  `UploadURL` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modulemaster`
--

INSERT INTO `modulemaster` (`ModuleId`, `ModuleName`, `ProjectId`, `Detail`, `FlowImgURL`, `UploadURL`) VALUES
(1, 'AdminModule', 17, '<p>Admin module&nbsp;</p>\r\n<p>new project approve and rejected.</p>\r\n<p>add module .</p>', '', 'admin'),
(2, 'Employee Module', 17, '<p>Employee Manage The all project detail.</p>', '', 'Employee'),
(3, 'AdminModule', 18, '<p>Admin will be mange the view infromation of registerded ciustomer.</p>', '', 'admin'),
(4, 'HR manager', 18, '<p>He she was manage to description work &amp; process.</p>', '', 'hr'),
(5, 'admin', 21, '<p>thismodulen&nbsp;</p>', '', 'pll');

-- --------------------------------------------------------

--
-- Table structure for table `projectassignment`
--

CREATE TABLE `projectassignment` (
  `ModuleId` int(11) NOT NULL,
  `EmployeeId` int(11) NOT NULL,
  `DateOfAssign` date NOT NULL,
  `EndOfDate` date NOT NULL,
  `Remark` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projectassignment`
--

INSERT INTO `projectassignment` (`ModuleId`, `EmployeeId`, `DateOfAssign`, `EndOfDate`, `Remark`) VALUES
(1, 8, '2017-04-06', '2017-04-27', '<p>admin module new project approve and rejected.</p>'),
(4, 8, '2017-04-06', '2017-04-27', '<p>slect work and give the job them &amp; Trained to he she.</p>'),
(5, 8, '2018-03-19', '2018-03-14', '<p>kkmk</p>');

-- --------------------------------------------------------

--
-- Table structure for table `projectmaster`
--

CREATE TABLE `projectmaster` (
  `ProjectId` int(11) NOT NULL,
  `ProjectTitle` varchar(30) NOT NULL,
  `LogoURL` varchar(100) NOT NULL,
  `ClientId` int(11) NOT NULL,
  `LanguageId` int(11) NOT NULL,
  `ProjectDetail` text NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `RequestDate` date NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projectmaster`
--

INSERT INTO `projectmaster` (`ProjectId`, `ProjectTitle`, `LogoURL`, `ClientId`, `LanguageId`, `ProjectDetail`, `StartDate`, `EndDate`, `RequestDate`, `Status`) VALUES
(17, 'QueryForum', 'www.LogoUrl.com', 11, 1, '<p>Our Project Title is &ldquo;Query Forum&rdquo; . It is a Website or Web application devolved by PHP . In which to solve live Project query of a Query Finder. In which user are Admin , Project Manager , Employee , Client. Project will be managed by project manager and project manager will assign module to Employee. Client can see their the project module and check the any Query. If user get the query they tell the Employee through comment , snapshots and video on Query Forum website and employee solved that Query until user get satisfy .&nbsp;</p>', '0000-00-00', '0000-00-00', '2017-06-04', '1'),
(18, 'Nascent Rubber Enter', 'www.LogoUrl.com', 11, 1, '<p>Tiny erp for nasacent rubber enterprise is web application that will mainatain entire current manual functinality of nasacnt rubber enterpise online from poratl</p>', '0000-00-00', '0000-00-00', '2017-06-04', '1'),
(20, 'abc', '.com', 11, 1, 'dkc', '0000-00-00', '0000-00-00', '0000-00-00', '-1'),
(21, 'travel', 'ld', 15, 1, '<p>cdc</p>', '0000-00-00', '0000-00-00', '0000-00-00', '1');

-- --------------------------------------------------------

--
-- Table structure for table `projectstatusdetail`
--

CREATE TABLE `projectstatusdetail` (
  `SubmitId` int(11) NOT NULL,
  `ProjectStatusId` int(11) DEFAULT NULL,
  `ModuleId` int(11) NOT NULL,
  `EmployeeId` int(11) DEFAULT NULL,
  `DateOfStatus` date DEFAULT NULL,
  `Msg` text,
  `Status` varchar(10) DEFAULT NULL,
  `Remark` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projectstatusdetail`
--

INSERT INTO `projectstatusdetail` (`SubmitId`, `ProjectStatusId`, `ModuleId`, `EmployeeId`, `DateOfStatus`, `Msg`, `Status`, `Remark`) VALUES
(2, 1, 1, 8, '2017-04-06', '', '-1', '<p>Admin Module in admin manage the project status deatils.</p>'),
(3, 2, 3, 8, '2017-04-07', '', '-1', '<p>njjnwd</p>'),
(4, 1, 5, 4, '2018-03-19', '', '1', '<p>ki</p>');

-- --------------------------------------------------------

--
-- Table structure for table `projectstatusmaster`
--

CREATE TABLE `projectstatusmaster` (
  `ProjectStatusId` int(11) NOT NULL,
  `ProjectStatusName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projectstatusmaster`
--

INSERT INTO `projectstatusmaster` (`ProjectStatusId`, `ProjectStatusName`) VALUES
(1, ' Designing'),
(2, '  Devloper');

-- --------------------------------------------------------

--
-- Table structure for table `queruforumanswer`
--

CREATE TABLE `queruforumanswer` (
  `AnswerId` int(11) NOT NULL,
  `QuestionId` int(11) NOT NULL,
  `Answer` text NOT NULL,
  `ImgURL` varchar(200) NOT NULL,
  `EmployeeId` int(11) NOT NULL,
  `DateOfAnswer` date NOT NULL,
  `ViewedCount` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `queruforumanswer`
--

INSERT INTO `queruforumanswer` (`AnswerId`, `QuestionId`, `Answer`, `ImgURL`, `EmployeeId`, `DateOfAnswer`, `ViewedCount`) VALUES
(3, 2, '<p>change</p>', '', 8, '0000-00-00', ''),
(4, 2, '<p>change the admin module as per the client requirment.</p>', 'jicks', 8, '2017-04-16', ''),
(5, 3, 'ok', 'kdxm', 8, '2017-04-18', ''),
(6, 3, 'ok', 'kdxm', 8, '2017-04-18', '');

-- --------------------------------------------------------

--
-- Table structure for table `queruforumquestion`
--

CREATE TABLE `queruforumquestion` (
  `QuestionId` int(11) NOT NULL,
  `SubmitId` int(11) NOT NULL,
  `Question` text NOT NULL,
  `ImgURL` varchar(200) NOT NULL,
  `DateOfQuestion` date NOT NULL,
  `ViewedCount` mediumint(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `queruforumquestion`
--

INSERT INTO `queruforumquestion` (`QuestionId`, `SubmitId`, `Question`, `ImgURL`, `DateOfQuestion`, `ViewedCount`) VALUES
(2, 3, '<p>eroro</p>', 'mkams', '2017-07-04', 1),
(3, 2, '<p>ddwd</p>', 'dkjmk', '2017-07-04', 1),
(4, 2, '<p>error display</p>', 'ppoo', '2017-07-04', 3),
(5, 2, '<p>error display</p>', 'ppoo', '2017-07-04', 3),
(6, 2, '<p>error module</p>', 'kamijmd', '0000-00-00', 1),
(7, 4, '<p>jmd</p>', 'k', '0000-00-00', 1),
(8, 4, '<p>kk</p>\r\n<p>&nbsp;</p>', 'lkmk', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `statemaster`
--

CREATE TABLE `statemaster` (
  `StateId` int(11) NOT NULL,
  `StateName` varchar(20) NOT NULL,
  `CountryId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statemaster`
--

INSERT INTO `statemaster` (`StateId`, `StateName`, `CountryId`) VALUES
(1, 'Gujarat', 1),
(2, ' rajsthan', 1),
(3, ' Mahratsra', 1),
(4, ' Karnatak ', 2);

-- --------------------------------------------------------

--
-- Table structure for table `usertypemaster`
--

CREATE TABLE `usertypemaster` (
  `UserTypeId` int(11) NOT NULL,
  `UserTypeName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertypemaster`
--

INSERT INTO `usertypemaster` (`UserTypeId`, `UserTypeName`) VALUES
(1, 'Admin'),
(2, 'Client'),
(3, ' ProjectManager'),
(4, ' Employee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chatdetail`
--
ALTER TABLE `chatdetail`
  ADD PRIMARY KEY (`MsgId`),
  ADD KEY `ChatId` (`ChatId`);

--
-- Indexes for table `chatmaster`
--
ALTER TABLE `chatmaster`
  ADD PRIMARY KEY (`ChatId`),
  ADD KEY `EmployeeId` (`EmployeeId`);

--
-- Indexes for table `citymaster`
--
ALTER TABLE `citymaster`
  ADD PRIMARY KEY (`CityId`),
  ADD KEY `StateId` (`StateId`),
  ADD KEY `StateId_2` (`StateId`);

--
-- Indexes for table `clientmaster`
--
ALTER TABLE `clientmaster`
  ADD PRIMARY KEY (`ClientId`),
  ADD KEY `StateId` (`StateId`),
  ADD KEY `CountryId` (`CountryId`);

--
-- Indexes for table `countrymaster`
--
ALTER TABLE `countrymaster`
  ADD PRIMARY KEY (`CountryId`);

--
-- Indexes for table `designationmaster`
--
ALTER TABLE `designationmaster`
  ADD PRIMARY KEY (`DesignationId`);

--
-- Indexes for table `employeedesignationdetail`
--
ALTER TABLE `employeedesignationdetail`
  ADD PRIMARY KEY (`EmployeeId`,`DesignationId`),
  ADD KEY `EmployeeId` (`EmployeeId`),
  ADD KEY `DesignationId` (`DesignationId`);

--
-- Indexes for table `employeemaster`
--
ALTER TABLE `employeemaster`
  ADD PRIMARY KEY (`EmployeeId`),
  ADD KEY `City Id` (`CityId`),
  ADD KEY `CityId` (`CityId`);

--
-- Indexes for table `languagemaster`
--
ALTER TABLE `languagemaster`
  ADD PRIMARY KEY (`LanguageId`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`UserName`),
  ADD KEY `UserTypeId` (`UserTypeId`);

--
-- Indexes for table `modulemaster`
--
ALTER TABLE `modulemaster`
  ADD PRIMARY KEY (`ModuleId`),
  ADD KEY `ProjectId` (`ProjectId`);

--
-- Indexes for table `projectassignment`
--
ALTER TABLE `projectassignment`
  ADD PRIMARY KEY (`ModuleId`,`EmployeeId`),
  ADD KEY `ModuleId` (`ModuleId`),
  ADD KEY `EmployeeId` (`EmployeeId`);

--
-- Indexes for table `projectmaster`
--
ALTER TABLE `projectmaster`
  ADD PRIMARY KEY (`ProjectId`),
  ADD KEY `ClientId` (`ClientId`),
  ADD KEY `LanguageId` (`LanguageId`);

--
-- Indexes for table `projectstatusdetail`
--
ALTER TABLE `projectstatusdetail`
  ADD PRIMARY KEY (`SubmitId`),
  ADD KEY `ProjectStatusId` (`ProjectStatusId`),
  ADD KEY `ModuleId` (`ModuleId`),
  ADD KEY `EmployeeId` (`EmployeeId`);

--
-- Indexes for table `projectstatusmaster`
--
ALTER TABLE `projectstatusmaster`
  ADD PRIMARY KEY (`ProjectStatusId`);

--
-- Indexes for table `queruforumanswer`
--
ALTER TABLE `queruforumanswer`
  ADD PRIMARY KEY (`AnswerId`),
  ADD KEY `QuestionId` (`QuestionId`),
  ADD KEY `EmployeeId` (`EmployeeId`);

--
-- Indexes for table `queruforumquestion`
--
ALTER TABLE `queruforumquestion`
  ADD PRIMARY KEY (`QuestionId`),
  ADD KEY `SubmitId` (`SubmitId`);

--
-- Indexes for table `statemaster`
--
ALTER TABLE `statemaster`
  ADD PRIMARY KEY (`StateId`),
  ADD KEY `CountryId` (`CountryId`),
  ADD KEY `CountryId_2` (`CountryId`);

--
-- Indexes for table `usertypemaster`
--
ALTER TABLE `usertypemaster`
  ADD PRIMARY KEY (`UserTypeId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chatdetail`
--
ALTER TABLE `chatdetail`
  MODIFY `MsgId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `chatmaster`
--
ALTER TABLE `chatmaster`
  MODIFY `ChatId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `citymaster`
--
ALTER TABLE `citymaster`
  MODIFY `CityId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `clientmaster`
--
ALTER TABLE `clientmaster`
  MODIFY `ClientId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `countrymaster`
--
ALTER TABLE `countrymaster`
  MODIFY `CountryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `designationmaster`
--
ALTER TABLE `designationmaster`
  MODIFY `DesignationId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `employeedesignationdetail`
--
ALTER TABLE `employeedesignationdetail`
  MODIFY `EmployeeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `employeemaster`
--
ALTER TABLE `employeemaster`
  MODIFY `EmployeeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `languagemaster`
--
ALTER TABLE `languagemaster`
  MODIFY `LanguageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `modulemaster`
--
ALTER TABLE `modulemaster`
  MODIFY `ModuleId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `projectmaster`
--
ALTER TABLE `projectmaster`
  MODIFY `ProjectId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `projectstatusdetail`
--
ALTER TABLE `projectstatusdetail`
  MODIFY `SubmitId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `projectstatusmaster`
--
ALTER TABLE `projectstatusmaster`
  MODIFY `ProjectStatusId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `queruforumanswer`
--
ALTER TABLE `queruforumanswer`
  MODIFY `AnswerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `queruforumquestion`
--
ALTER TABLE `queruforumquestion`
  MODIFY `QuestionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `statemaster`
--
ALTER TABLE `statemaster`
  MODIFY `StateId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `usertypemaster`
--
ALTER TABLE `usertypemaster`
  MODIFY `UserTypeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `chatdetail`
--
ALTER TABLE `chatdetail`
  ADD CONSTRAINT `chatdetail_ibfk_1` FOREIGN KEY (`ChatId`) REFERENCES `chatmaster` (`ChatId`);

--
-- Constraints for table `chatmaster`
--
ALTER TABLE `chatmaster`
  ADD CONSTRAINT `chatmaster_ibfk_1` FOREIGN KEY (`EmployeeId`) REFERENCES `employeemaster` (`EmployeeId`);

--
-- Constraints for table `citymaster`
--
ALTER TABLE `citymaster`
  ADD CONSTRAINT `citymaster_ibfk_1` FOREIGN KEY (`StateId`) REFERENCES `statemaster` (`StateId`);

--
-- Constraints for table `clientmaster`
--
ALTER TABLE `clientmaster`
  ADD CONSTRAINT `clientmaster_ibfk_1` FOREIGN KEY (`StateId`) REFERENCES `statemaster` (`StateId`),
  ADD CONSTRAINT `clientmaster_ibfk_2` FOREIGN KEY (`CountryId`) REFERENCES `countrymaster` (`CountryId`);

--
-- Constraints for table `employeedesignationdetail`
--
ALTER TABLE `employeedesignationdetail`
  ADD CONSTRAINT `employeedesignationdetail_ibfk_1` FOREIGN KEY (`EmployeeId`) REFERENCES `employeemaster` (`EmployeeId`),
  ADD CONSTRAINT `employeedesignationdetail_ibfk_2` FOREIGN KEY (`DesignationId`) REFERENCES `designationmaster` (`DesignationId`);

--
-- Constraints for table `employeemaster`
--
ALTER TABLE `employeemaster`
  ADD CONSTRAINT `employeemaster_ibfk_1` FOREIGN KEY (`CityId`) REFERENCES `citymaster` (`CityId`);

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`UserTypeId`) REFERENCES `usertypemaster` (`UserTypeId`);

--
-- Constraints for table `modulemaster`
--
ALTER TABLE `modulemaster`
  ADD CONSTRAINT `modulemaster_ibfk_1` FOREIGN KEY (`ProjectId`) REFERENCES `projectmaster` (`ProjectId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `projectassignment`
--
ALTER TABLE `projectassignment`
  ADD CONSTRAINT `projectassignment_ibfk_1` FOREIGN KEY (`ModuleId`) REFERENCES `modulemaster` (`ModuleId`),
  ADD CONSTRAINT `projectassignment_ibfk_2` FOREIGN KEY (`EmployeeId`) REFERENCES `employeemaster` (`EmployeeId`);

--
-- Constraints for table `projectmaster`
--
ALTER TABLE `projectmaster`
  ADD CONSTRAINT `projectmaster_ibfk_1` FOREIGN KEY (`ClientId`) REFERENCES `clientmaster` (`ClientId`),
  ADD CONSTRAINT `projectmaster_ibfk_2` FOREIGN KEY (`LanguageId`) REFERENCES `languagemaster` (`LanguageId`);

--
-- Constraints for table `projectstatusdetail`
--
ALTER TABLE `projectstatusdetail`
  ADD CONSTRAINT `projectstatusdetail_ibfk_1` FOREIGN KEY (`ProjectStatusId`) REFERENCES `projectstatusmaster` (`ProjectStatusId`),
  ADD CONSTRAINT `projectstatusdetail_ibfk_2` FOREIGN KEY (`ModuleId`) REFERENCES `modulemaster` (`ModuleId`),
  ADD CONSTRAINT `projectstatusdetail_ibfk_3` FOREIGN KEY (`EmployeeId`) REFERENCES `employeemaster` (`EmployeeId`);

--
-- Constraints for table `queruforumanswer`
--
ALTER TABLE `queruforumanswer`
  ADD CONSTRAINT `queruforumanswer_ibfk_1` FOREIGN KEY (`QuestionId`) REFERENCES `queruforumquestion` (`QuestionId`),
  ADD CONSTRAINT `queruforumanswer_ibfk_2` FOREIGN KEY (`EmployeeId`) REFERENCES `employeemaster` (`EmployeeId`);

--
-- Constraints for table `queruforumquestion`
--
ALTER TABLE `queruforumquestion`
  ADD CONSTRAINT `queruforumquestion_ibfk_1` FOREIGN KEY (`SubmitId`) REFERENCES `projectstatusdetail` (`SubmitId`);

--
-- Constraints for table `statemaster`
--
ALTER TABLE `statemaster`
  ADD CONSTRAINT `statemaster_ibfk_1` FOREIGN KEY (`CountryId`) REFERENCES `countrymaster` (`CountryId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
