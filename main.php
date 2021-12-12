<?php 
session_start();
if (!isset($_SESSION['theme'])) {
    $_SESSION['theme'] = 'main';
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Тёмная тема</title>
    <link rel="stylesheet" href="<?php echo $_SESSION['theme']?>.css" id="theme-link">
</head>
<body>
    <div class="wrapper">
        <div class="theme-button" id="theme-button">
            Сменить тему
        </div>
        <header class="header">
            <div class="header_content">
                <h1>Сайт с темной темой</h1>
                <nav class="nav">
                    <div class="nav_content">
                        <a href="#" class="nav_item nav_item_active">
                            Главная
                        </a>
                        <a href="#" class="nav_item">
                            Новости
                        </a>
                        <a href="#" class="nav_item">
                            О нас
                        </a>
                        <a href="#" class="nav_item">
                            Контакты
                        </a>
                    </div>
                </nav>
            </div>
        </header>
        <main class="main">
            <article class="main_content">
                <p>
                    Hi world
                </p>
            </article>       
        </main>
    </div>
<script src="themes.js"></script>
</body>
</html>