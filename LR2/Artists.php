<?php

    $link = mysqli_connect("localhost", "root", "", "actors");
    $emptyQuest = isset($_GET['submit']) & !isset($_GET['reset']);

    if (mysqli_connect_errno())
    {
        echo "Ошибка подключения к БД";
        exit();
    }

    if($emptyQuest){ 
        $searchText = $_GET['search-text'];
        $searchCategory = $_GET['search-category'];
        
        $startPrice = $_GET['start-price'];
        $endPrice = $_GET['end-price'];

        $query = "SELECT * 
        FROM artist
        INNER JOIN category on artist.category_id = category.id
        
        WHERE 
        (artist.name LIKE '%" . $searchText . "%' OR 
        artist.biography LIKE '%" . $searchText . "%') AND

        (artist.price >= " . $startPrice . " AND 
        artist.price <= " . $endPrice . ") AND
        category.category LIKE '%" . $searchCategory . "%'";
    }
    else 
    {
        $query = "SELECT * 
                FROM artist
                INNER JOIN category on artist.category_id = category.id";

        if (isset($_GET['reset']))
        {
            $_GET['reset'] = false;
        }
    }

    $artistInfo = mysqli_fetch_all(mysqli_query($link, $query), MYSQLI_ASSOC);   

    ?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

	<link rel="stylesheet" href="Styles/ArtistsStyle.css">
</head>
<body>
    <div class="container page">

        <h2 class="page-title">Наши артисты</h2>

        <form class="search-area" method="get" action="artists.php?go">
            <div class="search-area-wrapper">
                <input type="text" name="search-text" class="search-field" value="<?php if(isset($_GET['submit'])) { echo $_GET['search-text']; }?>">
                <input class="search-button" type="submit" name="submit" value="найти">
            </div>
            <div class="search-area-filters">
                <a href="#" class="search-area-showFilters-btn">расширенный поиск</a>
            </div>
            <div class="filter">
                <div class="filter-type">
                    <select name="search-category" id="">
                        <option value="" <?php if($emptyQuest) { if ($_GET['search-category'] == "Любое") echo 'selected'; }?>>Любое</option>
                        <option value="Гимнаст" <?php if($emptyQuest) { if ($_GET['search-category'] == "Гимнаст") echo 'selected'; }?>>Гимнаст</option>
                        <option value="Акробат" <?php if($emptyQuest) { if ($_GET['search-category'] == "Акробат") echo 'selected'; }?>>Акробат</option>
                        <option value="Чревовещатель" <?php if($emptyQuest) { if ($_GET['search-category'] == "Чревовещатель") echo 'selected'; }?>>Чревовещатель</option>
                    </select>
                </div>

                <div class="filter-price">
                    Цена от <input name="start-price" class="filter-price-input" type="number" value="<?php if(isset($_GET['submit'])) { echo $_GET['start-price']; } else echo 0; ?>"> 
                    до <input name="end-price" class="filter-price-input" type="number" value="<?php if(isset($_GET['submit'])) { echo $_GET['end-price']; } else echo 9999; ?>">
                </div>

                <div class="filter-actions">
                    <input type="submit" name="reset" value="Сбросить">
                </div>
            </div>
        </form>       

        

        <div class="artists">
            <?php 
            if (count($artistInfo) > 0)
            {
            foreach($artistInfo as $info):?>
                <a href="#" class="artist">
                    <img class="artist-image" src="images/<?=$info['image'] ?>" alt="Изображение артиста">
                    
                    <div class="artist-wrapper">
                    <h4 class="artist-title">
                            <?=$info['name']?>
                        </h4>

                        <h4 class="artist-category">
                            Тип : <?=$info['category']?>
                        </h4>

                        <div class="artist-biography">
                            <?=$info['biography']?>
                        </div>

                        <div class="artist-price">
                            <?=$info['price']?> р. за выступление
                        </div>
                    </div>
                </a>
            <?php endforeach;
            }
            else
            {
                echo "<h2 class=\"no-found-title\">По вашему запросу ничего не найдено!</h2>";
            }
            ?>
        </div>
    </div>

    <script src="Scripts/buttons.js"></script>
    <script src="Scripts/Animations.js"></script>
</body>
</html>