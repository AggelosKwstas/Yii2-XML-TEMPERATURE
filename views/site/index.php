<?php

/** @var yii\web\View $this */

use dosamigos\chartjs\ChartJs;
use yii\helpers\Json;

$this->title = 'Graph example';
?>
<div class="site-index">
    <div class="body-content">
<?php
$labels = array();
foreach ($query as $item)
   $new = array_push($labels,$item->city_name);

$data = array();
foreach ($query as $item)
    $new = array_push($data,$item->temp);


?>
        <?= ChartJs::widget([
'type' => 'line',
'options' => [
    'height' => 400,
    'width' => 800,
],
'data' => [
    'labels' => $labels,
    'datasets' => [
        [
            'label' => "Temperatures acquired from xml/MySQL",
            'backgroundColor' => "rgba(0, 0, 0, 1)",
            'borderColor' => "rgba(255,99,132,1)",
            'pointBackgroundColor' => "rgba(255,99,132,1)",
            'pointBorderColor' => "#fff",
            'pointHoverBackgroundColor' => "#fff",
            'pointHoverBorderColor' => "rgba(255,99,132,1)",
            'data' => $data,
        ],
    ]
]
]); ?>
    </div>
</div>
