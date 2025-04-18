<!DOCTYPE html>
<html lang="ru">
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Сайт Блог</title>
        <?php wp_head(); ?>
    </head>
    <header>
        <p>Header Logo</p>
    </header>
    <body>
        <div class="main-div">
            <p class="block-head">Статьи</p>
        </div>
        <div class="main-div">
            <p class="block-head">Услуги</p>
        </div>
    <?php wp_footer(); ?>
    </body>
    <footer>
        <p>Footer Logo</p>
    </footer>
</html>