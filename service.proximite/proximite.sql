--
-- PostgreSQL database dump
--

-- Dumped from database version 9.6.5
-- Dumped by pg_dump version 9.6.5

-- Started on 2017-11-19 23:11:47

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

DROP DATABASE proximite;
--
-- TOC entry 2126 (class 1262 OID 57382)
-- Name: proximite; Type: DATABASE; Schema: -; Owner: postgres
--

CREATE DATABASE proximite WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'French_Canada.1252' LC_CTYPE = 'French_Canada.1252';


ALTER DATABASE proximite OWNER TO postgres;

\connect proximite

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- TOC entry 1 (class 3079 OID 12387)
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- TOC entry 2129 (class 0 OID 0)
-- Dependencies: 1
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 186 (class 1259 OID 57388)
-- Name: proximite; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE proximite (
    proximite_valeur real,
    proximite_date timestamp without time zone
);


ALTER TABLE proximite OWNER TO postgres;

--
-- TOC entry 185 (class 1259 OID 57383)
-- Name: temperature; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE temperature (
    temperature_degres real,
    temperature_date timestamp without time zone
);


ALTER TABLE temperature OWNER TO postgres;

--
-- TOC entry 2121 (class 0 OID 57388)
-- Dependencies: 186
-- Data for Name: proximite; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO proximite (proximite_valeur, proximite_date) VALUES (50, '2017-11-15 15:00:00');
INSERT INTO proximite (proximite_valeur, proximite_date) VALUES (27, '2017-11-11 17:45:54');
INSERT INTO proximite (proximite_valeur, proximite_date) VALUES (27, '2017-11-05 17:45:54');
INSERT INTO proximite (proximite_valeur, proximite_date) VALUES (12, '2017-11-05 17:32:54');


--
-- TOC entry 2120 (class 0 OID 57383)
-- Dependencies: 185
-- Data for Name: temperature; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO temperature (temperature_degres, temperature_date) VALUES (35, '2017-11-15 15:00:00');
INSERT INTO temperature (temperature_degres, temperature_date) VALUES (35.7000008, '2017-11-15 15:00:00');


--
-- TOC entry 2128 (class 0 OID 0)
-- Dependencies: 6
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

GRANT ALL ON SCHEMA public TO PUBLIC;


-- Completed on 2017-11-19 23:11:47

--
-- PostgreSQL database dump complete
--

