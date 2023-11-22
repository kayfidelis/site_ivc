create database ivc;
use ivc;

CREATE USER 'admin'@'localhost' IDENTIFIED WITH mysql_native_password BY 'ivc123456';
GRANT ALL PRIVILEGES ON ivc.* TO 'admin'@'localhost' WITH GRANT OPTION;


------------------------------------------------- tudo relacionado a tabela de Unidades -------------------------------------------------
create table tbl_unidades(
	id_unidade int primary key auto_increment,
    nm_unidade varchar (80)
);

drop procedure if exists inserir_unidade;
delimiter $$ 
create procedure inserir_unidade(
	in p_nm_unidade varchar (80)
)
begin 
	declare erro_SQL tinyint default false;
	declare continue handler for sqlexception set erro_SQL = true;
    
    start transaction;
		insert into tbl_unidades (nm_unidade)
			values (p_nm_unidade);
	
    if(erro_SQL = false) then 
		commit;
			select 'Operação executada com sucesso !!';
	else 
		rollback;
			select 'Ocorreu algum erro ao enviar os registros!';
	end if;
end $$
delimiter ;

call inserir_unidade ('IVC São Paulo');
call inserir_unidade ('IVC Rio de Janeiro');
call inserir_unidade ('IVC Belo Horizonte');
call inserir_unidade ('IVC Curvelo');

select * from tbl_unidades;
------------------------------------------------- fim -------------------------------------------------



------------------------------------------------- tudo relacionado a tabela de membros -------------------------------------------------
create table tbl_membros(
	id_membro int primary key auto_increment,
    id_unidade int,
    nm_membro varchar (80),
    senha varchar (100),
    ds_status boolean,
    tel_membro varchar (80),
	email_membro varchar (80),
    constraint fk_unidade foreign key(id_unidade) references tbl_unidades(id_unidade)
);


drop procedure if exists inserir_membros;
delimiter $$
create procedure inserir_membros(
	in p_id_unidade int,
	in p_nm_membro varchar (80),
    in p_senha varchar (100),
    in p_ds_status boolean,
    in p_tel_membro varchar (80),
    in p_email_membro varchar (80)
)
begin 
	declare erro_SQL tinyint default false;
	declare continue handler for sqlexception set erro_SQL = true;
    
    start transaction;
		insert into tbl_membros (id_unidade, nm_membro, senha, ds_status, tel_membro, email_membro)
			values (p_id_unidade, p_nm_membro, p_senha, p_ds_status, p_tel_membro, p_email_membro);
	
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
------------------------------------------------- fim -------------------------------------------------