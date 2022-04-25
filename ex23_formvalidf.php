<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>
<style>
    body {
        width: 100%;
    }

    form {
        width: 30%;
        margin: 10px auto;
        text-align: center;

    }
    input{
        width: 100%;
        margin-bottom: 20px;
        height: 31px;
    }
</style>

<body>
    <?php
 session_start();
 session_status();
    ?>
    <form action="self" method="post">
        email : <input type="text" name="name">
        Password:
        <input type="password" name="passwd" id="">
        <input type="submit" value="visit">
    </form>

</body>

</html>