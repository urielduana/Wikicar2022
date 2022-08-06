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
    values ('', namein, lastnamein, passin, emailin, gender, 'N');
    set existout = TRUE;
else 
    set existout = FALSE;
END IF;
end//
delimiter ;

drop procedure createAccount;
call createAccount('Juan', 'Perez', 'abc123', 'nstegell0@mysql.com', 'M', @exist);
select @exist;

