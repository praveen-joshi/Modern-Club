-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2020 at 03:42 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modern_club`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `image` varchar(70) NOT NULL,
  `descriptoin` text NOT NULL,
  `organizer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `name`, `date`, `address`, `city`, `state`, `country`, `time`, `image`, `descriptoin`, `organizer_id`) VALUES
(20, 'hackaton', '2021-07-01', 'Ujjain Road Gram Baroli, Indore, Madhya Pradesh 45', 'Indore', 'Madhya Pradesh', 'India', '2:00pm', 'data/Event_photos/hack.svg', 'Indias Premier Coding Challenge | Free Learning & Compete | Prize Money- ₹ 20,000/- | Free Registration |\r\n\r\nSvvv is organizing Indias premier Online Coding Contest for all the college students and recent graduates in the country. Compete with Indias top university and have an experience of coding challenges like never before.\r\n \r\nWhat is in it for candidates?\r\n \r\n1) Prize Money: Rs.20,000/- and certificate.\r\n2) Top performers get a chance to interview at Top Product Companies\r\n3) Rs. 100 gift vouchers to 100 lucky candidates who solve at least one question.\r\n', 3),
(21, 'Webinar on AI', '2021-11-18', 'SVVV Campus', 'Indore', 'Madhya Pradesh', 'India', '2:00pm', 'data/Event_photos/coding.png', 'Warm Greetings from Shri Vaishnav Vidyapeeth Vishwavidyalaya (SVVV), Indore.\r\n\r\nWith immense pleasure, it is informed that Shri Vaishnav Vidyapeeth Vishwavidyalaya, Indore in association with International Simulation and Gaming Association (ISAGA) is organizing 52nd Anniversary conference ISAGA2021on September 6-10, 2021. The theme of the ISAGA2021 is “Gaming, Simulation and Innovations: Challenges and Opportunities”.\r\n\r\nTo prepare for the Conference, the University will organise a webinar series on GS with emphasis on the conference theme. Our key speakers will be ISAGA members and other GS professionals. This webinar will be held every month starting from October 03, 2020. Each session will last for an hour and will end with a Q&A of 10-15 minutes.\r\n\r\nShri Vaishnav Vidyapeeth Vishwavidyalaya, Indore is inviting Officials, ISAGA Members, GS professionals, Academicians, Research Scholars & Students (UG and Higher) to attend the First Webinar of the series on October 03, 2020. The Details of the webinar are as below:\r\n\r\nFirst Webinar Topic: “Gaming, simulation and participation: a systems approach to mental health and wellbeing”\r\n\r\nSpeaker:  Prof.  Sebastiaan Meijer, Professor, Vice Dean, KTH Royal Institute of Technology Stockholm, Sweden\r\n\r\nDate: October 03, 2020 (Saturday)\r\n\r\nTime: - 03:00 P.M. (IST)\r\n\r\nNo Registration Fee\r\n\r\nE- Certificate will be provided to all the active registered participants\r\n\r\nRegister here:  https://forms.gle/4QH64dRvBfRFgYhDA\r\n\r\nWebsite: - www.isaga2021.com\r\n\r\nBest wishes\r\nDr. Jigyasu Dubey\r\nCoordinator\r\nISAGA2021', 3),
(22, 'How to start competitive Programming', '2021-06-27', 'Ujjain Road Gram Baroli, Indore, Madhya Pradesh 45', 'Indore', 'Madhya Pradesh', 'India', '2:00pm', 'data/Event_photos/cp.png', 'Want to crack toughest Coding Interviews or want to become a pro Competitive Programmer ? Are you aiming to crack algorithm rounds of Directi, Amazon, Microsoft, Google like product based companies ? Increase your coding speed up to 3-5 times, coverage of all topics for interviews as well as Competitive Programming.\r\n\r\nJoin us for this free webinar', 4),
(23, 'Web Design Contest', '2020-10-23', 'Davv Campus', 'Indore', 'Madhya Pradesh', 'India', '2:00pm', 'data/Event_photos/code.png', 'Indias Premier Coding Challenge | Free Learning & Compete | Prize Money- ₹ 20,000/- | Free Registration | Svvv is organizing Indias premier Online Coding Contest for all the college students and recent graduates in the country. Compete with Indias top university and have an experience of coding challenges like never before. What is in it for candidates? 1) Prize Money: Rs.20,000/- and certificate. 2) Top performers get a chance to interview at Top Product Companies 3) Rs. 100 gift vouchers to 100 lucky candidates who solve at least one question.', 5),
(24, 'ML contest', '2021-03-27', 'Davv Campus', 'Indore', 'Madhya Pradesh', 'India', '2:00pm', 'data/Event_photos/coding.png', 'The  Deep Learning challenges tackles the problem of fully automated classification tasks without any human intervention. Each challenge consists in a bunch of hidden datasets: you have to, as a participant, submit a model that can perform well on all of them.\r\n\r\nThis ambitious problem is firstly cut into several smaller challenges with different data domains: image, video, text and time series. Data of all types will be contained in the final challenge.', 5),
(25, 'Cyber Security', '2020-10-23', 'Davv Campus', 'Indore', 'Madhya Pradesh', 'India', '2:00pm', 'data/Event_photos/code.png', 'Join this webinar if you want to make a carrer as a Cyber security Expert\r\n\r\n', 5),
(26, 'Tech Fest', '2021-03-05', 'Davv Campus', 'Indore', 'Madhya Pradesh', 'India', '2:00pm', 'data/Event_photos/event.jpg', 'Join for for exciting fun activities and enjoyment includin Dj night ,Fashion show,Dance and Sports Contest', 5);

