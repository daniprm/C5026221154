<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="showJam/{{date('g:i:s')}}">Klik di sini</a>

    <form action="/formulir/proses" method="POST">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
        <input type="hidden" name="ipk" value="3.75">
        Nama: <input type="text" name="nama"><br><br>
        Alamat: <input type="text" name="alamat"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
