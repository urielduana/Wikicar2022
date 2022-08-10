use wikicar;
show tables;
/*Trigger log*/
DELIMITER //
create trigger upd_object after update on object
for each row begin
insert into log (action) Value 
(concat('Se actualizo la informacion del objeto: ',old.Object_name,' por el nuevo objeto: ',new.Object_name,
' su antiguo Id es: ',old.Id_object,' Por su nuevo Id: ',new.Id_object));
end //
DELIMITER ;

DELIMITER //
create trigger upd_brand after update on brand
for each row begin
insert into log (action) Value 
(concat('Se Actualizo la informacion de la marca: ',old.Brand_name,' Por la siguiente marca: ',new.Brand_name,
' su antiguo id era: ',old.Id_brand,' Su nuevo id es: ',new.Id_brand));
end //
DELIMITER ;

DELIMITER //
create trigger upd_country after update on country
for each row begin
insert into log (action) Value 
(concat('Se actualizo el nombre del pais : ',old.Country_name,' Por el nombre siguiente: ',new.Country_name,
' que tenia el id: ',old.Id_country,' Por el siguiente id: ', new.Id_country));
end //
DELIMITER ;

DELIMITER //
create trigger upd_car after update on car
for each row begin
insert into log (action) Value 
(concat('Se actualizo el registro del carro con la placa : ',old.Registration_plate,' Sus nuevas placas son: ',new.Registration_plate
,' su antiguo id era: ',old.Id_car,' Su nuevo id es: ',new.Id_car
,' Su antiguo id de usuario era: ',old.User_Id,' Y el nuevo id de usuario es: ',new.User_id));
end //
DELIMITER ;

DELIMITER //
create trigger upd_model after update on model
for each row begin
insert into log (action) Value 
(concat('Se actualizo el registro del modelo : ',old.Model_name,' Por el siguiente modelo; ',new.Model_name,
' su antiguo id era: ',old.Id_model,' Su nuevo id es: ',new.Id_model,
' Su tipo era: ',old.Model_type,' Su nuevo tipo es: ',new.Model_type));
end //
DELIMITER ;

DELIMITER //
create trigger upd_score after update on score
for each row begin
insert into log (action) Value 
(concat('Se actualizo el registro con el score : ',old.Id_score,
' su antiguo id de correo era: ',old.Post_id,' Su nuevo id es: ',new.Post_id,
' Su antiguo id del userrating: ',old.Userrating_id,' Su nuevo ID del surrating es: ',new.Userrating_id));
end //
DELIMITER ;

DELIMITER //
create trigger upd_post after update on post
for each row begin
insert into log (action) Value 
(concat('Se actualizo el registro con el mensaje de correo : ',old.Post_text
,' Su nuevo mensaje es: ',new.Post_text
,' Su antiguo id era: ',old.Id_post
,' Su nuevo id es: ',new.Id_post
,' Su antigua fecha era: ',old.Post_date
,' Su nueva fecha es: ',new.Post_date));
end //
DELIMITER ;

DELIMITER //
create trigger upd_user after update on user
for each row begin
insert into log (action) Value 
(concat('Se actualizo el registro del usuario : ',old.User_name,' Su nuevo usuario es: ',new.User_name
,' su antiguo id era: ',old.Id_user,' Su nuevo id es: ',new.Id_user
,' su antiguo email era: ',old.Email,' Su nuevo email es: ',new.Email));
end //
DELIMITER ;

DELIMITER //
create trigger upd_section after update on section
for each row begin
insert into log (action) Value 
(concat('Se actualizo el registro el cual su tipo de seccion era: ',old.Section_type,' Su nuevo tipo es: ',new.Section_type
,' Su antiguo id era: ',old.Id_section,'Su nuevo id es: ',new.Id_section));
end //
DELIMITER ;

DELIMITER //
create trigger upd_news after update on news
for each row begin
insert into log (action) Value 
(concat('Se actualizo el registro con la noticia: ',old.News_text,' Por la siguiente noticia: ',new.News_text
,' Su antiguo id era: ',old.Id_news,' Su nuevo id es: ',new.Id_news,
' tenia la fecha: ',old.News_date,' Su nueva fecha es: ',new.News_date));
end //
DELIMITER ;
DELIMITER //
create trigger del_object after delete on object
for each row begin
insert into log (action) Value 
(concat('Se elimino la informacion del objeto: ',old.Object_name,',con el id: ',old.Id_object));
end //
DELIMITER ;

DELIMITER //
create trigger del_brand after delete on brand
for each row begin
insert into log (action) Value 
(concat('Se elimino la informacion de la marca: ',old.Brand_name,'con el id: ',old.Id_brand, 'de el fundador: '
,old.Founders,'el id de su objeto era: ',old.Object_id,'y su id_country era: ',old.Country_id));
end //
DELIMITER ;

DELIMITER //
create trigger del_country after delete on country
for each row begin
insert into log (action) Value 
(concat('Se elimino el pais : ',old.Country_name,',con el id: ',old.Id_country));
end //
DELIMITER ;

DELIMITER //
create trigger del_car after delete on car
for each row begin
insert into log (action) Value 
(concat('Se elimino el registro del carro con la placa : ',old.Registration_plate,' con el id: ',old.Id_car,
' Del usuario cual id es: ',old.User_Id,' Y el id del modelo es: ',old.Model_id));
end //
DELIMITER ;

DELIMITER //
create trigger del_model after delete on model
for each row begin
insert into log (action) Value 
(concat('Se elimino el registro del modelo : ',old.Model_name,' con el id: ',old.Id_model,
' Su tipo era: ',old.Model_type,' Y el id de la marca era: ',old.Brand_id));
end //
DELIMITER ;

DELIMITER //
create trigger del_score after delete on score
for each row begin
insert into log (action) Value 
(concat('Se elimino el registro con el score : ',old.Id_score,' con el id de correo: ',old.Post_id,
' Y el id del userrating: ',old.Userrating_id));
end //
DELIMITER ;

DELIMITER //
create trigger del_post after delete on post
for each row begin
insert into log (action) Value 
(concat('Se elimino el registro con el mensaje de correo : ',old.Post_text,' con el id: ',old.Id_post,
' y con la fecha: ',old.Post_date));
end //
DELIMITER ;

DELIMITER //
create trigger del_user after delete on user
for each row begin
insert into log (action) Value 
(concat('Se elimino el registro del usuario : ',old.User_name,' con el id: ',old.Id_user,
' y con el email: ',old.Email));
end //
DELIMITER ;

DELIMITER //
create trigger del_section after delete on section
for each row begin
insert into log (action) Value 
(concat('Se elimino el registro del tipo de seccion : ',old.Section_type,' con el id: ',old.Id_section,
' y con el id del modelo: ',old.Model_id));
end //
DELIMITER ;

DELIMITER //
create trigger del_news after delete on news
for each row begin
insert into log (action) Value 
(concat('Se elimino el registro con la noticia: ',old.News_text,' con el id: ',old.Id_news,
' y con la fecha: ',old.News_date));
end //
DELIMITER ;
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

create view vw_posts as select User_name,User_lastname,Post_date,Post_text from post inner join user on post.User_id = user.Id_user;
select * from vw_posts;

create view vw_models as select Brand_name,Model_name,Model_type,Doors,Seats,GasTank_capacity,Gas_type,Model_year,Starting_price,Actual_price,Configuration from model inner join brand on model.Brand_id = brand.Id_brand;
select * from vw_models;
create view vw_emails as select Email from user;