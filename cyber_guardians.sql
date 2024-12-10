-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2024 at 07:39 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cyber guardians`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `message` varchar(500) NOT NULL,
  `email` varchar(300) NOT NULL,
  `senddate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `message`, `email`, `senddate`) VALUES
(6, 'I saw your recent social media campaign about cyber bullying and awareness, and I really liked it! The posts were easy to understand and had great visuals that grabbed my attention. \r\nOne suggestion: it might be cool to see more behind-the-scenes stuff or interviews with people involved in the campaign. Overall, the campaign did a great job of getting the message across, and it definitely made me more aware of cyber bullying and how to protect. Looking forward to more content from you guys!', 'kyaw@gmail.com', '2024-07-31 07:16:23'),
(7, '\r\nI am interested in using your web service focused on cyber bullying awareness and prevention because I think it provides a safe space for teenagers to learn about and protect themselves from online harassment. The emphasis on education and support is crucial in fostering a respectful online community and ensuring young users feel safe and empowered.', 'kyaw@gmail.com', '2024-07-31 07:35:45');

-- --------------------------------------------------------

--
-- Table structure for table `howparentshelp`
--

CREATE TABLE `howparentshelp` (
  `id` int(11) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `image1` varchar(200) NOT NULL,
  `image2` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `howparentshelp`
--

INSERT INTO `howparentshelp` (`id`, `description`, `image1`, `image2`) VALUES
(3, '\r\nRecommend reputable websites and tools for social media safety and digital literacy', 'safety.jpg', 'safety1.jpg'),
(5, 'If your child encounters serious online issues, seek help from counselors or online safety experts.', 'online issue.jpg', 'safety expert.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(8) NOT NULL,
  `city` varchar(200) NOT NULL,
  `subscription` int(11) NOT NULL,
  `usertype` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `name`, `email`, `password`, `city`, `subscription`, `usertype`) VALUES
(1, 'Nyi Nyi Myat', 'nnyim217@gmail.com', '00000000', 'Yangon', 1, 0),
(2, 'Kyaw Kyaw', 'kyaw@gmail.com', 'kyaw1234', 'Yangon', 1, 0),
(3, 'Bhone ', 'b123@gmail.com', '12345678', 'Mandalay', 1, 0),
(4, 'Yoon Me', 'yoon@gmail.com', 'yoon26', 'Yangon', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `content` varchar(2000) NOT NULL,
  `image` varchar(200) NOT NULL,
  `publishdate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `title`, `content`, `image`, `publishdate`) VALUES
(12, 'Navigating the Social Media Landscape', 'Welcome to our latest edition. This month we focus on navigating the vast world of social media safely and responsibly. With so many platforms and endless content it can be overwhelming. We share tips on identifying credible sources understanding privacy settings and the importance of thinking before you post. Join us in learning how to make the most of your social media experience while staying safe online.\r\n', 'safety tips.jpg', '2024-07-15 05:18:05'),
(13, 'The Realities of Cyberbullying', 'In this issue we tackle the serious issue of cyberbullying. We provide insights into the signs of cyberbullying its emotional impact and how to take action if you or someone you know is affected. Our feature article includes stories from teens who have overcome cyberbullying and resources available to support you. Remember you are not alone and there are steps you can take to protect yourself and others.', 'online harassment.jpg', '2024-07-15 05:29:25'),
(14, 'Social Media and Your Mental Health', 'Social media can be a double-edged sword for our mental health. This newsletter explores the psychological effects of social media from the pressure to be perfect to the joys of connecting with others. We discuss strategies for maintaining a healthy balance recognizing when it is time to take a break and using social media as a tool for positive self-expression. Discover how to curate your online experience in a way that supports your well-being.', 'mental health.jpg', '2024-07-30 08:09:24'),
(15, 'Using Social Media for Positive Change', 'This month we highlight how you can use social media to make a positive impact. Whether it is raising awareness for a cause supporting a friend or spreading kindness your online actions matter. In this issue, we feature inspiring stories of teens making a difference through social media and provide tips on how to get involved in social advocacy. Learn how to use your platform to be a force for good.', 'kindness.jpg', '2024-07-30 08:13:34'),
(16, 'Understanding Digital Footprints', 'Every click like and share contributes to your digital footprint. But what does that mean for your future. This newsletter dives into the concept of digital footprints and how they can impact everything from college applications to job prospects. We give you practical advice on managing your online presence and making sure it reflects your best self. Plus, we cover the importance of privacy and protecting your personal information.', 'internet safety.jpg', '2024-07-30 08:16:26');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `info` varchar(1000) NOT NULL,
  `createdat` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `title`, `description`, `info`, `createdat`) VALUES
(6, ' Digital Literacy Workshops', 'Interactive sessions to enhance digital skills and awareness', 'Our Digital Literacy Workshops aim to educate teenagers on navigating the digital world safely and responsibly. Topics include identifying credible sources, understanding privacy settings, and recognizing online scams. Participants will engage in hands-on activities to build their digital literacy skills, empowering them to use social media platforms more wisely', '2024-07-05 17:01:08'),
(7, 'Cyberbullying Awareness and Prevention', 'Educational sessions on recognizing and preventing cyberbullying', 'This service provides crucial information on the signs of cyberbullying and how to respond if you or someone you know is being bullied online. We cover the psychological impacts, legal consequences, and coping strategies. The goal is to foster a supportive community and equip teenagers with the tools they need to protect themselves and others from online harassment', '2024-07-06 16:21:31'),
(8, 'Mental Health and Social Media', 'Discussions on the impact of social media on mental health', 'Our Mental Health and Social Media service explores how social media use can affect mental well-being, both positively and negatively. We discuss the influence of social comparison, the pressure to present a perfect life, and the importance of digital detoxing. The service includes resources and strategies for managing stress and anxiety related to social media use', '2024-07-06 16:21:48'),
(9, 'Social Media for Positive Change', 'Utilizing social media for advocacy and positive influence', 'This service encourages teenagers to use social media platforms for positive change and social advocacy. We provide guidance on how to create impactful content, engage in constructive online discussions, and promote social causes. The sessions also highlight the importance of being a responsible digital citizen and using social media to build supportive networks and communities', '2024-07-09 06:35:19');

-- --------------------------------------------------------

--
-- Table structure for table `socialapp`
--

CREATE TABLE `socialapp` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `logo` varchar(200) NOT NULL,
  `link` varchar(500) NOT NULL,
  `privacylink` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `socialapp`
--

INSERT INTO `socialapp` (`id`, `name`, `logo`, `link`, `privacylink`) VALUES
(4, 'Instagram', 'instagram-logo.png', 'https://www.instagram.com', 'https://help.instagram.com/519522125107875'),
(5, ' Facebook', 'facebook.jpg', 'https://www.facebook.com', 'https://www.facebook.com/privacy/policy/?entry_point=privacy_policies_page_footer'),
(6, 'Twitter', 'twitter-logo.png', ' https://www.twitter.com', 'https://twitter.com/en/privacy?&&&'),
(7, ' Youtube', 'youtube-logo.png', ' https://www.youtube.com', 'https://www.youtube.com/account_privacy'),
(8, ' Whats App', 'whats app logo.png', ' https://www.whatsapp.com', 'https://whatsapp.com/legal/privacy-policy'),
(9, ' Tiktok', 'tiktok-logo.png', ' https://www.tiktok.com', 'https://www.tiktok.com/legal/page/row/privacy-policy/en');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `howparentshelp`
--
ALTER TABLE `howparentshelp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socialapp`
--
ALTER TABLE `socialapp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `howparentshelp`
--
ALTER TABLE `howparentshelp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `socialapp`
--
ALTER TABLE `socialapp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
