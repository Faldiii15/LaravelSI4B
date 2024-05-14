<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Studi</title>
</head>
<body>
    <h1>UMDP</h1>
    <h2>Fakultas</h2>
    <ul>
        @foreach ($prodi as $item)
            <li>{{ $item["nama"] }} {{$item["singkatan"]}}
            {{$item["nama"]}} {{$item
            ["singkatan"]}} {{$item["Fakultas"]["nama"]}} </li> 
                   
        @endforeach
    </ul>
</body>
</html>