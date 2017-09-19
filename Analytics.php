<?php

namespace c006\analytics;

use Yii;
use yii\bootstrap\Widget;

class Analytics extends Widget
{

    /*
    IP Addresses to skip analytics
    ['10.10.1.2','192.168.1.45','8.8.8.2']

    I use it to skip my IP address so it's not added to analytics while working on the site
    */
    private $skip = [''];

    function run()
    {

        if (in_array($_SERVER['REMOTE_ADDR'], $this->skip) == FALSE) {
            return $this->render('index');
        }
    }


}
