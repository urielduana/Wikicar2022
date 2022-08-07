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

