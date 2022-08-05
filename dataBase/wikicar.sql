drop database if exists wikicar;
create database wikicar;
use wikicar;

CREATE TABLE object (
  Id_object int(15) NOT NULL AUTO_INCREMENT,
  Object_name varchar(35) NOT NULL,
  PRIMARY KEY (Id_object)
) ;

CREATE TABLE country (
  Id_country int(15) NOT NULL AUTO_INCREMENT,
  Country_name varchar(35) NOT NULL,
  PRIMARY KEY (Id_country)
) ;

CREATE TABLE brand (
  Id_brand int(15) NOT NULL AUTO_INCREMENT,
  Brand_name varchar(25) NOT NULL,
  Founders varchar(100) NOT NULL,
  Foundation_date date NOT NULL,
  Brand_history text NOT NULL,
  Object_id int(15) NOT NULL,
  Country_id int(15) NOT NULL,
  PRIMARY KEY (Id_brand),
  FOREIGN KEY (Object_id) REFERENCES object (Id_object) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (Country_id) REFERENCES country (Id_country) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE model (
  Id_model int(15) NOT NULL AUTO_INCREMENT,
  Model_name varchar(15) NOT NULL,
  Model_type varchar(15) NOT NULL,
  Doors int(2) DEFAULT NULL,
  Seats int(2) DEFAULT NULL,
  GasTank_capacity int(5) DEFAULT NULL,
  Gas_type varchar(30) DEFAULT NULL,
  Model_year int(4) DEFAULT NULL,
  Starting_price float DEFAULT NULL,
  Actual_price float DEFAULT NULL,
  Configuration text NOT NULL,
  Brand_id int(15) NOT NULL,
  PRIMARY KEY (Id_model),
  FOREIGN KEY (Brand_id) REFERENCES brand (Id_brand) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE section (
  Id_section int(15) NOT NULL AUTO_INCREMENT,
  Section_type varchar(20) NOT NULL,
  Model_id int(15) NOT NULL,
  PRIMARY KEY (Id_section),
  FOREIGN KEY (Model_id) REFERENCES model (Id_model) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE user (
  Id_user int(15) NOT NULL AUTO_INCREMENT,
  User_name varchar(35) NOT NULL,
  User_lastname varchar(35) NOT NULL,
  Password varchar(35) NOT NULL,
  Email varchar(50) NOT NULL,
  Gender char(1) NOT NULL,
  Permission char(1) NOT NULL,
  PRIMARY KEY (Id_user)
) ;

CREATE TABLE post (
  Id_post int(15) NOT NULL AUTO_INCREMENT,
  Post_date datetime null default current_timestamp,
  Post_text text NOT NULL,
  Section_id int(15) NOT NULL,
  User_id int(15) NOT NULL,
  PRIMARY KEY (Id_post),
  FOREIGN KEY (Section_id) REFERENCES section (Id_section) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (User_id) REFERENCES user (Id_user) ON DELETE CASCADE ON UPDATE CASCADE
) ;
CREATE TABLE score (
  Id_score int(15) NOT NULL AUTO_INCREMENT,
  Post_id int(15) NOT NULL,
  Userrating_id int(15) NOT NULL,
  PRIMARY KEY (Id_score),
  FOREIGN KEY (Post_id) REFERENCES post (Id_post) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (Userrating_id) REFERENCES user (Id_user) ON DELETE CASCADE ON UPDATE CASCADE
  );
CREATE TABLE car (
  Id_car int(15) NOT NULL AUTO_INCREMENT,
  Registration_plate varchar(10) NOT NULL,
  Color varchar(20) NOT NULL,
  Deficiency text DEFAULT NULL,
  Mileage int(10) NOT NULL,
  User_id int(15) NOT NULL,
  Model_id int(15) NOT NULL,
  PRIMARY KEY (Id_car),
  FOREIGN KEY (User_id) REFERENCES user (Id_user) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (Model_id) REFERENCES model (Id_model) ON DELETE CASCADE ON UPDATE CASCADE
  );
  
create table log(
id int(15) not null auto_increment,
Action varchar(255) null,
Date datetime null default current_timestamp,
primary key(id));

create table news(
  Id_news int(15) NOT NULL AUTO_INCREMENT,
  News_date datetime null default current_timestamp,
  News_text text NOT NULL,
  PRIMARY KEY (Id_news)
);
