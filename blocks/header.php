<header class="container header">
            <a href="/" class="logo">logo</a>
            <nav>
                <ul>
                    <li class="active"><a href="/">Home</a></li>
                    <li><a href="/about.php">О нас</a></li>
                    
                    <?php 

                        if(isset($_COOKIE['login']))
                            echo '<li><a href="/user.php">Личный кабинет</a></li>';
                        else
                        echo '<li><a href="/reg.php">Регистрация</a></li>
                            <li><a href="/auth.php">Авторизация</a></li>';

                    ?>

                    
                    <li class="btn"><a href="/contacts.php">Contacts</a></li>
                </ul>
            </nav>
        </header>