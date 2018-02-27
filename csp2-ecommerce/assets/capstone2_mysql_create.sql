CREATE TABLE `users` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`address_id` INT NOT NULL,
	`role_id` INT NOT NULL,
	`first_name` varchar(30) NOT NULL,
	`last_name` varchar(30) NOT NULL,
	`email` varchar(30) NOT NULL UNIQUE,
	`password` varchar(40) NOT NULL,
	`registration_date` DATETIME NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `roles` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`description` varchar(20) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `genres` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`description` varchar(20) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `orders` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`customer_id` INT NOT NULL,
	`order_status_id` INT NOT NULL,
	`payment_options_id` INT NOT NULL,
	`reference_no` INT(11) NOT NULL UNIQUE,
	`order_date` DATETIME NOT NULL UNIQUE,
	`total_price` DECIMAL(10, 2) NOT NULL,
	`shipping_date` DATETIME NOT NULL,
	`delivery_address1` varchar(255) NOT NULL,
	`delivery_address2` varchar(255) NOT NULL,
	`country` varchar(30) NOT NULL,
	`zip_code` INT(10) NOT NULL,
	`mobile_no` varchar(30) NOT NULL,
	`telephone_no` varchar(30) NOT NULL,
	`email` varchar(50) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `books` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`title` varchar(100) NOT NULL,
	`author_id` INT NOT NULL,
	`genre_id` INT NOT NULL,
	`quantity` INT NOT NULL,
	`description` varchar(255) NOT NULL,
	`ISBN` varchar(30) NOT NULL,
	`price` DECIMAL(10, 2) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `order_items` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`order_id` INT NOT NULL,
	`book_id` INT NOT NULL,
	`gross_price` DECIMAL(10, 2) NOT NULL,
	`quantity` INT NOT NULL,
	`discount` DECIMAL(10, 2) NOT NULL,
	`net_price` DECIMAL(10, 2) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `order_statuses` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`name` varchar(20) NOT NULL,
	`description` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `authors` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`first_name` varchar(50) NOT NULL,
	`last_name` varchar(50) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `payment_options` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`type` varchar(50) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `addresses_book` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`address_line1` varchar(255) NOT NULL,
	`address_line2` varchar(255) NOT NULL,
	`country` varchar(100) NOT NULL,
	`city` varchar(50) NOT NULL,
	`zip_code` INT(4) NOT NULL,
	PRIMARY KEY (`id`)
);

ALTER TABLE `users` ADD CONSTRAINT `users_fk0` FOREIGN KEY (`address_id`) REFERENCES `addresses_book`(`id`);

ALTER TABLE `users` ADD CONSTRAINT `users_fk1` FOREIGN KEY (`role_id`) REFERENCES `roles`(`id`);

ALTER TABLE `orders` ADD CONSTRAINT `orders_fk0` FOREIGN KEY (`customer_id`) REFERENCES `users`(`id`);

ALTER TABLE `orders` ADD CONSTRAINT `orders_fk1` FOREIGN KEY (`order_status_id`) REFERENCES `order_statuses`(`id`);

ALTER TABLE `orders` ADD CONSTRAINT `orders_fk2` FOREIGN KEY (`payment_options_id`) REFERENCES `payment_options`(`id`);

ALTER TABLE `books` ADD CONSTRAINT `books_fk0` FOREIGN KEY (`author_id`) REFERENCES `authors`(`id`);

ALTER TABLE `books` ADD CONSTRAINT `books_fk1` FOREIGN KEY (`genre_id`) REFERENCES `genres`(`id`);

ALTER TABLE `order_items` ADD CONSTRAINT `order_items_fk0` FOREIGN KEY (`order_id`) REFERENCES `orders`(`id`);

ALTER TABLE `order_items` ADD CONSTRAINT `order_items_fk1` FOREIGN KEY (`book_id`) REFERENCES `books`(`id`);

