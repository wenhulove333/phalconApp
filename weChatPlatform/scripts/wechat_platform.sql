-- Host: localhost    Database: wechat_platform
-- ------------------------------------------------------
-- Server version	5.5.36

--
-- Table structure for table `users`
--
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(70) NOT NULL,
  `encryptedpassword` varchar(1024) NOT NULL,
  `birthday` varchar(70) NOT NULL,
  `gender`   varchar(70) NOT NULL,
  `mobilephone`  varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL,

  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


