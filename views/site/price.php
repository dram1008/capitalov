<?php

/** @var \yii\web\View $this */

$this->title = 'Тарифы';

use yii\helpers\Url;
$this->registerJs("$('.payImage').tooltip()");

?>

<!-- Page Heading/Breadcrumbs -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><?= \yii\helpers\Html::encode($this->title) ?></h1>
    </div>
</div>
<!-- /.row -->

<!-- Content Row -->
<div class="row">
    <div class="col-md-4">
        <div class="panel panel-default text-center">
            <div class="panel-heading">
                <h3 class="panel-title">Демонстрационный</h3>
            </div>
            <div class="panel-body">
                <span class="price"><sup>$</sup>0</span>
                <span class="period">до конца месяца</span>
            </div>
            <ul class="list-group">
                <li class="list-group-item"><strong>1</strong> Акция</li>
                <li class="list-group-item"><strong>Нет</strong> поддержки</li>
                <li class="list-group-item"><a href="<?= Url::to(['auth/registration']) ?>" class="btn btn-default"
                                               style="width:100%;">Получить!</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-success text-center">
            <div class="panel-heading">
                <h3 class="panel-title">Базовый <span class="label label-success">Национальный рынок</span></h3>
            </div>
            <div class="panel-body">
                <span class="price"><sup>$</sup>99</span>
                <span class="period">за месяц</span>
            </div>
            <ul class="list-group">
                <li class="list-group-item"><strong>1</strong> Акция</li>
                <li class="list-group-item"><strong>Есть</strong> поддержка</li>
                <li class="list-group-item"><a href="<?= Url::to(['auth/registration']) ?>" class="btn btn-success"
                                               style="width:100%;">Получить!</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-primary text-center">
            <div class="panel-heading">
                <h3 class="panel-title">Индивидуальный</h3>
            </div>
            <div class="panel-body">
                <span class="price"><sup>$</sup>249</span>
                <span class="period">за месяц</span>
            </div>
            <ul class="list-group">
                <li class="list-group-item"><strong>1</strong> Акция</li>
                <li class="list-group-item"><strong>Есть</strong> поддержка</li>
                <li class="list-group-item"><a href="<?= Url::to(['auth/registration']) ?>" class="btn btn-primary"
                                               style="width:100%;">Получить!</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-md-12">
        <p>Телефон для обратной связи: +7 499 394-27-43<br>National Agency of the Capitals</p>
    </div>
    <h2 class="page-header col-lg-12">Мы принимаем к оплате</h2>
    <div class="col-md-3">
        <img src="/images/site/price/yandex_money.jpg" width="200" class="thumbnail payImage" alt="Яндекс Деньги" title="Яндекс Деньги">
    </div>
    <div class="col-md-3">
        <img src="/images/site/price/mastercard.png" width="200" class="thumbnail payImage" alt="Банковские карты Master Card" title="Банковские карты Master Card">
    </div>
    <div class="col-md-3">
        <img src="/images/site/price/visa.png" width="200" class="thumbnail payImage" alt="Банковские карты Visa" title="Банковские карты Visa">
    </div>
    <div class="col-md-3">
        <img src="/images/site/price/terminal.jpg" width="200" class="thumbnail payImage" alt="Платежи через термиалы" title="Платежи через термиалы">
    </div>
    <div class="col-md-3">
        <img src="/images/site/price/webmoney.jpg" width="200" class="thumbnail payImage" alt="WebMoney" title="WebMoney">
    </div>
    <div class="col-md-3">
        <img src="/images/site/price/masterpass.png" width="200" class="thumbnail payImage" alt="MasterPass" title="MasterPass">
    </div>
    <div class="col-md-3">
        <img src="/images/site/price/alfa-click.jpg" width="200" class="thumbnail payImage" alt="Альфа-Клик" title="Альфа-Клик">
    </div>
    <div class="col-md-3">
        <img src="/images/site/price/psb.jpg" width="200" class="thumbnail payImage" alt="Промсвязьбанк" title="Промсвязьбанк">
    </div>


    <h2 class="page-header col-lg-12">Что мы можем предсказать</h2>
    <table class="table table-striped table-hover" style="width:auto;">
        <thead>
        <tr>
            <th>Биржа</th>
            <th>Котировка</th>
            <th>Цена</th>
            <th>Посмотреть</th>
        </tr>
        </thead>
        <?php foreach($items as $market) { ?>
            <tr>
                <td colspan="4">
                    <h2><?= $market['name'] ?></h2>
                </td>
            </tr>
        <?php foreach($market['stockList'] as $item) { ?>
        <tr>
            <td>
                <?= $market['name'] ?>
            </td>
            <td>
                <?= $item['name'] ?>
            </td>
            <td>
                <?= ($item['finam_market'] == 1) ? 99 : 249 ?> уе
            </td>
            <td>
                <?php if ($item['status'] == 0) { ?>
                    <span class="label label-default">Не расчитано</span>
                <?php } else if ($item['status'] == 1) { ?>
                    <span class="label label-warning">Расчитывается</span>
                <?php } else if ($item['status'] == 2) { ?>
                    <a class="btn btn-primary" href="<?= \yii\helpers\Url::to(['site/stock', 'id' => $item['id']]) ?>">Посмотреть</a>
                <?php } ?>
            </td>
        </tr>
        <?php } ?>
        <?php } ?>
    </table>
</div>
<!-- /.row -->
