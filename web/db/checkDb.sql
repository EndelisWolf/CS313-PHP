CREATE DATABASE todo;

/c todo

\dt -- Lists the tables
eg \d public.user
\d+ public.user -- shows the details of the user table
\q -- quite the application and go back to prompt

CREATE TABLE users (
    id              SERIAL PRIMARY KEY,
    name            TEXT NOT NULL UNIQUE,
    username        TEXT NOT NULL UNIQUE,
    password        TEXT NOT NULL
);

CREATE TABLE note_order (
    id              SERIAL PRIMARY KEY,
    method          TEXT UNIQUE NOT NULL -- The method to organize the table.
);

CREATE TABLE list (
    id              SERIAL PRIMARY KEY,
    noteEntry       Text NOT NULL,
    usersId         int REFERENCES users(id),
    dueDate         date,
    orderId         int REFERENCES note_order(id)        
);