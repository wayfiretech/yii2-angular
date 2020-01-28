<?php

namespace yii\angular;
use yii\web\AssetBundle;

/**
 * This is just an example.
 */
class AngularJsAsset extends AssetBundle
{
    public $sourcePath = '@bower/angular';

    public function init()
    {
        $this->js[] = YII_ENV_DEV ? 'angular.js' : 'angular.min.js';
    }
}
