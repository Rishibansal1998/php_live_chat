-- Set MySQL timezone to UTC
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET GLOBAL time_zone = "+00:00";
-- Table structure for table `chatters`
CREATE TABLE `chatters` (
    `id` int(11) NOT NULL,
    `name` text NOT NULL,
    `email` varchar(255) NOT NULL DEFAULT '',
    `password` varchar(255) NOT NULL DEFAULT '123456',
    `seen` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Table structure for table `messages`
CREATE TABLE `messages` (
    `id` int(11) NOT NULL,
    `name` text NOT NULL,
    `msg` text NOT NULL,
    `posted` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;