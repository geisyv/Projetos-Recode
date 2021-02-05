const express = require('express');

const routes = express.Router();

const produtoController = require('../app/controllers/produtoController');
const comentariosController = require('../app/controllers/comentariosController');

routes.get('/', produtoController.listar);
routes.post('/comentarios', comentariosController.criarComentario);
routes.get('/comentarios', comentariosController.listarComentarios);

module.exports = routes;
