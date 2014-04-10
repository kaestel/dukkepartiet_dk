CREATE TABLE `SITE_DB`.`item_bill` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,

  `name` varchar(255) NOT NULL,
  `bill` text NOT NULL,

  `position` int(11) DEFAULT '0',

  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `item_id` (`item_id`),
  CONSTRAINT `item_bill_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;