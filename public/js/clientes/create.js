$(window).load(function(){
    $("#estado").on("change",function(){
        var dados = {
            codigoEstado: $(this).val()
        };
        $('#cidade').prop("disabled");
        $.ajax({
            type: 'post',
            url: 'buscaCidades',
            data: dados
        }).then(function(resposta){
            $('#cidade').html("");
            $.each(resposta.cidades,function(i, item){
                $('#cidade').append($('<option>', {
                    value: item.id,
                    text : item.nome
                }));
            });
        }).then(function(){
            $('#cidade').removeProp("disabled");
        });
    });

    $('#cep').mask('00000-000', {placeholder: "_____-___"});
    $('#tel_contato').mask('(00) 0000-0000', {placeholder: "(__)____-____"});
    $('#tel_geral').mask('(00) 0000-0000', {placeholder: "(__)____-____"});
    $('#cpf').mask('000.000.000-00', {placeholder: "___.___.___-__"});
    $('#cnpj').mask('00.000.000/0000-00', {placeholder: "__.___.___/____-__"});
    $("#cpf").on("change",function(){
        $("#cnpj").val("");
        if ($.trim($(this).val()).length >=13){
            $("[name='cnpj_cpf']").val($(this).val());
        }
    });
    $("#cnpj").on("change",function(){
        $("#cpf").val("");
        if ($.trim($(this).val()).length >=13){
            $("[name='cnpj_cpf']").val($(this).val());
        }
    });
});
