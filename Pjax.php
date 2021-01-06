<?php

namespace denis909\yii;

class Pjax extends \yii\widgets\Pjax
{

    public $enablePushState = false;

    public $enableReplaceState = false;

    public $timeout = 0;

    public $linkSelector = false;

    public $formSelector = false;

}