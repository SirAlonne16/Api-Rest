<!DOCTYPE html>
<html>
<head>
    <title>Vista Simple</title>
</head>
<body>
    <h1>Datos de Colección 1</h1>
    <ul>
        @foreach ($datos1 as $dato1)
            <li>{{ $dato1->campo }}</li>
        @endforeach
    </ul>

    <h1>Datos de Colección 2</h1>
    <ul>
        @foreach ($datos2 as $dato2)
            <li>{{ $dato2->campo }}</li>
        @endforeach
    </ul>

    <h1>Datos de Colección 3</h1>
    <ul>
        @foreach ($datos3 as $dato3)
            <li>{{ $dato3->campo }}</li>
        @endforeach
    </ul>
</body>
</html>
