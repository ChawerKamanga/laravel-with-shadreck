<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shad</title>
</head>
<body>
    <h1>This is my page</h1>

    @if ($age > 18)
        <p>You are old</p>
    @else
        <p>You are young</p>
    @endif
</body>
</html>