create table if not exists members
(
    id          integer unsigned auto_increment primary key,
    name        varchar(255),
    email       varchar(255),
    phone       varchar(255),
    password    varchar(255),
    interest    text,
    timezone    varchar(255),
    country     varchar(255),
    status      char(1),
    created_at  datetime,
    updated_at  datetime,

    key         member_email(email(15)),
    key         member_created_at(created_at),
    key         member_updated_at(updated_at)
);
