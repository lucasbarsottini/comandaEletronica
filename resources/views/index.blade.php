<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Senha</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuario as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->user }}</td>
                <td>{{ $user->password }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>