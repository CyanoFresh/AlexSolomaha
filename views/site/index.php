<?php

/* @var $this yii\web\View */

use rmrevin\yii\fontawesome\FA;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

?>

<?php
NavBar::begin([
    'brandLabel' => 'Alex <span>Solomaha</span>',
    'brandUrl' => Yii::$app->homeUrl,
    'brandOptions' => [
        'class' => 'product-brand',
    ],
    'options' => [
        'class' => 'navbar-inverse navbar-fixed-top',
    ],
]);

$items = [
    ['label' => 'Мои навыки', 'url' => '#about'],
    ['label' => 'Чем занимаюсь', 'url' => '#services'],
    ['label' => 'Контакты', 'url' => '#contact'],
    ['label' => FA::icon('language') . ' English', 'url' => ['/site/index', 'language' => 'en']],
//    ['label' => FA::icon('external-link') . ' Проекты', 'url' => '//hub.solomaha.com', 'linkOptions' => [
//        'target' => '_blank',
//    ]],
];

echo Nav::widget([
    'options' => ['class' => 'navbar-nav navbar-right'],
    'encodeLabels' => false,
    'items' => $items,
]);

NavBar::end();
?>

<header id="who-am-i">
    <div class="header-content">
        <div class="header-content-inner">
            <h1>Alex Solomaha</h1>

            <hr class="light">

            <p>FullStack Web Developer, Embedded Developer</p>

            <a href="https://t.me/CyanoFresh" target="_blank" class="btn btn-primary btn-lg btn-social"
               title="Telegram">
                <i class="fa fa-fw fa-telegram"></i>
            </a>

            <a href="mailto:cyanofersh@gmail.com" target="_blank" class="btn btn-primary btn-lg"
               title="Написать на Email">
                <i class="fa fa-fw fa-envelope"></i>
            </a>

            <a href="https://github.com/CyanoFresh" target="_blank" class="btn btn-primary btn-lg"
               title="GitHub">
                <i class="fa fa-fw fa-github"></i>
            </a>
        </div>
    </div>

    <a href="https://docs.google.com/document/d/1dBKmKGlaVpKjP7XtOvBbSXMhaCjVuGLAdlrgPO5vbbc/edit?usp=sharing"
       target="_blank"
       class="btn btn-primary btn-lg btn-main"
       title="GitHub">
        <i class="fa fa-fw fa-file-text"></i>
        Резюме
    </a>
</header>

<section class="bg-dark" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="section-heading">Мои навыки</h2>

                <hr class="light">

                <p class="text-faded">Мои навыки и технологии, которые использую в работе:</p>

                <div class="skills">
                    <a class="skill" href="https://nodejs.org/" target="_blank">NodeJS</a>
                    <a class="skill" href="https://reactjs.org/" target="_blank">React</a>
                    <a class="skill" href="https://ru.wikipedia.org/wiki/PHP" target="_blank">PHP</a>
                    <a class="skill" href="https://ru.wikipedia.org/wiki/Yii" target="_blank">Yii 2 Framework</a>
                    <a class="skill" href="https://ru.wikipedia.org/wiki/WebSocket" target="_blank">Realtime Messaging</a>
                    <a class="skill" href="https://ru.wikipedia.org/wiki/JQuery" target="_blank">jQuery</a>
                    <a class="skill" href="https://ru.wikipedia.org/wiki/SQL" target="_blank">SQL Databases</a>
                    <a class="skill" href="https://ru.wikipedia.org/wiki/Git" target="_blank">Git</a>
                    <a class="skill"
                       href="https://ru.wikipedia.org/wiki/%D0%9F%D0%BE%D0%B8%D1%81%D0%BA%D0%BE%D0%B2%D0%B0%D1%8F_%D0%BE%D0%BF%D1%82%D0%B8%D0%BC%D0%B8%D0%B7%D0%B0%D1%86%D0%B8%D1%8F"
                       target="_blank">SEO & SMO</a>
                    <a class="skill" href="https://ru.wikipedia.org/wiki/Nginx" target="_blank">Nginx</a>
                    <a class="skill" href="https://ru.wikipedia.org/wiki/Ubuntu" target="_blank">Ubuntu Server</a>
                    <a class="skill" href="https://ru.wikipedia.org/wiki/Adobe_Photoshop" target="_blank">Adobe
                        Photoshop</a>
                    <a class="skill" href="https://ru.wikipedia.org/wiki/Adobe_Premiere_Pro" target="_blank">Adobe
                        Premiere
                        Pro</a>
                    <a class="skill" href="https://ru.wikipedia.org/wiki/%D0%98%D0%BD%D1%82%D0%B5%D1%80%D0%BD%D0%B5%D1%82_%D0%B2%D0%B5%D1%89%D0%B5%D0%B9" target="_blank">
                        IoT
                    </a>
                    <a class="skill" href="https://ru.wikipedia.org/wiki/ESP8266" target="_blank">
                        ESP8266
                    </a>
                </div>

                <a href="#services" class="btn btn-primary">Чем занимаюсь</a>
            </div>
        </div>
    </div>
</section>

<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Чем занимаюсь</h2>
                <hr class="primary">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-chrome text-primary"></i>
                    <h3>Frontend</h3>
                    <p class="text-muted">
                        Проектирование пользовательских интерфейсов, UX разработка.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-server text-primary"></i>
                    <h3>Backend</h3>
                    <p class="text-muted">
                        Проектирование и разработка веб приложений любой сложности.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-wifi text-primary"></i>
                    <h3 title="Internet of Things (Интернет вещей)">
                        IoT
                    </h3>
                    <p class="text-muted">
                        Разработка систем интернета вещей и систем умного дома под ключ.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-language text-primary"></i>
                    <h3>Telegram</h3>
                    <p class="text-muted">
                        Создание ботов для обратной связи, игр, каталогов и других целей.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<aside class="bg-dark" id="portfolio">
    <div class="container text-center">
        <div class="call-to-action">
            <h2>Мои работы можно увидеть здесь</h2>
            <a class="btn btn-primary btn-xl">Портфолио</a>
        </div>
    </div>
</aside>

<section id="contact">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading">Как со мной связаться</h2>
            <hr class="primary">
            <p>Для меня удобнее через мессенджеры - Telegram, Email. Также можно и по телефону, для
                интервью/знакомства</p>
        </div>
        <div class="row contact-ways">
            <div class="col-md-4 text-center contact-way">
                <i class="fa fa-telegram fa-3x"></i>
                <p><a href="https://t.me/CyanoFresh" target="_blank">t.me/CyanoFresh</a></p>
            </div>
            <div class="col-md-4 text-center contact-way">
                <i class="fa fa-envelope-o fa-3x"></i>
                <p><a href="mailto:cyanofresh@gmail.com">cyanofresh@gmail.com</a></p>
            </div>
            <div class="col-md-4 text-center contact-way">
                <i class="fa fa-phone fa-3x"></i>
                <p>+380975300688</p>
            </div>
        </div>
    </div>
</section>

<footer id="footer" class="bg-dark text-center">
    <div class="product-brand">Alex <span>Solomaha</span></div>
    <div class="project-belong">
        все проекты можно найти на <a target="_blank" class="product-brand"><span>Solomaha</span> Hub</a>
    </div>
</footer>
