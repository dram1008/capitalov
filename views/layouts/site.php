<?php

use yii\helpers\Url;
use yii\helpers\Html;

\app\assets\LayoutSite\Asset::register($this);

$this->registerMetaTag(['name' => 'og:image', 'content' => Url::to('/images/share.png', true)]);
$this->registerMetaTag(['name' => 'og:url', 'content' => Url::current()]);
$this->registerMetaTag(['name' => 'og:title', 'content' => $this->title]);
$this->registerMetaTag(['name' => 'og:description', 'content' => 'Эксклюзивные финансовые услуги анализа движения капиталов']);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <?= Html::csrfMetaTags() ?>
    <title><?= $this->title ?></title>
    <?php $this->head() ?>
    <link rel="shortcut icon" href="/images/kapitalovlogo1-2.png">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<?php $this->beginBody() ?>

<?= $this->render('_landing_nav') ?>


<!-- Page Content -->
<?php if (Yii::$app->requestedRoute == 'site/stock') { echo('<div>');} else {echo('<div class="container">');}?>


    <?= $content ?>

    <hr>

    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>© 2002 — <?= date('Y') ?> | www.kapitalov.com | Национальное Агентство Kapitalov | <?= $this->render('../blocks/telephone') ?></p>
            </div>
        </div>
    </footer>

</div>
<!-- /.container -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>