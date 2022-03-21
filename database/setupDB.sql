CREATE DATABASE seekhash_db;
CREATE TABLE seekhash_db.user_info (
                user_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(30) NOT NULL,
                password VARCHAR(30) NOT NULL,
                email VARCHAR(50) NOT NULL);
CREATE TABLE seekhash_db.file_info(
		    	f_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		    	user_id INT(6) NOT NULL,
		    	day_upload DATE NOT NULL,
		    	file LONGTEXT NOT NULL );

ALTER TABLE seekhash_db.file_info ADD CONSTRAINT `file_fkey1` FOREIGN KEY (`f_id`) REFERENCES `user_info`(`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;