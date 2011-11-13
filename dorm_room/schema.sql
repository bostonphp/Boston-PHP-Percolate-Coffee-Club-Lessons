# Dump of table orders
# ------------------------------------------------------------

CREATE TABLE `orders` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` text,
  `email` text,
  `cheese_slices` int(11) DEFAULT NULL,
  `musroom_slices` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
