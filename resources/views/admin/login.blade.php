<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="/main/login" method="post">
        @csrf
        <div>
            <label>Email</lable>
            <input name="email" type="email" placeholder="email"></input>
        </div>
        <div>
            <label>Password</lable>
            <input name="password" type="password" type="password" placeholder="password"></input>
        </div>
        <button type="submit"></button>
    </form>
    
</body>
</html>