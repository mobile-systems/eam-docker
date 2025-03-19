--
-- Table structure for table ups
--
DROP TABLE IF EXISTS ups;
--
CREATE TABLE ups
(
  recid SERIAL  NOT NULL,
  model text    NOT NULL,
  mdesc text    DEFAULT '',
  place text    DEFAULT '',
  battery_type  text DEFAULT '',
  bat_external  text DEFAULT '',
  serno text NOT NULL,
  "timestamp" timestamp without time zone DEFAULT now(),
  CONSTRAINT pk_ups_recid PRIMARY KEY (recid)
);

INSERT INTO public.ups (code,cdesc) VALUES ('UPS 2','ИБП APC 3000');

CREATE TABLE ups (
  id SERIAL,
  --dt timestamp,
  idDriver INTEGER DEFAULT NULL,
  intensity INTEGER DEFAULT NULL,
  nightFlag varchar(45) DEFAULT NULL,
  author INTEGER DEFAULT NULL,
  logged timestamp DEFAULT NULL,
  PRIMARY KEY (id)
);
/*!40101 SET character_set_client = @saved_cs_client */;
COMMENT ON COLUMN ups.id IS 'Идентификатор ИБП';
--COMMENT ON COLUMN ups.dt IS 'Дата работы';
COMMENT ON COLUMN ups.idDriver IS 'Идентификатор водителя';
COMMENT ON COLUMN ups.intensity IS 'Интенсивность труда: 1/4 смены - 2 часа (425 руб.), 1/2 смены - 5 часов (850 руб.), полная смена - 10 часов (1700 руб.), 5/4 смены - 12 часов (переработка = ставка 17';
COMMENT ON COLUMN ups.nightFlag IS 'Признак ночной смены: 0 - нет, 1 - ночная смена';
COMMENT ON COLUMN ups.author IS 'Автор записи';
COMMENT ON COLUMN ups.logged IS 'Время и дата записи';
COMMENT ON TABLE public.ups IS 'Табель';