<?php
session_start();
include 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style_main.css">
</head>

<body>
    <header class="header">
        <div class="header-container">
            <div class="header-Logo">
                <a class="header-Logo-link" href="/index.php">
                    <img class="header-Logo-icon" src="Logo\SALON SPA BEAUTY SHOP LOGO3.png" width="130px" height="120px" alt="">
                </a>
            </div>
            <?php
            if (isset($_SESSION['authorized'])) {
                echo '<div class="login">
                <a class="login_text" href="#">Логин пользователя:' . ' ' . getCurrentUser() . '</a>
                <a class="log_out" href="logout.php">Выйти из профиля</a>
                </div>';
            } else {
                echo '<div class="login">
                <a class="sign_in" href="login.php">Войти</a>
             </div>';
            }
            ?>
            <div class="header-menu">
                <button class="menu-button" type="button">
                    <span></span>
                </button>
                <span class="header_menu_text">Контакты</span>
            </div>
        </div>
        <nav class="menu-body">
            <ul class="menu-contacts">
                <li class="list-items"><a class="menu-contacts-items" href="#"><img src="Logo\gps.png" alt=""> <span>Адрес: Россия, г.Тюмень, ул. Понтия Пилата, д.3</span> </a></li>
                <li class="list-items"><a class="menu-contacts-items" href="#"><img src="Logo\call.png" alt=""> Телефон: +7-939-988-79-98</a></li>
                <li class="list-items"><a class="menu-contacts-items" href="#"><img src="Logo\mail.png" alt="">Почта: Splend_spa@mail.ru</a></li>
                <li class="list-items"><a class="menu-contacts-items" href="#"><img src="Logo\instagram.png" alt="">Instagram: @Spl_spa </a></li>
                <li class="list-items"><a class="menu-contacts-items" href="#"><img src="\Logo\openingHours.png" alt="">Часы работы: ежедневно с 10:00 до 22:00</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <?php
        if (isset($_SESSION['authorized']) && getCurrentUser() !== null) {
            echo '<h2 class = "introduction_user">Здравствуйте,' . ' ' . getCurrentUser() . '!</h2>';
            if ($_SESSION['checkDayBirth'] > 0) {
                echo '
                <div class = "introduction_day_brth">
                <p>До вашего дня рождения осталось:' . ' ' . $_SESSION['checkDayBirth'] . ' ' . 'дней (-ень)</p>
                </div>';
            } else if ($_SESSION['checkDayBirth'] === 0) {
                echo '
                <div class = "introduction_day_brth">
                <p> Поздравляем Вас с Днем Рождения! В честь этого мы подготовили для вас специальную акцию!</p>
                </div>';
            }
        };
        ?>
        <section class="spa_service">
            <div class="service_container">
                <div class="service_cards">
                    <h2 class="service_cards_title">Услуги</h2>
                    <ul class="service_cards_content">
                        <li class="service_card_item">
                            <div class="service_card_item_container">
                                <img src="pictures\wepik-photo-mode-2022923-22343.jpeg" alt="">
                                <h2 class="service_card_item_title">Более 10 различных техник массажа</h2>
                            </div>
                        </li>
                        <li class="service_card_item">
                            <div class="service_card_item_container">
                                <img src="pictures\wepik-photo-mode-2022923-22459.jpeg" alt="">
                                <h2 class="service_card_item_title">Косметология</h2>
                            </div>
                        </li>
                        <li class="service_card_item">
                            <div class="service_card_item_container">
                                <img src="pictures\wepik-photo-mode-2022926-175136.jpeg" alt="">
                                <h2 class="service_card_item_title">Спа-процедуры с горячими камнями</h2>
                            </div>
                        </li>
                        <li class="service_card_item">
                            <div class="service_card_item_container">
                                <img src="pictures\wepik-photo-mode-2022926-221038.jpeg" alt="">
                                <h2 class="service_card_item_title">Комплексы спа-программ</h2>
                            </div>
                        </li>
                        <li class="service_card_item">
                            <div class="service_card_item_container">
                                <img src="pictures\wepik-photo-mode-2022926-221113.jpeg" alt="">
                                <h2 class="service_card_item_title">Персональные спа-программы</h2>
                            </div>
                        </li>
                        <li class="service_card_item">
                            <div class="service_card_item_container">
                                <img src="pictures\wepik-photo-mode-2022926-175830.jpeg" alt="">
                                <h2 class="service_card_item_title">Спа-программы для двоих</h2>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="spa_action">
            <div class="action_container">
                <div class="actions">
                    <h2 class="action_title">Акции</h2>
                    <div class="action_card">
                        <div class="action_card_content">
                            <h2 class="action_card_title">Для новых посетителей</h2>
                            <div class="action_card_text">
                                <p>Будь первым!
                                    Скидка 15% для новых гостей на спа-процедуры.
                                </p>
                            </div>
                        </div>
                        <div class="action_card_img">
                            <img src="pictures\28788706_7482183.jpg" alt="" srcset="">
                        </div>
                    </div>
                    <?php if (isset($_SESSION['authorized']) && $_SESSION['checkDayBirth'] === 0) {
                        echo ' 
                        <div class="action_card">
                            <div class="action_card_content">
                                <h2 class="action_card_title">Специальная скидка в честь Вашего Дня Рождения!</h2>
                                    <div class="action_card_text">
                                        <p>
                                        Скидка 5% на все услуги нашего спа-салона! </p>
                                        <br>
                                        <p>
                                        Насладитесь приятными ощущениями и проведите незабываемый отдых в нашем спа-салоне.
                                        Будем рады Вас видеть!
                                        </p>
                                    </div>
                                </div>
                            <div class="action_card_img">
                                <img src="pictures\12290843_4956461.jpg" alt="" srcset="">
                            </div>
                        </div>';
                    } else {
                        echo ' 
                        <div class="action_card">
                            <div class="action_card_content">
                                <h2 class="action_card_title">Горячее воскресенье!</h2>
                                    <div class="action_card_text">
                                        <p>
                                        Скидки до 20% каждое воскресенье!
                                        Насладитесь приятными ощущениями и зарядитесь энергией для полноценного начала рабочей недели.
                                        </p>
                                    </div>
                                </div>
                            <div class="action_card_img">
                                <img src="pictures\10747325_4562980.jpg" alt="" srcset="">
                            </div>
                        </div>';
                    } ?>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="links_pics_logo">
            <p>Ссылки на сервисы с которых были взяты картинки и логотипы: </p>
            <br>
            <li><a href="https://www.flaticon.com/ru/authors/creaticca-creative-agency">Автор иконок: Creaticca Creative Agency </a></li>
            <li><a href="https://www.flaticon.com/ru/">icons from https://www.flaticon.com/ru/</a></li>
            <li><a href="https://www.flaticon.com/ru/free-icons/"> иконки от Nikita Golubev - Flaticon</a></li>
            <li><a href="https://www.flaticon.com/ru/free-icons/-" >иконки от phatplus - Flaticon</a></li>
            <li><a href="https://www.flaticon.com/ru/free-icons/" >иконки от IconsBox - Flaticon</a></li>
            <li><a href="https://www.flaticon.com/ru/free-icons/" >иконки от Dave Gandy - Flaticon</a></li>
            <li><a href="https://www.freepik.com/free-photo/flat-lay-spa-composition-with-body-products-textured-concrete-background_21288014.htm#query=spa%20background&position=22&from_view=keyword">Image by pvproductions</a></li>
            <li><a href="https://www.freepik.com/free-vector/realistic-golden-luxury-sale-banners-with-photo_16135911.htm#page=2&query=%D0%B0%D0%BA%D1%86%D0%B8%D0%B8%20%D1%81%D0%BF%D0%B0&position=43&from_view=search&track=ais">Image by Freepik</a>
        </div></li>
</footer>
</body>
<script src="/scrypt.js"></script>

</html>