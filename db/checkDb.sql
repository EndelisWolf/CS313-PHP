CREATE DATABASE todo;

/c todo

\dt -- Lists the tables
eg \d public.user
\d+ public.user -- shows the details of the user table
\q -- quite the application and go back to prompt

CREATE TABLE public.users (
    id              SERIAL PRIMARY KEY,
    name            TEXT NOT NULL UNIQUE,
    username        TEXT NOT NULL UNIQUE,
    password        TEXT NOT NULL
);

CREATE TABLE public.order (
    id              SERIAL PRIMARY KEY,
    method          TEXT UNIQUE NOT NULL -- The method to organize the table.
);

CREATE TABLE public.list (
    id              SERIAL PRIMARY KEY,
    entry           Text NOT NULL,
    usersId         int REFERENCES public.users(id),
    date            date,
    orderId         int REFERENCES public.order(id)        
);