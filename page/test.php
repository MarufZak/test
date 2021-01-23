<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/style/all.css">
    <link rel="stylesheet" href="/style/style.css">
</head>

<body>
    <div class="wrap">
        <header class="header">
            <a href="/" class="logo">PROWEB</a>
            <div class="singIn">
                <a href="/page/login.php" class="singIn__link">Вход</a>
                <a href="/page/registration.php" class="singIn__link">Регистрация</a>
            </div>
            <div class="user">
                <div class="user__profile">
                    <img src="/img/2.jpg" alt="" class="user__profile-img">
                    <h4 class="user__profile-name">Имя</h4>
                </div>
                <ul class="user__menu">
                    <li><a href="#" class="user__menu-link"><i class="far fa-external-link"></i>Выход</a></li>
                </ul>
            </div>
        </header>
        <aside class="menu">
            <div class="menu__reviews">
                <span class="menu__reviews_span" data-href="https://proweb.uz">
                    <i class="far fa-chevron-right"></i>
                </span>
                <span class="menu__reviews_text">Оставить озыв</span>
            </div>
            <ul class="menu__list">
                <li><a href="/" class="menu__list-link active"><i class="fal fa-home"></i>Главная</a></li>
                <li><a href="/page/contact.php" class="menu__list-link"><i class="fal fa-address-book"></i>Контакты</a></li>
                <li><a href="/page/table.php" class="menu__list-link"><i class="fas fa-times"></i>Таблица умножения</a></li>
                <li><a href="/page/calc.php" class="menu__list-link"><i class="fas fa-calculator-alt"></i>Калькулятор</a></li>
                <li><a href="/page/slide.php" class="menu__list-link"><i class="far fa-presentation"></i>Слайдер</a></li>
                <li><a href="/page/guest.php" class="menu__list-link"><i class="fal fa-books"></i>Гостевая книга</a></li>
                <li><a href="/page/test.php" class="menu__list-link"><i class="fal fa-vial"></i>Тест</a></li>
            </ul>
        </aside>
        <main class="main">
            <?php 
                $name = "Вася";
                echo "Привет <br>" . $name;
                echo "<h1>Привет $name</h1>";
                echo "<h1>Привет $name</h1>";
            ?>

            <?= "<h1>Привет $name</h1>" ?>

            <?php 
                $a = 6;
                if ($a > 6) {
                    echo "$a > 6";
                } else if ($a < 6) {
                    echo "$a < 6";
                } elseif ($a == 6) {
                    echo "$a = 6";
                } 
                
                else {
                    echo "Ошибка";
                }
                date_default_timezone_set("Asia/Tashkent")
            ?>
            <br>
            <p>Выберите ваш год рождения</p>
            <select>
            <br>
            <?php 
                $year = date("Y");
                for ($i=$year - 80; $i < $year; $i++) : ?>
                    <!-- echo "<option value=\"$i\">$i</option>"; // "\" - экранирование символов; -->
                    <option value="<?= $i?>"><?= $i?></option>
            <?php endfor; ?>

            <option value="1">Ташкент</option>
            <option value="1">Хива</option>
            </select>
            <br>
            <?= date("d - F - Y; H:i:s")?>
            <br>
            <?php 
                $arr = ['Вася','Петя','Илья','Peter'];
                // echo $arr[1];
                for ($i=0; $i < count($arr); $i++) { 
                    // echo "<p>$arr[$i]</p>";
                    $x = mb_strtoupper($arr[$i]);
                    echo "<p>$x</p>";
                }
            ?>
            <br>
            <?php 
                $hello = "Привет ";
                $world = "Мир!";
                echo $hello . $world;
                echo "<br>";
                $month = ['Январь','Февраль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'];
                $monthNum = date("n");
                echo $month[$monthNum - 1];
            ?>
        </main>
    </div>

    <script src="/js/script.js"></script>
</body>

</html>