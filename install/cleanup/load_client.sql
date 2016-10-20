-- table for the remote control
CREATE TABLE clients (
    gid serial,
    dashboard character varying(10),
    id text,
    uid text,
    "timestamp" timestamp without time zone,
    login text
);

