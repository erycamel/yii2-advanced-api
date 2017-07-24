<?php

namespace api\modules\v1\controllers;
use yii\filters\Cors;
use yii\rest\ActiveController;

/**
 * Country Controller API
 *
 * @author Budi Irawan <deerawan@gmail.com>
 */
class CountryController extends ActiveController
{
    public $modelClass = 'api\modules\v1\models\Country';    

    // Override behaviors() untuk menambahkan \yii\filters\Cors
    public function behaviors(){
        $behaviors = parent::behaviors();
        
        // unset / hapus authenticator
        unset($behaviors['authenticator']);
        
        // tambahkan cors filter
        $behaviors['corsFilter'] = [
            'class' => Cors::className(),
        ];
        
        return $behaviors;
        
    }
}