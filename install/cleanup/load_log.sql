CREATE TABLE log (
    gid serial NOT NULL,
    "time" timestamp with time zone,
    "user" character(50),
    ip character(15),
    region character(50),
    message text
);
