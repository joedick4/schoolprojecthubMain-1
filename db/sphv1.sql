-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2019 at 12:53 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sphv1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', '2019-09-16 20:14:18');

-- --------------------------------------------------------

--
-- Table structure for table `neworder`
--

CREATE TABLE IF NOT EXISTS `neworder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `EmpId` varchar(100) NOT NULL,
  `FirstName` varchar(150) NOT NULL,
  `LastName` varchar(150) NOT NULL,
  `EmailId` varchar(200) NOT NULL,
  `Topic` varchar(255) NOT NULL,
  `Services` varchar(200) NOT NULL,
  `Department` varchar(255) NOT NULL,
  `Institution` varchar(255) NOT NULL,
  `Budget` varchar(200) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Hasapproved` varchar(100) NOT NULL,
  `Duration` varchar(100) NOT NULL,
  `Phonenumber` char(11) NOT NULL,
  `WriterName` varchar(100) NOT NULL,
  `WriterEmail` varchar(100) NOT NULL,
  `WriterPhonenumber` varchar(15) NOT NULL,
  `AdminRemark` varchar(200) NOT NULL,
  `AdminRemarkDate` varchar(120) NOT NULL,
  `Status` int(1) NOT NULL,
  `IsRead` int(1) NOT NULL,
  `OrderDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `neworder`
--

INSERT INTO `neworder` (`id`, `EmpId`, `FirstName`, `LastName`, `EmailId`, `Topic`, `Services`, `Department`, `Institution`, `Budget`, `Description`, `Hasapproved`, `Duration`, `Phonenumber`, `WriterName`, `WriterEmail`, `WriterPhonenumber`, `AdminRemark`, `AdminRemarkDate`, `Status`, `IsRead`, `OrderDate`) VALUES
(14, '', 'paul dozie', 'Ezetu', 'paul@gmail.com', 'hello world', 'Fresh Topic', 'Computer Science', 'Uniport', '25000', 'I want the complete development ', 'Yes', '2 Monthsplus', '0803457878', 'Joe Paul', '', '', 'Hello I am testing the connect writer', '2019-10-04 17:42:54 ', 1, 1, '2019-09-18 20:54:46'),
(15, '', 'Ngozi', 'Eze', 'eze@gmail.com', 'Distributed Intelligent information gathering in Ogoni ', 'Fresh Topic', 'Computer Science', 'Rivers State University', '80000', 'I want a complete development', 'Yes', '2 Monthsplus', '0703456709', 'Abraham Iboroma', 'abiboroma@gmail.com', '0803734676', 'Kindly treat this with urgency. ', '2019-10-05 16:06:12 ', 1, 1, '2019-10-05 10:04:16');

-- --------------------------------------------------------

--
-- Table structure for table `tblaccounting`
--

CREATE TABLE IF NOT EXISTS `tblaccounting` (
  `pid` int(50) NOT NULL AUTO_INCREMENT,
  `pcode` varchar(100) NOT NULL,
  `topic` varchar(250) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `price` varchar(100) NOT NULL,
  `dollarprice` varchar(100) NOT NULL,
  `statement_of_problem` varchar(2000) NOT NULL,
  `aim_objectives` varchar(2000) NOT NULL,
  `format` varchar(50) NOT NULL,
  `chapters` varchar(50) NOT NULL,
  `pages` varchar(50) NOT NULL,
  `attribute` varchar(200) NOT NULL,
  `studylevel` varchar(200) NOT NULL,
  `postdate` datetime NOT NULL,
  `status` int(50) NOT NULL,
  `vendor` varchar(100) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tblaccounting`
--

