create table if not exists messages
(
    id          integer unsigned auto_increment primary key,
    name        varchar(255),
    email       varchar(255),
    phone       varchar(255),
    password    varchar(255),
    timezone    varchar(255),
    country     varchar(255),
    content     text,
    status      char(1),
    created_at  datetime,
    updated_at  datetime,

    key         message_email(email(15)),
    key         message_created_at(created_at),
    key         message_updated_at(updated_at)
);
