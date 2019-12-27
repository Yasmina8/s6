create TABLE categories (
    id int AUTO_INCREMENT,
    name varchar (50) NOT null UNIQUE, 
    CONSTRAINT pk_categories PRIMARY KEY (id)
    );

create table products (
     id int AUTO_INCREMENT,
     name VARCHAR (50) NOT NULL UNIQUE,
     description varchar(50) NOT NULL,
     price int,
     idCat int,
     CONSTRAINT pk_products PRIMARY KEY (id),
     CONSTRAINT fk_products_categories FOREIGN KEY (idCat) REFERENCES categories(id)
 ) ;  
  

  
