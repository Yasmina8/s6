create table users (
     id int AUTO_INCREMENT,
     role VARCHAR (50) DEFAULT 'user' NOT NULL UNIQUE,
     firstname VARCHAR(50) NOT NULL UNIQUE,
     lastname VARCHAR(50) NOT NULL UNIQUE,
     password int,
     phone int,
     CONSTRAINT pk_users PRIMARY KEY (id)
 ) ;  