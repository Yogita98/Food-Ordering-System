CREATE TABLE `order1` (
 `order_id` int(11) NOT NULL AUTO_INCREMENT,
 `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
 `last_name` varchar(100) COLLATE utf8_unicode_ci NULL,
 `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
 `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
 `phone_no`int(2) NOT NULL,
 `item_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
 `quantity` int(2) NOT NULL,
 `rate` int(3) NOT NULL,
 `total_price` int(3) NOT NULL,
 `id` int(11) NOT NULL,
PRIMARY KEY (`order_id`),
FOREIGN KEY (`id`) REFERENCES users(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;