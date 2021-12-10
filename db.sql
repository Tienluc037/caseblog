create database `demo-mvc`;

use `demo-mvc`;

create table users (
                       id int (11) primary key auto_increment,
                       name varchar(255) not null,
                       email varchar(255) not null,
                       password varchar(255) not null,
                       birthday date,
                       country varchar(225)
);

create table posts (
                       id int (11) primary key auto_increment,
                       user_id int(11),
                       title varchar(255),
                       content text(1000),
                       created_at timestamp default current_timestamp,
                       foreign key (user_id) references users(id) on delete cascade
);
