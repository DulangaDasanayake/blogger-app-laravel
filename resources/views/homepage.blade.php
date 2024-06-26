<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hello, it's blade</h1>

    <p>{{ date('Y') }}</p>
    <h3>{{ $name }}</h3>
    <h2>{{ $catname }}</h2>

    <ul>
        @foreach ($allAnimals as $animal)
            <li>{{ $animal }}</li>
        @endforeach
    </ul>

            <a href="/about">go to about</a>
</body>

</html>
