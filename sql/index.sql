
mysql -uroot -proot

--DB-OPERATIONS--
	SHOW DATABASES;

	CREATE DATABASE IF NOT EXISTS learning;

	DROP DATABASE IF EXISTS learning;

	USE <DBNAME>

--TABLE-OPERATIONS--
	SHOW TABLES;

	CREATE TABLE IF NOT EXISTS users (
		id int,
		name varchar(25),
		email varchar(25),
		password varchar(25)
	);

	DROP TABLE IF EXISTS users;

	INSERT INTO users VALUES 
	(1, 'pawan', 'pawan@gmail.com', 'pawan@123'),
	(2, 'gaurav', 'gaurav@gmail.com', 'gaurav@123');

	TRUNCATE TABLE users;

	EXPLAIN/DESCRIBE users;

	ALTER TABLE users ADD contact BIGINT;
	ALTER TABLE users DROP COLUMN contact1;
	ALTER TABLE users MODIFY COLUMN contact1 INT;
	RENAME TABLE users TO persons;
	ALTER TABLE persons CHANGE contact1 status BOOL;