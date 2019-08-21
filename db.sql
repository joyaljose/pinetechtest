database : test

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `c_firstname` varchar(45) NOT NULL,
  `c_lastname` varchar(45) NOT NULL,
  `c_email` varchar(150) NOT NULL,
  `c_password` varchar(150) NOT NULL,
  `d_dob` date NOT NULL,
  PRIMARY KEY (`id`,`c_email`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
