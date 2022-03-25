CREATE TABLE `ipdo` (
    `id` INT(11) NOT NULL AUTO_INCREMENT, 
    `from` VARCHAR(30) NOT NULL ,
    `to` VARCHAR(30) NOT NULL ,
    `department_id` VARCHAR(30) NOT NULL , 
    `type_id` int(11) NOT NULL , 
    `filename` VARCHAR(125) NOT NULL , 
    `filepath` VARCHAR(125) NOT NULL , 
    `year` VARCHAR(30) NOT NULL ,   
    `date_created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
    PRIMARY KEY (`id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `types` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(30) NOT NULL ,
    PRIMARY KEY (`id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;