<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Website</title>
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
    
    <?php require_once 'blocks/header.php' ?>


   

    <div class="feedback">
        <div class="container">
            <h2>Авторизация</h2>
            <p>Lorem Ipsum is simply dummy text of the printing .</p>

            <form method='post' action='/lib/auth.php' >
                <div class="inline">

                    <div>
                        <label>Логин</label>
                        <input type="text" name='login'>
                    </div>

                    <div>
                        <label>Пароль</label>
                        <input type="password"  name='password'>
                    </div>

                </div>
                

                

                <button type="submit">Авторизоваться</button>
            </form>
        </div>
    </div>

    <?php require_once 'blocks/footer.php' ?>

</body>

</html>