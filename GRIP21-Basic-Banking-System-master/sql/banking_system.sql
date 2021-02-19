CREATE TABLE clients(
    c_id int(3) PRIMARY KEY AUTO_INCREMENT,
    c_name varchar(20) NOT NULL,
    c_mail varchar(20) UNIQUE,
    c_balance int(10) NOT NULL
    );
    
INSERT INTO `clients`(`c_id`, `c_name`, `c_mail`, `c_balance`) VALUES 
	(101,'Madhavan.K.P','maddysret@gmail.com',63900),
    (102,'Narayanan.L','lakshmisret@gmail.com',30000),
    (103,'Prashanth.G','mockysret0@gmail.com',52118),
    (104,'Aryan.S','Aryan121@gmail.com',35000),
    (105,'Dhruv.D','dhr_v@gmail.com',83000),
    (106,'Poorvi.M','poorvik2k@gmail.com',60000),
    (107,'Sagun.Y.','sagun91@gmail.com',44992),
    (108,'Shreya.A','shyr001@gmail.com',45109),
    (109,'Arjun.C','arjun94@gmail.com',35000),
    (110,'Megha.A','megs2002@gmail.com',34000),
    (111,'Sabari.I','sabarisret@gmail.com',42900)
    ;

CREATE TABLE transaction (
  sr_no int(3) PRIMARY KEY AUTO_INCREMENT,
  sender text NOT NULL,
  receiver text NOT NULL,
  balance int(10) NOT NULL,
  date_time datetime NOT NULL DEFAULT current_timestamp()
);



SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

COMMIT

