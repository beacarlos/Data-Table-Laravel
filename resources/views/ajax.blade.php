<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.min.css') }}">
    <style>
        .dataTables_filter { 
            display: none; 
        }
    </style>
</head>
<body>
    <div class="ui container">
        <div class="ui form">
            <div class="fields">
                <div class="field">
                  <label>Pesquisar</label>
                  <input type="text" class="filter-input" id="filter-input" name="filter-input" placeholder="Pesquisar" data-column="0">
                </div>
                <div class="field">
                  <label>Middle name</label>
                  <input type="text" placeholder="Middle Name">
                </div>
                <div class="field">
                  <label>Last name</label>
                  <input type="text" placeholder="Last Name">
                </div>
            </div>
        </div>
        <table class="ui green celled table center aligned tabelaRegistros" name="tabelaRegistros"
        id="tabelaRegistros">
            <thead>
                <tr>
                    <th>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Primeiro Nome</font>
                        </font>
                    </th>
                    <th>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Segundo Nome</font>
                        </font>
                    </th>
                    <th>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Email</font>
                        </font>
                    </th>
                    <th>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Ações</font>
                        </font>
                    </th>
                </tr>
            </thead>
            <tbody id="tbodyRegistro"></tbody>
        </table>
    </div>
    <script
    src="https://code.jquery.com/jquery-3.1.1.min.js"
    integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
    crossorigin="anonymous"></script>
    <script src="{{ asset('js/semantic.min.js') }}"></script>   composer require yajra/laravel-datatables-oracle:"~9.0"
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.semanticui.min.js"></script>
    <script src="{{ asset('js/acentos.js') }}"></script>
    <script>
        var acoes = '<button class="ui button yellow create_btn test" type="button" id="test">Create</button><button class="ui red icon button"><i class="trash alternate outline icon"></i></button>';
        $(document).ready(function() {
          var tabela =  $('#tabelaRegistros').DataTable({
            "lengthChange": false,
            "pageLength": 10,
            "searching": true,
            "order": [ 1, "asc" ],
            "processing": true,
            "serverSide": true,
            "ajax": "{{route('api.index')}}",
            "columns":[
                {'data':'first_name'},
                {'data':'last_name'},
                {'data':'email'},
                {
				"defaultContent": acoes,
				"sortable": false
			    }
            ],
            "bJQueryUI": true,
            "oLanguage": {
                "lengthChange": false,
                "pageLength": 10,
                "sProcessing":   "Processando...",
                "sLengthMenu":   "Mostrar _MENU_ registros",
                "sZeroRecords":  "Não foram encontrados resultados",
                "sInfo":         "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                "sInfoEmpty":    "Mostrando de 0 até 0 de 0 registros",
                "sInfoFiltered": "",
                "sInfoPostFix":  "",
                "sSearch":       "",
                "sUrl":          "",
                "oPaginate": {
                    "sFirst":    "Primeiro",
                    "sPrevious": "Anterior",
                    "sNext":     "Próximo",
                    "sLast":     "Último"
                }
            }
            });
          //filtragemTabela();
          $("#filter-input").keyup(function() {
            var pesquisar = $(this).val();
            tabela.search(pesquisar).draw();
            });
        });

        //Função DataTable
        function dataTable() {

        }

        //Função filtragem da tabela
        function filtragemTabela() {
            
        }
    </script>
</body>
</html>