<?php

use yii\helpers\Url;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $paid array */

$this->title = 'Котировки';
$this->registerJs("$('.labelPaid').tooltip()");

//\cs\services\VarDumper::dump($notPaid);
?>

<h1 class="page-header"><?= Html::encode($this->title) ?></h1>


<h2 class="page-header">Оплаченные котировки</h2>
<div class="row col-sm-12" style="margin-bottom: 40px; margin-top: 0;">
    <?php
    foreach ($paid as $item) {

        $class = new \app\models\Stock($item);
        ?>
        <div class="col-sm-4" style="margin-bottom: 30px;">
            <?php
            if (!is_null($item['logo'])) {
                echo Html::a(Html::img($item['logo'], [
                    'class' => 'thumbnail',
                    'style' => 'opacity: 1;',
                ]), [
                    'cabinet/stock_item3',
                    'id' => $item['id']
                ]);
            }
            ?>
            <p><?= $item['name'] ?></p>
        <span
            href="<?= Url::to(['cabinet_wallet/add', 'id' => $item['id']]) ?>"
            class="label label-success labelPaid"
            style="width: 100%"
            title="<?= 'до ' . \Yii::$app->formatter->asDate($item['date_finish']) ?>, осталось <?= \cs\services\DatePeriod::diff($item['date_finish']) ?>"

            >Оплачено</span>
        </div>
    <?php
    }?>
</div>


<h2 class="page-header">Заказать</h2>
<div class="row col-sm-12">
    <div class="col-sm-4 col-sm-offset-2" style="margin-bottom: 30px;">
        <center>
            <?php
            echo Html::a(Html::img('/images/cabinet/index/all-stok.png', [
                'class' => 'thumbnail',
                'width' => 200,
            ]), ['cabinet_wallet/add1']);
            ?>
            <p>Национальный рынок</p>
        </center>
        <a
            href="<?= Url::to(['cabinet_wallet/add1']) ?>"
            class="btn btn-primary"
            style="width: 100%;background-color: #aa719f;border: none;border-radius: 24px;"

            >Выбрать</a>
    </div>
    <div class="col-sm-4" style="margin-bottom: 30px;">
        <center>
            <?php
            echo Html::a(Html::img('/images/cabinet/index/all-stok.png', [
                'class' => 'thumbnail',
                'width' => 200,
            ]), ['cabinet_wallet/add2']);
            ?>
            <p>Международный рынок</p>
        </center>
        <a
            href="<?= Url::to(['cabinet_wallet/add2']) ?>"
            class="btn btn-primary"
            style="width: 100%;background-color: #aa719f;border: none;border-radius: 24px;"

            >Выбрать</a>
    </div>

</div>