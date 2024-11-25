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
      height: 40px;   padding-top:60px   }
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
    #servicos{
        flex-direction: column;
        display: block;
        font-size: text-bold;
        display: inline;
        margin-top: 400px;
    }
    #feedbacks{
        margin-top: 500px;
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
input:focus, select:focus, textarea:focus {
    border-color: #5b3e26;
    box-shadow: 0 0 0 0.2rem rgba(111, 79, 55, 0.25);
}
#feedbacks{
        padding-top: 250px;
    }

    </style>
</head>
<body>
    @section('content')
        @include('layouts.navigation')

        <img class="banner" id="inicio"   src="{{asset('images/reserva.png')}}" alt="">

        <div  id="sobre" class="d-flex align-items-center justify-content-center flex-wrap" style="padding-top: 65px;">
            <img src="{{asset('images/sobre.png')}}" alt="Imagem sobre WMreservas" class="img-fluid" style="max-width: 40%; height: auto;">
            <p class="texto-sobre" style="font-size:30px; max-width: 600px; margin-left: 20px;">
                 Olá nós somos a <span style="color: red;">WMreservas</span> uma rede de reservas de mesas de restaurantes que visamos facilitar esse processo!
            </p>
        </div>
        <div class="row mx-md-n5">
        <div   id="servicos"  class="col py-3 mx-md-6"><h5>
                <p class="texto-sobre" style="font-size:143px; max-width: 600px; margin-left: 20px;">
                 reservas de mesas
                </p>
        </div>
        <div  id="servicos" class="col py-3 mx-md-6"><h5>
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
                
                <div class="mb-3">
                    <label for="nome" class="form-label" style="color: #2C3E50;">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome_do_cliente" required style="border-color: #8E735B;">
                </div>
                <div class="mb-3">
                    <label for="numeroMesa" class="form-label" style="color: #2C3E50;">Número da Mesa</label>
                    <input type="text" class="form-control" id="numeroMesa" name="numero_da_mesa" required style="border-color: #8E735B;" bg-collor:yellow;>
                </div>
                <div class="mb-3">
                    <label for="cadeiras" class="form-label" style="color: #2C3E50;">Cadeiras</label>
                    <input type="tel" class="form-control" id="cadeiras" name="quantidade_de_lugares_reservados" required style="border-color: #8E735B;">
                </div>
                <div class="mb-3">
                    <label for="data" class="form-label" style="color: #2C3E50;">Data</label>
                    <input type="date" class="form-control" id="data" name="data_reserva" required style="border-color: #8E735B;">
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

        <!-- Botão de Submit -->
        <button type="submit" class="btn btn-marrom text-white">Enviar Feedback</button>
    </div>
</form>

</div>
<footer class="foo2">
            <p>&copy;2024. Todos os direitos reservados.</p>
        </footer>
        
</x-app-layout>