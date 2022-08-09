use wikicar;
show tables;

select * from user;

/*Hacer una vista de emails para comparar*/
/*Vista para post*/
;delimiter //
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

drop procedure createAccount;
call createAccount('Luis', 'Martinez', '123123', 'f@gmail.com', 'M', @exist);
select @exist;
call createAccount('Luis', 'Martinez', '123123', 'f@gmail.com', 'M', @exist);
call createAccount('Luis', 'Martinez', '12356480', 'f@gmail.com', 'M', @exist);

create view vw_news as select News_date,News_text from news where Id_news in (Select MAX(Id_news) FROM news);
select * from vw_news;

create view vw_brands as select Brand_name,Founders,Foundation_date,Brand_history,country_name from brand inner join  country on brand.Country_id = country.Id_country;
select * from vw_brands;
drop view vw_brans;
create view vw_posts as select User_name,User_lastname,Post_date,Post_text from post inner join user on post.User_id = user.Id_user;
select * from vw_posts;

create view vw_models as select Brand_name,Model_name,Model_type,Doors,Seats,GasTank_capacity,Gas_type,Model_year,Starting_price,Actual_price,Configuration from model inner join brand on model.Brand_id = brand.Id_brand;
select * from vw_models;
