-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2021 at 09:22 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codershub`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `Comp_id` int(12) NOT NULL,
  `Comp_name` varchar(30) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Contact` bigint(12) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `About_company` varchar(100) NOT NULL,
  `Logo_company` varchar(30) NOT NULL,
  `Owner_name` varchar(15) NOT NULL,
  `Established_year` int(10) NOT NULL,
  `Reg_date` date NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`Comp_id`, `Comp_name`, `Email`, `Contact`, `Address`, `About_company`, `Logo_company`, `Owner_name`, `Established_year`, `Reg_date`, `Password`) VALUES
(13, 'Praxware Technologies', 'praxware@gmail.com', 9016647480, ' Panchvati', ' Praxware Technologies is one of the well known It Developement,Training & Placement Service provide', '', 'Alkesh kaba', 2021, '2021-04-10', '123'),
(14, 'TCS LTD', 'tcs@gmail.com', 1234567890, ' Gift City, Gandhinagar', ' In this tutorial we will go back to mathematics and study statistics, and how to calculate importan', 'ad1.jpg', 'Akshay Jogi', 2021, '2021-04-12', '123');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `F_id` int(12) NOT NULL,
  `Date` date NOT NULL,
  `User_id` int(12) NOT NULL,
  `Message` varchar(100) NOT NULL,
  `Rating` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`F_id`, `Date`, `User_id`, `Message`, `Rating`) VALUES
(4, '2021-04-10', 15, 'This is nice Application', '* * * *'),
(5, '2021-04-10', 15, 'dadfsasadfsd', '* * * *'),
(6, '2021-04-10', 15, 'dadfsasadfsd', '* * * *');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `Inquiry_id` int(10) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Contact` bigint(10) NOT NULL,
  `Message` varchar(100) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`Inquiry_id`, `Name`, `Email`, `Contact`, `Message`, `Date`) VALUES
(1, 'Manshi', 'Mannu@gmail.com', 9940596870, 'Hii', '2021-04-05'),
(2, 'Manisha', 'm@gmail.com', 9395045678, ' Hellooo', '2021-04-05'),
(3, 'Khushi', 'k@gmail.com', 7041634463, ' ......', '2021-04-05'),
(4, 'sakshi', 'sakshi@gmail.com', 8160390219, ' ghdfljgl', '2021-04-09'),
(5, 'Akshay', 'akshay@gmail.com', 1234567890, ' This is for Inquiry Testing', '2021-04-10');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `Job_id` int(12) NOT NULL,
  `Tech_id` int(50) NOT NULL,
  `Sub_id` int(50) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `Job_type` varchar(50) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `Interview_type` varchar(50) NOT NULL,
  `No_of_vacancy` varchar(50) NOT NULL,
  `Min_salary` float NOT NULL,
  `Max_salary` float NOT NULL,
  `Exp_from` bigint(10) NOT NULL,
  `Exp_to` bigint(10) NOT NULL,
  `Date` date NOT NULL,
  `Comp_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`Job_id`, `Tech_id`, `Sub_id`, `Title`, `Description`, `Job_type`, `Location`, `Interview_type`, `No_of_vacancy`, `Min_salary`, `Max_salary`, `Exp_from`, `Exp_to`, `Date`, `Comp_id`) VALUES
(10, 20, 12, 'Fresher PHP Developer', 'A PHP Developer writes beautiful, fast PHP to a high standard, in a timely and scalable way that improves the code-base of our products in meaningful ways.\r\n\r\nYou will be a part of a full-stack creative team that is responsible for all aspects of the ongoing software development from the initial specification, through to developing, testing and launching.																	', 'Full', 'Ahmedabad', 'offline', '10', 10000, 500000, 4, 10, '2021-04-10', 13),
(11, 20, 14, 'Machine Learning with IOT', 'Machine Learning is making the computer learn from studying data and statistics.\r\nMachine Learning is a step into the direction of artificial intelligence (AI).\r\nMachine Learning is a program that analyses data and learns to predict the outcome.												\r\n											', 'freelence', 'Ahmedabad', 'offline', '10', 10000, 3000, 4, 10, '2021-04-12', 13),
(12, 22, 15, 'Manual Tester Freshers', '												In this tutorial we will go back to mathematics and study statistics, and how to calculate important numbers based on data sets.																					', 'freelence', 'Ahmedabad', 'offline', '10', 10000, 30005, 0, 2, '2021-04-12', 14),
(13, 22, 16, 'JIRA Automation Testing', 'JIRA Automation Testing	JIRA Automation TestingJIRA Automation TestingJIRA Automation TestingJIRA Automation Testing							\r\n											', 'internship', 'Ahmedabad', 'online', '10', 77777, 234235, 1, 4, '2021-04-12', 14);

