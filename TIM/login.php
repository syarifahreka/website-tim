<!DOCTYPE html>
<html>
<head>
    <title>Halaman Login</title>
    <style type="text/css">
        h1{
            margin-left: 400px;
            margin-top: 25px;
        }
        .form {
            width: 500px;
            height: 200px;
            margin-top: 25px;
            margin-left: 400px;
            background-color: #78AED3;
            padding: 20px;
        }
        .username{
            margin-top: 50px;
            margin-bottom: 10px;
            margin-left: 40px;
        }
        .username input{
            width: 300px;
            height: 25px;
        }
        .password{
            margin-left: 40px;
            margin-bottom: 20px;
        }
        .password input{
            width: 300px;
            height: 25px;
        }
        .tombol input {
            width: 100px;
            height: 25px;
            margin-left: 110px;
        }
        </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
</head>
<body>
    <h1>Silahkan Login</h1>
    <div class="form">
    <form action="penghubung.php" method="post" name="form_input">
        <div class="username">
        username : <input type="text" name="username" placeholder="Masukkan Username" required="">
        </div>
        <div class="password">
        password : <input type="text" name="password" placeholder="Masukkan Password" required="">
        </div>
        <div class="tombol">
        <input type="submit" name="input" value="LOGIN">
        <input type="reset" name="reset" value="RESET">
        </div>
    </form>
    </div>
    </body>
</html>