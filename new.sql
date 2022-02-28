SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_alias` varchar(30) NOT NULL,
  `name` char(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `mobile` bigint(15) NOT NULL,
  `programme` varchar(80) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `regid` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  FULLTEXT KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;
 




CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,	
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `regid` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  FULLTEXT KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ;


CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(50) NOT NULL,
  `faculty_id` varchar(50) NOT NULL,
  `Teacher provided the course outline having weekly content plan w` enum('5','4','3','2','1') NOT NULL,
  `Course objectives,learning outcomes and grading criteria are cle` enum('5','4','3','2','1') NOT NULL,
  `Course integrates throretical course concepts with the real worl` enum('5','4','3','2','1') NOT NULL,
  `Teacher is punctual,arrives on time and leaves on time` enum('5','4','3','2','1') NOT NULL,
  `Teacher is good at stimulating the interest in the course conten` enum('5','4','3','2','1') NOT NULL,
  `Teacher is good at explaining the subject matter` enum('5','4','3','2','1') NOT NULL,
  `Teacher's presentation was clear,loud ad easy to understand` enum('5','4','3','2','1') NOT NULL,
  `Teacher is good at using innovative teaching methods/ways` enum('5','4','3','2','1') NOT NULL,
  `Teacher is available and helpful during counseling hours` enum('5','4','3','2','1') NOT NULL,
  `Teacher has competed the whole course as per course outline` enum('5','4','3','2','1') NOT NULL,
  `Teacher was always fair and impartial:` enum('5','4','3','2','1') NOT NULL,
  `Assessments conducted are clearly connected to maximize learinin` enum('5','4','3','2','1') NOT NULL,
  `What I liked about the course` text NOT NULL,
  `Why I disliked about the course` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ;

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ;



INSERT INTO `admin` (`admin_id`, `user`, `pass`) VALUES
(1, 'admin@gmail.com', 'admin');



CREATE TABLE IF NOT EXISTS `faculty` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_alias` varchar(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `programme` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(75) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `date` datetime NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

INSERT INTO `faculty` (`id`, `user_alias`, `Name`, `designation`, `programme`, `email`, `password`, `mobile`, `date`, `status`) VALUES
(1, 'Sham5454', 'Shamim Rahman', 'Professor', 'Java Programming Masterclass', 'sham@gmail.com', 'shamim02', 01915605454, '2021-01-03 14:30:53', 0),
(2, 'Fahm4050', 'Fahmida Khanam', 'Lecturer', '100 Days of Code: The Complete Python Pro Bootcamp','khan@gmail.com', 'khan02', 01915604050, '2021-01-03 14:20:30', 0),
(3, 'Moha4060', 'Mohammad Uddin', 'Lecturer', '100 Days of Code: The Complete Python Pro Bootcamp','uddin@gmail.com', 'uddin02', 01915604060, '2021-01-03 14:20:32', 0),
(4, 'Wahi4070', 'Wahidul Alam', 'Lecturer', 'Web Development Bootcamp','alam@gmail.com', 'alam02', 01915604070, '2021-01-03 14:20:36', 0),
(5, 'Enam4080', 'Enamul Hoque', 'Lecturer', 'Java Programming Masterclass','hoque@gmail.com', 'hoque02', 01915604080, '2021-01-03 14:20:38', 0),
(6, 'Moha4090', 'Mohammad Saydul', 'Lecturer', 'Python for Data Science and Machine Learning Bootcamp','saydul@gmail.com', 'saydul02', 01915604090, '2021-01-03 14:20:40', 0),
(7, 'Isla5050', 'Islam Sarkar', 'Lecturer', 'Python Data Analysis & Visualization Masterclass','sarkar@gmail.com', 'sarkar02', 01915605050, '2021-01-03 14:20:42', 0),
(8, 'Atiq6050', 'Atiqur Rahman', 'Lecturer', 'Cyber Security Course','Rahman@gmail.com', 'rahman02', 01915606050, '2021-01-03 14:20:44', 0),
(9, 'Abdu7050', 'Abdul Gafur', 'Lecturer', 'Cyber Security Course','Gafur@gmail.com', 'gafur02', 01915607050, '2021-01-03 14:20:46', 0),
(10, 'Mokt8050', 'Mokter Ahmed', 'Lecturer', 'Cyber Security Course','Ahmed@gmail.com', 'ahmed02', 01915608050, '2021-01-03 14:20:48', 0),
(11, 'Anim9050', 'Animesh Biswas', 'Lecturer', '100 Days of Code: The Complete Python Pro Bootcamp','biswas@gmail.com', 'khan02', 01915609050, '2021-01-03 14:20:50', 0),
(12, 'Quiy4050', 'Quiyum Chowdhury', 'Lecturer', 'Python Data Analysis & Visualization Masterclass','chowdhury@gmail.com', 'chowdhury02', 01815604050, '2021-01-03 14:20:52', 0),
(13, 'Perv4050', 'Pervin Akter', 'Lecturer', 'Google Cloud Platform (GCP) Fundamentals','akter@gmail.com', 'akter02', 01715604050, '2021-01-03 14:20:54', 0);



