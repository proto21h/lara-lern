<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form class="checkAgeFrorm" action="/check-age" method="POST">
        @csrf
        <input type="date" name="user_age" id="user_age">
        <input type="submit" value="Отправить">
    </div>
</body>
</html>