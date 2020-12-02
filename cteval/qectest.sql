-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2020 at 02:36 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qectest`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `username`, `password`) VALUES
(1, 'qec', 'qec789');

-- --------------------------------------------------------

--
-- Table structure for table `alumni_comments`
--

CREATE TABLE `alumni_comments` (
  `s_no` int(11) NOT NULL,
  `qid` varchar(11) NOT NULL,
  `comments` text NOT NULL,
  `department` text NOT NULL,
  `submitDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alumni_comments`
--

INSERT INTO `alumni_comments` (`s_no`, `qid`, `comments`, `department`, `submitDate`) VALUES
(7, 'alucom1', 'general comment', 'CS&IT', '2020-03-23'),
(8, 'alucom2', 'repute', 'CS&IT', '2020-03-23'),
(9, 'alucom1', 'comment', 'Agriculture Engineering', '2020-03-23'),
(10, 'alucom2', 'international', 'Agriculture Engineering', '2020-03-23'),
(11, 'alucom1', '', 'CS&IT', '2020-09-20'),
(12, 'alucom2', '', 'CS&IT', '2020-09-20');

-- --------------------------------------------------------

--
-- Table structure for table `alumni_information`
--

CREATE TABLE `alumni_information` (
  `s_no` int(11) NOT NULL,
  `name` text NOT NULL,
  `organization_name` text NOT NULL,
  `position` varchar(20) NOT NULL,
  `department` text NOT NULL,
  `graduation_year` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alumni_information`
--

