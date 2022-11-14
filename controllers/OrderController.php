<?php

namespace vanitokurason\orderlist\controllers;

use vanitokurason\orderlist\models\OrderSearch;
use yii\web\Controller;


class OrderController extends Controller
{
    public function actionIndex()
    {
        $searchModel = new OrderSearch();
        $dataProvider = $searchModel->search($this->request->get());
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
}