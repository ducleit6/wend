DROP DATABASE IF EXISTS `wend`;

CREATE DATABASE `wend` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `wend`;

CREATE TABLE IF NOT EXISTS `categories` (
  `id` INT  PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL UNIQUE,
  `status` TINYINT DEFAULT 1 ,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP(),
  `updated_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP(),
  `deleted_at` TIMESTAMP NULL DEFAULT NULL
);
CREATE TABLE IF NOT EXISTS `destinations` (
  `id` INT  PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL UNIQUE,
  `category_id` INT,
  `status` TINYINT DEFAULT 1,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP(),
  `updated_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP(),
  `deleted_at` TIMESTAMP NULL DEFAULT NULL,
  FOREIGN KEY (category_id) REFERENCES categories(id)
);
CREATE TABLE IF NOT EXISTS `destination_images` (
  `id` INT  PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `category_id` INT,
  `destination_id` INT NOT NULL,
  `status` TINYINT DEFAULT 1,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP(),
  `updated_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP(),
  FOREIGN KEY (`destination_id`) REFERENCES `destinations`(`id`)
);
CREATE TABLE IF NOT EXISTS `hotels` (
  `id` INT  PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL UNIQUE,
  `destination_id` INT,
  `description` TEXT NULL,
  `status` TINYINT DEFAULT 1,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP(),
  `updated_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP(),
  `deleted_at` TIMESTAMP NULL DEFAULT NULL,
  FOREIGN KEY (destination_id) REFERENCES destinations(id)
);

CREATE TABLE IF NOT EXISTS `tours` (
  `id` INT  PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255),
  `price` FLOAT NOT NULL,
  `sale_price` FLOAT DEFAULT 0,
  `image` VARCHAR(255) NOT NULL,
  `description` TEXT NULL,
  `date` INT,
  `start_day` DATE,
  `max_member` INT,
  `min_member` INT,
  `destination_id` INT  NOT NULL,
  `status` TINYINT DEFAULT 1,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP(),
  `updated_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP(),
  `deleted_at` TIMESTAMP NULL DEFAULT NULL,
  FOREIGN KEY (destination_id) REFERENCES destinations(id)
);
CREATE TABLE IF NOT EXISTS `tour_hotels` (
  `tour_id` INT NOT NULL,
  `hotel_id` INT NOT NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP(),
  `updated_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP(),
  FOREIGN KEY (`tour_id`) REFERENCES `tours`(`id`),
  FOREIGN KEY (`hotel_id`) REFERENCES `hotels`(`id`)
);

CREATE TABLE IF NOT EXISTS `admins` (
  `id` INT  PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `name` INT  NOT NULL,
  `image` VARCHAR(255)  NULL,
  `email` VARCHAR(100) NOT NULL UNIQUE,
  `phone` VARCHAR(20) NOT NULL UNIQUE,
  `password` VARCHAR(100) NOT NULL,
  `remember_token` VARCHAR(200) NULL,
  `verity` TINYINT DEFAULT 1,
  `status` TINYINT,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP(),
  `updated_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP(),
  `deleted_at` TIMESTAMP NULL DEFAULT NULL
);
CREATE TABLE IF NOT EXISTS `users` (
  `id` INT  PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `name` INT  NOT NULL,
  `image` VARCHAR(255) NULL,
  `email` VARCHAR(100) NOT NULL UNIQUE,
  `phone` VARCHAR(20) NULL UNIQUE,
  `address` VARCHAR(20) NULL,
  `gender` TINYINT DEFAULT 1,
  `password` VARCHAR(100) NOT NULL,
  `remember_token` VARCHAR(200) NULL,
  `verity` TINYINT DEFAULT 1,
  `status` TINYINT,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP(),
  `updated_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP(),
  `deleted_at` TIMESTAMP NULL DEFAULT NULL
);


CREATE TABLE IF NOT EXISTS `bookings` (
  `id` INT  PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `user_id` INT NOT NULL,
  `tour_id` INT NOT NULL,
  `quantity` INT NOT NULL,
  `price` FLOAT NOT NULL,
  `status` TINYINT,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP(),
  `updated_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP(),
  `deleted_at` TIMESTAMP NULL DEFAULT NULL,
  FOREIGN KEY (`user_id`) REFERENCES `users`(`id`),
  FOREIGN KEY (`tour_id`) REFERENCES `tours`(`id`)
);

CREATE TABLE IF NOT EXISTS `blogs` (
  `id` INT  PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `user_id` INT NOT NULL,
  `name` VARCHAR(255) NOT NULL,
  `content` TEXT NOT NULL,
  `status` TINYINT DEFAULT 1,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP(),
  `updated_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP(),
  FOREIGN KEY (`user_id`) REFERENCES `users`(`id`)
);

CREATE TABLE IF NOT EXISTS `services` (
  `id` INT  PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `status` TINYINT DEFAULT 1,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP(),
  `updated_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP()
);

CREATE TABLE IF NOT EXISTS `tour_sevices` (
  `tour_id` INT   NOT NULL,
  `services_id` INT   NOT NULL,
  `status` TINYINT DEFAULT 1, 
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP(),
  `updated_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP()
);

CREATE TABLE IF NOT EXISTS `ratings` (
  `user_id` INT   NOT NULL ,
  `tour_id` INT   NOT NULL,
  `services` FLOAT NULL,
  `hospitality` FLOAT NULL,
  `room` FLOAT NULL,
  `comfort` FLOAT NULL,
  `satisfasion` FLOAT NULL,
  `cleanliness` FLOAT NULL,
  `comment` TEXT NULL,
  FOREIGN KEY (`user_id`) REFERENCES `users`(`id`),
  FOREIGN KEY (`tour_id`) REFERENCES `tours`(`id`)
);

CREATE TABLE IF NOT EXISTS `category_faqs` (
  `id` INT  PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL UNIQUE,
  `status` TINYINT DEFAULT 1,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP(),
  `updated_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP()
);

CREATE TABLE IF NOT EXISTS `faqs` (
  `id` INT  PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `catfaqs_id` INT NOT NULL,
  `name` TEXT NOT NULL UNIQUE,
  `content` TEXT NOT NULL,
  `status` TINYINT DEFAULT 1,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP(),
  `updated_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP(),
  FOREIGN KEY (`catfaqs_id`) REFERENCES `category_faqs`(`id`)
);