CREATE DATABASE seekhash_db;
CREATE TABLE seekhash_db.user_info (
                user_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(30) NOT NULL,
                password VARCHAR(30) NOT NULL,
                email VARCHAR(50) NOT NULL);
CREATE TABLE seekhash_db.file_info(
    	    	f_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                day_upload VARCHAR(100) NOT NULL,
                file_read_in VARCHAR(100) NOT NULL,
                programming_language_detected VARCHAR(100) NOT NULL,
                platforms VARCHAR(100) NOT NULL,
                probabilities VARCHAR(100) NOT NULL,
                hashes_found_at VARCHAR(100) NOT NULL, 
                hash_information VARCHAR(200) NOT NULL, 
                digital_signature VARCHAR(100) NOT NULL);
CREATE TABLE seekhash_db.hash_info(
                hash_name VARCHAR(30) PRIMARY KEY,
                past_attacks LONGTEXT NOT NULL);

INSERT INTO seekhash_db.hash_info(hash_name, past_attacks) VALUES ('md2', 'MD2 is considered a weak hash, superseded by MD5(Weak against collisions)');
INSERT INTO seekhash_db.hash_info(hash_name, past_attacks) VALUES ('md4', 'MD4 is considered a weak hash, superseded by MD5(Weak against collisions)');
INSERT INTO seekhash_db.hash_info(hash_name, past_attacks) VALUES ('md5', 'MD5 is weak against collision resistance, prefix collision attacks, pre-image resistance attacks(theory) and length extension attacks');
INSERT INTO seekhash_db.hash_info(hash_name, past_attacks) VALUES ('sha1', 'SHA-1 is weak against collision resistance, length extension attacks and prefix collision attacks, it is superseded by SHA-2 & SHA-3');
INSERT INTO seekhash_db.hash_info(hash_name, past_attacks) VALUES ('ripemd', 'RIPEMD is weak against collision resistance');
INSERT INTO seekhash_db.hash_info(hash_name, past_attacks) VALUES ('sha0', 'SHA-0 is weak against collision resistance and is superseded by SHA-2 & SHA-3');