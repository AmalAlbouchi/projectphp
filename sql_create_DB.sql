-- Exported from QuickDBD: https://www.quickdatatabasediagrams.com/

DROP TABLE IF EXISTS `projectphp.product`;
DROP TABLE IF EXISTS `projectphp.user`;
DROP TABLE IF EXISTS `projectphp.review`;
DROP TABLE IF EXISTS `projectphp.commandes`;

CREATE TABLE `product` (
    `ID` int UNSIGNED NOT NULL AUTO_INCREMENT,
    `name` varchar(20)  NOT NULL ,
    `price` float  NOT NULL ,
    `description` text  NOT NULL ,
    `brief-descr` varchar(255)  NOT NULL ,
    `rate` float MAX(5) MIN(0),
    `p_rating` int UNSIGNED DEFAULT 0,
    `category` int  NOT NULL ,
    `image` file  ,
    `image_name` varchar(255) ,
    PRIMARY KEY (
        `ID`
    )
);

CREATE TABLE `review` (
    `text` text  NOT NULL ,
    `username` varchar(20)  NOT NULL ,
    `id` int  NOT NULL ,
    `date_review` Date  DEFAULT GETDATE()
);

CREATE TABLE `user` (
    `username` varchar(20)  NOT NULL ,
    `password` varchar(20)  NOT NULL ,
    `gender` bool ,
    `first_name` varchar(20)  NOT NULL ,
    `last_name` varchar(20)  NOT NULL ,
    `email` varchar(50)  NOT NULL ,
    `address` varchar(50)  NOT NULL ,
    `date_sign` date  DEFAULT GETDATE() ,
    `phone` text  NOT NULL ,
    PRIMARY KEY (
        `username`
    )
);

CREATE TABLE `commandes` (
    `username` varchar(20)  NOT NULL ,
    `id` int  NOT NULL ,
    `date_comm` date  DEFAULT GETDATE()
);

ALTER TABLE `review` ADD CONSTRAINT `fk_review_username` FOREIGN KEY(`username`)
REFERENCES `user` (`username`);

ALTER TABLE `review` ADD CONSTRAINT `fk_review_id` FOREIGN KEY(`id`)
REFERENCES `product` (`ID`);

ALTER TABLE `commandes` ADD CONSTRAINT `fk_commandes_username` FOREIGN KEY(`username`)
REFERENCES `user` (`username`);

ALTER TABLE `commandes` ADD CONSTRAINT `fk_commandes_id` FOREIGN KEY(`id`)
REFERENCES `product` (`ID`);
