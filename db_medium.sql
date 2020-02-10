-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2020 at 05:58 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_medium`
--

-- --------------------------------------------------------

--
-- Table structure for table `clap`
--

CREATE TABLE `clap` (
  `username` varchar(100) NOT NULL,
  `content_id` int(11) NOT NULL,
  `clap` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `content_id` int(11) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `username`, `content_id`, `comment`) VALUES
(8, 'dhiyadice', 9, 'halo'),
(9, 'isan1234', 10, 'hahahah'),
(10, 'dhiyadice', 10, 'tes');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `content_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `media` text DEFAULT NULL,
  `status_stories` int(1) NOT NULL,
  `clap` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`content_id`, `username`, `title`, `content`, `media`, `status_stories`, `clap`) VALUES
(1, '', 'how to be a dumb bitch', 'be dumb', NULL, 0, 0),
(3, 'isan1234', 'draft', 'go to drafts', 'No Media', 0, 0),
(9, 'dhiyadice', 'tes', 'tes content', 'No Media', 1, 0),
(10, 'isan1234', 'lalala', 'lalala', 'No Media', 1, 0),
(11, 'dhiyadice', 'judul satu', 'content satu', 'No Media', 1, 0),
(14, 'zoraaaa', 'tesssss terudfienf', 'vnie', 'Screenshot_(2)3.png', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(75) NOT NULL,
  `password` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `bio` text NOT NULL,
  `media` text NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`first_name`, `last_name`, `email`, `password`, `username`, `bio`, `media`, `role_id`, `is_active`, `date_created`, `user_id`) VALUES
('zora', 'cahya', 'zoe@gmail.com', '$2y$10$b0xnIpMp5DGD8N4fJqs4dOU6aQ09BgYPuCS0fvjQYHvF/bGS2E5AG', 'zoraaaa', '[[aw mlu bgt]]', '', 2, 1, 1580744842, 7),
('arya', 'pradata', 'arya@gmail.com', '$2y$10$WbJyv9vKSHD6klFfBOQUduFJRUN6qWVB/tyRMVd7p8rYLOyORd5OW', 'aryap12345', '', '', 2, 1, 1580801583, 8),
('Dhiya', 'Calista', 'dhiya@gmail.com', '$2y$10$hioszgMChAI0G4UngnLS5.1ZdtB8I6m8VNyl6FEd2XAfm8ppqqZ5S', 'dhiyadice', 'Hey there! I\'m Dhiya! Welcome to my Medium', '', 2, 1, 1580822749, 9),
('Achmad', 'Ichsan', 'isan@gmail.com', '$2y$10$97tFLN9zdpscCBjSyAc6h.zdyWNMCExsgMjRKeQVMR2hFG6zDWCKG', 'isan1234', 'Hey there! I\'m Achmad! Welcome to my Medium', '', 2, 1, 1580879440, 10);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'administrator'),
(2, 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`content_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `content_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
