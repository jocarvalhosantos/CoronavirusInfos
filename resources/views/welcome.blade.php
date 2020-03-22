<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Corona Vírus Realtime</title>

    {{-- jQuery e Popper.js --}}
    <!-- First include jquery js -->
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    <!-- Then include bootstrap js -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">
    </script>

    {{-- Fim jQUery e Popper.js --}}

    {{-- Bootstrap --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    {{-- Fim Bootstrap --}}



    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js" rel="stylesheet">
    <!-- Styles -->

</head>

<body class="bg-dark">
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <i class="fas fa-angle-double-right"></i>
            Corona Virus Realtime Data
        </a>
        <ul class="navbar-nav ml-auto text-white">
            Fonte: <a href="https://www.worldometers.info/coronavirus/">WorldOMeter</a>
        </ul>
    </nav>
    
        <div class="d-flex bd-highlight ">
            

            <div class="p-2  bd-highlight w-100">
                <div class="card w-100 text-white bg-info m-1">
                    <div class="card-header">
                      Mundo
                    </div>
                    <div class="card-body">
                      <blockquote class="blockquote mb-0">
                        <center><p><label id="numeroCasosMundo"></label> casos confirmados</p></center>
                        <center><p><label id="numeroMortesMundo"></label> mortes confirmadas</p></center>
                        <center><p><label id="numeroRecuperadosMundo"></label> recuperações confirmadas</p></center>
                        <center><p><label id="numeroCasosHojeMundo"></label> casos confirmados hoje</p></center>
                        <center><p><label id="numeroMortesHojeMundo"></label> mortes confirmadas hoje</p></center>
                        {{-- <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer> --}}
                      </blockquote>
                    </div>
                  </div>
            </div>


            <div class="p-2 bd-highlight w-100 ">
                <div class="card text-white bg-info w-100 m-1">
                    <div class="card-header">
                      Brasil
                    </div>
                    <div class="card-body ">
                      <blockquote class="blockquote">
                        <center><p class="text-yellow"><label id="numeroCasosBrazil" ></label> casos confirmados</p></center>
                        <center><p><label id="numeroMortesBrazil" class="text-red"></label> mortes confirmadas</p></center>
                        <center><p><label id="numeroRecuperadosBrazil" class="text-green"></label> recuperações confirmadas</p></center>
                        <center><p><label id="numeroCasosHojeBrazil" class="text-white"></label> casos confirmados hoje</p></center>
                        <center><p><label id="numeroMortesHojeBrazil" class="text-white"></label> mortes confirmadas hoje</p></center>
                        {{-- <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer> --}}
                      </blockquote>
                    </div>
                  </div>
            </div>

            <div class="p-2 bd-highlight w-100">
                <div class="card text-white bg-info w-100 m-1">
                    <div class="card-header">
                      Itália
                    </div>
                    <div class="card-body">
                      <blockquote class="blockquote">
                        <center><p class="text-yellow"><label id="numeroCasosItaly" ></label> casos confirmados</p></center>
                        <center><p><label id="numeroMortesItaly" class="text-red"></label> mortes confirmadas</p></center>
                        <center><p><label id="numeroRecuperadosItaly" class="text-green"></label> recuperações confirmadas</p></center>
                        <center><p><label id="numeroCasosHojeItaly" class="text-white"></label> casos confirmados hoje</p></center>
                        <center><p><label id="numeroMortesHojeItaly" class="text-white"></label> mortes confirmadas hoje</p></center>
                        {{-- <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer> --}}
                      </blockquote>
                    </div>
                  </div>
            </div>


            <div class="p-2 bd-highlight w-100">
                <div class="card text-white bg-info w-100 m-1">
                    <div class="card-header">
                      China
                    </div>
                    <div class="card-body">
                      <blockquote class="blockquote">
                        <center><p class="text-yellow"><label id="numeroCasosChina" ></label> casos confirmados</p></center>
                        <center><p><label id="numeroMortesChina" class="text-red"></label> mortes confirmadas</p></center>
                        <center><p><label id="numeroRecuperadosChina" class="text-green"></label> recuperações confirmadas</p></center>
                        <center><p><label id="numeroCasosHojeChina" class="text-white"></label> casos confirmados hoje</p></center>
                        <center><p><label id="numeroMortesHojeChina" class="text-white"></label> mortes confirmadas hoje</p></center>
                        {{-- <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer> --}}
                      </blockquote>
                    </div>
                  </div>
            </div>

            <div class="p-2 bd-highlight w-100">
                <div class="card text-white bg-info w-100 m-1">
                    <div class="card-header">
                      Irã
                    </div>
                    <div class="card-body">
                      <blockquote class="blockquote">
                        <center><p class="text-yellow"><label id="numeroCasosIran" ></label> casos confirmados</p></center>
                        <center><p><label id="numeroMortesIran" class="text-red"></label> mortes confirmadas</p></center>
                        <center><p><label id="numeroRecuperadosIran" class="text-green"></label> recuperações confirmadas</p></center>
                        <center><p><label id="numeroCasosHojeIran" class="text-white"></label> casos confirmados hoje</p></center>
                        <center><p><label id="numeroMortesHojeIran" class="text-white"></label> mortes confirmadas hoje</p></center>
                        {{-- <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer> --}}
                      </blockquote>
                    </div>
                  </div>
            </div>




        </div>
      
          
   

</body>

<script>
    $(document).ready(function (e) {
        atualizarDadosMundo();
        atualizarDadosPais('Brazil');
        atualizarDadosPais('Italy');
        atualizarDadosPais('China');
        atualizarDadosPais('Iran');
        setInterval(() => {
            atualizarDadosMundo();
            atualizarDadosPais('Brazil');
            atualizarDadosPais('Italy');
             atualizarDadosPais('China');
             atualizarDadosPais('Iran');
            console.log('Atualizando Casos...');

        }, 5000);

    });


    function atualizarDadosPais(pais) {
        $.ajax({
            url: "{{route('atualizaDadosPais')}}",
            cache: false,
            method: 'GET',
            data: {
                country: pais
            },
            success: function (data) {
               
              
                $('#numeroCasos'+pais).text(parseInt(data['allCases']).toLocaleString('pt-BR')=='NaN'? 0 : parseInt(data['allCases']).toLocaleString('pt-BR'));
                $('#numeroMortes'+pais).text(parseInt(data['allDeaths']).toLocaleString('pt-BR')=='NaN'? 0 : parseInt(data['allDeaths']).toLocaleString('pt-BR'));
                $('#numeroRecuperados'+pais).text(parseInt(data['allRecovered']).toLocaleString('pt-BR')=='NaN'? 0 : parseInt(data['allRecovered']).toLocaleString('pt-BR'));
                $('#numeroCasosHoje'+pais).text(parseInt(data['todayCases']).toLocaleString('pt-BR')=='NaN'? 0 : parseInt(data['todayCases']).toLocaleString('pt-BR'));
                $('#numeroMortesHoje'+pais).text(parseInt(data['todayDeaths']).toLocaleString('pt-BR')=='NaN'? 0 : parseInt(data['todayDeaths']).toLocaleString('pt-BR'));
            }
        });
    }
    function atualizarDadosMundo() {
        $.ajax({
            url: "{{route('atualizaDadosMundo')}}",
            cache: false,
            method: 'GET',
            success: function (data) {
             
                $('#numeroCasosMundo').text(parseInt(data['allCases']).toLocaleString('pt-BR'));
                $('#numeroMortesMundo').text(parseInt(data['allDeaths']).toLocaleString('pt-BR'));
                $('#numeroRecuperadosMundo').text(parseInt(data['allRecovered']).toLocaleString('pt-BR'));
                $('#numeroCasosHojeMundo').text(parseInt(data['allTodayCases']).toLocaleString('pt-BR'));
                $('#numeroMortesHojeMundo').text(parseInt(data['allTodayDeaths']).toLocaleString('pt-BR'));
            }
        });
    }
   

    
</script>

</html>
