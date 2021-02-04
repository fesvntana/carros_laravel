<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edita Carro</title>
</head>
<body>
    <form action="{{ route('deletar_carro', ['id' => $carro->id]) }}" method="POST">
        @csrf
        <!-- <label for="">Marca</label> <br />
        <input type="text" name="marca"> <br /> -->
        <label for="">Tem certeza que deseja excluir esse carro?</label> <br />
        <label for="">Modelo</label> <br />
        <input type="text" name="modelo" value="{{ $carro->modelo}}" > <br />   
        <label for="">Ano Fabricação</label> <br />
        <input type="number" name="ano_fabricacao" value="{{ $carro->ano_fabricacao}}" > <br />   
        <label for="">Placa</label> <br />
        <input type="text" name="placa" value="{{ $carro->placa}}" > <br />
        <button>Sim</button>
    </form>
</body>
</html>