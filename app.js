const http = require("http");
const { argv } = require("yargs");
const routes = require('./routes/routing');
const express = require('express');
const http = require('http');
const path = require('path');

const app = express();

//Launch server on port given by the user
http.Server(app);
app.listen(port, () => {
    console.log(`Server is running on port : ${port}\nYou can routing to the server at the following address :\x1b[31m http://localhost:${port}/`)
})

module.exports = {};