<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Upload images</title>
</head>
<body>
    <form action="profile" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="photo">
        <input type="submit" value="enviar">
    </form>
</body>
</html>
