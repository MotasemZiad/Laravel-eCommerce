<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Categories</title>
</head>

<body>
    <h2>Most famous programming langugaes</h2>
    <ol>
        @for ($i = 0; $i < count($categories); $i++)
            <li>{{ $categories[$i + 1] }}</li>
        @endfor
    </ol>
</body>

</html>
