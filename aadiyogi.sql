-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2023 at 04:41 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aadiyogi`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `image` text NOT NULL,
  `content` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `image`, `content`, `created_at`) VALUES
(6, 'How do I prepare for my Yoga class', 'blog-1.jpg', 'As a beginner, whether to Yoga or any other field, our minds are filled with all kinds of questions and doubts. The excitement mixed with the nervousness before taking your first yoga class can not be described well in words. There are some tips that would help you to be more comfortable, confident, and prepared for your first yoga class. These tips can not only be used by a beginner but everyone can keep them in mind as preparation tips for all your yoga sessions.\r\n\r\nIn the times of virtual classes, we have made a list of a few points that would not only help you with the video classes but also studio classes. Read on to know more about it:\r\n\r\nEmpty Stomach:Yoga asanas should be practiced on an empty stomach. Try to keep your stomach relatively empty before you get on your yoga mat. There should be a gap of 2-3 hours between your meal and your practice. Most of the yoga asanas directly impact the abdomen and digestive system. If you practice with a full stomach, the food won’t get digested properly, which would further lead to other health problems.\r\nComfortable Space: As much as possible, try to practice in one dedicated place only. Over time, your practice would create its own positive vibrations, thereby providing you comfort, healing, and strength. Choose any quiet space that is clean and well ventilated. This will help you to get enough natural air. Avoid practicing Yoga in an air-conditioned room. All you need is a little more than an elbow space for a comfortable and free moving yoga class. You don’t need the whole room all to yourself. Simply stay away from furniture and walls and close to the window.\r\n\r\nYoga Material: Another common doubt that a lot of people have is about what to wear and what to carry to a yoga class. Well, the answer is pretty simple. You just need to bring yourself to a yoga class with a positive mindset. For our outfit, any comfortable and loose clothing would work for yoga, nothing that would restrict your movements. Avoid wearing excessive jewellery or make-up to a yoga class. Along with this, you would require a simple anti-skid yoga mat, that would provide you comfort with your postures.\r\nConditioning: It is always advised to reach early to your yoga class so that you get some time to settle and calm yourself before the practice. Even if you reach your class a little late, don’t directly rush into the practice that the rest of the class is doing. Sit down for 20-30 seconds, close your eyes, and just focus on your breath. Let this technique condition your body and mind and then start with your practice.\r\n\r\nListen to your Body: Always let your body guide you with your practice. Never compare yourself to the flexibility of the teacher, they have taken a lot of time and practice to reach where they are today. Everyone starts as a beginner, respect, and acknowledge that. Never compare your practice to the person on the mat next to yours as well. Let your body guide you through your practice. If your body doesn’t allow you to do something, do not force it into doing it. Be gentle with yourself.\r\nKeep Breathing: You can take your practice to a whole another level by being in sync with your breath. Practice breathing and pranayama can not only create a sense of calm but also make your practice more mindful. Simply keep breathing as instructed and let your breath take you deeper into your own practice.\r\nTake Yoga off the mat: Yoga doesn’t mean just that one hour that you spend on the mat. That is just the physical aspect of yoga. Try to take your yoga practice as you get off the mat as well. We must be in yoga and practice yoga, 24X7. Let your practice and its teachings reflect on your physical, mental, and emotional levels throughout the day. Try to apply the yogic lessons in your everyday life, and let it open the doors to your growth and true transformation.\r\nTo get the most out of your yoga class or practice is to simply show up. Only consistency and regular practice will be able to give you any kind of result. Yoga is a life practice and it has a lot to offer to you, if only you give it your 100% and dedication.', '2023-01-16 11:20:56'),
(7, 'Say Goodbye to Sciatica & Cramps with Yoga', 'blog-3.jpg', 'Today, we will see how you can avoid sciatica and cramps with yoga techniques. These techniques are easy to practice and can be performed at your work desk as well. In our previous blog, we saw how undue strain on our spine causes neck and back...', '2023-01-16 11:24:00');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `image` text NOT NULL,
  `BGimage` text NOT NULL,
  `yoganame` text NOT NULL,
  `week` text NOT NULL,
  `time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `name`, `image`, `BGimage`, `yoganame`, `week`, `time`) VALUES
