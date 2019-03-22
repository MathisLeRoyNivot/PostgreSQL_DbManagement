const express = require('express');
const path = require('path');

const app = express();

// Generating the login page
const getLoginPage = app.get('/', (req, res) => {
    const loginPage = path.join(__dirname, '../views/' + 'login.html');
    res.sendFile(loginPage);
});

// Generating the home page
const getHomePage = app.get('/home', (req, res) => {
    const loginPage = path.join(__dirname, '../views/' + 'home.html');
    res.sendFile(loginPage);
});

// Generating the create-schema page
const getCreateSchemaPage = app.get('/create-schema', (req, res) => {
    const createSchemaPage = path.join(__dirname, '../views/' + 'create-schema.html');
    res.sendFile(createSchemaPage);
});

// Generating the create-table page
const getCreateTablePage = app.get('/create-table', (req, res) => {
    const createSchemaPage = path.join(__dirname, '../views/' + 'create-table.html');
    res.sendFile(createSchemaPage);
});

// Generating the create-user page
const getCreateUserPage = app.get('/create-user', (req, res) => {
    const loginPage = path.join(__dirname, '../views/' + 'create-user.html');
    res.sendFile(loginPage);
});

module.exports = { 
    app,
    getLoginPage,
    getHomePage,
    getCreateTablePage,
    getCreateSchemaPage,
    getCreateUserPage,

}