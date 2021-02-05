const comentario = require('../models/comentarios');
const Comentario = require('../models/comentarios');

module.exports = {
    criarComentario: function (request, response){
        Comentario.criar(request.body, function(){
            return response.json({sucesso:'mensagem inserida no banco de dados!'});
       
        });
        
    },
    listarComentarios:function(request, response){
        comentario.listar(function(comentarios){
            if (!comentarios){
                return response.json({erro:'Nenhum comentario'})
            }
            return response.json(comentarios);
        });
    
    },

};