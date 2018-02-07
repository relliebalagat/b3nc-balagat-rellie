CREATE TABLE `users` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`username` varchar(255) NOT NULL UNIQUE,
	`password` varchar(255) NOT NULL,
	`email` varchar(255) NOT NULL UNIQUE,
	`first_name` varchar(255) NOT NULL,
	`last_name` varchar(255) NOT NULL,
	`role` int(30) NOT NULL,
	`image` varchar(255) NOT NULL UNIQUE,
	`address` varchar(255) NOT NULL,
	`contact` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `items` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(100) NOT NULL,
	`description` varchar(255) NOT NULL,
	`price` DECIMAL NOT NULL,
	`stocks_id` int(11) NOT NULL,
	`category_id` int(100) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `order_items` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`item_id` int(11) NOT NULL,
	`quantity` int(11) NOT NULL,
	`subtotal` DECIMAL NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `category` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`description` varchar(100) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `orders` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`reference_number` int(11) NOT NULL UNIQUE,
	`status` int(11) NOT NULL,
	`total` DECIMAL NOT NULL,
	`order_id` int NOT NULL,
	`user_id` int(11) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `user_roles` (
	`id` int NOT NULL AUTO_INCREMENT,
	`role` varchar(50) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `status` (
	`id` int NOT NULL AUTO_INCREMENT,
	`status_description` varchar(100) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `stocks` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`item_id` int(11) NOT NULL,
	`quantity` int(11) NOT NULL,
	PRIMARY KEY (`id`)
);

ALTER TABLE `users` ADD CONSTRAINT `users_fk0` FOREIGN KEY (`role`) REFERENCES `user_roles`(`id`);

ALTER TABLE `items` ADD CONSTRAINT `items_fk0` FOREIGN KEY (`stocks_id`) REFERENCES `stocks`(`id`);

ALTER TABLE `items` ADD CONSTRAINT `items_fk1` FOREIGN KEY (`category_id`) REFERENCES `category`(`id`);

ALTER TABLE `order_items` ADD CONSTRAINT `order_items_fk0` FOREIGN KEY (`item_id`) REFERENCES `items`(`id`);

ALTER TABLE `orders` ADD CONSTRAINT `orders_fk0` FOREIGN KEY (`status`) REFERENCES `status`(`id`);

ALTER TABLE `orders` ADD CONSTRAINT `orders_fk1` FOREIGN KEY (`order_id`) REFERENCES `order_items`(`id`);

ALTER TABLE `orders` ADD CONSTRAINT `orders_fk2` FOREIGN KEY (`user_id`) REFERENCES `users`(`id`);

ALTER TABLE `stocks` ADD CONSTRAINT `stocks_fk0` FOREIGN KEY (`item_id`) REFERENCES `items`(`id`);

