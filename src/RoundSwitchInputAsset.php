<?php

/**
 * @author Samuele Longhin
 */

namespace samuelelonghin\form\inputs;

use yii\web\AssetBundle;

/**
 * Round switch asset bundle.
 */
class RoundSwitchInputAsset extends AssetBundle
{
    public $sourcePath = '@samuelelonghin/form/inputs/assets';
    public $css = [
        'css/round-switch.css',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap5\BootstrapAsset', 
    ];
}