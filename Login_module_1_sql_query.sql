

CREATE TABLE login
(
UserNameID int(9) NOT NULL auto_increment,
username VARCHAR(40) NOT NULL,
pass VARCHAR(40) NOT NULL,
PRIMARY KEY(UserNameID)
);

drop table UserName

insert into login(username,pass)values('vrushal',123)
select*from login
insert into login(username,pass)values('vrushal1',1234)
alter table login add column signup_date timestamp not null default current_timestamp


CREATE TABLE student
(
student_id int(9) NOT NULL auto_increment,
student_name varchar(25) not null,
student_email varchar(25) not null,
student_contact numeric not null,
student_address varchar(255) not null,
primary key(student_id)
)

select*from student
alter table student add column record_time timestamp not null default current_timestamp
alter table student modify column student_contact numeric not null