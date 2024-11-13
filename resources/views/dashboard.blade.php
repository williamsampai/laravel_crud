<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>Document</title>
    <style>
        *{
            scroll-behavior: smooth;
        }
        .banner{
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
      height: auto; 
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
    

    </style>
</head>
<body>
    @section('content')
        @include('layouts.navigation')

        <img class="banner" id="inicio"   src="{{asset('images/reserva.png')}}" alt="">

        <div  id="sobre" class="vh-100 d-flex align-items-center justify-content-center flex-wrap" style="padding-top: 65px;">
            <img src="{{asset('images/sobre.png')}}" alt="Imagem sobre WMreservas" class="img-fluid" style="max-width: 40%; height: auto;">
            <p class="texto-sobre" style="font-size:30px; max-width: 600px; margin-left: 20px;">
                 Olá nós somos a <span style="color: red;">WMreservas</span> uma rede de reservas de mesas de restaurantes que visamos facilitar esse processo!
            </p>
        </div>

        <div class="container mt-5 d-flex justify-content-center" id="agendamentos">
            <div class="card" style="width: 500px;">
                <div class="card-header text-center py-3">
                 <h1 class="card-title mb-0">Agendamento de Mesas</h1>
            </div>
            <div class="card-body">
                <form action="./verify/cadastrarCliente.php" method="post">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Numero da mesa</label>
                        <input type="text" class="form-control" id="numeroMesa" name="numero_da_mesa" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Nome</label>
                        <input type="email" class="form-control" id="nome" name="nome_do_cliente" required>
                    </div>
                    <div class="mb-3">
                        <label for="telefone" class="form-label">Cadeiras</label>
                        <input type="tel" class="form-control" id="cadeiras" name="quantidade_de_lugares_reservados" required>
                    </div>
                    <div class="mb-3">
                        <label for="data" class="form-label">Data</label>
                        <input type="date" class="form-control" id="data"  name="data_reserva" required>
                    </div>
                    <div class="mb-3">
                        <label for="hora" class="form-label">Hora</label>
                        <input type="time" class="form-control" id="hora" name="hora" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100" name="submit">Agendar</button>
                </form>
            </div>
        </div>
  

  
</body>
</html>

</x-app-layout>