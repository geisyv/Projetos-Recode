const db = require('../../config/database');

module.exports = function listarProdutos(callback) {
    const consulta = 'SELECT * FROM produto';

    db.query(consulta, function(erro, resultado) {
        if (erro) {
            return new Error(`Erro no banco de dados: ${erro}`);
        }
        callback(resultado);
    });
};