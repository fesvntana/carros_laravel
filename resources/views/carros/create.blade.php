<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastra Carro</title>
</head>
<body>
    <form action="{{route('registrar_carro')}}" method="POST">
        @csrf
        <!-- <label for="">Marca</label> <br />
        <input type="text" name="marca"> <br /> -->
        <label for="">Modelo</label> <br />
        <input type="text" name="modelo"> <br />   
        <label for="">Ano Fabricação</label> <br />
        <input type="number" name="ano_fabricacao"> <br />   
        <label for="">Placa</label> <br />
        <input type="text" name="placa"> <br />
        <button>Salvar</button>
    </form>
</body>
</html>