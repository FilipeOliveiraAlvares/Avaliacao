$(function () {

    const pesquisaCEP = (cep) => {

        $.get(`https://viacep.com.br/ws/${cep}/json/`, function (data) {
            $(".result").html(data);
            console.log(data);
            $('#logradouro').val(data.logradouro);
            $('#bairro').val(data.bairro);
            $('#complemento').val(data.complemento);
            $('#cidade').val(data.localidade);
            $('#uf').val(data.uf);
        });
    }

    $("#btncep").on('click', function () {
        var cep = $('#cep').val();
        var cep = cep.replace(/-/, "");
        var cep = cep.replace('.', "");

        switch (cep.length) {
            case 8:
                pesquisaCEP(cep);
                break;

            default: alert('cep invalido');
        }
    });
});