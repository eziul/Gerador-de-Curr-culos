{
    var nome = window.prompt('Olá! Qual é o seu nome?')
    window.alert(nome + '! Seja bem vindo ao gerador de Curriculo!')
}

$(function () {  

    $("#btn-adicionar-experiencia").click(function (e) {
        e.preventDefault();
    
        var linha = '<div class="card">' +
                    '<div class="card-body">'+
                    '   <label for="cempresa">Empresa:</label><input type="text" name="tempresa" id="cempresa" size="40" placeholder="Nome da empresa..."/>'+
                    '   <label for="cfuncao">Cargo:</label><input type="text" name="tfuncao" id="cfuncao" size="40" placeholder="Cargo exercido..."/>'+
                    '   <label for="cano">Ano Inicio:</label><input type="number" name="tano" id="cano" min="0" max="9999" placeholder="inicio..."/>'+
                    '   <label for="canofim">Ano Fim:</label><input type="number" name="tanofim" id="canofim" min="0" max="9999" placeholder="fim..."/>'+
                    '</div>'+
                    '<div></div>';
                
    $("#div-experiencia").append(linha);
});

$("#div-experiencia").on("click", ".btn-remover-item", function(){   
    $(this).parent().parent().parent().parent().remove();
})
});