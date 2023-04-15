DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories`(
`categoryCode` int(10) NOT NULL,
`categoryName` varchar(50) NOT NULL,
`categoryDescription` varchar(120) NOT NULL,
PRIMARY KEY(`categoryCode`)
);

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products`(
`productCode` int(11) NOT NULL,
`productName` varchar(50) NOT NULL,
`productPrice` int(8) NOT NULL,
`categoryCode` int(10) NOT NULL,
PRIMARY KEY(`productCode`),
KEY `categoryCode`(`categoryCode`),
CONSTRAINT `products_fk` FOREIGN KEY(`categoryCode`) REFERENCES `categories`('categoryCode')
);

ALTER TABLE products
ADD productDescription varchar(120) NOT NULL;
