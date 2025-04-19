<?php get_header(); ?>
    <body>
        <div class="main-div">
            <p class="main-div-name">Статьи</p>
            <div class="cards-container">

                <?php
                $result = $connection->query($getArticles);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<a href='wp-content\\themes\\rocketB-theme\\patterns\\article_page_pattern.php'><div data-id='{$row['ID']}' class='card-article'>";
                        echo "<img src='{$row["image_url"]}'>";
                        echo "<a><strong style='padding-top: 0'>{$row["title"]}</strong></a>";
                        echo "<p style='padding-top: 3%'>{$row["description"]}</p>";
                        echo "<p style='color: #A1A1A1; padding-top: 6%'>{$row["release_date"]}</p>";
                        echo "</div></a>";
                    }
                }
                ?>
            </div>
        </div>
        <div class="main-div">
            <p class="main-div-name">Услуги</p>
            <div class="cards-container">
                <?php
                $result = $connection->query($getServices);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<a href='wp-content\\themes\\rocketB-theme\\patterns\\service_page_pattern.php' class='card-link'>";
                        echo "<div class='card-service'>";
                        echo "<img src='{$row["image_url"]}'>";
                        echo "<a><strong>{$row["title"]}</strong></a>";
                        echo "<p style='color: #A1A1A1; padding-top: 10%'>От {$row["price"]} ₽</p>";
                        echo "</div>";
                        echo "</a>";
                    }
                }
                $connection->close();
                ?>
            </div>
        </div>
        <?php wp_footer();?>
    </body>
<?php get_footer() ?>