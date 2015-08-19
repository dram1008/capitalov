<?php

use yii\helpers\Url;
use yii\helpers\Html;

$this->title = 'Курсы';
?>

<h1 class="page-header"><?= Html::encode($this->title) ?></h1>



<table class="table" style="width:100%;">
    <?php
    foreach ($items as $item) {
        ?>
        <tr>
            <td>
                <a href="<?= Url::to([
                    'cabinet/stock_item',
                    'id' => $item['id']
                ]) ?>">
                    <?= $item['name'] ?>
                </a>
            </td>
        </tr>

    <?php
    }?>
</table>