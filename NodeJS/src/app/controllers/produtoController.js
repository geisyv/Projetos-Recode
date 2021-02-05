const Produto = require('../models/produto');

module.exports = {
    listar: function(request,response) {

        Produto.listarProdutos(function(produto) {
            if (!produto) {
                return response.json({ erro: 'Não tem produtos cadastrados' });

            }

            return response.json(produto);
        });
    },
};