(3, 'Nikki Agrawal', 'blog-author.jpg', 'class-1.jpg', 'Pilates Yoga', 'Mon, Tue, Wed', '6:00 - 7:00'),
(4, 'Anjali Verma', 'team-2.jpg', 'class-2.jpg', 'Iyengar Yoga', 'Mon, Tue, Wed', '7:00 - 8:00'),
(5, 'Rakhi Sharma', 'teacher-3.png', 'class-3.jpg', 'Ashtanga yoga', 'Mon, Tue, Wed', '8:00 - 9:00'),
(6, 'Shilpa Rathee', 'teacher-4.png', 'class-4.jpg', 'Hatha Yoga', 'Thu, Fri, Sat', '6:00 - 7:00'),
(7, 'Yoshita Walia', 'teacher-5.png', 'class-5.jpg', 'Kundalini Yoga', 'Thu, Fri, Sat', '7:00 - 8:00'),
(8, 'Aanchal Gupta', 'teacher-6.png', 'class-6.jpg', 'Vinyasa yoga', 'Thu, Fri, Sat', '8:00 - 9:00');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(100) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pose`
--

CREATE TABLE `pose` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pose`
--

INSERT INTO `pose` (`id`, `name`, `image`) VALUES
(3, 'Pilates_Yoga', 'portfolio-1.jpg'),
(4, 'Pilates_Yoga', 'portfolio-9.jpg'),
(5, 'Vinyasa_Yoga', 'portfolio-2.jpg'),
(6, 'Vinyasa_Yoga', 'portfolio-5.jpg'),
(7, 'Hatha_Yoga', 'portfolio-6.jpg'),
(8, 'Hatha_Yoga', 'portfolio-3.jpg'),
(10, 'Hatha_Yoga', 'portfolio-7.jpg'),
(11, 'Hatha_Yoga', 'portfolio-8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE `price` (
  `id` int(255) NOT NULL,
  `title` text NOT NULL,
  `price` text NOT NULL,
  `des1` text NOT NULL,
  `des2` text NOT NULL,
  `des3` text NOT NULL,
  `des4` text NOT NULL,
  `des5` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`id`, `title`, `price`, `des1`, `des2`, `des3`, `des4`, `des5`) VALUES
(63, 'BASIC', '1999', 'General Fitness', 'General Fitness', 'Basic Asanas', '', ''),
(64, 'STANDARD', '2999', 'General Fitness', 'Strength Building', 'Basic + Advance Asanas', 'Weight Loss/Gain Training', ''),
(65, 'PREMIUM', '4999', 'Personal Trainer', 'General Fitness', 'Strength Building', 'Basic + Advance Asanas', 'Weight Loss/Gain Training');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `image` text NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `title`, `image`, `description`) VALUES
(13, 'Heal emotions', 'footer-bg.png', 'Yoga relieves pain and eases traumatic memories. It helps cope with pain by disassociating with the actual pain, focusing on positive thoughts and experiences.'),
(14, 'Body Refreshes', 'k.jpg', 'yoga or meditation Refresh your Mind Body and Soul. This can help keep you calm, clear your mind of worries, and de-stress. '),
(15, 'Mind & Serenity', 'post-1.jpg', 'Serenity & mindfulness go hand-in-hand & one can achieve it by consistently practicing yoga. Yoga asanas help in restoring peace of mind.'),
(16, 'How to Enjoy Your life', 'post-4.jpg', 'Yoga is a holistic package for happy living. It provides techniques to unite the body, mind and breath, and connect to the inner core of our being – the spiritual aspect of our lives.'),
(17, 'Body & Spiritualit', 'hero.jpg', 'yoga practice may improve various aspects of spiritual well-being and spiritual intelligence. Yoga practice may also be associated with increased levels of spiritual health, a more positive outlook on life, happiness within, and lower levels of existential anxieties'),
(20, 'Body & Mind', 'about.png', 'Yoga is a holistic package for happy living. It provides techniques to unite the body, mind and breath, and connect to the inner core of our being – the spiritual aspect of our lives.');

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`id`, `image`, `name`) VALUES
(13, 'blog-author.jpg', 'Nikki Agrawal'),
(14, 'teacher-2.png', 'Nikki Agrawal'),
(15, 'teacher-3.png', 'Rakhi Sharma'),
(16, 'teacher-4.png', 'Shilpa Rathee'),
(17, 'teacher-5.png', 'Yoshita Walia'),
(18, 'team-6.jpg', 'Aanchal Gupta');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pose`
--
ALTER TABLE `pose`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pose`
--
ALTER TABLE `pose`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `price`
--
ALTER TABLE `price`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `trainer`
--
ALTER TABLE `trainer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