INSERT INTO `tblaccounting` (`pid`, `pcode`, `topic`, `description`, `price`, `dollarprice`, `statement_of_problem`, `aim_objectives`, `format`, `chapters`, `pages`, `attribute`, `studylevel`, `postdate`, `status`, `vendor`) VALUES
(1, 'ACCT82001', 'AN EVALUATION OF THE IMPACT OF WAGES AND SALARIES POLICIES ON THE PERFORMANCE OF WORKERS', '\r\nEmployer provides work for employees just as employee on the other hand enables organization and nation to provide or produce goods and services for the ultimate benefit of mankind (O’ Donnell 2000).\r\n\r\nThis is essentially in the nation building process.  When goods are provided and services rendered, economy benefits also come to play.  According to an abstract of employment, employers pays workers for productivity and services.  This is of a symbolic advantage because just as employee help employers to make profit, the employer also give wages and salaries to employees to enable them meet their personal and domestic aspirations.\r\n\r\nFairly to pay wages and salaries has resulted in very important conflict in labour and management relation.  Therefore, wages and salaries according to Mackenzie is the most significant reward that would assist them to have a good standard of living.\r\nWages and salaries are used as motivational factors or strategies (Micheal A. 2005).  This is explain by piece: rate system which allows payment of wages in relation to job done, in addition, people have been seen to converse for work in organization, wages and salaries are no charitable grant by organization but a significant aspect of the right of worker in the productivity process.  Payment must be made for job done by labour.  Profit made should not only be for growth and development of companies while workers suffer physically and economically.\r\nThe idea of national minimum wage is based on the understanding of the fact that there must be a border line under which employers must not fall in the payment of salaries and wages to workers who need to maintain a living standard.\r\n\r\n', '4,000', '20 USD', '\r\nThis research is carried out to evaluate wages and salaries policies on the performance of government parastatals in Nigeria with a case study of National Eye Centre Kaduna.  Despite the services rendered by the public sector, salary increment is still a problem.  The agitation for more salary is still on because of increasing level of standard of living.  The global economic crisis also has brought about the agitation for salary increment and this is the reason for almost all the industrial action being embarked by personnel working in government parastatals.\r\n\r\nIn the case of salary increment, my research also recorded poor performance in government parastatals.  This means that the services rendered are not commensurate to the money been paid an employee.  For instance even when there is increment for worker in government parastatals, we still notice inadequate performance, this is applicable to all parastatals like water board, education sector, power holding company of Nigeria etc. with all this increment, why is the performance in government parastatals still poor?\r\nCould it be that wages and salaries policies are defective? Then this research work intend to find out the influence of wages and salaries policies in government parastatals.', 'This research work is an effort to determine the influence of wages and salaries policies on the performance of workers in government parastatals in Nigeria.\r\n\r\nThis work is meant to find out government policies with respect to wages and salaries in various government parastatals.\r\nThe research work will also find out the problems government parastatals are facing in implementing wages and salaries in Nigeria.\r\nThis is to determine the effectiveness of wages and salaries policies on the performance of personnel working in government parastatals.', 'MS- WORD', '1-5', '73', '', 'BTech, BSc, BEng, BA, HND, ND or NCE', '2019-12-19 00:00:00', 0, 'Projectsxtra.com'),
(2, 'ACCT98002', 'THE BUDGETING AND BUDGETARY CONTROL OF NON PROFIT MAKING ORGANIZATION', '', '4,000', '20 USD', 'This research work is encouraged to help in highlighting the problems that militate against the application and effective utilization of budgeting and budgetary controls of Catholic Church in Delta State Asaba in Particular.\r\nSpecifically, the following problems are addressed:\r\n\r\nThe parish was unable to accomplish budget goals.\r\nThere were variances between budgeted and actual performance in the parish.\r\nThe committee members were unable to exercise control on the budget system because of lack of adequate experience.\r\nEven formulating master budget at parish level had been a problem and delayed previous year’s budgets.\r\nThe parish was unable to monitor both compliance with and deviation from budget''s target.', 'Budgets are essentially forward looking and provide the yardstick for the purposes of comparison. It is a means to an end and not an end itself; hence it covers the area of responsibility of one specified person so that his performance can be measured at the end of budget period.\r\nThese are the objectives of this study:\r\n\r\nTo determine why the parish was unable to accomplish budget goals\r\nTo find why there was variance between budgeted and actual performance in the parish\r\nTo examine whether lack of experience contributed to        committee inefficiency in terms of budgetary control.\r\nTo ascertain why there has been delay in formulation of budget.\r\nTo find out why the parish was unable to monitor deviation      from budget target.', 'MS- WORD', '1-5', '109', '', ' BTech, BSc, BEng, BA, HND, ND or NCE', '2019-12-19 00:00:00', 0, 'Projectsxtra.com'),
(3, 'ACCT45098', 'AN APPRAISAL OF THE RELEVANCE OF FINANCIAL INCENTIVES TO WORKERS MOTIVATION', '1.1     Background to the Study     \r\nIn the word of Armstrong (1988), the process of motivation is initiated by the conscious and unconscious recognition of an unsatisfied need. A goal is then established which, it is thought will satisfy the need and of course action is determined that lead towards the attainment of a goal. Management should provide incentive schemes and pay workers on the basis of the result they achieve on the job instead of the more physical routine performance series activities and to retain them on their job making them feel satisfied, a motivationally-oriented wage system must adequately distinguish “Naira” wise between the different levels of efficiency for the people performing essentially job and different job categories and specialization.\r\n\r\nIn every organization, the management emphasis on high productivity, quality of services, quality workmanship, industrial peace, cooperative labour etc. On the other hand, employees need fair wages, job satisfaction, good working conditions, participation in decision making, self recognition and opportunity for advancement.\r\n\r\nOrganizations and managers have suffered tremendously in trying to utilize their human resources, they usually encounter frequent industrial conflicts and several unresolved agitations by workers and different categories of employees basically steaming from one form of dissatisfaction or the other. The main point of misunderstanding between management and employees/workers in most cases is found in the arrears of inadequate and inequitable monetary rewards.\r\nFinancial incentive as we all know is a process of guiding the conduct and influencing people so that they strives individual or group towards the achievement of group goals. Every employee comes to an organization with one motive, to earn a living and financial incentive play a vital role in the lives of these employees. Taking away financial incentive might jeopardize this individual or the group interest. Management on ', '4,000', '20 USD', '', '', 'MS- WORD', '1-5', '89', '', 'BTech, BSc, BEng, BA, HND, ND or NCE', '2019-12-21 00:00:00', 0, 'www.projectsxtra.com/');

-- --------------------------------------------------------

--
-- Table structure for table `tblagriculture`
--

