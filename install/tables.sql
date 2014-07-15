--- basic data needs from the template files needs to be included!


-- basic trigger function
CREATE OR REPLACE FUNCTION inter_process_update()
  RETURNS trigger AS
$BODY$
DECLARE
 myrec record;
 n  text;
BEGIN
	IF(TG_OP = 'UPDATE') THEN
	  select NEW.* into myrec;
	  n := 'insert into ' || quote_ident(TG_table_schema) || '.inter_process ("svid", "name", "type", "value", "sid", "description", "show", "order", "timestamp", "function") select ' || quote_literal(myrec.svid) ||', ' || quote_literal(myrec.name) ||', ' || quote_literal(myrec.type) ||', ' || quote_literal(myrec.value) ||', ' || quote_literal(myrec.sid) ||', ' || quote_literal(myrec.description) ||', ' || quote_literal(myrec.show) ||', ' || quote_literal(myrec.order) ||', now(), ' || quote_literal('update');
	  execute n;
	  return NEW;
	END IF;

	RETURN NULL;
END
$BODY$
  LANGUAGE plpgsql VOLATILE
  COST 100;

-- this is the table holding single variables
CREATE TABLE result_simple_variables
(
  id serial NOT NULL,
  "value" text,
  "name" text,
  CONSTRAINT result_simple_variables_pkey PRIMARY KEY (id)
)
WITH (
  OIDS=FALSE
);

-- table for communication within the dashboards
CREATE TABLE inter_process
(
  id serial NOT NULL,
  svid integer,
  "name" text,
  "type" text,
  "value" text,
  sid bigint,
  description text,
  "show" integer,
  "order" integer,
  "timestamp" timestamp without time zone DEFAULT ('now'::text)::timestamp without time zone,
  "function" text,
  CONSTRAINT inter_process_pkey PRIMARY KEY (id)
)
WITH (
  OIDS=FALSE
);

-- this table holds all the different modules
CREATE TABLE station
(
  sid serial NOT NULL,
  "name" text,
  stid integer,
  status text,
  status_change timestamp without time zone,
  request text,
  request_change timestamp without time zone,
  CONSTRAINT public_station_pkey PRIMARY KEY (sid)
)
WITH (
  OIDS=FALSE
);

-- templates for modules
CREATE TABLE station_template
(
  stid serial NOT NULL,
  "name" text,
  "type" text,
  CONSTRAINT public_station_template_pkey PRIMARY KEY (stid)
)
WITH (
  OIDS=FALSE
);

INSERT INTO station_template VALUES (1, 'New Processing', 'module');
INSERT INTO station_template VALUES (4, 'New Input', 'input');
INSERT INTO station_template VALUES (5, 'New Visualization', 'viz');


-- this table holds the main info about the modules
CREATE TABLE station_variables
(
  svid serial NOT NULL,
  "name" text,
  "type" text,
  "value" text,
  sid bigint,
  description text,
  "show" integer,
  "order" integer,
  options text,
  CONSTRAINT public_station_variables_pkey PRIMARY KEY (svid)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE station_variables OWNER TO rob;

-- this trigger allows the "magic" syncronization 
CREATE TRIGGER public_inter_process_trigger
  AFTER INSERT OR UPDATE OR DELETE
  ON station_variables
  FOR EACH ROW
  EXECUTE PROCEDURE inter_process_update();

-- template for the main info

CREATE TABLE station_variables_template
(
  svtid serial NOT NULL,
  "name" text,
  "type" text,
  "value" text,
  stid bigint,
  description text,
  "show" integer,
  "order" integer,
  options text,
  CONSTRAINT public_station_variables_template_pkey PRIMARY KEY (svtid)
)
WITH (
  OIDS=FALSE
);

INSERT INTO station_variables_template VALUES (26, 'type', 'text', 'text', 5, 'Visualization Type', 1, 7, NULL);
INSERT INTO station_variables_template VALUES (23, 'options', 'text', NULL, 5, 'Options', 1, 5, NULL);
INSERT INTO station_variables_template VALUES (30, 'value', 'text', NULL, 5, 'Value', 1, 2, NULL);
INSERT INTO station_variables_template VALUES (31, 'options', 'text', NULL, 1, 'Options', 1, 6, NULL);
INSERT INTO station_variables_template VALUES (17, 'moduletype', 'text', 'module', 1, 'Type', -1, 5, NULL);
INSERT INTO station_variables_template VALUES (18, 'moduletype', 'text', 'input', 4, 'Type', -1, 11, NULL);
INSERT INTO station_variables_template VALUES (19, 'moduletype', 'text', 'viz', 5, 'Type', -1, 0, NULL);
INSERT INTO station_variables_template VALUES (20, 'name', 'text', 'Visualization', 5, 'Name', 1, 1, NULL);
INSERT INTO station_variables_template VALUES (21, 'x', 'integer', '0', 5, 'X-Coordinate', 0, 0, NULL);
INSERT INTO station_variables_template VALUES (22, 'y', 'integer', '0', 5, 'Y-Coordinate', 0, 0, NULL);
INSERT INTO station_variables_template VALUES (1, 'name', 'text', 'Module', 1, 'Name', 1, 1, NULL);
INSERT INTO station_variables_template VALUES (5, 'name', 'text', 'Input', 4, 'Name', 1, 1, NULL);
INSERT INTO station_variables_template VALUES (8, 'y', 'integer', '0', 4, 'Y-Coordinate', 0, 3, NULL);
INSERT INTO station_variables_template VALUES (7, 'x', 'integer', '0', 4, 'X-Coordinate', 0, 2, NULL);
INSERT INTO station_variables_template VALUES (4, 'y', 'integer', '0', 1, 'Y-Coordinate', 0, 3, NULL);
INSERT INTO station_variables_template VALUES (3, 'x', 'integer', '0', 1, 'X-Coordinate', 0, 2, NULL);
INSERT INTO station_variables_template VALUES (9, 'value', 'text', NULL, 4, 'Value', 1, 4, NULL);
INSERT INTO station_variables_template VALUES (14, 'options', 'text', NULL, 4, 'Options', 1, 9, NULL);
INSERT INTO station_variables_template VALUES (13, 'type', 'text', 'integer', 4, 'Input Type', 1, 8, NULL);
INSERT INTO station_variables_template VALUES (16, 'phpfile', 'text', NULL, 1, 'Processing Type', 1, 4, NULL);
