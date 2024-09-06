<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Website</title>
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
    <div class="wrapper">
        

    <?php require_once 'blocks/header.php' ?>

      
    
        <div class="container trending">
            <h3>Currently Trending Games</h3>

            

            <div class="games games__all">


            <?php
                require_once 'lib/db.php';

                $sql = 'SELECT * FROM trending ORDER BY id DESC ';

                $query = $pdo->prepare($sql);

                $query->execute();

                $games = $query->fetchAll(PDO::FETCH_OBJ);


                foreach($games as $el)
                    echo '<div class="block">
                    <img src="/img/'.$el->image.'" alt="">
                    <span><img src="/img/fire.svg" alt=""> '.$el->followers.' Followers</span>
                    </div>';


            ?>
                
                
            </div>
        </div>

     
    </div>


    <?php require_once 'blocks/footer.php' ?>


    <script>
        function checkEmail() {
            let email = document.querySelector('#emailField').value;
            if (!email.includes('@')) alert('Нет символа @');
            else if (!email.includes('.')) alert('Нет символа .');
            else alert('Все отлично!');
        }
    </script>
</body>

</html>