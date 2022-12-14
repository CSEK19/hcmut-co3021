--
-- PostgreSQL database dump
--

-- Dumped from database version 14.6
-- Dumped by pg_dump version 14.6

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

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: category; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.category (
    id smallint NOT NULL,
    name character varying(7) DEFAULT NULL::character varying
);


ALTER TABLE public.category OWNER TO postgres;

--
-- Name: feedback; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.feedback (
    id smallint NOT NULL,
    note character varying(30) DEFAULT NULL::character varying,
    user_id smallint,
    product_id smallint,
    created_at character varying(19) DEFAULT NULL::character varying,
    updated_at character varying(19) DEFAULT NULL::character varying,
    status smallint
);


ALTER TABLE public.feedback OWNER TO postgres;

--
-- Name: order_details; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.order_details (
    id smallint NOT NULL,
    order_id smallint,
    product_id smallint,
    price integer,
    num smallint,
    total_money integer
);


ALTER TABLE public.order_details OWNER TO postgres;

--
-- Name: orders; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.orders (
    id smallint NOT NULL,
    fullname character varying(9) DEFAULT NULL::character varying,
    email character varying(18) DEFAULT NULL::character varying,
    phone integer,
    user_id smallint,
    status smallint,
    deleted smallint,
    address character varying(8) DEFAULT NULL::character varying,
    created_at character varying(19) DEFAULT NULL::character varying,
    total_money integer
);


ALTER TABLE public.orders OWNER TO postgres;

--
-- Name: payments; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.payments (
    id character varying(1) DEFAULT NULL::character varying NOT NULL,
    order_id character varying(1) DEFAULT NULL::character varying,
    user_id smallint,
    money character varying(1) DEFAULT NULL::character varying,
    note character varying(1) DEFAULT NULL::character varying,
    vnp_response_code character varying(1) DEFAULT NULL::character varying,
    code_vnpay character varying(1) DEFAULT NULL::character varying,
    code_bank character varying(1) DEFAULT NULL::character varying,
    "time" character varying(1) DEFAULT NULL::character varying
);


ALTER TABLE public.payments OWNER TO postgres;

--
-- Name: product; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.product (
    id smallint NOT NULL,
    category_id smallint,
    title character varying(41) DEFAULT NULL::character varying,
    price character varying(8) DEFAULT NULL::character varying,
    discount character varying(8) DEFAULT NULL::character varying,
    thumbnail character varying(113) DEFAULT NULL::character varying,
    description character varying(480) DEFAULT NULL::character varying,
    created_at character varying(19) DEFAULT NULL::character varying,
    updated_at character varying(19) DEFAULT NULL::character varying,
    deleted smallint
);


ALTER TABLE public.product OWNER TO postgres;

--
-- Name: role; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.role (
    id smallint NOT NULL,
    name character varying(5) DEFAULT NULL::character varying
);


ALTER TABLE public.role OWNER TO postgres;

--
-- Name: tokens; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.tokens (
    user_id smallint,
    token character varying(32) DEFAULT NULL::character varying NOT NULL,
    created_at character varying(19) DEFAULT NULL::character varying
);


ALTER TABLE public.tokens OWNER TO postgres;

--
-- Name: user; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public."user" (
    id smallint NOT NULL,
    fullname character varying(7) DEFAULT NULL::character varying,
    email character varying(17) DEFAULT NULL::character varying,
    phone_number integer,
    address integer,
    password character varying(32) DEFAULT NULL::character varying,
    role_id smallint,
    deleted smallint
);


ALTER TABLE public."user" OWNER TO postgres;

--
-- Name: category category_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.category
    ADD CONSTRAINT category_pkey PRIMARY KEY (id);


--
-- Name: feedback feedback_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.feedback
    ADD CONSTRAINT feedback_pkey PRIMARY KEY (id);


--
-- Name: order_details order_details_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.order_details
    ADD CONSTRAINT order_details_pkey PRIMARY KEY (id);


--
-- Name: orders orders_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.orders
    ADD CONSTRAINT orders_pkey PRIMARY KEY (id);


--
-- Name: payments payments_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.payments
    ADD CONSTRAINT payments_pkey PRIMARY KEY (id);


--
-- Name: product product_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.product
    ADD CONSTRAINT product_pkey PRIMARY KEY (id);


--
-- Name: role role_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.role
    ADD CONSTRAINT role_pkey PRIMARY KEY (id);


--
-- Name: tokens tokens_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tokens
    ADD CONSTRAINT tokens_pkey PRIMARY KEY (token);


--
-- Name: user user_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."user"
    ADD CONSTRAINT user_pkey PRIMARY KEY (id);


--
-- Name: order_details a; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.order_details
    ADD CONSTRAINT a FOREIGN KEY (order_id) REFERENCES public.orders(id);


--
-- Name: orders fk_ordersuccess; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.orders
    ADD CONSTRAINT fk_ordersuccess FOREIGN KEY (user_id) REFERENCES public."user"(id);


--
-- Name: tokens fk_token; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tokens
    ADD CONSTRAINT fk_token FOREIGN KEY (user_id) REFERENCES public."user"(id);


--
-- Name: order_details order_details_ibfk_1; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.order_details
    ADD CONSTRAINT order_details_ibfk_1 FOREIGN KEY (product_id) REFERENCES public.product(id);


--
-- Name: payments paymentuserid; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.payments
    ADD CONSTRAINT paymentuserid FOREIGN KEY (user_id) REFERENCES public."user"(id);


--
-- Name: product product_ibfk_1; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.product
    ADD CONSTRAINT product_ibfk_1 FOREIGN KEY (category_id) REFERENCES public.category(id);


--
-- Name: feedback productreview; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.feedback
    ADD CONSTRAINT productreview FOREIGN KEY (product_id) REFERENCES public.product(id);


--
-- Name: user user_ibfk_; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."user"
    ADD CONSTRAINT user_ibfk_ FOREIGN KEY (role_id) REFERENCES public.role(id);


--
-- Name: feedback userreview; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.feedback
    ADD CONSTRAINT userreview FOREIGN KEY (user_id) REFERENCES public."user"(id);


--
-- PostgreSQL database dump complete
--

