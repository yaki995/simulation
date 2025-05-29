<?php
    require "../database/seeders/ProductsSeeder.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
        mogitate
            </a>
        </div>
    </header>

    <main>
    <div class="mogitate__content">
      <div class="mogitate__heading">
        <p>商品一覧</p>
      </div>
      <form class="form">
    </main>
    <form class="search_form__product">
        <input class="search-form__product-input" type="text" name="name" placeholder="商品名で検索"/>
        <div class="search-form__button">
        <button class="search-form__button-submit" type="submit">検索</button>
        </div>
    </form>
    <div class="section__title">
        <a>価格順で表示</a>
    </div>
    <form class="sort__product">
        <select class="sort__product-select">
            <option value="high">高い順に表示</option>
            <option value="low">低い順に表示</option>
        </select>
        </div>
    </form>
    <div class="product_box">
        <?php
        for($i=0;$i<6;$i++){
        ?>
        <div class="procuct_box__">
            <?php
                echo "<img src= '".$param[$i]["image"]."' class='img-fluid rounded'>";
                echo "<p>" .$param[$i]["name"]."</p>";
                echo "<span class='text-denger'>".number_format($param[$i]["price"])."円</span>";
            ?>
        </div>
        <?php
        }
        ?>
    </div>
</body>
</html>