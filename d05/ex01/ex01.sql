 CREATE TABLE ft_table (id INT  PRIMARY KEY AUTO_INCREMENT, login VARCHAR(11) DEFAULT 'toto' NOT NULL, `group` ENUM('staff', 'student', 'other') NOT NULL, creation_date date NOT NULL);
