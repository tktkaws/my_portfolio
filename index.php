<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my portfolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/style.css">
</head>

<body>
    <header class="l-header">
        <nav class="l-header__nav">
            <ul class="l-header__lists">
                <li class="l-header__list">
                    <a href="/works.html">works</a>
                </li>
                <li class="l-header__list">
                    <a href="/profile.html">profile</a>
                </li>
                <li class="l-header__list">
                    <a href="/">blog</a>
                </li>
            </ul>
        </nav>
    </header>

    <section class="p-home">
        <div class="c-separate-container">

            <div class="p-home__right-container">

                <figure class="p-home__logo">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/ロゴ.svg" alt="" />
                </figure>
            </div>

            <div class="p-home__left-container">
                <figure class="p-home__image--grid6">
                    <a href="">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/03.png" alt="" />
                    </a>
                </figure>
                <figure class="p-home__image--grid6">
                    <a href="">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/04.png" alt="" />
                    </a>
                </figure>
                <figure class="p-home__image--grid6">
                    <a href="">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/05.png" alt="" />
                    </a>
                </figure>
                <figure class="p-home__image--grid6">
                    <a href="">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/06.png" alt="" />
                    </a>
                </figure>
                <figure class="p-home__image--grid6">
                    <a href="">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/01.png" alt="" />
                    </a>
                </figure>
                <figure class="p-home__image--grid6">
                    <a href="">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/02.png" alt="" />
                    </a>
                </figure>
            </div>

        </div>
    </section>
</body>

</html>