<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>UMDP</h1>
    <h2>Fakultas</h2>
    <ul>
        @foreach ($collection as $item)
            <li>{{ $item }}</li>  
                   
        @endforeach
    </ul>
</body>
</html>