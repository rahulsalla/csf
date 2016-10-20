CREATE TABLE users
(
  id serial NOT NULL,
  username text,
  pw text,
  network text,
  region text,
  note text,
  CONSTRAINT users_pkey PRIMARY KEY (id )
);
