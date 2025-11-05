DELIMITER //

drop table if exists user;
//

create table user(
                     id int AUTO_INCREMENT PRIMARY KEY,
                     uuid varchar(60),
                     username varchar(30),
                     password varchar(255),
                     email varchar(255),
                     edad integer,
                     type enum ('NORMAL', 'ANUNCIOS', 'ADMIN')
);
//

alter table user add constraint uk_user_uuid unique (uuid);
alter table user add constraint uk_user_username unique (username);
alter table user add constraint uk_user_email unique (email);
//