INSERT INTO `alumni_information` (`s_no`, `name`, `organization_name`, `position`, `department`, `graduation_year`) VALUES
(7, 'ali', 'uet', 'assistant', '', '2007-09-11'),
(8, 'ihsan', 'uet', 'professor', 'CS&IT', '2010-12-01'),
(9, 'shahab', 'uet', 'assistant', 'Agriculture Engineering', '2019-05-15'),
(10, '', '', '', 'CS&IT', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `alumni_survey`
--

CREATE TABLE `alumni_survey` (
  `s_no` int(11) NOT NULL,
  `qid` varchar(11) NOT NULL,
  `satisfaction` int(11) NOT NULL,
  `department` text NOT NULL,
  `submitDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `comments_of_sgs`
--

CREATE TABLE `comments_of_sgs` (
  `s_no` int(11) NOT NULL,
  `qid` varchar(11) NOT NULL,
  `comment` varchar(30) NOT NULL,
  `department` text NOT NULL,
  `submitDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments_of_sgs`
--

INSERT INTO `comments_of_sgs` (`s_no`, `qid`, `comment`, `department`, `submitDate`) VALUES
(33, 'sgsq16', 'best', 'CS&IT', '2020-03-19'),
(34, 'sgsq17', 'aspect', 'CS&IT', '2020-03-19'),
(35, 'sgsq16', 'best', 'CS&IT', '2020-03-19'),
(36, 'sgsq17', 'aspect', 'CS&IT', '2020-03-19'),
(37, 'sgsq16', 'best', 'CS&IT', '2020-03-19'),
(38, 'sgsq17', 'aspect', 'CS&IT', '2020-03-19'),
(39, 'sgsq16', '', 'CS&IT', '2020-03-19'),
(40, 'sgsq17', '', 'CS&IT', '2020-03-19'),
(41, 'sgsq16', '', 'CS&IT', '2020-03-19'),
(42, 'sgsq17', '', 'CS&IT', '2020-03-19'),
(43, 'sgsq16', 'best', 'Agriculture Engineering', '2020-03-19'),
(44, 'sgsq17', 'aspect', 'Agriculture Engineering', '2020-03-19'),
(45, 'sgsq16', '', 'CS&IT', '2020-05-13'),
(46, 'sgsq17', '', 'CS&IT', '2020-05-13'),
(47, 'sgsq16', '', 'CS&IT', '2020-09-17'),
(48, 'sgsq17', '', 'CS&IT', '2020-09-17'),
(49, 'sgsq16', '', 'CS&IT', '2020-09-20'),
(50, 'sgsq17', '', 'CS&IT', '2020-09-20'),
(51, 'sgsq16', '', 'CS&IT', '2020-09-20'),
(52, 'sgsq17', '', 'CS&IT', '2020-09-20'),
(53, 'sgsq16', '', 'CS&IT', '2020-09-21'),
(54, 'sgsq17', '', 'CS&IT', '2020-09-21'),
(55, 'sgsq16', '', 'CS&IT', '2020-09-21'),
(56, 'sgsq17', '', 'CS&IT', '2020-09-21'),
(57, 'sgsq16', '', 'CS&IT', '2020-09-21'),
(58, 'sgsq17', '', 'CS&IT', '2020-09-21');

-- --------------------------------------------------------

--
-- Table structure for table `department_survey_offering_phd`
--

CREATE TABLE `department_survey_offering_phd` (
  `s_no` int(11) NOT NULL,
  `question_1.1` text NOT NULL,
  `question_1.2` text NOT NULL,
  `question_1.3` date NOT NULL,
  `question_1.4` int(11) NOT NULL,
  `question_1.5` int(11) NOT NULL,
  `question_1.6` varchar(11) NOT NULL,
  `question_2.1` int(11) NOT NULL,
  `question_2.2` int(11) NOT NULL,
  `question_3.1` int(11) NOT NULL,
  `question_3.2` int(11) NOT NULL,
  `question_3.3` int(11) NOT NULL,
  `question_3.4` int(11) NOT NULL,
  `question_3.5` int(11) NOT NULL,
  `question_3.6` int(11) NOT NULL,
  `question_4.1` int(11) NOT NULL,
  `question_4.2` int(11) NOT NULL,
  `question_4.3` varchar(11) NOT NULL,
  `question_5.1` varchar(20) NOT NULL,
  `question_5.2` text NOT NULL,
  `question_5.3` varchar(15) NOT NULL,
  `question_5.4` varchar(15) NOT NULL,
  `question_5.5` varchar(20) NOT NULL,
  `question_5.6` varchar(20) NOT NULL,
  `question_5.7.1` text NOT NULL,
  `question_5.7.2` text NOT NULL,
  `question_5.7.3` text NOT NULL,
  `question_5.7.4` text NOT NULL,
  `question_5.8` int(10) NOT NULL,
  `question_5.9` varchar(30) NOT NULL,
  `question_5.10` varchar(20) NOT NULL,
  `question_6` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department_survey_offering_phd`
--

INSERT INTO `department_survey_offering_phd` (`s_no`, `question_1.1`, `question_1.2`, `question_1.3`, `question_1.4`, `question_1.5`, `question_1.6`, `question_2.1`, `question_2.2`, `question_3.1`, `question_3.2`, `question_3.3`, `question_3.4`, `question_3.5`, `question_3.6`, `question_4.1`, `question_4.2`, `question_4.3`, `question_5.1`, `question_5.2`, `question_5.3`, `question_5.4`, `question_5.5`, `question_5.6`, `question_5.7.1`, `question_5.7.2`, `question_5.7.3`, `question_5.7.4`, `question_5.8`, `question_5.9`, `question_5.10`, `question_6`) VALUES
(1, 'csit', 'computer', '2005-01-01', 3, 12, '4', 4, 2, 2, 2, 2, 2, 2, 2, 2, 2, '2', '2', 'yes', '2', '2', '2', '2', 'yes', 'radio3', 'radio4', 'radio5', 2, 'Pakistan', '12', 'no'),
(4, '', '', '0000-00-00', 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 'no', '', '', '', '', 'no', 'no', 'no', 'no', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `employer_comments`
--

CREATE TABLE `employer_comments` (
  `s_no` int(11) NOT NULL,
  `qid` varchar(11) NOT NULL,
  `comments` text NOT NULL,
  `department` text NOT NULL,
  `submitDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employer_comments`
--

INSERT INTO `employer_comments` (`s_no`, `qid`, `comments`, `department`, `submitDate`) VALUES
(1, 'esq19', 'comments', '', '0000-00-00'),
(2, 'esq19', '', 'CS&IT', '2020-03-21'),
(3, 'esq19', '', 'CS&IT', '2020-03-21'),
(4, 'esq19', 'please', 'CS&IT', '2020-03-21'),
(5, 'esq19', 'general', 'Agriculture Engineering', '2020-03-21'),
(6, 'esq19', '', 'CS&IT', '2020-09-20'),
(7, 'esq19', '', 'CS&IT', '2020-09-20'),
(8, 'esq19', '', 'CS&IT', '2020-09-21'),
(9, 'esq19', '', 'CS&IT', '2020-09-21');

-- --------------------------------------------------------

--
-- Table structure for table `employer_survey`
--

CREATE TABLE `employer_survey` (
  `s_no` int(11) NOT NULL,
  `qid` varchar(11) NOT NULL,
  `satisfaction` int(11) NOT NULL,
  `department` text NOT NULL,
  `submitDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `example`
--

CREATE TABLE `example` (
  `s_no` int(11) NOT NULL,
  `qid` varchar(11) NOT NULL,
  `satisfaction` int(11) NOT NULL,
  `department` text NOT NULL,
  `submitDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `example`
--

INSERT INTO `example` (`s_no`, `qid`, `satisfaction`, `department`, `submitDate`) VALUES
(102, 'sgsq1', 1, 'CS&IT', '2020-03-19'),
(103, 'sgsq2', 2, 'CS&IT', '2020-03-19'),
(124, 'sgsq1', 5, 'Agriculture Engineering', '2020-03-19'),
(125, 'sgsq2', 4, 'Agriculture Engineering', '2020-03-19'),
(126, 'sgsq3', 3, 'Agriculture Engineering', '2020-03-19'),
(127, 'sgsq4', 2, 'Agriculture Engineering', '2020-03-19'),
(128, 'sgsq5', 1, 'Agriculture Engineering', '2020-03-19'),
(129, 'sgsq6', 2, 'Agriculture Engineering', '2020-03-19'),
(130, 'sgsq7', 3, 'Agriculture Engineering', '2020-03-19'),
(131, 'sgsq8', 4, 'Agriculture Engineering', '2020-03-19'),
(132, 'sgsq9', 5, 'Agriculture Engineering', '2020-03-19'),
(133, 'sgsq10', 4, 'Agriculture Engineering', '2020-03-19'),
(134, 'sgsq12', 3, 'Agriculture Engineering', '2020-03-19'),
(135, 'sgsq13', 1, 'Agriculture Engineering', '2020-03-19'),
(136, 'sgsq14', 2, 'Agriculture Engineering', '2020-03-19'),
(137, 'sgsq15a', 3, 'Agriculture Engineering', '2020-03-19'),
(138, 'sgsq15b', 4, 'Agriculture Engineering', '2020-03-19'),
(139, 'sgsq15c', 5, 'Agriculture Engineering', '2020-03-19'),
(140, 'sgsq15d', 4, 'Agriculture Engineering', '2020-03-19'),
(141, 'sgsq15e', 3, 'Agriculture Engineering', '2020-03-19'),
(142, 'sgsq15f', 2, 'Agriculture Engineering', '2020-03-19'),
(143, 'sgsq15g', 1, 'Agriculture Engineering', '2020-03-19'),
(144, 'sgsq15h', 2, 'Agriculture Engineering', '2020-03-19'),
(145, 'sgsq1', 1, 'CS&IT', '2020-03-19'),
(146, 'sgsq2', 2, 'CS&IT', '2020-03-19'),
(147, 'sgsq3', 3, 'CS&IT', '2020-03-19'),
(148, 'sgsq4', 4, 'CS&IT', '2020-03-19'),
(149, 'sgsq5', 5, 'CS&IT', '2020-03-19'),
(150, 'sgsq6', 4, 'CS&IT', '2020-03-19'),
(151, 'sgsq7', 3, 'CS&IT', '2020-03-19'),
(152, 'sgsq8', 2, 'CS&IT', '2020-03-19'),
(153, 'sgsq9', 1, 'CS&IT', '2020-03-19'),
(154, 'sgsq10', 2, 'CS&IT', '2020-03-19'),
(155, 'sgsq11', 3, 'CS&IT', '2020-03-19'),
(156, 'sgsq12', 4, 'CS&IT', '2020-03-19'),
(157, 'sgsq13', 5, 'CS&IT', '2020-03-19'),
(158, 'sgsq14', 4, 'CS&IT', '2020-03-19'),
(159, 'sgsq15a', 2, 'CS&IT', '2020-03-19'),
(160, 'sgsq15b', 1, 'CS&IT', '2020-03-19'),
(161, 'sgsq15c', 2, 'CS&IT', '2020-03-19'),
(162, 'sgsq15d', 3, 'CS&IT', '2020-03-19'),
(163, 'sgsq15e', 4, 'CS&IT', '2020-03-19'),
(164, 'sgsq15f', 5, 'CS&IT', '2020-03-19'),
(165, 'sgsq15g', 4, 'CS&IT', '2020-03-19'),
(166, 'sgsq15h', 3, 'CS&IT', '2020-03-19'),
(167, 'sgsq11', 1, 'Agriculture Engineering', '2020-03-19'),
(168, 'sgsq1', 1, 'Chemical Engineering', '2020-03-19'),
(169, 'sgsq2', 1, 'Chemical Engineering', '2020-03-19'),
(170, 'sgsq3', 1, 'Chemical Engineering', '2020-03-19'),
(171, 'sgsq4', 1, 'Chemical Engineering', '2020-03-19'),
(172, 'sgsq5', 1, 'Chemical Engineering', '2020-03-19'),
(173, 'sgsq6', 1, 'Chemical Engineering', '2020-03-19'),
(174, 'sgsq7', 1, 'Chemical Engineering', '2020-03-19'),
(175, 'sgsq8', 1, 'Chemical Engineering', '2020-03-19'),
(176, 'sgsq9', 1, 'Chemical Engineering', '2020-03-19'),
(177, 'sgsq10', 1, 'Chemical Engineering', '2020-03-19'),
(178, 'sgsq11', 1, 'Chemical Engineering', '2020-03-19'),
(179, 'sgsq12', 1, 'Chemical Engineering', '2020-03-19'),
(180, 'sgsq13', 1, 'Chemical Engineering', '2020-03-19'),
(181, 'sgsq14', 1, 'Chemical Engineering', '2020-03-19'),
(182, 'sgsq15a', 1, 'Chemical Engineering', '2020-03-19'),
(183, 'sgsq15b', 1, 'Chemical Engineering', '2020-03-19'),
(184, 'sgsq15c', 1, 'Chemical Engineering', '2020-03-19'),
(185, 'sgsq15d', 1, 'Chemical Engineering', '2020-03-19'),
(186, 'sgsq15e', 1, 'Chemical Engineering', '2020-03-19'),
(187, 'sgsq15f', 1, 'Chemical Engineering', '2020-03-19'),
(188, 'sgsq15g', 1, 'Chemical Engineering', '2020-03-19'),
(189, 'sgsq15h', 1, 'Chemical Engineering', '2020-03-19'),
(190, 'sgsq1', 1, 'Civil Engineering', '2020-03-19'),
(191, 'sgsq2', 1, 'Civil Engineering', '2020-03-19'),
(192, 'sgsq3', 1, 'Civil Engineering', '2020-03-19'),
(193, 'sgsq4', 1, 'Civil Engineering', '2020-03-19'),
(194, 'sgsq5', 1, 'Civil Engineering', '2020-03-19'),
(195, 'sgsq6', 1, 'Civil Engineering', '2020-03-19'),
(196, 'sgsq7', 1, 'Civil Engineering', '2020-03-19'),
(197, 'sgsq8', 1, 'Civil Engineering', '2020-03-19'),
(198, 'sgsq9', 1, 'Civil Engineering', '2020-03-19'),
(199, 'sgsq10', 1, 'Civil Engineering', '2020-03-19'),
(200, 'sgsq11', 1, 'Civil Engineering', '2020-03-19'),
(201, 'sgsq12', 1, 'Civil Engineering', '2020-03-19'),
(202, 'sgsq13', 1, 'Civil Engineering', '2020-03-19'),
(203, 'sgsq14', 1, 'Civil Engineering', '2020-03-19'),
(204, 'sgsq15a', 1, 'Civil Engineering', '2020-03-19'),
(205, 'sgsq15b', 1, 'Civil Engineering', '2020-03-19'),
(206, 'sgsq15c', 1, 'Civil Engineering', '2020-03-19'),
(207, 'sgsq15d', 1, 'Civil Engineering', '2020-03-19'),
(208, 'sgsq15e', 1, 'Civil Engineering', '2020-03-19'),
(209, 'sgsq15f', 1, 'Civil Engineering', '2020-03-19'),
(210, 'sgsq15g', 1, 'Civil Engineering', '2020-03-19'),
(211, 'sgsq15h', 1, 'Civil Engineering', '2020-03-19'),
(212, 'sgsq1', 1, 'Computer System Engineering', '2020-03-19'),
(213, 'sgsq2', 1, 'Computer System Engineering', '2020-03-19'),
(214, 'sgsq3', 1, 'Computer System Engineering', '2020-03-19'),
(215, 'sgsq4', 1, 'Computer System Engineering', '2020-03-19'),
(216, 'sgsq5', 1, 'Computer System Engineering', '2020-03-19'),
(217, 'sgsq6', 1, 'Computer System Engineering', '2020-03-19'),
(218, 'sgsq7', 1, 'Computer System Engineering', '2020-03-19'),
(219, 'sgsq8', 1, 'Computer System Engineering', '2020-03-19'),
(220, 'sgsq9', 1, 'Computer System Engineering', '2020-03-19'),
(221, 'sgsq10', 1, 'Computer System Engineering', '2020-03-19'),
(222, 'sgsq11', 1, 'Computer System Engineering', '2020-03-19'),
(223, 'sgsq12', 1, 'Computer System Engineering', '2020-03-19'),
(224, 'sgsq13', 1, 'Computer System Engineering', '2020-03-19'),
(225, 'sgsq14', 1, 'Computer System Engineering', '2020-03-19'),
(226, 'sgsq15a', 1, 'Computer System Engineering', '2020-03-19'),
(227, 'sgsq15b', 1, 'Computer System Engineering', '2020-03-19'),
(228, 'sgsq15c', 1, 'Computer System Engineering', '2020-03-19'),
(229, 'sgsq15d', 1, 'Computer System Engineering', '2020-03-19'),
(230, 'sgsq15e', 1, 'Computer System Engineering', '2020-03-19'),
(231, 'sgsq15f', 1, 'Computer System Engineering', '2020-03-19'),
(232, 'sgsq15g', 1, 'Computer System Engineering', '2020-03-19'),
(233, 'sgsq15h', 1, 'Computer System Engineering', '2020-03-19'),
(234, 'sgsq1', 1, 'Electrical Engineering', '2020-03-19'),
(235, 'sgsq2', 1, 'Electrical Engineering', '2020-03-19'),
(236, 'sgsq3', 1, 'Electrical Engineering', '2020-03-19'),
(237, 'sgsq4', 1, 'Electrical Engineering', '2020-03-19'),
(238, 'sgsq5', 1, 'Electrical Engineering', '2020-03-19'),
(239, 'sgsq6', 1, 'Electrical Engineering', '2020-03-19'),
(240, 'sgsq7', 1, 'Electrical Engineering', '2020-03-19'),
(241, 'sgsq8', 1, 'Electrical Engineering', '2020-03-19'),
(242, 'sgsq9', 1, 'Electrical Engineering', '2020-03-19'),
(243, 'sgsq10', 1, 'Electrical Engineering', '2020-03-19'),
(244, 'sgsq11', 1, 'Electrical Engineering', '2020-03-19'),
(245, 'sgsq12', 1, 'Electrical Engineering', '2020-03-19'),
(246, 'sgsq13', 1, 'Electrical Engineering', '2020-03-19'),
(247, 'sgsq14', 1, 'Electrical Engineering', '2020-03-19'),
(248, 'sgsq15a', 1, 'Electrical Engineering', '2020-03-19'),
(249, 'sgsq15b', 1, 'Electrical Engineering', '2020-03-19'),
(250, 'sgsq15c', 1, 'Electrical Engineering', '2020-03-19'),
(251, 'sgsq15d', 1, 'Electrical Engineering', '2020-03-19'),
(252, 'sgsq15e', 1, 'Electrical Engineering', '2020-03-19'),
(253, 'sgsq15f', 1, 'Electrical Engineering', '2020-03-19'),
(254, 'sgsq15g', 1, 'Electrical Engineering', '2020-03-19'),
(255, 'sgsq15h', 1, 'Electrical Engineering', '2020-03-19'),
(256, 'sgsq1', 1, 'Industrial Engineering', '2020-03-19'),
(257, 'sgsq2', 1, 'Industrial Engineering', '2020-03-19'),
(258, 'sgsq3', 1, 'Industrial Engineering', '2020-03-19'),
(259, 'sgsq4', 1, 'Industrial Engineering', '2020-03-19'),
(260, 'sgsq5', 1, 'Industrial Engineering', '2020-03-19'),
(261, 'sgsq6', 1, 'Industrial Engineering', '2020-03-19'),
(262, 'sgsq7', 1, 'Industrial Engineering', '2020-03-19'),
(263, 'sgsq8', 1, 'Industrial Engineering', '2020-03-19'),
(264, 'sgsq9', 1, 'Industrial Engineering', '2020-03-19'),
(265, 'sgsq10', 1, 'Industrial Engineering', '2020-03-19'),
(266, 'sgsq11', 1, 'Industrial Engineering', '2020-03-19'),
(267, 'sgsq12', 1, 'Industrial Engineering', '2020-03-19'),
(268, 'sgsq13', 1, 'Industrial Engineering', '2020-03-19'),
(269, 'sgsq14', 1, 'Industrial Engineering', '2020-03-19'),
(270, 'sgsq15a', 1, 'Industrial Engineering', '2020-03-19'),
(271, 'sgsq15b', 1, 'Industrial Engineering', '2020-03-19'),
(272, 'sgsq15c', 1, 'Industrial Engineering', '2020-03-19'),
(273, 'sgsq15d', 1, 'Industrial Engineering', '2020-03-19'),
(274, 'sgsq15e', 1, 'Industrial Engineering', '2020-03-19'),
(275, 'sgsq15f', 1, 'Industrial Engineering', '2020-03-19'),
(276, 'sgsq15g', 1, 'Industrial Engineering', '2020-03-19'),
(277, 'sgsq15h', 1, 'Industrial Engineering', '2020-03-19'),
(278, 'sgsq1', 1, 'Mechanical Engineering', '2020-03-19'),
(279, 'sgsq2', 1, 'Mechanical Engineering', '2020-03-19'),
(280, 'sgsq3', 1, 'Mechanical Engineering', '2020-03-19'),
(281, 'sgsq4', 1, 'Mechanical Engineering', '2020-03-19'),
(282, 'sgsq5', 1, 'Mechanical Engineering', '2020-03-19'),
(283, 'sgsq6', 1, 'Mechanical Engineering', '2020-03-19'),
(284, 'sgsq7', 1, 'Mechanical Engineering', '2020-03-19'),
(285, 'sgsq8', 1, 'Mechanical Engineering', '2020-03-19'),
(286, 'sgsq9', 1, 'Mechanical Engineering', '2020-03-19'),
(287, 'sgsq10', 1, 'Mechanical Engineering', '2020-03-19'),
(288, 'sgsq11', 1, 'Mechanical Engineering', '2020-03-19'),
(289, 'sgsq12', 1, 'Mechanical Engineering', '2020-03-19'),
(290, 'sgsq13', 1, 'Mechanical Engineering', '2020-03-19'),
(291, 'sgsq14', 1, 'Mechanical Engineering', '2020-03-19'),
(292, 'sgsq15a', 1, 'Mechanical Engineering', '2020-03-19'),
(293, 'sgsq15b', 1, 'Mechanical Engineering', '2020-03-19'),
(294, 'sgsq15c', 1, 'Mechanical Engineering', '2020-03-19'),
(295, 'sgsq15d', 1, 'Mechanical Engineering', '2020-03-19'),
(296, 'sgsq15e', 1, 'Mechanical Engineering', '2020-03-19'),
(297, 'sgsq15f', 1, 'Mechanical Engineering', '2020-03-19'),
(298, 'sgsq15g', 1, 'Mechanical Engineering', '2020-03-19'),
(299, 'sgsq15h', 1, 'Mechanical Engineering', '2020-03-19'),
(300, 'sgsq1', 1, 'Mining Engineering', '2020-03-19'),
(301, 'sgsq2', 1, 'Mining Engineering', '2020-03-19'),
(302, 'sgsq3', 1, 'Mining Engineering', '2020-03-19'),
(303, 'sgsq4', 1, 'Mining Engineering', '2020-03-19'),
(304, 'sgsq5', 1, 'Mining Engineering', '2020-03-19'),
(305, 'sgsq6', 1, 'Mining Engineering', '2020-03-19'),
(306, 'sgsq7', 1, 'Mining Engineering', '2020-03-19'),
(307, 'sgsq8', 1, 'Mining Engineering', '2020-03-19'),
(308, 'sgsq9', 1, 'Mining Engineering', '2020-03-19'),
(309, 'sgsq10', 1, 'Mining Engineering', '2020-03-19'),
(310, 'sgsq11', 1, 'Mining Engineering', '2020-03-19'),
(311, 'sgsq12', 1, 'Mining Engineering', '2020-03-19'),
(312, 'sgsq13', 1, 'Mining Engineering', '2020-03-19'),
(313, 'sgsq14', 1, 'Mining Engineering', '2020-03-19'),
(314, 'sgsq15a', 1, 'Mining Engineering', '2020-03-19'),
(315, 'sgsq15b', 1, 'Mining Engineering', '2020-03-19'),
(316, 'sgsq15c', 1, 'Mining Engineering', '2020-03-19'),
(317, 'sgsq15d', 1, 'Mining Engineering', '2020-03-19'),
(318, 'sgsq15e', 1, 'Mining Engineering', '2020-03-19'),
(319, 'sgsq15f', 1, 'Mining Engineering', '2020-03-19'),
(320, 'sgsq15g', 1, 'Mining Engineering', '2020-03-19'),
(321, 'sgsq15h', 1, 'Mining Engineering', '2020-03-19'),
(322, 'sgsq1', 1, 'Mechatronics Engineering', '2020-03-19'),
(323, 'sgsq2', 1, 'Mechatronics Engineering', '2020-03-19'),
(324, 'sgsq3', 1, 'Mechatronics Engineering', '2020-03-19'),
(325, 'sgsq4', 1, 'Mechatronics Engineering', '2020-03-19'),
(326, 'sgsq5', 1, 'Mechatronics Engineering', '2020-03-19'),
(327, 'sgsq6', 1, 'Mechatronics Engineering', '2020-03-19'),
(328, 'sgsq7', 1, 'Mechatronics Engineering', '2020-03-19'),
(329, 'sgsq8', 1, 'Mechatronics Engineering', '2020-03-19'),
(330, 'sgsq9', 1, 'Mechatronics Engineering', '2020-03-19'),
(331, 'sgsq10', 1, 'Mechatronics Engineering', '2020-03-19'),
(332, 'sgsq11', 1, 'Mechatronics Engineering', '2020-03-19'),
(333, 'sgsq12', 1, 'Mechatronics Engineering', '2020-03-19'),
(334, 'sgsq13', 1, 'Mechatronics Engineering', '2020-03-19'),
(335, 'sgsq14', 1, 'Mechatronics Engineering', '2020-03-19'),
(336, 'sgsq15a', 1, 'Mechatronics Engineering', '2020-03-19'),
(337, 'sgsq15b', 1, 'Mechatronics Engineering', '2020-03-19'),
(338, 'sgsq15c', 1, 'Mechatronics Engineering', '2020-03-19'),
(339, 'sgsq15d', 1, 'Mechatronics Engineering', '2020-03-19'),
(340, 'sgsq15e', 1, 'Mechatronics Engineering', '2020-03-19'),
(341, 'sgsq15f', 1, 'Mechatronics Engineering', '2020-03-19'),
(342, 'sgsq15g', 1, 'Mechatronics Engineering', '2020-03-19'),
(343, 'sgsq15h', 1, 'Mechatronics Engineering', '2020-03-19'),
(344, 'sgsq1', 1, 'CS&IT', '2020-03-19'),
(345, 'sgsq2', 2, 'CS&IT', '2020-03-19'),
(346, 'sgsq3', 3, 'CS&IT', '2020-03-19'),
(347, 'sgsq4', 4, 'CS&IT', '2020-03-19'),
(348, 'sgsq5', 5, 'CS&IT', '2020-03-19'),
(349, 'sgsq6', 4, 'CS&IT', '2020-03-19'),
(350, 'sgsq7', 3, 'CS&IT', '2020-03-19'),
(351, 'sgsq8', 2, 'CS&IT', '2020-03-19'),
(352, 'sgsq9', 1, 'CS&IT', '2020-03-19'),
(353, 'sgsq10', 2, 'CS&IT', '2020-03-19'),
(354, 'sgsq11', 3, 'CS&IT', '2020-03-19'),
(355, 'sgsq12', 4, 'CS&IT', '2020-03-19'),
(356, 'sgsq13', 5, 'CS&IT', '2020-03-19'),
(357, 'sgsq14', 4, 'CS&IT', '2020-03-19'),
(358, 'sgsq15a', 2, 'CS&IT', '2020-03-19'),
(359, 'sgsq15b', 1, 'CS&IT', '2020-03-19'),
(360, 'sgsq15c', 2, 'CS&IT', '2020-03-19'),
(361, 'sgsq15d', 3, 'CS&IT', '2020-03-19'),
(362, 'sgsq15e', 4, 'CS&IT', '2020-03-19'),
(363, 'sgsq15f', 5, 'CS&IT', '2020-03-19'),
(364, 'sgsq15g', 4, 'CS&IT', '2020-03-19'),
(365, 'sgsq15h', 3, 'CS&IT', '2020-03-19'),
(366, 'sgsq1', 1, 'CS&IT', '2020-03-19'),
(367, 'sgsq2', 2, 'CS&IT', '2020-03-19'),
(368, 'sgsq3', 3, 'CS&IT', '2020-03-19'),
(369, 'sgsq4', 4, 'CS&IT', '2020-03-19'),
(370, 'sgsq5', 5, 'CS&IT', '2020-03-19'),
(371, 'sgsq6', 4, 'CS&IT', '2020-03-19'),
(372, 'sgsq7', 3, 'CS&IT', '2020-03-19'),
(373, 'sgsq8', 2, 'CS&IT', '2020-03-19'),
(374, 'sgsq9', 1, 'CS&IT', '2020-03-19'),
(375, 'sgsq10', 2, 'CS&IT', '2020-03-19'),
(376, 'sgsq11', 3, 'CS&IT', '2020-03-19'),
(377, 'sgsq12', 4, 'CS&IT', '2020-03-19'),
(378, 'sgsq13', 5, 'CS&IT', '2020-03-19'),
(379, 'sgsq14', 4, 'CS&IT', '2020-03-19'),
(380, 'sgsq15a', 2, 'CS&IT', '2020-03-19'),
(381, 'sgsq15b', 1, 'CS&IT', '2020-03-19'),
(382, 'sgsq15c', 2, 'CS&IT', '2020-03-19'),
(383, 'sgsq15d', 3, 'CS&IT', '2020-03-19'),
(384, 'sgsq15e', 4, 'CS&IT', '2020-03-19'),
(385, 'sgsq15f', 5, 'CS&IT', '2020-03-19'),
(386, 'sgsq15g', 4, 'CS&IT', '2020-03-19'),
(387, 'sgsq15h', 3, 'CS&IT', '2020-03-19');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_comments`
--

CREATE TABLE `faculty_comments` (
  `s_no` int(11) NOT NULL,
  `qid` varchar(11) NOT NULL,
  `comments` varchar(30) NOT NULL,
  `department` text NOT NULL,
  `submitDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_comments`
--

INSERT INTO `faculty_comments` (`s_no`, `qid`, `comments`, `department`, `submitDate`) VALUES
(4, 'fsq15', 'what', '', '0000-00-00'),
(5, 'fsq16', 'program', '', '0000-00-00'),
(6, 'fsq15', 'best', 'CS&IT', '2020-03-21'),
(7, 'fsq16', 'aspect', 'CS&IT', '2020-03-21'),
(8, 'fsq15', 'program', 'CS&IT', '2020-03-21'),
(9, 'fsq16', 'factor', 'CS&IT', '2020-03-21'),
(10, 'fsq15', 'department', 'Agriculture Engineering', '2020-03-21'),
(11, 'fsq16', 'satisfaction', 'Agriculture Engineering', '2020-03-21'),
(12, 'fsq15', '', 'Chemical Engineering', '2020-03-21'),
(13, 'fsq16', '', 'Chemical Engineering', '2020-03-21'),
(14, 'fsq15', '', 'CS&IT', '2020-03-21'),
(15, 'fsq16', '', 'CS&IT', '2020-03-21'),
(16, 'fsq15', '', 'CS&IT', '2020-09-20'),
(17, 'fsq16', '', 'CS&IT', '2020-09-20'),
(18, 'fsq15', 'dfsd', 'CS&IT', '2020-09-20'),
(19, 'fsq16', 'sdfs', 'CS&IT', '2020-09-20'),
(20, 'fsq15', 'ert', 'CS&IT', '2020-09-20'),
(21, 'fsq16', 'reter', 'CS&IT', '2020-09-20'),
(22, 'fsq15', 'sdfgsdfs', 'CS&IT', '0000-00-00'),
(23, 'fsq16', 'sdfsdfsd', 'CS&IT', '0000-00-00'),
(24, 'fsq15', 'fgdfg', 'CS&IT', '0000-00-00'),
(25, 'fsq16', 'dfgdfg', 'CS&IT', '0000-00-00'),
(26, 'fsq15', '', 'CS&IT', '2020-09-20'),
(27, 'fsq16', '', 'CS&IT', '2020-09-20'),
(28, 'fsq15', '', 'CS&IT', '2020-09-20'),
(29, 'fsq16', '', 'CS&IT', '2020-09-20'),
(30, 'fsq15', '', 'CS&IT', '2020-09-20'),
(31, 'fsq16', '', 'CS&IT', '2020-09-20'),
(32, 'fsq15', '', 'CS&IT', '2020-09-20'),
(33, 'fsq16', '', 'CS&IT', '2020-09-20');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_course_review_report`
--

CREATE TABLE `faculty_course_review_report` (
  `s_no` int(11) NOT NULL,
  `Department` text NOT NULL,
  `Faculty` text NOT NULL,
  `Course Code` varchar(15) NOT NULL,
  `Title` varchar(30) NOT NULL,
  `Session` varchar(20) NOT NULL,
  `Semester` text NOT NULL,
  `Credit Value` varchar(15) NOT NULL,
  `Level` varchar(15) NOT NULL,
  `Prerequisites` varchar(20) NOT NULL,
  `Name of Course Instructor` text NOT NULL,
  `No of Students Contact Hours` int(11) NOT NULL,
  `Lectures` int(11) NOT NULL,
  `Seminars` int(11) NOT NULL,
  `Other` varchar(30) NOT NULL,
  `Assessment Methods` varchar(100) NOT NULL,
  `Undergraduate Originally Registered` int(11) NOT NULL,
  `Undergraduate GradeA` int(11) NOT NULL,
  `Undergraduate GradeB` int(11) NOT NULL,
  `Undergraduate GradeC` int(11) NOT NULL,
  `Undergraduate GradeD` int(11) NOT NULL,
  `Undergraduate GradeE` int(11) NOT NULL,
  `Undergraduate GradeF` int(11) NOT NULL,
  `Undergraduate No Grade` int(11) NOT NULL,
  `Undergraduate Withdrawal` int(11) NOT NULL,
  `Undergraduate Total` int(11) NOT NULL,
  `Post-Graduate Originally Registered` int(11) NOT NULL,
  `Post-Graduate GradeA` int(11) NOT NULL,
  `Post-Graduate GradeB` int(11) NOT NULL,
  `Post-Graduate GradeC` int(11) NOT NULL,
  `Post-Graduate GradeD` int(11) NOT NULL,
  `Post-Graduate GradeE` int(11) NOT NULL,
  `Post-Graduate GradeF` int(11) NOT NULL,
  `Post-Graduate No Grade` int(11) NOT NULL,
  `Post-Graduate Withdrawal` int(11) NOT NULL,
  `Post-Graduate Total` int(11) NOT NULL,
  `Student (Course Evaluation) Questionnaires` text NOT NULL,
  `External Examiners or Moderators` text NOT NULL,
  `Student /staff Consultative Committee (SSCC) or equivalent` text NOT NULL,
  `Curriculum` text NOT NULL,
  `Assessment` text NOT NULL,
  `Enhancement` text NOT NULL,
  `Outline` text NOT NULL,
  `Name (Course Instructor)` text NOT NULL,
  `Date (Course Instructor)` date NOT NULL,
  `Name (Head of Department)` text NOT NULL,
  `Date (Head of Department)` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_course_review_report`
--

INSERT INTO `faculty_course_review_report` (`s_no`, `Department`, `Faculty`, `Course Code`, `Title`, `Session`, `Semester`, `Credit Value`, `Level`, `Prerequisites`, `Name of Course Instructor`, `No of Students Contact Hours`, `Lectures`, `Seminars`, `Other`, `Assessment Methods`, `Undergraduate Originally Registered`, `Undergraduate GradeA`, `Undergraduate GradeB`, `Undergraduate GradeC`, `Undergraduate GradeD`, `Undergraduate GradeE`, `Undergraduate GradeF`, `Undergraduate No Grade`, `Undergraduate Withdrawal`, `Undergraduate Total`, `Post-Graduate Originally Registered`, `Post-Graduate GradeA`, `Post-Graduate GradeB`, `Post-Graduate GradeC`, `Post-Graduate GradeD`, `Post-Graduate GradeE`, `Post-Graduate GradeF`, `Post-Graduate No Grade`, `Post-Graduate Withdrawal`, `Post-Graduate Total`, `Student (Course Evaluation) Questionnaires`, `External Examiners or Moderators`, `Student /staff Consultative Committee (SSCC) or equivalent`, `Curriculum`, `Assessment`, `Enhancement`, `Outline`, `Name (Course Instructor)`, `Date (Course Instructor)`, `Name (Head of Department)`, `Date (Head of Department)`) VALUES
(2, 'csit', 'computer', '12', 'asd', '16-20', 'autumn', '12', '12', 'asd', 'lsa', 12, 12, 12, 'nil', 'nil							', 12, 12, 12, 12, 12, 12, 12, 12, 12, 12, 12, 12, 12, 12, 12, 12, 12, 12, 12, 12, 'student', 'nil', 'nil', 'nil', 'nil', 'nil', 'nil', 'ihsan', '1221-12-12', 'usman', '1234-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_resume`
--

CREATE TABLE `faculty_resume` (
  `s_no` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Address` varchar(60) NOT NULL,
  `Phone Number` int(20) NOT NULL,
  `Other Personal Information` varchar(60) NOT NULL,
  `Experience` varchar(200) NOT NULL,
  `Honor and Awards` varchar(100) NOT NULL,
  `Memberships` varchar(50) NOT NULL,
  `Graduate Students Postdocs Undergraduate Student Honor Students` varchar(500) NOT NULL,
  `Service Activity` varchar(100) NOT NULL,
  `Brief Statement of Research Interest` varchar(500) NOT NULL,
  `Publications` varchar(1000) NOT NULL,
  `Research Grants and Contracts` varchar(500) NOT NULL,
  `Other Research or Creative Accomplishments` varchar(500) NOT NULL,
  `Select Professional Presentations` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_resume`
--

INSERT INTO `faculty_resume` (`s_no`, `Name`, `Address`, `Phone Number`, `Other Personal Information`, `Experience`, `Honor and Awards`, `Memberships`, `Graduate Students Postdocs Undergraduate Student Honor Students`, `Service Activity`, `Brief Statement of Research Interest`, `Publications`, `Research Grants and Contracts`, `Other Research or Creative Accomplishments`, `Select Professional Presentations`) VALUES
(1, 'csit', 'peshawar', 2147483647, 'nil', 'nil', 'nil', 'nil							  	', 'nil							  	', 'nil							  	', 'nil							  	', 'nil	\r\n							  	', 'nil							  	', 'nil	\r\n							  	', 'nil							  	');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_survey`
--

CREATE TABLE `faculty_survey` (
  `s_no` int(11) NOT NULL,
  `qid` varchar(11) NOT NULL,
  `satisfaction` int(11) NOT NULL,
  `department` text NOT NULL,
  `submitDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `proformalogin`
--

CREATE TABLE `proformalogin` (
  `id` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proformalogin`
--

INSERT INTO `proformalogin` (`id`, `password`, `department`, `user_name`) VALUES
(11, '%!FO0h?Nl8sd1', 'CS&IT', 'survey_of_graduating_students'),
(12, 'yz!%HhrbLU5$#o80T', 'CS&IT', 'survey_of_graduating_students'),
(13, '2g7#*@x0abYAz', 'CS&IT', 'survey_of_graduating_students'),
(14, 'odv4q%F8*I09&YfN', 'CS&IT', 'survey_of_graduating_students'),
(15, '6@$Mcm#5z&4U7', 'CS&IT', 'faculty_survey'),
(16, 'Q9uB2q!E%4U&iW', 'CS&IT', 'faculty_survey'),
(17, '$t&j!03se18D9zI', 'CS&IT', 'faculty_survey'),
(18, 'l*chSW80?%5OG2K7!U', 'CS&IT', 'faculty_survey'),
(19, '4L13yU&i!dmgZc?', 'CS&IT', 'faculty_survey');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `s_no` int(11) NOT NULL,
  `sum1` int(255) NOT NULL,
  `sum2` int(255) NOT NULL,
  `sum3` int(255) NOT NULL,
  `sum4` int(255) NOT NULL,
  `sum5` int(255) NOT NULL,
  `department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`s_no`, `sum1`, `sum2`, `sum3`, `sum4`, `sum5`, `department`) VALUES
(1, 19, 22, 16, 13, 9, 'CS&IT'),
(2, 19, 22, 16, 13, 9, '');

-- --------------------------------------------------------

--
-- Table structure for table `research_student`
--

CREATE TABLE `research_student` (
  `s_no` int(11) NOT NULL,
  `studentName` varchar(20) NOT NULL,
  `admissionDate` date NOT NULL,
  `researchDate` date NOT NULL,
  `CompletionDate` date NOT NULL,
  `creditHour` int(5) NOT NULL,
  `defenseDate` date NOT NULL,
  `cgpa` float NOT NULL,
  `studentDate` date NOT NULL,
  `progressDetail` varchar(100) NOT NULL,
  `commentOnSupervision` varchar(100) NOT NULL,
  `sixMonthPlane` varchar(100) NOT NULL,
  `subjectSpecialistTraining` varchar(100) NOT NULL,
  `accessToScientificEquipment` varchar(100) NOT NULL,
  `sufficientResearchMaterialCommoditiesAvailable` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `research_student`
--

INSERT INTO `research_student` (`s_no`, `studentName`, `admissionDate`, `researchDate`, `CompletionDate`, `creditHour`, `defenseDate`, `cgpa`, `studentDate`, `progressDetail`, `commentOnSupervision`, `sixMonthPlane`, `subjectSpecialistTraining`, `accessToScientificEquipment`, `sufficientResearchMaterialCommoditiesAvailable`) VALUES
(2, 'ihsan', '2017-11-11', '2017-11-11', '2018-11-11', 9, '2018-11-11', 3.2, '2017-11-11', 'detail of progress', 'omments on level of supervision received', 'plane to achieve over the next 6 months', 'omments on generic or subject-specialist training', 'ccess to sophisticated scientific equipment', 'sufficient research material / commodities available');

-- --------------------------------------------------------

--
-- Table structure for table `research_student_2`
--

CREATE TABLE `research_student_2` (
  `s_no` int(11) NOT NULL,
  `supervisor` text NOT NULL,
  `supervisor-date` date NOT NULL,
  `first-co-supervisor` text NOT NULL,
  `first-co-supervisor-date` date NOT NULL,
  `second-co-supervisor` text NOT NULL,
  `second-co-supervisor-date` date NOT NULL,
  `supervisory-committee-comments` varchar(100) NOT NULL,
  `HOD-comment` varchar(100) NOT NULL,
  `director-comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `research_student_2`
--

INSERT INTO `research_student_2` (`s_no`, `supervisor`, `supervisor-date`, `first-co-supervisor`, `first-co-supervisor-date`, `second-co-supervisor`, `second-co-supervisor-date`, `supervisory-committee-comments`, `HOD-comment`, `director-comment`) VALUES
(2, 'shahab khan', '2018-11-11', 'usman', '2018-11-11', 'nasir', '2018-11-11', 'Supervisory Committee Comments', 'Head of Department Comments:', 'Director, Board of Research Studies (or equivalent) Comments');

-- --------------------------------------------------------

--
-- Table structure for table `survey_of_graduates`
--

CREATE TABLE `survey_of_graduates` (
  `s_no` int(11) NOT NULL,
  `qid` varchar(11) NOT NULL,
  `satisfaction` int(11) NOT NULL,
  `department` text NOT NULL,
  `submitDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `survey_of_graduates`
--

INSERT INTO `survey_of_graduates` (`s_no`, `qid`, `satisfaction`, `department`, `submitDate`) VALUES
(1, 'sgsq1', 1, 'CS&IT', '2020-09-21 07:40:30'),
(2, 'sgsq2', 2, 'CS&IT', '2020-09-21 07:40:30'),
(3, 'sgsq3', 3, 'CS&IT', '2020-09-21 07:40:30'),
(4, 'sgsq4', 4, 'CS&IT', '2020-09-21 07:40:30'),
(5, 'sgsq5', 5, 'CS&IT', '2020-09-21 07:40:30'),
(6, 'sgsq6', 5, 'CS&IT', '2020-09-21 07:40:30'),
(7, 'sgsq7', 4, 'CS&IT', '2020-09-21 07:40:30'),
(8, 'sgsq8', 3, 'CS&IT', '2020-09-21 07:40:30'),
(9, 'sgsq9', 2, 'CS&IT', '2020-09-21 07:40:30'),
(10, 'sgsq10', 1, 'CS&IT', '2020-09-21 07:40:30'),
(11, 'sgsq11', 2, 'CS&IT', '2020-09-21 07:40:30'),
(12, 'sgsq12', 3, 'CS&IT', '2020-09-21 07:40:30'),
(13, 'sgsq13', 4, 'CS&IT', '2020-09-21 07:40:30'),
(14, 'sgsq14', 5, 'CS&IT', '2020-09-21 07:40:30'),
(15, 'sgsq15a', 2, 'CS&IT', '2020-09-21 07:40:30'),
(16, 'sgsq15b', 2, 'CS&IT', '2020-09-21 07:40:30'),
(17, 'sgsq15c', 3, 'CS&IT', '2020-09-21 07:40:30'),
(18, 'sgsq15d', 4, 'CS&IT', '2020-09-21 07:40:30'),
(19, 'sgsq15e', 5, 'CS&IT', '2020-09-21 07:40:30'),
(20, 'sgsq15f', 5, 'CS&IT', '2020-09-21 07:40:30'),
(21, 'sgsq15g', 5, 'CS&IT', '2020-09-21 07:40:30'),
(22, 'sgsq15h', 1, 'CS&IT', '2020-09-21 07:40:30'),
(23, 'sgsq1', 1, 'CS&IT', '2020-09-21 07:40:42'),
(24, 'sgsq2', 2, 'CS&IT', '2020-09-21 07:40:42'),
(25, 'sgsq3', 3, 'CS&IT', '2020-09-21 07:40:42'),
(26, 'sgsq4', 4, 'CS&IT', '2020-09-21 07:40:42'),
(27, 'sgsq5', 5, 'CS&IT', '2020-09-21 07:40:42'),
(28, 'sgsq6', 5, 'CS&IT', '2020-09-21 07:40:42'),
(29, 'sgsq7', 4, 'CS&IT', '2020-09-21 07:40:42'),
(30, 'sgsq8', 3, 'CS&IT', '2020-09-21 07:40:42'),
(31, 'sgsq9', 2, 'CS&IT', '2020-09-21 07:40:42'),
(32, 'sgsq10', 1, 'CS&IT', '2020-09-21 07:40:42'),
(33, 'sgsq11', 2, 'CS&IT', '2020-09-21 07:40:42'),
(34, 'sgsq12', 3, 'CS&IT', '2020-09-21 07:40:42'),
(35, 'sgsq13', 4, 'CS&IT', '2020-09-21 07:40:42'),
(36, 'sgsq14', 5, 'CS&IT', '2020-09-21 07:40:42'),
(37, 'sgsq15a', 2, 'CS&IT', '2020-09-21 07:40:42'),
(38, 'sgsq15b', 2, 'CS&IT', '2020-09-21 07:40:42'),
(39, 'sgsq15c', 3, 'CS&IT', '2020-09-21 07:40:42'),
(40, 'sgsq15d', 4, 'CS&IT', '2020-09-21 07:40:42'),
(41, 'sgsq15e', 5, 'CS&IT', '2020-09-21 07:40:42'),
(42, 'sgsq15f', 5, 'CS&IT', '2020-09-21 07:40:42'),
(43, 'sgsq15g', 5, 'CS&IT', '2020-09-21 07:40:42'),
(44, 'sgsq15h', 1, 'CS&IT', '2020-09-21 07:40:42'),
(45, 'sgsq1', 3, 'CS&IT', '2020-09-21 07:42:09'),
(46, 'sgsq2', 4, 'CS&IT', '2020-09-21 07:42:09'),
(47, 'sgsq3', 4, 'CS&IT', '2020-09-21 07:42:09'),
(48, 'sgsq4', 3, 'CS&IT', '2020-09-21 07:42:09'),
(49, 'sgsq5', 3, 'CS&IT', '2020-09-21 07:42:09'),
(50, 'sgsq6', 2, 'CS&IT', '2020-09-21 07:42:09'),
(51, 'sgsq7', 2, 'CS&IT', '2020-09-21 07:42:09'),
(52, 'sgsq8', 1, 'CS&IT', '2020-09-21 07:42:09'),
(53, 'sgsq9', 3, 'CS&IT', '2020-09-21 07:42:09'),
(54, 'sgsq10', 4, 'CS&IT', '2020-09-21 07:42:09'),
(55, 'sgsq11', 5, 'CS&IT', '2020-09-21 07:42:09'),
(56, 'sgsq12', 4, 'CS&IT', '2020-09-21 07:42:09'),
(57, 'sgsq13', 2, 'CS&IT', '2020-09-21 07:42:09'),
(58, 'sgsq14', 2, 'CS&IT', '2020-09-21 07:42:09'),
(59, 'sgsq15a', 5, 'CS&IT', '2020-09-21 07:42:09'),
(60, 'sgsq15b', 3, 'CS&IT', '2020-09-21 07:42:09'),
(61, 'sgsq15c', 5, 'CS&IT', '2020-09-21 07:42:09'),
(62, 'sgsq15d', 3, 'CS&IT', '2020-09-21 07:42:09'),
(63, 'sgsq15e', 3, 'CS&IT', '2020-09-21 07:42:09'),
(64, 'sgsq15f', 4, 'CS&IT', '2020-09-21 07:42:09'),
(65, 'sgsq15g', 4, 'CS&IT', '2020-09-21 07:42:09'),
(66, 'sgsq15h', 3, 'CS&IT', '2020-09-21 07:42:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni_comments`
--
ALTER TABLE `alumni_comments`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `alumni_information`
--
ALTER TABLE `alumni_information`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `alumni_survey`
--
ALTER TABLE `alumni_survey`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `comments_of_sgs`
--
ALTER TABLE `comments_of_sgs`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `department_survey_offering_phd`
--
ALTER TABLE `department_survey_offering_phd`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `employer_comments`
--
ALTER TABLE `employer_comments`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `employer_survey`
--
ALTER TABLE `employer_survey`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `example`
--
ALTER TABLE `example`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `faculty_comments`
--
ALTER TABLE `faculty_comments`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `faculty_course_review_report`
--
ALTER TABLE `faculty_course_review_report`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `faculty_resume`
--
ALTER TABLE `faculty_resume`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `faculty_survey`
--
ALTER TABLE `faculty_survey`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `proformalogin`
--
ALTER TABLE `proformalogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `research_student`
--
ALTER TABLE `research_student`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `research_student_2`
--
ALTER TABLE `research_student_2`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `survey_of_graduates`
--
ALTER TABLE `survey_of_graduates`
  ADD PRIMARY KEY (`s_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumni_comments`
--
ALTER TABLE `alumni_comments`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `alumni_information`
--
ALTER TABLE `alumni_information`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `alumni_survey`
--
ALTER TABLE `alumni_survey`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments_of_sgs`
--
ALTER TABLE `comments_of_sgs`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `department_survey_offering_phd`
--
ALTER TABLE `department_survey_offering_phd`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employer_comments`
--
ALTER TABLE `employer_comments`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `employer_survey`
--
ALTER TABLE `employer_survey`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `example`
--
ALTER TABLE `example`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=388;

--
-- AUTO_INCREMENT for table `faculty_comments`
--
ALTER TABLE `faculty_comments`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `faculty_course_review_report`
--
ALTER TABLE `faculty_course_review_report`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `faculty_resume`
--
ALTER TABLE `faculty_resume`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faculty_survey`
--
ALTER TABLE `faculty_survey`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `proformalogin`
--
ALTER TABLE `proformalogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `research_student`
--
ALTER TABLE `research_student`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `research_student_2`
--
ALTER TABLE `research_student_2`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `survey_of_graduates`
--
ALTER TABLE `survey_of_graduates`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