-- --------------------------------------------------------

--
-- Table structure for table `job_application`
--

CREATE TABLE `job_application` (
  `Id` int(12) NOT NULL,
  `Job_id` int(12) NOT NULL,
  `User_id` int(12) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `comp_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_application`
--

INSERT INTO `job_application` (`Id`, `Job_id`, `User_id`, `resume`, `Date`, `comp_id`) VALUES
(7, 11, 15, 'Python.pdf', '2021-04-12', 14),
(8, 13, 15, 'Python.pdf', '2021-04-12', 14);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `P_id` int(12) NOT NULL,
  `P_title` text NOT NULL,
  `P_description` text NOT NULL,
  `User_id` int(12) NOT NULL,
  `Date` date NOT NULL,
  `Document` varchar(50) NOT NULL,
  `Sourcecode` varchar(50) NOT NULL,
  `Tech_id` int(11) NOT NULL,
  `Sub_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`P_id`, `P_title`, `P_description`, `User_id`, `Date`, `Document`, `Sourcecode`, `Tech_id`, `Sub_id`) VALUES
(14, 'Online Innovators and Buisness Portal', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur atque perferendis, laudantium quod architecto velit ad officiis facere eveniet in fuga fugiat delectus rerum doloribus quos consectetur unde, expedita, quibusdam corporis impedit quia sequi aliquid sit. Ducimus labore molestias odio nam necessitatibus laboriosam vero saepe enim nobis. Repudiandae quidem, sint earum dolorum consequuntur dignissimos excepturi mollitia omnis aliquid, corporis, unde!', 15, '2021-04-10', 'Python.pdf', 'codershub.zip', 20, 12),
(15, 'Car Rental Web Application using PHP', 'A PHP Developer writes beautiful, fast PHP to a high standard, in a timely and scalable way that improves the code-base of our products in meaningful ways. You will be a part of a full-stack creative team that is responsible for all aspects of the ongoing software development from the initial specification, through to developing, testing and launchin', 15, '2021-04-12', 'Python (2).pdf', 'codershub (1).zip', 20, 12);

-- --------------------------------------------------------

--
-- Table structure for table `sub_technology`
--

CREATE TABLE `sub_technology` (
  `Sub_id` int(12) NOT NULL,
  `Sub_tech_name` varchar(20) NOT NULL,
  `Tech_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_technology`
--

INSERT INTO `sub_technology` (`Sub_id`, `Sub_tech_name`, `Tech_id`) VALUES
(12, 'PHP', 20),
(13, 'JAVA', 20),
(14, 'PYTHON', 20),
(15, 'MANUAL', 22),
(16, 'AUTOMATION WITH JAVA', 22);

-- --------------------------------------------------------

--
-- Table structure for table `table_answer`
--

CREATE TABLE `table_answer` (
  `Id` int(12) NOT NULL,
  `Query_id` int(12) NOT NULL,
  `User_id` int(12) NOT NULL,
  `Answer` varchar(100) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_answer`
--

INSERT INTO `table_answer` (`Id`, `Query_id`, `User_id`, `Answer`, `Date`) VALUES
(4, 19, 15, 'This is for Testing', '2021-04-10');

-- --------------------------------------------------------

--
-- Table structure for table `table_query`
--

CREATE TABLE `table_query` (
  `Id` int(12) NOT NULL,
  `Tech_id` int(50) NOT NULL,
  `Sub_id` int(50) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_query`
--

INSERT INTO `table_query` (`Id`, `Tech_id`, `Sub_id`, `Subject`, `Description`, `Image`, `Date`) VALUES
(19, 20, 12, 'I m having error in Console', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur atque perferendis, laudantium q', 'divya_bhaskar.png', '2021-04-10');

-- --------------------------------------------------------

--
-- Table structure for table `technology`
--

CREATE TABLE `technology` (
  `Tech_id` int(12) NOT NULL,
  `Tech_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `technology`
--

INSERT INTO `technology` (`Tech_id`, `Tech_name`) VALUES
(20, 'WEB DEVELOPMENT'),
(21, 'WEB DESIGNING'),
(22, 'SOFTWARE TESTING'),
(23, 'ML'),
(24, 'DATA SCIENCE'),
(25, 'GRAPHICS DESIGNING');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_id` int(100) NOT NULL,
  `Fname` varchar(100) NOT NULL,
  `Lname` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Dob` date NOT NULL,
  `Contact` bigint(10) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Reg_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_id`, `Fname`, `Lname`, `Email`, `Gender`, `Dob`, `Contact`, `Address`, `Password`, `Reg_date`) VALUES
(15, 'Akshay', 'Jogi', 'akshay@gmail.com', 'male', '2021-04-07', 1234567890, 'CG ROAD, Ahmedabad', '456', '2021-04-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`Comp_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`F_id`),
  ADD KEY `User_id` (`User_id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`Inquiry_id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`Job_id`),
  ADD KEY `Comp_id` (`Comp_id`),
  ADD KEY `Tech_id` (`Tech_id`),
  ADD KEY `Sub_id` (`Sub_id`);

--
-- Indexes for table `job_application`
--
ALTER TABLE `job_application`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Job_id` (`Job_id`),
  ADD KEY `User_id` (`User_id`),
  ADD KEY `comp_id` (`comp_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`P_id`),
  ADD KEY `User_id` (`User_id`),
  ADD KEY `Tech_id` (`Tech_id`),
  ADD KEY `Sub_id` (`Sub_id`);

