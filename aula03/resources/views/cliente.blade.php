<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" href="/css/Cliente.css">
</head>
<body>
<div class="form-container">
        <h1>Cadastro de Cliente</h1>
        <form action="/cliente" method="post">
            @csrf
            <label for="txnomeCliente">Nome:</label>
            <input type="text" name="txnomeCliente" id="txnomeCliente" required>

            <label for="txSobrenome">Sobrenome:</label>
            <input type="text" name="txSobrenome" id="txSobrenome" required>

            <button type="submit">Enviar</button>
        </form>
    </div>
</br>

  <div class="table-container">
        <h2>Clientes Cadastrados</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cliente as $c)
                    <tr>
                        <td>{{ $c->id}}</td>
                        <td>{{ $c->primeiroNome}}</td>
                        <td>{{ $c->sobrenome}}</td>
                    </tr>
                @endforeach 
                </tbody>
        </table>
    </div>
</body>
</html>