-- --------------------------------------------------------

--
-- Table structure for table `event_booking`
--

CREATE TABLE `event_booking` (
  `event_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_booking`
--

INSERT INTO `event_booking` (`event_id`, `user_id`) VALUES
(20, 559),
(20, 560);

-- --------------------------------------------------------

--
-- Table structure for table `membership_club`
--

CREATE TABLE `membership_club` (
  `membership_club_id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `address` varchar(70) NOT NULL,
  `city` varchar(70) NOT NULL,
  `state` varchar(70) NOT NULL,
  `country` varchar(70) NOT NULL,
  `image` varchar(70) NOT NULL,
  `description` text NOT NULL,
  `organizer_id` int(11) NOT NULL,
  `fees` int(11) NOT NULL,
  `fees_duration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `membership_club`
--

INSERT INTO `membership_club` (`membership_club_id`, `name`, `address`, `city`, `state`, `country`, `image`, `description`, `organizer_id`, `fees`, `fees_duration`) VALUES
(2, 'SVVV Programmer Hub', 'Ujjain Road Gram Baroli, Indore, Madhya Pradesh 453111', 'Indore', 'Madhya Pradesh', 'India', 'data/club_photos/cc.png', 'Warm Greetings from Shri Vaishnav Vidyapeeth Vishwavidyalaya (SVVV), Indore.\r\n\r\nWith immense pleasure, it is informed that Shri Vaishnav Vidyapeeth Vishwavidyalaya, Indore is starting to Regrestration for its coding club join us now to participate in coding contests we conduct regulararly', 3, 0, 365),
(3, 'Competitive Programming ', '53,Manik chowk near Rajwada', 'Indore', 'Madhya Pradesh', 'India', 'data/club_photos/cp.png', 'Want to crack toughest Coding Interviews or want to become a pro Competitive Programmer ? Are you aiming to crack algorithm rounds of Directi, Amazon, Microsoft, Google like product based companies ? Increase your coding speed up to 3-5 times, coverage of all topics for interviews as well as Competitive Programming.', 4, 500, 365),
(4, 'Cultural Fest', 'Davv Campus', 'Indore', 'Madhya Pradesh', 'India', 'data/club_photos/event.jpg', 'Join us for volunteering During the tech feast and you will also get certificate', 5, 0, 365);

-- --------------------------------------------------------

--
-- Table structure for table `membership_club_booking`
--

CREATE TABLE `membership_club_booking` (
  `membership_club_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `membership_club_booking`
--

INSERT INTO `membership_club_booking` (`membership_club_id`, `user_id`) VALUES
(2, 559),
(3, 559),
(2, 560);

-- --------------------------------------------------------

--
-- Table structure for table `organizers`
--

CREATE TABLE `organizers` (
  `organizer_id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(70) NOT NULL,
  `profile` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `organizers`
--

INSERT INTO `organizers` (`organizer_id`, `name`, `email`, `password`, `profile`) VALUES
(3, 'SVVV', 'svvv@gmail.com', '$2y$10$xCchoKKHtQlZlR21.eZwiul3Ny12NeGsuz5kUMDwJh1dy.MC3768u', 'data/organizer_profiles/bg2.jpg'),
(4, 'Elite Tech', 'elite@gmail.com', '$2y$10$V8aWvSSQsVYX1MG0MUoqh.pTitvpr3ONZvo/bOWMU7AX7sOBo.06m', 'data/organizer_profiles/cc.png'),
(5, 'IET,DAVV', 'iet@gmail.com', '$2y$10$beGvcBTLZZ2JuMGLapcwSeLJPkONXQVGg50PBFHbdETlg2DU2ESmC', 'data/organizer_profiles/cc.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(70) NOT NULL,
  `profile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `profile`) VALUES
(559, 'Praveen', 'praveenjoshi9999@gmail.com', '$2y$10$uuheAdQn95YIXcW.8g.RpuzY5Hj2ZJeKJxgjbM1eePh.zzrsvLSuu', 'data/user_profiles/my_profile.PNG'),
(560, 'Chetan Joshi', 'chetan@gmail.com', '$2y$10$fYz1bnS1ikZLvwdLNvDv5eo8LQMHA9rDNNtbd6Poxw3Fh2/l0XcGW', 'data/user_profiles/background.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `mapping_organizer_into_events` (`organizer_id`);

--
-- Indexes for table `event_booking`
--
ALTER TABLE `event_booking`
  ADD KEY `mapping_event` (`event_id`),
  ADD KEY `mapping_user` (`user_id`);

--
-- Indexes for table `membership_club`
--
ALTER TABLE `membership_club`
  ADD PRIMARY KEY (`membership_club_id`),
  ADD KEY `mapping_organizer_into_club` (`organizer_id`);

--
-- Indexes for table `membership_club_booking`
--
ALTER TABLE `membership_club_booking`
  ADD KEY `mapping_users` (`user_id`),
  ADD KEY `membership_club_id` (`membership_club_id`) USING BTREE;

--
-- Indexes for table `organizers`
--
ALTER TABLE `organizers`
  ADD PRIMARY KEY (`organizer_id`),
  ADD UNIQUE KEY `organizer_id` (`organizer_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `membership_club`
--
ALTER TABLE `membership_club`
  MODIFY `membership_club_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `organizers`
--
ALTER TABLE `organizers`
  MODIFY `organizer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=561;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `mapping_organizer_into_events` FOREIGN KEY (`organizer_id`) REFERENCES `organizers` (`organizer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `event_booking`
--
ALTER TABLE `event_booking`
  ADD CONSTRAINT `mapping_event` FOREIGN KEY (`event_id`) REFERENCES `events` (`event_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mapping_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `membership_club`
--
ALTER TABLE `membership_club`
  ADD CONSTRAINT `mapping_organizer_into_club` FOREIGN KEY (`organizer_id`) REFERENCES `organizers` (`organizer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `membership_club_booking`
--
ALTER TABLE `membership_club_booking`
  ADD CONSTRAINT `mapping_membership_club` FOREIGN KEY (`membership_club_id`) REFERENCES `membership_club` (`membership_club_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mapping_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
