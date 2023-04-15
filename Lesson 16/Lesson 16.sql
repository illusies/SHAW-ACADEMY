DROP TABLE IF EXISTS `employees`;

CREATE TABLE `employees`(
  `employeeNumber` int(11) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `departmentCode` varchar(10) NOT NULL,
  `jobTitle` varchar(50) NOT NULL,
  `salary` int(8) NOT NULL,
  PRIMARY KEY(`employeeNumber`),
  KEY `departmentCode`(`departmentCode`),
  CONSTRAINT `employees_ibfk_2` FOREIGN KEY (`departmentCode`) REFERENCES `departments` (`departmentCode`)
);

DROP TABLE IF EXISTS `departments`;

CREATE TABLE `departments`(
  `departmentCode` varchar(10) NOT NULL,
  `city` varchar(50) NOT NULL,
  `departmentName` varchar(50) NOT NULL,
  PRIMARY KEY(`departmentCode`)
);

DROP TABLE IF EXISTS `interviews`;

CREATE TABLE `interviews`(
  `departmentCode` varchar(10) NOT NULL,
  `role` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  CONSTRAINT `interviews_ibfk_2` FOREIGN KEY (`departmentCode`) REFERENCES `departments` (`departmentCode`)
);
