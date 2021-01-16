<?php

namespace emirhandeniz58\odeme\controllers;

use yii\web\Controller;

/**
 * Default controller for the `odeme` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
