create database ivc;
use ivc; 

CREATE USER 'admin1'@'localhost' IDENTIFIED WITH mysql_native_password BY 'ivc123456';
GRANT ALL PRIVILEGES ON ivc.* TO 'admin1'@'localhost' WITH GRANT OPTION;


create table tbl_membros(
	id_membro int primary key auto_increment,
    nm_membro varchar (80),
    senha varchar (100),
    ds_status boolean,
    tel_membro varchar (11),
    email_membro varchar (80)
);


drop procedure if exists inserir_membros;
delimiter $$
create procedure inserir_membros(
	in p_nm_membro varchar (80),
    in p_senha varchar (100),
    in p_ds_status boolean,
    in p_tel_membro varchar (11),
    in p_email_membro varchar (80)
)
begin 
	declare erro_SQL tinyint default false;
	declare continue handler for sqlexception set erro_SQL = true;
    
    start transaction;
		insert into tbl_membros (nm_membro, senha, ds_status, tel_membro, email_membro)
			values (p_nm_membro, p_senha, p_ds_status, p_tel_membro, p_email_membro);
	
    if(erro_SQL = false) then 
		commit;
			select 'Operação executada com sucesso !!';
	else 
		rollback;
			select 'Ocorreu algum erro ao enviar os registros!';
	end if;
end $$
delimiter ;

select  * from tbl_membros;