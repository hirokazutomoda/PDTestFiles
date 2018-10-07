-- DDL
CREATE TABLE users (
	id_user INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(30) NOT NULL,
	age int(3) NOT NULL,
	job_title VARCHAR(30) NOT NULL,
	inserted_on VARCHAR(30) NOT NULL,
	last_updated TIMESTAMP NOT NULL
);

/* Insert Query Sample
INSERT INTO users (
	name,
	age,
	job_title,
	inserted_on,
	last_updated
) VALUES (
	'A',
	1,
	'A',
	'A',
	'2000-01-01'
);
*/
