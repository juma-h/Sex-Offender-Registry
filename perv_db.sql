-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2024 at 12:12 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perv_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `authorised_users`
--

CREATE TABLE `authorised_users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `authorised_users`
--

INSERT INTO `authorised_users` (`id`, `first_name`, `last_name`, `email_address`, `password`) VALUES
(1, 'Michelle', 'Juma', 'jumamichelle95@gmail.com', '$2y$10$b2wI5HMYCbkBIz/hjkFOhOpX5rAjO6qJ6KjS3akzlkJdJBaHhH0fW');

-- --------------------------------------------------------

--
-- Table structure for table `sex_offenders`
--

CREATE TABLE `sex_offenders` (
  `id` int(11) NOT NULL,
  `national_id` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `sexualOffenceCommitted` text DEFAULT NULL,
  `yearIn` int(11) DEFAULT NULL,
  `yearOut` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sex_offenders`
--

INSERT INTO `sex_offenders` (`id`, `national_id`, `first_name`, `last_name`, `date_of_birth`, `gender`, `occupation`, `sexualOffenceCommitted`, `yearIn`, `yearOut`) VALUES
(1, '123456789', 'John', 'Doe', '1990-05-15', 'Male', 'Engineer', 'Sexual Assault', 2010, 2015),
(2, '987654321', 'Jane', 'Smith', '1985-08-22', 'Female', 'Teacher', 'Indecent Exposure', 2012, 2017),
(3, '456789012', 'Robert', 'Johnson', '1982-11-10', 'Male', 'Doctor', 'Child Abuse', 2008, 2014),
(4, '789012345', 'Emily', 'Davis', '1995-03-25', 'Female', 'Artist', 'Rape', 2011, 2016),
(5, '234567890', 'Michael', 'Miller', '1978-07-12', 'Male', 'Lawyer', 'Sexual Harassment', 2009, 2013),
(6, '567890123', 'Jessica', 'Anderson', '1989-09-30', 'Female', 'Accountant', 'Statutory Rape', 2013, 2018),
(7, '890123456', 'Christopher', 'Wilson', '1980-04-18', 'Male', 'Police Officer', 'Domestic Violence', 2007, 2012),
(8, '345678901', 'Sophia', 'Brown', '1992-01-05', 'Female', 'Engineer', 'Incest', 2014, 2019),
(9, '678901234', 'Daniel', 'Jones', '1987-06-20', 'Male', 'Professor', 'Sexual Exploitation', 2016, 2021),
(10, '012345678', 'Olivia', 'Williams', '1998-12-08', 'Female', 'Chef', 'Assault with Intent to Rape', 2015, 2020),
(11, '789012345', 'Matthew', 'Taylor', '1984-02-14', 'Male', 'Journalist', 'Forcible Sodomy', 2017, 2022),
(12, '234567890', 'Ava', 'Moore', '1993-07-28', 'Female', 'Software Developer', 'Child Pornography', 2010, 2015),
(13, '567890123', 'Andrew', 'Harris', '1976-10-03', 'Male', 'Architect', 'Public Indecency', 2012, 2017),
(14, '890123456', 'Chloe', 'Clark', '1986-04-17', 'Female', 'Entrepreneur', 'Sexual Misconduct', 2008, 2013),
(15, '345678901', 'Ethan', 'Martin', '1991-11-22', 'Male', 'Pilot', 'Stalking', 2011, 2016),
(16, '37628262', 'Paul', 'James', '1997-01-22', 'male', 'Teacher', 'Assault', 2016, 0),
(17, '9876543', 'Jay', 'Z', '1986-03-05', 'male', 'Singer', 'Assault', 2020, 2023);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authorised_users`
--
ALTER TABLE `authorised_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sex_offenders`
--
ALTER TABLE `sex_offenders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authorised_users`
--
ALTER TABLE `authorised_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sex_offenders`
--
ALTER TABLE `sex_offenders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
