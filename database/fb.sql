SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";



CREATE TABLE  `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;



INSERT INTO `admin` (`id`, `user`, `pass`) VALUES
(1, 'admin@gmail.com', 'admin');






CREATE TABLE `feedback`(
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(50) NOT NULL,
 `Relevance or usefulness of the topics covered in the course` enum('5','4','3','2','1') NOT NULL,
 `Regularity of the class` enum('5','4','3','2','1') NOT NULL,
 `Pace of delivery of content` enum('5','4','3','2','1') NOT NULL,
 `Enthusiasm and preparedness in teaching the subject` enum('5','4','3','2','1') NOT NULL,
 `Clarity of presentation or teaching techniques` enum('5','4','3','2','1') NOT NULL,
 `Stimulation of interest in the subject` enum('5','4','3','2','1') NOT NULL,
 `Consistency of the question paper (coverage and balance)` enum('5','4','3','2','1') NOT NULL,
 `Workload of this course in comparison with other courses` enum('5','4','3','2','1') NOT NULL,
 `Your effort in studying the course` enum('5','4','3','2','1') NOT NULL,
 `What I liked about the course` text NOT NULL,
 `Why I disliked about the course` text NOT NULL,

 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `feedback` (`id`, `student_id`, `Relevance or usefulness of the topics covered in the course`, 
`Regularity of the class`, `Pace of delivery of content`,
 `Enthusiasm and preparedness in teaching the subject`, 
 `Clarity of presentation or teaching techniques`, `Stimulation of interest in the subject`,
  `Consistency of the question paper (coverage and balance)`, 
  `Workload of this course in comparison with other courses`, 
  `Your effort in studying the course`, `What I liked about the course`,
   `Why I disliked about the course`) VALUES ('1', 'sakshi@gmail.com', '4', '3', '2', '4', '1', '2', '5', '1', '4', '123', '123');











CREATE TABLE `user`(
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `branch` varchar(60) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `dob` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  FULLTEXT KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


