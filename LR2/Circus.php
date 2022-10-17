<?php
	header("Location: Artists.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Мяч 6 Panel Pro Star UV — заказать в интернет-магазине ShowShop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="Styles/style.css">
</head>

<body>
<div class="container-fluid" >
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav row">
                <li class="col-md-1">

                </li>
                <li class="nav-item col-md-2">
                    <a class="nav-link" href="#">ДОСТАВКА И ОПЛАТА</a>
                </li>
                <li class="nav-item col-md-2">
                    <a class="nav-link" href="#">КОНТАКТЫ</a>
                </li>
                <li class="col-md-4">

                </li>
                <li class="nav-item col-md-2 dropdown nav-item--right">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Личный кабинет
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Регистрация</a>
                        <a class="dropdown-item" href="#">Авторизация</a>

                    </div>
                </li>
            </ul>
        </div>
    </nav></div>
<div class="row" style="height: 20px"></div>

<div class="container">
    <div class="row">
        <div class="img1 col-md-2">
            <img src="img/logo_circus.png">
        </div>
        <div class="col-md-1"></div>
        <form class="d-flex col-md-5">
            <input class="form-control me-2" type="search" style="height:40px" placeholder="Поиск товара по каталогу" aria-label="Поиск">
            <button id="change_category" type="button" style="height: 40px" class="btn btn-search-select dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <span class="category-name">Везде&nbsp;</span>&nbsp;<span class="fa fa-angle-down fa-fw car-down"></span>
                <span class="input-group-btn button_search"></span>
            </button>

            <ul class="dropdown-menu">
                <li><a href="#">Везде</a></li>
                <li><a href="#">Воздушный реквизит</a></li>
                <li><a href="#">Гимнастика</a></li>
                <li><a href="#">Жонглирование</a></li>
                <li><a href="#">Реквизит для шоу</a></li>
                <li><a href="#">Товары для развлечения</a></li>
                <li><a href="#">Фитнес</a></li>
                <li><a href="#">Цирковое искусство</a></li>
            </ul>

            <button type="button" style="height: 40px" class="btn btn-search"><i class="fa fa-search"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg></i></button>
        </form>

        <div class="nomer col-md-3">
            <div class="main_menu_item">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                </svg>
                <a>063 240 25 39</a>

                <div class="submenu">
                    <div><a>c 10:00 до 19:30</a></div>
                </div></div>
        </div>

        <div class="box-cart col-md-1">
            <div class="shopping-cart ">
                <div class="btn-group btn-block">
                    <button type="button" style="height: 40px" data-toggle="dropdown" data-loading-text="Загрузка..." class="btn btn-block dropdown-toggle">
                        <i class="shop-bag fa fa-shopping-bag"></i>
                        <i class="car-down fa fa-angle-down"></i>
                        <span class="cart-total">
                            <span class="products" style="color: black"><b>0</b>
                                <span class="text_product" style="color: black">Товаров,</span>
                            </span>
                            <span class="prices" style="color: black">на <b>0грн.</b></span>
                        </span>
                    </button>
                    <ul class="dropdown-menu pull-right" >
                        <li>
                            <p class="text-center">В корзине пусто!</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="container">
    <div class="row" style="height: 5px"></div>
    <div class="row">
        <div class="col-md-3">
            <nav class="navbar-nav">
                <div class="dropdown show">
                    <a class="btn btn-secondary" href="#" role="button" id="dropdownMenuLink" style="width: 250px" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Категории артистов
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-list"  viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                        </svg>
                    </a>

                    <div class="dropdown-menu " style="width: 250px" aria-labelledby="dropdownMenuLink">

                        <a class="dropdown-item" href="#">Акробаты</a>
                        <a class="dropdown-item" href="#">Гимнасты</a>
                        <a class="dropdown-item" href="#">Дрессировщики</a>
                        <a class="dropdown-item" href="#">Жонглеры</a>
                        <a class="dropdown-item" href="#">Канатоходцы</a>
                        <a class="dropdown-item" href="#">Клоуны</a>
                    </div>
                </div>
            </nav>
        </div>
        <div class="col-md-1"></div>

        <div class="col-md-8">
            <nav class="navbar navbar-expand-lg navbar-light bg-light border border-opacity-25">
                <div class="col-md-1"></div>

                    <a class="nav-item col-1 nav-link text-center" href="#">Артисты</a>
                    <a class="nav-item col-3 nav-link text-center" href="#">Журнал работы</a>
                    <a class="nav-item col-1 nav-link text-center" href="#">Площадки</a>
                    <a class="nav-item col-3 nav-link text-center" href="#">Проданные билеты</a>

            </nav>
        </div>
    </div>
</div>

<div class="container">
    <div class="row" style="height: 10px"></div>
    <div class="row">
        <div class="col">
            <nav  class="navbar navbar-expand border border-opacity-25" style="height: 40px; align-items: center" aria-label="breadcrumb">
                <div class="col-md-1"></div>
                <ol class="breadcrumb line-1" style="align-items: center">
                    <li class="breadcrumb-item"><a href="#">Цирк</a></li>
                    <li class="breadcrumb-item"><a href="#">Категории арртистов</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> <a href="#">Гимнасты</a></li>
                    <li class="breadcrumb-item"><a href="#">Константин Хобинский</a></li>

                </ol>
            </nav>
        </div>
    </div>
</div>


<div class="container">
    <div class="row" style="height: 10px"></div>
    <div class="row">
        <h1 style="color: #333333">Константин Хобинский</h1>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col">
            <img src="img/Konstantin.png" style="height: 300px; width: 500px">
        </div>
        <div class="col">
            <p>К вашему вниманию большое количество костюмов и образов. Индивидуальных подход к каждому мероприятию. Создание номера специально для Вас!
            </p>
            <h5>Номера в жанрах:</h5>
            <ul>
                <li><span>Воздушное кольцо</span></li>
                <li><span>Воздушная сетка</span></li>
                <li><span>Партерное кольцо (не требует подвес)</span></li>
                <li><span>Игра с хлыстами</span></li>
            </ul>
        </div>
    </div>
</div>


<div class="container">
    <div class="row" style="height: 50px"></div>
    <div class="row">
        <div class="col">

            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Программы</a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Отзывы</a>
                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Туры</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="row" style="height: 20px"></div>
                    <h5>Гимнаст участвует в шоу:</h5>
                    <ul>
                        <li><span>Антигравитация</span></li>
                        <li><span>Через тернии к звездам</span></li>
                        <li><span>Песчанная сказка</span></li>
                    </ul>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Адресс электронной почты</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Расскажите о своих впечатлениях</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <div class="span">Плохо</div>

                    <div class="span">Отлично</div>
                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <div class="row" style="height: 20px"></div>

                    <h5>Купить билеты</h5>
                    <ul>
                        <li><a href="#">Сочи</a> <span> <span>5 Октября</span></li>
                        <li><a href="#">Волгоград</a> <span>8 Октября</span></li>
                        <li><a href="#">Краснодар</a> <span>10 Октября</span></li>
                        <li><a href="#">Москва</a> <span>13 и 14 Октября</span></li>
                        <li><a href="#">Санкт-Петербург</a> <span>16 и 17 Октября</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row" style="height: 50px"></div>
    <div class="row">

        <div class="col-md-11"><h2>Наши лучшие артисты</h2></div>
        <button type="button" class="btn btn-info" style="width: 50px"><i class="bi bi-chevron-left"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
        </svg></i></button>
        <button type="button" class="btn btn-info" style="width: 50px"><i class="bi bi-chevron-right"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
    </svg></i></button>

    </div>
    <div class="row">
        <div class="col">
            <div class="card-group container">
                <div class="card border-info">
                    <img class="card-img-top" src="img/1.png" alt="Card image cap">
                    <div class="card-body">

                        <h5 class="card-title">Card title</h5>

                        <p class="card-text">Есть над чем задуматься: сторонники тоталитаризма в науке.</p>
                        <button type="button" class="btn btn-info"><a href="#" style="color: black">Подробнее</a></button>
                    </div>
                </div>




                <div class="card border-info">
                    <img class="card-img-top" src="img/2.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Есть над чем задуматься: сторонники тоталитаризма в науке.</p>
                        <button type="button" class="btn btn-info"><a href="#" style="color: black">Подробнее</a></button>
                    </div>
                </div>
                <div class="card border-info">
                    <img class="card-img-top" src="img/3.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Есть над чем задуматься: сторонники тоталитаризма в науке.</p>
                        <button type="button" class="btn btn-info"><a href="#" style="color: black">Подробнее</a></button>
                    </div>
                </div>
                <div class="card border-info">
                    <img class="card-img-top" src="img/4.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Есть над чем задуматься: сторонники тоталитаризма в науке.</p>
                        <button type="button" class="btn btn-info"><a href="#" style="color: black">Подробнее</a></button>
                    </div>
                </div>
                <div class="card border-info">
                    <img class="card-img-top" src="img/5.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Есть над чем задуматься: сторонники тоталитаризма в науке.</p>
                        <button type="button" class="btn btn-info"><a href="#" style="color: black">Подробнее</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="height: 50px"></div>
</div>

<!-- Footer -->
<footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4">


        <!-- Section: Form -->
        <section class="">
            <form action="">
                <!--Grid row-->
                <div class="row d-flex justify-content-center">
                    <!--Grid column-->
                    <div class="col-auto">
                        <p class="pt-2">
                            <strong>Подписаться на рассылку</strong>
                        </p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-5 col-12">
                        <!-- Email input -->
                        <div class="form-outline form-white mb-4">
                            <input type="email" id="form5Example21" class="form-control" placeholder="Адрес электронной почты" />
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-auto">
                        <!-- Submit button -->
                        <button type="submit" class="btn button_search btn-secondary btn-outline-light mb-4">
                            Подписаться
                        </button>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </form>
        </section>
        <!-- Section: Form -->

        <!-- Section: Text -->
        <section class="mb-4">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
                repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
                eum harum corrupti dicta, aliquam sequi voluptate quas.
            </p>
        </section>
        <!-- Section: Text -->

        <!-- Section: Links -->
        <section class="">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->


                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">

                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="#!" class="text-white">Афиша</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Купить билеты</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Отзывы о представлении</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Контакты</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    

                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="#!" class="text-white">Связаться с нами</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Наши контакты</h5>

                    <ul class="list-unstyled mb-0">
                        <li>
                            <span class="text-white">400131, г. Волгоград,</span>
                            <span>ул. Краснознаменская, 15</span>
                        </li>
                        <li>
                            <span class="text-white">Часы работы касс:
                                с 10:00 до 19:00</span>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                        </svg>
                            <a href="#!" class="text-white">Телефон: 8 (8442) 33-45-74</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </section>
        <!-- Section: Links -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2020 Copyright:
        <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
