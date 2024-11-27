<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

        <title>Document</title>
        <style>
            * {
                scroll-behavior: smooth;
            }

            .banner {
                width: 100%;
                height: auto;
                display: block;
                margin: 0;
                padding-top: 58px;
            }

            #paragrafo {
                position: relative;
                margin-top: -400px;
                color: white;
                font-size: 60px;
                text-align: center;

            }

            .container {
                text-align: center;
            }

            .centralizado {
                display: inline-block;
            }

            #sobre {
                display: flex;
                flex-direction: row;
                align-items: center;
                justify-content: center;
                flex-wrap: wrap;
                text-align: justify;
            }

            #sobre img {
                max-width: 100%;
                height: auto;
            }

            .texto-sobre {
                font-size: 30px;
                max-width: 600px;
                margin-left: 20px;
            }

            @media (max-width: 768px) {
                #sobre {
                    flex-direction: column;
                }

                .texto-sobre {
                    margin-left: 0;
                    margin-top: 20px;
                }
            }

            body {
                background-color: #f8f9fa;
            }

            .card {
                border: none;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                height: 40px;
                padding-top: 60px
            }

            .card-header {
                color: #000;
                border-bottom: none;
                border-top-left-radius: 10px;
                border-top-right-radius: 10px;
            }

            .btn-primary {
                background-color: #007bff;
                border-color: #007bff;
            }

            .form-control {
                height: calc(1.5em + 0.75rem + 2px);
            }

            .foo2 {
                height: 50px;
                font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                background-color: #7e4700;
                color: #fff;
                padding: 15px;
                text-align: center;
                margin-top: 50px;
            }

            #servicos {
                flex-direction: column;
                display: block;
                font-size: text-bold;
                display: inline;
               
            }

            #feedbacks {
                margin-top: 500px;
            }
            #listagem{
                margin-top:80px
            }

            .btn-marrom {
                background-color: #6f4f37;
                border-color: #6f4f37;
            }

            .btn-marrom:hover {
                background-color: #5b3e26;
                border-color: #5b3e26;
            }

            .form-control {
                border-color: #6f4f37;
            }

            .form-control:focus {
                border-color: #5b3e26;
                box-shadow: 0 0 0 0.2rem rgba(111, 79, 55, 0.25);
            }

            .text-dark {
                color: #6f4f37 !important;
            }


            .form-check-label {
                color: #6f4f37;
            }

            input:focus,
            select:focus,
            textarea:focus {
                border-color: #5b3e26;
                box-shadow: 0 0 0 0.2rem rgba(111, 79, 55, 0.25);
            }

            #feedbacks {
                padding-top: 250px;
            }

            body {
                font-family: 'lato', sans-serif;
            }

            .container {
                max-width: 1000px;
                margin-left: auto;
                margin-right: auto;
                padding-left: 10px;
                padding-right: 10px;
            }

            h2 {
                font-size: 26px;
                margin: 20px 0;
                text-align: center;

                small {
                    font-size: 0.5em;
                }
            }

            .table-container {
                border: 1px solid #dee2e6;
                padding: 1rem;
                background-color: white;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                border-radius: 8px;
                width: 100%;
                max-width: 100%;
                overflow-x: auto;
            }

            .table thead th {
                background-color: #f8f9fa;
            }

            .table th,
            .table td {
                white-space: nowrap;
                padding: 0.75rem;
            }

            .table thead th,
            .table tbody td {
                width: auto;
            }

            .table-container .btn {
                margin: 0 0.2rem;
            }

            .table-container .btn-danger {
                margin-left: 0;
            }
        </style>
    </head>

    <body>
        @section('content')
        @include('layouts.navigation')

        <img class="banner" id="inicio" src="{{asset('images/reserva.png')}}" alt="">

        <div id="sobre" class="d-flex align-items-center justify-content-center flex-wrap" style="padding-top: 65px;">
            <img src="{{asset('images/sobre.png')}}" alt="Imagem sobre WMreservas" class="img-fluid" style="max-width: 40%; height: auto;">
            <p class="texto-sobre" style="font-size:30px; max-width: 600px; margin-left: 20px;">
                Olá nós somos a <span style="color: red;">WMreservas</span> uma rede de reservas de mesas de restaurantes que visamos facilitar esse processo!
            </p>
        </div>
        <div class="row">
            <div id="servicos" class="col py-3 mx-md-6">
                <h5>
                    <p class="texto-sobre" style="font-size:143px; max-width: 600px; margin-left: 20px;">
                        reservas de mesas
                    </p>
            </div>
            <div id="servicos" class="col py-3 mx-md-6">
                <h5>
                    <p class="texto-sobre" style="font-size:138px; max-width: 600px; margin-left: 20px;">
                        espaço de feedbacks
                    </p>
            </div>
        </div>
        <div class="container mt-5 d-flex justify-content-center" id="agendamentos">
            <div class="card" style="width: 500px; background-color: #F4F1E1; border-radius: 10px;">
                <div class="card-header text-center py-3" style="background-color:  #A64F03; color:white; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                    <h1 class="card-title mb-0">Agendamento de Mesas</h1>
                </div>
                <div class="card-body">
                    <form action="{{ route('reservas.store')}}" method="post">
                        @csrf
                        @PUT
                        <div class="mb-3">
                            <label for="nome" class="form-label" style="color: #2C3E50;">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" required style="border-color: #8E735B;">
                        </div>
                        <div class="mb-3">
                            <label for="numeroMesa" class="form-label" style="color: #2C3E50;">Número da Mesa</label>
                            <input type="text" class="form-control" id="numero_mesa" name="numero_mesa" required style="border-color: #8E735B;" bg-collor:yellow;>
                        </div>
                        <div class="mb-3">
                            <label for="cadeiras" class="form-label" style="color: #2C3E50;">Cadeiras</label>
                            <input type="tel" class="form-control" id="cadeiras" name="cadeiras" required style="border-color: #8E735B;">
                        </div>
                        <div class="mb-3">
                            <label for="data" class="form-label" style="color: #2C3E50;">Data</label>
                            <input type="date" class="form-control" id="data" name="data" required style="border-color: #8E735B;">
                        </div>
                        <div class="mb-3">
                            <label for="hora" class="form-label" style="color: #2C3E50;">Hora</label>
                            <input type="time" class="form-control" id="hora" name="hora" required style="border-color: #8E735B;">
                        </div>
                        <button type="submit" class="btn btn-primary w-100" name="submit" style="background-color: #A64F03; border: none; border-radius: 5px;">Agendar</button>
                    </form>
                </div>
            </div>
            </form>
        </div>
        <div>
            <form action="{{ route('feedback.store') }}" method="post" id="feedbacks">
                @csrf
                <div class="container">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="inputName" class="text-dark">Nome</label>
                            <input type="text" class="form-control" id="inputName" placeholder="Nome">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputfeedback" class="text-dark">Feedback</label>
                            <input type="text" class="form-control" id="inputfeedback" placeholder="Feedback">
                        </div>
                        <div class="form-group col-md-6">

                            <label for="inputEmail" class="text-dark">Email</label>
                            <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="inputPassword" class="text-dark">Senha</label>
                            <input type="password" class="form-control" id="inputPassword" placeholder="Senha">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck" class="text-dark">
                                Concordo com os termos e condições
                            </label>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-marrom text-white">Enviar Feedback</button>
                </div>
            </form><br>

            <div style="padding-top: 80px;" id="listagem">
                <div class="footer-table-container">
                    <div class="table-container table-responsive-sm ">

                        <h3 style="text-align: center">Reservas</h3><br>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Número da mesa</th>
                                    <th scope="col">Número de cadeiras</th>
                                    <th scope="col">Data</th>
                                    <th scope="col">Hora</th>
                                    <th scope="col">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reservas as $reserva)
                                <tr>
                                    <td>{{ $reserva->id }}</td>
                                    <td>{{ $reserva->nome }}</td>
                                    <td>{{ $reserva->numero_mesa }}</td>
                                    <td>{{ $reserva->cadeiras }}</td>
                                    <td>{{ $reserva->data }}</td>
                                    <td>{{ $reserva->hora }}</td>
                                    <td>
                                        <a href="{{ route('reservas.edit', $reserva->id) }}" class="btn btn-warning text-white">Editar</a>
                                        <form action="{{ route('reservas.destroy', $reserva->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger">Excluir</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <footer class="foo2">
            <p>&copy;2024. Todos os direitos reservados.</p>
        </footer>

</x-app-layout>