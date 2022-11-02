-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2022 at 09:39 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `it_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogcategory`
--

CREATE TABLE `blogcategory` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogcategory`
--

INSERT INTO `blogcategory` (`id`, `name`) VALUES
(1, 'None'),
(2, 'Digital '),
(3, 'Technology');

-- --------------------------------------------------------

--
-- Table structure for table `blog_post`
--

CREATE TABLE `blog_post` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `author` varchar(50) NOT NULL,
  `category` varchar(30) NOT NULL,
  `blog_text` mediumtext NOT NULL,
  `likes` int(11) DEFAULT 0,
  `post_time` datetime NOT NULL DEFAULT current_timestamp(),
  `thum` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_post`
--

INSERT INTO `blog_post` (`id`, `title`, `sub_title`, `author`, `category`, `blog_text`, `likes`, `post_time`, `thum`) VALUES
(3, 'Purus ornare nisl est nec. Nunc, enim tellus pretium viverra quisque id in metus volutpat. Urn', 'um integer tortor porttitor justo vel lobortis risus. Lacinia pellentesque fermentum tellus orci mauris, velit duis ege', 'sHIVAAY', 'Digital ', '<h1>Purus ornare nisl est&nbsp;nec. Nunc, enim tellus pretium viverra quisque id&nbsp;in&nbsp;metus volutpat. Urna eget velit venenatis, commodo</h1>\r\n\r\n<p>Purus ornare nisl est&nbsp;nec. Nunc, enim tellus pretium viverra quisque id&nbsp;in&nbsp;metus volutpat. Urna eget velit venenatis, commodo eget massa. Magna donec dictum cras nullam platea. Diam rhoncus massa lectus pellentesque tristique. Amet commodo, egestas vitae bibendum. Volutpat elit condimentum integer tortor porttitor justo vel lobortis risus. Lacinia pellentesque fermentum tellus orci mauris, velit duis eget. Commodo justo, hac ligula molestie felis, iaculis. Vitae dui at&nbsp;ante orci, dictum fusce. Urna, sed urna fringilla faucibus euismod aliquet&nbsp;nec. Quis libero, fermentum amet eu, condimentum auctor. Sit vel ipsum sem tempus gravida&nbsp;et. Scelerisque blandit orci, est quis. Nisi, tellus amet est nascetur habitant faucibus ornare et&nbsp;vivamus.</p>\r\n', 0, '2022-10-21 17:00:02', '01.jpg'),
(4, 'Purus ornare nisl est nec. Nunc, enim tellus pretium viverra quisque id in metus volutpat. Urn', 'um integer tortor porttitor justo vel lobortis risus. Lacinia pellentesque fermentum tellus orci mauris, velit duis ege', 'SHIVAAY', 'Digital ', '<h1>Purus ornare nisl est&nbsp;nec. Nunc, enim tellus pretium viverra quisque id&nbsp;in&nbsp;metus volutpat. Urna eget velit venenatis, commodo</h1>\r\n\r\n<p>Purus ornare nisl est&nbsp;nec. Nunc, enim tellus pretium viverra quisque id&nbsp;in&nbsp;metus volutpat. Urna eget velit venenatis, commodo eget massa. Magna donec dictum cras nullam platea. Diam rhoncus massa lectus pellentesque tristique. Amet commodo, egestas vitae bibendum. Volutpat elit condimentum integer tortor porttitor justo vel lobortis risus. Lacinia pellentesque fermentum tellus orci mauris, velit duis eget. Commodo justo, hac ligula molestie felis, iaculis. Vitae dui at&nbsp;ante orci, dictum fusce. Urna, sed urna fringilla faucibus euismod aliquet&nbsp;nec. Quis libero, fermentum amet eu, condimentum auctor. Sit vel ipsum sem tempus gravida&nbsp;et. Scelerisque blandit orci, est quis. Nisi, tellus amet est nascetur habitant faucibus ornare et&nbsp;vivamus.</p>\r\n', 0, '2022-10-21 17:00:19', '01.jpg'),
(7, 'This is a holi blog chuha nikla bil se happy diwali dil se ', 'um integer tortor porttitor justo vel lobortis risus. Lacinia pellentesque fermentum tellus orci mauris, velit duis ege', 'sHIVAAY', 'Digital ', '', 0, '2022-10-22 08:50:22', ''),
(8, 'This is a diwali blog chuha nikla bil se happy diwali dil se ', '', 'sHIVAAY', 'Technology', '<h3>BY DAVE EGGERTON SEP 16, 2022&nbsp; VOICES ON WATER</h3>\r\n\r\n<p><img src=\"https://www.acwa.com/wp-content/uploads/2018/12/Dave-Eggerton-CCWD-General-Manager-2-1-251x300.jpg\" style=\"float:left; height:110px; margin:5px 7px; width:92px\" /></p>\r\n\r\n<p>Another session of the California Legislature came down to the wire with some wins earned in the late hours of the final night of session. The ACWA state legislative team continued to walk the halls in the final days of session, led diverse coalitions and of course worked with ACWA member agencies to represent them.</p>\r\n\r\n<p>ACWA sponsored AB 2142, a common-sense measure that would exempt turf rebates from California taxable income, which passed both houses unopposed. If signed by Gov. Gavin Newsom, it will give water agencies another tool to incentivize customers considering a switch to water-wise landscaping.&nbsp;</p>\r\n\r\n<p>ACWA also worked to stop bills that would have negative consequences for public water agencies. This included a high-profile bill on groundwater well permitting, SB 2201, that would have unnecessarily added regulatory burden and risk to groundwater management agencies. ACWA advocates lobbied against this bill right through the final hours of session until it stalled without receiving a final vote.</p>\r\n\r\n<p>ACWA also effectively advocated against AB 2419, a bill that would have mandated that 40% of funds from the federal Infrastructure Investment and Jobs Act (IIJA) and other federal funds be directed to disadvantaged communities. While ACWA supports funding for disadvantaged communities, the bill would have established a mandate that would have been difficult for state agencies to achieve and that would have codified a federal goal. Another bill that ACWA successfully opposed was AB 1931, which sought to add new requirements for lead service line replacements at the same time the Biden Administration is adding requirements on the same topic at the federal level. ACWA actively opposed the bill until it was held in the Assembly Appropriations Committee.&nbsp;&nbsp;</p>\r\n\r\n<p>ACWA took oppose-unless-amended positions on two highly contentious bills that did pass, but strong lobbying by ACWA-led coalitions resulted in at least some amendments that improved certain parts of the bills.</p>\r\n\r\n<p>There is also SB 1157, related to water-use efficiency standards. Unfortunately, it did pass the legislature after a hard fight that went down to the wire on the final night of the session when the bill narrowly passed.&nbsp;&nbsp;ACWA did help to secure amendments earlier in the session that did improve the bill.&nbsp;&nbsp;These included language that would require the Department of Water Resources to complete a new study to assess and quantify the economic benefits of the proposed indoor water use standards and would allow DWR to recommend a different timeframe for adoption of those standards. We are advocating that the governor veto the bill.</p>\r\n\r\n<p>ACWA&rsquo;s advocacy work also resulted in amendments that could mitigate some of the problematic aspects in SB 222, the bill that, if signed into law, would create a water rate assistance program. While ACWA agreed with the goal of establishing a water rate assistance program, the bill presented significant concerns regarding implementation. The final version of the bill still lacks a funding source and proposes inefficient enrollment provisions that would reduce the amount of funding that would actually go to assist low-income households. ACWA is urging Gov. Newsom to veto the bill.</p>\r\n\r\n<p>I am incredibly proud of the work we accomplished on behalf of our member agencies during the past year. However, we could not have achieved this level of success without the responsiveness of our member agencies who acted on a stream of Outreach Alerts seeking support for ACWA positions and outreach to Legislators. It clearly made a difference.</p>\r\n\r\n<p>Members of ACWA&rsquo;s State Legislative Committee deserve special thanks for their thoughtful deliberations on dozens of key water bills. This year&rsquo;s high level of engagement and collaboration amplified our association&rsquo;s voice in the Legislature and further established ACWA as among the most effective organizations of its kind in Sacramento.</p>\r\n', 0, '2022-10-22 08:51:18', ''),
(10, 'This is a diwali blog chuha nikla bil se happy diwali dil se ', 'um integer tortor porttitor justo vel lobortis risus. Lacinia pellentesque fermentum tellus orci mauris, velit duis ege', 'sHIVAAY', 'Technology', '\n\n<p><img src=\"https://www.acwa.com/wp-content/uploads/2018/12/Dave-Eggerton-CCWD-General-Manager-2-1-251x300.jpg\" style=\"float:left; height:110px; margin:5px 7px; width:92px\" /></p>\n\n<p>Another session of the California Legislature came down to the wire with some wins earned in the late hours of the final night of session. The ACWA state legislative team continued to walk the halls in the final days of session, led diverse coalitions and of course worked with ACWA member agencies to represent them.</p>\n\n<p>ACWA sponsored AB 2142, a common-sense measure that would exempt turf rebates from California taxable income, which passed both houses unopposed. If signed by Gov. Gavin Newsom, it will give water agencies another tool to incentivize customers considering a switch to water-wise landscaping.&nbsp;</p>\n\n<p>ACWA also worked to stop bills that would have negative consequences for public water agencies. This included a high-profile bill on groundwater well permitting, SB 2201, that would have unnecessarily added regulatory burden and risk to groundwater management agencies. ACWA advocates lobbied against this bill right through the final hours of session until it stalled without receiving a final vote.</p>\n\n<p>ACWA also effectively advocated against AB 2419, a bill that would have mandated that 40% of funds from the federal Infrastructure Investment and Jobs Act (IIJA) and other federal funds be directed to disadvantaged communities. While ACWA supports funding for disadvantaged communities, the bill would have established a mandate that would have been difficult for state agencies to achieve and that would have codified a federal goal. Another bill that ACWA successfully opposed was AB 1931, which sought to add new requirements for lead service line replacements at the same time the Biden Administration is adding requirements on the same topic at the federal level. ACWA actively opposed the bill until it was held in the Assembly Appropriations Committee.&nbsp;&nbsp;</p>\n\n<p>ACWA took oppose-unless-amended positions on two highly contentious bills that did pass, but strong lobbying by ACWA-led coalitions resulted in at least some amendments that improved certain parts of the bills.</p>\n\n<p>There is also SB 1157, related to water-use efficiency standards. Unfortunately, it did pass the legislature after a hard fight that went down to the wire on the final night of the session when the bill narrowly passed.&nbsp;&nbsp;ACWA did help to secure amendments earlier in the session that did improve the bill.&nbsp;&nbsp;These included language that would require the Department of Water Resources to complete a new study to assess and quantify the economic benefits of the proposed indoor water use standards and would allow DWR to recommend a different timeframe for adoption of those standards. We are advocating that the governor veto the bill.</p>\n\n<p>ACWA&rsquo;s advocacy work also resulted in amendments that could mitigate some of the problematic aspects in SB 222, the bill that, if signed into law, would create a water rate assistance program. While ACWA agreed with the goal of establishing a water rate assistance program, the bill presented significant concerns regarding implementation. The final version of the bill still lacks a funding source and proposes inefficient enrollment provisions that would reduce the amount of funding that would actually go to assist low-income households. ACWA is urging Gov. Newsom to veto the bill.</p>\n\n<p>I am incredibly proud of the work we accomplished on behalf of our member agencies during the past year. However, we could not have achieved this level of success without the responsiveness of our member agencies who acted on a stream of Outreach Alerts seeking support for ACWA positions and outreach to Legislators. It clearly made a difference.</p>\n\n<p>Members of ACWA&rsquo;s State Legislative Committee deserve special thanks for their thoughtful deliberations on dozens of key water bills. This year&rsquo;s high level of engagement and collaboration amplified our association&rsquo;s voice in the Legislature and further established ACWA as among the most effective organizations of its kind in Sacramento.</p>\n', 0, '2022-10-22 09:02:55', '04.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `phone`, `email`, `message`) VALUES
(1, 'shivaay', 1111111111, 'lr727528@gmail.com', 'xxxxxxxxxxxxxxxxxxx'),
(2, 'shivam', 9123467789, 'shivaaysoni69@gmail.com', 'xxxxxxxxxxxxxxxxx'),
(3, 'shivam', 9123467789, 'shivaaysoni69@gmail.com', 'xxxxxxxxxxxxxxxxx'),
(4, 'shivam', 9123467789, 'shivaaysoni69@gmail.com', 'saaaaaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `sub_title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `thum` varchar(255) NOT NULL,
  `btn_text` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--


INSERT INTO `services` (`id`, `title`, `sub_title`, `description`, `thum`, `btn_text`) VALUES
(1, 'Android developer', 'World best services ', '<p><em>Thumbnails</em>&nbsp;are reduced-size versions of pictures or videos, used to help in recognizing and organizing them, serving the same role for images as a normal&nbsp;&nbsp;<em>Thumbnails</em>&nbsp;are reduced-size versions of pictures or videos, used to help in&nbsp;</p>\r\n', 'dashboard.png', 'Contact');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogcategory`
--
ALTER TABLE `blogcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_post`
--
ALTER TABLE `blog_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogcategory`
--
ALTER TABLE `blogcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blog_post`
--
ALTER TABLE `blog_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
--Table structure for table `Dashboard`---

CREATE TABLE `DASHBOARD` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `title1` varchar(50) NOT NULL,
    `title2` varchar(50) NOT NULL,
  `sub_title` varchar(50) NOT NULL,
  `Card1` varchar(255) NOT NULL,
  `site_title` varchar(255) NOT NULL
  `Card2` varchar(255) NOT NULL,
  `Card3` varchar(255) NOT NULL,
    `Card4` varchar(255) NOT NULL,
      `Card5` varchar(255) NOT NULL,
        `Card6` varchar(255) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;