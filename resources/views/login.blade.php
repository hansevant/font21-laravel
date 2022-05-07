<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="shortcut icon" type="image/icon" href="assets/img/attribute/logofont.png" />
</head>
<body>
    <div class="main">
        <input type="checkbox" id="chk" aria-hidden="true">

        <div class="logo">
            <label for="chk" aria-hidden="true">Fikti on talk</label>
            <a href="/">
            <img src="assets/img/attribute/logofont.png" alt="logo" style="border-radius: 50%; display: block; width: 150px;">
        </a>
        </div>

        <div class="login">
    <form action="/login" method="POST">
        @csrf
        <label for="chk" aria-hidden="true">Login</label>

        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>

            <button type="submit">Login</button>
            <a href="/">
                <img src="assets/img/attribute/logofont.png" alt="logo" style="border-radius: 50%; display: block; width: 75px;">
            </a>
            </form>
    </div>
    </div>
</body>
</html>