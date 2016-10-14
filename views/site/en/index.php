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
    ['label' => 'Skills', 'url' => '#about'],
    ['label' => 'What I am doing', 'url' => '#services'],
    ['label' => 'Contacts', 'url' => '#contact'],
    ['label' => FA::icon('language') . ' Русский', 'url' => ['/site/index', 'language' => 'ru']],
    ['label' => 'Projects ' . FA::icon('external-link'), 'url' => '//hub.solomaha.com', 'linkOptions' => [
        'target' => '_blank',
    ]],
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

            <p>Web Developer, Web Game Developer, Embedded Developer</p>

            <a href="https://vk.com/alexsolomaha" target="_blank" class="btn btn-primary btn-lg btn-social"
               title="Профиль ВКонтакте">
                <i class="fa fa-fw fa-vk"></i>
            </a>

            <a href="https://github.com/CyanoFresh" target="_blank" class="btn btn-primary btn-lg"
               title="Профиль ВКонтакте">
                <i class="fa fa-fw fa-github"></i>
            </a>

            <a href="mailto:cyanofersh@gmail.com" target="_blank" class="btn btn-primary btn-lg"
               title="Написать на Email">
                <i class="fa fa-fw fa-envelope"></i>
            </a>

            <a href="https://www.youtube.com/channel/UC9Fcko0zVnapJvSZh0wzaJw" target="_blank"
               class="btn btn-primary btn-lg" title="Канал YouTube">
                <i class="fa fa-fw fa-youtube-play"></i>
            </a>
        </div>
    </div>
</header>

<section class="bg-dark" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="section-heading">My Skills</h2>

                <hr class="light">

                <p class="text-faded">My skills and abilities which I use in my life&work:</p>

                <div class="skills">
                    <a class="skill" href="https://wikipedia.org/wiki/PHP" target="_blank">PHP</a>
                    <a class="skill" href="https://wikipedia.org/wiki/Yii" target="_blank">Yii 2 Framework</a>
                    <a class="skill"
                       href="https://en.wikipedia.org/wiki/Bootstrap_(front-end_framework)"
                       target="_blank">Bootstrap 3</a>
                    <a class="skill" href="https://wikipedia.org/wiki/HTML5" target="_blank">HTML5</a>
                    <a class="skill"
                       href="https://wikipedia.org/wiki/CSS"
                       target="_blank">CSS3</a>
                    <a class="skill" href="https://wikipedia.org/wiki/WebSocket" target="_blank">WebSockets</a>
                    <a class="skill" href="http://socketo.me/" target="_blank">RatchetPHP</a>
                    <a class="skill" href="https://wikipedia.org/wiki/JQuery" target="_blank">jQuery</a>
                    <a class="skill" href="https://wikipedia.org/wiki/AJAX" target="_blank">Ajax</a>
                    <a class="skill" href="https://wikipedia.org/wiki/MySQL" target="_blank">MySQL</a>
                    <a class="skill" href="https://wikipedia.org/wiki/Git" target="_blank">Git</a>
                    <a class="skill" href="https://wikipedia.org/wiki/GitHub" target="_blank">GitHub</a>
                    <a class="skill"
                       href="https://wikipedia.org/wiki/SEO"
                       target="_blank">SEO</a>
                    <a class="skill"
                       href="https://wikipedia.org/wiki/SMO"
                       target="_blank">SMO</a>
                    <a class="skill" href="https://wikipedia.org/wiki/Apache_HTTP_Server" target="_blank">Apache</a>
                    <a class="skill" href="https://wikipedia.org/wiki/Ubuntu" target="_blank">Linux Ubuntu</a>
                    <a class="skill" href="https://wikipedia.org/wiki/Linux" target="_blank">Terminal Linux</a>
                    <a class="skill" href="https://wikipedia.org/wiki/PhpStorm" target="_blank">PhpStorm</a>
                    <a class="skill" href="https://wikipedia.org/wiki/Adobe_Photoshop" target="_blank">Adobe
                        Photoshop</a>
                    <a class="skill" href="https://wikipedia.org/wiki/Adobe_Premiere_Pro" target="_blank">Adobe
                        Premiere
                        Pro</a>
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
                <h2 class="section-heading">What I am doing</h2>
                <hr class="primary">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-globe text-primary"></i>
                    <h3>Web Development</h3>
                    <p class="text-muted">
                        I am developing web sites any difficulty. The harder the better
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-wifi text-primary"></i>
                    <h3><abbr title="Internet of Things">IoT</abbr></h3>
                    <p class="text-muted">
                        I am developing IoT systems on the controller ESP8266 (Smart Home, Automation)
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-language text-primary"></i>
                    <h3>Translation</h3>
                    <p class="text-muted">
                        I know 3 languages: Ukrainian, Russian, English. I'd like to translate technical texts
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-youtube-play text-primary"></i>
                    <h3>Video</h3>
                    <p class="text-muted">
                        I like making videos, then mount it and then public on YouTube
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<aside class="bg-dark" id="portfolio">
    <div class="container text-center">
        <div class="call-to-action">
            <h2>My works you can find here</h2>
            <a href="//portfolio.solomaha.com" rel="nofollow" class="btn btn-primary btn-xl">Portfolio</a>
        </div>
    </div>
</aside>

<section id="contact">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading">Keep in touch</h2>
            <hr class="primary">
            <p>I prefer text messengers - VKontakte, Email, Hangouts. Also can receive phone calls for interviewing, but
                my speaking English is not so good</p>
        </div>
        <div class="row contact-ways">
            <div class="col-md-3 text-center contact-way">
                <i class="fa fa-vk fa-3x"></i>
                <p><a href="https://vk.com/alexsolomaha" target="_blank">vk.com/alexsolomaha</a></p>
            </div>
            <div class="col-md-3 text-center contact-way">
                <i class="fa fa-envelope-o fa-3x"></i>
                <p><a href="mailto:cyanofresh@gmail.com">cyanofresh@gmail.com</a></p>
            </div>
            <div class="col-md-3 text-center contact-way">
                <i class="fa fa-skype fa-3x"></i>
                <p>CyanoFresh</p>
            </div>
            <div class="col-md-3 text-center contact-way">
                <i class="fa fa-phone fa-3x"></i>
                <p>+380975300688</p>
            </div>
        </div>
    </div>
</section>

<footer id="footer" class="bg-dark text-center">
    <div class="product-brand">Alex <span>Solomaha</span></div>
    <div class="project-belong">
        all projects can be foun atd <a href="//hub.solomaha.com" target="_blank"
                                      class="product-brand"><span>Solomaha</span> Hub</a>
    </div>
</footer>
