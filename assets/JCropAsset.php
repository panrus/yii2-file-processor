<?php

namespace deanar\fileProcessor\assets;

use yii\web\AssetBundle;

class JCropAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower/jcrop/';

    public $js = [
        'js/Jcrop.min.js',
    ];
    public $css = [
        'css/Jcrop.min.css',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
