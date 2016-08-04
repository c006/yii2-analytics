<?php

namespace c006\analytics;

use Yii;
use yii\bootstrap\Widget;

class Analytics extends Widget
{

    /* IP Addresses to skip analytics */
    private $skip = [''];

    function run()
    {

        if (in_array($_SERVER['REMOTE_ADDR'], $this->skip) == FALSE) {
            return $this->render('index');
        }
    }


}
