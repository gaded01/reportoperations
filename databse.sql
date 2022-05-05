CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `id_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middlename` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `campus_id` int(30) NOT NULL,
  `role_id` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE `fileuploads` (
  `id` int(11) NOT NULL,
  `from_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to_date` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_id` int(11) NOT NULL,
  `filename` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filepath` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `campus_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `campus` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `name` varchar(155) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text(255),
  `date` 
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `pt_q1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pt_q2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pt_q3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pt_q4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pt_total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pa_q1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pa_q2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pa_q3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pa_q4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pa_total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
  `pa_total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `campus_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;