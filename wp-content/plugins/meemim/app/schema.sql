CREATE TABLE IF NOT EXISTS `{prefix}members` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`parent_id` INT(11) NOT NULL DEFAULT '0',
	`attachment_id` INT(11) NULL DEFAULT NULL,
	`first_name` VARCHAR(50) NULL DEFAULT NULL,
	`last_name` VARCHAR(50) NULL DEFAULT NULL,
	`position` VARCHAR(50) NULL DEFAULT NULL,
	`description` TEXT NULL,
	PRIMARY KEY (`id`)
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB
;
