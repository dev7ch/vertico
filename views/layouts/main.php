<?php 

use app\assets\ResourcesAsset;

ResourcesAsset::register($this);

$this->beginPage();
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->composition->language; ?>">
    <head>
        <title><?= $this->title; ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="author" content="luya.io">
        <?php $this->head() ?>
    </head>

    <body class="homepage">
    <div id="page-wrapper">

        <!-- Header -->
        <div id="header-wrapper">
            <header id="header" class="container">

                <!-- Logo -->
                <div id="logo">

                    <?= var_dump($this); exit; ?>
                    <h1><a href="<?= $this->publicHtml ?>"><?= $this->page->title; ?></a></h1>

                    <!-- <span>by HTML5 UP</span> -->
                </div>

                <!-- Nav -->
                <nav id="nav">
                    <ul>
                        <li class="current"><a href="<?= $this->publicHtml ?>">Welcome</a></li>
                        <li>
                            <a href="#">Dropdown</a>
                            <ul>
                                <li><a href="#">Lorem ipsum dolor</a></li>
                                <li><a href="#">Magna phasellus</a></li>
                                <li>
                                    <a href="#">Phasellus consequat</a>
                                    <ul>
                                        <li><a href="#">Lorem ipsum dolor</a></li>
                                        <li><a href="#">Phasellus consequat</a></li>
                                        <li><a href="#">Magna phasellus</a></li>
                                        <li><a href="#">Etiam dolore nisl</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Veroeros feugiat</a></li>
                            </ul>
                        </li>
                        <?php foreach (Yii::$app->menu->find()->where(['parent_nav_id' => 0, 'container' => 'default'])->all() as $item): ?>
                            <li <?php if ($item->isActive): ?>class="active"<?php endif;?>>
                                <a href="<?= $item->link; ?>"><?= $item->title; ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </nav>

            </header>
        </div>

        <!-- Page Content -->

        <?= $content ?>

        <!-- Footer -->
        <div id="footer-wrapper">
            <footer id="footer" class="container">
                <div class="row">
                    <div class="3u 6u(medium) 12u$(small)">

                        <!-- Links -->
                        <section class="widget links">
                            <h3>Random Stuff</h3>
                            <ul class="style2">
                                <li><a href="#">Etiam feugiat condimentum</a></li>
                                <li><a href="#">Aliquam imperdiet suscipit odio</a></li>
                                <li><a href="#">Sed porttitor cras in erat nec</a></li>
                                <li><a href="#">Felis varius pellentesque potenti</a></li>
                                <li><a href="#">Nullam scelerisque blandit leo</a></li>
                            </ul>
                        </section>

                    </div>
                    <div class="3u 6u$(medium) 12u$(small)">

                        <!-- Links -->
                        <section class="widget links">
                            <h3>Random Stuff</h3>
                            <ul class="style2">
                                <li><a href="#">Etiam feugiat condimentum</a></li>
                                <li><a href="#">Aliquam imperdiet suscipit odio</a></li>
                                <li><a href="#">Sed porttitor cras in erat nec</a></li>
                                <li><a href="#">Felis varius pellentesque potenti</a></li>
                                <li><a href="#">Nullam scelerisque blandit leo</a></li>
                            </ul>
                        </section>

                    </div>
                    <div class="3u 6u(medium) 12u$(small)">

                        <!-- Links -->
                        <section class="widget links">
                            <h3>Random Stuff</h3>
                            <ul class="style2">
                                <li><a href="#">Etiam feugiat condimentum</a></li>
                                <li><a href="#">Aliquam imperdiet suscipit odio</a></li>
                                <li><a href="#">Sed porttitor cras in erat nec</a></li>
                                <li><a href="#">Felis varius pellentesque potenti</a></li>
                                <li><a href="#">Nullam scelerisque blandit leo</a></li>
                            </ul>
                        </section>

                    </div>
                    <div class="3u 6u$(medium) 12u$(small)">

                        <!-- Contact -->
                        <section class="widget contact last">
                            <h3>Contact Us</h3>
                            <ul>
                                <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                                <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                                <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                                <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
                                <li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
                            </ul>
                            <p>1234 Fictional Road<br />
                                Nashville, TN 00000<br />
                                (800) 555-0000</p>
                        </section>

                    </div>
                </div>
                <div class="row">
                    <div class="12u">
                        <div id="copyright">
                            <ul class="menu">
                                <li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

    </div>

    <?php $this->endBody() ?>

    <!--[if lte IE 8]><script src="<?= $this->publicHtml ?>/assets/ie/respond.min.js"></script><![endif]-->

    </body>
</html>
<?php $this->endPage() ?>
