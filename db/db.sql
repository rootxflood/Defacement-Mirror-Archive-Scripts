-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2013 at 04:20 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shit`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT '',
  `image` text NOT NULL,
  `content` text NOT NULL,
  `author` varchar(50) NOT NULL DEFAULT '',
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `title`, `image`, `content`, `author`, `tanggal`) VALUES
(1, '[NEWS]: Launching HACK-DB v.0.1', 'hackdb.jpg', '<p>This script has been leaked by ./r14nul ( <a href="http://www.rianul.com" rel="dofollow" title="Rianul Web">rianul.com</a> )</p>', 'Rama Zeta', '2013-11-23 15:08:43');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `author` varchar(50) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `judul`, `deskripsi`, `author`, `tanggal`) VALUES
(1, '[EVENTS]: Mikimouse DEDEOS akbar ', '<p>Jawa Ipsum kancing nyepeng medal, sakit jaler gesang ningali, arta untu kesah pundhak ngenger dhateng nanem nginum ngadeg, numpak srengen. Lingsem, piring nedha tanem sirah nedha nama sampeyan. Kuping rekaos pamanah lek-lekan cariyos nama nanem benter margi swanten embok jampi, susu, &quot;gadhah,&quot; tangi, suku teken epek-epek ulem-ulem. Lisah jaler bucal lenggah pundhak tetak pupur sendhok wilujeng kemben--teken awan nama kirangan wawarat sima? Kapal rah purun mripat nginten ningali latu putu nyepeng ajeng yatra mbekta jejeran cundhuk, motong epek-epek sarem dalu tilem.</p>\r\n', 'Anonimus', '2013-11-16 01:30:31');

-- --------------------------------------------------------

--
-- Table structure for table `hacker`
--

CREATE TABLE IF NOT EXISTS `hacker` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `hacker` varchar(100) NOT NULL,
  `team` varchar(100) NOT NULL,
  `deface` int(5) NOT NULL,
  `special` int(5) NOT NULL,
  `onholds` int(5) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `team` (`team`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `notify`
--

CREATE TABLE IF NOT EXISTS `notify` (
  `id` int(35) NOT NULL AUTO_INCREMENT,
  `hacker` varchar(20) NOT NULL,
  `url` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `type` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `hit` varchar(30) NOT NULL,
  `regip` varchar(35) NOT NULL,
  `serip` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE IF NOT EXISTS `setting` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `subtitle` varchar(50) NOT NULL,
  `logo` varchar(50) NOT NULL,
  `footer` text NOT NULL,
  `description` varchar(100) NOT NULL,
  `jum_hal` int(3) NOT NULL,
  `contact_email` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `title`, `subtitle`, `logo`, `footer`, `description`, `jum_hal`, `contact_email`) VALUES
(1, 'HACK-DB', 'INTERNAL DOCUMENT', '/', 'Copyright &copy; 2013. AntSec.ORG & leaked by rianul.com', 'HACK-DB is a powerful script to make mirror hacking website . Made In Indonesia', 15, 'zeattacker@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE IF NOT EXISTS `team` (
  `team` varchar(100) NOT NULL,
  `member` int(15) NOT NULL,
  `tot_deface` int(15) NOT NULL,
  PRIMARY KEY (`team`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `uadmin`
--

CREATE TABLE IF NOT EXISTS `uadmin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `photo` varchar(150) NOT NULL,
  `act_code` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `uadmin`
--

INSERT INTO `uadmin` (`id`, `fname`, `uname`, `password`, `email`, `dob`, `photo`, `act_code`) VALUES
(1, 'Rama Zeta Idiot', 'zeattacker', 'b2fd623d65ae13c52036e7226045c68d', 'zeattacker@yahoo.com', '1945-08-17', 'ganteng.png', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
