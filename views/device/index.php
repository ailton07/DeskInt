<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DeviceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Devices';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="device-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Device', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'iddevices',
            'name',
            'ip',
            'security',
            'description',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
