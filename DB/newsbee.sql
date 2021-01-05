-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2021 at 11:54 AM
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
-- Database: `newsbee`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `title` varchar(400) NOT NULL,
  `url` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `des` varchar(400) NOT NULL,
  `source` varchar(100) NOT NULL,
  `news_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `author` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `url`, `image`, `des`, `source`, `news_date`, `author`, `category`, `description`, `created_at`) VALUES
(12, 4, 'Witnesses Claim To Have Spotted A UFO Over A Hawaiian Island, Video Shows Blue Object Falling Into The Sea', 'https://www.indiatimes.com/trending/wtf/ufo-oahu-hawaiian-island-video-531100.html', 'https://im.indiatimes.in/content/2021/Jan/F-B-_5ff2dbe0bfa29.jpg', 'Very good', 'Indiatimes', '2021-01-04 05:41:08', 'Shreya Chauhan', 'general', 'Federal Aviation Administration officials told HNN there were no aircraft incidents or accidents at the time in the area.', '2021-01-04 17:12:55'),
(16, 4, 'Even Though We Pay A Lot, Do You Know How Much Money A Farmer Actually Makes In India?', 'https://www.indiatimes.com/trending/social-relevance/how-much-do-farmers-actually-make-in-india-531102.html', 'https://im.indiatimes.in/content/2021/Jan/farmers-earning_5ff2f1ab84baf.jpg', 'Very good', 'Indiatimes', '2021-01-04 05:41:08', 'Aishwarya Dharni', 'general', 'Farmers need half of what they grow to feed their own family as well. They sell the other half to private traders who are also called middlemen; they charge a hefty commission to the farmers to bring his produce to the market.', '2021-01-04 17:13:13'),
(17, 4, 'England tour to Sri Lanka: Moeen Ali tests positive for COVID-19 on arrival in Sri Lanka', 'https://xtratime.in/england-tour-to-sri-lanka-moeen-ali-tests-positive-for-covid-19-on-arrival-in-sri-lanka/', 'image/bann.png', 'Great news :3', 'Xtratime', '2021-01-04 08:17:52', 'XtraTime', 'sports', 'Xtra Time Web Desk: England spinner Moeen Ali has tested positive for COVID-19 following PCR tests administered on arrival at the airport in Hambantota on Sunday, confirmed the England and&#8230;\nThe post England tour to Sri Lanka: Moeen Ali tests positive for COVID-19 on arrival in Sri Lanka first appeared on XtraTime | To get the best and exclusive sporting news, keep watching XtraTime.', '2021-01-04 17:37:45'),
(18, 4, 'Marico share rises over 3% after firm posts double-digit volume growth in Q3', 'https://www.businesstoday.in/markets/company-stock/marico-share-rises-double-digit-volume-growh-in-q3/story/426925.html', 'image/bann.png', 'Great news :3', 'businesstoday', '2021-01-04 06:09:13', '', 'general', 'Marico stock touched an intraday high of Rs 419.25, rising 3.06% against previous close of Rs 406.80 on BSE', '2021-01-04 17:37:49'),
(19, 4, 'TCS share crosses Rs 3,000 mark as IT stocks rise ahead of Q3 earnings', 'https://www.businesstoday.in/markets/company-stock/tcs-share-crosses-rs-3000-mark-as-it-stocks-rise-ahead-of-q3-earnings/story/426921.html', 'image/bann.png', 'Great news :3', 'businesstoday', '2021-01-04 05:46:02', '', 'general', 'TCS stock has risen 5.89% in the last 2 days. Market cap of the IT stock stood at Rs 11,40,443.52 crore during today\'s closing session', '2021-01-04 17:37:53'),
(20, 4, 'Space Object That Entered Solar System In 2017 Was \'Alien Junk\', Claims Harvard Professor', 'https://www.indiatimes.com/news/world/space-object-oumuamua-that-entered-solar-system-in-2017-alien-junk-claims-harvard-professor-531093.html', 'https://im.indiatimes.in/content/2021/Jan/13_5ff2dd23406b1.jpg', 'Great news :3', 'Indiatimes', '2021-01-04 05:41:08', 'Somak Adhikari', 'general', 'He says it could be alien trash', '2021-01-04 17:37:56'),
(21, 2, 'COVID-19: Ontario reports 3,270 new cases; students back in virtual class', 'https://ottawacitizen.com/news/local-news/covid-19-ontario-reports-3270-new-cases-students-back-in-virtual-class', 'image/bann.png', 'Oh fuck ', 'Ottawa Citizen', '2021-01-04 11:02:02', 'Taylor Blewett', 'general', 'Ontario reported 3,270 new cases of COVID-19 on Monday, the third time in the last five days that the newly-reported infections have exceeded 3,000 in a 24-hour period. And Monday&#8217;s total wasn&#8217;t far behind the record set over the weekend, when 3,363 new cases were reported Saturday. A cohort of health units that have fairly [&#8230;]', '2021-01-04 17:39:19'),
(22, 2, 'Son, 15, accused of beating mom to death on surveillance video in Texas', 'https://globalnews.ca/news/7553592/son-15-mom-beating-death-surveillance-video-texas/', 'https://globalnews.ca/wp-content/uploads/2020/06/17-ave-shooting-police-tape.jpg?quality=85&strip=all&w=720&h=480&crop=1', 'Oh fuck ', 'chbcnews', '2021-01-04 11:01:12', 'Josh K. Elliott', 'general', 'The incident happened early Sunday at the family home in McKinney, Texas, according to police.', '2021-01-04 17:39:24'),
(25, 2, 'Armed Forces keep wary eye on TikTok', 'https://www.winnipegfreepress.com/breakingnews/armed-forces-keep-wary-eye-on-tiktok-573523212.html', 'image/bann.png', 'Oh fuck ', 'Winnipeg Free Press', '2021-01-04 11:00:17', '', 'general', 'Armed Forces keep wary eye on TikTok', '2021-01-04 17:39:39'),
(26, 2, 'Prospective candidates take first steps ahead of Calgary\'s 2021 municipal election', 'https://calgary.ctvnews.ca/prospective-candidates-take-first-steps-ahead-of-calgary-s-2021-municipal-election-1.5252724', 'https://www.ctvnews.ca/polopoly_fs/1.4529242.1564491016!/httpImage/image.jpeg_gen/derivatives/landscape_300/image.jpeg', 'Oh fuck ', 'calgary', '2021-01-04 10:56:50', 'Ryan White', 'general', 'Elections Calgary has begun accepting applications from prospective candidates for this fall\'s municipal election.', '2021-01-04 17:39:43'),
(28, 2, 'U.S. to face Canada for gold after beating Finland 4-3 at World Juniors', 'https://globalnews.ca/news/7555511/world-juniors-2021-usa-finland/', 'https://globalnews.ca/wp-content/uploads/2021/01/CP114413032-e1609823879422.jpg?quality=85&strip=all&w=720&h=480&crop=1', 'Ah KI jala FUCK\neiofioedfjewfj\n\newopfiowef\neofuweiofj\newifoweof', 'chbcnews', '2021-01-04 23:23:55', '', 'general', 'Arthur Kaliyev broke a 3-3 deadlock with 1:16 to go with a snap shot from the slot to advance the Americans into the gold-medal game against Canada.', '2021-01-05 06:06:26'),
(30, 5, 'The business of our industry is likely to double in the next four years: Atul Sahai, CMD, New India Assurance', 'https://www.zeebiz.com/companies/news-the-business-of-our-industry-is-likely-to-double-in-the-next-four-years-atul-sahai-cmd-new-india-assurance-145152', 'image/bann.png', 'Kuddos!! ', 'Zee Business', '2021-01-05 00:03:18', 'zee business', 'business', 'Atul Sahai, Chairman cum Managing Director (CMD), New India Assurance Co Ltd, talks about growth expectation in the new decade (2021-2030), insurance industry outlook, challenges, budget expectations and price increase among others during a candid chat with Swati Khandelwal, Zee Business', '2021-01-05 06:33:29'),
(31, 5, 'Greenlam Industries is a stock to buy II On Anil Singhvi show, here is what Sandeep Jain recommends', 'https://www.zeebiz.com/market-news/news-greenlam-industries-is-a-stock-to-buy-on-anil-singhvi-show-here-is-what-sandeep-jain-recommends-145151', 'image/bann.png', 'Kuddos!! ', 'Zee Business', '2021-01-05 00:02:42', 'zee business', 'business', 'Sandeep Jain today picked Greenlam Industries as a stock to buy with a long term perspective. This stock is currently trading around Rs 820. He said that the reason behind recommending Greenlam Industries stock is that rural India is driving the demand for the products of the company. Analyst Sandeep Jain recommended his top pick in today\'s edition of ‘Jain Sahab Ke Gems’ show with Zee Business Managing Editor Anil Singhvi. Know why Greenlam Industries stock has a potential to earn high returns ', '2021-01-05 06:33:50'),
(32, 5, 'Wednesday 2/3: We Want to Do More than Just Survive', 'https://www.indybay.org/newsitems/2020/12/28/18839111.php', 'https://www.indybay.org/uploads/2020/12/28/480_dr_bettina_love_author_of_we_want_to_do_more_than_just_survive.jpg', 'Oh my gos', 'indybay', '2021-01-05 00:05:51', 'Otter Cross Cultural Center, CSUMB', 'general', 'Online Event:\nhttps://csumb.edu/osu/we-want-do-more-just-survive', '2021-01-05 06:35:29'),
(33, 5, 'Lawmakers, now’s not the time to pad your pay', 'https://www.lowellsun.com/2021/01/05/lawmakers-nows-not-the-time-to-pad-your-pay/', 'https://www.lowellsun.com/wp-content/uploads/2021/01/StateHousenc6.jpg?w=1400px&strip=all', 'Exterordernary ', 'Lowell Sun', '2021-01-05 00:02:19', 'Editorial', 'general', 'It would be difficult to find anyone not glad to move on from 2020. Likewise, it would be difficult to find a group more enthused to see 2021 arrive than our state legislators. Coming off a year that saw a coronavirus pandemic infect nearly 390,000 Massachusetts residents and cause more than 12,500 deaths, shutter countless [&#8230;]', '2021-01-05 06:35:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `join_date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `country` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `join_date`, `country`, `name`) VALUES
(2, 'iammarajul', 'm.marajul@gmail.com', '$2y$10$dnKKV.jklZfaakOPSVNDje4phoXrgyRcCh28fLnrBb/qWQ4rm0rTK', '2021-01-02 18:29:17.000000', 'ca', 'Marajul islam'),
(3, 'marajul', 'marajul@gmail.com', '$2y$10$rbUBPbJzFex8PcR3ebCod.9XitYyd6ojeeTJ901xtXfprkVmvvpyG', '2021-01-02 18:32:52.000000', 'in', 'Marajul islam'),
(4, 'marajul1', 'marajul1@gmail.com', '$2y$10$61SI9qTqJ.0CXMTNAgSW6OqQdFGZeXi7md9JPY6OOxl/hRPUY6kFm', '2021-01-02 18:33:11.000000', 'in', 'Marajul islam'),
(5, 'iammarajul3', 'marajul4@gmail.com', '$2y$10$nnzoVSJ/KCrhvigZTXqtRuFfgHBWKCWbXhxQ796mFI803quuMWd0y', '2021-01-02 18:33:33.000000', 'us', 'Marajul islam'),
(6, 'iammarajul5', 'm1.marajul@gmail.com', '$2y$10$muJ.2c9pLEAPNQfcqx7pHep8joNFq6Scw1LYFublbkH2hwmovk1Aq', '2021-01-02 18:37:15.000000', 'us', 'Marajul islam'),
(7, 'Masiur', 'masiur@gmail.com', '$2y$10$8qcfpB.4nXPvRwSrj4f6/.vGeUr4DtBj8VSI6Yxeugy8Zyy84x1IK', '2021-01-05 06:59:28.284697', 'tr', 'masiur hasan ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