CREATE TABLE IF NOT EXISTS `tblagriculture` (
  `pid` int(50) NOT NULL AUTO_INCREMENT,
  `pcode` varchar(100) NOT NULL,
  `topic` varchar(250) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `price` varchar(100) NOT NULL,
  `dollarprice` varchar(100) NOT NULL,
  `format` varchar(50) NOT NULL,
  `chapters` varchar(50) NOT NULL,
  `pages` varchar(50) NOT NULL,
  `attribute` varchar(200) NOT NULL,
  `studylevel` varchar(200) NOT NULL,
  `postdate` datetime NOT NULL,
  `status` int(50) NOT NULL,
  `vendor` varchar(100) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblbaf`
--

CREATE TABLE IF NOT EXISTS `tblbaf` (
  `pid` int(50) NOT NULL AUTO_INCREMENT,
  `pcode` varchar(100) NOT NULL,
  `topic` varchar(250) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `price` varchar(100) NOT NULL,
  `dollarprice` varchar(100) NOT NULL,
  `format` varchar(50) NOT NULL,
  `chapters` varchar(50) NOT NULL,
  `pages` varchar(50) NOT NULL,
  `attribute` varchar(200) NOT NULL,
  `studylevel` varchar(200) NOT NULL,
  `postdate` datetime NOT NULL,
  `status` int(50) NOT NULL,
  `vendor` varchar(100) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblbiochem`
--

CREATE TABLE IF NOT EXISTS `tblbiochem` (
  `pid` int(50) NOT NULL AUTO_INCREMENT,
  `pcode` varchar(100) NOT NULL,
  `topic` varchar(250) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `price` varchar(100) NOT NULL,
  `dollarprice` varchar(100) NOT NULL,
  `format` varchar(50) NOT NULL,
  `chapters` varchar(50) NOT NULL,
  `pages` varchar(50) NOT NULL,
  `attribute` varchar(200) NOT NULL,
  `studylevel` varchar(200) NOT NULL,
  `postdate` datetime NOT NULL,
  `status` int(50) NOT NULL,
  `vendor` varchar(100) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblbiology`
--

CREATE TABLE IF NOT EXISTS `tblbiology` (
  `pid` int(50) NOT NULL AUTO_INCREMENT,
  `pcode` varchar(100) NOT NULL,
  `topic` varchar(250) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `price` varchar(100) NOT NULL,
  `dollarprice` varchar(100) NOT NULL,
  `format` varchar(50) NOT NULL,
  `chapters` varchar(50) NOT NULL,
  `pages` varchar(50) NOT NULL,
  `attribute` varchar(200) NOT NULL,
  `studylevel` varchar(200) NOT NULL,
  `postdate` datetime NOT NULL,
  `status` int(50) NOT NULL,
  `vendor` varchar(100) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblbudget`
--

CREATE TABLE IF NOT EXISTS `tblbudget` (
  `Bid` int(11) NOT NULL AUTO_INCREMENT,
  `Amount` varchar(200) NOT NULL,
  `Cid` int(11) NOT NULL,
  PRIMARY KEY (`Bid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblbusinessadmin`
--

CREATE TABLE IF NOT EXISTS `tblbusinessadmin` (
  `pid` int(50) NOT NULL AUTO_INCREMENT,
  `pcode` varchar(100) NOT NULL,
  `topic` varchar(250) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `price` varchar(100) NOT NULL,
  `dollarprice` varchar(100) NOT NULL,
  `format` varchar(50) NOT NULL,
  `chapters` varchar(50) NOT NULL,
  `pages` varchar(50) NOT NULL,
  `attribute` varchar(200) NOT NULL,
  `studylevel` varchar(200) NOT NULL,
  `postdate` datetime NOT NULL,
  `status` int(50) NOT NULL,
  `vendor` varchar(100) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblbusinessedu`
--

CREATE TABLE IF NOT EXISTS `tblbusinessedu` (
  `pid` int(50) NOT NULL AUTO_INCREMENT,
  `pcode` varchar(100) NOT NULL,
  `topic` varchar(250) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `price` varchar(100) NOT NULL,
  `dollarprice` varchar(100) NOT NULL,
  `format` varchar(50) NOT NULL,
  `chapters` varchar(50) NOT NULL,
  `pages` varchar(50) NOT NULL,
  `attribute` varchar(200) NOT NULL,
  `studylevel` varchar(200) NOT NULL,
  `postdate` datetime NOT NULL,
  `status` int(50) NOT NULL,
  `vendor` varchar(100) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE IF NOT EXISTS `tblcategory` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0:Blocked, 1:Active',
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`category_id`, `category_name`, `status`) VALUES
(1, 'Undergraduate', 1),
(2, 'Postgraduate', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblcategorytype`
--

CREATE TABLE IF NOT EXISTS `tblcategorytype` (
  `catype_id` int(11) NOT NULL AUTO_INCREMENT,
  `catype_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0:Blocked, 1:Active',
  PRIMARY KEY (`catype_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tblcategorytype`
--

INSERT INTO `tblcategorytype` (`catype_id`, `catype_name`, `category_id`, `status`) VALUES
(1, 'B.SC', 1, 1),
(2, 'BA', 1, 1),
(3, 'HND', 1, 1),
(4, 'ND', 1, 1),
(5, 'MSc', 2, 1),
(6, 'MBA', 2, 1),
(7, 'PhD', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblcivileng`
--

CREATE TABLE IF NOT EXISTS `tblcivileng` (
  `pid` int(50) NOT NULL AUTO_INCREMENT,
  `pcode` varchar(100) NOT NULL,
  `topic` varchar(250) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `price` varchar(100) NOT NULL,
  `dollarprice` varchar(100) NOT NULL,
  `format` varchar(50) NOT NULL,
  `chapters` varchar(50) NOT NULL,
  `pages` varchar(50) NOT NULL,
  `attribute` varchar(200) NOT NULL,
  `studylevel` varchar(200) NOT NULL,
  `postdate` datetime NOT NULL,
  `status` int(50) NOT NULL,
  `vendor` varchar(100) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblcomputersc`
--

CREATE TABLE IF NOT EXISTS `tblcomputersc` (
  `pid` int(50) NOT NULL AUTO_INCREMENT,
  `pcode` varchar(100) NOT NULL,
  `topic` varchar(250) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `price` varchar(100) NOT NULL,
  `dollarprice` varchar(100) NOT NULL,
  `format` varchar(50) NOT NULL,
  `chapters` varchar(50) NOT NULL,
  `pages` varchar(50) NOT NULL,
  `attribute` varchar(200) NOT NULL,
  `studylevel` varchar(200) NOT NULL,
  `postdate` datetime NOT NULL,
  `status` int(50) NOT NULL,
  `vendor` varchar(100) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tblcomputersc`
--

INSERT INTO `tblcomputersc` (`pid`, `pcode`, `topic`, `description`, `price`, `dollarprice`, `format`, `chapters`, `pages`, `attribute`, `studylevel`, `postdate`, `status`, `vendor`) VALUES
(1, 'CSC001', 'DataBase model on Rural Woman Farming Groupings for a sustainable economy in an L.G.A', 'The aim of this project is to enable a change in developing the youth of the area in a more industrious way.\r\nAlso some of the objective include the following;\r\n(1)	To design a database model that could managed rural woman farming groupings for a  sustainable economy in an L.G.A.\r\n(2)	The system to maintain a register of the women farmer reflecting the different groups in an L.G.A and there application for financial grants included.\r\n(3)	To evaluate the application and identify the improvements made over the previous system.\r\n', '20000', '80 USD', 'MS- WORD', '1-5', '67', 'SOURCE CODE', ' BTech, BSc, BEng, BA, HND, ND or NCE', '2019-12-19 00:00:00', 0, 'SchoolProjectHub'),
(2, 'CSC002', 'An efficient document clustering using artificial neural network', 'ABSTRACT\r\n\r\nFinding the required information in enormous amount of data is one of the challenging tasks of today, Search engine is getting more confused in selecting the relevant documents among huge volumes of search results returned to a simple query because the time taken for retrieving the documents should be less than a second so that the user can verify whether the documents what they are looking for are the right documents. Document clustering is a fundamental task in Text mining that has been using statistical methods. Due to a large number of documents available in the web, intelligent methods have to be developed to retrieve the documents effectively. In this project, the method using artificial neural networks (ANN) in document clustering is discussed. By fine tuning, the various parameters of the ANN algorithms, effective document clustering can be achieved of which C# programming language, is used as the front end. \r\n', '20000', '80 USD', 'MS- WORD', '1-5', '81', 'SOURCE CODE', ' BTech, BSc, BEng, BA, HND, ND or NCE', '2019-12-19 00:00:00', 0, 'Schoolprojecthub');

-- --------------------------------------------------------

--
-- Table structure for table `tblcriminology`
--

CREATE TABLE IF NOT EXISTS `tblcriminology` (
  `pid` int(50) NOT NULL AUTO_INCREMENT,
  `pcode` varchar(100) NOT NULL,
  `topic` varchar(250) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `price` varchar(100) NOT NULL,
  `dollarprice` varchar(100) NOT NULL,
  `format` varchar(50) NOT NULL,
  `chapters` varchar(50) NOT NULL,
  `pages` varchar(50) NOT NULL,
  `attribute` varchar(200) NOT NULL,
  `studylevel` varchar(200) NOT NULL,
  `postdate` datetime NOT NULL,
  `status` int(50) NOT NULL,
  `vendor` varchar(100) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbldepartments`
--

CREATE TABLE IF NOT EXISTS `tbldepartments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `DepartmentName` varchar(150) DEFAULT NULL,
  `DepartmentShortName` varchar(100) NOT NULL,
  `DepartmentCode` varchar(50) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbldepartments`
--

INSERT INTO `tbldepartments` (`id`, `DepartmentName`, `DepartmentShortName`, `DepartmentCode`, `CreationDate`) VALUES
(1, 'Computer Science', 'CSC', 'CSC001', '2019-09-16 07:16:25'),
(2, 'Accounting', 'ACCT', 'ACCT001', '2019-09-16 07:19:37'),
(3, 'Agricultural Economics And Extension', 'AEE', 'AEE001', '2019-09-16 20:28:56'),
(5, 'Agriculture', 'AG', 'AG001', '2019-09-16 09:19:45'),
(6, 'Banking and Finance', 'BAF', 'BAF001', '2019-09-16 19:45:16');

-- --------------------------------------------------------

--
-- Table structure for table `tblecons`
--

CREATE TABLE IF NOT EXISTS `tblecons` (
  `pid` int(50) NOT NULL AUTO_INCREMENT,
  `pcode` varchar(100) NOT NULL,
  `topic` varchar(250) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `price` varchar(100) NOT NULL,
  `dollarprice` varchar(100) NOT NULL,
  `format` varchar(50) NOT NULL,
  `chapters` varchar(50) NOT NULL,
  `pages` varchar(50) NOT NULL,
  `attribute` varchar(200) NOT NULL,
  `studylevel` varchar(200) NOT NULL,
  `postdate` datetime NOT NULL,
  `status` int(50) NOT NULL,
  `vendor` varchar(100) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbleducation`
--

CREATE TABLE IF NOT EXISTS `tbleducation` (
  `pid` int(50) NOT NULL AUTO_INCREMENT,
  `pcode` varchar(100) NOT NULL,
  `topic` varchar(250) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `price` varchar(100) NOT NULL,
  `dollarprice` varchar(100) NOT NULL,
  `format` varchar(50) NOT NULL,
  `chapters` varchar(50) NOT NULL,
  `pages` varchar(50) NOT NULL,
  `attribute` varchar(200) NOT NULL,
  `studylevel` varchar(200) NOT NULL,
  `postdate` datetime NOT NULL,
  `status` int(50) NOT NULL,
  `vendor` varchar(100) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblelectrical`
--

CREATE TABLE IF NOT EXISTS `tblelectrical` (
  `pid` int(50) NOT NULL AUTO_INCREMENT,
  `pcode` varchar(100) NOT NULL,
  `topic` varchar(250) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `price` varchar(100) NOT NULL,
  `dollarprice` varchar(100) NOT NULL,
  `format` varchar(50) NOT NULL,
  `chapters` varchar(50) NOT NULL,
  `pages` varchar(50) NOT NULL,
  `attribute` varchar(200) NOT NULL,
  `studylevel` varchar(200) NOT NULL,
  `postdate` datetime NOT NULL,
  `status` int(50) NOT NULL,
  `vendor` varchar(100) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblemployees`
--

CREATE TABLE IF NOT EXISTS `tblemployees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `EmpId` varchar(100) NOT NULL,
  `FirstName` varchar(150) NOT NULL,
  `LastName` varchar(150) NOT NULL,
  `EmailId` varchar(200) NOT NULL,
  `Password` varchar(180) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Department` varchar(255) NOT NULL,
  `Phonenumber` char(11) NOT NULL,
  `Status` int(1) NOT NULL,
  `Jobstatus` varchar(50) NOT NULL,
  `RegDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tblemployees`
--

INSERT INTO `tblemployees` (`id`, `EmpId`, `FirstName`, `LastName`, `EmailId`, `Password`, `Gender`, `Department`, `Phonenumber`, `Status`, `Jobstatus`, `RegDate`) VALUES
(3, 'poonam123', 'Charles', 'Bama', 'poo@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Female', 'Computer Science', '0803465758', 1, 'Not Available', '2017-12-19 11:20:47'),
(4, '', 'Comforta', 'Tochukwu', 'commy@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '', 'Agriculture', '0708988990', 1, '', '2019-09-16 16:23:29'),
(5, '', 'Lesi', 'Dick', 'lesi@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '', 'Agriculture', '0709878898', 1, 'Available', '2019-09-16 19:49:49'),
(6, '', 'Joe', 'Paul', 'joe@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '', 'Accounting', '0803723456', 1, 'Available', '2019-09-18 00:38:24'),
(7, '', 'Abraham', 'Iboroma', 'abiboroma@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '', 'Computer Science', '0803734676', 1, 'Available', '2019-09-18 02:38:17');

-- --------------------------------------------------------

--
-- Table structure for table `tblenglish`
--

CREATE TABLE IF NOT EXISTS `tblenglish` (
  `pid` int(50) NOT NULL AUTO_INCREMENT,
  `pcode` varchar(100) NOT NULL,
  `topic` varchar(250) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `price` varchar(100) NOT NULL,
  `dollarprice` varchar(100) NOT NULL,
  `format` varchar(50) NOT NULL,
  `chapters` varchar(50) NOT NULL,
  `pages` varchar(50) NOT NULL,
  `attribute` varchar(200) NOT NULL,
  `studylevel` varchar(200) NOT NULL,
  `postdate` datetime NOT NULL,
  `status` int(50) NOT NULL,
  `vendor` varchar(100) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblenterpreneurs`
--

CREATE TABLE IF NOT EXISTS `tblenterpreneurs` (
  `pid` int(50) NOT NULL AUTO_INCREMENT,
  `pcode` varchar(100) NOT NULL,
  `topic` varchar(250) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `price` varchar(100) NOT NULL,
  `dollarprice` varchar(100) NOT NULL,
  `format` varchar(50) NOT NULL,
  `chapters` varchar(50) NOT NULL,
  `pages` varchar(50) NOT NULL,
  `attribute` varchar(200) NOT NULL,
  `studylevel` varchar(200) NOT NULL,
  `postdate` datetime NOT NULL,
  `status` int(50) NOT NULL,
  `vendor` varchar(100) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblfineart`
--

CREATE TABLE IF NOT EXISTS `tblfineart` (
  `pid` int(50) NOT NULL AUTO_INCREMENT,
  `pcode` varchar(100) NOT NULL,
  `topic` varchar(250) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `price` varchar(100) NOT NULL,
  `dollarprice` varchar(100) NOT NULL,
  `format` varchar(50) NOT NULL,
  `chapters` varchar(50) NOT NULL,
  `pages` varchar(50) NOT NULL,
  `attribute` varchar(200) NOT NULL,
  `studylevel` varchar(200) NOT NULL,
  `postdate` datetime NOT NULL,
  `status` int(50) NOT NULL,
  `vendor` varchar(100) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblfishery`
--

CREATE TABLE IF NOT EXISTS `tblfishery` (
  `pid` int(50) NOT NULL AUTO_INCREMENT,
  `pcode` varchar(100) NOT NULL,
  `topic` varchar(250) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `price` varchar(100) NOT NULL,
  `dollarprice` varchar(100) NOT NULL,
  `format` varchar(50) NOT NULL,
  `chapters` varchar(50) NOT NULL,
  `pages` varchar(50) NOT NULL,
  `attribute` varchar(200) NOT NULL,
  `studylevel` varchar(200) NOT NULL,
  `postdate` datetime NOT NULL,
  `status` int(50) NOT NULL,
  `vendor` varchar(100) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblgenetics`
--

CREATE TABLE IF NOT EXISTS `tblgenetics` (
  `pid` int(50) NOT NULL AUTO_INCREMENT,
  `pcode` varchar(100) NOT NULL,
  `topic` varchar(250) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `price` varchar(100) NOT NULL,
  `dollarprice` varchar(100) NOT NULL,
  `format` varchar(50) NOT NULL,
  `chapters` varchar(50) NOT NULL,
  `pages` varchar(50) NOT NULL,
  `attribute` varchar(200) NOT NULL,
  `studylevel` varchar(200) NOT NULL,
  `postdate` datetime NOT NULL,
  `status` int(50) NOT NULL,
  `vendor` varchar(100) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblgeology`
--

CREATE TABLE IF NOT EXISTS `tblgeology` (
  `pid` int(50) NOT NULL AUTO_INCREMENT,
  `pcode` varchar(100) NOT NULL,
  `topic` varchar(250) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `price` varchar(100) NOT NULL,
  `dollarprice` varchar(100) NOT NULL,
  `format` varchar(50) NOT NULL,
  `chapters` varchar(50) NOT NULL,
  `pages` varchar(50) NOT NULL,
  `attribute` varchar(200) NOT NULL,
  `studylevel` varchar(200) NOT NULL,
  `postdate` datetime NOT NULL,
  `status` int(50) NOT NULL,
  `vendor` varchar(100) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblguidance`
--

CREATE TABLE IF NOT EXISTS `tblguidance` (
  `pid` int(50) NOT NULL AUTO_INCREMENT,
  `pcode` varchar(100) NOT NULL,
  `topic` varchar(250) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `price` varchar(100) NOT NULL,
  `dollarprice` varchar(100) NOT NULL,
  `format` varchar(50) NOT NULL,
  `chapters` varchar(50) NOT NULL,
  `pages` varchar(50) NOT NULL,
  `attribute` varchar(200) NOT NULL,
  `studylevel` varchar(200) NOT NULL,
  `postdate` datetime NOT NULL,
  `status` int(50) NOT NULL,
  `vendor` varchar(100) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblhealthscience`
--

CREATE TABLE IF NOT EXISTS `tblhealthscience` (
  `pid` int(50) NOT NULL AUTO_INCREMENT,
  `pcode` varchar(100) NOT NULL,
  `topic` varchar(250) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `price` varchar(100) NOT NULL,
  `dollarprice` varchar(100) NOT NULL,
  `format` varchar(50) NOT NULL,
  `chapters` varchar(50) NOT NULL,
  `pages` varchar(50) NOT NULL,
  `attribute` varchar(200) NOT NULL,
  `studylevel` varchar(200) NOT NULL,
  `postdate` datetime NOT NULL,
  `status` int(50) NOT NULL,
  `vendor` varchar(100) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblhistoryrs`
--

CREATE TABLE IF NOT EXISTS `tblhistoryrs` (
  `pid` int(50) NOT NULL AUTO_INCREMENT,
  `pcode` varchar(100) NOT NULL,
  `topic` varchar(250) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `price` varchar(100) NOT NULL,
  `dollarprice` varchar(100) NOT NULL,
  `format` varchar(50) NOT NULL,
  `chapters` varchar(50) NOT NULL,
  `pages` varchar(50) NOT NULL,
  `attribute` varchar(200) NOT NULL,
  `studylevel` varchar(200) NOT NULL,
  `postdate` datetime NOT NULL,
  `status` int(50) NOT NULL,
  `vendor` varchar(100) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblhomerural`
--

CREATE TABLE IF NOT EXISTS `tblhomerural` (
  `pid` int(50) NOT NULL AUTO_INCREMENT,
  `pcode` varchar(100) NOT NULL,
  `topic` varchar(250) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `price` varchar(100) NOT NULL,
  `dollarprice` varchar(100) NOT NULL,
  `format` varchar(50) NOT NULL,
  `chapters` varchar(50) NOT NULL,
  `pages` varchar(50) NOT NULL,
  `attribute` varchar(200) NOT NULL,
  `studylevel` varchar(200) NOT NULL,
  `postdate` datetime NOT NULL,
  `status` int(50) NOT NULL,
  `vendor` varchar(100) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblhumanresources`
--

CREATE TABLE IF NOT EXISTS `tblhumanresources` (
  `pid` int(50) NOT NULL AUTO_INCREMENT,
  `pcode` varchar(100) NOT NULL,
  `topic` varchar(250) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `price` varchar(100) NOT NULL,
  `dollarprice` varchar(100) NOT NULL,
  `format` varchar(50) NOT NULL,
  `chapters` varchar(50) NOT NULL,
  `pages` varchar(50) NOT NULL,
  `attribute` varchar(200) NOT NULL,
  `studylevel` varchar(200) NOT NULL,
  `postdate` datetime NOT NULL,
  `status` int(50) NOT NULL,
  `vendor` varchar(100) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblindustrialchem`
--

CREATE TABLE IF NOT EXISTS `tblindustrialchem` (
  `pid` int(50) NOT NULL AUTO_INCREMENT,
  `pcode` varchar(100) NOT NULL,
  `topic` varchar(250) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `price` varchar(100) NOT NULL,
  `dollarprice` varchar(100) NOT NULL,
  `format` varchar(50) NOT NULL,
  `chapters` varchar(50) NOT NULL,
  `pages` varchar(50) NOT NULL,
  `attribute` varchar(200) NOT NULL,
  `studylevel` varchar(200) NOT NULL,
  `postdate` datetime NOT NULL,
  `status` int(50) NOT NULL,
  `vendor` varchar(100) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblinfotech`
--

CREATE TABLE IF NOT EXISTS `tblinfotech` (
  `pid` int(50) NOT NULL AUTO_INCREMENT,
  `pcode` varchar(100) NOT NULL,
  `topic` varchar(250) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `price` varchar(100) NOT NULL,
  `dollarprice` varchar(100) NOT NULL,
  `format` varchar(50) NOT NULL,
  `chapters` varchar(50) NOT NULL,
  `pages` varchar(50) NOT NULL,
  `attribute` varchar(200) NOT NULL,
  `studylevel` varchar(200) NOT NULL,
  `postdate` datetime NOT NULL,
  `status` int(50) NOT NULL,
  `vendor` varchar(100) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblinternationalrelation`
--

CREATE TABLE IF NOT EXISTS `tblinternationalrelation` (
  `pid` int(50) NOT NULL AUTO_INCREMENT,
  `pcode` varchar(100) NOT NULL,
  `topic` varchar(250) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `price` varchar(100) NOT NULL,
  `dollarprice` varchar(100) NOT NULL,
  `format` varchar(50) NOT NULL,
  `chapters` varchar(50) NOT NULL,
  `pages` varchar(50) NOT NULL,
  `attribute` varchar(200) NOT NULL,
  `studylevel` varchar(200) NOT NULL,
  `postdate` datetime NOT NULL,
  `status` int(50) NOT NULL,
  `vendor` varchar(100) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbllaw`
--

CREATE TABLE IF NOT EXISTS `tbllaw` (
  `pid` int(50) NOT NULL AUTO_INCREMENT,
  `pcode` varchar(100) NOT NULL,
  `topic` varchar(250) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `price` varchar(100) NOT NULL,
  `dollarprice` varchar(100) NOT NULL,
  `format` varchar(50) NOT NULL,
  `chapters` varchar(50) NOT NULL,
  `pages` varchar(50) NOT NULL,
  `attribute` varchar(200) NOT NULL,
  `studylevel` varchar(200) NOT NULL,
  `postdate` datetime NOT NULL,
  `status` int(50) NOT NULL,
  `vendor` varchar(100) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbllibraryinfo`
--

CREATE TABLE IF NOT EXISTS `tbllibraryinfo` (
  `pid` int(50) NOT NULL AUTO_INCREMENT,
  `pcode` varchar(100) NOT NULL,
  `topic` varchar(250) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `price` varchar(100) NOT NULL,
  `dollarprice` varchar(100) NOT NULL,
  `format` varchar(50) NOT NULL,
  `chapters` varchar(50) NOT NULL,
  `pages` varchar(50) NOT NULL,
  `attribute` varchar(200) NOT NULL,
  `studylevel` varchar(200) NOT NULL,
  `postdate` datetime NOT NULL,
  `status` int(50) NOT NULL,
  `vendor` varchar(100) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblmarinetransport`
--

CREATE TABLE IF NOT EXISTS `tblmarinetransport` (
  `pid` int(50) NOT NULL AUTO_INCREMENT,
  `pcode` varchar(100) NOT NULL,
  `topic` varchar(250) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `price` varchar(100) NOT NULL,
  `dollarprice` varchar(100) NOT NULL,
  `format` varchar(50) NOT NULL,
  `chapters` varchar(50) NOT NULL,
  `pages` varchar(50) NOT NULL,
  `attribute` varchar(200) NOT NULL,
  `studylevel` varchar(200) NOT NULL,
  `postdate` datetime NOT NULL,
  `status` int(50) NOT NULL,
  `vendor` varchar(100) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblmarketing`
--

CREATE TABLE IF NOT EXISTS `tblmarketing` (
  `pid` int(50) NOT NULL AUTO_INCREMENT,
  `pcode` varchar(100) NOT NULL,
  `topic` varchar(250) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `price` varchar(100) NOT NULL,
  `dollarprice` varchar(100) NOT NULL,
  `format` varchar(50) NOT NULL,
  `chapters` varchar(50) NOT NULL,
  `pages` varchar(50) NOT NULL,
  `attribute` varchar(200) NOT NULL,
  `studylevel` varchar(200) NOT NULL,
  `postdate` datetime NOT NULL,
  `status` int(50) NOT NULL,
  `vendor` varchar(100) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblmasscomm`
--

CREATE TABLE IF NOT EXISTS `tblmasscomm` (
  `pid` int(50) NOT NULL AUTO_INCREMENT,
  `pcode` varchar(100) NOT NULL,
  `topic` varchar(250) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `price` varchar(100) NOT NULL,
  `dollarprice` varchar(100) NOT NULL,
  `format` varchar(50) NOT NULL,
  `chapters` varchar(50) NOT NULL,
  `pages` varchar(50) NOT NULL,
  `attribute` varchar(200) NOT NULL,
  `studylevel` varchar(200) NOT NULL,
  `postdate` datetime NOT NULL,
  `status` int(50) NOT NULL,
  `vendor` varchar(100) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblmicrobiology`
--

CREATE TABLE IF NOT EXISTS `tblmicrobiology` (
  `pid` int(50) NOT NULL AUTO_INCREMENT,
  `pcode` varchar(100) NOT NULL,
  `topic` varchar(250) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `price` varchar(100) NOT NULL,
  `dollarprice` varchar(100) NOT NULL,
  `format` varchar(50) NOT NULL,
  `chapters` varchar(50) NOT NULL,
  `pages` varchar(50) NOT NULL,
  `attribute` varchar(200) NOT NULL,
  `studylevel` varchar(200) NOT NULL,
  `postdate` datetime NOT NULL,
  `status` int(50) NOT NULL,
  `vendor` varchar(100) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbloilgas`
--

CREATE TABLE IF NOT EXISTS `tbloilgas` (
  `pid` int(50) NOT NULL AUTO_INCREMENT,
  `pcode` varchar(100) NOT NULL,
  `topic` varchar(250) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `price` varchar(100) NOT NULL,
  `dollarprice` varchar(100) NOT NULL,
  `format` varchar(50) NOT NULL,
  `chapters` varchar(50) NOT NULL,
  `pages` varchar(50) NOT NULL,
  `attribute` varchar(200) NOT NULL,
  `studylevel` varchar(200) NOT NULL,
  `postdate` datetime NOT NULL,
  `status` int(50) NOT NULL,
  `vendor` varchar(100) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblorder`
--

CREATE TABLE IF NOT EXISTS `tblorder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `FullName` varchar(150) NOT NULL,
  `EmailId` varchar(200) NOT NULL,
  `Phonenumber` char(11) NOT NULL,
  `Topic` varchar(200) NOT NULL,
  `Services` varchar(200) NOT NULL,
  `Department` varchar(255) NOT NULL,
  `Institution` varchar(255) NOT NULL,
  `Budget` varchar(200) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Hasbeenapproved` varchar(50) NOT NULL,
  `Timeline` varchar(50) NOT NULL,
  `Status` int(1) NOT NULL,
  `RegDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tblorder`
--

INSERT INTO `tblorder` (`id`, `FullName`, `EmailId`, `Phonenumber`, `Topic`, `Services`, `Department`, `Institution`, `Budget`, `Description`, `Hasbeenapproved`, `Timeline`, `Status`, `RegDate`) VALUES
(3, 'Poonam', 'poo@gmail.com', '81dc9bdb52d', 'Female', '1 October, 1995', 'Human Resource', 'Jaipur', 'Jaipur', '', '', '', 1, '2019-09-18 00:11:36'),
(4, 'Comfort', 'commy@gmail.com', '81dc9bdb52d', '', '', '', '', '', '', '', '', 1, '2019-09-18 00:11:36'),
(5, 'Lesi', 'lesi@gmail.com', '81dc9bdb52d', '', '', '', '', '', '', '', '', 1, '2019-09-18 00:11:36');

-- --------------------------------------------------------

--
-- Table structure for table `tblpolscience`
--

CREATE TABLE IF NOT EXISTS `tblpolscience` (
  `pid` int(50) NOT NULL AUTO_INCREMENT,
  `pcode` varchar(100) NOT NULL,
  `topic` varchar(250) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `price` varchar(100) NOT NULL,
  `dollarprice` varchar(100) NOT NULL,
  `format` varchar(50) NOT NULL,
  `chapters` varchar(50) NOT NULL,
  `pages` varchar(50) NOT NULL,
  `attribute` varchar(200) NOT NULL,
  `studylevel` varchar(200) NOT NULL,
  `postdate` datetime NOT NULL,
  `status` int(50) NOT NULL,
  `vendor` varchar(100) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblpricelist`
--

CREATE TABLE IF NOT EXISTS `tblpricelist` (
  `price_id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `catype_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0:Blocked, 1:Active',
  PRIMARY KEY (`price_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tblpricelist`
--

INSERT INTO `tblpricelist` (`price_id`, `amount`, `catype_id`, `status`) VALUES
(1, '20000-50000', 1, 1),
(2, '20000-50000', 2, 1),
(3, '30000-50000', 3, 1),
(4, '20000 - 50000', 4, 1),
(5, '50000 - 200000', 5, 1),
(6, '50000 - 200000', 6, 1),
(7, '150000 - 300000', 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblpsychology`
--

CREATE TABLE IF NOT EXISTS `tblpsychology` (
  `pid` int(50) NOT NULL AUTO_INCREMENT,
  `pcode` varchar(100) NOT NULL,
  `topic` varchar(250) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `price` varchar(100) NOT NULL,
  `dollarprice` varchar(100) NOT NULL,
  `format` varchar(50) NOT NULL,
  `chapters` varchar(50) NOT NULL,
  `pages` varchar(50) NOT NULL,
  `attribute` varchar(200) NOT NULL,
  `studylevel` varchar(200) NOT NULL,
  `postdate` datetime NOT NULL,
  `status` int(50) NOT NULL,
  `vendor` varchar(100) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblpublicadmin`
--

CREATE TABLE IF NOT EXISTS `tblpublicadmin` (
  `pid` int(50) NOT NULL AUTO_INCREMENT,
  `pcode` varchar(100) NOT NULL,
  `topic` varchar(250) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `price` varchar(100) NOT NULL,
  `dollarprice` varchar(100) NOT NULL,
  `format` varchar(50) NOT NULL,
  `chapters` varchar(50) NOT NULL,
  `pages` varchar(50) NOT NULL,
  `attribute` varchar(200) NOT NULL,
  `studylevel` varchar(200) NOT NULL,
  `postdate` datetime NOT NULL,
  `status` int(50) NOT NULL,
  `vendor` varchar(100) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblreview`
--

CREATE TABLE IF NOT EXISTS `tblreview` (
  `cid` int(50) NOT NULL AUTO_INCREMENT,
  `uid` int(50) NOT NULL,
  `message` varchar(250) NOT NULL,
  `reply` varchar(250) NOT NULL,
  `status` int(50) NOT NULL,
  `senddate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tblreview`
--

INSERT INTO `tblreview` (`cid`, `uid`, `message`, `reply`, `status`, `senddate`) VALUES
(1, 0, 'testing', '', 0, '0000-00-00 00:00:00'),
(2, 0, 'Hello my people this is a unique platform, i ordered material from them and they deliver within an hour. Thank you School Project Hub', '', 0, '2019-12-23 19:49:47'),
(3, 0, 'Hello my people this is a unique platform, i ordered material from them and they deliver within an hour. Thank you School Project Hub', '', 0, '2019-12-23 20:29:01'),
(4, 0, 'Hello my people this is a unique platform, i ordered material from them and they deliver within an hour. Thank you School Project Hub', '', 0, '2019-12-23 20:43:10'),
(5, 0, 'Hello my people this is a unique platform, i ordered material from them and they deliver within an hour. Thank you School Project Hub', '', 0, '2019-12-23 20:44:59');

-- --------------------------------------------------------

--
-- Table structure for table `tblsecreterialstudies`
--

CREATE TABLE IF NOT EXISTS `tblsecreterialstudies` (
  `pid` int(50) NOT NULL AUTO_INCREMENT,
  `pcode` varchar(100) NOT NULL,
  `topic` varchar(250) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `price` varchar(100) NOT NULL,
  `dollarprice` varchar(100) NOT NULL,
  `format` varchar(50) NOT NULL,
  `chapters` varchar(50) NOT NULL,
  `pages` varchar(50) NOT NULL,
  `attribute` varchar(200) NOT NULL,
  `studylevel` varchar(200) NOT NULL,
  `postdate` datetime NOT NULL,
  `status` int(50) NOT NULL,
  `vendor` varchar(100) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblslt`
--

CREATE TABLE IF NOT EXISTS `tblslt` (
  `pid` int(50) NOT NULL AUTO_INCREMENT,
  `pcode` varchar(100) NOT NULL,
  `topic` varchar(250) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `price` varchar(100) NOT NULL,
  `dollarprice` varchar(100) NOT NULL,
  `format` varchar(50) NOT NULL,
  `chapters` varchar(50) NOT NULL,
  `pages` varchar(50) NOT NULL,
  `attribute` varchar(200) NOT NULL,
  `studylevel` varchar(200) NOT NULL,
  `postdate` datetime NOT NULL,
  `status` int(50) NOT NULL,
  `vendor` varchar(100) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblsociology`
--

CREATE TABLE IF NOT EXISTS `tblsociology` (
  `pid` int(50) NOT NULL AUTO_INCREMENT,
  `pcode` varchar(100) NOT NULL,
  `topic` varchar(250) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `price` varchar(100) NOT NULL,
  `dollarprice` varchar(100) NOT NULL,
  `format` varchar(50) NOT NULL,
  `chapters` varchar(50) NOT NULL,
  `pages` varchar(50) NOT NULL,
  `attribute` varchar(200) NOT NULL,
  `studylevel` varchar(200) NOT NULL,
  `postdate` datetime NOT NULL,
  `status` int(50) NOT NULL,
  `vendor` varchar(100) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbluploadproject`
--

CREATE TABLE IF NOT EXISTS `tbluploadproject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `file` varchar(200) NOT NULL,
  `Department` varchar(110) NOT NULL,
  `Topic` varchar(120) NOT NULL,
  `Category` varchar(120) NOT NULL,
  `Price` int(50) NOT NULL,
  `Description` mediumtext NOT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `AdminRemark` mediumtext,
  `AdminRemarkDate` varchar(120) DEFAULT NULL,
  `AdminPrice` varchar(200) NOT NULL,
  `Status` int(1) NOT NULL,
  `IsRead` int(1) NOT NULL,
  `empid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `UserEmail` (`empid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `tbluploadproject`
--

INSERT INTO `tbluploadproject` (`id`, `name`, `file`, `Department`, `Topic`, `Category`, `Price`, `Description`, `PostingDate`, `AdminRemark`, `AdminRemarkDate`, `AdminPrice`, `Status`, `IsRead`, `empid`) VALUES
(11, '', '', 'Casual Leave', '20/12/2017', '26/12/2017', 0, 'ajfaDfgdasgsg', '2017-12-19 11:21:45', 'Done', '2017-12-19 16:54:02 ', '', 1, 1, 3),
(12, '', '', 'Casual Leave', '20/09/2019', '22/09/2019', 0, 'Church Program', '2019-09-16 17:13:48', 'Done,make sure you resume at the stipulated date.', '2019-09-16 22:48:40 ', '', 1, 1, 4),
(13, 'Array', 'files/chapte 4.docx', 'Computer Science', 'tett', 'undergraduate', 5000, 'bmvg', '2019-09-16 19:27:15', 'Project Accepted', '2019-09-27 0:10:30 ', '7000', 1, 1, 4),
(14, 'Array', 'files/Abstract.docx', 'Computer Science', 'test2', 'undergraduate', 4000, 'Hello world', '2019-09-16 19:32:19', 'Congrats! Project accepted', '2019-09-17 3:44:10 ', '', 1, 1, 4),
(15, 'Array', 'files/Abstract.docx', 'Accounting', 'Transaction tracking', 'undergraduate', 4000, 'Testing the app functionalities', '2019-09-16 19:53:05', 'Congrats!, Project Accepted ', '2019-09-17 3:11:28 ', '', 1, 1, 5),
(16, 'Array', 'files/chapter 1.docx', 'Computer Science', 'Hybrid model for cloud storage system', 'postgraduate', 5000, 'Cloud storage system is a cooperation storage service system with multiple devices, many application domains, and many service forms. Cloud storage is one of the services which provide storage resource and service based on the remote storage servers based on cloud computing.\r\nWhen the storage capacity is used over some threshold proportion values, the data  migrated from one storage unit into other cloud storage units and keep pointers in the old stored.', '2019-09-18 00:43:35', 'Done', '2019-09-19 3:20:58 ', '', 1, 1, 6),
(17, 'Array', 'files/Review chapter one.docx', 'Computer Science', 'Distributed Database System', 'postgraduate', 150000, 'Concurrency control has been actively investigated for the past several years and two-phase locking used as a standard solution for transaction processing in a database management system but the system is saturated with conflicts due to frequent rollbacks, long time waiting and blocking, high rate of aborted transactions that leads to deadlock. Hence to solve these problems stated we develop a hybridized concurrency control techniques which combines two phase locking and timestamp ordering.  This technique will enhance the performance of the concurrency control techniques for transaction processing in a distributed database management system. This work is developed in ASP.Net using C# programming language as the front end and Microsoft SQL Server 2008 as the back end that is the database. Our result shows that two-phase locking and timestamp ordering is slow, time consuming during execution while our hybridized approach optimizes faster and consumed less time. This approach will give confidence to database administrators when handling concurrency transactions and make them deliver their work timely.', '2019-09-19 00:33:16', 'Done', '2019-09-19 6:37:49 ', '70000', 1, 1, 6),
(18, 'Array', 'files/Review chapter 1.docx', 'Computer Science', 'Cloud Storage System', 'postgraduate', 100000, 'Cloud storage system is a cooperation storage service system with multiple devices, many application domains, and many service forms. Cloud storage is one of the services which provide storage resource and service based on the remote storage servers based on cloud computing.\r\nWhen the storage capacity is used over some threshold proportion values, the data  migrated from one storage unit into other cloud storage units and keep pointers in the old stored positions, or modify and update the metadata at the same time. Data migration is one of the effective mechanisms for load balance, but it may bring overhead workload to network bandwidth and I/O process. Data migration may take a relevant long time and suffer from data loss to massive data for the media and channel errors. Hence to solve these problems stated we need to develop An Improved Integrated Model For Data Storage In Cloud  that will optimizes time execution for data migration  processing by assigning a timestamp to every  data and increase the performance in cloud storage system. This work is developed in ASP.Net using C# programming language as the front end and Microsoft SQL Server as the back end which is the database. \r\n', '2019-09-19 00:45:01', 'Congratulations, project topic accepted', '2019-09-19 7:17:55 ', '120000', 1, 1, 6),
(19, 'Array', 'files/Review chapter 1.docx', 'Computer Science', 'Discuss Big Data ', 'undergraduate', 3000, 'ttyy ftfftdreddsssssssssssssssstyu', '2019-09-26 18:46:39', 'Congratulations! Project accepted', '2019-09-27 0:56:55 ', '5000', 1, 1, 7),
(20, 'Array', 'files/CHAPTER ONE.docx', 'Accounting', 'Financial Transaction Tracking System', 'postgraduate', 4000, 'jhgkyghygghhghghghfgddfdxddfhhgfdcfrfghjghhbjhhhhjlhggsdssdf', '2019-09-26 19:31:48', 'Done', '2019-12-21 0:19:09 ', '20000', 1, 1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `tblurbanregionplan`
--

CREATE TABLE IF NOT EXISTS `tblurbanregionplan` (
  `pid` int(50) NOT NULL AUTO_INCREMENT,
  `pcode` varchar(100) NOT NULL,
  `topic` varchar(250) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `price` varchar(100) NOT NULL,
  `dollarprice` varchar(100) NOT NULL,
  `format` varchar(50) NOT NULL,
  `chapters` varchar(50) NOT NULL,
  `pages` varchar(50) NOT NULL,
  `attribute` varchar(200) NOT NULL,
  `studylevel` varchar(200) NOT NULL,
  `postdate` datetime NOT NULL,
  `status` int(50) NOT NULL,
  `vendor` varchar(100) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
