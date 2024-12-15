
/*database name = dishlogin*/

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_uid` tinytext NOT NULL,
  `users_pwd` longtext NOT NULL,
  `users_email` tinytext NOT NULL,
  PRIMARY KEY (`users_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4