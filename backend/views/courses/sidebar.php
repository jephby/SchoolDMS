<?php
/**
 * Created by PhpStorm.
 * User: Jephthah
 * Date: 6/15/2015
 * Time: 1:57 PM
 */

echo Nav::widget([

    'items' => [
        [
            'url' => ['/site/index'],
            'label' => 'Home',
            'icon' => 'home'
        ],
        [
            'url' => ['/admin/index'],
            'label' => 'Admin',
            'icon' => 'book'
        ],
    ],
]);
