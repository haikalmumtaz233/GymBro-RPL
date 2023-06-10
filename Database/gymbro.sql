-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2023 at 12:28 PM
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
-- Database: `gymbro`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_support`
--

CREATE TABLE `customer_support` (
  `id_cs` int(11) NOT NULL,
  `subject` varchar(70) NOT NULL,
  `problem` varchar(500) NOT NULL,
  `answer` varchar(1000) NOT NULL DEFAULT 'Answer : No answer yet'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `exercise`
--

CREATE TABLE `exercise` (
  `id_exercise` int(11) NOT NULL,
  `id_type` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(300) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exercise`
--

INSERT INTO `exercise` (`id_exercise`, `id_type`, `name`, `description`, `image`) VALUES
(1, 1, 'Dumble Incline Bench Press', 'Dumble incline bench press is a variation of the traditional bench press exercise that specifically targets the upper chest muscles.', 'dumbellInclineBenchPress.png'),
(2, 1, 'Cable Cross Over', 'It primarily targets the muscles of the chest, particularly the pectoralis major, while also engaging the muscles of the shoulders and arms.', 'cableCrossOver.png'),
(3, 1, 'Wide Bench Press', 'Wide bench press, also known as wide grip bench press, is a variation of the traditional bench press exercise that specifically targets the outer portion of the chest muscles.', 'wideBenchPress.png'),
(4, 2, 'Machine Leg Press', 'Machine leg press is a popular exercise commonly found in gyms that targets the lower body, primarily the muscles of the legs, including the quadriceps, hamstrings, and glutes.', 'machineLegPress.png'),
(5, 2, 'Barbell Full Squat', 'Barbell full squat is a fundamental strength training exercise that targets multiple muscle groups in the lower body, including the quadriceps, hamstrings, glutes, and calves.', 'barbellFullSquat.png'),
(6, 2, 'Ketbell Bulgarian Split', 'Kettlebell Bulgarian split squat is a unilateral lower body exercise that targets the quadriceps, glutes, hamstrings, and core muscles.', 'ketbellBulgarianSplit.png'),
(7, 3, 'Chair Bulgarian Split', 'Chair Bulgarian split squat is a variation of the traditional Bulgarian split squat exercise that targets the lower body muscles, including the quadriceps, hamstrings, glutes, and core.', 'chairBulgarianSplit.png'),
(8, 3, 'High Knee Twist', 'High knee twist is a dynamic exercise that combines cardiovascular conditioning with core engagement. It involves raising the knees up towards the chest while twisting the torso from side to side.', 'highKneeTwist.png'),
(9, 3, 'Alternate Leg Pull', 'Alternate leg pull, also known as alternating leg pull or bicycle crunch, is an effective exercise that targets the abdominal muscles, specifically the rectus abdominis and obliques. ', 'alternateLegPull.png');

-- --------------------------------------------------------

--
-- Table structure for table `exercise_type`
--

CREATE TABLE `exercise_type` (
  `id_type` int(11) NOT NULL,
  `type_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exercise_type`
--

INSERT INTO `exercise_type` (`id_type`, `type_name`) VALUES
(1, 'Chest'),
(2, 'Legs'),
(3, 'Abs');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id_schedule` int(11) NOT NULL,
  `id_type` int(11) NOT NULL,
  `schedule_name` varchar(100) NOT NULL,
  `schedule_time` time NOT NULL,
  `schedule_date` date NOT NULL,
  `schedule_description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `full_name` varchar(40) NOT NULL,
  `phone_number` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_support`
--
ALTER TABLE `customer_support`
  ADD PRIMARY KEY (`id_cs`);

--
-- Indexes for table `exercise`
--
ALTER TABLE `exercise`
  ADD PRIMARY KEY (`id_exercise`),
  ADD KEY `id_type` (`id_type`);

--
-- Indexes for table `exercise_type`
--
ALTER TABLE `exercise_type`
  ADD PRIMARY KEY (`id_type`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id_schedule`),
  ADD KEY `id_type` (`id_type`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_support`
--
ALTER TABLE `customer_support`
  MODIFY `id_cs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `exercise`
--
ALTER TABLE `exercise`
  MODIFY `id_exercise` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id_schedule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `exercise`
--
ALTER TABLE `exercise`
  ADD CONSTRAINT `exercise_ibfk_1` FOREIGN KEY (`id_type`) REFERENCES `exercise_type` (`id_type`);

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `schedule_ibfk_1` FOREIGN KEY (`id_type`) REFERENCES `exercise_type` (`id_type`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
