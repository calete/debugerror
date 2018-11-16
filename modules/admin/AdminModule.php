<?php

namespace app\modules\admin;
use Yii;
/**
 * admin module definition class
 */
class AdminModule extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'app\modules\admin\controllers';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
        Yii::$app->session->name = 'back';
        Yii::$app->user->loginUrl = ['/admin/default/index'];
    }
}