--
-- Indexes for table `sub_technology`
--
ALTER TABLE `sub_technology`
  ADD PRIMARY KEY (`Sub_id`),
  ADD KEY `Tech_id` (`Tech_id`);

--
-- Indexes for table `table_answer`
--
ALTER TABLE `table_answer`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `User_id` (`User_id`);

--
-- Indexes for table `table_query`
--
ALTER TABLE `table_query`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Tech_id` (`Tech_id`),
  ADD KEY `Sub_id` (`Sub_id`);

--
-- Indexes for table `technology`
--
ALTER TABLE `technology`
  ADD PRIMARY KEY (`Tech_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `Comp_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `F_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `Inquiry_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `Job_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `job_application`
--
ALTER TABLE `job_application`
  MODIFY `Id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `P_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sub_technology`
--
ALTER TABLE `sub_technology`
  MODIFY `Sub_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `table_answer`
--
ALTER TABLE `table_answer`
  MODIFY `Id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `table_query`
--
ALTER TABLE `table_query`
  MODIFY `Id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `technology`
--
ALTER TABLE `technology`
  MODIFY `Tech_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `user` (`User_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `job`
--
ALTER TABLE `job`
  ADD CONSTRAINT `job_ibfk_1` FOREIGN KEY (`Comp_id`) REFERENCES `company` (`Comp_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `job_application`
--
ALTER TABLE `job_application`
  ADD CONSTRAINT `job_application_ibfk_1` FOREIGN KEY (`Job_id`) REFERENCES `job` (`Job_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `job_application_ibfk_2` FOREIGN KEY (`User_id`) REFERENCES `user` (`User_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `job_application_ibfk_3` FOREIGN KEY (`comp_id`) REFERENCES `company` (`Comp_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `user` (`User_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `project_ibfk_2` FOREIGN KEY (`Tech_id`) REFERENCES `technology` (`Tech_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `project_ibfk_3` FOREIGN KEY (`Sub_id`) REFERENCES `sub_technology` (`Sub_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sub_technology`
--
ALTER TABLE `sub_technology`
  ADD CONSTRAINT `sub_technology_ibfk_1` FOREIGN KEY (`Tech_id`) REFERENCES `technology` (`Tech_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `table_answer`
--
ALTER TABLE `table_answer`
  ADD CONSTRAINT `table_answer_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `user` (`User_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `table_query`
--
ALTER TABLE `table_query`
  ADD CONSTRAINT `table_query_ibfk_1` FOREIGN KEY (`Tech_id`) REFERENCES `technology` (`Tech_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `table_query_ibfk_2` FOREIGN KEY (`Sub_id`) REFERENCES `sub_technology` (`Sub_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
