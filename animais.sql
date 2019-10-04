--
-- PostgreSQL database dump
--

-- Dumped from database version 10.10 (Ubuntu 10.10-0ubuntu0.18.04.1)
-- Dumped by pg_dump version 10.10 (Ubuntu 10.10-0ubuntu0.18.04.1)

-- Started on 2019-09-27 11:47:16 -03

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- TOC entry 1 (class 3079 OID 13043)
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- TOC entry 2921 (class 0 OID 0)
-- Dependencies: 1
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 197 (class 1259 OID 16650)
-- Name: animais; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.animais (
    id integer NOT NULL,
    nome character varying(30) NOT NULL,
    descricao character varying(30) NOT NULL
);


ALTER TABLE public.animais OWNER TO postgres;

--
-- TOC entry 196 (class 1259 OID 16648)
-- Name: animais_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.animais_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.animais_id_seq OWNER TO postgres;

--
-- TOC entry 2922 (class 0 OID 0)
-- Dependencies: 196
-- Name: animais_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.animais_id_seq OWNED BY public.animais.id;


--
-- TOC entry 2788 (class 2604 OID 16653)
-- Name: animais id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.animais ALTER COLUMN id SET DEFAULT nextval('public.animais_id_seq'::regclass);


--
-- TOC entry 2913 (class 0 OID 16650)
-- Dependencies: 197
-- Data for Name: animais; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.animais (id, nome, descricao) FROM stdin;
21	wsgrdthj	jjhlçhj
22	hjlhjlhk	jkjkjkkj
20	jojo	kljklçj
\.


--
-- TOC entry 2923 (class 0 OID 0)
-- Dependencies: 196
-- Name: animais_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.animais_id_seq', 22, true);


--
-- TOC entry 2790 (class 2606 OID 16655)
-- Name: animais animais_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.animais
    ADD CONSTRAINT animais_pkey PRIMARY KEY (id);


-- Completed on 2019-09-27 11:47:16 -03

--
-- PostgreSQL database dump complete
--

