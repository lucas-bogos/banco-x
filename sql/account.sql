CREATE TABLE account (
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  balance DECIMAL NOT NULL DEFAULT 0,
  number_account INT NOT NULL,
  agency INT NOT NULL,
  bank INT(4) NOT NULL
);