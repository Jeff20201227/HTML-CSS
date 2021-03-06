<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Личный сайт студента GeekBrains</title>
    <link rel="stylesheet" href="../style.css" media="screen">
    <link rel="stylesheet" href="../games.css" media="screen">
</head>

<body>
<div class="conteiner">
    <header>
        <nav>
            <a href="../index.php">Главная</a>
            <a class="selected" href="games.php">Игры</a>
            <a href="../programs/programs.php">Программы</a>
            <a href="../html/scores.php">Моя учёба</a>
            <a href="../html/about.php">Обо мне</a>
        </nav>
    </header>
    <main2>
        <div class="box_games">
            <h1>Игра "Охота на уток"</h1>
            <p id="info">Отстреливайте щелчком мышки летящих в небе уточек. Всего 9 утки.</p><br>
            <div class="map">

                <input id="dog" type="name" placeholder="Не стреляй в собаку">
                <label class="dog dog1 riffle_dog" for="dog"></label>

                <input id="duck1" type="checkbox">
                <label class="duck duck1 riffle" for="duck1"></label>

                <input id="duck2" type="checkbox" class="riffle">
                <label class="duck duck2 riffle" for="duck2"></label>

                <input id="duck3" type="checkbox" class="riffle">
                <label class="duck duck3 riffle" for="duck3"></label>                
                
                <input id="duck4" type="checkbox" class="riffle">
                <label class="duck duck4 riffle" for="duck4"></label>

                   
                <input id="duck5" type="checkbox" class="riffle">
                <label class="duck duck1 duck5 riffle" for="duck5"></label>

                   
                <input id="duck6" type="checkbox" class="riffle">
                <label class="duck duck2 duck6 riffle" for="duck6"></label>

                   
                <input id="duck7" type="checkbox" class="riffle">
                <label class="duck duck3 duck7 riffle" for="duck7"></label>

                   
                <input id="duck8" type="checkbox" class="riffle">
                <label class="duck duck4 duck8 riffle" for="duck8"></label>

                <input id="duck9" type="checkbox" class="riffle">
                <label class="duck duck3 duck9 riffle" for="duck9"></label>
                <div class="count"></div>

            </div>
        </div>
    </main2>

    <footer>
        <span>Copyright &copy; <?php echo date("Y");?> Казанин Е.А.</span>
    </footer>
    </div>
</body>

</html>
