CREATE TABLE `form` (

    `id` INT(10) NOT NULL AUTO_INCREMENT,
    `text` VARCHAR(255) NOT NULL,
    `textarea` TINYTEXT NULL DEFAULT NULL,
    `radio` ENUM('Yes', 'No') NOT NULL,
    `select` INT(5) NOT NULL,

    PRIMARY KEY (`id`),
    INDEX (`select`),
    INDEX (`radio`)

);