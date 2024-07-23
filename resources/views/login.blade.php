<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/ceklogin" method="POST">
        @csrf
        <small>Email</small> <br>
        <input type="text" name="email" id=""> <br>
        <small>Password</small> <br>
        <input type="password" name="password" id=""> <br>
        <br>
        <button type="submit">Login</button> <br>
        <br>
        <small>Jika belum mempunyai account silahkan klik <a href="/register"> disini </small>
    </form>
</body>
</html>
