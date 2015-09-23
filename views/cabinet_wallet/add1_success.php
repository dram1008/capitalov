<?php
use yii\helpers\Html;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;

/* @var $this yii\web\View */
/* @var $item \app\models\Stock */

$this->title = 'Котировка успешно куплена';
?>

<h1 class="page-header"><?= Html::encode($this->title) ?></h1>

<?php if ($item->getStatus() == 2) { ?>
    <span class="alert alert-success">Вы усешно оплатили</span>
<?php } else { ?>
    <span class="alert alert-success">Ваш график будет готов в течении от 3 до 14 дней.

Уведомление о готовности придет к вам на почту.
</span>
<?php } ?>