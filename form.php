<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="server.php" method="post">
        <?php
            for($i=0;$i<2;$i++){
                echo "
                <br />
                <label for=\"input-fullName\">Nhập tên</label>
                <input type='text' id='input-fullName' name='person{$i}[name]' />
                <br />
                <label for='input-email'>Nhập email</label>
                <input type='text' id='input-email' name='person{$i}[email]' />
                <br />
                ";
            }
        ?>
        <button type="submit">Gửi</button>
    </form>
</body>

</html>