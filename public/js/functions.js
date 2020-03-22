require('../../resources/js/bootstrap');


function atualizarMortesPais(pais) {
    $.ajax({
        url: "{{route('atualizaMortesBrasil')}}",
        cache: false,
        method: 'GET',
        data: {
            country: pais
        },
        success: function (data) {
            $('#numeroMortesBrasil').text(parseInt(data).toLocaleString('pt-BR'));
        }
    });
}



function atualizarDadosPais(pais) {
    $.ajax({
        url: "{{route('atualizaCasosBrasil')}}",
        cache: false,
        method: 'GET',
        data: {
            country: pais
        },
        success: function (data) {
            $('#numeroCasosBrasil').text(parseInt(data).toLocaleString('pt-BR'));
        }
    });
}

function atualizarDadosMundo() {
    $.ajax({
        url: "{{route('atualizaCasosMundo')}}",
        cache: false,
        method: 'GET',
        success: function (data) {
            $('#numeroCasosMundo').text(parseInt(data).toLocaleString('pt-BR'));
        }
    });
}