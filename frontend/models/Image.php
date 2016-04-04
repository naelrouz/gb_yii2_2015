<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\models;
use yii\base\Model;
/**
 * Description of Image
 *
 * @author nael
 */
class Image extends Model{
    //put your code here
    public static function getImageUrl() {
        
        return 'image.png';
        
    }
}
