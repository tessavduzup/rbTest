<?php
global $connection, $getArticles, $getServices;
require_once 'dbConnection.php';
require_once 'sql.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="styles.css">
    </head>
    <header>
        <p>Header Logo</p>
    </header>
    <body>
        <div class="cards-container">
            <p class="block-head">Статьи</p>
            <?php
            $result = $connection->query($getArticles);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<img src='{$row["image_url"]}'>";
                }
            }
            ?>
        </div>
        <div class="cards-container">
            <p class="block-head">Услуги</p>
            <?php
            $result = $connection->query($getServices);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<img src='{$row["image_url"]}'>";
                }
            }
            $connection->close();
            ?>
        </div>
    </body>
    <footer>
        <p>Footer Logo</p>
    </footer>
</html>