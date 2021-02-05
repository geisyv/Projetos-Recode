const express = require('express');

const routes = require('./src/routes');

const server = express();

server.use(express.static('public'));

server.use(express.json());
server.use(express.urlencoded({ extended: true }));

server.set('view engine', 'ejs');
server.set('views', './src/app/views');

server.use(routes);

server.listen(3333, function () {
  console.log('Servidor rodando...');
});