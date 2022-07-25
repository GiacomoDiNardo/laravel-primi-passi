<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Benvenuto <strong>{{ $user['nome'] }}</strong> <strong>{{ $user['cognome'] }}</strong></h1>

    <h2>La tua lista desideri:</h2>

    <ul>
        @foreach ($list as $product)
            <li>
                <h4>{{ $product }}</h4>
            </li>
        
        @endforeach
    </ul>
</body>
</html>