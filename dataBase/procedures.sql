use wikicar;
show tables;

select * from user;




/*Procedures*/
delimiter //
create procedure createAccount(in  namein varchar(35), in lastnamein varchar(35), in passin varchar(35), in emailin varchar(35), in gender char(1), out existout boolean)
begin
select Id_user into @check from user where email = emailin;
if(@check = null) THEN
	insert into user (Id_user, User_name, User_lastname, Password, Email, Gender, Permission) 
    values (null, namein, lastnamein, passin, emailin, gender, 'N');
    set existout = TRUE;
else 
    set existout = FALSE;
END IF;
end//
delimiter ;
describe news;

delimiter //
create procedure createNew(in textin text)
begin
insert into news(Id_news, News_date, News_text) values(null, NOW(), textin);
end//
delimiter ;
call createNew('texto de prueba xd');

describe post;
delimiter //
create procedure postIt(in textin text, in sectionIdIn int(15), in userIdIn int(15))
begin
insert into post(Id_post, Post_date, Post_text, Section_id, User_id) 
values(null, NOW(), textin, sectionIdIn, userIdIn);
end//
delimiter ;
call postIt('post de ejemplo hola', 1, 1);
select * from post;


delimiter //
create procedure postIt(in textin text, in sectionIdIn int(15), in userIdIn int(15))
begin
insert into post(Id_post, Post_date, Post_text, Section_id, User_id) 
values(null, NOW(), textin, sectionIdIn, userIdIn);
end//
delimiter ;

delimiter //
create procedure selectSection(in sectionIdIn int(15))
begin
select brand.Brand_name, model.Model_name, section.* from section 
inner join model on section.Model_id = model.Id_model
inner join brand on model.Brand_id = brand.Id_brand
where Id_section=sectionIdIn;
end//
delimiter ;
call selectSection(1);


delimiter //
create procedure selectModel(in modelIdIn int(15))
begin
select brand.Brand_name, model.* from model 
inner join brand on model.Brand_id = brand.Id_brand
where Id_model=modelIdIn;
end//
delimiter ;
call selectModel(1);


/*Views*/
create view vw_news as select News_date,News_text from news where Id_news in (Select MAX(Id_news) FROM news);
select * from vw_news;

create view vw_brands as select Brand_name,Founders,Foundation_date,Brand_history,country_name from brand inner join  country on brand.Country_id = country.Id_country;
select * from vw_brands;
drop view vw_brans;
create view vw_posts as select User_name,User_lastname,Post_date,Post_text from post inner join user on post.User_id = user.Id_user;
select * from vw_posts;

create view vw_models as select Brand_name,Model_name,Model_type,Doors,Seats,GasTank_capacity,Gas_type,Model_year,Starting_price,Actual_price,Configuration from model inner join brand on model.Brand_id = brand.Id_brand;
select * from vw_models;