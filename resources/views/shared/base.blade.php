<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Agenda Médica</title>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
       
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    </head>

    <body>
    <div id="app">
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/home') }}">
                        Agenda Médica
                    </a>
                </div>
                <div class="collapse navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li><a href="{{ route('funcionarios.index') }}">Usuários</a></li>
                        <li><a href="{{ route('pacientes.index') }}">Pacientes</a></li>
                        <li><a href="{{ route('doctors.index') }}">Médicos</a></li>
                        <li><a href="{{ route('agendamentos.index') }}">Agendamentos</a></li>
                        <li><a href="{{ route('medicos.index') }}">Api Médicos</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('register') }}">Cadastre-se</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative; padding-left:50px;"> <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:32px; height:32px; position:absolute; top:10px; left:10px; border-radius:50%"> {{ Auth::user()->name }} <span class="caret"></span>
                                </a> 
                            
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/perfil') }}"
                                           >
                                            Perfil
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Sair
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
       @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#agendamentos').DataTable({
                "processing": true,
                "serverSide": true,
                "bJQueryUI": true,
                "oLanguage": {
                    "sProcessing":   "Processando...",
                    "sLengthMenu":   "Mostrar _MENU_ registros",
                    "sZeroRecords":  "Não foram encontrados resultados",
                    "sInfo":         "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                    "sInfoEmpty":    "Mostrando de 0 até 0 de 0 registros",
                    "sInfoFiltered": "",
                    "sInfoPostFix":  "",
                    "sSearch":       "Buscar:",
                    "sUrl":          "",
                    "oPaginate": {
                        "sFirst":    "Primeiro",
                        "sPrevious": "Anterior",
                        "sNext":     "Seguinte",
                        "sLast":     "Último"
                    }
                },
                "ajax": "/api/agendamentos",
                "columns":[
                    {data: 'id'},
                    {data: 'paciente'},
                    {data: 'cpf'},
                    {data: 'medico'},
                    {data: 'dataconsulta'},
                    {data: 'horario'},
                    {data: 'status'},
                    {defaultContent: "<tr><a type='submit' href='{{url ('agendamentos.edit')}}' class='btn btn-warning' title='Editar'>Editar</a></tr>",
                    searchable:false,
                    sortable:false},
                    {defaultContent: "<tr><a type='submit' href='{{url ('agendamentos.destroy')}}' class='btn btn-danger' title='Editar'>Deletar</a></tr>",
                    searchable:false,
                    sortable:false},                
                ]
            });
        });
    </script>
    <script>
        $(document).ready(function(){
            $('#doctors').DataTable({
                "processing": true,
                "serverSide": true,
                "bJQueryUI": true,
                "oLanguage": {
                    "sProcessing":   "Processando...",
                    "sLengthMenu":   "Mostrar _MENU_ registros",
                    "sZeroRecords":  "Não foram encontrados resultados",
                    "sInfo":         "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                    "sInfoEmpty":    "Mostrando de 0 até 0 de 0 registros",
                    "sInfoFiltered": "",
                    "sInfoPostFix":  "",
                    "sSearch":       "Buscar:",
                    "sUrl":          "",
                    "oPaginate": {
                        "sFirst":    "Primeiro",
                        "sPrevious": "Anterior",
                        "sNext":     "Seguinte",
                        "sLast":     "Último"
                    }
                },
                "ajax": "/api/doctors", 
                "columns":[
                    {data: 'id'},
                    {data: 'nome'},
                    {data: 'especialidades'},
                    {data: 'crm'},
                    {data: 'telefone'},
                    {data: 'celular'},
                    {data: 'contratacao'},
                    {data: 'datainicio'},
                    {defaultContent: "<tr><a type='submit' href='{{url ('agendamentos/edit')}}' class='btn btn-warning' title='Editar'>Editar</a></tr>",
                    searchable:false,
                    sortable:false},
                    {defaultContent: "<tr><a type='submit' href='{{url ('agendamentos/edit')}}' class='btn btn-danger' title='Editar'>Deletar</a></tr>",
                    searchable:false,
                    sortable:false}, 
                ]
            });
        });
    </script>
    <script>
        $(document).ready(function(){
            $('#funcionarios').DataTable({
                "processing": true,
                "serverSide": true,
                "bJQueryUI": true,
                "oLanguage": {
                    "sProcessing":   "Processando...",
                    "sLengthMenu":   "Mostrar _MENU_ registros",
                    "sZeroRecords":  "Não foram encontrados resultados",
                    "sInfo":         "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                    "sInfoEmpty":    "Mostrando de 0 até 0 de 0 registros",
                    "sInfoFiltered": "",
                    "sInfoPostFix":  "",
                    "sSearch":       "Buscar:",
                    "sUrl":          "",
                    "oPaginate": {
                        "sFirst":    "Primeiro",
                        "sPrevious": "Anterior",
                        "sNext":     "Seguinte",
                        "sLast":     "Último"
                    }
                },
                "ajax": "/api/funcionarios",
                "columns":[
                    {data: 'id'},
                    {data: 'nome'},
                    {data: 'cpf'},
                    {data: 'rua'},
                    {data: 'numero'},
                    {data: 'bairroEndereco'},
                    {data: 'telefone'},
                    {data: 'celular'},
                    {data: 'cargo'},
                    {data: 'dataadmissao'},
                    {defaultContent: "<tr><a type='submit' href='{{url ('agendamentos/edit')}}' class='btn btn-warning' title='Editar'>Editar</a></tr>",
                    searchable:false,
                    sortable:false},
                    {defaultContent: "<tr><a type='submit' href='{{url ('agendamentos/edit')}}' class='btn btn-danger' title='Editar'>Deletar</a></tr>",
                    searchable:false,
                    sortable:false}, 
                ]
            });
        });
    </script>
    <script>
        $(document).ready(function(){
            $('#pacientes').DataTable({
                "processing": true,
                "serverSide": true,
                "bJQueryUI": true,
                "oLanguage": {
                    "sProcessing":   "Processando...",
                    "sLengthMenu":   "Mostrar _MENU_ registros",
                    "sZeroRecords":  "Não foram encontrados resultados",
                    "sInfo":         "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                    "sInfoEmpty":    "Mostrando de 0 até 0 de 0 registros",
                    "sInfoFiltered": "",
                    "sInfoPostFix":  "",
                    "sSearch":       "Buscar:",
                    "sUrl":          "",
                    "oPaginate": {
                        "sFirst":    "Primeiro",
                        "sPrevious": "Anterior",
                        "sNext":     "Seguinte",
                        "sLast":     "Último"
                    }
                },
                "ajax": "/api/pacientes",
                "columns":[
                    {data: 'id'},
                    {data: 'nome'},
                    {data: 'email'},
                    {data: 'idade'},
                    {data: 'sexo'},
                    {data: 'telefone'},
                    {data: 'celular'},
                    {data: 'convenio'},
                    {data: 'numeroconvenio'},
                    {defaultContent: "<tr><a type='submit' href='{{url ('agendamentos/edit')}}' class='btn btn-warning' title='Editar'>Editar</a></tr>",
                    searchable:false,
                    sortable:false},
                    {defaultContent: "<tr><a type='submit' href='{{url ('agendamentos/edit')}}' class='btn btn-danger' title='Editar'>Deletar</a></tr>",
                    searchable:false,
                    sortable:false}, 
                ]
            });
        });
    </script>
    </body>
</html>
