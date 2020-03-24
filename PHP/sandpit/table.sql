
CREATE TABLE IF NOT EXISTS form(
   user_id INT NOT NULL AUTO_INCREMENT,
   user_name VARCHAR(20) NOT NULL,
   user_password  VARCHAR(20) NOT NULL,
   user_email   INT NOT NULL,
   primary key ( user_id ))