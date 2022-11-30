use users
SELECT *
FROM users

DELETE FROM users WHERE userid >= 1;

ALTER TABLE users auto_increment = 1;
UPDATE users SET userid = 1;