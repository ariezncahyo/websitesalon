-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2015 at 08:31 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `websitesalon`
--

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
`id` int(10) NOT NULL,
  `title` varchar(200) NOT NULL,
  `urltitle` varchar(200) NOT NULL,
  `body` text NOT NULL,
  `image` varchar(150) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `author` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `urltitle`, `body`, `image`, `created`, `modified`, `author`) VALUES
(1, 'About Us', 'About-Us', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id lorem sit amet tellus feugiat porta molestie pharetra ante. Integer ut neque tincidunt, suscipit tellus eu, lacinia urna. Duis eleifend purus et pellentesque malesuada. Pellentesque sed nulla ut eros hendrerit bibendum. Cras sit amet turpis aliquet, viverra mauris sed, venenatis enim. Proin quis finibus massa. Phasellus mollis at justo vitae convallis. Aliquam molestie dolor eu massa lacinia efficitur. Cras venenatis bibendum luctus. Fusce laoreet aliquam dolor et dictum.</p><p>Sed facilisis metus velit, at vehicula leo dictum vitae. Duis sed faucibus est. Sed in sem ac mi viverra ornare. Aliquam id consequat lacus. Duis sed condimentum eros, fermentum vulputate est. Phasellus sit amet dui vel erat placerat pulvinar. Nullam mauris velit, tempus ac tincidunt congue, sagittis a ligula. Quisque dapibus orci vitae molestie venenatis. Maecenas sed dolor mi. Quisque id mi ac nunc interdum mollis. Duis et lacinia lorem. Cras viverra leo ac venenatis suscipit.</p><p>Aliquam ex augue, auctor non sagittis at, ullamcorper quis eros. Aenean placerat lacus ligula, a molestie neque malesuada efficitur. Nunc pharetra ultricies odio, at imperdiet purus pulvinar sit amet. Maecenas volutpat tellus sit amet enim egestas vulputate. Curabitur vestibulum quam a ultrices ultrices. Donec gravida magna ac nisi commodo, in porttitor enim auctor. Praesent vitae porttitor magna. Cras at velit id enim porta lacinia ut eget mi. Aenean maximus congue lacus in finibus.</p><p>Suspendisse at odio lectus. Ut sed nisi sit amet velit interdum cursus a in massa. Phasellus velit urna, efficitur sed lectus sit amet, fermentum vulputate ipsum. Vivamus eget tortor condimentum, dapibus tortor mollis, volutpat nulla. Duis a pharetra purus, in porttitor diam. Aenean ut augue rutrum nibh interdum elementum in eget elit. In suscipit leo iaculis, posuere magna dignissim, molestie nulla. Mauris fermentum sollicitudin libero, eget imperdiet dui euismod vel. Phasellus felis turpis, tristique eget tortor quis, rutrum ullamcorper quam. Suspendisse potenti. Nunc iaculis mattis erat eu maximus. Pellentesque vitae lobortis massa. Suspendisse luctus euismod nulla. Praesent nibh ante, venenatis vitae dapibus id, tincidunt ac tellus.</p><p>Sed vestibulum ligula at nulla commodo, ac tempor ipsum tempus. Nullam porttitor sem ut laoreet euismod. Vestibulum venenatis et dolor eget luctus. Sed fermentum ac odio ut egestas. Suspendisse maximus tortor nec blandit congue. Nam ac tellus tempor erat gravida posuere ac a purus. Ut vel porta ligula, id mattis mauris. In lobortis hendrerit scelerisque. Donec ullamcorper, dui blandit elementum blandit, lorem tellus sollicitudin libero, vel vestibulum risus ante ut diam. Morbi a massa eget tortor laoreet aliquam bibendum quis erat. Praesent suscipit ipsum non justo scelerisque laoreet. Ut purus ex, sollicitudin eget est sit amet, auctor tempus nulla. Phasellus eu gravida massa, vel tincidunt sem. Ut malesuada varius ex, vitae interdum enim varius ac.</p>', '150x130_brainedit.jpg', '2015-02-05 11:23:13', '2015-02-05 16:34:08', 'rikdekyvere'),
(2, 'Our Services', 'Our-Services', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id lorem sit amet tellus feugiat porta molestie pharetra ante. Integer ut neque tincidunt, suscipit tellus eu, lacinia urna. Duis eleifend purus et pellentesque malesuada. Pellentesque sed nulla ut eros hendrerit bibendum. Cras sit amet turpis aliquet, viverra mauris sed, venenatis enim. Proin quis finibus massa. Phasellus mollis at justo vitae convallis. Aliquam molestie dolor eu massa lacinia efficitur. Cras venenatis bibendum luctus. Fusce laoreet aliquam dolor et dictum.</p><p>Sed facilisis metus velit, at vehicula leo dictum vitae. Duis sed faucibus est. Sed in sem ac mi viverra ornare. Aliquam id consequat lacus. Duis sed condimentum eros, fermentum vulputate est. Phasellus sit amet dui vel erat placerat pulvinar. Nullam mauris velit, tempus ac tincidunt congue, sagittis a ligula. Quisque dapibus orci vitae molestie venenatis. Maecenas sed dolor mi. Quisque id mi ac nunc interdum mollis. Duis et lacinia lorem. Cras viverra leo ac venenatis suscipit.</p><p>Aliquam ex augue, auctor non sagittis at, ullamcorper quis eros. Aenean placerat lacus ligula, a molestie neque malesuada efficitur. Nunc pharetra ultricies odio, at imperdiet purus pulvinar sit amet. Maecenas volutpat tellus sit amet enim egestas vulputate. Curabitur vestibulum quam a ultrices ultrices. Donec gravida magna ac nisi commodo, in porttitor enim auctor. Praesent vitae porttitor magna. Cras at velit id enim porta lacinia ut eget mi. Aenean maximus congue lacus in finibus.</p><p>Suspendisse at odio lectus. Ut sed nisi sit amet velit interdum cursus a in massa. Phasellus velit urna, efficitur sed lectus sit amet, fermentum vulputate ipsum. Vivamus eget tortor condimentum, dapibus tortor mollis, volutpat nulla. Duis a pharetra purus, in porttitor diam. Aenean ut augue rutrum nibh interdum elementum in eget elit. In suscipit leo iaculis, posuere magna dignissim, molestie nulla. Mauris fermentum sollicitudin libero, eget imperdiet dui euismod vel. Phasellus felis turpis, tristique eget tortor quis, rutrum ullamcorper quam. Suspendisse potenti. Nunc iaculis mattis erat eu maximus. Pellentesque vitae lobortis massa. Suspendisse luctus euismod nulla. Praesent nibh ante, venenatis vitae dapibus id, tincidunt ac tellus.</p><p>Sed vestibulum ligula at nulla commodo, ac tempor ipsum tempus. Nullam porttitor sem ut laoreet euismod. Vestibulum venenatis et dolor eget luctus. Sed fermentum ac odio ut egestas. Suspendisse maximus tortor nec blandit congue. Nam ac tellus tempor erat gravida posuere ac a purus. Ut vel porta ligula, id mattis mauris. In lobortis hendrerit scelerisque. Donec ullamcorper, dui blandit elementum blandit, lorem tellus sollicitudin libero, vel vestibulum risus ante ut diam. Morbi a massa eget tortor laoreet aliquam bibendum quis erat. Praesent suscipit ipsum non justo scelerisque laoreet. Ut purus ex, sollicitudin eget est sit amet, auctor tempus nulla. Phasellus eu gravida massa, vel tincidunt sem. Ut malesuada varius ex, vitae interdum enim varius ac.</p>', '150x130_people.jpg', '2015-02-05 11:23:28', '2015-02-05 16:34:20', 'rikdekyvere'),
(3, 'Contact', 'Contact', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id lorem sit amet tellus feugiat porta molestie pharetra ante. Integer ut neque tincidunt, suscipit tellus eu, lacinia urna. Duis eleifend purus et pellentesque malesuada. Pellentesque sed nulla ut eros hendrerit bibendum. Cras sit amet turpis aliquet, viverra mauris sed, venenatis enim. Proin quis finibus massa. Phasellus mollis at justo vitae convallis. Aliquam molestie dolor eu massa lacinia efficitur. Cras venenatis bibendum luctus. Fusce laoreet aliquam dolor et dictum.</p><p>Sed facilisis metus velit, at vehicula leo dictum vitae. Duis sed faucibus est. Sed in sem ac mi viverra ornare. Aliquam id consequat lacus. Duis sed condimentum eros, fermentum vulputate est. Phasellus sit amet dui vel erat placerat pulvinar. Nullam mauris velit, tempus ac tincidunt congue, sagittis a ligula. Quisque dapibus orci vitae molestie venenatis. Maecenas sed dolor mi. Quisque id mi ac nunc interdum mollis. Duis et lacinia lorem. Cras viverra leo ac venenatis suscipit.</p><p>Aliquam ex augue, auctor non sagittis at, ullamcorper quis eros. Aenean placerat lacus ligula, a molestie neque malesuada efficitur. Nunc pharetra ultricies odio, at imperdiet purus pulvinar sit amet. Maecenas volutpat tellus sit amet enim egestas vulputate. Curabitur vestibulum quam a ultrices ultrices. Donec gravida magna ac nisi commodo, in porttitor enim auctor. Praesent vitae porttitor magna. Cras at velit id enim porta lacinia ut eget mi. Aenean maximus congue lacus in finibus.</p><p>Suspendisse at odio lectus. Ut sed nisi sit amet velit interdum cursus a in massa. Phasellus velit urna, efficitur sed lectus sit amet, fermentum vulputate ipsum. Vivamus eget tortor condimentum, dapibus tortor mollis, volutpat nulla. Duis a pharetra purus, in porttitor diam. Aenean ut augue rutrum nibh interdum elementum in eget elit. In suscipit leo iaculis, posuere magna dignissim, molestie nulla. Mauris fermentum sollicitudin libero, eget imperdiet dui euismod vel. Phasellus felis turpis, tristique eget tortor quis, rutrum ullamcorper quam. Suspendisse potenti. Nunc iaculis mattis erat eu maximus. Pellentesque vitae lobortis massa. Suspendisse luctus euismod nulla. Praesent nibh ante, venenatis vitae dapibus id, tincidunt ac tellus.</p><p>Sed vestibulum ligula at nulla commodo, ac tempor ipsum tempus. Nullam porttitor sem ut laoreet euismod. Vestibulum venenatis et dolor eget luctus. Sed fermentum ac odio ut egestas. Suspendisse maximus tortor nec blandit congue. Nam ac tellus tempor erat gravida posuere ac a purus. Ut vel porta ligula, id mattis mauris. In lobortis hendrerit scelerisque. Donec ullamcorper, dui blandit elementum blandit, lorem tellus sollicitudin libero, vel vestibulum risus ante ut diam. Morbi a massa eget tortor laoreet aliquam bibendum quis erat. Praesent suscipit ipsum non justo scelerisque laoreet. Ut purus ex, sollicitudin eget est sit amet, auctor tempus nulla. Phasellus eu gravida massa, vel tincidunt sem. Ut malesuada varius ex, vitae interdum enim varius ac.</p>', '150x130_working.jpg', '2015-02-05 11:23:35', '2015-02-05 16:35:34', 'rikdekyvere');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
`id` int(10) unsigned NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `urltitle` varchar(200) NOT NULL,
  `body` text,
  `image` varchar(150) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `author` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `urltitle`, `body`, `image`, `created`, `modified`, `author`) VALUES
(2, 'Reprogram Your Mind', 'Reprogram-Your-Mind', 'You have so many legitimate reasons to be stressed out, your job, relationships with family and coworkers, money, no time to slow down, the government, the violence in the world or maybe you feel like there has to be more to life but you. The list could go on and on. I feel your pain!\r\n<p>\r\nYour mind has been programmed all of your life, now it’s time to reprogram your mind!</p>\r\n\r\nYou may think that you don’t have the money, you don’t have the time, the education, you’re not good enough, you’ve come too far to make a change in your life now, and OMG what would people say!!!\r\n<p>\r\nYou may have all these reasons (excuses) in your head as to why you shouldn’t or couldn’t discover a greater way of living… a greater way of life, based on what you’ve been trained to believe, so you choose to suffer in silence and just keep going so that maybe nobody will notice and you won’t notice it either.</p>\r\n\r\nAll of your life you’ve had people and society making up your mind for you. LITERALLY!\r\n\r\n<p>You’ve been told what’s right and what’s wrong.</p>\r\n\r\n<p>You’ve been told what you should and shouldn’t do.</p>\r\n\r\n<p>They’ve placed their own judgement of the world into your head.</p>\r\n\r\n<p>And they’ve filled your mind with ideas of who and what you are (or aren’t).</p>\r\n\r\n<p>Don’t you think there’s a possibility that what others have taught you is right or wrong, doesn’t make it right or wrong for you?</p>\r\n\r\n<p>Just maybe, the way they see the world isn’t how it really is from another point of view.\r\nAfter all , we all attract into our life the people and experiences that are a match to what we believe about the world.</p>\r\n\r\n<p>Absolutely, their judgement of you is more than likely way off. Every day of your life you have changed in some way, learning, growing, expanding, and finding your way.</p>\r\n\r\nDon’t you think it’s time that you got off your tushie and claimed your power?\r\n\r\nAren’t you curious who you really are…at the very core of your being? Your own unique expression of yourself… discovering your own set of beliefs.\r\n\r\nWouldn’t you love to know the real reason you were put on this amazing earth?\r\n\r\nWouldn’t it be so cool to find that you have a God-Given power to create any life you desire… to live life on your terms? (which you do!)\r\n\r\nHow sweet would it be to be living a life that you full of meaning and flavor? A life you wouldn’t trade for ANYTHING!\r\n\r\nJust think if you could see your stress transform into your dreams come true.\r\n\r\nYou choose what you think, so choose the thoughts that empower you.\r\n\r\nCreate your own set of rules. Form your own beliefs about yourself and the world around you according to what feels right to you deep in your soul. Reprogram your mind! Live on your terms!', '150x130_brainedit.jpg', '2014-10-12 02:11:29', '2015-02-04 10:52:29', 'rikdekyvere'),
(3, 'If We Did All the Things We Are Capable Of', 'If-We-Did-All-the-Things-We-Are-Capable-Of', '<p>Thomas Edison is credited with saying,&nbsp;<em>&ldquo;If we did all the things that we are capable of, we would literally astound ourselves.&rdquo;</em></p><p>What a great statement!</p><p>Just imagine for a moment a world in which you:</p><ul><li>Perform at an elite level,</li><li>Maximise&nbsp;your&nbsp;contribution every day,</li><li>Use&nbsp;your&nbsp;skills for the benefit of others,</li><li>Never stop learning or growing,</li><li>Take&nbsp;risks and aren&rsquo;t&nbsp;afraid to innovate,</li><li>Don&rsquo;t give up at the first sign of difficulty or criticism,</li><li>Work where you can&nbsp;do what you are best at most of the time.</li></ul><p>Are you astounded yet?</p><p>My suspicion is that the greatest&nbsp;leaders, the best athletes, the most proficient&nbsp;musicians and the most remarkable contributors to our society find a way to do these things&nbsp;more often than others.</p><p>The good news is that if you haven&rsquo;t been doing all that you are capable of yet, it&rsquo;s never too late.</p><p>You can start today.</p><p>You can set a new standard for your work.</p><p>You can astound yourself and everyone else around you!</p>', '150x130_people.jpg', '2014-10-12 07:11:46', '2015-02-06 09:37:14', 'rikdekyvere'),
(6, 'What You Say Will Affect Your Day', 'What-You-Say-Will-Affect-Your-Day', 'If you’re having a bad day or are just looking to improve the quality of your life, remember this important lesson, what you say will affect your day.\r\n<p>\r\nThere’s no point complaining or whining about your situation, it will only make you feel worse.\r\n</p>\r\nFind something in your life that you can be grateful for and notice the difference.\r\n<p>\r\nThere’s nothing to be gained from highlighting the problems that you have.\r\n</p>\r\nBut you will benefit from discussing possible solutions.\r\n<p>\r\nAnd constantly putting your kids, co-workers or anyone else down does no-one any good.\r\n</p>\r\nHowever, there are significant gains from highlighting the positive attributes of the people around you and encouraging them in their endeavours.\r\n<p>\r\nSo what are you saying about today?\r\n</p>\r\nIs it just another day, or is it a fantastic opportunity to do something remarkable?\r\n<p>\r\nI know that it’s easy to fall into a habit of speaking in a manner that defines your life in negative terms, but it’s important to remember that what you say affects your day.\r\n</p>\r\nAnd you may not be able to choose your circumstances, but you can always choose your words.', '150x130_people.jpg', '2014-10-12 02:11:29', '2015-02-04 10:59:57', 'rikdekyvere'),
(7, 'Bored to Death, A Story About Why We Need Work', 'Bored-to-Death,-A-Story-About-Why-We-Need-Work', 'There is an old story that I’ve heard many times of a young man who died and found himself in a very beautiful place, surrounded by all the comfort and beauty that he had dreamed of.\r\n<p>\r\nA figure dressed in white came up to him: “You are entitled to anything you want.”</p>\r\n\r\nEnchanted, the young man did everything that he had dreamed of during life.\r\n<p>\r\nHowever, after many years of pleasure, he sought out the figure in white.</p>\r\n\r\nHe explained that he had experienced everything and that now he needed a little work to make him feel useful.\r\n<p>\r\n“That’s the only thing I cannot get for you,” said the figure in white.</p>\r\n\r\n“But I’ll spend eternity dying of boredom! I’d much rather be in hell!”\r\n<p>\r\n“And where do you think you are?”\r\n</p>\r\nI love this story as it is a reminder that although we dream of extended vacations and early retirement, we need work to stimulate our minds, keep ourselves occupied and to find purpose and meaning in our lives.\r\n<p>\r\nEven in the story of the Garden of Eden, which seems like such an idyllic place, “The Lord God took the man and put him in the Garden of Eden to work it and take care of it.” (Genesis 2:15)\r\n</p>\r\nWe were born to work and there is a plan and purpose for our lives that involves effort, sweat, growth and grunt.\r\n<p>\r\nToo often our dream is to avoid work.\r\n</p>\r\nWouldn’t it be better if we all just found meaningful work to do?', '150x130_working.jpg', '2014-10-12 02:11:29', '2015-02-04 11:01:29', 'rikdekyvere');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` text NOT NULL,
  `role` varchar(20) DEFAULT NULL,
  `join_date` text NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `role`, `join_date`, `created`, `modified`) VALUES
(15, 'administrator', '25e4ee4e9229397b6b17776bfceaf8e7kjeuj876..hyjj578', 'info@company.com', NULL, '', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
 ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
