-- MySQL dump 10.13  Distrib 5.7.21, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: bookstore_capstone2
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.30-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `authors`
--

DROP TABLE IF EXISTS `authors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `authors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `authors`
--

LOCK TABLES `authors` WRITE;
/*!40000 ALTER TABLE `authors` DISABLE KEYS */;
INSERT INTO `authors` VALUES (1,'Malcolm','Gladwell'),(2,'Herbert','Schildt'),(3,'J.R.R.','Tolkien'),(4,'C.S.','Lewis'),(5,'Dan','Brown'),(6,'Walter','Isaacson'),(7,'John','Le Carre'),(8,'Ashlee','Vance'),(9,'John','Duckett'),(10,'Yann','Martel'),(11,'Daniel','Pink'),(12,'George','Orwell'),(13,'Dale','Carnegie'),(14,'Harper','Lee'),(15,'Mitch','Albom'),(16,'William','Golding'),(17,'Gabriel','Garcia Marquez'),(18,'Lois','Lowry'),(19,'John','Grisham'),(20,'Anne','Frank'),(21,'Lewis','Caroll'),(22,'J.K.','Rowling'),(23,'E.B.','White'),(24,'Antoine de','Saint-Exupery'),(25,'Dr.','Seuss'),(26,'Donald ','Knuth'),(27,'E.B.','White'),(28,'Zed','Shaw'),(29,'Aditya','Bhargava'),(30,'Robert','Martin'),(31,'Steve','Krug');
/*!40000 ALTER TABLE `authors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `author_id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `books_fk0` (`author_id`),
  KEY `books_fk1` (`genre_id`),
  CONSTRAINT `books_fk0` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`),
  CONSTRAINT `books_fk1` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `books`
--

LOCK TABLES `books` WRITE;
/*!40000 ALTER TABLE `books` DISABLE KEYS */;
INSERT INTO `books` VALUES (1,'Outliers',1,2,5,'In this stunning new book, Malcolm Gladwell takes us on an intellectual journey through the world of \"outliers\"--the best and the brightest, the most famous and the most successful.',349.00,'assets/img/product-images/outliers.png'),(2,'The Chronicles of Narnia',4,3,5,'The Chronicles of Narnia is a series of seven fantasy novels by C. S. Lewis. It is considered a classic of children\'s literature and is the author\'s best-known work, having sold over 100 million copies in 47 languages.',1610.11,'assets/img/product-images/narnia.jpg'),(3,'Java: The Complete Reference 10th edition',2,4,5,'Fully updated for Java SE 9, Java: The Complete Reference, Tenth Edition explains how to develop, compile, debug, and run Java programs.',1713.99,'assets/img/product-images/java-complete-reference.png'),(4,'The Lord of the Rings',3,3,5,'The Lord of the Rings is an epic high fantasy novel written by English author and scholar J. R. R. Tolkien. The story began as a sequel to Tolkien\'s 1937 fantasy novel The Hobbit, but eventually developed into a much larger work.',754.15,'assets/img/product-images/the-lord-of-the-rings.gif'),(5,'The Da Vinci Code',5,1,5,'A fascinating and absorbing thriller -- perfect for history buffs, conspiracy nuts, puzzle lovers or anyone who appreciates a great, riveting story.',415.51,'assets/img/product-images/the-da-vince-code.jpg'),(6,'Steve Jobs',6,2,5,'In Steve Jobs: The Exclusive Biography, Isaacson provides an extraordinary account of Jobs\' professional and personal life.',614.44,'assets/img/product-images/steve-jobs.jpg'),(7,'The Spy Who Came In From The Cold',7,1,5,'In this classic, John le Carre\'s third novel and the first to earn him international acclaim, he created a world unlike any previously experienced in suspense fiction.',689.75,'assets/img/product-images/the-spy-who-came-from-cold.jpg'),(8,'Elon Musk: Tesla, SpaceX, and the Quest for a Fantastic Future',8,2,5,'Elon Musk is the Steve Jobs of the present and the future, and for the past twelve months, he has been shadowed by tech reporter, Ashlee Vance.',446.34,'assets/img/product-images/elon-musk.jpg'),(9,'HTML & CSS: Design and Build Web Sites',9,4,5,'A full-color introduction to the basics of HTML and CSS from the publishers of Wrox!  Every day, more and more people want to learn some HTML and CSS.',3421.00,'assets/img/product-images/html-css-jon-duckett.jpg'),(10,'Life of Pi',10,1,5,'Life of Pi is a Canadian fantasy adventure novel by Yann Martel published in 2001. The protagonist is Piscine Molitor \"Pi\" Patel, an Indian boy from Pondicherry who explores issues of spirituality and practicality from an early age.',467.45,'assets/img/product-images/life-of-pi.png'),(11,'Drive: The Surprising Truth About What Motivates Us',11,2,5,'Daniel H. Pink explains in his paradigm-shattering book Drive, the secret to high performance and satisfaction in today\'s world is the deeply human need to direct our own lives, to learn and create new things, and to do better by ourselves and our world.',525.75,'assets/img/product-images/drive.jpeg'),(12,'1984',12,1,5,'Among the seminal texts of the 20th century, Nineteen Eighty-Four is a rare work that grows more haunting as its futuristic purgatory becomes more real.',518.48,'assets/img/product-images/1984.jpg'),(13,'How to Win Friends and Influence People',13,2,5,'How to Win Friends and Influence People is a self-help book written by Dale Carnegie, published in 1936. Over 30 million copies have been sold world-wide, making it one of the best-selling books of all time.',411.47,'assets/img/product-images/how-to-win-friends.jpg'),(14,'To Kill a Mockingbird',14,1,5,'To Kill a Mockingbird is a novel by Harper Lee published in 1960. It was immediately successful, winning the Pulitzer Prize, and has become a classic of modern American literature.',363.30,'assets/img/product-images/to-kill-a-mockingbird.jpg'),(15,'Tuesday with Morrie',15,2,5,'Tuesdays with Morrie is the final lesson between a college professor, Morrie, and one of his long lost students and the author of the book, Mitch Albom.',346.17,'assets/img/product-images/tuesday-with-morries.jpeg'),(16,'Lord of the Flies',16,1,5,'Lord of the Flies is a 1954 novel by Nobel Prize-winning British author William Golding. The book focuses on a group of British boys stranded on an uninhabited island and their disastrous attempt to govern themselves.',406.90,'assets/img/product-images/lord-of-the-flies.jpg'),(17,'One Hundred Years of Solitude',17,1,4,'One Hundred Years of Solitude is a novel by Colombian author Gabriel García Márquez that tells the multi-generational story of the Buendía family, whose patriarch, José Arcadio Buendía, founds the town of Macondo, in the metaphoric country of Colombia.',581.28,'assets/img/product-images/one-hundred-years-of-solitude.jpg'),(18,'The Giver',18,3,5,'The Giver is a 1993 American young adult dystopian novel by Lois Lowry. It is set in a society which at first appears to be utopian but is revealed to be dystopian as the story progresses.',331.43,'assets/img/product-images/the-giver.jpg'),(19,'The Pelican Brief',19,1,5,'The Pelican Brief is a legal-suspense thriller written by John Grisham in 1992. It is his third novel after A Time to Kill and The Firm.',464.98,'assets/img/product-images/the-pelican-brief.jpg'),(24,'The Diary of Anne Frank',20,2,5,'The Diary of a Young Girl, also known as The Diary of Anne Frank, is a book of the writings from the Dutch language diary kept by Anne Frank while she was in hiding for two years with her family during the Nazi occupation of the Netherlands.',449.97,'assets/img/product-images/anne-frank.jpg'),(25,'Tipping Point',1,2,5,'Malcolm Gladwell introduces us to the particular personality types who are natural pollinators of new ideas and trends, the people who create the phenomenon of word of mouth.',569.05,'assets/img/product-images/tipping-point.jpg'),(26,'Alice in Wonderland',21,3,5,'It tells of a girl named Alice falling through a rabbit hole into a fantasy world populated by peculiar, anthropomorphic creatures. ',322.11,'assets/img/product-images/alice-in-wonderland.jpg'),(27,'Charlotte\'s Web',23,1,5,'E. B. White\\\'s Newbery Honor Book is a tender novel of friendship, love, life, and death that will continue to be enjoyed by generations to come.',677.46,'assets/img/product-images/charlotte-web.jpg'),(28,'Harry Potter',22,3,5,'The novels chronicle the life of a young wizard, Harry Potter, and his friends Hermione Granger and Ron Weasley, all of whom are students at Hogwarts School of Witchcraft and Wizardry. ',4965.10,'assets/img/product-images/harry-potter.jpg'),(29,'The Little Prince',24,3,5,'With a timeless charm it tells the story of a little boy who leaves the safety of his own tiny planet to travel the universe, learning the vagaries of adult behaviour through a series of extraordinary encounters.',225.50,'assets/img/product-images/little-prince.jpg'),(30,'The Cat in The Hat',25,3,5,'The story centers on a tall anthropomorphic cat, who wears a red and white-striped hat and a red bow tie.',355.14,'assets/img/product-images/the-cat-in-the-hat.jpg'),(31,'Learn Python the Hard Way',28,4,5,'You Will Learn Python! Zed Shaw has perfected the world\\\'s best system for learning Python. Follow it and you will succeed-just like the hundreds of thousands of beginners Zed has taught to date!',1276.47,'assets/img/product-images/learn-python-the-hard-way.jpg '),(32,'Eloquent Javascript',27,4,5,'With Eloquent JavaScript as your guide, you can tweak, expand, and modify the author\'s code, or throw it away and build your own creations from scratch. Before you know it, you\'ll be fluent in the language of the Web.',2005.37,'assets/img/product-images/eloquent-javascript.jpg'),(33,'Grokking Algorithm',29,4,5,'Grokking Algorithms is a fully illustrated, friendly guide that teaches you how to apply common algorithms to the practical problems you face every day as a programmer. ',1087.23,'assets/img/product-images/grokking-algorithm.jpg'),(34,'Learn Ruby the Hard Way',28,4,5,'You will learn Ruby! Zed Shaw has perfected the world\'s best system for learning Ruby. Follow it and you will succeed -- just like the hundreds of thousands of beginners Zed has taught to date!',726.37,'assets/img/product-images/learn-ruby-the-hard-way.jpg'),(35,'Clean Code',30,4,5,'This book is a must for any developer, software engineer, project manager, team lead, or systems analyst with an interest in producing better code.',1529.07,'assets/img/product-images/clean-code.jpg');
/*!40000 ALTER TABLE `books` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cart_fk0` (`user_id`),
  KEY `cart_fk1` (`product_id`),
  CONSTRAINT `cart_fk0` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  CONSTRAINT `cart_fk1` FOREIGN KEY (`product_id`) REFERENCES `books` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cart`
--

LOCK TABLES `cart` WRITE;
/*!40000 ALTER TABLE `cart` DISABLE KEYS */;
/*!40000 ALTER TABLE `cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `genres`
--

DROP TABLE IF EXISTS `genres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `genres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `genres`
--

LOCK TABLES `genres` WRITE;
/*!40000 ALTER TABLE `genres` DISABLE KEYS */;
INSERT INTO `genres` VALUES (1,'fiction'),(2,'non fiction'),(3,'children book'),(4,'textbook');
/*!40000 ALTER TABLE `genres` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_items`
--

DROP TABLE IF EXISTS `order_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `price_per_item` decimal(10,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price_per_item` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `order_items_fk0` (`order_id`),
  KEY `order_items_fk1` (`book_id`),
  CONSTRAINT `order_items_fk0` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  CONSTRAINT `order_items_fk1` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_items`
--

LOCK TABLES `order_items` WRITE;
/*!40000 ALTER TABLE `order_items` DISABLE KEYS */;
INSERT INTO `order_items` VALUES (38,16,7,689.75,1,689.75),(39,16,12,518.48,1,518.48),(40,17,1,349.00,1,349.00),(41,17,7,689.75,1,689.75),(42,18,6,614.44,1,614.44),(43,18,18,331.43,1,331.43),(44,19,19,464.98,1,464.98),(45,19,24,449.97,1,449.97),(46,20,17,581.28,1,581.28);
/*!40000 ALTER TABLE `order_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_statuses`
--

DROP TABLE IF EXISTS `order_statuses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_statuses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_statuses`
--

LOCK TABLES `order_statuses` WRITE;
/*!40000 ALTER TABLE `order_statuses` DISABLE KEYS */;
INSERT INTO `order_statuses` VALUES (1,'Pending','Customer has completed the checkout process but item has not been delivered and payment is yet to confirmed.'),(2,'Shipping','The items customer ordered were to be shipped to order stated address'),(3,'Completed','Order has been shipped, picked by customer and receipt is confirmed'),(4,'Cancelled','Seller has canceled to order, due to stock inconsistency or other reasons');
/*!40000 ALTER TABLE `order_statuses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `order_status_id` int(11) NOT NULL DEFAULT '1',
  `payment_options_id` int(11) NOT NULL DEFAULT '1',
  `reference_no` varchar(15) NOT NULL,
  `order_date` datetime NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `shipping_date` datetime NOT NULL,
  `delivery_address` varchar(255) NOT NULL,
  `contact_person` varchar(255) NOT NULL,
  `country` varchar(30) NOT NULL,
  `zip_code` int(10) NOT NULL,
  `mobile_no` varchar(30) NOT NULL,
  `telephone_no` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `reference_no` (`reference_no`),
  UNIQUE KEY `order_date` (`order_date`),
  KEY `orders_fk0` (`customer_id`),
  KEY `orders_fk1` (`order_status_id`),
  KEY `orders_fk2` (`payment_options_id`),
  CONSTRAINT `orders_fk0` FOREIGN KEY (`customer_id`) REFERENCES `users` (`id`),
  CONSTRAINT `orders_fk1` FOREIGN KEY (`order_status_id`) REFERENCES `order_statuses` (`id`),
  CONSTRAINT `orders_fk2` FOREIGN KEY (`payment_options_id`) REFERENCES `payment_options` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (16,2,3,1,'BS-ECA9278','2018-03-15 15:08:03',1208.23,'2018-03-17 15:08:03','86-A Tandang Sora Avenue Quezon City','Elon Musk','Philippines',1115,'4533417','9069121383','elonmusk@gmail.com'),(17,10,1,1,'BS-2BD8026','2018-03-17 10:04:03',1038.75,'2018-03-19 10:04:03','Dito sa bahay','Black Balagat','Blackland',9999,'9999999','999999999','blackcat@gmail.com'),(18,11,1,1,'BS-42DF4DE','2018-03-17 23:25:07',945.87,'2018-03-19 23:25:07','86-A Tandang Sora Avenue Quezon City','Cherry Balagat','Korea',8778,'4561234','645654654','cherrybalagat@gmail.com'),(19,11,1,1,'BS-AE8186D','2018-03-17 23:26:40',914.95,'2018-03-19 23:26:40','86-A Tandang Sora Avenue Quezon City','Cherry Balagat','Korea',1234,'123213','12321321','cherrybalagat@gmail.com'),(20,4,1,1,'BS-07769A7','2018-03-18 23:07:15',581.28,'2018-03-20 23:07:15','123 Magana st. quezon city','Steve jobs','Japan',1234,'91254654123','4567891','stevejobs@gmail.com');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payment_options`
--

DROP TABLE IF EXISTS `payment_options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payment_options` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment_options`
--

LOCK TABLES `payment_options` WRITE;
/*!40000 ALTER TABLE `payment_options` DISABLE KEYS */;
INSERT INTO `payment_options` VALUES (1,'cash on delivery'),(2,'online payment');
/*!40000 ALTER TABLE `payment_options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'administrator'),(2,'customers');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL DEFAULT '2',
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `registration_date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `users_fk0` (`role_id`),
  CONSTRAINT `users_fk0` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,'Rellie','Balagat','relliebalagat@gmail.com','1f8ac10f23c5b5bc1167bda84b833e5c057a77d2','2018-03-03 12:07:40'),(2,2,'Elon','Musk','elonmusk@gmail.com','07db55ed85fa513f658dff200a102b24870b36eb','2018-03-10 13:47:25'),(4,2,'Steve','jobs','stevejobs@gmail.com','c62f5f7fdc0113bd58aab936c02f736448455655','2018-03-17 09:46:10'),(7,2,'Daniel','Dacat','danielthecat@gmail.com','3d0f3b9ddcacec30c4008c5e030e6c13a478cb4f','2018-03-17 09:54:09'),(10,2,'Black','Cat','blackcat@gmail.com','7c4a8d09ca3762af61e59520943dc26494f8941b','2018-03-17 10:02:43'),(11,2,'Cherry','Balagat','cherrybalagat@gmail.com','7e41c6480852a4a914e48c7a3a4084f193e963d9','2018-03-17 21:09:38');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wishlist`
--

DROP TABLE IF EXISTS `wishlist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wishlist` (
  `book_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  KEY `wishlist_fk0` (`book_id`),
  KEY `wishlist_fk1` (`user_id`),
  CONSTRAINT `wishlist_fk0` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  CONSTRAINT `wishlist_fk1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wishlist`
--

LOCK TABLES `wishlist` WRITE;
/*!40000 ALTER TABLE `wishlist` DISABLE KEYS */;
/*!40000 ALTER TABLE `wishlist` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-18 23:11:28
