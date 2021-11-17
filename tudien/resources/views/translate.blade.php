<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>translate</title>
</head>
<body>
<form action="" method="post">
    @csrf
    <label for="">Translate: </label>
    <input type="text" name="key">
    <button type="submit">Translate</button>
</form>
Result: {{$result ?? ''}}
</body>
</html>
