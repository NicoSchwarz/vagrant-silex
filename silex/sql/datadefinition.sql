USE silex;

USE silex;

-- CREATE YOUR TABLES HERE
CREATE TABLE blog_post (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  author VARCHAR(255),
  title VARCHAR(255),
  text TEXT,
  created_at DATE
);