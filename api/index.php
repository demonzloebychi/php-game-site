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

        <div class="hero container">
            <div class="hero--info">
                <h2>3D game Dev</h2>
                <h1>Work that we produce for our clients</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard.</p>
                <button class="btn">Get more details</button>
            </div>
            <img src="img/joystick.svg" alt="">
        </div>

        <div class="container trending">
            <a href="/trending.php" class="see-all">SEE ALL</a>
            <h3>Currently Trending Games</h3>

            

            <div class="games">


            <?php
                require_once 'lib/db.php';

                $sql = 'SELECT * FROM trending ORDER BY id DESC LIMIT 4';

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

        <div class="container big-text">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>

        <div class="container banner">
            <h3>Lorem Ipsum</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s,</p>
            <img src="/img/banner.png" alt="">
        </div>
    </div>

    <div class="features">
        <div class="container">
            <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s,</p>
            <div class="info">
                <div class="block">
                    <img src="/img/feature1.png" alt="">
                    <p>Mobile Game Development</p>
                    <img src="/img/arrow.png" alt="">
                </div>
                <div class="block">
                    <img src="/img/feature2.png" alt="">
                    <p>PC Game Development</p>
                    <img src="/img/arrow.png" alt="">
                </div>
                <div class="block">
                    <img src="/img/feature3.png" alt="">
                    <p>PS4 Game Development</p>
                    <img src="/img/arrow.png" alt="">
                </div>
                <div class="block">
                    <img src="/img/feature4.png" alt="">
                    <p>AR/VR Solutions</p>
                    <img src="/img/arrow.png" alt="">
                </div>
                <div class="block">
                    <img src="/img/feature5.png" alt="">
                    <p>AR/ VR design</p>
                    <img src="/img/arrow.png" alt="">
                </div>
                <div class="block">
                    <img src="/img/feature6.png" alt="">
                    <p>3D Modelings</p>
                    <img src="/img/arrow.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="wrapper">
        <div class="container projects">
            <h3>Our Recent Projects</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
            <div class="images">
                <img src="/img/Project1.png" alt="">
                <img src="/img/Project2.png" alt="">
                <img src="/img/Project3.png" alt="">
            </div>
            <div class="images">
                <img src="/img/Project4.png" alt="">
                <img src="/img/Project5.png" alt="">
                <img src="/img/Project6.png" alt="">
            </div>
            <a href="" class="see-all">SEE ALL</a>
        </div>

        <div class="container email">
            <h3>Lorem Ipsum</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
            <div class="block">
                <div>
                    <h4>Stay in the loop</h4>
                    <p>Subscribe to receive the latest news and updates about TDA.
                        We promise not to spam you! </p>
                </div>
                <div>
                    <input type="email" id="emailField" placeholder="Enter email address">
                    <button onclick="checkEmail()">Continue</button>
                </div>
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