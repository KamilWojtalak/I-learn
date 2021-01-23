CREATE TABLE `#__exercise3` (
	`id`       INT(11)     NOT NULL AUTO_INCREMENT,
	`message` VARCHAR(25) NOT NULL,
	`published` tinyint(4) NOT NULL DEFAULT '1',
	PRIMARY KEY (`id`)
)
	ENGINE =MyISAM
	AUTO_INCREMENT =0
	DEFAULT CHARSET =utf8;

INSERT INTO `#__exercise3` (`message`) VALUES
('Pierwsza wiadomość z bazy danych'),
('Druga wiadomość z bazy danych'),
('Trzecia wiadomość z bazy danych'),
('Czwarta wiadomość z bazy danych');