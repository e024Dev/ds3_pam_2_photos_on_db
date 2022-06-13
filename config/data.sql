create table images(
    id int(11) not null auto_increment,
    image longblob not null,
    created DATETIME not null default CURRENT_TIMESTAMP,
    primary key(id)
);