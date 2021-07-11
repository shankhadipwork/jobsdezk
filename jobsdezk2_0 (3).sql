-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2021 at 08:29 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobsdezk2.0`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `user_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `user_id`, `password`, `status`) VALUES
(1, 'aryan.rony@gmail.com', '123456', 1);

-- --------------------------------------------------------

--
-- Table structure for table `appplied_jobs`
--

CREATE TABLE `appplied_jobs` (
  `id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `status` int(11) NOT NULL COMMENT '1 = Active 2 = Matching 3 = Shortlist 4 = Rejected',
  `actions` tinyint(4) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `appplied_jobs`
--

INSERT INTO `appplied_jobs` (`id`, `job_id`, `candidate_id`, `status`, `actions`, `created_at`, `updated_at`) VALUES
(30, 8, 12, 1, 0, 1623682503, 1623682503),
(31, 5, 0, 1, 0, 1623684903, 1623684903),
(32, 6, 12, 2, 2, 1623742765, 1623826617),
(33, 5, 12, 1, 0, 1623750287, 1623750287),
(34, 7, 12, 1, 0, 1623827400, 1623827400),
(35, 11, 12, 3, 2, 1623830221, 1623830246),
(36, 10, 12, 1, 0, 1625592470, 1625592470);

-- --------------------------------------------------------

--
-- Table structure for table `candidates_education`
--

CREATE TABLE `candidates_education` (
  `id` int(11) NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `higest_qualification` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `course` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `specialization` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `course_completion_year` date NOT NULL,
  `type_of_course` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `institute_name` text COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `candidates_education`
--

INSERT INTO `candidates_education` (`id`, `candidate_id`, `higest_qualification`, `course`, `specialization`, `course_completion_year`, `type_of_course`, `institute_name`, `updated_at`) VALUES
(1, 6, 'Doctorate', '0', 'Doctorate', '0000-00-00', 'Graduate', '', 1619016631),
(2, 7, 'Doctorate', '0', 'Doctorate', '0000-00-00', 'Doctorate', '', 1619018180),
(3, 9, 'graduate', '0', 'Mechanical', '2012-06-22', 'Regular', 'Acharya Engineering Institute', 1619082420),
(4, 9, 'graduate', 'Mechanical engineer', 'Computer', '2012-08-22', 'Regular', 'Acharya Engineering Institute', 1619082526),
(5, 9, 'graduate', 'Mechanical engineer', 'Computer', '2021-04-07', 'Distance', 'Acharya Engineering Institute', 1619082839),
(6, 12, 'graduate', 'Mechanical engineer', 'Mechanical', '2018-01-22', 'Regular', 'Acharya Engineering Institute', 1619105556),
(8, 13, 'graduate', 'Management', 'Electrical', '2021-07-10', 'Distance', 'Belda college', 1625678078);

-- --------------------------------------------------------

--
-- Table structure for table `candidates_files`
--

CREATE TABLE `candidates_files` (
  `id` int(11) NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `resume` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `update_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `candidates_files`
--

INSERT INTO `candidates_files` (`id`, `candidate_id`, `resume`, `image`, `update_at`) VALUES
(1, 7, 'cr.1103784725.1619098128.', 'ci.1691466918.1619098128.', 1619098128),
(2, 7, 'cr.2062122778.1619098196.pdf', 'ci.1469050170.1619098196.jpeg', 1619098196),
(3, 7, 'cr.251363977.1619098257.pdf', 'ci.1283038785.1619098257.jpg', 1619098257),
(4, 7, 'cr.585768027.1619098327.pdf', 'ci.1711053994.1619098327.jpg', 1619098327),
(5, 7, 'cr.919618061.1619098587.pdf', 'ci.663299593.1619098587.jpg', 1619098587),
(6, 7, 'cr.434416991.1619098651.pdf', 'ci.4875285.1619098651.jpeg', 1619098651),
(7, 7, 'cr.586265013.1619098767.docx', 'ci.425545268.1619098767.png', 1619098767),
(8, 10, 'cr.336126595.1619105985.pdf', 'ci.831789477.1619105985.png', 1619105985),
(9, 0, '', '', 1623674931),
(10, 13, 'cr.1229103446.1625593629.pdf', 'ci.1676496141.1625593629.png', 1625684258);

-- --------------------------------------------------------

--
-- Table structure for table `candidates_info`
--

CREATE TABLE `candidates_info` (
  `id` int(11) NOT NULL,
  `first_name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `location` text COLLATE utf8_unicode_ci NOT NULL,
  `last_updated` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `candidate_dob` date NOT NULL,
  `language_known` text COLLATE utf8_unicode_ci NOT NULL,
  `gender` tinyint(4) NOT NULL,
  `profile_complete` enum('0','1') COLLATE utf8_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `candidates_info`
--

INSERT INTO `candidates_info` (`id`, `first_name`, `last_name`, `email`, `password`, `phone`, `location`, `last_updated`, `status`, `candidate_dob`, `language_known`, `gender`, `profile_complete`) VALUES
(10, 'Pranav', 'Krishna', 'pranav@gmail.com', '1234', '9933820006', 'Bangalore', 1619105469, 1, '1995-01-22', '1,2,5', 1, '0'),
(11, 'Pritam', 'D', 'aryan.rony@gmail.com', '12345', '9933820006', 'Bangalore', 1623412275, 1, '0000-00-00', '', 0, '0'),
(12, 'Shankhadip', 'Bal', 'aryan.rony@gmail.com', '123456', '9933820006', '1,2', 1623616515, 1, '2021-06-15', '1,2,3,4,5', 1, '0'),
(13, 'surjya', 'kantatrt', 'surjyakantajana1996@gmail.com', '123456', '9635757654', '2', 1625596179, 1, '2021-07-21', '4', 3, '0');

-- --------------------------------------------------------

--
-- Table structure for table `candidates_skills`
--

CREATE TABLE `candidates_skills` (
  `id` int(11) NOT NULL,
  `candiate_id` int(11) NOT NULL,
  `skills_sets` text COLLATE utf8_unicode_ci NOT NULL,
  `top_skill_1` int(11) NOT NULL,
  `top_skill_2` int(11) NOT NULL,
  `top_skill_3` int(11) NOT NULL,
  `top_skill_4` int(11) NOT NULL,
  `top_skill_5` int(11) NOT NULL,
  `self_rating_skill_1` int(11) NOT NULL,
  `self_rating_skill_2` int(11) NOT NULL,
  `self_rating_skill_3` int(11) NOT NULL,
  `self_rating_skill_4` int(11) NOT NULL,
  `self_rating_skill_5` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `candidates_skills`
--

INSERT INTO `candidates_skills` (`id`, `candiate_id`, `skills_sets`, `top_skill_1`, `top_skill_2`, `top_skill_3`, `top_skill_4`, `top_skill_5`, `self_rating_skill_1`, `self_rating_skill_2`, `self_rating_skill_3`, `self_rating_skill_4`, `self_rating_skill_5`, `status`, `created_at`, `updated_at`) VALUES
(4, 12, '1,2,3,4,5,10,13,14,18', 1, 3, 18, 19, 16, 60, 35, 70, 80, 100, 1, 1623668387, 1623668387),
(5, 13, '1', 5, 10, 4, 14, 10, 45, 35, 20, 15, 10, 1, 1625595329, 1625768706);

-- --------------------------------------------------------

--
-- Table structure for table `candidates_social_links`
--

CREATE TABLE `candidates_social_links` (
  `id` int(11) NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `social_media` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `social_link` text COLLATE utf8_unicode_ci NOT NULL,
  `update_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `candidates_social_links`
--

INSERT INTO `candidates_social_links` (`id`, `candidate_id`, `social_media`, `social_link`, `update_at`) VALUES
(1, 7, 'Linkedin', 'https://in.linkedin.com/', 1619095439),
(2, 7, 'Linkedin', 'https://in.linkedin.com/', 1619096359),
(3, 10, 'Linkedin', 'https://in.linkedin.com/', 1619105916),
(5, 13, 'Linkedin', 'linkedin.commm', 1625681173);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `state_id`, `name`, `status`) VALUES
(1, 14, 'Mumbai', 1),
(2, 29, 'Delhi', 1),
(3, 11, 'Bangalore', 1),
(4, 28, 'Kolkata', 1),
(5, 23, 'Chennai', 1),
(6, 7, 'Ahmedabad', 1),
(7, 24, 'Hyderabad', 1),
(8, 14, 'Pune', 1),
(9, 7, 'Surat', 1),
(10, 26, 'Kanpur', 1);

-- --------------------------------------------------------

--
-- Table structure for table `compnay`
--

CREATE TABLE `compnay` (
  `id` int(11) NOT NULL,
  `company_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `about` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `size` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `employee_satisfaction` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` int(11) DEFAULT NULL,
  `awards` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `patnership` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `facilities` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `logo` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `gallery_images` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `compnay`
--

INSERT INTO `compnay` (`id`, `company_name`, `about`, `size`, `employee_satisfaction`, `location`, `awards`, `patnership`, `facilities`, `logo`, `gallery_images`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Accenture', 'Capgemini is a global leader in consulting, digital transformation, technology, and engineering services. The Group is at the forefront of innovation to address the entire breadth of clients’ opportunities in the evolving world of cloud, digital and platforms. Building on its strong 50-year heritage and deep industry-specific expertise, Capgemini enables organizations to realize their business ambitions through an array of services from strategy to operations. A responsible and multicultural company of 265,000 people in nearly 50 countries, Capgemini’s purpose is to unleash human energy through technology for an inclusive and sustainable future. With Altran, the Group reported 2019 combined global revenues of €17 billion.', '3000', '3.7/5', 1, 'Best university Talent, National Champion, MVP in ICC, Best Learning Team Recognition', ' Adobe, AWS, CISCO,Salesforce, IBM, SAP', 'Health Insurance, Cafeteria, GYM, LIC,Personal Accdient Insurance', 'company-logo.png', 'gal-1.jpg,gal-1.jpg,gal-1.jpg,gal-1.jpg,gal-1.jpg,gal-1.jpg', 1, 1623575348, 1623575348),
(2, 'Micro Soft', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 1, 1623682042, 1623682042),
(3, 'IBM', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 1, 1623683605, 1623683605),
(4, 'Tesla', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 1, 1623827869, 1623827869),
(5, 'NGO test', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 1, 1625766803, 1625766803);

-- --------------------------------------------------------

--
-- Table structure for table `exprience`
--

CREATE TABLE `exprience` (
  `id` int(11) NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `category` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '0 = Fresher\r\n1 = Experienced',
  `total_year` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `total_month` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `latest_company` text COLLATE utf8_unicode_ci NOT NULL,
  `ctc` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `notice_period` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tenure` date NOT NULL,
  `end_date` date NOT NULL,
  `designation` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `exprience`
--

INSERT INTO `exprience` (`id`, `candidate_id`, `category`, `total_year`, `total_month`, `latest_company`, `ctc`, `notice_period`, `tenure`, `end_date`, `designation`, `updated_at`) VALUES
(1, 0, '1', '3', '6', 'Pharmapodhq', '5', '15', '2021-04-29', '2021-05-06', 'Sr. Developer', 1619088856),
(2, 0, '1', '2', '2', 'Pharmapodhq', '3.5', '15', '2021-04-20', '2021-04-20', 'Sr. Developer', 1619088957),
(3, 7, '1', '2', '2', 'Pharmapodhq', '3.5', '15', '2021-04-22', '0000-00-00', 'Sr. Developer', 1619096301),
(4, 12, '1', '6', '11', 'Pharmapodhq', '5', '60', '2019-01-22', '2021-04-22', 'Sr. Developer', 1619105825),
(5, 13, '0', '1', '1', 'WG s', '4', '30', '2021-07-28', '2021-07-30', 'web developer s', 0);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `sub_recruiter_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `job_id` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `job_type` tinyint(4) NOT NULL COMMENT '1 = Full Time\r\n2 = Part Time\r\n3 = Internship',
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `experience_needed` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `salary` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `locations` text COLLATE utf8_unicode_ci NOT NULL,
  `skills_needed` text COLLATE utf8_unicode_ci NOT NULL,
  `top_5_skills` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `candidate_role` longtext COLLATE utf8_unicode_ci NOT NULL,
  `candidate_responsibilites` longtext COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL COMMENT '1 = Active\r\n2 = Matching\r\n3 = Shortlist\r\n4 = Rejected',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `sub_recruiter_id`, `company_id`, `job_id`, `job_type`, `title`, `experience_needed`, `salary`, `locations`, `skills_needed`, `top_5_skills`, `candidate_role`, `candidate_responsibilites`, `status`, `created_at`, `updated_at`) VALUES
(5, 1, 1, '1623597010209902426', 1, 'Cloud IAS Engineering', '5-10 Years', ' 5-10 Years 10,00,000-15,00,00 PA', '3,8', '1,2,3,4,5', '1,2,3,4,5', 'Hello Candidate’s Role (300 characters)', 'Candidate’s Responsibilites', 1, 1625967675, 1623597124),
(6, 2, 1, '16236112821659645396', 1, 'React JS developer', '4-7', '10,00,000-15,00,00 PA', '3,4', '3,4,5', '4,5,3,1,5', 'Candidate’s Role (300 characters)', 'Candidate’s Responsibilites', 1, 1623611375, 1623611375),
(7, 2, 1, '1623614041709026717', 1, 'Front End Developer', '2-5', ' 3,00,000-9,00,00 PA', '1,3,4,5,8', '4,10,13,14,15,16', '13,14,15,10,16', 'Angular is a TypeScript-based open-source web application framework led by the Angular Team at Google and by a community of individuals and corporations. Angular is a complete rewrite from the same team that built AngularJS', 'Front-end web development is the practice of converting data to a graphical interface, through the use of HTML, CSS, and JavaScript, so that users can view and interact with that data', 1, 1623614302, 1623614302),
(8, 5, 2, '16236822421751664459', 1, 'PHP developer', '1-5', ' 8,00,000-15,00,00', '1,3,5', '3,5,13,16', '3,5,13,15,14', 'This is the ', 'Candidate’s Responsibilites', 1, 1623682402, 1623682402),
(9, 2, 1, '1623684063193656159', 1, 'NodeJS+ReactJS Developer', '1-6', '10,00,000-15,00,00 PA', '1,2,3,5,8', '4,10,16,19,20,21', '19,21,16,10,4', 'Candidate’s Role ', 'Candidate’s Responsibilites', 1, 1623684452, 1623684452),
(10, 2, 1, '1623825974622228708', 1, 'Full Stack Developer', '1-5', '300000-500000', '2,4,5', '3,4,5,10,13,16', '3,14,13,5,10', 'Candidate’s Role', 'Candidate’s Responsibilities', 1, 1623826520, 1623826520),
(11, 3, 1, '16238295471606896457', 1, 'Full Stack  Backend Developer', '4-7', '300000-500000', '1,2,4,5', '1,2,3,4,5,11,12,15', '2,1,3,12,4', 'Text', 'Abc', 1, 1623829636, 1623829636),
(12, 1, 1, '16258554371242331111', 2, 'we', '5', '2', '2', '2', '17,18,17,18,17', 'ertert', 'etert', 1, 1625855469, 1625855469);

-- --------------------------------------------------------

--
-- Table structure for table `languages_spoken`
--

CREATE TABLE `languages_spoken` (
  `id` int(11) NOT NULL,
  `language` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `languages_spoken`
--

INSERT INTO `languages_spoken` (`id`, `language`) VALUES
(1, 'English'),
(2, 'Malayalam'),
(3, 'Punjabi'),
(4, 'Gujarati'),
(5, 'Hindi'),
(6, 'Tamil'),
(7, 'Bangla'),
(8, 'Telugu'),
(9, 'Oriya'),
(10, 'Lushai'),
(11, 'Marathi'),
(12, 'Konkani'),
(13, 'Khasi'),
(14, 'Kannada'),
(15, 'Nepali'),
(16, 'Manipuri'),
(17, 'Assamese'),
(18, 'Nissi'),
(19, 'Ao');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`, `status`) VALUES
(1, 'C++', 1),
(2, 'Java', 1),
(3, 'PHP', 1),
(4, 'React Js', 1),
(5, 'Laravel', 1),
(10, 'Java Scripts', 1),
(11, 'Python', 1),
(12, 'Django', 1),
(13, 'HTML5', 1),
(14, 'CSS3', 1),
(15, 'Bootstrap4', 1),
(16, 'JQuery', 1),
(17, 'MYSQL', 1),
(18, 'AWS', 1),
(19, 'Node JS', 1),
(20, 'Angular', 1),
(21, 'TypeScript', 1),
(22, 'Sales', 1);

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `name` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `status`) VALUES
(1, 'Andhra Pradesh', 1),
(2, 'Arunachal Pradesh', 1),
(3, 'Assam', 1),
(4, 'Bihar', 1),
(5, 'Chhattisgarh', 1),
(6, 'Goa', 1),
(7, 'Gujarat', 1),
(8, 'Haryana', 1),
(9, 'Himachal Pradesh', 1),
(10, 'Jharkhand', 1),
(11, 'Karnataka', 1),
(12, 'Kerala', 1),
(13, 'Madhya Pradesh', 1),
(14, 'Maharashtra', 1),
(15, 'Manipur', 1),
(16, 'Meghalaya', 1),
(17, 'Mizoram', 1),
(18, 'Nagaland', 1),
(19, 'Odisha', 1),
(20, 'Punjab', 1),
(21, 'Rajasthan', 1),
(22, 'Sikkim', 1),
(23, 'Tamil Nadu', 1),
(24, 'Telangana', 0),
(25, 'Tripura', 1),
(26, 'Uttar Pradesh', 1),
(27, 'Uttarakhand', 1),
(28, 'West Bengal', 1),
(29, 'The Government of NCT of Delhi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sub_recruiter`
--

CREATE TABLE `sub_recruiter` (
  `id` int(11) NOT NULL,
  `super_recruiter_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `city` tinyint(4) NOT NULL,
  `company_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sub_recruiter`
--

INSERT INTO `sub_recruiter` (`id`, `super_recruiter_id`, `name`, `email`, `password`, `city`, `company_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'Shankhadip', 'aryan.rony@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 3, 1, 1, 1623591582, 1623591582),
(2, 2, 'Bonnie', 'ramesh@moviewud.com', 'e10adc3949ba59abbe56e057f20f883e', 8, 1, 1, 1623591602, 1623591602),
(3, 2, 'Deepak', 'deepak@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 6, 1, 1, 1623591630, 1623591630),
(5, 3, 'Shankhadip', 'shankhadip.ronnie@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 5, 2, 1, 1623682173, 1623682173),
(6, 4, 'Ram', 'ram@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1, 3, 1, 1623683862, 1623683862),
(7, 4, 'Sam', 'sam@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2, 3, 1, 1623683880, 1623683880),
(8, 4, 'Kanha', 'kanha@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 6, 3, 1, 1623683904, 1623683904),
(9, 4, 'Gorge', 'george@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 6, 3, 1, 1623683928, 1623683928),
(10, 5, 'Deepak A', 'deepak@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 10, 4, 1, 1623828318, 1623828318),
(11, 2, 'Test', 'surjya.wgt@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2, 1, 1, 1625766645, 1625766645);

-- --------------------------------------------------------

--
-- Table structure for table `supper_recruiter`
--

CREATE TABLE `supper_recruiter` (
  `id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `supper_recruiter`
--

INSERT INTO `supper_recruiter` (`id`, `company_id`, `name`, `email`, `password`, `status`) VALUES
(2, 1, 'Shankhadip', 'aryan.rony@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1),
(3, 2, 'Pritam', 'pritam@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1),
(4, 3, 'Deepak', 'deepak@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1),
(5, 4, 'Elon James', 'elon@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appplied_jobs`
--
ALTER TABLE `appplied_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidates_education`
--
ALTER TABLE `candidates_education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidates_files`
--
ALTER TABLE `candidates_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidates_info`
--
ALTER TABLE `candidates_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidates_skills`
--
ALTER TABLE `candidates_skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidates_social_links`
--
ALTER TABLE `candidates_social_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `compnay`
--
ALTER TABLE `compnay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exprience`
--
ALTER TABLE `exprience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages_spoken`
--
ALTER TABLE `languages_spoken`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_recruiter`
--
ALTER TABLE `sub_recruiter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supper_recruiter`
--
ALTER TABLE `supper_recruiter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appplied_jobs`
--
ALTER TABLE `appplied_jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `candidates_education`
--
ALTER TABLE `candidates_education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `candidates_files`
--
ALTER TABLE `candidates_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `candidates_info`
--
ALTER TABLE `candidates_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `candidates_skills`
--
ALTER TABLE `candidates_skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `candidates_social_links`
--
ALTER TABLE `candidates_social_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `compnay`
--
ALTER TABLE `compnay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `exprience`
--
ALTER TABLE `exprience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `languages_spoken`
--
ALTER TABLE `languages_spoken`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `sub_recruiter`
--
ALTER TABLE `sub_recruiter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `supper_recruiter`
--
ALTER TABLE `supper_recruiter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
