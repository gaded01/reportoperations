CREATE TABLE `department` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `department` varchar(155) NOT NULL,
  `agency` varchar(155) NOT NULL,
  `quarter` varchar(155) NOT NULL,
  `op_unit` varchar(155) NOT NULL,
  `unique_id` varchar(155) NOT NULL,
  PRIMARY KEY (ID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `campus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (ID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `department_lines` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `row_title` varchar(255) NOT NULL,
  `uacs_code` varchar(255) NOT NULL,
  `pt_q1` varchar(255) NOT NULL,
  `pt_q2` varchar(255) NOT NULL,
  `pt_q3` varchar(255) NOT NULL,
  `pt_q4` varchar(255) NOT NULL,
  `pt_total` varchar(255) NOT NULL,
  `pa_q1` varchar(255) NOT NULL,
  `pa_q2` varchar(255) NOT NULL,
  `pa_q3` varchar(255) NOT NULL,
  `pa_q4` varchar(255) NOT NULL,
  `pa_total` varchar(255) NOT NULL,
  `variance` varchar(255) NOT NULL,
  `remarks` text(255) NOT NULL,
  `row` varchar(30) NOT NULL,
  `campus_id` varchar(255) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `unique_id` varchar(30) NOT NULL,
  `row_count` int(155) NOT NULL,
  PRIMARY KEY (ID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(155) NOT NULL,
  `description` text(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `filepath` varchar(255) DEFAULT NULL,
   PRIMARY KEY (ID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `fileuploads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from_date` varchar(255) NOT NULL,
  `to_date` varchar(30) NOT NULL,
  `office_id` varchar(30) DEFAULT NULL,
  `type_id` int(11) NOT NULL,
  `filename` varchar(125) NOT NULL,
  `filepath` varchar(125) NOT NULL,
  `year` varchar(30) NOT NULL,
  `role_id` varchar(30) NOT NULL,
  PRIMARY KEY (ID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `office` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `campus_id` varchar(255) NOT NULL,
  PRIMARY KEY (ID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (ID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_no` varchar(255) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `campus_id` int(30) NOT NULL,
  `role_id` varchar(30) NOT NULL,
  `department_id` varchar(30) NOT NULL,
  `office_id` int(11) NOT NULL,
  PRIMARY KEY (ID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;